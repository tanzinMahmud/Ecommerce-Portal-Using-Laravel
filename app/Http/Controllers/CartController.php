<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use App\user;

class CartController extends Controller
{
	 public function index(Request $request)
    {
    	$CartPro = Product::find($request->pid);
    	$request->session()->push('Cart',$CartPro);
    	$request->session()->flash('addToCartmessage', 'Product added!!');
        return redirect()->back();
    }

	public function show(Request $request)
	{
		$CartProducts=session()->get('Cart');
		if($CartProducts != null)
    	{
			$total_price=0;
			$quantity=0;
			foreach ($CartProducts as $CartP) {
				$total_price=$total_price+$CartP->price;
				$quantity++;
			}
			$request->session()->put('CartTotalPrice',$total_price);
			$request->session()->put('CartTotalQuantity',$quantity);
		}
		return view ('Cart.index');
	}

   
}
