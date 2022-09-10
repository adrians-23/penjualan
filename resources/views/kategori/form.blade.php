{{-- HANYA EDIT KATEGORI YANG BISA DIGUNAKAN --}}
@extends('layout.app')

@section('title')
    Kategori
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Kategori</h5>

            <form action="{{route('kategori.update', $kategori->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        {{-- Edit Nama --}}
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$kategori->nama}}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/kategori" role="button">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection