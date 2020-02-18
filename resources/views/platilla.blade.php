<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about">Acerca de</a></li>
			<li><a href="/contac">Contacto</a></li>
		</ul>
	</nav>
	@yield('contenido');
</body>
</html>