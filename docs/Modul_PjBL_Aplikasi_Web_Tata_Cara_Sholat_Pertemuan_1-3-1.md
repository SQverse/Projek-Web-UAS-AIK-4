**MODUL PEMBELAJARAN BERBASIS PROYEK (PROJECT-BASED LEARNING) PERTEMUAN 1 – 3** 

## **PENGEMBANGAN APLIKASI WEB** 

**“Tuntunan Tata Cara Sholat Sesuai Sunnah Rasulullah ﷺ”** _**Sumber Gerakan & Bacaan: Himpunan Putusan Tarjih (HPT) Muhammadiyah**_ 

|Program Studi Manajemen Bisnis Syariah · Fakultas Agama Islam|Program Studi Manajemen Bisnis Syariah · Fakultas Agama Islam|
|---|---|
||**Universitas Muhammadiyah Pontianak**|
|**Mata Kuliah**|Pengembangan Aplikasi Web / Praktikum Pemrograman Web (Dakwah<br>Bil Hal) Bidang Sistem Informasi.|
|**Beban / Semester**|2 SKS · Semester Genap|
|**Model Pembelajaran**|Project-Based Learning (PjBL) — kelompok|
|**Bentuk Proyek**|Aplikasi web responsif (bebas: framework apa pun atau PHP Native)|
|**Dosen Pengampu**|Dedy Susanto, S.Pd.I., M.M. (NIDN. 1128048303)|
|**Bobot Penilaian**|Proyek ini menjadi dasar penilaian UAS (100%)|



## **A. Deskripsi dan Tujuan Modul** 

Modul ini memandu mahasiswa membangun sebuah **aplikasi web edukatif** yang menyajikan tuntunan tata cara sholat sesuai sunnah Rasulullah ﷺ dengan rujukan gerakan dan bacaan dari **Himpunan Putusan Tarjih (HPT) Muhammadiyah** . Aplikasi dirancang untuk dua segmen pengguna **dewasa** dan **anak-anak** dan dikerjakan secara berkelompok mengikuti tahapan rekayasa perangkat lunak selama tiga pertemuan. 

Pendekatan PjBL menuntut setiap kelompok menghasilkan **produk nyata yang daring (online)** , terdokumentasi di repositori GitHub, dan dilaporkan secara terstruktur. Penilaian UAS diambil dari kualitas produk, kontribusi individual, dan laporan kelompok. 

## **Tujuan Pembelajaran** 

1. Menerapkan siklus pengembangan aplikasi web: analisis kebutuhan, perancangan, implementasi, pengujian, dan deployment. 

2. Membangun antarmuka web yang responsif pada perangkat mobile, tablet, dan desktop. 

3. Merancang basis data dan logika back-end untuk mengelola konten gerakan dan bacaan sholat. 

4. Mengintegrasikan media (gambar, teks Arab-Latin-terjemahan, audio MP3, dan video) secara sistematis. 

5. Bekerja dalam tim dengan pembagian peran yang jelas serta mengelola kode bersama melalui Git/GitHub. 

6. Menanamkan nilai keislaman melalui penyajian ibadah yang sahih, terverifikasi sumbernya dari HPT Muhammadiyah. 

## **Keterkaitan Capaian (OBE)** 

Proyek ini mengukur ketercapaian Sub-CPMK yang menekankan penerapan, keterampilan teknis terukur, kerja mandiri-disiplin, serta tanggung jawab profesional. Pemetaan ringkas: 

|**Aspek Capaian**|**Wujud dalam Proyek**|
|---|---|
|Pengetahuan & penerapan teknis|Rancangan FE/BE/DB dan fitur interaktif yang berjalan.|
|Keterampilan umum (mandiri,<br>bermutu, terukur)|Kontribusi individual terlacak pada riwayat commit GitHub.|
|Komunikasi efektif|Laporan terstruktur dan presentasi produk.|
|Sikap & tanggung jawab keislaman|Akurasi konten ibadah dan kejujuran pencantuman sumber HPT.|



