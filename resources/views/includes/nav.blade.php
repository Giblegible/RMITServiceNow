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

                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                    </ul>

                </div>

            </div>

        </div>

    </header>
    <!--/#header-->