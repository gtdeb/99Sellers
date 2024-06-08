<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertyStagNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_stag_notification', function(Blueprint $table)
		{
			$table->integer('notification_id', true);
			$table->integer('stagging_id');
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
		Schema::drop('property_stag_notification');
	}

}
