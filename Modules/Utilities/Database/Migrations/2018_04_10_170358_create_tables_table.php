<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tables', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('table_name', 200);
			$table->string('namespace', 400);
			$table->boolean('pageable');
			$table->string('pageable_column', 191)->nullable();
			$table->boolean('menuable');
			$table->string('menuable_type')->nullable() ;
			$table->boolean('dynamic')->default(0);
			$table->string('morph_code', 191)->nullable();
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
		Schema::drop('tables');
	}

}
