<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Bill;
use App\Models\Log;
use App\Models\Order;
use App\Models\Ticket_box;
use App\Models\Ticket_type;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class TicketController extends Controller
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
            $totalRecords = DB::table('orders')->where('payment_status', '=', '1')->count();
            $totalRecordswithFilter = DB::table('orders')
                ->join('ticket_types', 'ticket_types.id', '=', 'orders.ticket_type')
                ->where('payment_status', '=', '1')
                ->where(function ($query) use ($searchValue) {
                    $query->where('orders.ticket_code', 'like', '%' . $searchValue . '%')
                        ->orWhere('orders.name', 'like', '%' . $searchValue . '%');
                })->count();


            $data = DB::table('orders')
                ->select('orders.*', 'ticket_types.name AS ticket_name')
                ->join('ticket_types', 'ticket_types.id', '=', 'orders.ticket_type')
                ->where('payment_status', '=', '1')
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

        return view('ticket.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ticketTypes = Ticket_type::all();
        $banks = Bank::all();
        $ticketBoxs = Ticket_box::all();

        return view('ticket.create', compact('ticketTypes', 'banks', 'ticketBoxs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'identity_number' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'ticket_type' => 'required',
                'qty' => 'required',
                'email' => 'required',
            ],
            [
                'name.required' => 'Nama harus diisi!',
                'identity_number.required' => 'Nomor identitas harus diisi!',
                'address.required' => 'Alamat harus diisi!',
                'phone.required' => 'Nomor Telphone harus diisi!',
                'ticket_type.required' => 'Tipe ticket harus diisi!',
                'qty.required' => 'Jumlah ticket harus diisi!',
                'email.required' => 'Email harus diisi!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $ticket = Bill::create([
                'name' => strip_tags($request->input('name')),
                'identity_number' => strip_tags($request->input('identity_number')),
                'address' => strip_tags($request->input('address')),
                'phone' => strip_tags($request->input('phone')),
                'qty' => strip_tags($request->input('qty')),
                'email' => strip_tags($request->input('email')),
                'payment_status' => '1',
                'total_price' => strip_tags($request->input('total_price')),
                'total_pay' => strip_tags($request->input('total_price')),
                'ticket_type' => strip_tags($request->input('ticket_type')),
                'ticket_box' => ($request->input('ticket_box')),
                'code_ticket' => ($request->input('code_ticket')),
                'is_online' => 0,
            ]);

            $ticket->save();

            $ticketId = $ticket->id;

            $log = Log::create([
                'ticket_id' => $ticketId,
                'logs_status' => 'Terbayar',
                'modified_by' => 'AdminProgrammer',
            ]);

            $log->save();

            return redirect()->route('ticket.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('ticket.index')->with('warning', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::find($id);
        $visitors = Visitor::where('order_id', $order->id)->get();
        $ticket_type = Ticket_type::find($order->ticket_type);
        $banks = Bank::all();

        return view('ticket.show', compact('order', 'ticket_type', 'banks', 'visitors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function cetak(Request $request)
    {
        $id = Crypt::decryptString($request->id);
        
        // $data = Order::find($id)->get();
        $data = Order::where('id', $id)->get();
        $ticket_type = Ticket_type::find($data[0]->ticket_type)->get();
        // return view('ticket.pdf2',compact('data','ticket_type'));
        //titik
        $pdf = Pdf::loadView('ticket.pdf2', compact('data','ticket_type'));
        return $pdf->download('laporan-pdf.pdf');
    }
}
