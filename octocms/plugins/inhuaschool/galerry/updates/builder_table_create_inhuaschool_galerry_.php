<?php namespace Inhuaschool\Galerry\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInhuaschoolGalerry extends Migration
{
    public function up()
    {
        Schema::create('inhuaschool_galerry_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('judul');
            $table->string('gambar');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inhuaschool_galerry_');
    }
}
