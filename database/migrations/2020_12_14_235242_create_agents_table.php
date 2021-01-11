<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('user_id')->unsigned();
            $table->string('name', 128);
            $table->string('slug', 128)->unique();
            $table->mediumText('excerpt')->nullable();
            $table->text('biography');

            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->string('state')->nullable();
            $table->string('zip');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->string('phone')->nullable();
            $table->string('domain');
            $table->string('email');
            $table->string('coordinate')->nullable();

            $table->string('file', 128)->nullable();
            $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('DRAFT')->nullable();


            //relation
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
