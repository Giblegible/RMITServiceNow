@extends('layout.master')
@section('title', 'Track Progress')
@section('content')
    <div class="container">
        <section id="action" class="responsive">

            <div class="vertical-center">

                <div class="container" >

                    <div class="row">

                        <div class="action">

                            <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                                <h1 class="title"><b>Track Progress</b></h1>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <hr>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if ($message = Session::get('fail'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            {!! Form::open(['action' => 'CustomerQueryController@getUserQueries']) !!}
            <div class="container">
                <div class="col-md-6">
                    {!! Form::label('email', 'Enter Email Address', array('class' => 'col-form-label')) !!}
                    {!! Form::text('emailText', '', ['class' => 'form-control']) !!}
                    <button id="searchButton" class="btn btn-success" type="submit">Search</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
