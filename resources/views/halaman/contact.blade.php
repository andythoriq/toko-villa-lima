@extends('components.main')
@section('main')
        <h1>{{ $title ? 'Beri Kami Saran' : '' }}</h1>
        <hr>
@endsection

@section('tombol')
    <button class="btn btn-outline-light" type="button"><i class="fa-brands fa-square-whatsapp fs-1"></i><p class="mb-0">hubungi melalui WhatsApp</p></button>
@endsection

@section('description', $description ?? '')

@section('title', $title ?? '')
