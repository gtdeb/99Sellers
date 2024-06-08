<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_config', function(Blueprint $table)
		{
			$table->increments('survey_config_id');
			$table->text('header_message', 65535)->nullable();
			$table->text('body_message', 65535)->nullable();
			$table->enum('pin', ['no','yes']);
			$table->enum('comment', ['no','yes']);
			$table->enum('review', ['no','yes']);
			$table->enum('status', ['active','inactive']);
			$table->timestamp('created_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_time')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('survey_config');
	}

}
