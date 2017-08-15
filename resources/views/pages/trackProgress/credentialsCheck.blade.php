@extends('layout.master')
@section('title', 'Track Progress')
@section('content')
    <div class="container">
        <hr>
        <div class="row">
            <form action="{{ url('/{findEmail}') }}" method="get">
                <div class="container">
                    <label>Email:</label><input type="text" name="findEmail">
                    <button class="btn btn-success" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
@endsection
