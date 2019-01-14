<?php
	$HomeProducts=session()->get('HomeProducts');
	$user=session()->get('user');


?>
@extends(($user==null) ? 'Layouts.Visitor.header' :
		 (($user->user_type_id==2) ? 'Layouts.User.LoggedHeader' : 'Layouts.Admin.loggedHeader'))

   
	@section('title')
		Sing-up
	@endsection

	@section('content')

	<div class="sign_area">
		<div class="login_area">
			<form method="POST">
				<center>
					<h2>Sing Up</h2>
					<input type="text" placeholder="Enter Name"  name="name"/></br>
					@if($errors->any())
						<p>{{$errors->first('name')}}</p></br>
					@endif
					
					<input type="text" placeholder="Enter Email" name="email"/></br>
					@if($errors->any())
						<p>{{$errors->first('email')}}</p></br>
					@endif
					
					<input type="password" placeholder="Enter Password" name="password"/></br>
					@if($errors->any())
						<p>{{$errors->first('password')}}</p></br>
					@endif
					
					<select class="gender_class" name="gender" >
						<option class="option_class" value="">Select Gender</option>
						<option class="option_class" value="male">Male</option>
						<option class="option_class" value="female">Female</option>
					</select></br>
					@if($errors->any())
						<p>{{$errors->first('gender')}}</p></br>
					@endif
					
					<input type="submit" value="Sign Up"/>
					
					<a href="{{route('login.index')}}"><input  type="button" value="Back" /></a>
				
				</center>
			</form>
		</div>
	</div>

	@endsection