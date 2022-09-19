@extends('layout.app')

@section('title')
    Barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Barang</h5>

            <form action="{{route('barang.update', $barang->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        {{-- Edit Nama --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{$barang->nama}}" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Edit Harga --}}
                        <label class="mb-2" for="nama">Harga</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <b>Rp</b>
                                </div>
                            </div>
                            <input type="text" name="harga" id="harga" value="{{$barang->harga}}" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Edit Stock --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Stock</label>
                            <input type="number" name="stock" id="stock" value="{{$barang->stock}}" class="form-control @error('stock') is-invalid @enderror">
                            @error('stock')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Edit Supplier --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Supplier</label>
                            <select type="text" name="supplier_id" id="supplier_id" class="form-control @error('supplier_id') is-invalid @enderror">
                            @error('supplier_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                                <option value="{{$barang->supplier_id}}" selected>{{! empty($barang->supplier->nama) ?  $barang->supplier->nama : ''}}</option>
                            @foreach($supplier as $supplier)
                                <option value="{{$supplier->id}}">{{$supplier->nama}}</option>
                            @endforeach
                            </select>
                        </div>

                        {{-- Edit Kategori --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Kategori</label>
                            <select type="text" name="kategori_id" id="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror">
                            @error('kategori_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                                <option value="{{$barang->kategori_id}}" selected>{{! empty($barang->kategori->nama) ?  $barang->kategori->nama : ''}}</option>
                            @foreach($kategori as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                            @endforeach
                            </select>
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