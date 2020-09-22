<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="/assets/js/plugin/webfont/webfont.min.js"></script>
 	<!-- Font Awesome -->
 	<link rel="stylesheet" href="/assets/fontaw/css/all.css">

	<!-- CSS Files -->
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">
</head>
<body>
    <div class="wrapper">
        @yield('navbar')	
        @yield('sidebar')
        <div class="main-panel">
        @yield('main')
        @yield('footer')
		</div>
    </div>
	
   @yield('linkjs')
</body>
</html>