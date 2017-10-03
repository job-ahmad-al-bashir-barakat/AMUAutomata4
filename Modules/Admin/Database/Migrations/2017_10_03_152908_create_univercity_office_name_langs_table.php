<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnivercityOfficeNameLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univercity_office_name_langs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lang_id');
            $table->text('text');
            $table->integer('univercity_office_id');
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
        Schema::dropIfExists('univercity_office_name_langs');
    }
}
