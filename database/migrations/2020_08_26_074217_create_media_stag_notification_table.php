<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaStagNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_stag_notification', function(Blueprint $table)
		{
			$table->increments('notification_id');
			$table->integer('stagging_id')->unsigned();
			$table->string('notification_channel', 100)->comment('one or more of \'site\',\'sms\',\'email\'');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_stag_notification');
	}

}
