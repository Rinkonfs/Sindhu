<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewdealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newdeals', function (Blueprint $table) {
            $table->id();
            $table->String('imagelink1');
            $table->String('title');
            $table->String('subtitle');
            $table->String('productname');
            $table->double('price');
            $table->double('discountprice');
            $table->String('imagelink2');
            $table->String('imagelink3');
            $table->String('imagelink4');
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
        Schema::dropIfExists('newdeals');
    }
}
