<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsJetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations_jets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('destination_id')->default(0);
            $table->unsignedInteger('jet_id')->default(0);
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->integer('seats')->default(0);
            $table->string('estimated_price')->nullable();
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
        Schema::dropIfExists('destinations_jets');
    }
}
