<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserRegisteredInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_registered_info', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->integer('version')->unsigned()->default(0);
			$table->enum('live', ['no','yes']);
			$table->integer('access_level_id')->unsigned();
			$table->string('name', 50);
			$table->string('email', 50)->unique('users_email_unique');
			$table->timestamp('email_verified_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('password', 60);
			$table->string('remember_token', 100)->nullable();
			$table->string('phone', 20)->nullable();
			$table->string('fax', 20)->nullable();
			$table->text('about', 65535)->nullable();
			$table->text('address', 65535)->nullable();
			$table->string('facebook', 100)->nullable();
			$table->string('twitter', 100)->nullable();
			$table->string('gplus', 100)->nullable();
			$table->string('linkedin', 100)->nullable();
			$table->string('image_icon', 50)->nullable();
			$table->timestamp('subscription_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('unsubscribe_date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('subscription_duration', 50);
			$table->enum('status', ['active','inactive']);
			$table->primary(['user_id','version','access_level_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_registered_info');
	}

}