## **B. Deskripsi Produk yang Dibangun** 

Setiap kelompok membangun satu aplikasi web dengan karakteristik berikut: 

- Dua mode pengguna: **Dewasa** (penyajian lengkap dan formal) dan **Anak-anak** (bahasa 

   - sederhana, visual ramah anak, terjemahan ringkas). 

- Menampilkan gerakan sholat secara terstruktur dan sistematis, lengkap dengan gambar tiap gerakan. 

- Menyajikan bacaan sholat dalam empat lapis: teks Arab, transliterasi Latin, terjemahan, dan audio MP3. 

- Menyediakan opsi menonton video gerakan/bacaan sebagai alternatif media. 

- Navigasi interaktif: pengguna dapat mengeklik gerakan mana pun, berpindah Next/Previous antar-gerakan dan bacaan, serta memutar otomatis (autoplay) secara berurutan. 

- Setiap halaman utama wajib menampilkan identitas: **Nama Kelompok, Program Studi, Mata Kuliah, dan Nama Dosen.** 

- Responsif penuh pada mobile, tablet, dan desktop. 

- Memiliki tiga lapisan arsitektur: Front-end, Back-end, dan Database; serta wajib dideploy daring (online). 

## **C. Spesifikasi Teknis Wajib** 

## **C.1 Kebutuhan Fungsional** 

|**Kode**|**Fitur**|**Deskripsi Singkat**|
|---|---|---|
|F-01|Daftar gerakan sholat|Daftar gerakan urut (qiyam → salam) yang dapat diklik.|
|F-02|Detail gerakan|Gambar gerakan + bacaan (Arab, Latin, terjemahan).|
|F-03|Audio bacaan|Pemutar MP3 untuk setiap bacaan.|
|F-04|Opsi video|Tombol untuk menampilkan video gerakan/bacaan.|
|F-05|Navigasi Next/Previous|Berpindah maju/mundur antar-gerakan dan bacaan.|
|F-06|Autoplay berurutan|Memutar gerakan & audio otomatis sesuai urutan.|
|F-07|Mode Dewasa & Anak|Pemilihan segmen yang mengubah penyajian konten.|
|F-08|Identitas pada header|Nama Kelompok, Prodi, Mata Kuliah, Dosen di tiap halaman<br>utama.|
|F-09|Manajemen konten (back-<br>end)|Data gerakan/bacaan diambil dari basis data, bukan ditulis<br>statis di HTML.|



## **C.2 Kebutuhan Non-Fungsional** 

- **Responsif:** tata letak adaptif (mobile-first) untuk layar ≤480px, tablet ≤1024px, dan desktop >1024px. 

- **Daring:** aplikasi dapat diakses publik melalui URL (hosting gratis diperbolehkan, mis. shared hosting PHP, Railway, Render, InfinityFree, atau sejenisnya). 

- **Kinerja:** halaman utama termuat ≤5 detik pada koneksi normal; aset gambar dioptimasi. 

- **Aksesibilitas:** kontras warna memadai, tombol berukuran ramah sentuh, teks Arab terbaca jelas. 

- **Keterlacakan kode:** seluruh kode dikelola di GitHub dengan commit dari setiap anggota. 

## **C.3 Kebebasan & Batasan Teknologi** 

Pilihan teknologi dibebaskan, asalkan tiga lapisan arsitektur terpenuhi. Contoh kombinasi yang diperbolehkan: 

|**Lapisan**|**Opsi A (PHP Native)**|**Opsi B (Framework)**|
|---|---|---|
|Front-end|HTML5, CSS3, JavaScript,<br>Bootstrap/Tailwind|React / Vue / Laravel Blade + Tailwind|
|Back-end|PHP Native (PDO/mysqli)|Laravel / CodeIgniter / Node.js (Express)|
|Database|MySQL / MariaDB|MySQL / PostgreSQL / Firebase|
|Media|Folder aset + tag <audio>/<video>|Storage layanan + komponen player|



