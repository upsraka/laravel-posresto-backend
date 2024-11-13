<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ApiProductController extends Controller
{
    //index api
    public function getProduct()
    {
        //get all products
        $products = Product::all();
        //load category
        $products->load('category');
        $products = Product::paginate(10);
        return response()->json([
            'status' => 'success',
            'data' => $products
        ], 200);
    }

    //index api
    public function getAllProduct()
    {
        //get all products
        $products = Product::all();
        //load category
        $products->load('category');
        return response()->json([
            'status' => 'success',
            'data' => $products
        ], 200);
    }
}
