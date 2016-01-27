<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('email', 255)->unique();
			$table->string('username');
			$table->string('password', 255);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}