**Catatan:** apa pun teknologinya, data konten **wajib** disimpan di basis data dan diambil oleh backend tidak boleh seluruhnya ditulis langsung (hardcode) di HTML. 

## **D. Ketentuan Kelompok dan Pembagian Peran** 

- Setiap **kelompok terdiri atas 4–5 mahasiswa.** 

- Setiap anggota memegang peran berbeda dengan tugas yang dapat dinilai secara individual. 

- Seluruh anggota tetap wajib berkontribusi pada kode (terbukti dari riwayat commit) dan laporan. 

## **Peta Peran (5 Anggota)** 

|**Peran**|**Tanggung Jawab Utama**|**Luaran Individual**|
|---|---|---|
|**1. Ketua Tim / Project**<br>**Manager**|Koordinasi, jadwal, integrasi antar-<br>modul, mengelola repo & branch,<br>memimpin presentasi.|Papan tugas (kanban),<br>notulen, riwayat merge.|
|**2. Front-end Developer**|Tata letak responsif, komponen navigasi<br>Next/Prev, autoplay, mode<br>Dewasa/Anak.|Halaman & komponen UI<br>responsif.|
|**3. Back-end Developer**|Logika server, endpoint/route,<br>pengambilan data dari DB, integrasi<br>audio/video.|Modul back-end &<br>API/route.|
|**4. Database & Content**<br>**Engineer**|Perancangan skema DB, pengisian data<br>gerakan & bacaan dari HPT, manajemen<br>aset media.|Skema DB + seed data<br>terverifikasi.|
|**5. QA, Dokumentasi &**<br>**Deployment**|Pengujian lintas perangkat, deployment<br>online, penyusunan laporan, README &<br>demo.|Laporan uji, situs daring,<br>dokumentasi.|



**Untuk kelompok 4 anggota:** gabungkan peran QA/Dokumentasi/Deployment ke dalam Ketua Tim, atau bagi tanggung jawabnya ke Front-end dan Back-end. Pembagian wajib tetap eksplisit dan tertulis di laporan. 

## **E. Struktur Konten Sholat (Acuan)** 

Urutan gerakan berikut menjadi kerangka data aplikasi. **Teks Arab, transliterasi Latin, terjemahan, dan audio wajib disalin dan diverifikasi dari sumber resmi HPT Muhammadiyah (Kitab Shalat)** — bukan dikarang. Cantumkan sumber tiap bacaan di laporan. 

## **E.1 Urutan Gerakan & Bacaan Terkait** 

|**No**|**Gerakan**|**Bacaan Terkait**|
|---|---|---|
|1|Berdiri tegak menghadap kiblat (qiyam) —<br>disertai niat|—|
|2|Takbiratul ihram (mengangkat kedua tangan)|Takbir: “Allāhu Akbar”|
|3|Bersedekap (tangan kanan di atas kiri)|Doa Iftitah|
|4|Berdiri membaca|Surah Al-Fātihah, lalu surah/ayat Al-Qur’an|
|5|Rukuk (membungkuk, thuma’ninah)|Tasbih rukuk|
|6|I’tidal (bangkit dari rukuk)|Doa i’tidal (sami’allāhu… rabbanā lakal-ḥamd)|
|7|Sujud pertama (thuma’ninah)|Tasbih sujud|
|8|Duduk di antara dua sujud (iftirāsy)|Doa duduk antara dua sujud|
|9|Sujud kedua|Tasbih sujud|
|10|Berdiri ke rakaat berikutnya|—|
|11|Duduk tasyahud awal (iftirāsy)|Tasyahud awal|
|12|Duduk tasyahud akhir (tawarruk)|Tasyahud akhir + shalawat|
|13|Salam (menoleh ke kanan dan ke kiri)|Salam: “Assalāmu’alaikum wa raḥmatullāh”|



**Mode Anak-anak:** sajikan gerakan yang sama dengan ilustrasi ramah anak, terjemahan ringkas, dan penekanan visual; mode Dewasa menyajikan teks penuh dan keterangan sumber. 

