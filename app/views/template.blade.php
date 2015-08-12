<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="description" content="{{Config::get('data.description', 'COPRA PDMS')}}" />
	<meta name="robots" content="index,follow" />
	<meta name="language" content="de" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1" name="viewport">
	<link rel="shortcut icon" href="{{asset('layout/favicon.png')}}">
	<link rel="icon" href="{{asset('layout/favicon.png')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('/css/app.min.css')}}" type="text/css" media="screen">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600' rel='stylesheet' type='text/css'>
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
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-1850438-1', 'auto');
	ga('set', 'anonymizeIp', true);
	ga('send', 'pageview');
	</script>

</body>
</html>
