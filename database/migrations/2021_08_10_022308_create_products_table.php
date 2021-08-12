<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->integer('category_id')->unsigned();
            // $table->foreign('category_id ')->references('id')->on('categories');
            
            $table->integer('price')->default(0);
            $table->integer('quantity')->default(0);
            $table->integer('sale')->default(0);
            $table->integer('status')->default(0);
            $table->integer('view')->default(0);
            $table->string('description');
            $table->string('detail');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
