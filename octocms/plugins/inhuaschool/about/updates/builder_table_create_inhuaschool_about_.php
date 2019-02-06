<?php namespace Inhuaschool\About\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInhuaschoolAbout extends Migration
{
    public function up()
    {
        Schema::create('inhuaschool_about_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('arti');
            $table->text('istilah');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inhuaschool_about_');
    }
}
