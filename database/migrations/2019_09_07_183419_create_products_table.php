<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('created_by')->nullable();
            $table->string('name');
            $table->longtext('description')->nullable();
            $table->string('brand')->nullable();
            $table->string('discount')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('quantity')->nullable();
            $table->string('sizes')->nullable();
            $table->string('expire_date')->nullable();
            $table->integer('is_featured')->nullable()->default(0);
            $table->integer('on_sale')->nullable()->default(0);
            $table->string('regular_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('product_image')->nullable()->default('default.png');
            $table->string('category_id')->nullable();
            $table->string('tags')->nullable();
            $table->integer('status')->nullable()->default(1);
            $table->string('service_charges')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
