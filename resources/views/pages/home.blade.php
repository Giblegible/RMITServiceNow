<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>
@include('includes/header')
<div class="">
    @include('includes/login')
    <div id="welcomeMessage">
        <h2>Welcome to the RMIT Service Now Portal</h2>
    </div>

    <div id="filter" class="col-md-12 text-center">
        <div id="critical" class="col-md-4">
            <h4>Critical</h4>
            <p>Is your issue critical?</p>
            <p>Call our IT Help Team on 9999 9999</p>
        </div>

        <div id="non-critical" class="col-md-4">
            <h4>Non Critical</h4>
            <p>Is your issue non-critical?</p>
            <a href="{{ URL::to('reportissue') }}">Report your issue here</a>
        </div>

        <div id="general-advise" class="col-md-4">
            <h4>General Advise</h4>
            <p>Just need some basic help? Try reading through our FAQ's for assistance!</p>
        </div>

    </div>
    <div id="about" class="text-center">
        <h3>About RMIT ITS Team</h3>
        <p>We are awesome</p>
    </div>

    <div id="howto" class="text-center">
        <h3>How does the RMIT Ticketing System Work?</h3>
        <p>It works by flow</p>
    </div>

    <div id="faqs">
        <h3>FAQ's</h3>
        <ul>
            <li>
                How long will it take?
                <ul>
                    <li>
                        As long as a piece of string
                    </li>
                </ul>
            </li>

        </ul>
    </div>

</div>
</body>
@include('includes/footer')
</html>
