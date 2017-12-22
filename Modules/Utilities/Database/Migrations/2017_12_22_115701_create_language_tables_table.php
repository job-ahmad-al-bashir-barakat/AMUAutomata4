<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLanguageTablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('language_tables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('table_id')->unsigned()->index('table_id');
			$table->string('table_name', 200);
			$table->string('namespace', 400);
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
		Schema::drop('language_tables');
	}

}
