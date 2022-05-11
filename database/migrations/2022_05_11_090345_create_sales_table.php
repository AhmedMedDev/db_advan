<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('(UUID())'))->primary();
            $table->uuid('sales_person_id');
            $table->foreign('sales_person_id')->references('id')->on('sales_persons');
            $table->uuid('serial_no');
            $table->foreign('serial_no')->references('serial_no')->on('cars');
            $table->float('sale_price');
            $table->date('date')->default(DB::raw('CURDATE()'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
