<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('users')->delete();

		// user
		User::create(array(
				'email' => admin@g.com,
				'password' => 123456
			));

		// membre
		User::create(array(
				'email' => membre@g.com,
				'password' => 123456
			));
	}
}