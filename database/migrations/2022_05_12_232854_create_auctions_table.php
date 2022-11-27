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
            $table->smallInteger('is_active')->default(1);
            $table->string('color');
            $table->unsignedBigInteger('seller_id');
            $table->unsignedBigInteger('category_id');
            $table->double('odometer');//المسافة المقطوعة
            $table->string('damage');// الاضرار
            $table->unsignedBigInteger('vehicle_type_id'); // نوع المركبة
            $table->string('name');// مثل هيلوكس
            $table->string('model');// مثل السنة 2005 | 2020
            $table->string('state');//new or old
            $table->string('ger_type');
            $table->string('engine_type');
            $table->string('notes');
            $table->string('stare_price');
            $table->string('min_bid');
            $table->string('curren_price')->nullable();
            // $table->string('address');
            $table->unsignedBigInteger("city_id");
            $table->timestamp('date_of_end_auction');
            $table->integer('number_of_participate');
            $table->string('fuel');// نوع الوقود
            $table->foreign('seller_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('vehicle_type_id')->references('id')->on('vehicle_types');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->smallInteger('is_ready_to_sell')->default(1); 
            $table->smallInteger('is_received')->default(-1);
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
