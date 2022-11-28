<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.metaDatas')
</head>
<body>
    @include('components.nav')
    @include('components.jumbotron')
    @include('components.alert')
    <main class="container rounded-5">
        @yield('main')
    </main>
    @include('components.footer')
    @include('components.scripts')
</body>
</html>
