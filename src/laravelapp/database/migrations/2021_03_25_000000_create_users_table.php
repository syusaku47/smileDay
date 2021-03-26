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
            $table->increments('id');
            $table->string('lastname', 60);
            $table->string('firstname', 60);
            $table->string('lastname_kana', 60);
            $table->string('firstname_name', 60);
            $table->integer('group_id');
            $table->integer('base_id')->unsigned();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('hash_password', 255);
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
        Schema::dropIfExists('users');
    }
}
