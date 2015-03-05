<!DOCTYPE html>
<html lang="es">
<head>
	<title> @yield('title') </title>
	@include('includes.head')
	@yield('add_head')
	
</head>
<body>
	<header>	
		@yield('header')
	</header>	
		@yield('content')
	<footer>		
		@include('includes.footer')
	</footer>
	@include('includes.js')	
	@yield('add_js')	
</body>
</html>



	