## **F. Rancangan Basis Data (Acuan)** 

Skema minimum berikut menjadi acuan; kelompok boleh mengembangkannya. 

## **Tabel inti** 

|**Tabel**|**Kolom Penting**|**Keterangan**|
|---|---|---|
|kelompok|id, nama_kelompok, prodi, mata_kuliah, dosen|Identitas yang tampil di header<br>tiap halaman.|
|kategori|id, nama (dewasa|anak)|Segmen pengguna.|
|gerakan|id, id_kategori, nama, urutan, deskripsi,<br>gambar_url, video_url|Satu baris per gerakan sholat.|
|bacaan|id, id_gerakan, urutan, teks_arab, teks_latin,<br>terjemahan, audio_url, sumber|Bacaan yang menempel pada<br>gerakan.|



## **Relasi** 

- kategori (1) — (N) gerakan 

- gerakan (1) — (N) bacaan 

- kelompok berdiri sendiri sebagai sumber identitas header (boleh satu baris). 

## **Contoh DDL ringkas (MySQL):** 

```
CREATE TABLE gerakan (
```

```
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_kategori INT NOT NULL,
  nama VARCHAR(100), urutan SMALLINT,
  deskripsi TEXT, gambar_url VARCHAR(255), video_url VARCHAR(255),
  FOREIGN KEY (id_kategori) REFERENCES kategori(id)
);
CREATE TABLE bacaan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_gerakan INT NOT NULL, urutan SMALLINT,
  teks_arab TEXT, teks_latin TEXT, terjemahan TEXT,
  audio_url VARCHAR(255), sumber VARCHAR(150),
  FOREIGN KEY (id_gerakan) REFERENCES gerakan(id)
);
```

## **G. Tahapan Pengerjaan Mingguan (Pertemuan 1–3)** 

## **Pertemuan 1. Inisiasi, Analisis Kebutuhan & Perancangan** 

**Fokus:** Membentuk tim, memahami masalah, dan merancang aplikasi sebelum menulis kode. 

## **Aktivitas di Kelas & Mandiri** 

1. Membentuk kelompok (4–5 orang) dan menetapkan peran tiap anggota. 

2. Menganalisis kebutuhan: mendata fitur wajib (F-01 s.d. F-09) dan dua mode pengguna. 

3. Mengumpulkan & memverifikasi sumber konten gerakan dan bacaan dari HPT Muhammadiyah. 

4. Merancang wireframe/sketsa antarmuka (halaman beranda, daftar gerakan, detail gerakan) untuk mobile & desktop. 

5. Merancang skema basis data (ERD) dan struktur navigasi. 

6. Membuat repositori GitHub kelompok + README awal, dan mengundang seluruh anggota sebagai kolaborator. 

## **Luaran (Deliverable) Akhir Pertemuan** 

- Dokumen perencanaan (analisis kebutuhan + pembagian tugas). 

- Wireframe minimal 3 halaman (mobile & desktop). 

- ERD/skema database. 

- Repositori GitHub aktif berisi README dan struktur folder awal. 

## **Checklist Penyelesaian** 

- ☐  Peran tiap anggota tertulis jelas. 

- ☐  Sumber HPT untuk setiap bacaan tercatat. 

- ☐  ERD memuat tabel kategori, gerakan, bacaan, kelompok. 

- ☐  Tautan repo GitHub siap dibagikan. 

## **Pertemuan 2. Implementasi Front-end & Pengisian Konten** 

**Fokus:** Mewujudkan antarmuka responsif dan mengisi data konten ke basis data. 

## **Aktivitas di Kelas & Mandiri** 

1. Membangun layout responsif (mobile-first) untuk beranda, daftar gerakan, dan detail gerakan. 

2. Menampilkan identitas (Nama Kelompok, Prodi, Mata Kuliah, Dosen) pada header setiap halaman utama. 

3. Membuat tabel basis data dan mengisi seed data gerakan + bacaan (Arab, Latin, terjemahan) dari HPT. 

