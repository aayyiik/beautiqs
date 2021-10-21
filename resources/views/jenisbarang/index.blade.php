<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
            Data Berhasil Diinput
          </div>
          @endif
            <div class = 'row'>
                <div class='col-6'>
                   <h1>Jenis Barang</h1>
                <div class='col-6'>
                   <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Jenis Barang
                    </button>
                    </div>
                    
                    </div>
                      </div>
                      
                <table class='table table-hover'>
                    <tr>
                        <th>Id Jenis Barang</th>
                        <th>Kode Barang</th>
                        <th>Kategori</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach ($jenisbarangs as $jenisbarang)
                    <tr>
                        <td>{{ $jenisbarang->id_jb }}</td>
                        <td>{{ $jenisbarang->kode_barang }}</td>
                        <td>{{ $jenisbarang->jenis_barang }}</td>
                        <td>
                          <a href="/jenisbarang/{{$jenis_barang->id_jjb}}/edit"class="btn btn-warning btn-sm">Edit</a>
                          <a href="/jenisbarang/{{$jenisbarang->id_jb}}/delete"class="btn btn-danger btn-sm " 
                            onclick="return confirm ('Yakin mau dihapus ?')">Hapus</a>
                        </td>
                        
                    </tr>
                                     
                    @endforeach

                    <a href="/jenisbarang/create"></a>
                </table>
            </div>        


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Data Jenis Barang Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

          </button>
        </div>

        <div class="modal-body">
            <form action="/jenisbarang/create" method="GET">
                 {{csrf_field()}}
                  <div class="from-group">
                    <label for="formGroupExampleInput2" class="form-label">Kode Barang</label>
                    <input name="barang" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Kode Barang">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Jenis Barang</label>
                    <input name="jenisbarang" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Jenis Barang">
                  </div>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
      </div>
    </div>       

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>

