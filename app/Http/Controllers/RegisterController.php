<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Exception;

class RegisterController extends Controller
{
    public function view(){
        return view('Register-User');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->pass;
        $role = "user";

        $request->validate([
            'name' => 'required',
            'pass' => 'required|alpha_dash|min:7|confirmed',
            'email' => 'unique:App\User,email|required'
        ]);

        User::create
        ([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => $role
        ]);
        $request->session()->flash('oldname',$name);
        $request->session()->flash('oldemail',$email);
        return redirect()->route('register.user')->with('insert','Data Berhasil Tersimpan');
    }
}
