<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('dashboard/user',compact('data'));
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
        $name = $request->name;
        $namebelakang = $request->namebelakang;
        $email = $request->email;
        $password = $request->pass;
        $role = $request->role;
        
        
        $request->validate([
            'name' => 'required',
            'namebelakang' => 'nullable',
            'pass' => 'required|alpha_dash|min:7|confirmed',
            'email' => 'unique:App\User,email|required'
        ]);
        
        User::create
        ([
            'name' => $name." ".$namebelakang,
            'email' => $email,
            'password' => $password,
            'role' => $role
        ]);

        return redirect()->route('dashboard.user')->with('insert','Data Berhasil Tersimpan');

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
     * @param  \App\User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard/user-edit',['data' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        
        $name = $request->username;
        $email = $request->email;
        $password = $request->password;
        $role = $request->role;

        $request->validate([
            'username' => 'required',
            'password' => 'required|alpha_dash|min:7',
            'role' => 'required'
        ]);

        $update = User::where('id', $user->id)
        ->update([
         'name' => $name,
         'email' => $email,
         'password' => $password,
         'role' => $role,
        ]);

        if($update){
            return redirect()->route('dashboard.user')->with('edit','Data berhasil di Edit');
        }
        else{
            return redirect()->route('dashboard.user');
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
        User::destroy($id);
        return redirect()->route('dashboard.user')->with('delete','Data Berhasil Dihapus');
    }
}
