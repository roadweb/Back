<?php

use Illuminate\Database\Seeder;
use App\Models\SocialNetwork;

class SocialNetworkTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('socialnetwork')->delete();

		// facebook
		SocialNetwork::create(array(
				'name' => facebook
			));

		// twitter
		SocialNetwork::create(array(
				'name' => twitter
			));

		// github
		SocialNetwork::create(array(
				'name' => github
			));
	}
}