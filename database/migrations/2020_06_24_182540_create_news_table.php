<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->text("text");
            $table->timestamps();
            $table->integer("content_id");
            $table->integer("media_id");

            $table->foreign('content_id')->references('id')->on('content')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('media_id')->references('id')->on('media')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
