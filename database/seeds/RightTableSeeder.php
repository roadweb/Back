<?php

use Illuminate\Database\Seeder;
use App\Models\Right;

class RightTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('right')->delete();

		// membre
		Right::create(array(
				'name' => membre
			));

		// auteur
		Right::create(array(
				'name' => auteur
			));

		// moderateur
		Right::create(array(
				'name' => moderateur
			));

		// admin
		Right::create(array(
				'name' => admin
			));
	}
}