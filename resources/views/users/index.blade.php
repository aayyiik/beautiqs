@extends('layouts.master') 

@section('content')

  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="card-header">Data Users</h3>
                <div class="right">
                  <a class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button">Tambah</a>
                  <a class="fa fa-trash btn btn-info" href="users/trash" role="button">Sampah</a>
                </div>
                </div>
                <div class="panel-body">
                 <table class="table table-striped">
                  <thead>
                    <tr>
                        <th>Id User</th>
                        <th>Id Kota</th>
                        <th>Id Role</th>
                        <th>Nama user</th>
                        <th>Alamat User</th>
                        <th>No telp User</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th> AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($user as $user)
                      <tr>
                          <td>{{ $user->id_user }}</td>
                          <td>{{ $user->id_kota }}</td>
                          <td>{{ $user->id_role }}</td>
                          <td>{{ $user->nama_user }}</td>
                          <td>{{ $user->alamat_user}}</td>
                          <td>{{ $user->no_telp_user }}</td>
                          <td>{{ $user->username }}</td>
                          <td>{{ $user->password}}</td>
                          <td><a href="/users/{{$user->id_user}}/edit" class="btn btn-warning btn-sm">Edit</a>
                              <a href="/users/{{$user->id_user}}/delete"class="btn btn-danger btn-sm " 
                                onclick="return confirm ('Yakin mau dihapus ?')">Hapus</a>
                          </td>                         
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Barang Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/users/create" method="GET">
             {{csrf_field()}}
                  <div class="from-group">
                    <label for="formGroupExampleInput1" class="form-label">Id Kota</label>
                    <input name="id_kota" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Id Kota">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput2" class="form-label">Id Role</label>
                    <input name="id_role" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Id Role">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput3" class="form-label">Nama User</label>
                    <input name="nama_user" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama User">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput4" class="form-label">Alamat User</label>
                    <input name="alamat_user" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat User">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput5" class="form-label">Telp</label>
                    <input name="no_telp_user" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat User">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput6" class="form-label">Username</label>
                    <input name="username" type="text" class="form-control" id="formGroupExampleInput2" placeholder="No Telp User">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput6" class="form-label">Password</label>
                    <input name="password" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="No Telp User">
                  </div>
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input class="btn btn-primary" type="submit" value="Submit">
        </div>
      </div>
    </div>
  </div>  
  
  
@endsection 


      

