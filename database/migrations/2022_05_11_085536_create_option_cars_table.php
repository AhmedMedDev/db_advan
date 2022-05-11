<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateOptionCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('option_cars', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('(UUID())'))->primary();
            $table->string('option_name');
            $table->float('price');
            $table->uuid('serial_no');
            $table->foreign('serial_no')->references('serial_no')->on('cars');
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
        Schema::dropIfExists('option_cars');
    }
}
