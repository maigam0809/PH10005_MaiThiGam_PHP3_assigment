<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtProductsTable extends Migration
{
    public function up()
    {
      
        Schema::table('products', function ($table) {
            $table->softDeletes('deleted_at');
        });
    }

   
    public function down()
    {
        Schema::table('products', function ($table) {
            $table->dropSoftDeletes('deleted_at');
        });
    }
}
