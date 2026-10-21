<!doctype html>
<html lang="en">

<head>
    @include('landing.layouts.head')
</head>

<body>
    @include('landing.layouts.header')
    @yield('content')
    @include('landing.layouts.footer')
    @include('landing.layouts.script')
</body>

</html>