<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('folder_id')->unsigned()->nullable();
            $table->enum('type', ['a', 'v', 'd', 'i', 'o', 'f'])->nullable();
            $table->string('name')->nullable();
            $table->string('path')->nullable();
            $table->string('extension', 8)->nullable();
            $table->string('mimetype', 100)->nullable();
            $table->integer('width')->unsigned()->nullable();
            $table->integer('height')->unsigned()->nullable();
            $table->integer('filesize')->unsigned()->nullable();
            $table->integer('position')->unsigned()->default(0);
            $table->text('description')->nullable();
            $table->text('alt_attribute')->nullable();
            $table->timestamps();
//            $table->foreign('folder_id')->references('id')->on('files');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
