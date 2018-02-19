<!DOCTYPE html>
<html>
<head>
	<title>
	@yield('title','TestIT')
	</title>
	<meta charset='utf-8'>
	<link href="/css/testit.css" type='text/css' rel='stylesheet'> 
	@yield('head')
	
</head>
<body >
	
	<header id="header">
		<p id="titlu">Teste IT</p>
	</header>
	
	<div id="nav">
		<p id="Subtitlu"> HTML &nbsp&nbsp CSS &nbsp&nbsp PHP</p>
	</div>
	
	<section id="section">
		<div id="main">
			@yield('content')
		</div>
	</section>
	
	<footer id="footer">
		<br/>
		<div style="margin:auto; width:70%"><b>Fii Practic</b> - Laravel Project <br> <em>by Ionel Gotcu</em> &copy;{{date('Y')}} </div>
	</footer>

	@yield('body')
	
</body>
</html>