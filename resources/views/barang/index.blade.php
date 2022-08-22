@extends('layout.app')

@section('title')
    Barang
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="card-title mt-3 mb-3">
                <button class="btn btn-success btn-sm float-end" data-bs-toggle="modal" data-bs-target="#modalTambahBarang"><i class="fa fa-plus"></i></button>
                <h5><i class="fa-solid fa-cart-shopping"></i> Data Barang</h5>
            </div>
        </div>
    
        {{-- Judul Data Barang --}}
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="50px">ID</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th width="50px">Stock</th>
                        <th>Supplier</th>
                        <th>Kategori</th>
                        <th width="84px">Action</th>
                    </tr>
                </thead>
        
        {{-- Data Barang --}}
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Kursi</td>
                        <td>50.000</td>
                        <td>5</td>
                        <td>Mediatek</td>
                        <td>Furniture</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTambahBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection