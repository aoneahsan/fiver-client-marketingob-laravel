<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('created_by')->nullable();
            $table->string('title')->nullable();
            $table->longtext('description')->nullable();
            $table->string('image')->nullable()->default('default.png');
            $table->string('products')->nullable();
            $table->string('price')->nullable();
            $table->string('service_charges')->nullable();
            $table->string('extra_field')->nullable();
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
        Schema::dropIfExists('deals');
    }
}
