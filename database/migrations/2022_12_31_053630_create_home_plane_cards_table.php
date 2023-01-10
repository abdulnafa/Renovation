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
        Schema::create('home_plane_cards', function (Blueprint $table) {
            $table->id();
            $table->string("cardoneimg")->nullable();
            $table->string("cardonetitle")->nullable();
            $table->string("cardonecontent")->nullable();
            $table->string("cardtwoimg")->nullable();
            $table->string("cardtwotitle")->nullable();
            $table->string("cardtwocontent")->nullable();
            $table->string("cardthreeimg")->nullable();
            $table->string("cardthreetitle")->nullable();
            $table->string("cardthreecontent")->nullable();
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
        Schema::dropIfExists('home_plane_cards');
    }
};
