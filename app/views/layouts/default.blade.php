<!doctype html>
<html class="no-js">

  <head>
    <meta charset="utf-8">
    <title>@section('title')Laravel Blog @show</title>
    <meta name="keywords" content="@section('keywords') Laravel,Blog @show" />
    <meta name="description" content="@section('description') Laravel-Blog is a blog application written in Laravel 4.2. @show">

    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="{{ cdn("/assets/styles/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ cdn("/assets/styles/main.css") }}"> -->
    <link rel="stylesheet" href="/blog/public/assets/styles/bootstrap.css">
    <link rel="stylesheet" href="/blog/public/assets/styles/main.css">
    <link rel="stylesheet" type="text/css" href="/blog/public/assets/styles/datepicker3.css">
    <script>
        Config = {
            'cdnDomain': '{{ getCdnDomain() }}',
            'user_id': {{ $currentUser ? $currentUser->id : 0 }},
            'routes': {
            },
            'token': '{{ csrf_token() }}',
        };
    </script>

    @yield('styles')

  </head>

  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="container main">

        @include('layouts.partials.topnav')

        @include('flash::message')

        <div class="content">

            @yield('content')
        </div>

        <div class="footer">
            <p>
                <span class="glyphicon glyphicon-heart"></span> from The EST Group
                <span class="pull-right">
                    <i class="fa fa-github" style="font-size:15px"></i> <a href="https://github.com/summerblue/laravel-blog" target="_blank">Project at Github</a>.
                </span>
            </p>
        </div>

    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <script src="/blog/public/assets/scripts/jquery.pjax.js"></script>
    <script src="/blog/public/assets/scripts/jquery.scrollUp.js"></script>
    <script src="/blog/public/assets/scripts/nprogress.js"></script>
    <script src="/blog/public/assets/scripts/main.js"></script>
    <script src="/blog/public/assets/scripts/bootstrap-datepicker.js"></script>

    @yield('scripts')

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');      
    </script>

</body>
</html>
