<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVerticalSliderDetailTextLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vertical_slider_detail_text_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vertical_slider_detail_id')->unsigned()->index('vertical_detail_id');
			$table->integer('lang_id')->unsigned()->index('lang_id');
			$table->string('text', 500);
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
		Schema::drop('vertical_slider_detail_text_langs');
	}

}
