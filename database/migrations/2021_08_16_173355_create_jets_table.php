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
            $table->unsignedInteger('image_id')->index('idx_image_id')->default(0);
            $table->string('title')->nullable();
            $table->string('slug',191)->unique();
            $table->text('summary')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('speed')->nullable();
            $table->string('height')->nullable();
            $table->string('range')->nullable();
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
