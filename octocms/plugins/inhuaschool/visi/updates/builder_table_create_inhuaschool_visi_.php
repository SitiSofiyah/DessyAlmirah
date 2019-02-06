<?php namespace Inhuaschool\Visi\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateInhuaschoolVisi extends Migration
{
    public function up()
    {
        Schema::create('inhuaschool_visi_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('visi');
            $table->text('misi');
            $table->text('sasaran');
            $table->text('kompetensi');
            $table->text('operational');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('inhuaschool_visi_');
    }
}
