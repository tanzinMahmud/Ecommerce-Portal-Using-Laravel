<?php
	$CartProducts=session()->get('Cart');
	$CartTotalPrice=session()->get('CartTotalPrice');
	$CartTotalQuantity=session()->get('CartTotalQuantity');
	$user=session()->get('user');

?>

@extends(($user==null) ? 'Layouts.Visitor.header' :
		 (($user->user_type_id==2) ? 'Layouts.User.LoggedHeader' : 'Layouts.Admin.loggedHeader'))
@section('content')
	<div class="cart_product" id="cart"> 
		<center>
			@if($CartProducts!=null)
			<table border="1px" style="font-size:20px; padding:10px;margin-bottom:20px;">
				
				<tr > 
					<td style="font-size:20px; padding:10px;">ID</td>
					<td style="font-size:20px; padding:10px;">Title</td>
					<td style="font-size:20px; padding:10px;">Price</td>
					<td style="font-size:20px; padding:10px;">Quantity</td>
				</tr>

				@foreach($CartProducts as $cpro)

				 <tr > 
						<td style="font-size:20px; padding:10px;">{{ $cpro->id}}</td>
						<td style="font-size:20px; padding:10px;">{{ $cpro->title}}</td>
						<td style="font-size:20px; padding:10px;">{{ $cpro->price}}</td>
						<td style="font-size:20px; padding:10px;"> 1</td>
				</tr>
				@endforeach

				<tr > 
					<td style="font-size:20px; padding:10px;"></td>
					<td style="font-size:20px; padding:10px;">Total</td>
					<td style="font-size:20px; padding:10px;">{{$CartTotalPrice}} tk</td>
					<td style="font-size:20px; padding:10px;">{{$CartTotalQuantity}}</td>
				</tr>
				
			</table>
				
			<center><a href="{{route('order.index')}}" style="text-decoration:none;color:#fff;background-color:green;padding:10px;">Place Order</a></center>
			@endif
		</center>
	</div>
@endsection