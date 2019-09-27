<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'created_by', 'buyer_id', 'seller_id', 'product_id', 'service_id', 'deal_id', 'order_status'
    ];
}
