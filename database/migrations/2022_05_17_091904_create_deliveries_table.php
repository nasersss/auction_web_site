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
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('receiver_name');
            $table->string('receiver_identity_type');
            $table->string('receiver_identity_number');
            $table->string('receiver_phone');
            $table->unsignedBigInteger("city_id");
            $table->foreign('city_id')->references('id')->on('cities');
            $table->unsignedBigInteger("auction_id");
            $table->foreign('auction_id')->references('id')->on('auctions');
            $table->unsignedBigInteger("payer_id");
            $table->foreign('payer_id')->references('id')->on('users');
            $table->smallInteger("is_active")->default(1);
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
        Schema::dropIfExists('deliveries');
    }
};
