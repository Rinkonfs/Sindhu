<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->String('coupon_name')->nullable();
            $table->String('coupon_code')->unique();
            $table->String('end_date')->nullable();
            $table->Integer('discount_percentage')->nullable();
            $table->boolean('active_status')->nullable();
            $table->json('product_category')->nullable();
            $table->double('amount_exceed')->nullable();
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
        Schema::dropIfExists('coupons');
    }
}
