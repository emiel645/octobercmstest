<?php namespace EmielLiefhebber\Testplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmielliefhebberTestpluginSlangen2 extends Migration
{
    public function up()
    {
        Schema::table('emielliefhebber_testplugin_slangen', function($table)
        {
            $table->integer('slug');
            $table->string('bijzonderheden', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('emielliefhebber_testplugin_slangen', function($table)
        {
            $table->dropColumn('slug');
            $table->string('bijzonderheden', 255)->nullable(false)->change();
        });
    }
}
