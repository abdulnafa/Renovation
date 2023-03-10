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
        Schema::create('_footer_detail', function (Blueprint $table) {
            $table->id();
            $table->string("facebook")->nullable();
            $table->string("twitter")->nullable();
            $table->string("google")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("github")->nullable();
            $table->string("address")->nullable();
            $table->string("mail")->nullable();
            $table->string("number")->nullable();
            $table->string("ptcl")->nullable();
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
        Schema::dropIfExists('_footer_detail');
    }
};
