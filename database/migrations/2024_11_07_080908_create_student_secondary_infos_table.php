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
        Schema::create('student_secondary_infos', function (Blueprint $table) {
            $table->integer('student_id')->nullable();
            $table->string("fa_kh_fname")->nullable();
            $table->string("fa_kh_lname")->nullable();
            $table->string("fa_en_fname")->nullable();
            $table->string("fa_en_lname")->nullable();
            $table->enum("fa_gender", ['male', 'female'])->nullable();
            $table->string("fa_phone")->nullable();
            $table->string("fa_home")->nullable();
            $table->string("fa_village")->nullable();
            $table->string("fa_commune")->nullable();
            $table->string("fa_district")->nullable();
            $table->string("fa_province")->nullable();
            $table->string("fa_description")->nullable();
            $table->string("mo_kh_fname")->nullable();
            $table->string("mo_kh_lname")->nullable();
            $table->string("mo_en_fname")->nullable();
            $table->string("mo_en_lname")->nullable();
            $table->enum("mo_gender", ['male', 'female'])->nullable();
            $table->string("mo_phone")->nullable();
            $table->string("mo_home")->nullable();
            $table->string("mo_village")->nullable();
            $table->string("mo_commune")->nullable();
            $table->string("mo_district")->nullable();
            $table->string("mo_province")->nullable();
            $table->string("mo_description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_secondary_infos');
    }
};
