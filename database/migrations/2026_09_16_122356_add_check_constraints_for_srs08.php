<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

/**
 * SRS-08 — Constraint Database
 *
 * Menambahkan CHECK constraints di level database untuk memastikan
 * data yang tidak valid ditolak langsung oleh MySQL, sebelum
 * sampai ke layer aplikasi.
 *
 * Constraint yang ditambahkan:
 *
 * [lists]
 *   - chk_lists_nama_not_empty     : nama_list tidak boleh string kosong ('')
 *
 * [tasks]
 *   - chk_tasks_judul_not_empty    : judul tidak boleh string kosong ('')
 *   - chk_tasks_deadline_valid     : deadline jika diisi harus >= tahun 2000
 *
 * Catatan: ENUM dan FK constraint sudah dihandle di migration awal.
 * Constraint berikut merupakan lapisan tambahan (SRS-08).
 */
return new class extends Migration
{
    public function up(): void
    {
        // ── CHECK: lists.nama_list tidak boleh string kosong ──────────────
        DB::statement("
            ALTER TABLE `lists`
            ADD CONSTRAINT chk_lists_nama_not_empty
            CHECK (CHAR_LENGTH(TRIM(nama_list)) > 0)
        ");

        // ── CHECK: tasks.judul tidak boleh string kosong ──────────────────
        DB::statement("
            ALTER TABLE `tasks`
            ADD CONSTRAINT chk_tasks_judul_not_empty
            CHECK (CHAR_LENGTH(TRIM(judul)) > 0)
        ");

        // ── CHECK: tasks.deadline harus tanggal yang masuk akal ───────────
        // (>= '2000-01-01' untuk tolak nilai timestamp yang tidak valid)
        DB::statement("
            ALTER TABLE `tasks`
            ADD CONSTRAINT chk_tasks_deadline_valid
            CHECK (deadline IS NULL OR deadline >= '2000-01-01 00:00:00')
        ");
    }

    public function down(): void
    {
        // Hapus CHECK constraints saat rollback
        DB::statement("ALTER TABLE `lists`  DROP CONSTRAINT chk_lists_nama_not_empty");
        DB::statement("ALTER TABLE `tasks`  DROP CONSTRAINT chk_tasks_judul_not_empty");
        DB::statement("ALTER TABLE `tasks`  DROP CONSTRAINT chk_tasks_deadline_valid");
    }
};
