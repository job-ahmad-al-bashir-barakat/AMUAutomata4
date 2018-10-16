<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuListNameLangs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_list_name_langs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('menu_list_id')->nullable()->index('menu_list_id');
            $table->integer('lang_id')->nullable()->index('lang_id');
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
        Schema::dropIfExists('menu_list_name_langs');
    }
}
