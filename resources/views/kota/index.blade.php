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
                   <h1>List Kota</h1>
                <div class='col-6'>
                  
                                        <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Tambah Data Kota
                                        </button>
                    </div>

                      </div>
                      
                <table class='table table-hover'>
                    <tr>
                        <th>ID</th>
                        <th>Kota</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach ($kotas as $kota)
                    <tr>
                        <td>{{ $kota->id }}</td>
                        <td>{{ $kota->kota }}</td>
                        <td>
                          <a href="#"class="btn btn-warning btn-sm">Edit</a>
                          <a href="#"class="btn btn-danger btn-sm">Hapus</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Input Data Kota Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

          </button>
        </div>

        <div class="modal-body">
            <form action="/barang/create" method="POST">
                  <div class="from-group">
                    <label for="formGroupExampleInput" class="form-label">ID</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Kota">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Kota">
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

