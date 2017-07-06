<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyYearNameLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_year_name_langs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('study_year_id')->unsigned()->nullable()->index('study_year_id');
            $table->integer('lang_id')->unsigned()->nullable()->index('lang_id');
            $table->string('text')->nullable();
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
        Schema::dropIfExists('study_year_name_langs');
    }
}
