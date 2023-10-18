<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('password')->nullable();

            $table->string('phone', 100)->nullable();
            $table->bigInteger('type_id')->unsigned()->nullable();
            $table->bigInteger('market_type')->unsigned()->nullable();

            $table->date('start_time')->nullable();
            $table->date('end_time')->nullable();
            $table->string('card_number')->nullable();
            $table->string('card_holder')->nullable();
            $table->string('commerical_number')->nullable();
            $table->string('api_domain')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->integer('subscription_value')->nullable();
            $table->integer('order_value')->nullable();
            $table->date('valid_inti')->nullable();
            $table->string('cvv')->nullable();

            $table->string('img_profile')->nullable();
            $table->string('img_back')->nullable();

            $table->foreign('type_id')->references('id')->on('types')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('market_type')->references('id')->on('markets_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
