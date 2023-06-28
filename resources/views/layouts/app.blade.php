<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  
    <!-- Styles -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <!-- responsive style -->
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
</head>
<body>
    <main class="app-content">
        @yield('content')
    </main>
    <script type="text/javascript" src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
    @stack('scripts')
</body>
</html>
