<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $manProducts = Product::where('featured', true)->where('product_category_id',1)->get();
        $womenProducts = Product::where('featured', true)->where('product_category_id',2)->get();
        
        $blogs = Blog::orderBy('id', 'desc')-> limit(3) -> get();

        return view('front.index', compact('manProducts', 'womenProducts', 'blogs'));
    }
}
