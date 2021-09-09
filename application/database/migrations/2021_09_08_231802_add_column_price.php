<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnPrice extends Migration
{

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price', 10,2);
        });
    }


    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColomun('price');
        });
    }
}
