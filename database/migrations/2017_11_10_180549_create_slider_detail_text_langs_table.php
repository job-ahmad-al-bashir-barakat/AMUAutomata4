<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSliderDetailTextLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('slider_detail_text_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('slider_detail_id')->unsigned()->index('slider_detail_id');
			$table->integer('lang_id')->unsigned()->index('lang_id');
			$table->string('text', 1000);
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
		Schema::drop('slider_detail_text_langs');
	}

}
