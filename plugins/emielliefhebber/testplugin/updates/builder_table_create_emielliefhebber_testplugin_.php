<?php namespace EmielLiefhebber\Testplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmielliefhebberTestplugin extends Migration
{
    public function up()
    {
        Schema::create('emielliefhebber_testplugin_', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('slangen');
            $table->string('description');
            $table->string('bijzonderheden');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emielliefhebber_testplugin_');
    }
}
