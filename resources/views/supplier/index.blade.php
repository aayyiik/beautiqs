<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <div class = 'row'>
                <div class='col-6'>
                   <h1>List Supplier</h1>
                <div class='col-6'>
                  
                       <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       List Supplier
                       </button>
                    </div>

                      </div>
                      
                <table class='table table-hover'>
                    <tr>
                        <th>ID Supplier</th>
                        <th>ID Kota</th>
                        <th>Nama Supplier</th>
                        <th>Alamat Supplier</th>
                        <th>Telp Supplier</th>
                        <th> AKSI</th>
                
                    </tr>
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
                </table>
            </div>        
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Data Supplier Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

          </button>
        </div>

        <div class="modal-body">
            <form action="/supplier/create" method="POST">
             {{csrf_field()}}
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">ID Supplier</label>
                    <input type="id_sup" class="form-control" id="formGroupExampleInput" placeholder="Kode Barang">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput2" class="form-label">ID Kota</label>
                    <input type="id_kota" class="form-control" id="formGroupExampleInput2" placeholder="Nama Barang">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">Nama Supplier</label>
                    <input type="nama_sup" class="form-control" id="formGroupExampleInput" placeholder="Stok">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput2" class="form-label">Alamat Supplier</label>
                    <input type="alamat_sup" class="form-control" id="formGroupExampleInput2" placeholder="Harga Beli">
                  </div>
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">Telp Supplier</label>
                    <input type="telp_sup" class="form-control" id="formGroupExampleInput" placeholder="Harga Jual">
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

