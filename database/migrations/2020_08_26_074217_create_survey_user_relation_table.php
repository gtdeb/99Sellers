<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyUserRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_user_relation', function(Blueprint $table)
		{
			$table->integer('survey_config_id')->unsigned();
			$table->string('user_id', 100)->comment('g_ for guest, a_ for agent, d_ for admin');
			$table->unique(['survey_config_id','user_id'], 'survey_config_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('survey_user_relation');
	}

}
