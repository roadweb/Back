<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTrainingTable extends Migration {

	public function up()
	{
		Schema::create('training', function(Blueprint $table) {
			$table->increments('id');
			$table->softDeletes();
			$table->string('name', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('training');
	}
}