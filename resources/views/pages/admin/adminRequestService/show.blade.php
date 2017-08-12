@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="container">
        @include('includes.requestService.requestServiceShow')
        <a href="{{ route('adminRequestService.edit', $ticket->id) }}" class="btn btn-success">Update</a>
        <a href="{{ route('adminRequestService.index') }}" class="btn btn-info">Back</a>
    </div>

@endsection