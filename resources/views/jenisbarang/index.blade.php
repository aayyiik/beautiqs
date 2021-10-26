@extends('layouts.master') 

@section('content')

<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h3 class="panel-title">Data Jenis Barang</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Jenis
                </button>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                      <th>ID Jenis Barang</th>
                      <th>Jenis Barang</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($jenisbarangs as $jenisbarang)
                    <tr>
                        <td>{{ $jenisbarang->id_jb }}</td>
                        <td>{{ $jenisbarang->jenis_barang }}</td>
                        <td><a href="/jenisbarang/{{$jenisbarang->id_jb}}/edit" class="btn btn-warning btn-sm">Edit</a>
                          <a href="/jenisbarang/{{$jenisbarang->id_jb}}/delete"class="btn btn-danger btn-sm " 
                            onclick="return confirm ('Yakin mau dihapus ?')">Hapus</a>                    
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


