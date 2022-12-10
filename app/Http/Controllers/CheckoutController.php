<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Order;
use App\Models\Ticket_type;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ticket_type = Ticket_type::find(Crypt::decryptString($request->id));
        $banks = Bank::where('status',1)->get();;
        $total = (int) $request->total;
        $hasil = (int) $ticket_type->price * (int) $total;

        return view('frontend.checkout.index',compact('ticket_type','total','hasil','banks'));
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
        $status = false;
        $msg = "gagal disimpan.!";

        $validator = Validator::make(
            $request->all(),
            [
                'identity_number_order' => 'required',
                'name_order' => 'required',
                'address_order' => 'required',
                'phone_order' => 'required',
                'email_order' => 'required',
                'ticket_type' => 'required',
            ],
            [
                'identity_number_order.required' => 'Nomor identitas harus diisi!',
                'name_order.required' => 'Nama harus diisi!',
                'address_order.required' => 'Alamat harus diisi!',
                'phone_order.required' => 'Nomor Telphone harus diisi!',
                'ticket_type.required' => 'Tipe ticket harus diisi!',
                'email_order.required' => 'Jumlah ticket harus diisi!',
                'ticket_type.required' => 'Jenis ticket harus diisi',
            ]
        );

        if ($validator->fails()) {
            $status = false;
            $msg = $validator;
            return json_encode(['status' => $status, 'msg' => $msg]);
        }

        try {
            $order = Order::create([
                'name' => strip_tags(strtoupper($request->input('name_order'))),
                'identity_number' => strip_tags($request->input('identity_number_order')),
                'address' => strip_tags($request->input('address_order')),
                'phone' => strip_tags($request->input('phone_order')),
                'qty' => strip_tags($request->input('qty')),
                'email' => strip_tags($request->input('email_order')),
                'payment_status' => '0',
                'total_pay' => strip_tags($request->input('total_price')),
                'ticket_type' => strip_tags($request->input('ticket_type')),
                'ticket_box' => ($request->input('ticket_box')),
                'code_ticket' => ($request->input('code_ticket')),
                'bank' => 1,
                'is_online' => 1,
            ]);

            $order->save();

            $orderId = $order->id;
            
            for ($i = 0; $i < count($request->identity_number); $i++) {
                $visitor[] = [
                    'order_id' => $orderId,
                    'identity_number' => $request->identity_number[$i],
                    'name' => strtoupper($request->name[$i]),
                    'address' => $request->address[$i],
                    'phone' => $request->phone[$i],
                    'email' => $request->email[$i],
                ];
            }

            Visitor::insert($visitor);
            $status = true;
            $msg = "Berhasil Disimpan";

            return json_encode(['status' => $status, 'msg' => $msg]);
        } catch (\Exception $e) {
            $status = false;
            $msg = $e->getMessage();
            return json_encode(['status' => $status, 'msg' => $msg]);
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

    public function transaction(Request $request)
    {
        dd($request);
        return view('frontend.checkout.index');
    }
}
