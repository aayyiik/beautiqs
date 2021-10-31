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
                <a class="btn btn-primary" href="/kota" role="button">Kembali</a>
              </div>
              <div class="pull-right">
                </a>
              </div>
              <div class="panel-body">
               <table class="table table-striped">
                <thead>
                  <tr>
                      <th>ID Kota</th>
                      <th>Kota</th>
                      <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($kotas as $kota)
                    <tr>
                        <td>{{ $kota->id_kota }}</td>
                        <td>{{ $kota->kota }}</td>
                        <td><a href="/kota/{{$kota->id_kota}}/restore" class="btn btn-warning btn-sm">Pulihkan</a>
                            <a href="/kota/{{$kota->id_kota}}/forceDelete"class="btn btn-danger btn-sm " 
                            onclick="return confirm ('Data akan dihapus permanen ?')">Hapus</a>
                            
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

