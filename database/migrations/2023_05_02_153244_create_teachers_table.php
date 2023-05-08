<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('UserID')->unique();
            $table->date('works_from');
            $table->integer('AccessLevel')->nullable();
            /**
            $table->foreign('UserID')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
             */
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
