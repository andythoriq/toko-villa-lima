@extends('components.main')

@section('main')
    <h1>{{ $title ? 'Produk yang akan dibeli' : ''}}</h1>
    <hr>
    <form action="{{ route('cart') }}" method="post">


    </form>
@endsection

@section('description', $description ?? '')

@section('title', $title ?? '')
