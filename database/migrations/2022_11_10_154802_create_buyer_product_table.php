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
        Schema::create('buyer_product', function (Blueprint $table) {
            $table->foreignId('buyer_id');
            $table->foreignId('product_id');
            $table->primary(['buyer_id','product_id']);

            $table->foreign('buyer_id')->referenced('id')->on('buyers');

            $table->foreign('product_id')->referenced('id')->on('products');

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
        Schema::dropIfExists('buyer_product');
    }
};
