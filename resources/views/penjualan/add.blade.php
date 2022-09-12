@extends('layout.app')

@section('title')
    Penjualan
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Penjualan</h5>

            <form action="{{route('penjualan.store')}}" method="POST">
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        {{-- Add ID Barang --}}
                        {{-- <label class="mb-2" for="nama">ID Barang</label>
                        <input type="text" name="id_barang" id="id_barang" value="{{ old('id_barang')}}" class="form-control @error('id_barang') is-invalid @enderror">
                        @error('id_barang')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror --}}

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
                        
                        {{-- Add ID Pembeli --}}
                        <div class="mt-4 mb-4">
                            {{-- <label class="mb-2" for="nama">ID Pembeli</label>
                            <input type="text" name="id_pembeli" id="id_pembeli" value="{{ old('id_pembeli')}}" class="form-control @error('id_pembeli') is-invalid @enderror">
                            @error('id_pembeli')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror --}}

                            <label class="mb-2" for="nama">ID Pembeli</label>
                            <select name="pembeli_id" id="pembeli_id" value="{{ old('pembeli_id')}}" class="form-control @error('pembeli_id') is-invalid @enderror">
                                <option selected>Pilih...</option>
                                @foreach($pembeli as $p)
                                    <option value="{{$p->id}}">{{$p->nama}}</option>
                                @endforeach
                            </select>
                            @error('pembeli_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

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
                        
                        {{-- Add Harga Jual --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Harga Jual</label>
                            <input type="text" name="harga_jual" id="harga_jual" value="{{ old('harga_jual')}}" class="form-control @error('harga_jual') is-invalid @enderror">
                            @error('harga_jual')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
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