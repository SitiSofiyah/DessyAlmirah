<?php namespace Inhuaschool\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInhuaschoolHome extends Migration
{
    public function up()
    {
        Schema::create('inhuaschool_home_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->text('logo');
            $table->string('welcome');
            $table->text('layanan');
            $table->text('info');
            $table->text('pesan');
            $table->primary(['id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inhuaschool_home_');
    }
}
