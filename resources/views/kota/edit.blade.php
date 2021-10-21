<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
            <h2> Edit Data Kota </h2>

          @if(session('sukses'))
          <div class="alert alert-success" role="alert">
            {{session ('sukses')}}
          
          </div>
          @endif
            <div class = 'row'>

                <form action="/kota/{{$kota->id}}/update" method="POST">
                    {{csrf_field()}}
                     <div class="from-group">
                       <label for="formGroupExampleInput" class="form-label">ID</label>
                       <input name="id" type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Kota" value="{{ $kota->id }}">
                     </div>
                     <div class="mb-3">
                       <label for="formGroupExampleInput2" class="form-label">Kota</label>
                       <input name="kota" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Kota" value="{{ $kota->kota }}">
                     </div>
                     
                     <button type="submit" class="btn btn-warning" >Submit</button>
            </div>        


 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>

