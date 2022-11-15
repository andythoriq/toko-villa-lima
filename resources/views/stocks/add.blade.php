@extends('adminpanelcomponents.main')
@section('main')
<main class="row justify-content-center">
    <h1 class="text-center col-10">Menambahkan Produk</h1>
    <h2 class="text-center fs-5 text-secondary col-10">Data-data ini akan ditampilkan di beranda</h2>
    <form action="{{ route('storeStock') }}" method="post" enctype="multipart/form-data" class="col-lg-8 col-10">
        @csrf
        <div class="input-group input-group mt-2">
            <span class="input-group-text" id="q">Nama</span>
            <input name="nama" type="text" class="form-control @error('nama')
                is-invalid
            @enderror" aria-describedby="q">
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    <hr class="m-4">
        <label class="form-label">Stok</label>
        <select class="form-select ms-2">
            <option value="ada">ada</option>
            <option value="habis">habis</option>
        </select>
    <hr class="m-4">
        <div class="">
            <label for="r" class="form-label">Gambar<small class="tidak-wajib text-secondary ps-1">(tidak wajib untuk diisi)</small></label>
            <input class="form-control ms-2" type="file" id="r">
        </div>
    <hr class="m-4">
        <div class="">
            <label for="e" class="form-label">Deskripsi<small class="tidak-wajib text-secondary ps-1">(tidak wajib untuk diisi)</small></label>
            <textarea class="form-control ms-2" id="e" rows="5"></textarea>
        </div>
    <hr class="m-4">
        <div class="mb-5 tombol-submit">
            <button type="submit" class="btn btn-outline-success"><i class="fa-solid fa-plus pe-1"></i>Tambah</button>
        </div>
    </form>
</main>
@endsection

