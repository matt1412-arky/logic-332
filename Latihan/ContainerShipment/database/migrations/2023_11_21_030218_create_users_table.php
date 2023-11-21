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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('email', 200);
            $table->string('password', 256);
            $table->integer('role_id');
            $table->integer('create_by');
            $table->integer('updated_by')->nullable();
            $table->timestamps();
            $table->integer('delete_by')->nullable();
            $table->integer('delete_on')->nullable();
            $table->boolean('is_delete')->default(false);

            $table->index('role_id');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
