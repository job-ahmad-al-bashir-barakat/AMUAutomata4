<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSummaryLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_summary_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->nullable()->index('user_id');
			$table->string('text', 191)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->integer('lang_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_summary_langs');
	}

}
