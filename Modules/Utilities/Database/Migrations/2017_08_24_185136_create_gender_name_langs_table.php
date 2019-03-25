<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGenderNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gender_name_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('gender_id')->nullable()->index('gender_id');
			$table->integer('lang_id')->nullable()->index('lang_id');
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
		Schema::drop('gender_name_langs');
	}

}
