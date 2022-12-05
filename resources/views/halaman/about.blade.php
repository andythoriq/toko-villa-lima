@extends('components.main')
@section('main')
        <h1>{{ $title ? 'Gallery' : '' }}</h1>
        <hr>
@endsection

@section('tombol')
    <button class="btn btn-outline-light" type="button"><i class="fa-solid fa-map-location-dot fs-4"></i> cek di Google Map</button>
@endsection

@section('description', $description ?? '')

@section('title', $title ?? '')
