<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="author" content="Lukas Oppermann – vea.re" />
	<meta name="description" content="{{Config::get('data.description', 'The portfolio of freelance designer Lukas Oppermann, interface design, print design, branding & information graphics')}}" />
	<meta name="robots" content="index,follow" />
	<meta name="language" content="de" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1" name="viewport">
	<link rel="stylesheet" href="{{asset('/css/app.css')}}" type="text/css" media="screen" charset="utf-8">
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
	<title>{{app::make('Utilities')->variable($title,"Copra PDMS (Patienten-Daten-Management-System)")}} | Copra Systems GmbH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1,maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
</head>
<body>
	
	@include('pages.navigation')
	
	<div id="content">
		@yield('content','')
	</div>
	<script data-main="{{asset('/js/main')}}" src="{{asset('/js/bower_components/requirejs/require.js')}}"></script>

</body>
</html>