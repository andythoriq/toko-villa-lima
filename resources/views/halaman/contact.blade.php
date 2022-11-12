@extends('components.main')
@section('main')
    <main class="container">
        <h1>test -> ini adalah {{ $title ?? '' }}</h1>
    </main>
@endsection
@section('description', $description ?? '')

@section('title', $title ?? '')
