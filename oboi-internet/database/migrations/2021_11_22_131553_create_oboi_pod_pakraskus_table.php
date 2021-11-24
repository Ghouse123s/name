<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOboiPodPakraskusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oboi_pod_pakraskus', function (Blueprint $table) {
            $table->id();
            $table->string('articul');
            $table->string('nazvanie');
            $table->string('brend');
            $table->string('prise');
            $table->string('photo');
            $table->string('reitng');
            $table->string('opisanie');
            $table->string('premuchestva');
            $table->string('oblast_primenenie');
            $table->string('material');
            $table->string('dlina');
            $table->string('plochad');
            $table->string('Material_pokritia');
            $table->string('pomechenie');
            $table->string('dizain');
            $table->string('stil');
            $table->string('factura');
            $table->string('effect_pocritia');
            $table->string('stikovka_poloten');
            $table->string('vozmoznost_pokraski');
            $table->string('iznosostoikost');
            $table->string('poverxnost_nanesenie_klea');

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
        Schema::dropIfExists('oboi_pod_pakraskus');
    }
}
