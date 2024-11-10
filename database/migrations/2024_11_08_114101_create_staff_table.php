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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('image')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('department')->nullable();
            $table->integer('salary')->default(600);
            $table->string('address')->nullable();
            $table->enum('payment', ['pending', 'complete'])->default('pending');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
