<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
<style>
    @font-face {
        font-family: 'fa-regular-400';
        src: url("{{asset('fontawesome/webfonts/fa-regular-400.woff2')}}") format("woff2");
    }
    @font-face {
    font-family: 'sparky_stonesregular';
    src: url("{{asset('fontawesome/webfonts/sparkystonesregular-bw6ld-webfont.woff2')}}") format("woff2"),
         url("{{asset('fontawesome/webfonts/sparkystonesregular-bw6ld-webfont.woff')}}") format("woff");
    font-weight: normal;
    font-style:normal;
}
@font-face {
    font-family: 'cascadia_coderegular';
    src: url("{{asset('fontawesome/webfonts/cascadia-webfont.woff2')}}") format('woff2'),
         url("{{asset('fontawesome/webfonts/cascadia-webfont.woff')}}") format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'edoregular';
    src: url("{{ asset('fontawesome/webfonts/edo-webfont.woff2') }}") format("woff2"),
         url("{{ asset('fontawesome/webfonts/edo-webfont.woff') }}") format("woff");
    font-weight: normal;
    font-style: normal;
}
    main h1{
        font-family: 'sparky_stonesregular';
    }
    main .card{

    }
    nav{
        font-family: 'fa-regular-400';
    }
    .jumbotron h1{
        font-family: 'edoregular';
    }
    .jumbotron p{
        font-family: 'cascadia_coderegular';
    }
</style>
