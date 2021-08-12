<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeikeyProductsTable extends Migration
{
    public function up()
    {
        Schema::table('products', function ($table) {
            // $table->unsignedBigInteger('category_id');
            // $table->foreign('category_id')->references('id')->on('categories')->constrained()
            // ->onUpdate('cascade')
            // ->onDelete('cascade');
            $table->foreignId('category_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::table('products', function ($table) {
            $table->dropForeign('category_id');
        });
    }
}
