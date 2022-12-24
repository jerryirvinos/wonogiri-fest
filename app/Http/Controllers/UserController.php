<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
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
            $totalRecords = DB::table('users')->count();
            $totalRecordswithFilter = DB::table('users')
                ->join('roles', 'users.role', '=', 'roles.id')
                ->where(function ($query) use ($searchValue) {
                    $query->where('users.name', 'like', '%' . $searchValue . '%')
                        ->orWhere('users.identity_number', 'like', '%' . $searchValue . '%');
                })->count();


            $users = DB::table('users')
                ->join('roles', 'users.role', '=', 'roles.id')
                ->select('users.*', 'roles.name AS nama_role')
                ->where(function ($query) use ($searchValue) {
                    $query->where('users.name', 'like', '%' . $searchValue . '%')
                        ->orWhere('users.identity_number', 'like', '%' . $searchValue . '%');
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

        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
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
                'username' => 'required',
                'identity_number' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'role' => 'required',
            ],
            [
                'name.required' => 'Nama harus diisi!',
                'username.required' => 'username harus diisi!',
                'identity_number.required' => 'Nomor identitas harus diisi!',
                'address.required' => 'Alamat harus diisi!',
                'phone.required' => 'Nomor Telphone harus diisi!',
                'role.required' => 'Role harus diisi!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isExist = User::where('identity_number', $request->input('identity_number'))->first();

        if ($isExist) {
            return redirect('user')->with('warning', "Nomor Identitas sudah digunakan");
        }

        try {
            $user = User::create([
                'name' => strip_tags($request->input('name')),
                'username' => strip_tags($request->input('username')),
                'identity_number' => strip_tags($request->input('identity_number')),
                'address' => strip_tags($request->input('address')),
                'phone' => strip_tags($request->input('phone')),
                'role' => strip_tags($request->input('role')),
                'status' => true,
                'modified_by'=> session()->get('user')['name'],
                'password' => Hash::make('wonogirifest')
            ]);

            $user->save();
            return redirect()->route('user.index')->with('success', 'Berhasil Disimpan');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('warning', $e->getMessage());
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
        $user = User::find($id);
        $roles = Role::all();

        return view('user.edit', compact('roles', 'user'));
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
                'name' => 'required',
                'username' => 'required',
                'identity_number' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'role' => 'required',
            ],
            [
                'name.required' => 'Nama harus diisi!',
                'username.required' => 'Username harus diisi!',
                'identity_number.required' => 'Nomor identitas harus diisi!',
                'address.required' => 'Alamat harus diisi!',
                'phone.required' => 'Nomor Telphone harus diisi!',
                'role.required' => 'Role harus diisi!',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isExist = User::where('id', '!=', $id)
            ->where('identity_number', $request->input('identity_number'))->first();

        if ($isExist) {
            return redirect()->route('user.index')->with('warning', "Nomor Identitas sudah digunakan");
        }

        try {
            $user = User::find($id);

            $user->username =  strip_tags($request->input('username'));
            $user->name =  strip_tags($request->input('name'));
            $user->identity_number =  strip_tags($request->input('identity_number'));
            $user->address =  strip_tags($request->input('address'));
            $user->phone =  strip_tags($request->input('phone'));
            $user->role =  strip_tags($request->input('role'));
            $user->modified_by =  session()->get('user')['name'];
            $user->status =  true;

            $user->save();

            return redirect()->route('user.index')->with('success', 'Berhasil Diubah');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('warning', $e->getMessage());
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
        try {
            $user = User::find($id);

            $user->delete();
            return redirect()->route('user.index')->with('success', 'Berhasil Dihapus');
        } catch (\Exception $e) {
            return redirect()->route('user.index')->with('warning', $e->getMessage());
        }
    }

    public function loginProcess(Request $request)
    {
        $message = [
            'username.required' => 'Username Harus diisi',
            'password.required' => 'Password Harus diisi',
        ];

        $validator = Validator::make(
            $request->all(),
            [
                'username' => 'required',
                'password' => 'required',
            ],
            $message
        );
        $status = false;
        $msg = "Username/Pasword Salah";

        if ($validator->fails()) {
            $status = false;
            $msg = $validator;
        }

        $user = User::where('username', $request->input('username'))->first();
        if ($user) {
            if (Hash::check($request->input('password'), $user->password)) {
                $status = true;
                $msg = "Berhasil Login";

                $role = Role::where('id', $user->role)->first();

                $request->session()->flush();

                $request->session()->put('user', [
                    'user_id' => $user->id,
                    'username' => $user->username,
                    'name' => $user->name,
                    'identity_number' => $user->identity_number,
                    'role' => $user->role,
                    'role_name' => $role->name,
                    'is_login' => true,
                ]);
            }
        } else {
            $status = false;
            $msg = "Anda belum terdaftar";
        }

        return json_encode(['status' => $status, 'msg' => $msg]);
    }

    function logout(Request $request)
    {
        $request->session()->flush();

        return redirect()->route('landing.index');
    }
}
