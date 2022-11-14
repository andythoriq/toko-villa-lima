@extends('components.main')
@section('main')
    <h1>{{ $title ?? '' }}</h1>
    {{-- TODO : @if (!$stock)
        <div class="alert alert-info" role="alert">
            produk tidak ditemukan
        </div>
    @else
        @foreach ($stocks as $stock)

        @endforeach
    @endif --}}
@endsection






@section('description', $description ?? '')
{{-- TODO!! : tambahkan lokasi lebih lengkap agar mengoptimalkan pencarian search engine!! --}}
{{-- TODO!! : tambah kan di setelah tulisan desa Pasir Jambu Villa Bogor Indah 5!! --}}

@section('title', $title ?? '')
