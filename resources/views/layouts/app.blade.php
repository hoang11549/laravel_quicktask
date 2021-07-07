<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laravel Quickstart - Basic</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/fontawesome.min.css') }}"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
        type='text/css'>
    <!-- CSS And JavaScript -->

</head>

<body id="app-layout">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/task') }}">
                        Task List
                    </a>
                </div>
                {{-- <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default btn-lg dropdown-toggle " data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ __('Language') }}
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('language', ['en']) }}">{{ __('English') }}</a></li>
                        <li><a href="{{ route('language', ['vi']) }}">{{ __('Vietnamese') }}</a></li>
                    </ul>
                </div> --}}
            </div>
        </nav>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    @yield('content')
</body>

</html>
