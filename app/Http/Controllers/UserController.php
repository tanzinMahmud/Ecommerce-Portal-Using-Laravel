<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
    	return view('User.index');
    }

    public function PendingOrder(Request $request)
    {
    	$user = session()->get('user');
        $orders=DB::table('orders')
        ->where('delivery_status','pending')
        ->where('customer_id',$user->id)
        ->get();
        $request->session()->put('orders',$orders);
        return view('User.pendingOrder');
    }

    public function DeliveredOrder(Request $request)
    {
    	$user = session()->get('user');
        $orders=DB::table('orders')
        ->where('delivery_status','delivered')
        ->where('customer_id',$user->id)
        ->get();
        $request->session()->put('orders',$orders);
        return view('User.pendingOrder');
    }

    public function OrderDetails($id){
        $user = session()->get('user');
        $details= DB::table('order_details')->where('order_id',$id)->get(['product_id']);
        foreach ($details as $key => $value) {
            $d[]=DB::table('products')->where('id',$value->product_id)->get(['title','price']);
        }
        $data['i']=$d;
        //dd($data);
        return view('Order.details',$data);
    }
}
