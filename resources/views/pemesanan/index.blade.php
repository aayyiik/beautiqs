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
              <p>Cari Data  :</p>
	              <form action="/kota/cari" method="GET">
		              <input type="text" name="cari" placeholder="Cari Kota .." value="{{ old('cari') }}">
		              <input type="submit" value="CARI">
	              </form>
                    <div class="right">
                        <a class="fa fa-plus btn btn-success" data-toggle="modal" data-target="#exampleModal" href="" role="button">Tambah</a>
                        <a class="fa fa-trash btn btn-info" href="kota/trash" role="button">Sampah</a>
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
                                            <td>{{ $ps->id_user }}</td>
                                            <td>{{ $ps->id_sup }}</td>
                                            <td><label class="label {{ ($ps->status_pesan == 1) ? 'label-success' : 'label-danger'}}">{{ ($ps->status_pesan == 1)
                                            ? 'PAID' : 'UN-PAID' }}</label></td>
                                            <td> </td>                
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            {{$pemesanan->links() }}
                        </div>
                    </div>
                </div>
            

<!-- FORM PEMESANAN -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
            <form>
                <div class="form-group">
                <label for="inputAddress"></label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                </div>
                <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                    Check me out
                    </label>
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>


            <!-- MODAL -->
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
                    <form action="/pemesanan/create" method="GET">
                    {{csrf_field()}}
                            <div class="from-group {{ $errors->has('nama_kota') ? 'has-error' : '' }}">
                                <label for="formGroupExampleInput" class="form-label">Nama Kota</label>
                                    <input name="nama_kota" type="integer" class="form-control" id="formGroupExampleInput2" 
                                    placeholder="nama kota" value="{{ old('nama_kota') }}">
                                @if($errors->has('nama_kota') )
                                    <span class="help-block">{{ $errors->first('nama_kota') }}</span>
                                @endif
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
