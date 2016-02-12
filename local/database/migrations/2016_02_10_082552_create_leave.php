<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeave extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leave', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_employed');
			$table->string('start', 10);
			$table->string('finish', 10);
			$table->integer('period');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('leave');
	}

}
