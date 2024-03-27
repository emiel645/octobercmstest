<?php namespace EmielLiefhebber\Testplugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateEmielliefhebberTestpluginSlangen3 extends Migration
{
    public function up()
    {
        Schema::table('emielliefhebber_testplugin_slangen', function($table)
        {
            $table->text('slangen')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->text('slug')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('emielliefhebber_testplugin_slangen', function($table)
        {
            $table->integer('slangen')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
            $table->integer('slug')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
