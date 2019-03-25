<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopStudentRankNameLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_student_rank_name_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('top_student_rank_id')->index();
            $table->unsignedInteger('lang_id')->index();
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
        Schema::dropIfExists('top_student_rank_name_langs');
    }
}
