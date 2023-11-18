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
            $table->integer('qty');
            $table->decimal('price', 8, 2);
            $table->integer('create_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->index('header_id');
            $table->index('product_id');
            $table->foreign('header_id')->references('id')->on('order_headers')
                ->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products');
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
