<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('destination_id')->index('idx_destination_id')->default(0);
            $table->unsignedInteger('image_id')->default(0);
            $table->string('title')->nullable();
            $table->text('summary')->nullable();
            $table->string('slug',191)->unique();
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
        Schema::dropIfExists('destination_blocks');
    }
}
