<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
    	'created_by', 'order_id', 'invoice_status', 'price', 'coupon_id'
    ];
}
