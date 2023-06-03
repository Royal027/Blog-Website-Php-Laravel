<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_image');
            $table->string('home_slider_image');
            $table->string('adwarse_image')->nullable();
            $table->string('footer_text')->nullable();
            $table->string('footer_description')->nullable();
            $table->boolean('most_popular_status')->default(0);
            $table->boolean('resend_article_status')->default(0);
            $table->boolean('search_status')->default(0);
            $table->string('home_page_slider_text_1')->nullable();
            $table->string('home_page_slider_text_2')->nullable();
            $table->string('home_page_slider_text_3')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
