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
        Schema::create('_allservices', function (Blueprint $table) {
            $table->id();
            $table->string("service");
            $table->string("headtopimgonefile")->nullable();
            $table->string("headtopimgtwofile")->nullable();
            $table->string("headtopimgthreefile")->nullable();
            $table->string("headtoptitle")->nullable();
            $table->string("headtopparagraph")->nullable();
            $table->string("headtoplist1")->nullable();
            $table->string("headtoplist2")->nullable();
            $table->string("headtoplist3")->nullable();
            $table->string("servicecardonefile")->nullable();
            $table->string("servicecardonetitle")->nullable();
            $table->string("servicecardonecontent")->nullable();
            $table->string("servicecardtwofile")->nullable();
            $table->string("servicecardtwotitle")->nullable();
            $table->string("servicecardtwocontent")->nullable();
            $table->string("servicecardthreefile")->nullable();
            $table->string("servicecardthreetitle")->nullable();
            $table->string("servicecardthreecontent")->nullable();
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
        Schema::dropIfExists('_allservices');
    }
};
