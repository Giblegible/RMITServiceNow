    <!-- Navigation -->
    <header id="header">

        <div class="navbar navbar-inverse" role="banner">

            <div class="container">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                        <span class="sr-only">Toggle navigation</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                    </button>


                    <a class="" href="{{ URL::to('home') }}">

                        <h1><img src="{{URL::asset('images/rmitlogonav.png')}}" alt="logo" ></h1>

                    </a>



                </div>

                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right" id="navigationBar">

                        <li id='homeL'><a href="{{ URL::to('home') }}">Home</a></li>

                        <li id='reqServiceL' ><a href="{{ URL::to('pages/requestService/create') }}">Request Service</a></li>

                        <li id='trackProgL' ><a href="{{ URL::to('trackProgress\credentialsCheck') }}">Track Progress</a></li>

                        <li id='adminL'><a href="{{ URL::to('pages/admin/auth') }}">ITS Staff</a></li>

                    </ul>

                </div>

            </div>

        </div>

    </header>
    <!--/#header-->