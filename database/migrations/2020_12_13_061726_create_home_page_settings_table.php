<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desktopsliders', function (Blueprint $table) {
            $table->increments('id');
            $table->String('filename');
            $table->String('name');
            $table->timestamps();
        });
        Schema::create('mobilesliders', function (Blueprint $table) {
            $table->increments('id');
            $table->String('filename');
            $table->String('name');
            $table->timestamps();
        });
        Schema::create('newarrivals', function (Blueprint $table) {
            $table->increments('id');
            $table->String('filename');
            $table->String('name');
            $table->String('category');
            $table->timestamps();
        });
        Schema::create('featuredproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->String('filename');
            $table->String('name');
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
        Schema::dropIfExists('desktopsliders');
        Schema::dropIfExists('mobilesliders');
        Schema::dropIfExists('newarrivals');
        Schema::dropIfExists('featuredproducts');
    }
}
