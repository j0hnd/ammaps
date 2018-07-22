<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMaps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('maps', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('doctor_id');
        //     $table->string('licensed_state');
        //     $table->string('color');
        //     $table->timestamps();
        // });

        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doctor_name');
            $table->timestamps();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state_name');
            $table->timestamps();

        });

        Schema::create('doctor_licensed_states', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doctor_id');
            $table->integer('state_id');
            $table->string('color');
            $table->timestamps();

            $table->index(['doctor_id', 'state_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maps');
    }
}
