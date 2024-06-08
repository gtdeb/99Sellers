<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsrSrvReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usr_srv_review', function(Blueprint $table)
		{
			$table->string('user_id', 100)->comment('g_ for guest, a_ for agent, d_ for admin');
			$table->integer('survey_config_id')->unsigned();
			$table->timestamp('review_timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('comment', 65535)->nullable();
			$table->integer('review_value')->nullable();
			$table->primary(['user_id','survey_config_id','review_timestamp']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usr_srv_review');
	}

}
