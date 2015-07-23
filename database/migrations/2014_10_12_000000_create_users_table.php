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
            $table->string('www')->default('null');
            $table->string('skype')->default('null');
            $table->string('facebook')->default('null');
            $table->string('twitter')->default('null');
            $table->string('pinterest')->default('null');
            $table->string('behance')->default('null');
            $table->string('linkedin')->default('null');
            $table->string('viadeo')->default('null');
            $table->string('youtube')->default('null');
            $table->string('googleplus')->default('null');
            $table->string('blogrw')->default('null');
            $table->string('abonnement_id');
            $table->string('avatar')->default('null');
            $table->longText('bio');



		});

        Schema::table('users', function(Blueprint $table){
            $table->integer('job_id')->unsigned()->index();
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
