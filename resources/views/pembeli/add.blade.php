@extends('layout.app')

@section('title')
    Pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Pembeli</h5>

            <form action="{{route('pembeli.store')}}" method="POST">
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
                        
                        {{-- Add Telepon --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="nama">Telepon</label>
                            <input type="text" name="telepon" id="telepon" value="{{ old('telepon')}}" class="form-control @error('telepon') is-invalid @enderror">
                            @error('telepon')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Add Alamat --}}
                        <div class="mt-4 mb-4">
                            <label class="mb-2" for="floatingTextarea">Alamat</label>
                            {{-- <input type="text" name="alamat" id="alamat" value="{{ old('alamat')}}" class="form-control @error('alamat') is-invalid @enderror"> --}}
                            <textarea class="form-control @error('alamat') is-invalid @enderror"  id="floatingTextarea" name="alamat" placeholder="Alamat"></textarea>
                            @error('alamat')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>

                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/pembeli" role="button">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection