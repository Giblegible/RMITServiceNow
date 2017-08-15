@extends('layout.master')
@section('title', 'View Tickets')
@section('content')
    <div class="container">
        @include('includes.requestService.requestServiceShow')
        <a href="{{ URL::asset('pages/requestService/'.$ticket->id.'/edit') }}" class="btn btn-success">Update</a>
        <a href="{{ URL::to('pages/requestService') }}" class="btn btn-info">Back</a>
    </div>

@endsection