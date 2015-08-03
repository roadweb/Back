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
            $table->string('slide_img');

		});

        Job::create(['name' => 'Developpeur', 'job_icon' => 'images/jobs-icon/developpement.png', 'slide_img' => 'images/ecran_slide/ecran-developement.png']);
        Job::create(['name' => 'Designer', 'job_icon' => 'images/jobs-icon/webdesign.png', 'slide_img' => 'images/ecran_slide/ecran-webdesigne.png']);
        Job::create(['name' => 'Community Manager', 'job_icon' => 'images/jobs-icon/cm.png', 'slide_img' => 'images/ecran_slide/ecran-cm.png']);
        Job::create(['name' => 'Web Marketer', 'job_icon' => 'images/jobs-icon/webmarketing.png', 'slide_img' => 'images/ecran_slide/ecran-webmarketing.png']);
        Job::create(['name' => 'Integrateur', 'job_icon' => 'images/jobs-icon/integration.png', 'slide_img' => 'images/ecran_slide/ecran-integration.png']);
        Job::create(['name' => 'Referenceur', 'job_icon' => 'images/jobs-icon/referencement.png', 'slide_img' => 'images/ecran_slide/ecran-referencement.png']);
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
