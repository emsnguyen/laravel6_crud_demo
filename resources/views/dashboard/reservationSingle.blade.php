@extends('layouts.default')
@section('title', 'View Single Reservation')
@section('content')
<div class="container">
    <div class="card my-5">
        <div class="card-header">
            <h2>You're booked for the {{ $hotelInfo->name }} in {{ $hotelInfo->location }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ $hotelInfo->image }}" alt="Front of hotel" class="img-fluid">
                </div>
                <div class="col-sm-6">
                    <h3 class="card-title">
                    {{$hotelInfo->name}} <small>{{$hotelInfo->location}}</small>
                    </h3>
                <p class="card-text">{{$hotelInfo->description}}</p>
                <p class="card-text">Arrival: <strong>{{$hotelInfo->arrival}}</strong></p>
                <p class="card-text">Departure: <strong>{{$hotelInfo->arrival}}</strong></p>
                <p class="card-text">Room: <strong>{{$hotelInfo->room['type']}}</strong></p>
                <p class="card-text">Guests: <strong>{{$hotelInfo->num_of_guests}}</strong></p>
                <p class="card-text">Price: <strong>{{$hotelInfo->room['price']}}</strong></p>
                </div>
            </div>
            <div class="text-center mt-3">
            <a href="/dashboard/reservations/{{$reservation->id}}/edit" class="btn btn-lg btn-success">Edit this reservation</a>
            <a href="/dashboard/reservations/{{$reservation->id}}/delete" class="btn btn-lg btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection
