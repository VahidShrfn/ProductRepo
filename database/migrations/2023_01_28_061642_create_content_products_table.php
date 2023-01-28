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
        Schema::create('Content_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('product_id')->unsigned();
            $table->bigInteger('content_id')->unsigned();

            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('content_id')->references('id')->on('products_meta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procontent');
    }
};
