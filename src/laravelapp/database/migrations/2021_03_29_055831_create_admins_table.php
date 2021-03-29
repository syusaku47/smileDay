<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) { //ここを変更
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('lastname_kana');
            $table->string('firstname_kana');
            $table->integer('group_id');
            $table->integer('base_id')->unsigned();

            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('base_id')->references('id')->on('bases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
