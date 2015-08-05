<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Reseaux;

class CreateReseauxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('reseaux', function(Blueprint $table)
        {
            $table->increments('id');

            $table->string('www')->default('null');
            $table->string('skype')->default('null');
            $table->string('facebook')->default('null');
            $table->string('twitter')->default('null');
            $table->string('instagram')->default('null');
            $table->string('pinterest')->default('null');
            $table->string('behance')->default('null');
            $table->string('linkedin')->default('null');
            $table->string('viadeo')->default('null');
            $table->string('youtube')->default('null');
            $table->string('googleplus')->default('null');

        });

        Schema::table('reseaux', function(Blueprint $table){
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
        Schema::drop('reseaux');
	}

}
