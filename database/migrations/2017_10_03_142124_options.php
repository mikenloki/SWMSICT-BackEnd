<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Options extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
      Schema::create('options', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('userID');
          $table->boolean('stocks')->nullable();
          $table->boolean('bonds')->nullable();
          $table->boolean('mutualFunds')->nullable();
          $table->boolean('exTradeFunds')->nullable();
          $table->boolean('indexFunds')->nullable();
          $table->boolean('retirement')->nullable();
          $table->integer('minInvestment');
          $table->integer('riskLevel');
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
        Schema::dropIfExists('options');
    }
}
