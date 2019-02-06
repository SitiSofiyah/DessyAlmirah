<?php namespace Inhuaschool\Home\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateInhuaschoolHome extends Migration
{
    public function up()
    {
        Schema::table('inhuaschool_home_', function($table)
        {
            $table->increments('id')->change();
            $table->string('logo')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('welcome')->change();
        });
    }
    
    public function down()
    {
        Schema::table('inhuaschool_home_', function($table)
        {
            $table->integer('id')->change();
            $table->text('logo')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('welcome', 191)->change();
        });
    }
}
