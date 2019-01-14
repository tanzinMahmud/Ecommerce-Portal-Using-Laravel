<?php
	$user=session()->get('user');
?>

@extends('Layouts.User.LoggedHeader')
@section('content')

<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<input type="text" placeholder="Enter Shipping Address" name="shipadd" /></br>
					<input type="text" placeholder="Enter Shipping Date" id="datepicker" name="shippingDate">
				
					
					<input type="submit" value="Confirm Order" name="order_btn" id="order_btn" />
				
				</center>
			</form>
			<p>{{session()->get('orderMessage')}}</p>
		</div>
	</div>

@endsection