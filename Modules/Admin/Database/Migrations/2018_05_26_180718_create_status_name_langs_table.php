<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatusNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('status_name_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('status_id')->unsigned()->index('status_id');
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
		Schema::drop('status_name_langs');
	}

}
