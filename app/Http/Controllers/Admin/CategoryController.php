<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getCate(){
        return view('backend.category')
    }

    public function getEditCate(){
        return view('backend.editcategory')
    }
}
