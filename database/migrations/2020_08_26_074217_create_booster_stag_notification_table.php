<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBoosterStagNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booster_stag_notification', function(Blueprint $table)
		{
			$table->increments('notification_id');
			$table->integer('stagging_id')->unsigned();
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
		Schema::drop('booster_stag_notification');
	}

}
