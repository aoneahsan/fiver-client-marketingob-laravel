<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('created_by')->nullable();
            $table->integer('buyer_id')->nullable();
            $table->integer('seller_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('deal_id')->nullable();
            $table->string('order_status')->nullable();            
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
        Schema::dropIfExists('orders');
    }
}
