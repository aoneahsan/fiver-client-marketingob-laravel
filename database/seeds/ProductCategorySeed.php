<?php

use Illuminate\Database\Seeder;

use App\Models\ProductCategory;

class ProductCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductCategory::class, 20)->create();
    }
}
