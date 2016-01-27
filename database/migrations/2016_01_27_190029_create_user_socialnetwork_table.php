<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSocialnetworkTable extends Migration {

	public function up()
	{
		Schema::create('user_socialnetwork', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('userdetails_id')->unsigned();
			$table->integer('socialnetwork_id')->unsigned();
			$table->string('url', 255);
		});
	}

	public function down()
	{
		Schema::drop('user_socialnetwork');
	}
}