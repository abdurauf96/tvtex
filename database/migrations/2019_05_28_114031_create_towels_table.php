<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTowelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id');
            $table->integer('tkan_id');
            $table->integer('plotnost_id');
            $table->integer('size_id');
            $table->string('title');
            $table->text('description');
            $table->string('tarkibi');
            $table->string('status');
            $table->string('image');
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
        Schema::dropIfExists('towels');
    }
}
