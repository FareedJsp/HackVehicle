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
        Schema::create('petrols', function (Blueprint $table) {
            $table->id();
            $table->integer('vehicle_id');
            $table->integer('driver_id');
            $table->dateTime('fill_date_time');
            $table->string('receipt_image');
            $table->double('cost', 8, 2);
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
        Schema::dropIfExists('petrols');
    }
};
