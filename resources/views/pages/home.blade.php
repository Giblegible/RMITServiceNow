@extends('layout.master')
@section('title', 'Home')
@section('content')
    <section id="home-slider">

        <div class="container">

            <div class="main-slider">

                <div class="slide-text">

                    <h1>Connect. Support. Learn.</h1>

                    <p>The RMIT IT Support team is a group of skilled individuals who's primary role is to assist and educate students and teachers. We aim to solve a wide range of issues and problems that our staff or students cannot solve,
                     and keep them connected to our network to optimize learning.</p>

                </div>

                <img src="{{URL::asset('images/home/slider/hill.png')}}" class="slider-hill" alt="slider image">

                <img src="{{URL::asset('images/home/slider/house.png')}}" class="img-responsive slider-house" alt="slider image">

                <img src="{{URL::asset('images/home/slider/birds1.png')}}" class="slider-birds1" alt="slider image">

                <img src="{{URL::asset('images/home/slider/birds2.png')}}" class="slider-birds2" alt="slider image">

                <img src="{{URL::asset('images/home/slider/sun.png')}}" class="slider-sun" alt="slider image">

            </div>

        </div>

        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>

    </section>

    <!--/#home-slider-->

    <section id="services">

        <div class="container">

            <div class="row">

                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">

                    <div class="single-service">

                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">

                            <i class="fa fa-question icon" aria-hidden="true" id="general"></i>

                        </div>

                        <h2>Seek advise</h2>

                        <p>We have established an elaborate and easy to read FAQ section that will help you with the basic tools to hotfix an issue! </p>

                    </div>

                </div>

                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">

                    <div class="single-service">

                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="600ms">

                            <i class="fa fa-exclamation icon" aria-hidden="true" id="non-critical"></i>

                        </div>

                        <h2>Submit a ticket</h2>

                        <p>Submit a query for a more direct issue related to you, do you need a service or have you found a bug in the network?
                            Provide as much detail as possible and our team will be able to assist you as soon as possible!</p>

                    </div>

                </div>

                <div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">

                    <div class="single-service">

                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">

                            <i class="fa fa-exclamation-triangle icon" aria-hidden="true" id="critical"></i>

                        </div>

                        <h2>Call our team</h2>

                        <p>Is your issue business critical or extremely urgent? Call our team immediately on +61 3 9925 8600
                            and we will advise you of the next steps to take.</p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--/#services-->

    <section id="action" class="responsive">

        <div class="vertical-center">

            <div class="container">

                <div class="row">

                    <div class="action take-tour">

                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                            <h1 class="title">About Us</h1>

                            <p>A responsive, fast &amp; easy to communicate support team.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--/#action-->

    <section id="features">

        <div class="container">

            <div class="row">

                <div class="single-features">

                    <div class="col-sm-5 col-sm-offset-1 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                        <i class="fa fa-envelope icon" aria-hidden="true" id="mail"></i>

                    </div>

                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">

                        <h2>Submit your ticket</h2>

                        <P>Submit your ticket to our experience and enthusastic team! Ensure you provide as much information as possible</P>

                    </div>

                </div>

                <div class="single-features">

                    <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                        <h2>Let our team work at the problem!</h2>

                        <p>Our team are some of the most experienced support professionals in the industry, however complex and multitudes of
                            tickets can take time to overcome. We will ensure that <b>all</b> tickets are responded to and updated within 48
                            hours of submission.</p>
                    </div>

                    <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">

                        <i class="fa fa-pencil icon" aria-hidden="true" id="pencil"></i>

                    </div>

                </div>

                <div class="single-features">

                    <div class="col-sm-5 col-sm-offset-1 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                        <img src="{{URL::asset('images/rmitready.gif')}}" alt="slider image">

                    </div>

                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">

                        <h2>Success!</h2>

                        <p>Happy students and staff is what we aim for! We strive to do better each time we come to a ticket. If you feel
                        that we have not adequately responded to your query, please let us know!</p>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endsection