<?php namespace Inhuaschool\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInhuaschoolHome2 extends Migration
{
    public function up()
    {
        Schema::create('inhuaschool_home_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('welcome');
            $table->text('layanan');
            $table->text('info');
            $table->text('pesan');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inhuaschool_home_');
    }
}
