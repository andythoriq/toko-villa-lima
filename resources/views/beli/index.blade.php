@extends('components.main')
@section('main')
    {{ $stock->nama }}
    <h1>test</h1>
@endsection
@section('title', 'beli')
@section('tombol')
    <a href="{{ route('beranda') }}" class="btn btn-outline-warning">Kembali ke beranda</a>
@endsection
