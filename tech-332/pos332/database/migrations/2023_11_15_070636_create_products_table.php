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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('variant_id');
            $table->string('initial', 5);
            $table->string('name', 50);
            $table->string('description');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->integer('create_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->index('variant_id');
            $table->foreign('variant_id')->references('id')->on('variants')->onDelete('cascade');
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
