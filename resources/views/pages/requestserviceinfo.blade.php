@extends('layout.master')
@section('title', 'Request Service')
@section('content')
    <div class="flex-center position-ref full-height">
        @include('includes/login')
        <div class="content">
            <div class="title m-b-md">
                Request Service
            </div>
            <a href="{{URL::to('requestService/create')}}">Request a service!</a>
        </div>
    </div>
@endsection
