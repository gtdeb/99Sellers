<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyStaggingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_stagging', function(Blueprint $table)
		{
			$table->integer('stagging_id')->unsigned()->default(0);
			$table->integer('survey_config_id')->unsigned()->default(0);
			$table->enum('status', ['survey']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('survey_stagging');
	}

}
