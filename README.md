# Artikel_XSS

# Eksperimen Keamanan Web: Cross-Site Scripting (XSS)

Repository ini dibuat untuk memenuhi tugas **UTS Pemrograman Web**. Proyek ini mendemonstrasikan bagaimana celah keamanan *Cross-Site Scripting* (XSS) bekerja pada aplikasi web sederhana dan bagaimana cara memitigasinya secara efektif.

## Deskripsi Proyek
Proyek ini berisi sebuah simulasi aplikasi "Buku Tamu" minimalis berbasis PHP. Melalui proyek ini, dilakukan eksperimen untuk:
1. Menunjukkan kerentanan aplikasi terhadap serangan injeksi skrip (XSS) pada form input.
2. Menganalisis dampak eksekusi skrip berbahaya langsung pada browser pengguna.
3. Mengimplementasikan teknik sanitasi input menggunakan `htmlspecialchars()` untuk menutup celah keamanan tersebut.

## Cara Menjalankan Eksperimen
1. Pastikan Anda telah menginstal **XAMPP** atau web server lokal lainnya.
2. *Clone* repository ini atau unduh file yang tersedia.
3. Pindahkan folder proyek ke direktori `htdocs` (contoh: `C:\xampp\htdocs\eksperimen-xss`).
4. Jalankan modul **Apache** pada XAMPP Control Panel.
5. Buka browser dan akses alamat: `http://localhost/eksperimen-xss`.

## Dokumentasi Eksperimen

### 1. Kondisi Normal
Pada tahap awal, sistem menerima input teks biasa dan menampilkannya kembali ke layar tanpa masalah keamanan.
> <img width="577" height="232" alt="image" src="https://github.com/user-attachments/assets/55b17b25-bfcb-4787-bec9-0e6ee1b76ed2" />


### 2. Simulasi Serangan XSS
Eksperimen dilakukan dengan menyuntikkan *payload* `<script>alert('...');</script>`. Karena sistem belum memiliki filter, browser mengeksekusi kode tersebut dan memunculkan jendela peringatan (*alert*).
> <img width="975" height="195" alt="image" src="https://github.com/user-attachments/assets/dd6deb1f-4456-434a-81f3-45c7fad82f19" />


### 3. Implementasi Keamanan (Mitigasi)
Celah keamanan ditutup dengan menerapkan fungsi sanitasi data pada sisi server. Hasilnya, skrip berbahaya tidak lagi dieksekusi melainkan hanya dianggap sebagai teks biasa.
> <img width="701" height="219" alt="image" src="https://github.com/user-attachments/assets/8d562b4f-3294-4411-b056-a07ad5389fe4" />


## 🛠️ Teknologi yang Digunakan
- **PHP**: Sebagai pemroses data *back-end*.
- **HTML/CSS**: Untuk membangun antarmuka pengguna yang minimalis.
- **XAMPP**: Sebagai lingkungan server lokal (*Localhost*).

---
**Catatan:** Proyek ini dikembangkan murni untuk tujuan edukasi dan pemenuhan tugas akademik mata kuliah Pemrograman Web.
