<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Order;

class ApiOrderController extends Controller
{
    
    public function apiPlaceOrder(Request $request)
    {
    	// dd($request->toArray());
    	Order::create([
            'created_by' => 1,
            'buyer_id' => $request->buyer_id,
            'seller_id' => $request->seller_id,
            'product_id' => $request->product_id,
            'service_id' => $request->service_id,
            'deal_id' => $request->deal_id,
            'order_status' => 1,
        ]);

        return response()->json(['data' => 'Order Placed'], 200);
    }
}
