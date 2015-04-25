<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question');
            $table->integer('likes');
            $table->timestamps();
        });

        Schema::table('questions', function (Blueprint $table) {
            $table->integer('job_id')->unsigned()->index();
            $table->integer('state_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
        });

        App\Question::create([
            'question' => 'Je suis un homme ?',
            'likes'    => 5,
            'job_id'   => 1,
            'user_id'  => 1
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}