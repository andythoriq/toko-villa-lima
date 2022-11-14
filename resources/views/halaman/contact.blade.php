@extends('components.main')
@section('main')
        <h1>{{ $title ? 'Beri Kami Saran' : '' }}</h1>
@endsection

@section('tombol')
    <button class="btn btn-outline-light" type="button"><i class="fa-brands fa-square-whatsapp fs-1"></i><p class="mb-0">pesan melalui WhatsApp</p></button>
</div>
@endsection

@section('description', $description ?? '')

@section('title', $title ?? '')
