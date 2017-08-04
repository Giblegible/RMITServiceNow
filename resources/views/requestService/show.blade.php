@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="container">
        <h2>{{ $ticket->id }}</h2>
        <hr>

        <div class="row">
            <div class="col-md-2">
                <p>{{ $ticket->id}}</p>
            </div>
            <div class="col-md-2">
                <p>{{ $ticket->serviceArea}}</p>
            </div>
            <div class="col-md-2">
                <p>{{ $ticket->workArea}}</p>
            </div>
            <div class="col-md-2">
                <p>{{ $ticket->problemDescription}}</p>
            </div>
            <div class="col-md-2">
                <p>{{ $ticket->hardwareType}}</p>
            </div>
            <div class="col-md-2">
                <p>{{ $ticket->softwareType}}</p>
            </div>
        </div>
        <hr>
    </div>

@endsection