4. Menyiapkan aset media: gambar gerakan, file MP3 bacaan, dan tautan video. 

5. Mengimplementasikan tampilan empat lapis bacaan (Arab/Latin/terjemahan/audio) pada halaman detail. 

6. Commit berkala oleh masing-masing anggota sesuai perannya. 

## **Luaran (Deliverable) Akhir Pertemuan** 

- Front-end responsif berjalan (mobile/tablet/desktop). 

- Basis data terisi data gerakan & bacaan kedua mode (dewasa & anak). 

- Halaman detail menampilkan gambar + bacaan + pemutar audio. 

- Header identitas tampil konsisten di seluruh halaman. 

## **Checklist Penyelesaian** 

- ☐  Responsif teruji minimal di 2 ukuran layar. 

- ☐  Audio MP3 dapat diputar. 

- ☐  Data diambil dari DB (bukan hardcode). 

- ☐  Commit hadir dari setiap anggota. 

## **Pertemuan 3.  Back-end, Integrasi, Pengujian & Deployment** 

**Fokus:** Menyatukan interaktivitas, mengunggah aplikasi daring, dan menyerahkan hasil. 

## **Aktivitas di Kelas & Mandiri** 

1. Mengimplementasikan navigasi Next/Previous antar-gerakan dan bacaan. 

2. Menambahkan fitur klik gerakan mana pun dan autoplay berurutan (gerakan + audio). 

3. Mengintegrasikan opsi video sebagai alternatif media. 

4. Menyelesaikan logika back-end (route/endpoint pengambilan data per kategori & gerakan). 

5. Pengujian lintas perangkat (mobile, tablet, desktop) dan perbaikan bug. 

6. Deployment aplikasi ke hosting daring; menempelkan URL pada README GitHub. 

7. Menyusun laporan akhir kelompok dan menyerahkan tautan ke Google Classroom. 

## **Luaran (Deliverable) Akhir Pertemuan** 

- Aplikasi daring (online) dengan URL publik yang berfungsi. 

- Seluruh fitur wajib (F-01 s.d. F-09) berjalan. 

- Repositori GitHub final + README berisi URL live, anggota, dan cara menjalankan. 

- Laporan terstruktur kelompok (PDF) + presentasi. 

- Tautan URL & repo dikirim ke Google Classroom. 

## **Checklist Penyelesaian** 

- ☐  Next/Prev & autoplay berfungsi. 

- ☐  Klik gerakan mana pun bekerja. 

- ☐  URL daring dapat diakses penguji. 

- ☐  Repo & laporan terkirim ke Classroom. 

## **H. Format Laporan Terstruktur Kelompok** 

Laporan disusun progresif: tiap pertemuan menambah bagian, dan pada Pertemuan 3 menjadi laporan akhir yang utuh. Sampul mencantumkan Nama Kelompok, anggota + NIM + peran, Prodi, Mata Kuliah, dan Dosen. 

## **Kerangka Laporan Akhir** 

1. HALAMAN SAMPUL — judul aplikasi, identitas kelompok & anggota (NIM, peran), prodi, mata kuliah, dosen. 

2. BAB I PENDAHULUAN — latar belakang, tujuan, manfaat, dan ruang lingkup aplikasi. 

3. BAB II ANALISIS & PERANCANGAN — kebutuhan fungsional/non-fungsional, wireframe, 

   - ERD, struktur navigasi. 

4. BAB III IMPLEMENTASI — penjelasan Front-end, Back-end, Database; teknologi yang 

   - dipakai; tangkapan layar fitur. 

5. BAB IV PENGUJIAN & DEPLOYMENT — hasil uji lintas perangkat, tautan URL daring, tautan repositori GitHub. 

6. BAB V SUMBER KONTEN — daftar bacaan/gerakan beserta rujukan HPT Muhammadiyah. 

7. BAB VI PENUTUP — kesimpulan, kendala, dan rencana pengembangan. 

8. LAMPIRAN — tabel pembagian tugas, log kontribusi (ringkasan commit per anggota), dan dokumentasi tambahan. 

