@extends('layouts.master') 

@section('content')
<!-- DATA YANG TELAH PEMESANAN -->
<div class="main">
  <div class="main-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <h2 class="panel-header">Transaksi Pemesanan</h2>
                    <div class="right">
                        <a class="fa fa-trash btn btn-success" href="pemesanan/datapemesanan" role="button">Tambah</a>
                    </div>
                        </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID Pesan</th>           
                                            <th>Tgl Pesan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Supplier</th>
                                            <th>Status</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pemesanan as $ps)
                                        <tr>
                                            <td>{{ $ps->id_pesan }}</td>
                                            <td>{{ $ps->tgl_pesan }}</td>
                                            <td>{{ $ps->user->nama_user }}</td>
                                            <td>{{ $ps->supplier->nama_sup }}</td>
                                            <td><label class="label {{ ($ps->status_pesan == 1) ? 'label-success' : 'label-danger'}}">{{ ($ps->status_pesan == 1)
                                            ? 'Lunas' : 'Belum Lunas' }}</label></td>
                                            <td> <a data-toggle="modal" data-target="#exampleModal" role="button" href="/pemesanan/{{$ps->id_pesan}}/terima" class="btn btn-warning btn-sm">Terima</a></td>                
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
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penerimaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="/DetailPenerimaan/create" method="GET">
           {{csrf_field()}}
          <div>
            <label for="formGroupExampleInput" class="form-label">ID Pemesanan</label>
            <input name="nama_role" type="text" class="form-control" id="formGroupExampleInput" placeholder="Jenis Role">
          </div>
          <div>
            <label for="formGroupExampleInput" class="form-label">TGL Terima</label>
            <input name="nama_role" type="text" class="form-control" id="formGroupExampleInput" placeholder="Jenis Role">
          </div>
          <div>
            <label for="formGroupExampleInput" class="form-label">Jumlah terima</label>
            <input name="nama_role" type="text" class="form-control" id="formGroupExampleInput" placeholder="Jenis Role">
          </div>
          <div>
            <label for="formGroupExampleInput" class="form-label">Total harga</label>
            <input name="nama_role" type="text" class="form-control" id="formGroupExampleInput" placeholder="Jenis Role">
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
