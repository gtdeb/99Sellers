<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserAccessControlListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_access_control_list', function(Blueprint $table)
		{
			$table->increments('access_level_id');
			$table->enum('access_level', ['admin','agent','guest']);
			$table->string('membership_type', 50);
			$table->integer('max_media_show')->unsigned()->default(100);
			$table->integer('max_new_media_notif')->unsigned()->nullable();
			$table->integer('max_media_recent_view')->unsigned()->default(5);
			$table->integer('max_property_show')->unsigned()->default(50);
			$table->integer('max_new_prop_notif')->unsigned()->nullable();
			$table->integer('max_prop_recent_view')->unsigned()->default(5);
			$table->enum('view', ['yes','no'])->comment('For All  Users');
			$table->enum('add_', ['no','yes'])->comment('For Admin User');
			$table->enum('edit', ['no','yes'])->comment('For Admin User');
			$table->enum('remove', ['no','yes'])->comment('For Admin User');
			$table->enum('copy', ['no','yes'])->comment('For Admin User');
			$table->enum('move', ['no','yes'])->comment('For Admin User');
			$table->enum('upload', ['no','yes'])->comment('For Admin User');
			$table->enum('prop_notification', ['no','yes']);
			$table->enum('prop_shortlist', ['no','yes']);
			$table->enum('prop_review', ['no','yes']);
			$table->enum('prop_download', ['no','yes']);
			$table->enum('media_notification', ['no','yes']);
			$table->enum('media_shortlist', ['no','yes']);
			$table->enum('media_review', ['no','yes']);
			$table->enum('media_download', ['no','yes']);
			$table->enum('media_flag', ['no','yes']);
			$table->enum('media_post', ['no','yes']);
			$table->enum('media_comment', ['no','yes']);
			$table->enum('boostr_cnt_shortlist', ['no','yes']);
			$table->enum('booster_review', ['no','yes']);
			$table->enum('booster_download', ['no','yes']);
			$table->enum('booster_flag', ['no','yes']);
			$table->enum('booster_post', ['no','yes']);
			$table->enum('booster_comment', ['no','yes']);
			$table->enum('survey_review', ['no','yes']);
			$table->enum('survey_comment', ['no','yes']);
			$table->enum('status', ['active','inactive']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_access_control_list');
	}

}
