@extends('layouts.master') 

@section('content')
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <form action="" class="select"></form>
            <div class="card">
                    <div class="card-header">TRANSAKSI BARANG</div>
                    <div class="card-body">
                    <h3>Form Transaksi</h3>
                    <table class="table table-bordered">                   
                                <form action="/pemesanan/store" method="POST">
                                    {{csrf_field()}}
                                <tr><td>
                                  <div class="form-group col-md-6">
                                    <label for="formGroupExampleInput2" class="form-label">Pegawai</label>
                            
                                        <select name="id_user" class="form-control">  
                                      <option value="">- Pilih -</option>
                                    @foreach ($users as $us)
                                      <option value="{{ $us->id_user }}">{{ $us->nama_user }}</option>
                                    @endforeach                      
                               </select>                   
                                </div>

                              <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2" class="form-label">Supplier</label>
                        
                                    <select name="id_sup" class="form-control">  
                                  <option value="">- Pilih -</option>
                                @foreach ($suppliers as $bg)
                                  <option value="{{ $bg->id_sup }}">{{ $bg->nama_sup }}</option>
                                @endforeach                      
                           </select>                   
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="formGroupExampleInput2" class="form-label">Barang</label>
                        
                                    <select name="kode_barang" class="form-control">  
                                  <option value="">- Pilih -</option>
                                @foreach ($barangs as $brg)
                                  <option value="{{ $brg->kode_barang }}">{{ $brg->nama_barang }}</option>
                                @endforeach                      
                           </select>                   
                            </div>
                            </div>
                     
                            
                            <div class="form-group col-md-2">
                              <label for="inputAddress2">Jumlah barang</label>
                              <input name="jumlah_up" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                           
                              <div class="form-group col-md-4">
                                <label>Tanggal Pesan</label>
                                <input name="tgl_pesan"type="date" class="form-control" id="tgl_pesan" value="<?php echo date('d-m-Y'); ?>" required/>
                              </div>
                            </div>
                        </td></tr>
                      
                        <tr><td>
                    

                                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                <button type="submit" name="submit" class="btn btn-danger">Selesai</button>
                            </td></tr>
                    </table>
                    </form>
                    <table class="table table-bordered">
                      <tr class="success"><th colspan="6">Detail Transaksi</th></tr>
                      <tr>
                              <th>#</th>
                              <th>Nama Barang</th>
                              <th>Qty</th>
                              <th>Harga Tiket</th>
                              <th>Subtotal</th>
                              <th>Aksi</th>
                          </tr>
                          <?php 
                          $no=1; 
                          $total=0; 
                          
                          ?>  
                         @foreach ($detailpesan as $item)
                        <tr>
                                <td>1</td>
                                <td>{{ $item->barang->nama_barang }}
                                </td>
                               
                                <td>{{ $item->jumlah_up }}</td>
                                <td> {{ $item->harga_beli_barang }} </td>
                             
                                <td>{{ $brg->harga_beli_barang*$brg->qty }}</td>
                                <?php $no++ ?>
                                <?php $total=$total+($item->harga_beli_barang*$item->jumlah_up) ?>
                       @endforeach
                                <tr><td colspan="5"><p align="right">Total</p></td><td>{{$total}}</td></tr>
                        </tr>
                    </table>
                              </table>
                </div>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>
</div>

@stop