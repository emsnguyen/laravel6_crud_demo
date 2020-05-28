@extends('layouts.default')
@section('tite', 'Home page')
@section('content')
@foreach($hotels as $hotel)
    <p>This is hotel {{ $hotel->name }}</p>
@endforeach
@stop
