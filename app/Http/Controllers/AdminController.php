<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\ProductCategory;
use App\Product;
use App\Order;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(Request $request){

        $totalusers = user::count();
        $totalproducts = Product::count();
        $totalcategories = ProductCategory::count();
        date_default_timezone_set('Asia/Dhaka');
        $todaysOrder = Order::where('order_date', '=', date('Y-m-d'))->get();
        $TotaltodaysOrder = $todaysOrder->count();

        $request->session()->put('totalusers',$totalusers);
        $request->session()->put('totalproducts',$totalproducts);
        $request->session()->put('totalcategories',$totalcategories);
        $request->session()->put('TotaltodaysOrder',$TotaltodaysOrder);

    	return view('Admin.index');
    }

    public function showUser(Request $request)
    {
        
    	$users=DB::table('user_type')
		        ->join('users', function ($join) {
		            $join->on('user_type.id', '=','users.user_type_id')
		                 ->where('user_type.id', '>', 1);
		        })
		        ->get();
		$request->session()->put('users',$users);
    	return view('Admin.showUsers');

    }
}
