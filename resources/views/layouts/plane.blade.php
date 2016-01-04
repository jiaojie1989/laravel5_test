<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <title>SB Admin v2.0 in Laravel 5</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Start Bootstrap V2.0 With Laravel 5.x" name="description"/>
        <meta content="jiaojie" name="author"/>

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/metisMenu.css') }}" rel="stylesheet" />
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/Chart.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/metisMenu.js') }}"></script>
        <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    </head>
    <body>
        @yield('body')
<!--        <script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script> -->
    </body>
</html>