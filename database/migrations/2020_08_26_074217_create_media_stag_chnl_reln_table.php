<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaStagChnlRelnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_stag_chnl_reln', function(Blueprint $table)
		{
			$table->integer('stagging_id')->unsigned()->index('stagging_id_2');
			$table->integer('channel_id')->unsigned()->index('channel_id');
			$table->unique(['stagging_id','channel_id'], 'stagging_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_stag_chnl_reln');
	}

}
