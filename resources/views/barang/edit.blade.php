@extends('layouts/master')

@section('content')
    

<h2> Edit Data Barang </h2>

          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
            {{session ('sukses')}}
          
          </div>
          @endif
            <div class = 'row'>

                <form action="/barang/{{$barang->kode_barang}}/update" method="POST">
                    {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">Kode Barang</label>
                       <input name="kode_barang" type="text" class="form-control" id="formGroupExampleInput" placeholder="Kode Barang" value="{{ $barang->kode_barang }}">
                     </div>
                     <div class="mb-3">
                       <label for="formGroupExampleInput2" class="form-label">Nama Barang</label>
                       <input name="nama_barang" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Barang" value="{{ $barang->nama_barang }}">
                     </div>
                     <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Stok Barang</label>
                        <input name="attribute_stok_barang29" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Stok Barang" value="{{ $barang->attribute_stok_barang29 }}">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga Beli Barang</label>
                        <input name="harga_beli_barang" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Harga Beli Barang" value="{{ $barang->harga_beli_barang }}">
                      </div>
                      <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Harga Jual Barang</label>
                        <input name="harga_jual_barang" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Harga Jual Barang" value="{{ $barang->harga_jual_barang }}">
                      </div>
                     
                     <button type="submit" class="btn btn-warning" >Submit</button>
                </form>
            </div>
          </div>
       @endsection



 
      

