@extends('components.main')
@section('main')
    <?php
        function dapatWaktu(){
            date_default_timezone_set("Asia/Jakarta");
            $hour = date('H', time());
            if( $hour > 5 && $hour <= 9) {
            return "Selamat Pagi";
            }
            else if($hour > 9 && $hour <= 14) {
            return "Selamat Siang";
            }
            else if($hour > 14 && $hour <= 18) {
            return "Selamat Sore";
            }
            else if($hour > 18 && $hour <= 21){
                return "Selamat Malam";
            }
            else if($hour > 21 && $hour <= 5){
                return "Toko buka dari 6 pagi sampai 10 malam";
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
            @include('components.card')
            @endforeach
        </div>
    @endif
@endsection

@section('tombol')
    <div class="row">
        <a href="{{ route('cart') }}" class="btn btn-outline-light col-6 col-lg-3" type="button"><i class="fa-solid fa-cart-shopping fs-1 mt-2"></i><p>keranjang belanjaan</p></a>
        <a href="{{ route('history') }}" class="btn btn-outline-light col-6 col-lg-3" type="button"><i class="fa-solid fa-clock-rotate-left fs-1 mt-2"></i><p>riwayat pembelian</p></a>
    </div>
@endsection

@section('description', $description ?? '')
{{-- TODO!! : tambahkan lokasi lebih lengkap agar mengoptimalkan pencarian search engine!! --}}
{{-- TODO!! : tambah kan di setelah tulisan desa Pasir Jambu Villa Bogor Indah 5!! --}}

@section('title', $title ?? '')
