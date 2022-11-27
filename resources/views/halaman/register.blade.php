@extends('components.main')

@section('main')
<div class="row justify-content-center">
    <div class="card col-lg-6 col-11">
        <div class="card-body">
            <form action="{{ route('crateRegister') }}" method="post" class="form-register">
                <div class="form-floating mb-3">
                    <input type="nama" class="form-control" id="a" placeholder="name@example.com">
                    <label for="a">Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="nama" class="form-control" id="b" placeholder="name@example.com">
                    <label for="b">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="nama" class="form-control" id="c" placeholder="name@example.com">
                    <label for="c">Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="q" placeholder="name@example.com">
                    <label for="q">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="w" placeholder="Password">
                    <label for="w">Password</label>
                </div>
                <butotn type="submit" class="btn btn-outline-success mt-4 py-2 px-3 fs-3 tombol-daftar">Daftar !</butotn>
            </form>
        </div>
    </div>
</div>

@endsection

@section('description', $description ?? '')

@section('title', $title ?? '')
