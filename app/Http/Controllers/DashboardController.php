<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Ticket_type;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $draw = $request->get('draw');
            $start = $request->get("start");
            $rowperpage = $request->get("length"); // Rows display per page

            $columnIndex_arr = $request->get('order');
            $columnName_arr = $request->get('columns');
            $order_arr = $request->get('order');
            $search_arr = $request->get('search');

            $columnIndex = $columnIndex_arr[0]['column']; // Column index
            $columnName = $columnName_arr[$columnIndex]['data']; // Column namearr);
            $columnSortOrder = $order_arr[0]['dir']; // asc or desc
            $searchValue = $search_arr['value']; // S
            $totalRecords = DB::table('orders')->count();
            $totalRecordswithFilter = DB::table('orders')
                ->join('ticket_types', 'ticket_types.id', '=', 'orders.ticket_type')
                ->where(function ($query) use ($searchValue) {
                    $query->where('orders.ticket_code', 'like', '%' . $searchValue . '%')
                        ->orWhere('orders.name', 'like', '%' . $searchValue . '%');
                })->count();


            $data = DB::table('orders')
                ->select('orders.*', 'ticket_types.name AS ticket_name', 'ticket_types.title AS ticket_title', 'ticket_types.detail AS ticket_detail')
                ->join('ticket_types', 'ticket_types.id', '=', 'orders.ticket_type')
                ->where(function ($query) use ($searchValue) {
                    $query->where('orders.ticket_code', 'like', '%' . $searchValue . '%')
                        ->orWhere('orders.name', 'like', '%' . $searchValue . '%');
                })
                ->skip($start)
                ->take(10)
                ->orderBy('created_at', 'DESC')
                ->get();

            $output = array(
                "draw" => $draw,
                "recordsTotal" => $totalRecords,
                "recordsFiltered" => $totalRecordswithFilter,
                "data" => $data,
            );
            return $output;
        }

        $tickets = Ticket_type::where('status', 1)->get();
        if ($request->filter == 'Semua' || !$request->filter) {
            $ticketSold = Order::where('payment_status', '1')->count();
            $ticketSoldToday = Order::where('payment_status', '0')->count();
            $income = Order::where('payment_status', '1')->sum('total_pay');
        }

        if ($request->filter) {
            $ticketSold = Order::where('payment_status', '1')->where('ticket_type', $request->filter)->count();
            $ticketSoldToday = Order::where('payment_status', '0')->where('ticket_type', $request->filter)->count();
            $income = Order::where('payment_status', '1')->where('ticket_type', $request->filter)->sum('total_pay');
        }

        return view('dashboard.index', compact('tickets', 'ticketSold', 'ticketSoldToday', 'income'));
    }
}
