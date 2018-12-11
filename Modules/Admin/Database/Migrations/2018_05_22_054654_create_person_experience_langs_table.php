<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonExperienceLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_experience_langs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('person_id')->nullable()->index('person_id');
            $table->integer('lang_id')->nullable()->index('lang_id');
            $table->longText('text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_experience_langs');
    }
}
