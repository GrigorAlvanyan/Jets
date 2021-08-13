<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('slug')->index('idx_slug')->unique();
            $table->tinyInteger('show_on_home')->index('idx_show_on_home')->default(0);
            $table->text('summary')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('url')->nullable();
            $table->string('url_title')->nullable();
            $table->unsignedInteger('image_id')->default(0);
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
        Schema::dropIfExists('blocks');
    }
}
