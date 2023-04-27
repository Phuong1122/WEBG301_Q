<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
$categories = ProductCategory::all();

    //
    public function show($id) {
        $product = Product::findOrFail($id);
        
        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(),'rating'));
        $countRating = count($product->productComments);
        if ($countRating !=0) {
            $avgRating = $sumRating/$countRating;
        }

        return view('front.shop.show', compact('product','avgRating'));
    }

    public function index()
    {
        $categories = ProductCategory::all();
        $products = Product::all();
        
        return view('front.shop.index', compact('categories','products'));
    }

    public function category($categoryName, Request $request) {
        $categories = ProductCategory::all();

        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();
    
        return view('front.shop.category', compact('categories','products'));
    }
}
