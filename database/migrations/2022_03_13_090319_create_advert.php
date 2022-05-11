<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvert extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advert', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('user_name', 64);
            $table->dateTime('time_from');
            $table->dateTime('time_to');
            $table->text('tel', 16);
            $table->text('trip_description', 1024);
            $table->json('track');                          //!!!!!!!!!
            $table->text('trip_type', 16)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advert');
    }
}
