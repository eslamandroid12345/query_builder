<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{


    public function products(){

        $products = DB::table('products')->select('products.id',
            'products.product_name',
            'products.product_buy',
            'products.product_sell',
            'products.product_quantity',
            'users.name'
            )
            ->leftJoin('users','products.user_id','=','users.id')->get();

        return $products;
    }

    public function orders(){

        $orders = DB::table('orders')
            ->select('orders.id',
            'orders.order_name',
            'orders.order_total',
            'users.name as username',
            'products.product_name as product')
            ->join('products','orders.product_id','=','products.id')
            ->join('users','orders.user_id','=','users.id')
            ->get();

//        return $orders;

        return view('welcome',compact('orders'));
    }
}
