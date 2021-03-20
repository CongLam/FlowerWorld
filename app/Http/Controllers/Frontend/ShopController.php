<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function getProductWithTopic($topicId){
        $products = DB::table('products')->join('topics','products.topic_id','=','topics.id')
            ->select(
                'products.id as product_id',
                'products.*',
                'topics.*'
            )->where('topic_id', $topicId)
            ->paginate(12);
        $topicList= Topic::all();

        $colorList = Color::all();

        return view('frontend/shop')->with('products', $products)
            ->with('topicList', $topicList)
            ->with('colorList', $colorList);

    }

    public function getProductWithColor($colorId){
        $arrProductId = DB::table('product_color')->select('product_id')->where('color_id', $colorId)->get();
        $simple_array = array();
        foreach($arrProductId as $d)
        {
            $simple_array[]=$d->product_id;
        }
        //dd($simple_array);
        $products = DB::table('products')
            ->select(
                'products.id as product_id',
                'products.*'
            )
            ->whereIn('products.id', $simple_array)
            ->paginate(12);
        //dd($products);

        $topicList= Topic::all();

        $colorList = Color::all();

        return view('frontend/shop')->with('products', $products)
            ->with('topicList', $topicList)
            ->with('colorList', $colorList);

    }
}
