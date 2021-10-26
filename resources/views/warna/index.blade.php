@extends('layouts.master') 

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Data Kota</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Kota
                </button>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID Supplier</th>
                    <th>ID Kota</th>
                    <th>Nama Supplier</th>
                    <th>Alamat Supplier</th>
                    <th>Telp Supplier</th>
                    <th> AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->id_sup }}</td>
                        <td>{{ $supplier->id_kota }}</td>
                        <td>{{ $supplier->nama_sup }}</td>
                        <td>{{ $supplier->alamat_sup }}</td>
                        <td>{{ $supplier->telp_sup }}</td>
                        <td><a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
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

@stop


