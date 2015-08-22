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
        Techno::create(['name' => 'javascript', 'img_link' => 'images/technos/javascript.png']);
        Techno::create(['name' => 'photoshop', 'img_link' => 'images/technos/photoshop.png']);
        Techno::create(['name' => 'illustrator', 'img_link' => 'images/technos/illustrator.png']);
        Techno::create(['name' => 'aftereffect', 'img_link' => 'images/technos/aftereffect.png']);
        Techno::create(['name' => 'adobepremiere', 'img_link' => 'images/technos/adobepremiere.png']);
        Techno::create(['name' => 'flash', 'img_link' => 'images/technos/flash.png']);
        Techno::create(['name' => 'github', 'img_link' => 'images/technos/github.png']);
        Techno::create(['name' => 'buffer', 'img_link' => 'images/technos/buffer.png']);
        Techno::create(['name' => 'wordpress', 'img_link' => 'images/technos/wordpress.png']);
        Techno::create(['name' => 'joomla', 'img_link' => 'images/technos/joomla.jpg']);
        Techno::create(['name' => 'mamp', 'img_link' => 'images/technos/mamp.png']);
        Techno::create(['name' => 'wamp', 'img_link' => 'images/technos/wamp.png']);
        Techno::create(['name' => 'xampp', 'img_link' => 'images/technos/xampp.png']);
        Techno::create(['name' => 'ajax', 'img_link' => 'images/technos/ajax.png']);
        Techno::create(['name' => 'angularjs', 'img_link' => 'images/technos/angularjs.png']);
        Techno::create(['name' => 'mysql', 'img_link' => 'images/technos/mysql.jpg']);
        Techno::create(['name' => 'autre', 'img_link' => 'images/technos/autre.png']);
        Techno::create(['name' => 'drupal', 'img_link' => 'images/technos/drupal.png']);
        Techno::create(['name' => 'jquery', 'img_link' => 'images/technos/jquery.png']);
        Techno::create(['name' => 'phpmyadmin', 'img_link' => 'images/technos/phpmyadmin.png']);
        Techno::create(['name' => 'prestashop', 'img_link' => 'images/technos/prestashop.png']);
        Techno::create(['name' => 'youtube', 'img_link' => 'images/technos/youtube.png']);

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
