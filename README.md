# JARA - App mengelola tugas tim

Aplikasi pengelolaan tugas berbasis website yang memungkinkan pengguna membuat, mengelompokkan, dan mengatur tugas ke dalam beberapa daftar (list/projek), menetapkan prioritas dan tenggat waktu, serta menandai tugas yang selesai. Pemilik daftar dapat menambahkan pengguna lain ke dalam daftar tugasnya agar dapat dikerjakan bersama serta memantau progress penyelesaian tugas dalam daftar tersebut. Admin bertanggung jawab menambah dan menghapus akun pengguna dalam sistem.

## User Story

Sebagai anggota tim, saya ingin membuat dan mengelompokkan tugas ke dalam beberapa daftar, sehingga pekerjaan saya lebih terorganisir dan mudah dipantau.

Sebagai anggota tim, saya ingin menetapkan prioritas dan tenggat waktu pada setiap tugas, sehingga saya dapat mengatur pekerjaan mana yang harus dikerjakan lebih dulu.

Sebagai anggota tim, saya ingin menandai tugas yang telah selesai, sehingga progress pekerjaan saya dan tim dapat terlihat jelas.

Sebagai pemilik daftar, saya ingin menambahkan anggota lain ke dalam daftar tugas saya, sehingga tugas dapat dikerjakan secara kolaboratif.

Sebagai pemilik daftar, saya ingin memantau progress penyelesaian tugas dalam daftar saya, sehingga saya dapat mengetahui sejauh mana pekerjaan tim telah selesai.

Sebagai admin, saya ingin menambah dan menghapus akun pengguna dalam sistem, sehingga akses ke aplikasi dapat dikelola dengan baik.

[Demo](https://doctor3131.github.io/jara/)

## Daftar SRS

| Kode | Deskripsi | Acceptance Criteria |
|------|-----------|---------------------|
| SRS-001 | Struktur halaman & scaffold dasar (HTML/CSS kosong, header, sidebar, main content, footer). | - `index.html` memiliki elemen `<header>`, `<nav>`/sidebar, `<main>`, `<footer>` secara semantik<br>- Layout dasar menerapkan flexbox/grid<br>- Placeholder untuk daftar tugas dan panel tugas tersedia<br>- Halaman bisa dibuka tanpa error console |
| SRS-002 | Autentikasi pengguna (login & logout). | - Form login menampilkan field email/username dan password<br>- Validasi kredensial dilakukan saat submit<br>- Pesan error muncul jika login gagal<br>- Setelah login berhasil, pengguna diarahkan ke dashboard<br>- Tombol logout mengakhiri sesi pengguna |
| SRS-003 | Admin dapat menambah dan menghapus akun pengguna. | - Halaman admin menampilkan daftar seluruh pengguna<br>- Admin dapat menambahkan akun baru melalui form (nama, email, role)<br>- Admin dapat menghapus akun pengguna dari daftar<br>- Perubahan akun langsung tercermin di daftar pengguna |
| SRS-004 | Membuat, mengedit, dan menghapus daftar tugas (list/projek). | - Pengguna dapat membuat daftar baru dengan nama minimal 1 karakter<br>- Daftar yang dibuat langsung muncul di sidebar/daftar projek<br>- Pengguna dapat mengedit nama daftar<br>- Pengguna dapat menghapus daftar beserta seluruh tugas di dalamnya |
| SRS-005 | Pemilik daftar dapat menambahkan anggota lain ke dalam daftar tugas. | - Pemilik dapat mencari dan memilih pengguna lain untuk ditambahkan<br>- Anggota yang ditambahkan langsung terlihat di daftar anggota list<br>- Anggota yang sudah ada tidak dapat ditambahkan dua kali<br>- Pemilik dapat menghapus anggota dari daftar |
| SRS-006 | Membuat tugas baru di dalam suatu daftar beserta prioritas dan tenggat waktu. | - Form tugas berisi judul, deskripsi, prioritas (rendah/sedang/tinggi), dan tenggat waktu<br>- Tugas yang dibuat langsung muncul di daftar terkait<br>- Validasi mencegah judul tugas kosong<br>- Prioritas ditampilkan dengan indikator visual (warna/label) |
| SRS-007 | Menandai tugas sebagai selesai serta mengedit/menghapus tugas. | - Setiap tugas memiliki checkbox atau tombol "Selesai"<br>- Status tugas berubah secara visual (misal: coret/abu-abu) saat ditandai selesai<br>- Pengguna dapat mengedit detail tugas (judul, prioritas, deadline)<br>- Pengguna dapat menghapus tugas dari daftar |
| SRS-008 | Pemilik daftar dapat memantau progress penyelesaian tugas dalam daftarnya. | - Setiap daftar menampilkan progress bar/persentase tugas selesai vs total tugas<br>- Progress ter-update otomatis saat status tugas berubah<br>- Dashboard menampilkan ringkasan progress dari seluruh daftar milik pemilik<br>- Tidak ada reload halaman saat progress berubah |
