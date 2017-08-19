@extends('layout.master')
@section('title', 'Request Service')
@section('content')
    <section id="action" class="responsive">

        <div class="vertical-center">

            <div class="container" >

                <div class="row">

                    <div class="action">

                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                            <h1 class="title"><b>Update {{ $ticket->customer->name }}'s Issue - ID: {{ $ticket->id }}</b></h1>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

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
    <div class="container">
        <hr>
        <a href="{{ URL::to('pages/admin/adminRequestService', $ticket->id) }}" class="btn btn-info">Back</a>
        <hr>
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
            {!! Form::textarea('comments',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
            <a href="{{ URL::to('pages/admin/adminRequestService', $ticket->id) }}" class="btn btn-info">Back</a>
        </div>
        {!! Form::close() !!}
    </div>
@endsection