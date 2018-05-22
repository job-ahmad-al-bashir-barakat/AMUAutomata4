<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseContentLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_content_langs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('course_id')->unsigned()->nullable()->index('course_id');
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
        Schema::dropIfExists('course_content_langs');
    }
}
