@extends('layouts.master')
@section('title', 'Track Progress')
@section('content')
    <div class="container">
        <section id="action" class="responsive">

            <div class="vertical-center">

                <div class="container" >

                    <div class="row">

                        <div class="action">

                            <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                                <h1 class="title"><b>Your Tickets</b></h1>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <div id="displayDataIndexPage">
            <hr>
            <h2><button id="pendingTicketsOption">Pending Tickets ({{ count($tickets->where('problemStatus', 'Pending')) }}) <i class="fa fa-angle-down" aria-hidden="true"></i></button></h2>
            <hr>
            <div id="pendingTickets">
                @foreach($tickets as $ticket)
                    @if($ticket->problemStatus === "Pending")
                        <div class="row">
                            <div class="col-md-10">
                                <h4>ID: {{ $ticket->id }} - Status: {{ $ticket->problemStatus }}</h4>
                                <h5>Problem Description: {{ $ticket->problemDescription }}</h5>
                                <h5>Service Area: {{ $ticket->serviceArea }} - Work Area: {{ $ticket->workArea }}</h5>
                                <h5>Last Updated: {{ $ticket->updated_at->timezone('Australia/Melbourne')->format('H:i d-m-Y') }}</h5>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ URL::to('pages/requestService', $ticket->id) }}" class="btn btn-success">More info.</a>
                            </div>
                        </div>
                        <hr>
                    @endif
                @endforeach
            </div>

            <hr>
            <h2><button id="inProgressOption">In Progress Tickets ({{ count($tickets->where('problemStatus', 'In Progress')) }}) <i class="fa fa-angle-down" aria-hidden="true"></i></button></h2>
            <hr>
            <div id="inProgress">
                @foreach($tickets as $ticket)
                    @if($ticket->problemStatus === "In Progress")
                        <div class="row">
                            <div class="col-md-10">
                                <h4>ID: {{ $ticket->id }} - Status: {{ $ticket->problemStatus }}</h4>
                                <h5>Problem Description: {{ $ticket->problemDescription }}</h5>
                                <h5>Service Area: {{ $ticket->serviceArea }} - Work Area: {{ $ticket->workArea }}</h5>
                                <h5>Last Updated: {{ $ticket->updated_at->timezone('Australia/Melbourne')->format('H:i d-m-Y') }}</h5>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ URL::to('pages/requestService', $ticket->id) }}" class="btn btn-success">More info.</a>
                            </div>
                        </div>
                        <hr>
                    @endif
                @endforeach
            </div>

            <hr>
            <h2><button id="unresolvedOption">Unresolved Tickets ({{ count($tickets->where('problemStatus', 'Unresolved')) }}) <i class="fa fa-angle-down" aria-hidden="true"></i></button></h2>
            <hr>
            <div id="unresolved">
                @foreach($tickets as $ticket)
                    @if($ticket->problemStatus === "Unresolved")
                        <div class="row">
                            <div class="col-md-10">
                                <h4>ID: {{ $ticket->id }} - Status: {{ $ticket->problemStatus }}</h4>
                                <h5>Problem Description: {{ $ticket->problemDescription }}</h5>
                                <h5>Service Area: {{ $ticket->serviceArea }} - Work Area: {{ $ticket->workArea }}</h5>
                                <h5>Last Updated: {{ $ticket->updated_at->timezone('Australia/Melbourne')->format('H:i d-m-Y') }} <i class="fa fa-angle-down" aria-hidden="true"></i></h5>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ URL::to('pages/requestService', $ticket->id) }}" class="btn btn-success">More info.</a>
                            </div>
                        </div>
                        <hr>
                    @endif
                @endforeach
            </div>

            <hr>
            <h2><button id="resolvedOption">Resolved Tickets ({{ count($tickets->where('problemStatus', 'Resolved')) }}) <i class="fa fa-angle-down" aria-hidden="true"></i></button></h2>
            <hr>
            <div id="resolved">
                @foreach($tickets as $ticket)
                    @if($ticket->problemStatus === "Resolved")
                        <div class="row">
                            <div class="col-md-10">
                                <h4>ID: {{ $ticket->id }} - Status: {{ $ticket->problemStatus }}</h4>
                                <h5>Problem Description: {{ $ticket->problemDescription }}</h5>
                                <h5>Service Area: {{ $ticket->serviceArea }} - Work Area: {{ $ticket->workArea }}</h5>
                                <h5>Last Updated: {{ $ticket->updated_at->timezone('Australia/Melbourne')->format('H:i d-m-Y') }}</h5>
                            </div>
                            <div class="col-md-2">
                                <a href="{{ URL::to('pages/requestService', $ticket->id) }}" class="btn btn-success">More info.</a>
                            </div>
                        </div>
                        <hr>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection