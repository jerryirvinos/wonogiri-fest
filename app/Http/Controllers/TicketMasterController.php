<?php

namespace App\Http\Controllers;

use App\Models\Ticket_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TicketMasterController extends Controller
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
            $search_arr = $request->get('search');
            $searchValue = $search_arr['value']; // S
            $totalRecords = DB::table('ticket_types')->count();
            $totalRecordswithFilter = DB::table('ticket_types')
                ->where(function ($query) use ($searchValue) {
                    $query->where('ticket_types.name', 'like', '%' . $searchValue . '%')
                        ->orWhere('ticket_types.price', 'like', '%' . $searchValue . '%')
                        ->orWhere('ticket_types.code', 'like', '%' . $searchValue . '%')
                        ->orWhere('ticket_types.title', 'like', '%' . $searchValue . '%')
                        ->orWhere('ticket_types.detail', 'like', '%' . $searchValue . '%');
                })->count();


            $users = DB::table('ticket_types')
                ->where(function ($query) use ($searchValue) {
                    $query->where('ticket_types.name', 'like', '%' . $searchValue . '%')
                    ->orWhere('ticket_types.price', 'like', '%' . $searchValue . '%')
                    ->orWhere('ticket_types.code', 'like', '%' . $searchValue . '%')
                    ->orWhere('ticket_types.title', 'like', '%' . $searchValue . '%')
                    ->orWhere('ticket_types.detail', 'like', '%' . $searchValue . '%');
                })
                ->skip($start)
                ->take($rowperpage)
                ->get();

            $output = array(
                "draw" => $draw,
                "recordsTotal" => $totalRecords,
                "recordsFiltered" => $totalRecordswithFilter,
                "data" => $users,
            );
            return $output;
        }

        return view('tickettype.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickettype.create');
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
                'code' => 'required',
                'name' => 'required',
                'price' => 'required',
            ],
            [
                'code.required' => 'Kode harus diisi!',
                'name.required' => 'nama harus diisi!',
                'price.required' => 'harga harus diisi!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isExist = Ticket_type::where('code', $request->input('code'))->first();

        if ($isExist) {
            return redirect()->back()->with('warning', "Kode sudah digunakan");
        }
        
        try {
            $ticket = Ticket_type::create([
                'name' => strip_tags($request->input('name')),
                'code' => ($request->input('code')),
                'price' => strip_tags($request->input('price')),
                'title' => strip_tags($request->input('title')),
                'detail' => strip_tags($request->input('detail')),
                'quota' => 0,
                'status' => true,
                'is_release'=> true,
            ]);

            $ticket->save();
            return redirect()->route('tickettype.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('tickettype.index')->with('warning', $e->getMessage());
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
        $ticket = Ticket_type::find($id);

        return view('tickettype.edit', compact('ticket'));
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
        $data = $request->except('_token', '_method', 'status','is_release');
        if ($request->status) {
            $status = $request->only('status')['status'] == 'true' ? true : false;
            $data = array_merge(['status' => $status], $data);
        }

        if ($request->is_release) {
            $hsil = $request->only('is_release')['is_release'] == 'true' ? true : false;
            $data = array_merge(['is_release' => $hsil], $data);
        }
        
        try {
            Ticket_type::where('id', $id)
            ->update($data);

            return redirect()->route('tickettype.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('tickettype.index')->with('warning', $e->getMessage());
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
