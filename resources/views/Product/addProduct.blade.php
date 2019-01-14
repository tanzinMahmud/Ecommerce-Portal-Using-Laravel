<?php
	$user=session()->get('user');
	$categories=session()->get('categories');
?>

@extends('Layouts.Admin.header')
@section('content')


	<div class="right_portion_pro"> 
		
			<div class="add_product_area">
				
				<div class="login_area">
					<h2 style="text-align:center; color:#FFF">Add Product</h2>
					<form method="POST" enctype="multipart/form-data">
						<center>
						
							<input type="text" placeholder="Product Title" name="title"/>
							</br>
								@if($errors->any())
									<p>{{$errors->first('title')}}</p></br>
								@endif

							<input type="text" placeholder="Price" name="price" />
							</br>
							@if($errors->any())
								<p>{{$errors->first('price')}}</p></br>
							@endif

							<input type="text" placeholder="Stock" name="stock" />
							</br>
							@if($errors->any())
								<p>{{$errors->first('stock')}}</p></br>
							@endif

							
							
							<textarea name="short_desc" placeholder="Short Description" style="width:80%;height:100px;margin-top:10px;"></textarea>
							</br>
							@if($errors->any())
								<p>{{$errors->first('short_desc')}}</p>
							@endif

							
							<select class="gender_class" name="cat" id="cat" >
								<option class="option_class" value="">Select Category</option>
								@foreach($categories as $cat)
								<option class="option_class" value="{{$cat->category_name}}">{{$cat->category_name}}</option>
								@endforeach
								
							</select></br>
							@if($errors->any())
								<p>{{$errors->first('cat')}}</p>
							@endif
							<input name="pic" type="file"/></br>
							<input type="submit" name="add_product_btn" id="add_product_btn" value="Add Product"/>

							
							
						
						</center>
					</form>
					<p>{{session()->get('addPromessage')}}</p>
				</div>
			</div>	

	</div>




@endsection
