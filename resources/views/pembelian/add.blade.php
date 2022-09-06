@extends('layout.app')

@section('title')
    Pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Pembelian</h5>

            <form action="{{route('pembelian.store')}}" method="POST">
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        {{-- Add Tanggal --}}
                        <label class="mb-2" for="nama">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal')}}" class="form-control @error('tanggal') is-invalid @enderror">
                        @error('tanggal')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        
                        {{-- Add Jumlah --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" value="{{ old('jumlah')}}" class="form-control @error('jumlah') is-invalid @enderror">
                            @error('jumlah')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Harga --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Harga</label>
                            <input type="text" name="harga" id="harga" value="{{ old('harga')}}" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add ID Barang --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">ID Barang</label>
                            <input type="text" name="id_barang" id="id_barang" value="{{ old('id_barang')}}" class="form-control @error('id_barang') is-invalid @enderror">
                            @error('id_barang')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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