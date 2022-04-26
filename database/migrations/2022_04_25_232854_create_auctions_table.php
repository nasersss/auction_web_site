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
            $table->boolean('is_active');
            $table->string('color');
            $table->string('seller');
            $table->integer('odometer');
            $table->string('damage');
            $table->string('vehicle_type');
            $table->string('brand');
            $table->string('name');
            $table->string('model');
            $table->string('stat');
            $table->string('ger_type');
            $table->string('engine_type');
            $table->string('notes');
            $table->string('stare_price');
            $table->string('min_bid');
            $table->string('curren_price');
            $table->string('')
            // اسم السارة
            // الموديل
            // الحالة
            // نوع القير
            // نوع المحرك
            // نوع الوقود
            // الملاحضات
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
