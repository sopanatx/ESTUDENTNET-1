<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStdHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('std_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('std_id');
            $table->string('detail');
            $table->integer('point_fund');
            $table->string('location');
            $table->string('save_man');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('std_history');
    }
}
