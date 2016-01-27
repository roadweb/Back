<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStateTable extends Migration {

	public function up()
	{
		Schema::create('state', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 200);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('state');
	}
}