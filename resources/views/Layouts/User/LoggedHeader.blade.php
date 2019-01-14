<?php
	$user=session()->get('user');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Portal | Place Order</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  $(function() {
	    $( "#datepicker" ).datepicker({ minDate: +1, maxDate: "+7D" ,dateFormat: 'yy/mm/dd'});
	  });
  </script>

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
					<li><a href="{{route('cart.show')}}">Cart </a></li>
					<li><a href="{{route('user.index')}}">Dash</a></li>

				</ul>
			</div>
		</div>
	</header>
	@yield('content')




</body>
</html>
