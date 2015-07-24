<?php

use App\Job;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
			$table->timestamps();
            $table->string('resume');
            $table->longText('content');
            $table->string('title');
            $table->string('job_icone');

		});

        Job::create(['name' => 'Developpeur']);
        Job::create(['name' => 'Designer']);
        Job::create(['name' => 'Community Manager']);
        Job::create(['name' => 'Web Marketer']);
        Job::create(['name' => 'Integrateur']);
        Job::create(['name' => 'Referenceur']);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobs');
	}

}
