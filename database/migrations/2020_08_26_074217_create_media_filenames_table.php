<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMediaFilenamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_filenames', function(Blueprint $table)
		{
			$table->integer('media_id')->unsigned();
			$table->string('filename', 200)->unique('filename');
			$table->unique(['media_id','filename'], 'media_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_filenames');
	}

}
