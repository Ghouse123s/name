<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinilovieOboisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finilovie_obois', function (Blueprint $table) {
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
            $table->string('Pomechenie');
            $table->string('dlina');
            $table->string('stil');
            $table->string('factura');
            $table->string('structura_poloten');
            $table->string('raport');
            $table->string('svetostoikoct');
            $table->string('iznosostoikost');
            $table->string('poverxnost_nanesenie_klea');
            $table->string('podxodachi_tip_klea');
            $table->string('sposob_ochitki');
            $table->string('sposob_snatia');

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
        Schema::dropIfExists('finilovie_obois');
    }
}
