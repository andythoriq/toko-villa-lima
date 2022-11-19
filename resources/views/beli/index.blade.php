@extends('components.main')
@section('main')
    <form action="{{ route('beli') }}" method="post">

    </form>
@endsection
@section('title', 'beli')
@section('tombol')
    <a href="{{ route('beranda') }}" class="btn btn-outline-warning">Kembali ke beranda</a>
@endsection
