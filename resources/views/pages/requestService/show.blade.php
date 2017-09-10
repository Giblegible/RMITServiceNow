@extends('layouts.master')
@section('title', 'View Tickets')
@section('content')
    <div class="container">
        @if(Auth::user()->email === $ticket->customer->email)
            @include('includes.requestService.requestServiceShow')
            <div class="container">
                {!! Form::open(['action' => 'CustomerQueryController@getUserQueries']) !!}
                <a href="{{ URL::asset('pages/requestService/'.$ticket->id.'/edit') }}" class="btn btn-success">Update</a>
                {!! Form::text('emailText', $ticket->customer->email, ['class' => 'form-control hidden']) !!}
                <button class="btn btn-success" type="submit">Back</button>
                {!! Form::close() !!}
            </div>
        @else
            <section id="action" class="responsive">

                <div class="vertical-center">

                    <div class="container" >

                        <div class="row">

                            <div class="action">

                                <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                                    <h1 class="title"><b>Access Denied</b></h1>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>
            <a href="{{ URL::to('pages/trackProgress/userQueries') }}" class="btn btn-warning">Track Progress</a>
        @endif
    </div>
@endsection