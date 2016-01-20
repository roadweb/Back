<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAsksTable extends Migration {

	public function up()
	{
		Schema::create('asks', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('job_id')->unsigned();
			$table->integer('manager_id')->unsigned()->nullable();
			$table->integer('state_id')->unsigned();
			$table->integer('askable_id');
			$table->string('askable_type', 50);
			$table->string('matter', 255);
			$table->integer('likes');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('post_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('asks');
	}
}