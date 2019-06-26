<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
               $table->bigIncrements('sub_category_id');
                $table->integer('category_id');
               $table->string('sub_category_name');
               $table->string('sub_category_type');
               $table->string('sub_category_short_name');
               $table->text('description');
               $table->timestamps();
               $table->integer('created_by');
               $table->integer('updated_by');   
               
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_category');
    }
}
