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
            $table->string('job_color_clair');
            $table->string('job_color_fonce');

		});

        Job::create(['name' => 'Developpeur']);
        Job::create(['name' => 'Designer']);
        Job::create(['name' => 'Community Manager']);
        Job::create(['name' => 'Web Marketer']);
        Job::create(['name' => 'Integrateur']);
        Job::create(['name' => 'Referenceur']);

        //couleur des jobs dans l'ordre des id
        Job::create(['job_color_clair' => '#F6D432']);
        Job::create(['job_color_fonce' => '#F6D432']);

        Job::create(['job_color_clair' => '#72CFF5']);
        Job::create(['job_color_fonce' => '#36A7DE']);

        Job::create(['job_color_clair' => '#EB6441']);
        Job::create(['job_color_fonce' => '#E72E2D']);

        Job::create(['job_color_clair' => '#F59E36']);
        Job::create(['job_color_fonce' => '#F59E36']);

        Job::create(['job_color_clair' => '#DCDD1F']);
        Job::create(['job_color_fonce' => '#38AA49']);

        Job::create(['job_color_clair' => '#B76DAB']);
        Job::create(['job_color_fonce' => '#942581']);
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
