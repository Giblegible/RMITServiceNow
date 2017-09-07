@extends('layouts.master')
@section('title', 'Request Service')
@section('content')
    <div class="container">
        <section id="action" class="responsive">

            <div class="vertical-center">

                <div class="container" >

                    <div class="row">

                        <div class="action">

                            <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                                <h1 class="title"><b>Request Service</b></h1>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <div class="col-md-12"><br></div>
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
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        {!! Form::model($query, ['action' => 'CustomerQueryController@store', 'id' => 'submitQuery']) !!}
        {{ csrf_field() }}
        <div><h2>Personal Details</h2></div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-12">
                    {!! Form::label('name', 'Name', array('class' => 'col-form-label')) !!}
                    {!! Form::text('name',  Auth::user()->name , ['class' => 'form-control', 'readonly' => 'true']) !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    {!! Form::label('email', 'Email', array('class' => 'col-form-label')) !!}
                    {!! Form::text('email', Auth::user()->email, ['class' => 'form-control', 'readonly' => 'true']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-12">
                    {!! Form::label('phoneNum', 'Phone Number', array('class' => 'col-form-label')) !!}
                    {!! Form::text('phoneNum', '', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    {!! Form::label('program', 'Program Code', array('class' => 'col-form-label')) !!}
                    {!! Form::text('program', '', ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <hr>

        <div><h2>Service Details</h2></div>
        <div class="col-md-6">
            <div class="form-group row">
                <div class="col-md-12">
                    {!! Form::label('serviceArea', 'Service Type', array('class' => 'col-form-label')) !!}<br>
                    {!! Form::select('serviceArea', ['Gmail' => 'Gmail', 'Computer (Hardware)' => 'Computer (Hardware)',
                        'Computer (Software)' => 'Computer (Software)',
                        'Network' => 'Network'], ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    {!! Form::label('workArea', 'Work Area', array('class' => 'col-form-label')) !!}<br>
                    {!! Form::select('workArea', ['Art' => 'Art', 'Economics, Finance and Marketing' =>
                        'Economics, Finance and Marketing', 'Engineering' => 'Engineering',
                        'Science' => 'Science', 'Business IT and Logistics' => 'Business IT and Logistics'],
                        ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group row" id="computerHardware">
                <div class="col-md-12">
                    {!! Form::label('hardwareType', 'Hardware Type', array('class' => 'col-form-label')) !!}<br>
                    {!! Form::select('hardwareType', ['Not specified' => 'Not specified', 'Mac' => 'Mac', 'Windows PC' => 'Windows PC',
                        'Linux' => 'Linux'], ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row" id="computerSoftware">
                <div class="col-md-12">
                    {!! Form::label('softwareType', 'Software Type', array('class' => 'col-form-label')) !!}<br>
                    {!! Form::select('softwareType', ['Not specified' => 'Not specified', 'OSX' => 'OSX', 'Windows' => 'Windows',
                        'Microsoft Office' => 'Microsoft Office', 'Lectopia' => 'Lectopia',
                        'Other' => 'Other'], ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                {!! Form::label('problemDescription', 'Request Description', array('class' => 'col-form-label')) !!}
                {!! Form::textarea('problemDescription', '', ['class' => 'form-control']) !!}
            </div>
        </div>

        <button class="btn btn-success pull-right" type="submit">Submit Request</button>

        {!! Form::close() !!}
    </div>
@endsection
