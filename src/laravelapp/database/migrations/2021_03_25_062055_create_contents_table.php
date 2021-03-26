<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('base_id')->unsigned();
            $table->boolean('is_staff_content')->default(1);
            $table->boolean('is_it_content')->default(1);
            $table->boolean('is_brain_content')->default(1);
            $table->boolean('is_pieceful_content')->default(1);
            $table->boolean('is_radio_content')->default(1);
            $table->boolean('is_nostalgic_content')->default(1);
            $table->boolean('is_what_day_content')->default(1);
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
        Schema::dropIfExists('contents');
    }
}
