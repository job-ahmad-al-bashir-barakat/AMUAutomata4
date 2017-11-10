<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockDetailTextLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('block_detail_text_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('block_detail_id')->unsigned()->index('block_detail_id');
			$table->integer('lang_id')->unsigned()->index('lang_id');
			$table->string('text', 350);
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
		Schema::drop('block_detail_text_langs');
	}

}
