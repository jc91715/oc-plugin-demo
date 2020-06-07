<?php namespace Jc91715\Demo\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePopsTable extends Migration
{
    public function up()
    {
        Schema::create('jc91715_demo_pops', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jc91715_demo_pops');
    }
}
