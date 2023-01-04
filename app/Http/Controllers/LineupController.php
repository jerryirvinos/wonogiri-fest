<?php

namespace App\Http\Controllers;

use App\Models\Line_up;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;

class LineupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            return Line_up::orderBy('orders', 'ASC')->get();
        }

        return view('lineup.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lineup.create');
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
                'title' => 'required',
            ],
            [
                'title.required' => 'Judul harus diisi!',
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

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $lineup = Line_up::create([
                'title' => ($request->input('title')),
                'thumbnail' => $thumbnail,
                'status' => true,
                'is_release' => true,
            ]);

            $lineup->save();
            return redirect()->route('lineup.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('lineup.index')->with('warning', $e->getMessage());
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
        $lineup = Line_up::find($id);

        return view('lineup.edit', compact('lineup'));
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
        $data = $request->except('_token', '_method', 'status', 'is_release', 'thumbnail_remove', 'thumbnail');
        if ($request->status) {
            $status = $request->only('status')['status'] == 'true' ? true : false;
            $data = array_merge(['status' => $status], $data);
        }

        if ($request->is_release) {
            $hsil = $request->only('is_release')['is_release'] == 'true' ? true : false;
            $data = array_merge(['is_release' => $hsil], $data);
        }

        if ($request->hasFile('thumbnail')) {
            $imageName = substr(renameFiles(pathinfo($request->thumbnail->getClientOriginalName(), PATHINFO_FILENAME)), 0, 40) . time() . '.' . $request->thumbnail->extension();
            $pathThumbnail = $request->thumbnail->storeAs('public', $imageName);
            if ($pathThumbnail) {
                $thumbnail = URL::asset('storage/' . $imageName);
                $data = array_merge(['thumbnail' => $thumbnail], $data);
            }
        }

        try {
            Line_up::where('id', $id)
                ->update($data);

            return redirect()->route('lineup.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('lineup.index')->with('warning', $e->getMessage());
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

    public function save_order(Request $request)
    {
        try {
            if (request()->input('menu')) {
                $lists = json_decode(request()->input('menu'));
    
                foreach ($lists as $key => $val) {
                    Line_up::where('id', $val->id)
                    ->update(['orders' => $key + 1]);
                }
            }

            return redirect()->route('lineup.index')->with('success', 'Berhasil Diurutkan');
        } catch (\Exception $e) {
            return redirect()->route('lineup.index')->with('warning', $e->getMessage());
        }
    }
}
