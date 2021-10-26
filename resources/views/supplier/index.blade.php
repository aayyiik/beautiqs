@extends('layouts.master') 

@section('content')

  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Data Supplier</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Launch demo modal
                  </button>
                </div>
                <div class="panel-body">
                 <table class="table table-striped">
                  <thead>
                    <tr>
                        <th>Id Supplier</th>
                        <th>Id Kota</th>
                        <th>Nama Supplier</th>
                        <th>Alamat Suppplier</th>
                        <th>Telpon Supplier</th>
                        <th> AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($suppliers as $supplier)
                      <tr>
                          <td>{{ $supplier->id_sup }}</td>
                          <td>{{ $supplier->id_kota }}</td>
                          <td>{{ $supplier->nama_sup }}</td>
                          <td>{{ $supplier->alamat_sup}}</td>
                          <td>{{ $supplier->telp_sup }}</td>
                          <td><a href="/supplier/{{$supplier->kode_barang}}/edit" class="btn btn-warning btn-sm">Edit</a>
                              <a href="/supplier/{{$supplier->kode_barang}}/delete"class="btn btn-danger btn-sm " 
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
            <form action="/supplier/create" method="GET">
             {{csrf_field()}}
                  <div class="from-group">
                    <label for="formGroupExampleInput2" class="form-label">Id Kota</label>
                    <input name="id_kota" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Jenis Barang">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">Nama Supplier</label>
                    <input name="nama_sup" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">Alamat Supplier</label>
                    <input name="alamat_sup" type="text" class="form-control" id="formGroupExampleInput" placeholder="Stok">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput2" class="form-label">Telpon Supplier</label>
                    <input name = "telp_sup" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Harga Beli">
                  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input class="btn btn-primary" type="submit" value="Submit">
        </div>
      </div>
    </div>
  </div>  
   

@stop


