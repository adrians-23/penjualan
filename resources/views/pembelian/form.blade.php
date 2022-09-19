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

                        {{-- Edit Jumlah --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Jumlah</label>
                            <input type="number" name="jumlah" id="jumlah" value="{{$pembelian->jumlah}}" class="form-control @error('jumlah') is-invalid @enderror">
                            @error('jumlah')
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
                            <input type="text" name="harga" id="harga" value="{{$pembelian->harga}}" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Edit ID Barang --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">ID Barang</label>
                            <select type="text" name="barang_id" id="barang_id" class="form-control @error('barang_id') is-invalid @enderror">
                            @error('barang_id')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                                <option value="{{$pembelian->barang_id}}" selected>{{! empty($pembelian->barang->nama) ?  $pembelian->barang->nama : ''}}</option>
                            @foreach($barang as $barang)
                                <option value="{{$barang->id}}">{{$barang->nama}}</option>
                            @endforeach
                            </select>
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