<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active')->default(1);
            $table->string('color');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('category_id');
            $table->double('odometer');//المسافة المقطوعة
            $table->string('damage');// الاضرار
            $table->string('vehicle_type');
            $table->string('name');// مثل هيلوكس 
            $table->string('model');// مثل السنة 2005 | 2020
            $table->string('stat');//new or old
            $table->string('ger_type');
            $table->string('engine_type');
            $table->string('notes');
            $table->string('stare_price');
            $table->string('min_bid');
            $table->string('curren_price');
            $table->integer('number_of_participate');
            $table->string('fuel');// نوع الوقود
            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('auctions');
    }
};
