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
| SRS-01 | Manajemen akun & autentikasi — admin menambah/menghapus akun pengguna, pengguna login/logout ke sistem. | - Halaman admin menampilkan daftar seluruh pengguna<br>- Admin dapat menambahkan akun baru (nama, email, role) dan menghapus akun yang ada<br>- Form login memvalidasi kredensial dan menampilkan error jika gagal<br>- Setelah login berhasil, pengguna diarahkan ke dashboard; tombol logout mengakhiri sesi |
| SRS-02 | Manajemen daftar tugas (list/projek) — membuat, mengedit, menghapus daftar, serta menambah/menghapus anggota daftar. | - Pengguna dapat membuat daftar baru dengan nama minimal 1 karakter<br>- Pemilik dapat mengedit nama atau menghapus daftar beserta seluruh tugas di dalamnya<br>- Pemilik dapat menambahkan pengguna lain ke daftar (tanpa duplikasi) dan menghapus anggota dari daftar |
| SRS-03 | Manajemen tugas — membuat, mengedit, menghapus tugas, menetapkan prioritas & tenggat waktu, serta menandai tugas selesai. | - Form tugas berisi judul, deskripsi, prioritas (rendah/sedang/tinggi), dan tenggat waktu<br>- Validasi mencegah judul tugas kosong; prioritas ditampilkan dengan indikator visual<br>- Setiap tugas memiliki tombol/checkbox "Selesai" yang mengubah status secara visual<br>- Pengguna dapat mengedit atau menghapus tugas |
| SRS-04 | Kolaborasi tim — anggota daftar dapat mengerjakan tugas bersama dan tugas dapat ditugaskan (assign) ke anggota tertentu. | - Semua anggota daftar dapat melihat dan mengerjakan tugas dalam daftar yang sama<br>- Tugas dapat di-assign ke salah satu anggota daftar<br>- Nama anggota yang di-assign ditampilkan pada tugas terkait<br>- Hanya anggota daftar yang dapat mengakses/mengubah tugas di dalamnya |
| SRS-05 | Monitoring & progress — pemilik daftar memantau progress penyelesaian tugas dalam daftarnya. | - Setiap daftar menampilkan progress bar/persentase tugas selesai vs total tugas<br>- Progress ter-update otomatis saat status tugas berubah<br>- Dashboard menampilkan ringkasan progress dari seluruh daftar milik pemilik<br>- Tidak ada reload halaman saat progress berubah |
