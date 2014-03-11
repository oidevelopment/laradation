<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- This statement is for EI8 -->
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
        <script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
        <script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <![endif]-->

        <title></title>
        @section('head')
            <link rel="stylesheet" href="{{ url('css/app.css') }}" />
            <script src="{{ url('bower_components/modernizr/modernizr.js') }}"></script>
        @show
    </head>
	<body>
		@include('layouts.header')
		@yield('body')
		@include('layouts.footer')
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="{{ url('bower_components/foundation/js/foundation.min.js') }}"></script>
        <script src="{{ url('js/app.js') }}"></script>

        <!-- This JS link is for EI8 -->
        <script src="http://github.com/chuckcarpenter/REM-unit-polyfill"></script>
    </body>
</html>
