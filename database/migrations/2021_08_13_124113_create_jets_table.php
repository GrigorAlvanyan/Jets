<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('summary')->nullable();
            $table->unsignedInteger('image_id')->default(0);
            $table->integer('seats');
            $table->text('speed')->nullable();
            $table->text('range')->nullable();
            $table->longText('body')->nullable();
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
        Schema::dropIfExists('jets');
    }
}
