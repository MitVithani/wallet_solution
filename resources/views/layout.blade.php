
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!---<title> Responsive Registration Form | CodingLab </title>--->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta charset="utf-8">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="{{ asset('public/css/auth.css') }}" rel="stylesheet">
        <title>{{ config('app.name') }}</title>
        <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container d-block text-left col-md-6">
            <a class="navbar-brand d-inline" href="#"><img alt="image" src="{{ asset('public/img/logo1.png') }}" width="35%";></a>
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}

                {{-- <a class="nav-link" href="{{ route('login-user') }}">Login</a> --}}

                {{-- <a class="nav-link" href="{{ route('register') }}">Register</a> --}}

            {{-- </div> --}}
            @yield('nav_bar_content')
        </div>
    </nav>
    <div class="container">
        {{-- <div class="title">Registration</div> --}}
        <div class="content">
            @yield('content')
        </div>
    </div>

    @yield('page_scripts')

    </body>
</html>
