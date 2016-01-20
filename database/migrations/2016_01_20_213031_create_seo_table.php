<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeoTable extends Migration {

	public function up()
	{
		Schema::create('seo', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('post_id')->unsigned();
			$table->softDeletes();
			$table->string('url_thumb', 92);
			$table->text('alt_thumb');
			$table->string('title_thumb', 70);
			$table->string('head_title', 55);
			$table->string('head_description', 155);
			$table->text('head_keywords')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('seo');
	}
}