<?php
	$user=session()->get('user');
	$users=session()->get('users');
?>

@extends('Layouts.Admin.header')
@section('content')

<center><table border="1px" style="font-size:20px; padding:10px;">
			<tr > 
				<td style="font-size:20px; padding:10px;">User Id</td>
				<td style="font-size:20px; padding:10px;">Name</td>
				<td style="font-size:20px; padding:10px;">Email</td>
				<td style="font-size:20px; padding:10px;">Gender</td>
				<td style="font-size:20px; padding:10px;">Type</td>
		
			
			</tr>

			@foreach($users as $usr)
			<a href="#"> 
				<tr > 
					<td style="font-size:20px; padding:10px;">{{$usr->id}}</td>
					<td style="font-size:20px; padding:10px;">{{$usr->name}}</td>
					<td style="font-size:20px; padding:10px;">{{$usr->email}}</td>
					<td style="font-size:20px; padding:10px;">{{$usr->gender}}</td>
					<td style="font-size:20px; padding:10px;">{{$usr->type_name}}</td>
				
					
				</tr>
			</a>
			@endforeach
		</table>
		<p>{{session()->get('deliverMessage')}}</p>
</center>

@endsection