<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlockNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('block_name_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('block_id')->unsigned()->index('block_id');
			$table->integer('lang_id')->unsigned()->index('lang_id');
			$table->string('text', 150);
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
		Schema::drop('block_name_langs');
	}

}
