<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteMenuNameLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_menu_name_langs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('site_menu_id')->nullable()->index('site_menu_id');
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
        Schema::dropIfExists('site_menu_name_langs');
    }
}
