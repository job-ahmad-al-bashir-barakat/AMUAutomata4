<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageAltLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_alt_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('image_id')->nullable()->index('image_id');
            $table->integer('lang_id')->nullable()->index('lang_id');
            $table->string('text', 191)->nullable();
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
        Schema::dropIfExists('image_alt_langs');
    }
}
