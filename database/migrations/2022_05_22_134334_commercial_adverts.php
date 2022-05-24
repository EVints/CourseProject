<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommercialAdverts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commercial', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id');
            $table->text('user_phone', 16);
            $table->dateTime('time_from');
            $table->text('time_to', 64);
            $table->text('start_address', 64);
            $table->text('end_address', 64);
            $table->text('trip_description', 1024)->nullable();
            $table->smallinteger('participants_count');
            $table->float('total_distance');
            $table->json('track');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commercial');
    }
}
