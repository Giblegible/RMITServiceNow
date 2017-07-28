<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('includes.head')
<body>
<div class="flex-center position-ref full-height">
    @include('includes/login')
    <div class="content">
        <div class="title m-b-md">
            Track Progress
        </div>

        @include('includes/nav')
    </div>
</div>
</body>
@include('includes/footer')
</html>
