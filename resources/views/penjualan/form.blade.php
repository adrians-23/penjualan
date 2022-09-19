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
                        <div class="mt-4 mb-4">
                            <label for="nama">ID Barang</label>
                            <select type="text" name="barang_id" id="barang_id" class="form-control @error('barang_id') is-invalid @enderror">
                                @error('barang_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    <option value="{{$penjualan->barang_id}}" selected>{{! empty($penjualan->barang->nama) ?  $penjualan->barang->nama : ''}}</option>
                                @foreach($barang as $barang)
                                    <option value="{{$barang->id}}">{{$barang->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Edit ID Pembeli --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">ID Pembeli</label>
                            <select type="text" name="barang_id" id="barang_id" class="form-control @error('barang_id') is-invalid @enderror">
                                @error('barang_id')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                    <option value="{{$penjualan->pembeli_id}}" selected>{{! empty($penjualan->pembeli->nama) ?  $penjualan->pembeli->nama : ''}}</option>
                                @foreach($pembeli as $pembeli)
                                    <option value="{{$pembeli->id}}">{{$pembeli->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Edit Jumlah --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" value="{{$penjualan->jumlah}}" class="form-control @error('jumlah') is-invalid @enderror">
                            @error('jumlah')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Edit Harga Jual--}}
                        <label class="mb-2" for="nama">Harga Jual</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <b>Rp</b>
                                </div>
                            </div>
                            <input type="text" name="harga_jual" id="harga_jual" value="{{$penjualan->harga_jual}}" class="form-control @error('harga_jual') is-invalid @enderror">
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