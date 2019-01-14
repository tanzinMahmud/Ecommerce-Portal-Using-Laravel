<?php
	$user=session()->get('user');
	$Category = session()->get('Category');
	// $product_title = session()->get('product_title');

	$smart_phone = session()->get('smart_phone');
	$laptop = session()->get('laptop');
	$desktop = session()->get('desktop');
	$apple = session()->get('apple');
	$tv = session()->get('tv');
	$Clothing = session()->get('Clothing');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap-theme.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/product.css')}}"> -->
    <script type="text/javascript" src="{{asset('ajax/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
  </head>
  <body>

<div class="container">
    <h4>NEW COLLECTION</h4>
  <div class="row">
    <div class="container">
      <div class="container">
          <h4>Desktop</h4>
      </div>
        @foreach($desktop as $sp)
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="{{asset('uploads')}}/{{$sp->img_path}}" alt="...">
                      <h4>{{$sp->title}}</h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p>{{$sp->short_desc}}</p>
                       <p>Stock: {{$sp->stock}}</p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price">{{'$'.$sp->price}}</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="{{route('cart.index',[$sp->id])}}"   >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        @endforeach
    </div>

    <div class="container">
        <div class="container">
          <h4>Television</h4>
        </div>
        @foreach($tv as $sp)
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="{{asset('uploads')}}/{{$sp->img_path}}" alt="...">
                      <h4>{{$sp->title}}</h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p>{{$sp->short_desc}}</p>
                       <p>Stock: {{$sp->stock}}</p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price">{{'$'.$sp->price}}</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="{{route('cart.index',[$sp->id])}}"   >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        @endforeach
    </div>

    <div class="container">
        <div class="container">
          <h4>Clothing</h4>
        </div>
        @foreach($Clothing as $sp)
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="{{asset('uploads')}}/{{$sp->img_path}}" alt="...">
                      <h4>{{$sp->title}}</h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p>{{$sp->short_desc}}</p>
                       <p>Stock: {{$sp->stock}}</p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price">{{'$'.$sp->price}}</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="{{route('cart.index',[$sp->id])}}"   >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        @endforeach
    </div>

    <div class="container">
        <div class="container">
          <h4>Apple</h4>
        </div>
        @foreach($apple as $sp)
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="{{asset('uploads')}}/{{$sp->img_path}}" alt="...">
                      <h4>{{$sp->title}}</h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p>{{$sp->short_desc}}</p>
                       <p>Stock: {{$sp->stock}}</p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price">{{'$'.$sp->price}}</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="{{route('cart.index',[$sp->id])}}"   >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        @endforeach
    </div>

    <div class="container">
        <div class="container">
          <h4>Smart Phones</h4>
        </div>
        @foreach($smart_phone as $sp)
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="{{asset('uploads')}}/{{$sp->img_path}}" alt="...">
                      <h4>{{$sp->title}}</h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p>{{$sp->short_desc}}</p>
                       <p>Stock: {{$sp->stock}}</p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price">{{'$'.$sp->price}}</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="{{route('cart.index',[$sp->id])}}"   >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        @endforeach
    </div>

    <div class="container">
        <div class="container">
          <h4>Laptop</h4>
        </div>
        @foreach($laptop as $sp)
                <div class="col-md-3 col-sm-6">
                  <span class="thumbnail">
                      <img style="height:220px; width:220px; margin:auto;display: block;padding: 20px;" src="{{asset('uploads')}}/{{$sp->img_path}}" alt="...">
                      <h4>{{$sp->title}}</h4>
                      <div class="ratings">
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star"></span>
                              <span class="glyphicon glyphicon-star-empty"></span>
                          </div>
                      <p>{{$sp->short_desc}}</p>
                       <p>Stock: {{$sp->stock}}</p>
                      <hr class="line">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <p class="price">{{'$'.$sp->price}}</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                         <a href="{{route('cart.index',[$sp->id])}}"   >	<button class="btn btn-info right" > BUY ITEM</button></a>
                        </div>

                      </div>
                  </span>
                </div>
        @endforeach
    </div>
    <!-- END PRODUCTS -->
  </div>
</div><!-------container----->
@yield('content')
</body>
</html>
