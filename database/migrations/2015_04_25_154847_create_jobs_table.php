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
            $table->string('job_icon');
			$table->timestamps();
            $table->string('resume');
            $table->longText('content');
            $table->string('title');

		});

        Job::create(['name' => 'Developpeur', 'job_icon' => 'images/jobs-icon/developpement.png']);
        Job::create(['name' => 'Designer', 'job_icon' => 'images/jobs-icon/webdesign.png']);
        Job::create(['name' => 'Community Manager', 'job_icon' => 'images/jobs-icon/cm.png']);
        Job::create(['name' => 'Web Marketer', 'job_icon' => 'images/jobs-icon/webmarketing.png']);
        Job::create(['name' => 'Integrateur', 'job_icon' => 'images/jobs-icon/integration.png']);
        Job::create(['name' => 'Referenceur', 'job_icon' => 'images/jobs-icon/referencement.png']);
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
