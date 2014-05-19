<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('topic');
            $table->string('title');
            $table->text('content');
            $table->integer('author')->unsigned();
            $table->foreign('author')->references('id')->on('user');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('post');
	}

}
