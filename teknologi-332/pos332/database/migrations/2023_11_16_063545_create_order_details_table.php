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
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('header_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->decimal('price', 8, 2);
            $table->integer('create_by');
            $table->integer('updated_by');
            $table->timestamps();

            $table->index('header_id');
            $table->foreign('header_id')->references('id')->on('order_headers')->onDelete('cascade');

            $table->index('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }
        
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
};
