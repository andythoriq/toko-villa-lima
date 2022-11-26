@extends('components.main')

@section('main')
    <h1>{{ $title ? 'Produk yang akan dibeli' : ''}}</h1>
    <hr>
    <form action="{{ route('cart') }}" method="post">


    </form>
@endsection

@section('tombol')
    <button class="btn btn-outline-light" type="button"><i class="fa-brands fa-square-whatsapp fs-1"></i><p class="mb-0">pesan melalui WhatsApp</p></button>
@endsection

@section('description', $description ?? '')

@section('title', $title ?? '')
