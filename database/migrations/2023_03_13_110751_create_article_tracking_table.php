<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_tracking', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('ack_date')->nullable();
            $table->string('scanned')->nullable();
            $table->string('sForMod')->nullable();
            $table->string('rAfterMod')->nullable();
            $table->string('sForEval')->nullable();
            $table->string('rAfterEval')->nullable();
            $table->string('sForRev')->nullable();
            $table->string('rAfterRev')->nullable();
            $table->string('pubDate')->nullable();
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
        Schema::dropIfExists('article_tracking');
    }
}
