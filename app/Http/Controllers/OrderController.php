<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\Product;
use App\Order;
use App\OrderDetail;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
    	return view('Order.index');
    }

    public function ConfirmOrder(Request $request)
    {
    	$user=session()->get('user');
    	$totalPrice=session()->get('CartTotalPrice');
    	$order = new Order();
    	$order->customer_id=$user->id;
    	$order->customer_address=$request->shipadd;
    	date_default_timezone_set('Asia/Dhaka');
    	$order->order_date=date('Y-m-d H:i:s');
    	$order->shipping_date=$request->shippingDate;
    	$order->order_amount=$totalPrice;
    	$order->delivery_status="pending";
    	$order->save();

    	$CartProducts=session()->get('Cart');
    	foreach ($CartProducts as $Catpro) {
    		$orderDetails = new OrderDetail();
	    	$orderDetails->order_id=$order->id;
	    	$orderDetails->product_id=$Catpro->id;
	    	$orderDetails->price=$Catpro->price;
	    	$orderDetails->quantity=1;
	    	$orderDetails->save();

            DB::table('products')
            ->where('id', $Catpro->id)
            ->update(['stock' =>  $Catpro->stock - 1]);

    	}

    	$request->session()->forget('CartTotalPrice');
    	$request->session()->forget('CartTotalQuantity');
    	$request->session()->forget('Cart');
        $request->session()->flash('orderMessage', 'Order placed successfully!!');  
        return redirect()->back();

    	



    }


    public function PendingOrder(Request $request)
    {
        $orders=DB::table('orders')
        ->where('delivery_status','pending')
        ->get();
        $request->session()->put('orders',$orders);
        return view('Order.PendingOrder');
    }

    public function DeliverPendingOrder(Request $request)
    {
        DB::table('orders')
            ->where('id', $request->id)
            ->update(['delivery_status' =>  'delivered']);
        $request->session()->flash('deliverMessage', 'Order delivered successfully!!');
        return redirect()->back();
    }

    public function DeliveredOrder(Request $request)
    {
        $orders=DB::table('orders')
        ->where('delivery_status','delivered')
        ->get();
        $request->session()->put('orders',$orders);
        return view('Order.deliveredOrder');
    }
}
