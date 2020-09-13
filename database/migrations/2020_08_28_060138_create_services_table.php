<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('title');
            $table->String('slug');
            $table->string('title_japanese');
            $table->String('image')->nullable();
            $table->String('altimage')->altimage();
            $table->LongText('summary');
            $table->LongText('summary_japanese');
            $table->LongText('description');
            $table->LongText('description_japanese');
            $table->String('seo_title');
            $table->MediumText('seo_keywords');
            $table->LongText('seo_description');
            $table->String('seo_title_japanese');
            $table->MediumText('seo_keywords_japanese');
            $table->LongText('seo_description_japanese');


            $table->string('status');
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
        Schema::dropIfExists('services');
    }
}
