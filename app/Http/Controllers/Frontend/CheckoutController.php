<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoCheckoutRequest;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function getCheckout(){

        return view('frontend/checkout');
    }

    public function postCheckout(InfoCheckoutRequest $request){
        $data['info'] = $request->all();

        $email = $request->email;

        $data['cart'] = Cart::content();

//        dd($data['cart']);
        $data['totalPrice'] = Cart::total();
        //update product qty
        foreach ($data['cart'] as $item){

            $product = Product::where('id', $item->id)->first();

            $product->qty = ($product->qty) - ($item->qty);
            $product->save();
        }

        //insert data transaction table
        $transaction = new Transaction();
        $transaction->customer_name = $request->firstname.' '.$request->middlename.' '.$request->lastname;
        $transaction->customer_email = $request->email;
        $transaction->customer_phone = $request->telephone;
        $transaction->address = $request->street.' - '.$request->city;
        $transaction->amount = $data['totalPrice'];

        $transaction->save();

        //insert data order table
        foreach ($data['cart'] as $item){
            $product = Product::where('id', $item->id)->first();

            $order = new Order();
            $order->transaction_id = $transaction->id;
            $order->product_id = $item->id;
            $order->product_name = $item->name;
            $order->qty = $item->qty;
            $order->amount = $item->qty * $item->price;

            $order->save();
        }


        //send mail
        Mail::send('frontend.email', $data, function ($message) use ($email) {
            $message->from('lamtuancong2807@gmail.com', 'CongLam'); //admin

            $message->to($email, $email); //khach hang

            $message->cc('conglt2807@gmail.com', 'Flowers World'); //chu cua hang

            $message->subject('Bill FlowersWorld Confirmation');
        });

        Cart::destroy();
        return redirect('complete');
    }

    public function getComplete(){

        return view('frontend.complete');
    }
}
