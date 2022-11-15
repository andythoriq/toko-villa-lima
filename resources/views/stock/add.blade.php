@extends('adminpanelcomponents.main')
@section('main')
<main class="row justify-content-center">
    <h1 class="text-center col-10">Menambahkan Produk Ke Halaman Beranda</h1>
    <form action="/stock/tambah" method="post" enctype="multipart/form-data" class="col-lg-8 col-10">
        @csrf
        <div class="input-group input-group mt-2">
            <span class="input-group-text" id="q">Nama</span>
            <input type="text" class="form-control" aria-describedby="q">
        </div>
    <hr class="m-4">
        <label class="form-label">Stok</label>
        <select class="form-select ms-2">
            <option value="ada">ada</option>
            <option value="habis">habis</option>
        </select>
    <hr class="m-4">
        <div class="">
            <label for="e" class="form-label">Deskripsi</label>
            <textarea class="form-control ms-2" id="e" rows="5"></textarea>
        </div>
    <hr class="m-4">
        <div class="">
            <label for="r" class="form-label">Gambar</label>
            <input class="form-control ms-2" type="file" id="r">
        </div>
    <hr class="m-4">
        <div class="">
            <button type="submit" class="btn btn-outline-success">Tambah Data Baru</button>
        </div>
    </form>
</main>
@endsection

