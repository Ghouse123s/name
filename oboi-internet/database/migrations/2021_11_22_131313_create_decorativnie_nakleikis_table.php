<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecorativnieNakleikisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decorativnie_nakleikis', function (Blueprint $table) {
            $table->id();
            $table->string('articul');
            $table->string('nazvanie');
            $table->string('brend');
            $table->string('prise');
            $table->string('photo');
            $table->string('reitng');
            $table->string('primenenie');
            $table->string('naznachenie');
            $table->string('pofirchnost');
            $table->string('dlina');
            $table->string('kolichestvo_v_upakovke');
            $table->string('nadpis');
            $table->string('tema');
            $table->string('material');
            $table->string('poverxnost_nanesenie');
            $table->string('osobenosti');

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
        Schema::dropIfExists('decorativnie_nakleikis');
    }
}
