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
    <div class="container">
        {!! Form::model($ticket, ['method' => 'PATCH','route'=>['adminRequestService.update',$ticket->id]]) !!}
        <div class="form-group">
            {!! Form::label('problemStatus', 'Problem Status:') !!}
            {!! Form::select('problemStatus', ['Pending' => 'Pending', 'In Progress' => 'In Progress',
                        'Unresolved' => 'Unresolved', 'Resolved' => 'Resolved'], $ticket->problemStatus, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('problemSeverity', 'Problem Severity:') !!}
            {!! Form::select('problemSeverity', ['Not Specified' => 'Not Specified', 'Low/Informational' => 'Low/Informational',
                'Minor Impact' => 'Minor Impact', 'Significant Impact' => 'Significant Impact',
                'Critical Impact' => 'Critical Impact'], $ticket->problemSeverity, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('comments', 'Comments:') !!}
            {!! Form::text('comments',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
            <a href="{{ URL::to('pages/admin/adminRequestService', $ticket->id) }}" class="btn btn-info">Back</a>
        </div>
        {!! Form::close() !!}
    </div>
@endsection