<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserMembershipInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_membership_info', function(Blueprint $table)
		{
			$table->integer('membership_id', true);
			$table->string('membership_type', 200);
			$table->integer('price')->unsigned();
			$table->integer('duration_in_days')->unsigned()->default(0)->comment('\'0\' means one time buy');
			$table->enum('status', ['active','inactive']);
			$table->timestamp('created_time')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_time')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_membership_info');
	}

}
