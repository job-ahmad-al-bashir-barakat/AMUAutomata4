<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockDetailTitleLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('block_detail_title_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('block_detail_id')->unsigned()->index('block_detail_id');
			$table->integer('lang_id')->unsigned()->index('lang_id');
			$table->string('text', 100);
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
		Schema::drop('block_detail_title_langs');
	}

}
