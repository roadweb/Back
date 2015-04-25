<?php

use App\State;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('states', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
			$table->timestamps();
		});

        State::create(['name' => 'En demande']);
        State::create(['name' => 'En cours de traitement']);
        State::create(['name' => 'Déjà traité']);
        State::create(['name' => 'Disponible']);
        State::create(['name' => 'Hors sujet']);
        State::create(['name' => 'Fermé']);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('states');
	}

}
