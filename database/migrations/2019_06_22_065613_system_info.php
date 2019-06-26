<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SystemInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systeminfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('website_url');
            $table->string('receipt_name');
            $table->string('address');
            $table->integer('phone');
            $table->string('short_about');
            $table->string('long_about');
            $table->integer('websited_started_date');
            $table->string('status');
            $table->string('website');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('systeminfo');
    }
}
