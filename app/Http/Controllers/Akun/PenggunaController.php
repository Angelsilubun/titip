<?php

namespace App\Http\Controllers\Akun;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use App\Models\Akun\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = [
            "user" => User::get(),
            "role" => Role::all()
        ];

        return view('superadmin.akun.pengguna.index', $data);
    }

    public function store(Request $request)
    {
        // request()->validate([
        //     'name'       => 'required|string|min:2|max:100',
        //     'email'      => 'required|email|unique:users,email, ' . $id . ',id',
        //     'password' => 'nullable|required_with:old_password|string|confirmed|min:6',
        //     'id_role' => 'required',
        // ]);
        dd($request->all());
        $this->validate($request, [
            'name'       => 'required|string|min:2|max:100',
            'email'      => 'required|email|unique:users,email,id',
            'email'      => 'required|string|min:10:max:255',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:6',
            'id_role' => 'required',
        ]);
        // $user = User::find($id);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'email' => $request->alamat,
            'password' => bcrypt($request->password),
            'id_role' => $request->id_role,
        ]);

        return back()->with('berhasil', 'Pengguna baru telah ditambahkan');
    }

    public function edit(Request $request)
    {
        $data = [
            "edit" => User::where("id", $request->id)->first(),
            "role" => Role::all()
        ];

        return view("superadmin.akun.pengguna.edit", $data);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name'       => 'required|string|min:2|max:100',
            'email'      => 'required|email|unique:users,email, ' . $id . ',id',
            'alamat'       => 'required|string|min:10|max:255',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:6',
            'id_role' => 'required',

        ]);

        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->id_role = $request->id_role;

        if ($request->filled('old_password')) { //update password lama ke baru
            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()
                    ->withErrors(['old_password' => __('Please enter the correct password')])
                    ->withInput();
            }
        }
        // User::where("id", $request->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        //     'id_role' => $request->id_role,
        // ]);
        $user->save();

        return back()->with('status', 'Pengguna berhasil di updated!');
    }

    public function show(Request $request)
    {
        $data = [
            "detail" => User::where("id", $request->id)->first()
        ];

        return view("superadmin.akun.pengguna.detail", $data);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('berhasil');
    }
}
