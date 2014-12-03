<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="author" content="Lukas Oppermann – vea.re" />
	<meta name="description" content="{{Config::get('data.description', 'The portfolio of freelance designer Lukas Oppermann, interface design, print design, branding & information graphics')}}" />
	<meta name="robots" content="index,follow" />
	<meta name="language" content="de" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1" name="viewport">
	<link rel="shortcut icon" href="{{asset('layout/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('layout/favicon.ico')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('/css/'.Config::get('app.appcss'))}}" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<title>{{variable($title,"COPRA PDMS (Patienten-Daten-Management-System)")}} | COPRA Systems GmbH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
</head>
<body>

	@include('pages.navigation')
	<div class="main-content">
		@yield('content','')
	</div>

	@include('partials.footer')

	<script data-main='{{asset("/js/".Config::get('app.appjs'))}}' src="{{asset('/js/bower_components/requirejs/require.js')}}"></script>

</body>
</html>
