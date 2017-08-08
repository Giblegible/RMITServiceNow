@extends('layout.master')
@section('title', 'Request Service')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Request Service</h2>
                </div>
            </div>
        </div>
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

        <hr>
        {!! Form::model($query, ['action' => 'CustomerQueryController@store', 'id' => 'submitQuery']) !!}
        <div class="form-group row">
            {!! Form::label('serviceArea', 'Service Type', array('class' => 'col-md-2 col-form-label')) !!}
            <div class="col-md-10">
                {!! Form::select('serviceArea', ['Gmail' => 'Gmail', 'Computer (Hardware)' => 'Computer (Hardware)',
                    'Computer (Software)' => 'Computer (Software)',
                    'Network' => 'Network'], ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('workArea', 'Work Area', array('class' => 'col-md-2 col-form-label')) !!}
            <div class="col-md-10">
                {!! Form::select('workArea', ['Art' => 'Art', 'Economics, Finance and Marketing' =>
                    'Economics, Finance and Marketing', 'Engineering' => 'Engineering',
                    'Science' => 'Science', 'Business IT and Logistics' => 'Business IT and Logistics'],
                    ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row" id="computerHardware">
            {!! Form::label('hardwareType', 'Hardware Type', array('class' => 'col-md-2 col-form-label')) !!}
            <div class="col-md-10">
                {!! Form::select('hardwareType', ['Not specified' => 'Not specified', 'Mac' => 'Mac', 'Windows PC' => 'Windows PC',
                    'Linux' => 'Linux'], ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row" id="computerSoftware">
            {!! Form::label('softwareType', 'Software Type', array('class' => 'col-md-2 col-form-label')) !!}
            <div class="col-md-10">
                {!! Form::select('softwareType', ['Not specified' => 'Not specified', 'OSX' => 'OSX', 'Windows' => 'Windows',
                    'Microsoft Office' => 'Microsoft Office', 'Lectopia' => 'Lectopia',
                    'Other' => 'Other'], ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group row">
            {!! Form::label('problemDescription', 'Request Description', array('class' => 'col-md-2 col-form-label')) !!}
            <div class="col-md-10">
                {!! Form::text('problemDescription', '', ['class' => 'form-control']) !!}
            </div>
        </div>

        {!! Form::text('problemStatus', 'New', ['id' => 'problemStatusField']) !!}

        <button class="btn btn-success" type="submit">Submit Request</button>

        {!! Form::close() !!}
    </div>
@endsection
