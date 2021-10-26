<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::all();
        return view('role.index',['roles' => $roles]);
    }

    public function edit ($id_role){
        $role = \App\Models\Role::find($id_role);
        return view('role/edit',['role' => $role]);
    }

    public function update (Request $request,$id_role){
        $role = \App\Models\Role::find($id_role);
        $role->update($request->all());
        return redirect('/role')->with('sukses','Data Berhasil diupdate');
    }

    public function delete ($id_role){
        $role = \App\Models\Role::find($id_role);
        $role->delete($role);
        return redirect('/role')->with('sukses','Data Berhasil dihapus');
    }
}
