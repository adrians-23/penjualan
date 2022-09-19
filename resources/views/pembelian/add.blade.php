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
                        <label class="mb-2" for="nama">Harga</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <b>Rp</b>
                                </div>
                            </div>
                            <input type="text" name="harga" id="harga" value="{{ old('harga')}}" class="form-control currency @error('harga') is-invalid @enderror">
                            @error('harga')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add ID Barang --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">ID Barang</label>
                            <select name="barang_id" id="barang_id" value="{{ old('barang_id')}}" class="form-control @error('barang_id') is-invalid @enderror">
                                <option selected>Pilih...</option>
                                @foreach($barang as $b)
                                    <option value="{{$b->id}}">{{$b->nama}}</option>
                                @endforeach
                            </select>
                            @error('barang_id')
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