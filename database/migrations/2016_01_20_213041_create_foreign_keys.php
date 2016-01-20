<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('userdetails', function(Blueprint $table) {
			$table->foreign('job_id')->references('id')->on('jobs')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('userdetails', function(Blueprint $table) {
			$table->foreign('right_id')->references('id')->on('right')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('userdetails', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('userdetails', function(Blueprint $table) {
			$table->foreign('training_id')->references('id')->on('training')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('user_socialnetwork', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('userdetails')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('user_socialnetwork', function(Blueprint $table) {
			$table->foreign('socialnetwork_id')->references('id')->on('socialnetwork')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('posts', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('posts', function(Blueprint $table) {
			$table->foreign('job_id')->references('id')->on('jobs')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('posts', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('userdetails')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('asks', function(Blueprint $table) {
			$table->foreign('job_id')->references('id')->on('jobs')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('asks', function(Blueprint $table) {
			$table->foreign('manager_id')->references('id')->on('users')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('asks', function(Blueprint $table) {
			$table->foreign('state_id')->references('id')->on('state')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('seo', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('posts')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('posts_has_tags', function(Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('posts')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('posts_has_tags', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('userdetails', function(Blueprint $table) {
			$table->dropForeign('userdetails_job_id_foreign');
		});
		Schema::table('userdetails', function(Blueprint $table) {
			$table->dropForeign('userdetails_right_id_foreign');
		});
		Schema::table('userdetails', function(Blueprint $table) {
			$table->dropForeign('userdetails_user_id_foreign');
		});
		Schema::table('userdetails', function(Blueprint $table) {
			$table->dropForeign('userdetails_training_id_foreign');
		});
		Schema::table('user_socialnetwork', function(Blueprint $table) {
			$table->dropForeign('user_socialnetwork_user_id_foreign');
		});
		Schema::table('user_socialnetwork', function(Blueprint $table) {
			$table->dropForeign('user_socialnetwork_socialnetwork_id_foreign');
		});
		Schema::table('posts', function(Blueprint $table) {
			$table->dropForeign('posts_category_id_foreign');
		});
		Schema::table('posts', function(Blueprint $table) {
			$table->dropForeign('posts_job_id_foreign');
		});
		Schema::table('posts', function(Blueprint $table) {
			$table->dropForeign('posts_user_id_foreign');
		});
		Schema::table('asks', function(Blueprint $table) {
			$table->dropForeign('asks_job_id_foreign');
		});
		Schema::table('asks', function(Blueprint $table) {
			$table->dropForeign('asks_manager_id_foreign');
		});
		Schema::table('asks', function(Blueprint $table) {
			$table->dropForeign('asks_state_id_foreign');
		});
		Schema::table('seo', function(Blueprint $table) {
			$table->dropForeign('seo_post_id_foreign');
		});
		Schema::table('posts_has_tags', function(Blueprint $table) {
			$table->dropForeign('posts_has_tags_post_id_foreign');
		});
		Schema::table('posts_has_tags', function(Blueprint $table) {
			$table->dropForeign('posts_has_tags_tag_id_foreign');
		});
	}
}