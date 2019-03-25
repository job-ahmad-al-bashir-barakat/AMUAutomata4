<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseBookNameLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_book_name_langs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('course_book_id')->nullable()->index('job_title_id');
            $table->integer('lang_id')->nullable()->index('lang_id');
            $table->string('text', '512')->nullable();
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
        Schema::dropIfExists('course_book_name_langs');
    }
}
