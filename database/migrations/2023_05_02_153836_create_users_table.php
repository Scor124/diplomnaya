<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('FIO','50')->nullable('false');
            $table->dateTime('DateOfBirth')->nullable('false');
            $table->string('Phone','12')->nullable('false');
            $table->string('email','30')->nullable('false');
            $table->string('password','255')->nullable('false');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
