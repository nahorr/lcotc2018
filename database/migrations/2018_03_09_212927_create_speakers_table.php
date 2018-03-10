<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('email')->nullable();
            $table->string('picture')->nullable();
            $table->string('content_1')->nullable();
            $table->string('content_2')->nullable();
            $table->string('content_3')->nullable();
            $table->string('paper')->nullable();
            $table->boolean('is_keynote_speaker')->default(false);
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
        Schema::dropIfExists('speakers');
    }
}
