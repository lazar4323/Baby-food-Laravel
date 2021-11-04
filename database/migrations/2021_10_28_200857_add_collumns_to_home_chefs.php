<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCollumnsToHomeChefs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_chefs', function (Blueprint $table) {
            $table->string('description');
            $table->integer('age');
            $table->integer('salary');
            $table->string('location');
            $table->date('joined')->format('Y-m-d');
            $table->integer('delivered_orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_chefs', function (Blueprint $table) {
            //
        });
    }
}
