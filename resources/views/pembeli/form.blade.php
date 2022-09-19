@extends('layout.app')

@section('title')
    Pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Pembeli</h5>

            <form action="{{route('pembeli.update', $pembeli->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        {{-- Edit Nama --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{$pembeli->nama}}" class="form-control @error('nama') is-invalid @enderror">
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        {{-- Edit Telepon --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Telepon</label>
                            <input type="text" name="telepon" id="telepon" value="{{$pembeli->telepon}}" class="form-control @error('telepon') is-invalid @enderror">
                            @error('telepon')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- Edit Alamat --}}
                        <div class="mt-4 mb-4">
                            <label for="nama">Alamat</label>
                            <label for="floatingTextarea">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror"  id="floatingTextarea" name="alamat" placeholder="Alamat">{{$pembeli->alamat}}</textarea>
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