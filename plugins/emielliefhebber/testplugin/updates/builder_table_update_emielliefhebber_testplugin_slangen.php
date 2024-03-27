<?php namespace EmielLiefhebber\Testplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmielliefhebberTestpluginSlangen extends Migration
{
    public function up()
    {
        Schema::rename('emielliefhebber_testplugin_', 'emielliefhebber_testplugin_slangen');
    }
    
    public function down()
    {
        Schema::rename('emielliefhebber_testplugin_slangen', 'emielliefhebber_testplugin_');
    }
}
