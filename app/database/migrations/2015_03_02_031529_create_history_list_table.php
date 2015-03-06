<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHistoryListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('history_list', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('history_id')->unsigned()->index();
			$table->foreign('history_id')->references('id')->on('histories')->onDelete('cascade');			
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('content');
            $table->integer('other_edit')->unsigned();
            $table->string('pic_url');
            $table->dateTime('time')->default('0000-00-00 00:00:00');            
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
		Schema::drop('history_list');
	}

}
