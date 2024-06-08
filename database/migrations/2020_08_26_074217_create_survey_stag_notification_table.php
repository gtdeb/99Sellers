<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSurveyStagNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_stag_notification', function(Blueprint $table)
		{
			$table->integer('notification_id')->default(0);
			$table->integer('stagging_id');
			$table->string('notification_channel', 100)->default('site')->comment('only \'site\'');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('survey_stag_notification');
	}

}
