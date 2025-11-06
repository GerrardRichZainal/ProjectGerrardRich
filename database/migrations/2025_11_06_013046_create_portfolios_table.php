<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            // relasi (simpan sebagai id, tanpa foreign key constraint
            // supaya urutan migration tidak menyebabkan error)
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('job_id')->nullable();

            $table->string('owner')->nullable(); // bisa nama pemilik atau user_id nanti
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
