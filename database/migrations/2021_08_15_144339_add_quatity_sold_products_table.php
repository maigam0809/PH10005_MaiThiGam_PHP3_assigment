<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuatitySoldProductsTable extends Migration
{

    public function up()
    {
        Schema::table('products', function($table) {
            $table->string('quantity_sold');
        });
    }



    public function down()
    {
        Schema::table('products', function($table) {
            $table->dropColumn('quantity_sold');
        });
    }
}
