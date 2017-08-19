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

                            <h1 class="title">How it works!</h1>

                            <p>A responsive, fast &amp; easy to use ticketing system.</p>

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

                <div class="single-features" id="homePageFeature">

                    <div class="col-sm-5 col-sm-offset-1 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                        <i class="fa fa-envelope icon" aria-hidden="true" id="mail"></i>

                    </div>

                    <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">

                        <h2>Submit your ticket</h2>

                        <P>Submit your ticket to our experience and enthusastic team! Ensure you provide as much information as possible</P>

                    </div>

                </div>

                <div class="single-features" id="homePageFeature">

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

                <div class="single-features" id="homePageFeature">

                    <div class="col-sm-5 col-sm-offset-1 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                        <img src="{{URL::asset('images/rmitready.gif')}}" alt="slider image" class="img-responsive" id="homePageImg">

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

    <section id="action" class="responsive">

        <div class="vertical-center">

            <div class="container">

                <div class="row">

                    <div class="action take-tour">

                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                            <h1 class="title">FAQs</h1>

                            <p>Commonly asked questions!</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <div class="container">
        <div class="col-md-12">
            <h3>1. How do I report an issue or request a service?</h3>
            <ul>
                <li><p>To report an issue or request a service you can submit a ticket through our <a href="{{ URL::to('pages/requestService/create') }}">'Request Service'</a> page.</p></li>
            </ul>

            <h3>2. How long should I have to wait to expect a response?</h3>
            <ul>
                <li><p>Wait time can depend on multiple factors, such as our peak periods (Timetable season) as well as potential events that cause a heavier load on the team. Generally speaking
                    we aim to respond to <i>all</i> queries within 72 hours.</p></li>
            </ul>

            <h3>3. How can I view the responses?</h3>
            <ul>
                <li><p>To view the response of an ITS Staff member, simply view the ticket you have created and a comments section can be located towards the bottom of the page. You can even reply!</p></li>
            </ul>

            <h3>4. I noticed a mistake after I submitted my ticket, how can I change this?</h3>
            <ul>
                <li><p>Don't stress! We all make mistakes, but this is easy to fix! All you have to do is view the ticket you have created and select 'Update', all details of the query can be updated without trouble!
                    (Please note that if a mistake was made in your personal details, this cannot be amended. Leave a comment on your query and the ITS Staff will be able to assist you)</p></li>
            </ul>

            <h3>5. My query has been resolved and I am happy to close this issue, how can I do this?</h3>
            <ul>
                <li><p>Once the ITS team have fixed your problem or been able to provide the service you required, feel free to "Close" the case. To do this, view your ticket and 'Update' the case,
                    from here on the top right corner of the page, you can select "Close Query".</p></li>
            </ul>
        </div>
    </div>
@endsection