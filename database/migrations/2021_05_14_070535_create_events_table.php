<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_category');
            $table->unsignedBigInteger('id_writer');
            $table->string('title');
            $table->text('content');
            $table->string('img_link');
            $table->string('link');
            $table->timestamps();

            //$table->foreign('id_category')->references('id')->on('category');
            //$table->foreign('id_writer')->references('id')->on('writer');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
