<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name', 50);
            $table->string('first_name', 50);
            $table->string('email', 256)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 50);
            $table->smallInteger('age');
            $table->tinyInteger('sex');
            $table->smallInteger('interest')->nullable();
            $table->rememberToken();
            $table->tinyInteger('delete_flg');

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
        Schema::dropIfExists('user_infos');
    }
}
