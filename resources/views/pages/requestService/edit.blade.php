@extends('layout.master')
@section('title', 'Request Service')
@section('content')
    <h1>Update Issue</h1>

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
    {!! Form::model($ticket, ['method' => 'PATCH','route'=>['requestService.update',$ticket->id]]) !!}
    <div class="form-group">
        {!! Form::label('problemStatus', 'Problem Status:') !!}
        {!! Form::select('problemStatus', ['New' => 'New', 'Acknowledged' => 'Acknowledged', 'In Progress' => 'In Progress',
                    'Testing' => 'Testing', 'Fixed' => 'Fixed'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('problemSeverity', 'Problem Severity:') !!}
        {!! Form::text('problemSeverity',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('comments', 'Comments:') !!}
        {!! Form::text('comments',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
        <a href="{{ URL::to('pages/requestService', $ticket->id) }}" class="btn btn-info">Back</a>
    </div>
    {!! Form::close() !!}
@endsection