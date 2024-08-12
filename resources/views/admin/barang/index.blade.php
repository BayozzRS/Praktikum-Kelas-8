@extends('layouts.master')

@section('content')
<div class="row">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Barang</h1>
    </div>
    <div class="col-md-6 text-right">
        <a href="/admin/barang/tambah" class="btn-primary bnt-circle btn-lg">
            <i class="fa fa-plus"></i>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
            Menampilkan Nama Data Barang
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>NO</td>
                                <td>KODE</td>
                                <td>NAMA</td>
                                <td>STOK</td>
                                <td>AKSI</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $key => $item)
                                <tr>
                                    <td>{{$key + 1}}</td>  
                                    <td>{{$item->kode}}</td>
                                    <td>{{$item->nama}}</td>                                
                                    <td>{{$item->stock}}</td>
                                    <td>
                                        <a href="/admin/barang/edit/{{$item->id}}" class="btn btn-success btn-circle btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="/admin/barang/delete/{{$item->id}}" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection