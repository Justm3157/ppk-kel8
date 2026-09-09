# Jara — Collaborative Task Management System (UI Prototype)

Kumpulan UI screen hasil desain via Google Stitch AI untuk aplikasi *Jara*, sebuah sistem manajemen tugas kolaboratif. Setiap screen adalah file HTML standalone (Tailwind CSS via CDN) lengkap dengan preview gambar.

## Struktur

| Folder | Deskripsi | Referensi |
|---|---|---|
| `screens/00-landing` | Landing page produk | - |
| `screens/01-authentication-login` | Halaman sign in | - |
| `screens/02-admin-panel-manajemen-akun` | Panel admin — manajemen akun | SRS-01 |
| `screens/03-ruang-kerja-proyek-papan-tugas` | Ruang kerja proyek / papan tugas (kanban) | SRS-02, SRS-03 |
| `screens/04-daftar-tugas-anggota-tim` | Daftar tugas per anggota tim | SRS-02.4 |
| `screens/05-modal-buat-tugas-proyek-baru` | Modal buat tugas/proyek baru | FR-2.1, FR-3.1 |
| `screens/06-detail-form-tugas` | Form detail tugas | SRS-03.4 |
| `screens/07-monitoring-analisis-progres` | Monitoring & analisis progres | SRS-05 |
| `docs/design/DESIGN.md` | Dokumen sistem desain (design tokens, style guide) | - |

Setiap folder `screens/*` berisi:
- `index.html` — kode UI yang bisa langsung dibuka di browser
- `screen.png` — preview hasil render

## Menjalankan secara lokal

Tidak perlu build step — cukup buka `index.html` di browser, atau serve lewat static server:

```bash
npx serve screens/01-authentication-login
```

## GitHub Pages (opsional)

Karena setiap screen self-contained, repo ini bisa langsung di-deploy ke GitHub Pages dari branch `main` / folder `screens/`, sehingga tiap layar bisa diakses via URL sendiri, contoh:
`https://<username>.github.io/jara-task-management/screens/03-ruang-kerja-proyek-papan-tugas/`
