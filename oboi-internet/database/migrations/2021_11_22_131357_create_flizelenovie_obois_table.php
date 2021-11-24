<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlizelenovieOboisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flizelenovie_obois', function (Blueprint $table) {
            $table->id();
            $table->string('articul');
            $table->string('nazvanie');
            $table->string('brend');
            $table->string('prise');
            $table->string('photo');
            $table->string('reitng');
            $table->string('opisanie');
            $table->string('kolekzia');
            $table->string('premuchestva');
            $table->string('oblast_primenenie');
            $table->string('Material_ocnovi');
            $table->string('Material_pokritia');
            $table->string('Tip_pokritia');
            $table->string('Pomechenie');
            $table->string('dlina');
            $table->string('dizain');
            $table->string('stil');
            $table->string('factura');
            $table->string('structura_poloten');
            $table->string('svetostoikoct');
            $table->string('iznosostoikost');
            $table->string('poverxnost_nanesenie_klea');
            $table->string('podxodachi_tip_klea');
            $table->string('sposob_ochitki');


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
        Schema::dropIfExists('flizelenovie_obois');
    }
}
