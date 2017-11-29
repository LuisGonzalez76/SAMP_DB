<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpTable extends Migration
{

    public function up()
    {
        Schema::create('help', function(Blueprint $table) {
            $table->increments('id');
            // Schema declaration
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('help');
    }
}
