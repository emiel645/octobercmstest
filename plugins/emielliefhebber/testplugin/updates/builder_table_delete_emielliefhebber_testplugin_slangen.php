<?php namespace EmielLiefhebber\Testplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteEmielliefhebberTestpluginSlangen extends Migration
{
    public function up()
    {
        Schema::dropIfExists('emielliefhebber_testplugin_slangen');
    }
    
    public function down()
    {
        Schema::create('emielliefhebber_testplugin_slangen', function($table)
        {
            $table->increments('id')->unsigned();
            $table->text('slangen');
            $table->string('description', 255);
            $table->string('bijzonderheden', 255)->nullable();
            $table->text('slug');
        });
    }
}
