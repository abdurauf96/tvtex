<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_vacancies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('vacancy_name');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('resume');
            $table->text('decription');
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
        Schema::dropIfExists('message_vacancies');
    }
}
