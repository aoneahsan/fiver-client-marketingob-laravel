<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'created_by' => '1',
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 150),
        'is_featured' => $faker->numberBetween($min = 0, $max = 1),
        'on_sale' => $faker->numberBetween($min = 0, $max = 1),
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'regular_price' => $faker->randomNumber(4),
        'sale_price' => $faker->randomNumber(2),
        'product_image' => "default.png",
        'category_id' => $faker->numberBetween($min = 1, $max = 20),
        'service_charges' => $faker->randomNumber(3),
        'brand' => $faker->text($maxNbChars = 10),
        'discount' => $faker->randomNumber(3),
        'total_amount' => $faker->randomNumber(3),
        'quantity' => $faker->randomNumber(3),
        'sizes' => $faker->randomNumber(3),
        'expire_date' => $faker->randomNumber(3),
    ];
});
