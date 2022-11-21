<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Bill;
use App\Models\Ticket_box;
use App\Models\Ticket_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        return view('ticket.create', compact('ticketTypes','banks','ticketBoxs'));
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
        // dd($request);
        try {
            $user = Bill::create([
                'name' => strip_tags($request->input('name')),
                'identity_number' => strip_tags($request->input('identity_number')),
                'address' => strip_tags($request->input('address')),
                'phone' => strip_tags($request->input('phone')),
                'qty' => strip_tags($request->input('qty')),
                'email' => strip_tags($request->input('email')),
                'payment_status' => '1',
                'total_price' => strip_tags($request->input('total_price')),
                'ticket_type' => strip_tags($request->input('ticket_type')),
                'ticket_box' => ($request->input('ticket_box')),
                'code_ticket' => ($request->input('code_ticket')),
            ]);

            $user->save();
            return redirect()->route('ticket.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            dd($e);
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
}
