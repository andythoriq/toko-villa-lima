@extends('components.main')
@section('main')
    <?php
        function dapatWaktu(){
            date_default_timezone_set("Asia/Jakarta");
            $hour = date('H', time());

            if( $hour > 6 && $hour <= 11) {
            return "Good Morning";
            }
            else if($hour > 11 && $hour <= 16) {
            return "Good Afternoon";
            }
            else if($hour > 16 && $hour <= 23) {
            return "Good Evening";
            }
        }
    ?>
    <h1>{{ $title ? dapatWaktu() : ''}}</h1>
    <hr>
    @if ($stocks->count() <= 0)
        <div class="alert alert-warning">stok belum tersedia</div>
    @else
        <div class="row">
            @foreach ($stocks as $stock)
            <div class="col-6 col-lg-4">
                <div class="card mb-3">
                    <div class="card-header bg-secondary">
                        <h2 class="text-light">{{ $stock->nama }}</h2>
                    </div>
                    <div class="card-body row">
                        @if($stock->gambar)
                        <img src="{{ asset('storage/' . $stock->gambar) }}" alt="gambar-produk-{{ $stock->slug }}" height="200">
                        @else
                        {{-- <div class="">gambar tidak ada</div> --}}
                        <img src="{{ asset('storage/indomie.jpeg') }}" alt="" width="100%" height="100%">
                        @endif
                        <a href="{{ route('showBeli', $stock->slug) }}" class="btn btn-outline-secondary">Beli</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endif
@endsection






@section('description', $description ?? '')
{{-- TODO!! : tambahkan lokasi lebih lengkap agar mengoptimalkan pencarian search engine!! --}}
{{-- TODO!! : tambah kan di setelah tulisan desa Pasir Jambu Villa Bogor Indah 5!! --}}

@section('title', $title ?? '')
