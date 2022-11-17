<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFebricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('febrics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('image')->nullable();
            $table->string('total_yards');
            $table->string('per_yard_price');
            $table->string('stock_yards')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('febrics');
    }
}
