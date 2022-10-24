<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->char('no_plate', 20);
            $table->date('roadtax_exp');
            $table->string('color');
            $table->year('vehicle_year');
            $table->integer('mileage');
            $table->enum('status', ['Available', 'Not Available']);
            // $table->double('totalmonthly_gas', 8,2) ?? null;
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
        Schema::dropIfExists('vehicles');
    }
};
