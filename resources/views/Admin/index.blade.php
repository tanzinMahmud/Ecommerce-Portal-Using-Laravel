<?php
	$user=session()->get('user');
?>

@extends('Layouts.Admin.header')
@section('content')

<center>
	<div class="AdminReportBox"> 
		<h2>Total User: <span style="color:red;">{{session()->get('totalusers')}}</span></h2>
		<h2>Total Products:  <span style="color:red;">{{session()->get('totalproducts')}}</span></h2>
		<h2>Total Categories:  <span style="color:red;">{{session()->get('totalcategories')}}</span></h2>
		<h2>Today's Total Order:  <span style="color:red;">{{session()->get('TotaltodaysOrder')}}</span></h2>
		
	</div>
</center>

@endsection
