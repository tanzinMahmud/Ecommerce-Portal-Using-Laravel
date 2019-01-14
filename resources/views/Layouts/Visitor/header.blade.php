
<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Portal | @yield('title')</title>
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
				
					<li><a href="{{route('cart.show')}}">cart </a></li>
					<li><a href="{{route('login.index')}}">login</a></li>
				
				</ul>
			</div>
		</div>
	</header>
	@yield('content')
	
</body>
</html>

