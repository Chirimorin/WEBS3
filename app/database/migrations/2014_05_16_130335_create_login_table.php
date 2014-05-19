<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('login', function(Blueprint $table)
		{
            $table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('user');
            $table->timestamp('created_at')->primary();
            $table->string('ip_address');
            $table->string('browser');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('login');
	}

}
