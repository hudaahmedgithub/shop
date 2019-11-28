<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\Address;
use App\Mdels\Order;
use Auth;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
   public function index()
   {
	    $carts=Cart::content();
		return view('Frontend.cart.checkout',compact('carts'));
	}
	public function address(Request $request)
	{
		$request['user_id']=Auth::user()->id;
		Address::create($request->all());
		Order::createOrder();
		Cart::destroy();
		return view('profile.thanksyou');
	}
}
