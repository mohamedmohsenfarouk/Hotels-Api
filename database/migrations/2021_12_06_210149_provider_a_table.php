<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProviderATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_a', function (Blueprint $table) {
            $table->id();
            $table->string('hotel');
            $table->integer('rate');
            $table->integer('fare');
            $table->string('room_amenities')->nullable();
            $table->integer('city')->nullable();
            $table->integer('adults')->nullable();
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
        Schema::dropIfExists('provider_a');
    }
}
