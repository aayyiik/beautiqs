<?php

namespace App\Http\Controllers;
use App\Models\Users;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $users = Users::all();
        return view('users.index',['user' => $users]);
    }

    public function create(Request $request){
        \App\Models\Users::create($request->all());
        return redirect ('/users')->with('sukses','Data Berhasil Diinput'); 
    }
         
    public function edit ($id_user){
        $users = \App\Models\Users::find($id_user);
        return view('users.edit',['users' => $users]);
    }

    public function update (Request $request,$id_user){
        $users = \App\Models\Users::find($id_user);
        $users->update($request->all());
        return redirect('/users')->with('sukses','Data Berhasil diupdate');
      }

    public function delete ($id_user){
        $users = \App\Models\Users::find($id_user);
        $users->delete($users);
        return redirect('/users')->with('sukses','Data Berhasil dihapus');
    }
}
