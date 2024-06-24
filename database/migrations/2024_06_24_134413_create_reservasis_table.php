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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('rooms');
            $table->integer('adults');
            $table->integer('children');
            $table->string('email');
            $table->string('phone');
            $table->string('status')->default('pending'); 
            $table->string('payment_method')->nullable();
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservasis', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('payment_method');
            $table->dropColumn('total_amount');
        });
    }
};
