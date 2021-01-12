<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_agent', function (Blueprint $table) {
            $table->increments('id');
            // doctor
            $table->unsignedInteger('agent_id');
            $table->foreign('agent_id')->references('id')->on('agents')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // specialty
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('type_agent');
    }
}
