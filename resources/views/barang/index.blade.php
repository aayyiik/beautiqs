@extends('layouts.master') 

@section('content')

  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Data Barang</h3>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Launch demo modal
                  </button>
                </div>
                <div class="panel-body">
                 <table class="table table-striped">
                  <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Id Jenis Barang</th>
                        <th>Nama Barang</th>
                        <th>Attribute Stok Barang</th>
                        <th>Harga Beli Barang</th>
                        <th>Harga Jual Barang</th>
                        <th> AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($barangs as $barang)
                      <tr>
                          <td>{{ $barang->kode_barang }}</td>
                          <td>{{ $barang->id_jb }}</td>
                          <td>{{ $barang->nama_barang }}</td>
                          <td>{{ $barang->attribute_stok_barang29}}</td>
                          <td>{{ $barang->harga_beli_barang }}</td>
                          <td>{{ $barang->harga_jual_barang }}</td>
                          <td><a href="/barang/{{$barang->kode_barang}}/edit" class="btn btn-warning btn-sm">Edit</a>
                              <a href="/barang/{{$barang->kode_barang}}/delete"class="btn btn-danger btn-sm " 
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
            <form action="/barang/create" method="GET">
             {{csrf_field()}}
                  <div class="from-group">
                    <label for="formGroupExampleInput2" class="form-label">Id Jenis Barang</label>
                    <input name="id_jb" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Jenis Barang">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">Nama Barang</label>
                    <input name="nama_barang" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang">
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">Stok Barang</label>
                    <input name="attribute_stok_barang29" type="integer" class="form-control" id="formGroupExampleInput" placeholder="Stok">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput2" class="form-label">Harga Beli Barang</label>
                    <input name = "harga_beli_barang" type="integer" class="form-control" id="formGroupExampleInput2" placeholder="Harga Beli">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">Harga Jual Barang</label>
                    <input name= "harga_jual_barang" type="integer" class="form-control" id="formGroupExampleInput" placeholder="Harga Jual">
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
@section('content1')

          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
            {{session ('sukses')}}
          
          </div>
          @endif
            <div class = 'row'>
                <div class='col-6'>
                   <h1>List Barang</h1>
                <div class='col-6'>
                  <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data Barang
                   </button>
                   
                    </div>
                      <table class='table table-hover'>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Attribute Stok Barang</th>
                        <th>Harga Beli Barang</th>
                        <th>Harga Jual Barang</th>
                        <th> AKSI</th>
                
                    </tr>
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->id_jb }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->attribute_stok_barang29}}</td>
                        <td>{{ $barang->harga_beli_barang }}</td>
                        <td>{{ $barang->harga_jual_barang }}</td>
                        <td><a href="/barang/{{$barang->kode_barang}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/barang/{{$barang->kode_barang}}/delete"class="btn btn-danger btn-sm " 
                              onclick="return confirm ('Yakin mau dihapus ?')">Hapus</a>
                        </td> 
                    </tr>
                        
                    @endforeach
                  
                </table>
            </div>        
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Data Barang Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

        </button>
      </div>

          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div> 
@endsection 


<!-- Button trigger modal -->


<!-- Modal -->
      

