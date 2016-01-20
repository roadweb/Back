<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnonymousTable extends Migration {

	public function up()
	{
		Schema::create('anonymous', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('email', 255)->unique();
			$table->string('username', 255);
		});
	}

	public function down()
	{
		Schema::drop('anonymous');
	}
}