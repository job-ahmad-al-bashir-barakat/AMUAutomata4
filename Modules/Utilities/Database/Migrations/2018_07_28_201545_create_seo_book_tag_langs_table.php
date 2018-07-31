<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeoBookTagLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seo_book_tag_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('seo_id')->unsigned()->index('seo_id');
			$table->integer('lang_id')->unsigned()->index('lang_id');
			$table->string('text', 191);
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
		Schema::drop('seo_book_tag_langs');
	}

}
