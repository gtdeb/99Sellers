<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserActivityLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_activity_log', function(Blueprint $table)
		{
			$table->string('user_id', 100)->comment('g_ for guest, a_ for agent, d_ for admin');
			$table->enum('content_type', ['void','property','media','booster','survey']);
			$table->integer('content_type_id')->unsigned()->default(0)->comment('value is \'0\' when content_type is \'void\' or multiple \'add\' and/or \'edit\' and/or \'remove\' is/are performed');
			$table->timestamp('timestamp')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->enum('activity', ['view','subscribe','unsubscribe','membership_buy','login_issue','customer_issue','shortlist','review','download','flag','comment','post','survey','curation','add','edit','copy','move','remove','multiple'])->comment('content_type is \'void\' for following activities: \'subscribe\',\'unsubscribe\',\'membership_buy\',\'login_issue\',\'customer_issue\'; \'multiple\' for multiple media/property add/edit/remove activity');
			$table->integer('stagging_id')->unsigned()->nullable()->comment('entry only in case of activity is commenced against one property/media/booster/survey');
			$table->string('flag', 100)->nullable();
			$table->text('comment', 65535)->nullable();
			$table->integer('review')->unsigned()->default(0);
			$table->text('add_edit_remove', 65535)->nullable()->comment('store content_type (media/property) id which are added and or edited and or removed in JSON format; content_type_id is \'0\' and activity is \'multiple\';only for addition notification should be there for agent, admin(default) ');
			$table->enum('agent_notif_clear', ['none','no','yes'])->comment('by default \'none\'; for activities \'shortlisted\'/downloaded\'/\'flag\'/\'post\' permitted, if site notification permitted goes to agent; then this value is set to \'no\'; once agent clear his notification, this is set to \'yes\'');
			$table->primary(['user_id','content_type','content_type_id','timestamp']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_activity_log');
	}

}
