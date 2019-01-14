<?php
	$user=session()->get('user');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce Portal | User Panel</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css\style.css')}}">
	
</head>
<body>
	<header class="menu">
	
		<div class="container">
			<div class="leftcontainer">
				<a href="{{route('home.index')}}"><h1>Ecommerce Portal</h1></a>
			</div>
			<div class="rightcontainer">
				<h3>Welcome</h3>
				<h3>{{$user->name}}</h3>
			</div>
		</div>
	</header>
	@extends('Layouts.User.leftmenu')
	


	
</body>
</html>