## **Laporan Bertahap per Pertemuan** 

|**Pertemuan**|**Bagian Laporan yang Diserahkan**|
|---|---|
|1|Sampul + BAB I + BAB II (analisis, wireframe, ERD) + tautan repo.|
|2|Tambahan BAB III (progres FE & DB) + tangkapan layar + log kontribusi.|
|3|Laporan akhir lengkap (BAB I–VI + lampiran) + URL daring + repo final.|



## **Template Tabel Pembagian Tugas (Lampiran)** 

|**No**|**Nama**|**NIM**|**Peran**|**Rincian Kontribusi**|
|---|---|---|---|---|
|1|||Ketua/PM||
|2|||Front-end||
|3|||Back-end||
|4|||Database & Konten||
|5|||QA & Deployment||



## **I. Ketentuan Pengumpulan** 

1. Aplikasi wajib daring (online) dengan URL publik yang berfungsi saat dinilai. 

2. Seluruh kode berada di repositori GitHub kelompok; README memuat: nama anggota & peran, URL live, ringkasan fitur, dan cara menjalankan. 

3. Tautan URL aplikasi dan tautan repositori GitHub dikirim ke Google Classroom kelas sesuai tenggat tiap pertemuan. 

4. Laporan akhir (PDF) diunggah ke Google Classroom paling lambat pada Pertemuan 3. 

5. Keterlambatan dan ketidaksesuaian format mengurangi nilai sesuai rubrik. 

## **J. Rubrik Penilaian (Dasar Nilai UAS)** 

**Nilai UAS = (Nilai Kelompok × 70%) + (Nilai Individual × 30%).** Komponen kelompok menilai produk & laporan; komponen individual menilai kontribusi nyata tiap anggota berdasarkan riwayat commit dan peran. 

## **J.1 Komponen Kelompok (70%)** 

|**Aspek**|**Indikator**|**Bobot**|
|---|---|---|
|Kelengkapan fitur|Fitur F-01 s.d. F-09 berfungsi.|25%|
|Responsivitas & UI/UX|Tampil baik di mobile, tablet, desktop; navigasi jelas.|15%|
|Arsitektur FE/BE/DB|Pemisahan lapisan, data dari DB, kode rapi.|15%|
|Akurasi konten & sumber|Bacaan/gerakan sesuai HPT dan dicantumkan sumbernya.|10%|
|Deployment & laporan|Aplikasi daring berfungsi + laporan terstruktur lengkap.|5%|



## **J.2 Komponen Individual (30%)** 

|**Aspek**|**Indikator**|**Bobot**|
|---|---|---|
|Kontribusi kode/karya|Bukti commit & hasil sesuai peran.|15%|
|Penguasaan & presentasi|Mampu menjelaskan bagian yang dikerjakan.|10%|
|Kerja sama & tanggung<br>jawab|Disiplin, memenuhi tenggat, kolaboratif.|5%|



## **J.3 Skala Konversi (selaras RPS)** 

|**Huruf**|**A**|**B**|**C**|**D**|**E**|
|---|---|---|---|---|---|
|**Rentang**|> 81|61–80|41–60|21–40|0–20|



## **K. Referensi** 

1. PP Muhammadiyah. Himpunan Putusan Tarjih Muhammadiyah (Kitab Shalat). Yogyakarta: Suara Muhammadiyah. 

2. PP Muhammadiyah. Tuntunan Shalat sesuai Tarjih Muhammadiyah. 

3. MDN/Web Docs. Dokumentasi HTML, CSS, JavaScript responsif. developer.mozilla.org. 

4. Dokumentasi resmi framework/teknologi yang dipilih (Laravel, React, Bootstrap, Tailwind, dsb). 

5. Git & GitHub Docs — kolaborasi dan manajemen repositori. 

Pontianak, 19 Juni 2026 Dosen Pengampu, 

**Dedy Susanto, S.Pd.I., M.M.** NIDN. 1128048303 

