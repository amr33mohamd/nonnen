<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class ShopController extends Controller
{
  public function index(Request $request){
    $categories = Categories::all();
    if($request->id){
      $products = Products::where('subcategory_id',$request->id)->get();
    }
    else {
      $products = Products::all();
    }
    return view('Shop.Index',['categories'=>$categories,'products'=>$products]);
  }
  public function product(Request $request){
    $categories = Categories::all();
    if($request->id){
      $product = Products::where('id',$request->id)->get();
    }
    else {
      $product = Products::first();
    }
    return view('Shop.SingleProduct',['categories'=>$categories,'product'=>$product]);
  }

}
