<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsHasTagsTable extends Migration {

	public function up()
	{
		Schema::create('posts_has_tags', function(Blueprint $table) {
			$table->integer('post_id')->unsigned();
			$table->integer('tag_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('posts_has_tags');
	}
}