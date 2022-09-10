@extends('layout.app')

@section('title')
    Pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Pembelian</h5>

            <form action="{{route('pembelian.update', $pembelian->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        {{-- Edit Tanggal --}}
                        <label for="nama">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" value="{{$pembelian->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror">
                        @error('tanggal')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Edit Jumlah --}}
                        <label for="nama">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" value="{{$pembelian->jumlah}}" class="form-control @error('jumlah') is-invalid @enderror">
                        @error('jumlah')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Edit Harga --}}
                        <label for="nama">Harga</label>
                        <input type="text" name="harga" id="harga" value="{{$pembelian->harga}}" class="form-control @error('harga') is-invalid @enderror">
                        @error('harga')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Edit ID Barang --}}
                        <label for="nama">ID Barang</label>
                        <input type="text" name="id_barang" id="id_barang" value="{{$pembelian->id_barang}}" class="form-control @error('id_barang') is-invalid @enderror">
                        @error('id_barang')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/pembelian" role="button">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection