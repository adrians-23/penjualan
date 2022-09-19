@extends('layout.app')

@section('title')
    Barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Barang</h5>

            <form action="{{route('barang.store')}}" method="POST">
                <div class="card-body">
                    @csrf
                    <div class="form-group">

                        {{-- Add Nama --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
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
                            <input type="text" name="harga" id="harga" value="{{ old('harga')}}" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Stock --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Stock</label>
                            <input type="number" name="stock" id="stock" value="{{ old('stock')}}" class="form-control @error('stock') is-invalid @enderror">
                            @error('stock')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        {{-- Add Supplier --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Supplier</label>
                            <select name="supplier_id" id="supplier_id" value="{{ old('supplier_id')}}" class="form-control @error('supplier_id') is-invalid @enderror">
                                <option selected>Pilih...</option>
                                @foreach($supplier as $s)
                                    <option value="{{$s->id}}">{{$s->nama}}</option>
                                @endforeach
                            </select>
                            @error('supplier_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Kategori --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Kategori</label>
                            <select name="kategori_id" id="kategori_id" value="{{ old('kategori_id')}}" class="form-control @error('kategori_id') is-invalid @enderror">
                                <option selected>Pilih...</option>
                                @foreach($kategori as $k)
                                    <option value="{{$k->id}}">{{$k->nama}}</option>
                                @endforeach
                            </select>
                            @error('kategori_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>

                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/barang" role="button">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection