@extends('components.main')
@section('main')
        <h1>test -> ini adalah {{ $title ?? '' }}</h1>
@endsection

@section('tombol')
    <button class="btn btn-outline-light" type="button"><i class="fa-solid fa-map-location-dot fs-4 pe-2"></i>cek di Google Map</button>
@endsection




@section('description', $description ?? '')
{{-- TODO!! : tambahkan lokasi lebih lengkap agar mengoptimalkan pencarian search engine!! --}}
{{-- TODO!! : tambah kan di setelah tulisan desa Pasir Jambu Villa Bogor Indah 5!! --}}

@section('title', $title ?? '')
