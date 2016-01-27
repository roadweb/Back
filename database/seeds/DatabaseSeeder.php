<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('JobTableSeeder');
		$this->command->info('Job table seeded!');

		$this->call('SocialNetworkTableSeeder');
		$this->command->info('SocialNetwork table seeded!');

		$this->call('CategoryTableSeeder');
		$this->command->info('Category table seeded!');

		$this->call('UserTableSeeder');
		$this->command->info('User table seeded!');

		$this->call('RightTableSeeder');
		$this->command->info('Right table seeded!');
	}
}