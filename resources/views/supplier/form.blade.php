@extends('layout.app')

@section('title')
    Supplier
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Supplier</h5>

            <form action="{{route('supplier.update', $supplier->id)}}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        {{-- Edit Nama --}}
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{$supplier->nama}}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Edit Telepon --}}
                        <label for="nama">Telepon</label>
                        <input type="text" name="telepon" id="telepon" value="{{$supplier->telepon}}" class="form-control @error('telepon') is-invalid @enderror">
                        @error('telepon')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                        {{-- Edit Alamat --}}
                        <label for="floatingTextarea">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror"  id="floatingTextarea" name="alamat" placeholder="Alamat">{{$supplier->alamat}}</textarea>
                        @error('alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- Tombol simpan dan batal --}}
                <div class="modal-footer">
                    <a class="btn btn-secondary" href="/supplier" role="button">Batal</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection