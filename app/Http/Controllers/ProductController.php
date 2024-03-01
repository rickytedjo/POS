<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view('products')
                ->with('categories',[
                    "food-beverage"
                    ,"beauty-health"
                    ,"home-care"
                    ,"baby-kid"
                ]);
    }
    public function category(Request $req){
        $category = explode('/',$req->url());
        return view('products')
                ->with('categories', [$category[5]]);
    }
}
