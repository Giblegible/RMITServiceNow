@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="container">
        <h2>Tickets</h2>
        <hr>
        <p><b>Service Area</b></p>
        @foreach($tickets as $ticket)
            <p>{{ $ticket->serviceArea}}, {{ $ticket->workArea }}, {{ $ticket->problemDescription }}</p>
        @endforeach
    </div>

@endsection