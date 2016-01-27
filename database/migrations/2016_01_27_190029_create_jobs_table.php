<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	public function up()
	{
		Schema::create('jobs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('jobs');
	}
}