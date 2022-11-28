@extends('components.main')

@section('main')
<form action="{{ route('createLogin') }}" method="post" class="form-register">
    <div class="row justify-content-center">
        <div class="card col-lg-6 col-11">
            <div class="card-body">
                @csrf

                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control @error('username')
                        is-invalid
                    @enderror" id="b" placeholder="username" value="{{ old('username') }}">
                    <label for="b">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email')
                        is-invalid
                    @enderror" id="q" placeholder="name@example.com" value="{{ old('email') }}">
                    <label for="q">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password')
                        is-invalid
                    @enderror" id="w" placeholder="Password">
                    <label for="w">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <p class="text-secondary mt-4 mb-0">belum memiliki akun? klik <a href="{{ route('register') }}">link ini untuk daftar!</a></p>

                <button type="submit" class="btn btn-outline-success mt-4 py-2 px-3 fs-3 tombol-daftar">Login !</button>
            </div>
        </div>
    </div>
</form>

@endsection

@section('description', $description ?? '')

@section('title', $title ?? '')
