<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('slug', 191)->index('idx_slug')->nullable();
            $table->tinyInteger('show_on_home')
                ->index('idx_show_on_home')->default(0);
            $table->tinyInteger('is_top')->index('idx_is_top')->default(0);
            $table->text('summary')->nullable();
            $table->longText('body')->nullable();
            $table->unsignedInteger('image_id')->default(0);
            //...
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
        Schema::dropIfExists('destinations');
    }
}
