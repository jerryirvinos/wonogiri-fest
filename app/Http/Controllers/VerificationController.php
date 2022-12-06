<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Bill;
use App\Models\Log;
use App\Models\Order;
use App\Models\Ticket_type;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $totalRecords = DB::table('orders')->where('is_online','=','1')->where('payment_status','=','0')->count();
            $totalRecordswithFilter = DB::table('orders')
                ->join('ticket_types', 'ticket_types.id', '=', 'orders.ticket_type')
                ->where('is_online','=','1')
                ->where('payment_status','=','0')
                ->where(function ($query) use ($searchValue) {
                    $query->where('orders.ticket_code', 'like', '%' . $searchValue . '%')
                        ->orWhere('orders.name', 'like', '%' . $searchValue . '%');
                })->count();


            $data = DB::table('orders')
                ->select('orders.*','ticket_types.name AS ticket_name')
                ->join('ticket_types', 'ticket_types.id', '=', 'orders.ticket_type')
                ->where('is_online','=','1')
                ->where('payment_status','=','0')
                ->where(function ($query) use ($searchValue) {
                    $query->where('orders.ticket_code', 'like', '%' . $searchValue . '%')
                        ->orWhere('orders.name', 'like', '%' . $searchValue . '%');
                })
                ->skip($start)
                ->take($rowperpage)
                ->orderBy($columnName, $columnSortOrder)
                ->get();

            $output = array(
                "draw" => $draw,
                "recordsTotal" => $totalRecords,
                "recordsFiltered" => $totalRecordswithFilter,
                "data" => $data,
            );
            return $output;
        }

        return view('verification.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        $ticket_type = Ticket_type::find($order->ticket_type);
        $visitors = Visitor::where('order_id',$order->id)->get();
        $banks = Bank::all();

        return view('verification.edit', compact('order','ticket_type','banks','visitors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'payment_status' => 'required',
                'account_number' => 'required',
                'bank' => 'required',
                'generateQr' => 'required',
            ],
            [
                'payment_status.required' => 'Status harus diisi!',
                'account_number.required' => 'Nomor Rekening harus diisi!',
                'bank.required' => 'Bank harus diisi!',
                'generateQr.required' => 'Silahkan generate QR terlebih dahulu',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        try {
            $ticket = Order::find($id);

            $ticket->payment_status = '1';
            $ticket->account_number = strip_tags($request->input('account_number'));
            $ticket->account_name = strip_tags($request->input('account_name'));
            $ticket->bank = strip_tags($request->input('bank'));

            $ticket->save();
            
            $log = Log::create([
                'ticket_id' => $id,
                'logs_status' => 'Terbayar',
                'modified_by' => 'AdminProgrammer',
            ]);

            $log->save();

            return redirect()->route('verification.index')->with('success', 'Berhasil Diubah');
        } catch (\Exception $e) {
            return redirect()->route('verification.index')->with('warning', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
