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
                        {{-- <label for="nama">ID Barang</label>
                        <input type="text" name="barang_id" id="barang_id" value="{{$pembelian->barang_id}}" class="form-control @error('barang_id') is-invalid @enderror">
                        @error('barang_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror --}}

                        <label for="nama">ID Barang</label>
                        <select type="text" name="barang_id" id="barang_id" class="form-control @error('barang_id') is-invalid @enderror">
                        @error('barang_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                            <option value="{{$pembelian->barang_id}}" selected>{{$pembelian->barang->nama}}</option>
                        @foreach($barang as $barang)
                            <option value="{{$barang->id}}">{{$barang->nama}}</option>
                        @endforeach
                        </select>
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