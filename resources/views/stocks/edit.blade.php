@extends('adminpanelcomponents.main')
@section('main')
<main class="row justify-content-center">
    <h1 class="text-center col-10">Mengubah data Produk</h1>
    <h2 class="text-center fs-5 text-secondary col-10">Perubahan ini akan ditampilkan di beranda</h2>
    <form action="{{ route('updateStock', $stock->slug) }}" method="post" enctype="multipart/form-data" class="col-lg-8 col-10">
        @csrf
        @method('put')
        <input type="text" name="slug" disabled readonly hidden>
        <div class="input-group input-group mt-2">
            <span class="input-group-text" id="q">Nama</span>
            <input name="nama" type="text" class="form-control @error('nama')
                is-invalid
            @enderror" aria-describedby="q" value="{{ old('nama', $stock->nama) }}">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    <hr class="m-4">
        <label class="form-label">Stok</label>
        <select name="persediaan" class="form-select ms-2 fs-5">
            @if (old('persediaan', $stock->persediaan) == 'ada')
                <option value="ada">ada</option>
            @elseif (old('persediaan', $stock->persediaan) == 'habis')
                <option value="habis">habis</option>
            @endif
            <option value="ada">ada</option>
            <option value="habis">habis</option>
        </select>
    <hr class="m-4">
        <div class="">
            {{-- <input type="text" name="oldGambar" value="{{ strval($stock->gambar) }}"  disabled readonly hidden> --}}
            <label for="r" class="form-label">Gambar<small class="tidak-wajib text-secondary ps-1">(tidak wajib untuk diisi)</small></label>
            <input name="gambar" class="form-control ms-2 @error('gambar')
                is-invalid
            @enderror" type="file" id="r">
            @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    <hr class="m-4">
        <div class="">
            <label for="e" class="form-label">Deskripsi<small class="tidak-wajib text-secondary ps-1">(tidak wajib untuk diisi)</small></label>
            <textarea name="deskripsi" class="form-control ms-2" id="e" rows="5">{{ old('nama', $stock->deskripsi) }}</textarea>
        </div>
    <hr class="m-4">
        <div class="mb-5 tombol-submit">
            <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-square-pen pe-2"></i>Update</button>
        </div>
    </form>
</main>
@endsection

