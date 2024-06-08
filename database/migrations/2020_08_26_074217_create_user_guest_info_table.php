<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserGuestInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_guest_info', function(Blueprint $table)
		{
			$table->increments('guest_id');
			$table->string('guest_ip', 50);
			$table->integer('access_level_id')->unsigned();
			$table->string('name', 100)->nullable();
			$table->text('address', 65535)->nullable();
			$table->string('email', 50)->nullable()->unique('email');
			$table->string('phone', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_guest_info');
	}

}
