@extends('components.main')
@section('main')
    <form action="{{ route('beli') }}" method="post" class="px-4">
        @csrf
        <input type="text" name="slug" value="{{ $stock->slug }}" disabled readonly hidden>
        {{-- <div class="input-group input-group mt-2 mb-3">
            <span class="input-group-text" id="q">Produk</span>
            <input name="nama" type="text" readonly class="form-control @error('nama')
                is-invalid
            @enderror" aria-describedby="q" value="{{ $stock->nama }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}
        <div class="row row-beli">
            <div class="col-lg-5 col-12 mb-3">
                <span class="fs-4">Produk</span>
                <input name="nama" type="text" class="form-control-lg form-control" id="q" value="{{ $stock->nama }}" readonly>
            </div>
            <div class="col-lg-5 col-12 mb-3">
                <span class="fs-4">Jumlah</span>
                <input name="jumlah" type="number" class="form-control-lg form-control" id="w" value="{{ old('jumlah') }}">
            </div>
            <div class="col-lg-2 col-12">
                <span class="fs-4">tambah</span>
                <button type="submit" class="btn btn-outline-success d-block p-4"><i class="fa-solid fa-cart-plus fs-1"></i></button>
            </div>
        </div>
    </form>
@endsection
@section('title', 'beli ' . $stock->nama)
@section('tombol')
    <a href="{{ route('beranda') }}" class="btn btn-outline-warning">Kembali ke beranda</a>
@endsection
