<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id')->unsigned();
			$table->integer('job_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('title', 200);
			$table->text('resume');
			$table->text('matter');
			$table->boolean('is_sticky');
			$table->date('sticky_end');
			$table->boolean('published');
			$table->boolean('validated');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}