<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRightTable extends Migration {

	public function up()
	{
		Schema::create('right', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100)->default('Membre');
		});
	}

	public function down()
	{
		Schema::drop('right');
	}
}