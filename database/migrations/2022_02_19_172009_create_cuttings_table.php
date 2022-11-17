<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuttingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuttings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('febricId');
            $table->string('image')->nullable();
            $table->string('febric_colour')->nullable();
            $table->string('febric_quantity');
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
        Schema::dropIfExists('cuttings');
    }
}
