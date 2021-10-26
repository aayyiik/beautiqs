@extends('layouts/master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Jenis Barang</h3>
                 @if(session('sukses'))
                  <div class="alert alert-success" role="alert">
                   {{session ('sukses')}}
                  </div>
                 @endif
                  <div class = 'row'>

                <form action="/kota/{{$kota->id_kota}}/update" method="POST">
                      
                  {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">ID Kota</label>
                       <input name="id_kota" type="integer" class="form-control" id="formGroupExampleInput" placeholder="id_kota" value="{{ $kota->id_kota }}">
                     </div>
                     <div class="mb-3">
                      <label for="formGroupExampleInput2" class="form-label">Jenis Barang</label>
                      <input name="kota" type="text" class="form-control" id="formGroupExampleInput2" placeholder="nama_kota" value="{{ $kota->kota}}">
                     </div>
                     

                      <button type="submit" class="btn btn-warning" >Submit</button>
        </form>
    </div>
  </div>
@stop