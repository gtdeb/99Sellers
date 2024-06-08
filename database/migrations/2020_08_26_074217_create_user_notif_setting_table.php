<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserNotifSettingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_notif_setting', function(Blueprint $table)
		{
			$table->increments('notif_setting_id');
			$table->enum('activity', ['subscribe','unsubscribe','membership_buy','login_issue','customer_issue'])->unique('activity')->comment('This notification is from the customer/user to admin');
			$table->enum('site', ['yes','no']);
			$table->enum('sms', ['no','yes']);
			$table->enum('email', ['no','yes']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_notif_setting');
	}

}
