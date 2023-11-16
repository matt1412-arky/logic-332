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
        Schema::create('varians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('initial',5);
            $table->string('name');
            $table->boolean('active');
            $table->string('create_by');
            $table->string('updated_by');
            $table->timestamps();

            $table->index('category_id');
            $table->foreign('category_id')-> references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('varians');
    }
};
