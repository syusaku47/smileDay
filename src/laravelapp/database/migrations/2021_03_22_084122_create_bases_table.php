<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('base_name', 60);
            $table->string('base_name_kana', 60);
            $table->integer('potal_number');
            $table->integer('prefectures_id');
            $table->string('city', 60);
            $table->string('town', 255);
            $table->BigInteger('phone_number');
            $table->integer('base_type_id');
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
        Schema::dropIfExists('bases');
    }
}
