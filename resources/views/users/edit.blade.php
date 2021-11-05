@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Users</h3>
                 @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                   {{session ('sukses')}}
                  </div>
                 @endif
                  <div class = 'row'>

                <form action="/users/{{$users->id_user}}/update" method="POST">
                      
                  {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">Id User</label>
                       <input name="id_user" type="integer" class="form-control" id="formGroupExampleInput" placeholder="Id Supplier" value="{{ $users->id_user }}">
                     </div>
                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Id Role</label>
                      <input name="id_role" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Id Kota" value="{{ $users->id_role}}">
                    </div>
                     <div class="mb-3">
                       <label for="formGroupExampleInput2" class="form-label">Nama User</label>
                       <input name="nama_user" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Supplier" value="{{ $users->nama_user }}">
                     </div>
                     <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">username</label>
                        <input name="alamat_user" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Username" value="{{ $users->username}}">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Password</label>
                        <input name="no_telp_user" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password" value="{{ $users->password}}">
                      </div>
                      <button type="submit" class="btn btn-sm"><i class="fa fa-pencil"></i>Submit</button>
                      
        </form>
    </div>
  </div>
@endsection



 
      

