<h1>Welcome To Beautiqs<h1>
    <h2>Beauty Identity Of Beautiqs<h2> 

@extends('layouts.default')
@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-10">
                <h5>Barang Baru</h5>
                <a href = "{{url('create')}}" class="btn btn-primary"> Tambah Stock Barang</a>
            </div>
        </div>
        <div class="col-lg-10">
                <h5>Barang Baru</h5>
                <table class="table-bordered">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Atribut Stock Barang</th>
                        <th>Harga Beli Barang</th>
                        <th>Harga Jual Barang</th>
                        <th>action</th>
                    </tr>
                    @foreach ($data as $dataBarang)
                    <tr>
                        <td>{{$dataBarang->Kode_Barang}}</td>
                        <td>{{$dataBarang->Nama_Barang}}</td>
                        <td>{{$dataBarang->Atribut_Stock_Barang29}}</td>
                        <td>{{$dataBarang->Harga_Beli_Barang}}</td>
                        <td>{{$dataBarang->Harga_Jual_Barang}}</td>
                        <td>
                            <a href="{{ url('/show/'.$dataBarang->Kode_Barang)}}" class = "btn btn-warning">Edit</a>
                            <a href="{{ url('/delete/'.$dataBarang->Kode_Barang)}}" class = "btn btn-warning">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection()