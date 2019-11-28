<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Http\Controllers\Controller;
class CartController extends Controller
{
    public function index()
	{
		$cartItems=Cart::content();//this from laravel plugin
		return view('Frontend.cart.shopping-cart',compact('cartItems'));
		
	}

	 public function addItem($id)
	 {
		 $product=Product::findOrfail($id);
		 Cart::add($id,$product->name,1,$product->price,['img'=>$product->image,'stock'=>$product->stock]);
		 return back();
	 }
	public function update(Request $request ,$id)
	{
		$qty=$request->qty;
		$proID=$request->proId;
		$product=Product::findOrfail($proID);
		$stock=$product->stock;
		
		if($qty<=$stock)
		{
			Cart::update($id,$request->qty);
				return back()->with('status','ok this product updated');
		}
	
		else
		{
			return back()->with('error','please chek if qty is bigger than stock');
		}
		
	}
	public function destroy($id)
	{
		Cart::remove($id);
		return back();
	}
	
}

