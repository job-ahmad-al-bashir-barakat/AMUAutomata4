<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_name_langs', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('user_id')->nullable()->index('user_id');
			$table->integer('lang_id')->nullable()->index('lang_id');
			$table->string('text')->nullable();
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
		Schema::drop('user_name_langs');
	}

}
