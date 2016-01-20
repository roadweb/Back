<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserdetailsTable extends Migration {

	public function up()
	{
		Schema::create('userdetails', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('job_id')->unsigned();
			$table->integer('right_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('ip', 100)->nullable();
			$table->integer('training_id')->unsigned();
			$table->string('username', 255);
			$table->string('firstname', 255);
			$table->string('lastname', 255);
			$table->string('address', 255)->nullable();
			$table->string('city', 255)->nullable();
			$table->string('country', 255)->nullable();
			$table->date('birthday')->nullable();
			$table->string('avatar', 255)->default('images/avatars/avatar-base.png');
			$table->boolean('visibility');
			$table->text('bio')->nullable();
			$table->tinyInteger('asso')->default('0');
			$table->timestamps();
			$table->string('website', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('userdetails');
	}
}