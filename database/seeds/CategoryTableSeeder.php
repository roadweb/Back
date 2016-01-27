<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('categories')->delete();

		// blog
		Category::create(array(
				'name' => blog
			));

		// tutoriel
		Category::create(array(
				'name' => tutoriel
			));

		// ressource
		Category::create(array(
				'name' => ressource
			));
	}
}