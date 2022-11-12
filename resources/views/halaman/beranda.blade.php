@extends('components.main')
@section('main')
    <main class="container">
        <h1>test -> ini adalah {{ $title ?? '' }}</h1>
    </main>
@endsection






@section('description', $description ?? '')
{{-- TODO!! : tambahkan lokasi lebih lengkap agar mengoptimalkan pencarian search engine!! --}}
{{-- TODO!! : tambah kan di setelah tulisan desa Pasir Jambu Villa Bogor Indah 5!! --}}

@section('title', $title ?? '')
