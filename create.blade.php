@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class ="row">
                <div class ="col-lg-8">
                    <form action ="{{ url('/store') }}" method = "POST">
                        <div class ="form-group">
                            <label for="Barang">Kode Barang</label>
                            <input type="text" name = "Kode Barang" class="form-control" placeholder = "Silakan Isi">
                        </div>

                        <div class ="form-group">
                            <label for="Nama">Nama Barang</label>
                            <input type="text" name="Nama Barang" class="form-control">
                        </div>
                        
                        <div class ="form-group">
                            <label for="Nama">Atribut Stock Barang29</label>
                            <textarea class = "form-control" name = "Atribut Stock"></textarea> 
                        </div>
                        <div class ="form-group mt-2">
                            <button type = "Submit" class = btn btn-primary>Tambah Data</button>
                        </div>
                        <div class ="form-group mt-2">
                            <a herf = "{{ url('/') }}">
                            <<kembali</a> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection