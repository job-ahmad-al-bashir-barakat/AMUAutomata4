<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventGroupNameLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_group_name_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_group_id')->nullable()->index();
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
        Schema::dropIfExists('event_group_name_langs');
    }
}
