<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.metaDatas')
</head>
<body>
    @include('components.nav')
    @yield('main')
    @include('components.footer')
    @include('components.scripts')
</body>
</html>
