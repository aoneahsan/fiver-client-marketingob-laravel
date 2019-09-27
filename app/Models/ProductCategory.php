<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
    	'created_by', 'name', 'description', 'category_image'
    ];
}
