@extends('layouts.master')
@section('title', 'Home')
@section('content')
    <div class="container">
        <section id="action" class="responsive">

            <div class="vertical-center">

                <div class="container" >

                    <div class="row">

                        <div class="action">

                            <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                                <h1 class="title"><b>ITS Staff Portal</b></h1>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <div class="col-md-12">
            <h2>Customer Queries</h2>
            <a href="{{URL::to('pages/admin/adminRequestService')}}" class="btn btn-info">View All Tickets</a>
        </div>
    </div>
@endsection