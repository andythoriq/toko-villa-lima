@extends('components.main')
@section('main')
        <h1>{{ $title ?? '' }}</h1>
@endsection
@section('description', $description ?? '')

@section('title', $title ?? '')
