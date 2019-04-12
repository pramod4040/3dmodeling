<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bannerimages', function (Blueprint $table) {
            $table->increments('id');

            $table->string('about_us_banner')->nullable();
            $table->string('product_banner')->nullable();
            $table->string('service_banner')->nullable();
            $table->string('client_banner')->nullable();
            $table->string('contact_us_banner')->nullable();

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
        Schema::dropIfExists('bannerimages');
    }
}
