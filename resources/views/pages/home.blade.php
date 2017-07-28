<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>
<div class="">
    @if (Route::has('login'))
        <div class="">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif

    <div class="">
        <div class="">
            Service Now
        </div>
        @include('includes/nav')

    </div>
</div>
</body>
@include('includes/footer')
</html>
