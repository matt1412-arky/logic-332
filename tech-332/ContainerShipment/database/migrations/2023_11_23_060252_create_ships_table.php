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
        Schema::create('ships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ship_name', 50);
            $table->float('grt'); //gross register tonnage
            $table->float('nrt'); //net register tonnage
            $table->float('loa'); //length overall
            $table->string('img', 200);
            $table->integer('create_by');
            $table->integer('update_by')->nullable();
            $table->timestamps();
            $table->boolean('is_delete')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ships');
    }
};
