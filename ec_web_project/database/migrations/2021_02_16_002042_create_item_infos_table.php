<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_infos', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->string('item_name', 100)->unique();
            $table->smallInteger('category_id')->nullable(false);
            $table->smallInteger('stock_quantity')->nullable(false);
            $table->integer('price')->nullable(false);
            $table->string('desctiption', 1000);
            $table->string('details', 1000)->nullable();
            $table->string('color', 50)->nullable();
            $table->string('size', 50)->nullable();
            $table->string('pattern', 50)->nullable();
            $table->tinyInteger('evaluation')->nullable();
            $table->integer('review')->nullable();
            $table->smallInteger('point_level')->nullable();
            $table->smallInteger('sale_level')->nullable();
            $table->string('customer_question', 200)->nullable();
            $table->string('customer_answer', 200)->nullable();
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
        Schema::dropIfExists('item_infos');
    }
}
