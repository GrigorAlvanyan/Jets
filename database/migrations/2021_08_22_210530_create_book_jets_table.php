<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookJetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_jets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->integer('passangers_count')->default(0);
            $table->integer('adults')->default(0);
            $table->integer('childrens')->default(0);
            $table->string('when')->nullable();
            $table->string('time')->nullable();
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
        Schema::dropIfExists('book_jets');
    }
}
