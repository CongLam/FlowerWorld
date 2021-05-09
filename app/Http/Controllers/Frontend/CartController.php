<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function getAddCart($id){
        $product =Product::find($id);
        Cart::add([
            'id' => $id,
            'name' => $product->product_name,
            'qty' => 1,
            'price' => (!empty($product->sale_price) ? $product->sale_price : $product->price ),
            'options' => ['img' => $product->thumbnail,
                          'size'=> null,
                          'color'=>null,
                        ]
        ]);

        /*if(Cart::content()->isNotEmpty()){
            dd(Cart::content());
        }else{
            dd('Cart empty');
        }*/
//        $data = Cart::content();
//        dd($data);
        return redirect('cart/show');

    }

    public function getShowCart(){
        $data['items'] =Cart::content();
        $data['totalPrice'] = Cart::total();
        return view('frontend/cart', $data);
    }

    public function getDeleteCart($id){
        if($id == 'all'){
            Cart::destroy();
        }else{
            Cart::remove($id);
        }
        return back();
    }

    public function getUpdateCart(Request $request){
        $cartUpdate = Cart::update($request->rowId, $request->qty);
        //return $cartUpdate;
    }

   /* public function addTocCartAjax(Request $request){
        $product =Product::find($request->rowId);
        Cart::add([
            'id' => $id,
            'name' => $product->product_name,
            'qty' => 1,
            'price' => (!empty($product->sale_price) ? $product->sale_price : $product->price )]);
    }*/



   /* public function getShowCart(){
        $items =Cart::content();
        //$data['totalPrice'] = Cart::total();
        //dd($items);

        return view('frontend/cart')->with('items', $items);
    }*/

//     public function getDeleteCart($id){
//         //xoa het:Cart::destroy()
//         Cart::remove($id);
//         return back();
//     }



//    public function getDeleteCartAjax(Request $request){
//        Cart::remove($request->rowId);
//    }
}
