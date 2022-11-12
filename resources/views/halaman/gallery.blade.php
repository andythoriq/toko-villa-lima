@extends('components.main')
@section('main')
        <h1>test -> ini adalah {{ $title ?? '' }}</h1>
@endsection
@section('description', $description ?? '')

@section('title', $title ?? '')
