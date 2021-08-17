<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJetCabinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jet_cabins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('jet_id')->index('idx_jet_id')->default(0);
            $table->unsignedInteger('image_id')->index('idx_image_id')->default(0);
            $table->string('title')->nullable();
            $table->text('summary')->nullable();
            $table->integer('seats')->default(0);
            $table->integer('suitcase')->default(0);
            $table->integer('carry_on')->default(0);
            $table->string('manufacturer')->nullable();
            $table->string('height')->nullable();
            $table->string('speed')->nullable();



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
        Schema::dropIfExists('jet_cabins');
    }
}
