@extends('layout.master')
@section('title', 'Request Service')
@section('content')
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
    {!! Form::model($query, ['action' => 'CustomerQueryController@store']) !!}

    <div class="form-group">
        {!! Form::label('serviceArea', 'Service Area') !!}
        {!! Form::text('serviceArea', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('workArea', 'Work Area') !!}
        {!! Form::text('workArea', '', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('problemDescription', 'Problem Description') !!}
        {!! Form::text('problemDescription', '', ['class' => 'form-control']) !!}
    </div>

    <button class="btn btn-success" type="submit">Submit Request</button>

    {!! Form::close() !!}
@endsection