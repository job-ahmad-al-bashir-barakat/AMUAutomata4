<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResearchJournalLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_journal_langs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('research_id')->nullable()->index('person_id');
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
        Schema::dropIfExists('research_journal_langs');
    }
}
