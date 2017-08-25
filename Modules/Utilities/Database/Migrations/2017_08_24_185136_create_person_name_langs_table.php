<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonNameLangsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('person_name_langs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('person_id')->nullable()->index('department_id');
			$table->integer('lang_id')->nullable()->index('lang_id');
			$table->string('text', 191)->nullable();
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
		Schema::drop('person_name_langs');
	}

}
