<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyQuestionnaireConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_questionnaire_config', function(Blueprint $table)
		{
			$table->integer('survey_config_id')->unsigned()->index('survey_config_id_indx');
			$table->integer('survey_questionnaire_id')->unsigned()->index('survey_questionnaire_id_indx');
			$table->unique(['survey_config_id','survey_questionnaire_id'], 'survey_config_id_u');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('survey_questionnaire_config');
	}

}
