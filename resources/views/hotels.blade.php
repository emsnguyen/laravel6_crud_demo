@extends('layouts.default')
@section('title', 'Hotel Lists')
@section('content')
<p>session value: {{$value}}</p>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Location</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hotels as $hotel)

            <tr>
                <th scope="row">{{ $hotel->id }}</th>
                <td>{{ $hotel->name }}</td>
                <td>{{ $hotel->description }}</td>
                <td>{{ $hotel->location }}</td>
                <td><img src="{{ $hotel->image }}" alt="front of hotel" class="image-fluid"></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
