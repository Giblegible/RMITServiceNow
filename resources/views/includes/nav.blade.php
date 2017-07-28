<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">RMIT Service Now</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ URL::to('home') }}">Home</a></li>
            <li><a href="{{ URL::to('requestservice') }}">Request Service</a></li>
            <li><a href="{{ URL::to('trackprogress') }}">Track Progress</a></li>
            <li><a href="{{ URL::to('reportissue') }}">Report Issue</a></li>
        </ul>
    </div>
</nav>