<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBordurisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borduris', function (Blueprint $table) {
            $table->id();
            $table->string('articul');
            $table->string('nazvanie');
            $table->string('brend');
            $table->string('prise');
            $table->string('photo');
            $table->string('reitng');
            $table->string('opisanie');
            $table->string('Material_ocnovi');
            $table->string('Material_pokritia');
            $table->string('tip_bumacnih_obev');
            $table->string('pomechenie');
            $table->string('dlina');
            $table->string('dizain');
            $table->string('ornament');
            $table->string('still');
            $table->string('vozmoznost_pokraski');
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
        Schema::dropIfExists('borduris');
    }
}
