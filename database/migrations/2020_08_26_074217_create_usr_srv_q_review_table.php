<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsrSrvQReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usr_srv_q_review', function(Blueprint $table)
		{
			$table->string('user_id', 100)->comment('g_ for guest, a_ for agent, d_ for admin');
			$table->integer('survey_questionnaire_id')->unsigned();
			$table->timestamp('review_timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('answer_1', 100)->nullable();
			$table->string('answer_2', 100)->nullable();
			$table->string('answer_3', 100)->nullable();
			$table->string('answer_4', 100)->nullable();
			$table->string('answer_5', 100)->nullable();
			$table->text('user_answer', 65535)->nullable();
			$table->primary(['user_id','survey_questionnaire_id','review_timestamp']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usr_srv_q_review');
	}

}
