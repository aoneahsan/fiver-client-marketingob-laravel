<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    protected $fillable = [
    	'created_by', 'title', 'description', 'image', 'products', 'price', 'service_charges', 'extra_field'
    ];
}
