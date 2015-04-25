<?php

use App\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('username');
			$table->string('first_name');
            $table->string('last_name');
			$table->string('email')->unique();
			$table->string('password', 60);
            $table->string('adress')->default('null');
            $table->string('city')->default('null');
            $table->string('country')->default('null');
            $table->date('birthday');
            $table->date('subscribe_date');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
