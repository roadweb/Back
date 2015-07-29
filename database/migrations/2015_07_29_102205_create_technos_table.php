<?php

use App\Techno;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('technos', function(Blueprint $table)
        {

            $table->increments('id');
            $table->string('name');
            $table->string('img_link');

        });

        Techno::create(['name' => 'html5', 'img_link' => 'images/technos/html5.png']);
        Techno::create(['name' => 'CSS', 'img_link' => 'images/technos/css3.png']);
        Techno::create(['name' => 'php', 'img_link' => 'images/technos/php.png']);
        Techno::create(['name' => 'js', 'img_link' => 'images/technos/js.png']);
        Techno::create(['name' => 'photoshop', 'img_link' => 'images/technos/photoshop.png']);
        Techno::create(['name' => 'illustrator', 'img_link' => 'images/technos/illustrator.png']);
        Techno::create(['name' => 'aftereffect', 'img_link' => 'images/technos/aftereffect.png']);
        Techno::create(['name' => 'adobepremiere', 'img_link' => 'images/technos/adobepremiere.png']);
        Techno::create(['name' => 'flash', 'img_link' => 'images/technos/flash.png']);
        Techno::create(['name' => 'github', 'img_link' => 'images/technos/github.png']);
        Techno::create(['name' => 'buffer', 'img_link' => 'images/technos/buffer.png']);
        Techno::create(['name' => 'wordpress', 'img_link' => 'images/technos/wordpress.png']);
        Techno::create(['name' => 'amp', 'img_link' => 'images/technos/amp.png']);
        Techno::create(['name' => 'ajax', 'img_link' => 'images/technos/ajax.png']);
        Techno::create(['name' => 'angularjs', 'img_link' => 'images/technos/angularjs.png']);
        Techno::create(['name' => 'sql', 'img_link' => 'images/technos/sql.png']);
        Techno::create(['name' => 'c', 'img_link' => 'images/technos/c.png']);
        Techno::create(['name' => 'autre', 'img_link' => 'images/technos/defaut.png']);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('technos');
	}

}
