@extends('layout.app')

@section('title')
    Pembelian
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="card-title mt-3 mb-3">
                <a class="btn btn-success btn-sm float-end" href="{{ route('pembelian.create')}}"><i class="fa fa-plus"></i></a>
                <h5><i class="fa-solid fa-cart-shopping"></i> Data Pembelian</h5>
            </div>
        </div>
    
        {{-- Judul Data Pembelian --}}
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th width="50px">ID</th>
                        <th width="50px">Jumlah</th>
                        <th>Harga</th>
                        <th>ID Barang</th>
                        <th width="84px">Action</th>
                    </tr>
                </thead>
        
        {{-- Data Pembelian --}}
                <tbody>
                    @foreach ($pembelian as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>Rp {{ format_uang($item->harga) }}</td>
                        <td>{{ ! empty($item->barang->nama) ?  $item->barang->nama : '' }}</td>
                        <td>
                            <a href="/pembelian/edit/{{$item->id}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="/pembelian/hapus/{{$item->id}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTambahPembelian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pembelian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pembelian.store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection