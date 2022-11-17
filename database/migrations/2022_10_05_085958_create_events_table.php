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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table-> string('name');
            $table->string('picture')->nullable();
            $table->dateTime('event_start');
            $table->dateTime('event_end');
            $table->integer('max_tickets');
            $table->string('location');
            $table->double("price", 20, 2);
            $table->longText('description');
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
        Schema::dropIfExists('tickets');
    }
};
