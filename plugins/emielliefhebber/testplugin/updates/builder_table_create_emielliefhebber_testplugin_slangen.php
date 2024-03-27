<?php namespace EmielLiefhebber\Testplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateEmielliefhebberTestpluginSlangen extends Migration
{
    public function up()
    {
        Schema::create('emielliefhebber_testplugin_slangen', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('slangen');
            $table->text('description');
            $table->text('bijzonderheden')->nullable();
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('emielliefhebber_testplugin_slangen');
    }
}
