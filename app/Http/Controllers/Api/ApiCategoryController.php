<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ApiCategoryController extends Controller
{
    public function getCategories()
    {
        // get all categories
        $categories = Category::all();
        return response()->json([
            'status' => 'success',
            'data' => $categories
        ], 200);
    }
}
