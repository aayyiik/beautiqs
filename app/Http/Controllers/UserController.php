<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index() {
        $users = Users::all();
        return view('users.index',['users' => $users]);
    }
    
    public function create(Request $request){
 
        //insert ke table user
        Users::create([

            'id_kota' => request('id_kota'),
            'id_role' => request('id_role'),
            'nama_user' => request('nama_user'),
            'alamat' => request('alamat'),
            'telp' => request('telp'),
            'email' => request('email'),    
            'password'=>bcrypt('rahasia'),
            'remember_token' => Str::random(10),
       ]);
      
      return redirect ('/users')->with('sukses','Data Berhasil Diinput');


      // 2
      //percobaan keseratus kali
        
     //   $user = new Users();
     //   $user->id_kota = $request->id_kota;
     //   $user->id_role = $request->id_role; 
     //   $user->nama_user = $request->nama_user;
    //    $user->alamat = $request->alamat;
    //    $user->telp =  $request->telp;
    //    $user->email =  $request->email;
    //    $user->remember_token=Str::random(60);
    //    $user->password = bcrypt('rahasia');
     //   $user->save();

        //$request->request->add(['password'=>$user->password=bcrypt('rahasia')]);
    //    $user = \App\Models\Users::create($request->all());


    // 3

      //  $user=Users::create([
       //   'id_kota'=> request('id_kota'),
       //   'id_role'=> request('id_role'),
      //      'nama_user'=>request('nama_user'),
      //    'alamat'  => request('alamat'),
      //    'telp'  => request('telp'),
     //     'email'  => request('email'),
     // ]);
     //  $user->password = bcrypt(request('rahasia'));
     //   $user->remember_token=Str::random(60);
     //   $user->save(); 
      
     //   return redirect ('/users')->with('sukses','Data Berhasil Diinput'); 
   // }

    
}
}
