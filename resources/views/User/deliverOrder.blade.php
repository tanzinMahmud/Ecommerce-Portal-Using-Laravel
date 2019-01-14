<?php
	$user=session()->get('user');
	$orders=session()->get('orders');
?>

@extends('Layouts.User.header')
@section('content')

<center><table border="1px" style="font-size:20px; padding:10px;">
			<tr > 
				<td style="font-size:20px; padding:10px;">Order Id</td>
				<td style="font-size:20px; padding:10px;">Customer Id</td>
				<td style="font-size:20px; padding:10px;">Customer Address</td>
				<td style="font-size:20px; padding:10px;">Total Amount</td>
				<td style="font-size:20px; padding:10px;">Shipping Date</td>
				<td style="font-size:20px; padding:10px;">Status</td>
			</tr>

			@foreach($orders as $order)
			<a href="#"> 
				<tr > 
					<td style="font-size:20px; padding:10px;">{{$order->id}}</td>
					<td style="font-size:20px; padding:10px;">{{$order->customer_id}}</td>
					<td style="font-size:20px; padding:10px;">{{$order->customer_address}}</td>
					<td style="font-size:20px; padding:10px;">{{$order->order_amount}}tk</td>
					<td style="font-size:20px; padding:10px;">{{$order->shipping_date}}</td>
					<td style="font-size:20px; padding:10px;">{{$order->delivery_status}}</td>
					
				</tr>
			</a>
			@endforeach
		</table>
		
</center>

@endsection