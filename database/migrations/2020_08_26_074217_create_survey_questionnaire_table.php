<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyQuestionnaireTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_questionnaire', function(Blueprint $table)
		{
			$table->increments('survey_questionnaire_id');
			$table->text('question', 65535);
			$table->enum('answer_input_type', ['check box','radio button','text box']);
			$table->string('answer_option_1', 50)->nullable();
			$table->string('answer_option_2', 50)->nullable();
			$table->string('answer_option_3', 50)->nullable();
			$table->string('answer_option_4', 50)->nullable();
			$table->string('answer_option_5', 50)->nullable();
			$table->integer('fetch_count')->unsigned()->default(0);
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
		Schema::drop('survey_questionnaire');
	}

}
