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
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('stock_id')->constrained('stocks');
            // $table->primary(['stock_id', 'user_id']);
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('stock_id')->references('id')->on('stocks')->onDelete('cascade');
            // $table->string('nama');
            // $table->string('slug');
            // $table->string('jenis')->nullable();
            $table->boolean('diBeli')->default(false);
            $table->string('jumlah')->nullable();
            // $table->foreignId('pembeli');
            // $table->bigInteger('berat')->nullable();
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
};