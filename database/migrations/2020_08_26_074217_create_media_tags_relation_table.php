<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaTagsRelationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_tags_relation', function(Blueprint $table)
		{
			$table->integer('media_id')->unsigned()->index('media_id_2');
			$table->integer('tag_id')->unsigned()->index('tag_id');
			$table->unique(['media_id','tag_id'], 'media_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_tags_relation');
	}

}
