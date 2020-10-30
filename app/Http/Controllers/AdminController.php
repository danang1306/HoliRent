<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(request $request){
        return view('dashboard/login');
    }

    public function check(request $request){
        $request->validate([
            'email' => 'required',
            'pass' => 'required',
        ]);

        
        $email = $request->email;
        $password = $request->pass;
        $users_count = User::where('email',$email)
        ->where('password',$password)
        ->count();
        if($users_count <= 0){
            return redirect()->route('dashboard.login')->with('fail','Email atau Password salah')->with('oldemail',$email);    
        }

        $data = User::where('email',$email)
        ->where('password',$password)
        ->get();
        foreach($data as $datas):
            $name = $datas->name;
            $email = $datas->email;
            $role = $datas->role;
        endforeach;
        $request->session()->put('name',$name);
        $request->session()->put('email',$email);
        $request->session()->put('role',$role);
        $request->session()->put('status','login');

        return redirect()->route('dashboard');
    }

    public function dashboard(request $request){
        $name = $request->session()->get('name');
        $email = $request->session()->get('email'); 
        return view('dashboard/index',compact('name','email'));
    }

    public function logout(request $request){
        $request->session()->forget(['name', 'email','role','status']);

        $request->session()->flush();
        return redirect()->route('dashboard.login')->with('logout','Anda Berhasil Logout');
    }
}
