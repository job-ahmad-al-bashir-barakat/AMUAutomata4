<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepUrlLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('step_url_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('step_id')->nullable()->index();
            $table->integer('lang_id')->nullable()->index();
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
        Schema::dropIfExists('step_url_langs');
    }
}
