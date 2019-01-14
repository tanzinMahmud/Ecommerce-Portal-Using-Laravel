<?php
	$user=session()->get('user');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Portal | Home</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css\style.css')}}">
	
</head>
<body>
	<header class="menu">
	
		<div class="container">
			<div class="leftcontainer">
				<a href="{{route('home.index')}}"><h1>Ecommerce Portal</h1></a>
			</div>
			<div class="rightcontainer">
				<ul>
					<li><a href="{{route('home.index')}}">home</a></li>
					<li><a href="">about</a></li>
					<li><a href="">products</a></li>
					<li><a href="{{route('Admin.index')}}">Dash</a></li>
				
				</ul>
			</div>
		</div>
	</header>
	@yield('content')
	


	
</body>
</html>