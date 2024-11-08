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
        Schema::create('student_primary_infos', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('image')->nullable();
            $table->string('kh_fname');
            $table->string('kh_lname');
            $table->string('en_fname');
            $table->string('en_lname');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->enum('degree_type', ['bachelor', 'associate'])->default('bachelor');
            $table->date('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('subject')->default('Information Technology');
            $table->integer('annual')->default(600);
            $table->string('village')->nullable();
            $table->string('commune')->nullable();
            $table->string('district')->nullable();
            $table->string('province')->nullable();
            $table->enum('grade', ['passed', 'failed'])->default('passed');
            $table->string('graded_year')->nullable();
            $table->string('graded_level')->nullable();
            $table->string('class')->nullable();
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
        Schema::dropIfExists('student_primary_infos');
    }
};
