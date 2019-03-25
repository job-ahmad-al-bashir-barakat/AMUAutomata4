<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTitleLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news_title_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('news_id')->unsigned()->index('news_id');
			$table->integer('lang_id')->unsigned()->index('lang_id');
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
		Schema::drop('news_title_langs');
	}

}
