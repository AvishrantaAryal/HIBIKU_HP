<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('altimage');
            $table->MediumText('introduction');
            $table->MediumText('introduction_japanese');
            $table->MediumText('ceo_introduction');
            $table->MediumText('ceo_introduction_japanese');
            $table->MediumText('outline');
            $table->MediumText('outline_japanese');
            $table->MediumText('location');
            $table->MediumText('location_japanese');

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
        Schema::dropIfExists('profiles');
    }
}
