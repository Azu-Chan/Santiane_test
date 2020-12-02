<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trip_id');
            $table->enum('type', ['bus', 'plane', 'train']);
            $table->string('transport_number');
            $table->date('departure_date')->nullable();
            $table->string('departure')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('arrival')->nullable();
            $table->string('seat')->nullable();
            $table->string('gate')->nullable();
            $table->string('baggage_drop')->nullable();
            $table->timestamps();

            $table->foreign('trip_id')->references('id')->on('trip');
            $table->unique(['trip_id', 'departure']);
            $table->unique(['trip_id', 'arrival']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('steps');
    }
}
