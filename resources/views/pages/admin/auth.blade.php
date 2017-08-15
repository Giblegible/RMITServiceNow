@extends('layout.master')
@section('title', 'Home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Admin</h2>
                </div>
            </div>
        </div>
        <div>
            <ul>
                <li>
                    <a href="{{URL::to('pages/admin/adminRequestService')}}">Tickets</a>
                </li>
            </ul>
        </div>
    </div>
@endsection