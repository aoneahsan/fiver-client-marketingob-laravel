<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
	protected $fillable = [
		'created_by', 'name', 'description', 'brand', 'discount', 'total_amount', 'quantity', 'sizes', 'expire_date', 'is_featured', 'on_sale', 'regular_price', 'sale_price', 'product_image', 'category_id', 'tags', 'status', 'service_charges'
	];

}
