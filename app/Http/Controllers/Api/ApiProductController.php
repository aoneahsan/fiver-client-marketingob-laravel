<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductCategory;

class ApiProductController extends Controller
{
    public function apiProducts(Request $request)
    {
        $items = Product::all();

        return response()->json(['data' => $items->toArray()], 200);
    }

    public function apiProductCategories(Request $request)
    {
        $items = ProductCategory::all();

        return response()->json(['data' => $items->toArray()], 200);
    }

}
