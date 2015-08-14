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
            $table->string('username')->unique();
			$table->string('first_name');
            $table->string('last_name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('emweb')->default('null');
            $table->string('adress')->default('null');
            $table->string('city')->default('null');
            $table->string('country')->default('null');
            $table->date('birthday');
            $table->date('subscribe_date');
			$table->rememberToken();
			$table->timestamps();
            $table->string('blogrw');
            $table->string('avatar')->default('images/avatars/avatar-base.png');
            $table->longText('bio');
            $table->string('asso')->default(false);
            $table->string('www');
            $table->string('skype');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('pinterest');
            $table->string('behance');
            $table->string('linkedin');
            $table->string('viadeo');
            $table->string('youtube');
            $table->string('googleplus');

        });

        Schema::table('users', function(Blueprint $table){
            $table->integer('job_id')->unsigned()->index();
            $table->integer('right_id')->default('1')->index();
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
