<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('pol');
            $table->string('familia');
            $table->string('name');
            $table->string('data_rogdenie');
            $table->string('yliza');
            $table->string('nomer_doma');
            $table->string('kvartira')->nullable();
            $table->string('indeks');
            $table->string('gorod');
            $table->bigInteger('telefon');
            $table->string('soglasie_na_rassilku')->nullable();
            $table->bigInteger('nomer_karti');
            $table->string('roll_user')->default(0);

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
