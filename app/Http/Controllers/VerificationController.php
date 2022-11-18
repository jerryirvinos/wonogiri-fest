<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Bill;
use App\Models\Ticket_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('verification.index');
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

        return view('verification.create', compact('ticketTypes','banks'));
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
                'bank' => 'required',
                'account_number' => 'required',
                // 'RBStatus' => 'required',
            ],
            [
                'name.required' => 'Nama harus diisi!',
                'identity_number.required' => 'Nomor identitas harus diisi!',
                'address.required' => 'Alamat harus diisi!',
                'phone.required' => 'Nomor Telphone harus diisi!',
                'ticket_type.required' => 'Tipe ticket harus diisi!',
                'qty.required' => 'Jumlah ticket harus diisi!',
                'bank.required' => 'Bank harus diisi!',
                'account_number.required' => 'Nomor rekening harus diisi!',
                // 'RBStatus.required' => 'status bayar harus diisi!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $user = Bill::create([
                'name' => strip_tags($request->input('name')),
                'identity_number' => strip_tags($request->input('identity_number')),
                'address' => strip_tags($request->input('address')),
                'phone' => strip_tags($request->input('phone')),
                'qty' => strip_tags($request->input('qty')),
                'total_price' => strip_tags($request->input('total_price')),
                'account_number' => strip_tags($request->input('account_number')),
                'bank' => strip_tags($request->input('bank')),
                'ticket_type' => strip_tags($request->input('ticket_type')),
                'branch' => 'AD',
            ]);

            $user->save();
            return redirect()->route('verification.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('verification.index')->with('warning', $e->getMessage());
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
