@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Tambah Data Barang </h1>
            <div class ="row">
                <div class ="col-lg-8">
                    <form action ="{{ url('/store') }}" method = "POST">
                        <div class ="form-group">
                            <label for="Barang">Kode Barang</label>
                            <input type="text" name = "Kode_Barang" class="form-control" placeholder = "Silakan Isi">
                        </div>

                        <div class ="form-group">
                            <label for="Nama">Nama Barang</label>
                            <input type="text" name="Nama_Barang" class="form-control">
                        </div>
                        
                        <div class ="form-group">
                            <label for="Nama">Atribut Stock Barang29</label>
                            <textarea class = "form-control" name = "Atribut_Stock_Barang29"></textarea> 
                        </div>
                        <div class ="form-group">
                            <label for="Nama">Harga Beli Barang</label>
                            <input type="text" name="Harga_Beli_Barang" class="form-control">
                        </div>
                        <div class ="form-group">
                            <label for="Nama">Harga Jual Barang</label>
                            <input type="text" name="Harga_Jual_Barang" class="form-control">
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