<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
			$table->timestamps();
            $table->integer('parent')->unsigned()->nullable();
            $table->foreign('parent')->references('id')->on('forum')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forum');
	}

}
