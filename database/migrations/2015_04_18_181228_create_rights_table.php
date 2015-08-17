<?php
use App\Right;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRightsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });


        /*membre inscrit droit de vision*/
        Right::create(['name' => 'Membre']);

        /*membre inscrit droit de vision + proposer articles*/
        Right::create(['name' => 'Auteur']);

        /*modos relecteurs accès tous les articles, choisis par Admin*/
        Right::create(['name' => 'Modérateur']);

        /*super admin tous les droits*/
        Right::create(['name' => 'Admin']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rights');
    }

}
