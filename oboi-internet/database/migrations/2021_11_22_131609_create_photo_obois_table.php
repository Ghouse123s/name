<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoOboisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_obois', function (Blueprint $table) {
            $table->id();
            $table->string('articul');
            $table->string('nazvanie');
            $table->string('brend');
            $table->string('prise');
            $table->string('photo');
            $table->string('reitng');

            $table->string('ves');
            $table->string('visota');
            $table->string('chirina');
            $table->string('glubina');
            $table->string('strana_proizvaditel');
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
        Schema::dropIfExists('photo_obois');
    }
}
