<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->string('resume');
            $table->longText('content');
            $table->string('is_sticky')->default(false);
            $table->date('sticky_end');
            $table->string('published')->default(false);
            $table->string('ref_title');
            $table->string('ref_thumb');
            $table->string('ref_description');
			$table->timestamps();
		});

        Schema::table('posts', function(Blueprint $table){
            $table->integer('category_id')->unsigned()->index();
            $table->integer('job_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}
}