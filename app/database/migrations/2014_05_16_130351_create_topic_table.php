<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topic', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('forum_id')->unsigned();
            $table->foreign('forum_id')->references('id')->on('forum');
            $table->integer('views')->default(0);
            $table->timestamp('done_at')->nullable();
			$table->timestamps();
            $table->boolean('public');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topic');
	}

}
