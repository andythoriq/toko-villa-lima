@extends('components.main')
@section('main')
    <?php
        function dapatWaktu(){
            date_default_timezone_set("Asia/Jakarta");
            $hour = date('H', time());
            if( $hour > 6 && $hour <= 11) {
            return "Selamat Pagi";
            }
            else if($hour > 11 && $hour <= 15) {
            return "Selamat Siang";
            }
            else if($hour > 15 && $hour <= 19) {
            return "Selamat Sore";
            }
            else if($hour > 19 && $hour <= 22){
                return "Selamat Malam";
            }
            else if($hour > 22 && $hour <= 6){
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






@section('description', $description ?? '')
{{-- TODO!! : tambahkan lokasi lebih lengkap agar mengoptimalkan pencarian search engine!! --}}
{{-- TODO!! : tambah kan di setelah tulisan desa Pasir Jambu Villa Bogor Indah 5!! --}}

@section('title', $title ?? '')
