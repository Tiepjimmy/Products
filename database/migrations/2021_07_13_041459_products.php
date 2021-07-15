<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('catalog_id');
            $table->string('name')->nullable();
            $table->integer('price');
            $table->text('content')->nullable();
            $table->integer('discount')->nullable();
            $table->string('image_link')->nullable();
            $table->text('image_list')->nullable();
            $table->integer('created')->nullable();
            $table->integer('view')->nullable();
            $table->tinyInteger('status')->default('1');
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
}
