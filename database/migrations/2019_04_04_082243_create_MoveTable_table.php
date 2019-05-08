<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoveTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MoveTable', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('name');
            $table->String('damage');
            $table->String('accuracy');
            $table->text('description');
            $table->String('pp');
            $table->String('effect');
            $table->String('tm');
            $table->String('hm');
            $table->String('game');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MoveTable');
    }
}
