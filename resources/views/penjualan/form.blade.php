@extends('layout.app')

@section('title')
    Penjualan
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Penjualan</h5>

            <form action="{{route('penjualan.update', $penjualan->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        {{-- Edit ID Barang --}}
                        <label for="nama">ID Barang</label>
                        <input type="text" name="id_barang" id="id_barang" value="{{$penjualan->id_barang}}" class="form-control @error('id_barang') is-invalid @enderror">
                        @error('id_barang')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Edit ID Pembeli --}}
                        <label for="nama">ID Pembeli</label>
                        <input type="text" name="id_pembeli" id="id_pembeli" value="{{$penjualan->id_pembeli}}" class="form-control @error('id_pembeli') is-invalid @enderror">
                        @error('id_pembeli')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Edit Jumlah --}}
                        <label for="nama">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" value="{{$penjualan->jumlah}}" class="form-control @error('jumlah') is-invalid @enderror">
                        @error('jumlah')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Edit Harga Jual--}}
                        <label for="nama">Harga Jual</label>
                        <input type="text" name="harga_jual" id="harga_jual" value="{{$penjualan->harga_jual}}" class="form-control @error('harga_jual') is-invalid @enderror">
                        @error('harga_jual')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/penjualan" role="button">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection