<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('banner_image')->nullable();
            $table->longText('about_us')->nullable();
            $table->string('about_us_image')->nullable();
            $table->string('address')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();


            //new changes
            $table->string('about_us_banner')->nullable();
            $table->string('product_banner')->nullable();
            $table->string('service_banner')->nullable();
            $table->string('client_banner')->nullable();
            $table->string('contact_us_banner')->nullable();

            $table->timestamps();

            $table->string('testing')->nullable();
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
