<?php

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('jobs')->delete();

		// developpeur
		Job::create(array(
				'name' => 'developpeur'
			));
	}
}