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
                        <label for="nama">Nama</label>
                        <input type="date" name="tanggal" id="tanggal" value="{{$pembelian->tanggal}}" class="form-control @error('tanggal') is-invalid @enderror">
                        @error('tanggal')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection