<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaNotifSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_notif_setting', function(Blueprint $table)
		{
			$table->increments('notif_setting_id');
			$table->enum('activity', ['shortlist','review','download','flag','comment','post','curation','add','edit','copy','move','remove'])->unique('activity');
			$table->enum('site', ['yes','no']);
			$table->enum('sms', ['no','yes']);
			$table->enum('email', ['no','yes']);
			$table->enum('admin', ['yes','no']);
			$table->enum('agent', ['no','yes']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_notif_setting');
	}

}
