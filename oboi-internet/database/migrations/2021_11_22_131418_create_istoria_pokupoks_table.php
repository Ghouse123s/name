<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIstoriaPokupoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('istoria_pokupoks', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('articuli')->unsigned();
            $table->string('kolichestvo');
            $table->string('prise');
            $table->string('data');
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
        Schema::dropIfExists('istoria_pokupoks');
    }
}
