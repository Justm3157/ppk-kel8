<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('list_id')->constrained('lists')->onDelete('cascade');
            $table->string('judul');
            $table->enum('prioritas', ['rendah', 'sedang', 'tinggi'])->default('sedang');
            $table->dateTime('deadline')->nullable();
            $table->enum('status', ['belum_selesai', 'selesai'])->default('belum_selesai');
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();

            $table->index(['list_id', 'status'], 'idx_tasks_list_status');
            $table->index(['list_id', 'deadline'], 'idx_tasks_list_deadline');
            $table->index('deadline', 'idx_tasks_deadline');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};