@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="container">
        <h2>Tickets</h2>
        <hr>
        <div class="row">
            <div class="col-md-1">
                <h3>ID</h3>
            </div>
            <div class="col-md-2">
                <h3>Service Area</h3>
            </div>
            <div class="col-md-2">
                <h3>Work Area</h3>
            </div>
            <div class="col-md-2">
                <h3>Description</h3>
            </div>
            <div class="col-md-2">
                <h3>Status</h3>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <hr>
        @foreach($tickets as $ticket)
            <div class="row">
                <div class="col-md-1">
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
                    <p>{{ $ticket->problemStatus}}</p>
                </div>
                <div class="col-md-2">
                    <a href="{{ URL::to('pages/admin/adminRequestService', $ticket->id) }}" class="btn btn-success">More info.</a>
                </div>
            </div>
            <hr>
        @endforeach
    </div>

@endsection