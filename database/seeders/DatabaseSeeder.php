<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\TaskList;
use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. DATA TABEL USERS (id, nama, email, password, role)
        $admin = User::create([
            'nama' => 'Admin JARA',
            'email' => 'admin@jara.test',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $andi = User::create([
            'nama' => 'Andi Pratama',
            'email' => 'andi@jara.test',
            'password' => Hash::make('password'),
            'role' => 'pengguna',
        ]);

        $siti = User::create([
            'nama' => 'Siti Nurhaliza',
            'email' => 'siti@jara.test',
            'password' => Hash::make('password'),
            'role' => 'pengguna',
        ]);

        $rizky = User::create([
            'nama' => 'Rizky Ramadhan',
            'email' => 'rizky@jara.test',
            'password' => Hash::make('password'),
            'role' => 'pengguna',
        ]);

        // 2. DATA TABEL LISTS (id, nama_list, owner_id, created_at)
        $list1 = TaskList::create([
            'nama_list' => 'Pengembangan Backend & Auth',
            'owner_id' => $andi->id,
        ]);

        $list2 = TaskList::create([
            'nama_list' => 'Desain UI/UX & Frontend',
            'owner_id' => $andi->id,
        ]);

        $list3 = TaskList::create([
            'nama_list' => 'Persiapan Rilis & Demo',
            'owner_id' => $siti->id,
        ]);

        // 3. DATA TABEL LIST_MEMBERS (id, list_id, user_id) — many-to-many
        // List 1 punya anggota: Siti & Rizky
        $list1->members()->attach([$siti->id, $rizky->id]);

        // List 2 punya anggota: Siti
        $list2->members()->attach([$siti->id]);

        // List 3 punya anggota: Andi & Rizky
        $list3->members()->attach([$andi->id, $rizky->id]);

        // 4. DATA TABEL TASKS (id, list_id, judul, prioritas, deadline, status, assigned_to)
        // Tugas di List 1
        Task::create([
            'list_id' => $list1->id,
            'judul' => 'Setup Struktur Database & Migration',
            'prioritas' => 'tinggi',
            'deadline' => Carbon::now()->addDays(2),
            'status' => 'selesai',
            'assigned_to' => $siti->id,
        ]);

        Task::create([
            'list_id' => $list1->id,
            'judul' => 'Buat Controller Auth (Login & Logout)',
            'prioritas' => 'tinggi',
            'deadline' => Carbon::now()->addDays(3),
            'status' => 'selesai',
            'assigned_to' => $rizky->id,
        ]);

        Task::create([
            'list_id' => $list1->id,
            'judul' => 'Implementasi Middleware Role Admin/Pengguna',
            'prioritas' => 'sedang',
            'deadline' => Carbon::now()->addDays(5),
            'status' => 'belum_selesai',
            'assigned_to' => $andi->id,
        ]);

        Task::create([
            'list_id' => $list1->id,
            'judul' => 'Validasi Form & Error Handling Auth',
            'prioritas' => 'rendah',
            'deadline' => Carbon::now()->addDays(6),
            'status' => 'belum_selesai',
            'assigned_to' => $rizky->id,
        ]);

        // Tugas di List 2
        Task::create([
            'list_id' => $list2->id,
            'judul' => 'Buat Wireframe & Desain Komponen',
            'prioritas' => 'sedang',
            'deadline' => Carbon::now()->addDays(1),
            'status' => 'selesai',
            'assigned_to' => $siti->id,
        ]);

        Task::create([
            'list_id' => $list2->id,
            'judul' => 'Slicing Halaman Dashboard & Progress Bar',
            'prioritas' => 'tinggi',
            'deadline' => Carbon::now()->addDays(4),
            'status' => 'belum_selesai',
            'assigned_to' => $siti->id,
        ]);

        // Tugas di List 3
        Task::create([
            'list_id' => $list3->id,
            'judul' => 'Uji Skenario Acceptance Criteria SRS',
            'prioritas' => 'tinggi',
            'deadline' => Carbon::now()->addDays(7),
            'status' => 'belum_selesai',
            'assigned_to' => $andi->id,
        ]);

        Task::create([
            'list_id' => $list3->id,
            'judul' => 'Dokumentasi Presentasi Tim Kelompok 8',
            'prioritas' => 'sedang',
            'deadline' => Carbon::now()->addDays(8),
            'status' => 'belum_selesai',
            'assigned_to' => $rizky->id,
        ]);
    }
}