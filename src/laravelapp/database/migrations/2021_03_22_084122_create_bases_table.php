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
            $table->string('base_name', 255);
            $table->integer('potal_number');
            $table->string('address', 255);
            $table->string('phone_number', 255);
            // $table->integer('content_id')->unsigned();
            $table->integer('base_type_id');
            $table->timestamps();

            // $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade'); 
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
