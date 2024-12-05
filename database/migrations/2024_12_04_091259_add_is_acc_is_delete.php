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
        Schema::table('student_primary_infos', function (Blueprint $table) {
            //
            $table->enum('isAcc', ['true', 'false'])->default('false');
            $table->enum('isDelete', ['true', 'false'])->default('false');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_primary_infos', function (Blueprint $table) {
            //
        });
    }
};