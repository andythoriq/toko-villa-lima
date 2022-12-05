<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('human_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('human_id');
            $table->foreignId('product_id');
            // $table->primary(['human_id','product_id']);
            $table->foreign('human_id')->references('id')->on('humans');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('human_product');
    }
};
