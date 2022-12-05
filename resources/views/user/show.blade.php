@extends('components.main')
@section('main')
   <p>{{ $user->nama }}</p>
   <p>{{ $user->alamat }}</p>
   <p>{{ $user->email }}</p>
   <p>{{ $user->password }}</p>
@endsection
@section('tombol')
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('apakah anda yakin ingin logout?')">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
        </button>
    </form>
@endsection

@section('description', $description ?? '')

@section('title', $title ?? '')
