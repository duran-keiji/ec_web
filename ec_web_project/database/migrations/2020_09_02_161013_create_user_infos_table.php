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
            $table->string('last_name', 50)->nullable(false);
            $table->string('first_name', 50)->nullable(false);
            $table->string('mail', 256)->unique()->nullable(false);
            $table->string('password', 50)->nullable(false);
            $table->smallInteger('age')->nullable();
            $table->tinyInteger('sex')->nullable();
            $table->smallInteger('interest')->nullable();
            $table->tinyInteger('delete_flg')->nullable(false);
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
