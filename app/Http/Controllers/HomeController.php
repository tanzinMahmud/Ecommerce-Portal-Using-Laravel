<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user;
use App\ProductCategory;
use App\Product;

class HomeController extends Controller
{
  public function index(Request $request){

    $HomeProducts = Product::all();   // Product list
      $request->session()->put('HomeProducts', $HomeProducts);

      $Category = ProductCategory::all();   // Product Category
      $request->session()->put('Category', $Category);

  $smart_phone = DB::table('products')
          ->where('category_id', '=', 1)
          ->get();
      $request->session()->put('smart_phone', $smart_phone);


  $laptop = DB::table('products')
        ->where('category_id', '=', 5)
        ->get();
      $request->session()->put('laptop', $laptop);


  $desktop = DB::table('products')
        ->where('category_id', '=', 6)
        ->get();
      $request->session()->put('desktop', $desktop);


  $apple = DB::table('products')
        ->where('category_id', '=', 13)
        ->get();
        $request->session()->put('apple', $apple);



  $tv = DB::table('products')
        ->where('category_id', '=', 16)
        ->get();
      $request->session()->put('tv', $tv);

  $Clothing = DB::table('products')
        ->where('category_id', '=', 17)
        ->get();
      $request->session()->put('Clothing', $Clothing);

  // return view('Home.index');
  return view('Home.index');

  }



}
