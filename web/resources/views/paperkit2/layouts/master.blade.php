<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('themes/paperkit2/assets/img/favicon.ico') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('themes/paperkit2/assets/img/apple-icon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>
        {{ config('app.name') }}
    </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="{{ asset('themes/paperkit2/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('themes/paperkit2/assets/css/paper-kit.css?v=2.1.0') }}" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="{{ asset('themes/paperkit2/assets/css/demo.css') }}" rel="stylesheet" />

    <!--     Fonts and icons     -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{ asset('themes/paperkit2/assets/css/nucleo-icons.css') }}" rel="stylesheet">

</head>
<body>
    @yield('content')
</body>

<!-- Core JS Files -->
<script src="{{ asset('themes/paperkit2/assets/js/jquery-3.2.1.js') }}" type="text/javascript"></script>
<script src="{{ asset('themes/paperkit2/assets/js/jquery-ui-1.12.1.custom.min.js') }}" type="text/javascript"></script>
<!-- <script src="{{ asset('themes/paperkit2/assets/js/tether.min.js" type="text/javascript"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') }}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="{{ asset('themes/paperkit2/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>


<!--  Paper Kit Initialization snd functons -->
<script src="{{ asset('themes/paperkit2/assets/js/paper-kit.js?v=2.1.0') }}"></script>

</html>
