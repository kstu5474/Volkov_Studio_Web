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
        Schema::create('member_list', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('email',100)->unique();
            $table->string('userid',90)->unique();
            $table->string('password',60);
            $table->string('birth');
            $table->string('grade', 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_list');
    }
};
