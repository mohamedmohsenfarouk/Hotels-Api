<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProviderBTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_b', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->string('rate');
            $table->integer('price');
            $table->string('amentities')->nullable();
            $table->integer('discount')->nullable();
            $table->integer('city_code')->nullable();
            $table->integer('no_adults')->nullable();
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
        Schema::dropIfExists('provider_b');
    }
}
