<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->string("slider1")->nullable();
            $table->string("slider1title1")->nullable();
            $table->string("slider1title2")->nullable();
            $table->string("slider2")->nullable();
            $table->string("slider2title1")->nullable();
            $table->string("slider2title2")->nullable();
            $table->string("slider3")->nullable();
            $table->string("slider3title1")->nullable();
            $table->string("slider3title2")->nullable();
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
        Schema::dropIfExists('home_dashboard_crud');
    }
};
