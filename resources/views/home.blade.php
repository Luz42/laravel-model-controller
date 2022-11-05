@extends('Layout.layout')

@section('title')
    laravel-model-controller
@endsection

@section('content')
    @foreach ($movie as $item)
        @include('partials.card')
    @endforeach    
@endsection

