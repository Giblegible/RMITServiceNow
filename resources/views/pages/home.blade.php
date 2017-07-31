<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>
@include('includes/header')
<div class="">
    @include('includes/login')

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>What We Do</h2>
                <p>The RMIT IT Support team is a group of skilled individuals who's primary role is to assist and educate customers as the first point
                    of contact. We aim to solve a wide range of issues and problems that our staff or students cannot solve.</p>
            </div>
            <div class="col-sm-4">
                <h2>Contact Us</h2>
                <address>
                    <strong>RMIT ITS</strong>
                    <br>Building 88 Level 10
                    <br>RMIT City campus
                    <br>440 Elizabeth Street
                    <br>Melbourne
                    <br>
                </address>
                <address>
                    <abbr title="Phone">P:</abbr>+61 3 9925 8600
                    <br>
                    <abbr title="Email">E:</abbr> <a href="mailto:#">its.reception@rmit.edu.au</a>
                </address>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-4 filter">
                <i class="fa fa-exclamation-triangle icon" aria-hidden="true" id="critical"></i>
                <h2>Critical</h2>
                <p>These marketing boxes are a great place to put some information. These can contain summaries of what the company does, promotional information, or anything else that is relevant to the company. These will usually be below-the-fold.</p>
            </div>
            <div class="col-sm-4 filter">
                <i class="fa fa-exclamation icon" aria-hidden="true" id="non-critical"></i>
                <h2>Non Critical</h2>
                <p>The images are set to be circular and responsive. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
            <div class="col-sm-4 filter">
                <i class="fa fa-question icon" aria-hidden="true" id="general"></i>
                <h2>General Advise</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                FAQ's
            </div>
            <div class="panel-body">
                <ul>
                    <li>
                        Blah
                        <ul>
                            <li>
                                Bluh
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

</div>
</body>
@include('includes/footer')
</html>
