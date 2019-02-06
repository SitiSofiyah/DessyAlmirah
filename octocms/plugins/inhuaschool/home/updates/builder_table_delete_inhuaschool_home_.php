<?php namespace Inhuaschool\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteInhuaschoolHome extends Migration
{
    public function up()
    {
        Schema::dropIfExists('inhuaschool_home_');
    }
    
    public function down()
    {
        Schema::create('inhuaschool_home_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('logo', 191);
            $table->string('welcome', 191);
            $table->text('layanan');
            $table->text('info');
            $table->text('pesan');
        });
    }
}
