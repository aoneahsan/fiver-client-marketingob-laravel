<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\ProductCategory;
use Faker\Generator as Faker;

$factory->define(ProductCategory::class, function (Faker $faker) {
    return [
        'created_by' => '1',
        'name' => $faker->name,
        'description' => $faker->text(150),
        'category_image' => "default.png",
    ];
});
