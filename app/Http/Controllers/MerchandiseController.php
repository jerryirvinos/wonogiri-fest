<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;

class MerchandiseController extends Controller
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
            $totalRecords = DB::table('merchandises')->count();
            $totalRecordswithFilter = DB::table('merchandises')
                ->where(function ($query) use ($searchValue) {
                    $query->where('merchandises.code', 'like', '%' . $searchValue . '%')
                        ->orWhere('merchandises.price', 'like', '%' . $searchValue . '%');
                })->count();


            $users = DB::table('merchandises')
                ->where(function ($query) use ($searchValue) {
                    $query->where('merchandises.code', 'like', '%' . $searchValue . '%')
                    ->orWhere('merchandises.price', 'like', '%' . $searchValue . '%');
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

        return view('merchandise.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('merchandise.create');
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
                'link' => 'required',
                'price' => 'required',
            ],
            [
                'code.required' => 'Kode harus diisi!',
                'link.required' => 'Link WA harus diisi!',
                'price.required' => 'harga harus diisi!',
            ]
        );
        $thumbnail = null;
        $path = null;
        if ($request->hasFile('thumbnail')) {
            $imageName = substr(renameFiles(pathinfo($request->thumbnail->getClientOriginalName(), PATHINFO_FILENAME)), 0, 40) . time() . '.' . $request->thumbnail->extension();
            $pathThumbnail = $request->thumbnail->storeAs('public', $imageName);
            if ($pathThumbnail) {
                $thumbnail = URL::asset('storage/' . $imageName);
            }
        }

        if ($request->hasFile('path')) {
            $imageName = substr(renameFiles(pathinfo($request->path->getClientOriginalName(), PATHINFO_FILENAME)), 0, 40) . time() . '.' . $request->path->extension();
            $pathPath = $request->path->storeAs('public', $imageName);
            if ($pathPath) {
                $path = URL::asset('storage/' . $imageName);
            }
        }

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        try {
            $merchandise = Merchandise::create([
                'code' => ($request->input('code')),
                'price' => strip_tags($request->input('price')),
                'link' => strip_tags($request->input('link')),
                'thumbnail' => $thumbnail,
                'path' => $path,
                'status' => true,
            ]);

            $merchandise->save();
            return redirect()->route('merchandise.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('merchandise.index')->with('warning', $e->getMessage());
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
        $merchandise = Merchandise::find($id);

        return view('merchandise.edit', compact('merchandise'));
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
        $data = $request->except('_token', '_method', 'status','thumbnail_remove','thumbnail','path','path_remove');
        if ($request->status) {
            $status = $request->only('status')['status'] == 'true' ? true : false;
            $data = array_merge(['status' => $status], $data);
        }

        if ($request->hasFile('thumbnail')) {
            $imageName = substr(renameFiles(pathinfo($request->thumbnail->getClientOriginalName(), PATHINFO_FILENAME)), 0, 40) . time() . '.' . $request->thumbnail->extension();
            $pathThumbnail = $request->thumbnail->storeAs('public', $imageName);
            if ($pathThumbnail) {
                $thumbnail = URL::asset('storage/' . $imageName);
                $data = array_merge(['thumbnail' => $thumbnail], $data);
            }
        }

        if ($request->hasFile('path')) {
            $imageName = substr(renameFiles(pathinfo($request->path->getClientOriginalName(), PATHINFO_FILENAME)), 0, 40) . time() . '.' . $request->path->extension();
            $pathPath = $request->path->storeAs('public', $imageName);
            if ($pathPath) {
                $path = URL::asset('storage/' . $imageName);
                $data = array_merge(['path' => $path], $data);
            }
        }
        try {
            Merchandise::where('id', $id)
            ->update($data);
            
            return redirect()->route('merchandise.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('merchandise.index')->with('warning', $e->getMessage());
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
