<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserWebAccessLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_web_access_log', function(Blueprint $table)
		{
			$table->string('web_access_log_id', 100)->comment('g_ for guest, a_ for agent, d_ for admin');
			$table->timestamp('begin_timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->dateTime('end_timestamp')->default('0000-00-00 00:00:00');
			$table->text('prop_lst_search', 65535)->nullable();
			$table->text('media_lst_search', 65535)->nullable();
			$table->primary(['web_access_log_id','begin_timestamp']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_web_access_log');
	}

}
