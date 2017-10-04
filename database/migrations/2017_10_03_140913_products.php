<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('companyID');
          $table->string('name');
          $table->longText('summary');
          $table->integer('riskLevel');
          $table->integer('fees');
          $table->string('performance');
          $table->integer('minInvestment');
          $table->boolean('physicalLocationAvailable');
          $table->boolean('specialOffersAvailable');
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
        Schema::dropIfExists('products');
    }
}
