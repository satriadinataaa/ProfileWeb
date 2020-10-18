-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2020 pada 10.44
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webauladi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judulBerita` text NOT NULL,
  `slugJudul` text NOT NULL,
  `foto` text NOT NULL,
  `isiBerita` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judulBerita`, `slugJudul`, `foto`, `isiBerita`, `created_at`, `updated_at`) VALUES
(17, 'Perlombaan Virtual Mempertingati HUT RI Ke 75 di SDIT Auladi SU II Masih Berlangsung', 'perlombaan-virtual-mempertingati-hut-ri-ke-75-di-sdit-auladi-su-ii-masih-berlangsung', '6ecc2a471562f39751f880c2c9eff613.jpeg', '<p>Palembang (19/8) - Masih dalam rangka kemeriahan memperingati hari kemerdekaan Republik Indonesia yang ke 75 dan tahun baru Islam 1442 H, berbagai perlombaan masih terus digulirkan. Untuk perlombaan melukis dengan peserta level atas (kelas 4-6) dan mewarnai untuk level bawah (kelas 1-3), dibuka pada pukul 08.00 hingga ditutup pada pukul 10.00 wib pada hari ini (19/8). Gambar disediakan oleh pihak sekolah, dikirim secara online, dan dicetak oleh masing-masing peserta. Pengumpulan gambar dilakukan dengan cara mengunggahnya ke akun Instagram masing-masing dan menyertakan hashtag #SemarakHUTRI75, #SDITAuladiSU2Palembang, #LombaMewarnai dan #LombaMelukis.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sementara itu, sejak dibuka pada Minggu (16/8) kemarin, perlombaan menyanyikan lagu Hari Merdeka ciptaan H. Mutahar berupa file video telah ditutup kemarin, Selasa (18/8) pukul 16.00 wib. File video cover lagu tersebut diunggah ke akun Youtube masing-masing peserta untuk kemudian dikirimkan link / tautannya ke pihak panitia. Masih ada lomba deklamasi teks proklamasi yang juga dibuka sejak Minggu (16/8) kemarin dan masih dibuka kesempatan kepada peserta yang belum mengirim tautan video Yotube nya kepada panitia hingga Jumat (21/8) mendatang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Antusiasme peserta didik cukup tinggi dalam mengikuti perlombaan meskipun di tengah pandemi serta dilaksanakan secara virtual.&rdquo; ujar Yuli Setianingsih, Ketua Panitia Pelaksana Peringatan HUT RI ke 75 dan Tahun Baru Islam 1442 H SDIT Auladi SU II.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sementara itu, Ketua Yayasan Auladi, Ridhwan Yaqub, berpesan kepada para peserta didik semua &ldquo;Saat kita mulai merasakan indahnya kemerdekaan, saat itulah kita sering melupakan bahwa ada banyak cita-cita para pejuang yang belum tersampaikan. Tugas kita adalah mewujudkan dengan kesadaran bahwa kita adalah generasi penerus yang akan terus mengisi kemerdekaan Indonesia. Tetaplah menjadi satu, jangan sampai ingin terpecah. Gapai angan dan citamu di masa depan yang cerah, raih prestasi terbaikmu dan buatlah bangsa ini bangga. Selamat hari kemerdekaan, dirgahayu Indonesia&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Terus ikuti pemberitaan mengenai kegiatan ini di akun resmi milik sekolah, jangan sampai ketinggalan ya&hellip;</p>\r\n', '2020-09-04 00:49:58', '2020-09-04 00:49:58'),
(18, 'SIT Auladi Palembang Kurban 7 Sapi dan 10 Kambing', 'sit-auladi-palembang-kurban-7-sapi-dan-10-kambing', '6eed1d691fcd53e6771e08ab5f1d8fd5.jpg', '<p>Palembang (01/08). Lebaran Haji atau Idul Adha atau Idul Qurban yang merupakan napak tilas perjuangan Nabi Ibrahim bersama puteranya Nabi Ismail sedianya jatuh pada tanggal 10 Dzulhijjah di setiap tahun Hijriah. Adapun tahun ini jatuh bertepatan pada hari Jumat tanggal 31 Juli 2020 masehi. Untuk penyembelihan hewan kurban, selain dapat dilaksanakan pada hari Idul Adha yaitu 10 Dzulhijjah, juga dapat dilakukan di 3 hari tasyrik, yaitu 11, 12 dan 13 Dzulhijjah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Di tengah pandemi Covid-19, tidak menyurutkan semangat Keluarga Besar SIT Auladi Palembang untuk tetap merayakan Hari Raya Idul Adha dengan menyembelih sejumlah hewan kurban, yaitu 7 ekor sapi dan 10 ekor kambing. Kondisi global dimana semua orang harus menjalankan protokol Kesehatan dengan menggunakan masker dan menjaga jarak juga diterapkan dalam prosesi penyembelihan dan pemotongan daging hewan kurban di Auladi ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Seperti tahun-tahun sebelumnya, sejumlah hewan sembelihan tersebut berasal dari tabungan kurban para guru yang dikumpulkan setiap bulannya, tabungan kurban siswa yang dikumpulkan setiap hari senin, serta titipan hewan kurban dari orang tua / wali murid. Dalam sambutannya pada rapat persiapan penyembelihan hewan kurban beberapa hari yang lalu, Ketua Yayasan Auladi Palembang, Ridhwan Yaqub mengatakan &ldquo;Alhamdulillah tahun ini Keluarga Besar SIT Auladi mendapatkan titipan lebih banyak dari masyarakat khususnya para orang tua siswa dibanding tahun-tahun kemarin untuk melakukan penyembelihan hewan kurban. Hal ini berarti Keluarga Besar SIT Auladi dipercaya untuk dapat menebar daging hewan kurban dengan jangkauan yang lebih luas&rdquo;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Daging hewan kurban selain dibagikan kepada masyarakat sekitar, juga tidak lupa diberikan kepada para pemilik hewan kurban serta panitia yang terdiri dari semua guru dan staf SIT Auladi. Masih dalam rangka menjaga dan melaksanakan protocol Kesehatan covid-19, jika pada tahun-tahun sebelumnya pihak panitia mencetak sejumlah kupon yang kemudian dibagikan kepada masyarakat sekitar, tahun ini hal tersebut tidak dilakukan. Panitia akan membagikan secara langsung daging hewan kurban secara door to door. Hal tersebut dilakukan guna mencegah terjadinya kerumunan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pada akhirnya, atas semua apa yang telah kita lakukan adalah semata-mata mengharap ridha Allah swt, baik bagi yang berkurban, juga para panitia yang telah mengerahkan tenaga dan pikiran dalam kegiatan ini. Keikhlasan adalah cinta sejati, layaknya pengorbanan nabi Ibrahim yang begitu ikhlas kala mengorbankan anaknya tercinta. Berkat keikhlasan, ia mendapat balasan berkah dari Allah. Semoga di tahun ini kita bisa belajar untuk lebih ikhlas dan bisa memberikan kebahagiaan untuk orang lain, dan semoga Allah membalas semua kebaikan dengan berlipat ganda. Keluarga Besar SIT Auladi pun mengucapkan &ldquo;Selamat Hari Raya Idul Adha 1441 H&rdquo;.</p>\r\n', '2020-09-04 00:50:32', '2020-09-04 00:50:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `carousel` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carousel`
--

INSERT INTO `carousel` (`id`, `carousel`, `created_at`, `updated_at`) VALUES
(20, 'acca2336542d3c3b365f17365092e0ed.jpg', '2020-09-01 11:03:46', '2020-09-01 11:03:46'),
(22, '1cda84a79fa297dda04db94b409f9ff3.jpg', '2020-09-02 02:07:42', '2020-09-02 02:07:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nss` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_sekolah`
--

INSERT INTO `data_sekolah` (`id`, `foto`, `nss`, `alamat`, `no_telepon`, `email`, `id_sekolah`, `created_at`, `updated_at`) VALUES
(1, '287f7d96d06820d7e430d50b4e16bcb8.jpg', '32131231312321321', 'Jalan Jauh', '0381381931', 'Auladiweb@sch.id', 1, '2020-07-21 03:34:52', '2020-08-31 14:36:11'),
(2, 'ec7cc04e6745d089d2ea2a570a564bb6.jpg', '-', 'Alamat	Jl. KH. Azhari No 1 A Kel. Tangga Takat Kec. SU II ', '0711-510385', 'endangauladi@gmail.com', 2, '2020-07-21 03:35:53', '2020-09-01 04:33:53'),
(3, '3574f3e40240e20a840e87a3a7ba8792.jpg', '09021281621041', 'tes', '3432423', 'SDITSako1@Auladi.sch.id', 3, '2020-07-21 03:35:53', '2020-09-01 00:22:28'),
(4, '4a0326a0db2a8c7950da2a59dbd148f4.jpg', '1294-0123-8024', 'Jl. Payo Durian No. 94 ', '0711-810023', 'auladisako@gmail.com', 4, '2020-07-21 03:38:31', '2020-08-31 14:34:56'),
(5, 'a60af496601adbad745c15fce66f8be8.jpg', '102116030126', 'Jl. Inspektur Marzuki No 834 Pakjo, Kelurahan Siring Agung, Kecamatan Ilir Barat I, Palembang', '0711-420600', 'auladipakjosdit@gmail.com', 5, '2020-07-21 03:38:31', '2020-09-01 00:23:40'),
(6, '8404bcc4d007b0b9efa54f92a154872f.jpg', '6546546546556464', 'Jl Inspektur Marzuki', '23432423423432', 'TKITPakjo@Auladi.sch.id', 6, '2020-07-21 03:38:31', '2020-09-01 00:23:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sekolah`
--

CREATE TABLE `detail_sekolah` (
  `id` int(11) NOT NULL,
  `kurikulum` text NOT NULL,
  `pelajaran` text NOT NULL,
  `kegiatan` text NOT NULL,
  `ekstrakurikuler` text NOT NULL,
  `kompetensi` text NOT NULL,
  `pengajar` text NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_sekolah`
--

INSERT INTO `detail_sekolah` (`id`, `kurikulum`, `pelajaran`, `kegiatan`, `ekstrakurikuler`, `kompetensi`, `pengajar`, `id_sekolah`, `created_at`, `updated_at`) VALUES
(1, '<h3>Kurikulum yang digunakan oleh Yayasan Auladi Palembang adalah Kurikulum 2013 (K13) yang dilengkapi dengan kurikulum Auladi yang meliputi Kurikulum JSIT yang mengajarkan PAI, Hadist, BPI, dan Pramuka, lalu Metode Ummi yang mengajarkan tahsin dan tahfizh, serta LIM untuk pembentukan karakter.</h3>\r\n', '<p><a href=\"https://www.facebook.com/\">lihat disini</a>Kelas 1</p>\r\n\r\n<p><a href=\"http://localhost/Auladiweb/assets/pengumuman/b5857c2847532fec5b5d0f8c70d2535e.pdf\" target=\"_blank\">HALO</a></p>\r\n\r\n<h1>DOWNLOAD <a href=\"http://localhost/Auladiweb/assets/pengumuman/b5857c2847532fec5b5d0f8c70d2535e.pdf\">DISINI</a>&nbsp;&nbsp;</h1>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n\r\n			<p>tes</p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>tes 2</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>tes 1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:36px; width:100px\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/\">lihat disini</a>Kelas 1</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>tes</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>tes 2</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>tes 1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:36px; width:100px\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/\">lihat disini</a>Kelas 1</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>tes</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>tes 2</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>tes 1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:36px; width:100px\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/\">lihat disini</a>Kelas 1</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>tes</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>tes 2</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>tes 1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:36px; width:100px\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/\">lihat disini</a>Kelas 1</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>tes</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>tes 2</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>tes 1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:36px; width:100px\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/\">lihat disini</a>Kelas 1</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>tes</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>tes 2</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>tes 1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:36px; width:100px\" /></p>\r\n\r\n<p><a href=\"https://www.facebook.com/\">lihat disini</a>Kelas 1</p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>tes</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>tes 2</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>tes 1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:36px; width:100px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p><img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:109px; width:300px\" />&nbsp; &nbsp;<img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:109px; width:300px\" />&nbsp; &nbsp;<img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/12/banner-web-auladi.jpg\" style=\"height:109px; width:300px\" /><br />\r\n<br />\r\nlorem ipsum dolor set amer</p>\r\n', 'eskul ku', 'kompetensiku', '<p><img alt=\"\" src=\"https://i.ibb.co/hdb6HsV/Screenshot-6.png\" style=\"height:169px; width:300px\" /></p>\r\n\r\n<p>Bu Mulyani</p>\r\n', 1, '2020-07-28 00:01:49', '2020-09-26 08:27:48'),
(2, '<span style=\"font-size:12.0pt;line-height:107%;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\r\nminor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:\r\nAR-SA\">Kurikulum yang digunakan oleh Yayasan Auladi Palembang adalah Kurikulum\r\n2013 (K13) yang dilengkapi dengan kurikulum Auladi yang meliputi Kurikulum\r\nJSIT, lalu Metode Ummi&nbsp; serta LIM untuk\r\npembentukan karakter.</span>', '<ol><li>Mengaji metode ummi (termasuk hafalan surat, hadits, dan doa)</li><li>Sentra bermain kata</li><li>Sentra bermain angka</li><li>Sentra Seni dan Kreatifitas</li><li>Sentra Bermain Peran</li><li>Sentra Musik dan Olah Tubuh</li><li>Sentra Eksplorasi Bahan Alam</li></ol>', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Berenang</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Kunjungan Edukatif</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Market day</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">PHBI</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Outbound</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Manasik haji</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Home Visit</span></li><li><span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Qurban Day</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Tahfiz dan Tahsin\r\nQuran</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Dance club</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">English club</span></li><li><span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Karate&nbsp;</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Memperlihatkan\r\nsifat, watak, karakter kepemimpinan yang islami</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Dapat melakukan\r\nibadah harian (doa2, hadist, sholat) secara sederhana </span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Memiliki\r\nkemandirian, keberanian, dan percaya diri untuk persiapan memasuki jenjang\r\npendidikan yang lebih lanjut </span></li><li><span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Memiliki kesiapan\r\nemosional untuk berinteraksi dan bekerjasama dengan rekan seusia</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n', '<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:0in;margin-bottom:.0001pt;\r\nmso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:normal;\r\nmso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\"><span style=\"font-size: 12pt;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size: 12pt;\">Kepala\r\nsekolah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span><span lang=\"IN\" style=\"font-size: 12pt;\">Dra. Mariana</span><span style=\"font-size: 12pt;\"><o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:\r\nnormal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\"><span style=\"font-size: 12pt;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size: 12pt;\">Wak</span><span lang=\"IN\" style=\"font-size: 12pt;\">asek bidang kesiswaan</span><span style=\"font-size: 12pt;\">&nbsp;&nbsp;&nbsp; : </span><span lang=\"IN\" style=\"font-size: 12pt;\">Endang\r\nKrisnawati, S.Pd</span><span style=\"font-size: 12pt;\"><o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:\r\nnormal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\"><span style=\"font-size: 12pt;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"IN\" style=\"font-size: 12pt;\">Wakasek bidang\r\nkurikulum&nbsp;&nbsp;&nbsp; : </span><span style=\"font-size: 12pt;\">Betty Herawati, S</span><span lang=\"IN\" style=\"font-size: 12pt;\">.</span><span style=\"font-size: 12pt;\">Pd.I.<o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:\r\nnormal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\"><span style=\"font-size: 12pt;\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size: 12pt;\">A</span><span lang=\"IN\" style=\"font-size: 12pt;\">dministrasi</span><span style=\"font-size: 12pt;\">\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span><span lang=\"IN\" style=\"font-size: 12pt;\">Novita Sari, S.E.</span><span style=\"font-size: 12pt;\"><o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:\r\nnormal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\"><span style=\"font-size: 12pt;\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size: 12pt;\">Guru\r\nkelompok TK A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </span><span lang=\"IN\" style=\"font-size: 12pt;\">Nurul Toyibah</span><span style=\"font-size: 12pt;\"><o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><font face=\"times new roman\"><span style=\"font-size: 12pt;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </span><span lang=\"IN\" style=\"font-size: 12pt;\">Catur Mukti Wiani,\r\nS.Pd.I.<o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\nFitri Anggraini, S.E.<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:\r\nnormal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\"><span style=\"font-size: 12pt;\">6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size: 12pt;\">Guru\r\nkelompok TK B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><font face=\"times new roman\"><span lang=\"IN\" style=\"font-size: 12pt;\">Little Qomari 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n: 1. </span><span style=\"font-size: 12pt;\">Betty\r\nHerawati, S</span><span lang=\"IN\" style=\"font-size: 12pt;\">.</span><span style=\"font-size: 12pt;\">Pd.I.</span><span lang=\"IN\" style=\"font-size: 12pt;\"><o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><font face=\"times new roman\"><span lang=\"IN\" style=\"font-size: 12pt;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n2. Riza Fitriani, S.Sos</span><span lang=\"IN\" style=\"font-size: 12pt;\"> </span><span lang=\"IN\" style=\"font-size: 12pt;\"><o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">Little Qomari 2&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 1. Nurmalawaty,A.Md<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n2. Hasanah,A.Md<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">Little Qomari 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n: 1. Widia Sri Astuti,S.Pd.I<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n2. Yunizar, A.Md<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">Little Qomari 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n: 1. Endang Gustiniasih,A.Md<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n2. Qomariah, S.Pd<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><font face=\"times new roman\"><span lang=\"IN\" style=\"font-size: 12pt;\">Little Qomari 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n: 1. </span><span style=\"font-size: 12pt;\">Umi\r\nKalsum, S.Pd</span><span lang=\"IN\" style=\"font-size: 12pt;\"><o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n2. Dahria Husna,A.Md<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:0in;margin-bottom:.0001pt;\r\nmso-add-space:auto;text-align:justify;line-height:normal\"><span lang=\"IN\" style=\"font-size: 12pt;\"><font face=\"times new roman\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</font><font face=\"Times New Roman, serif\"><o:p></o:p></font></span></p>', 2, '2020-07-28 00:02:00', '2020-09-01 04:39:13'),
(3, 'a', 'a', 'a', 'a', 'a', 'a', 3, '2020-07-28 00:02:11', '2020-07-28 00:02:11'),
(4, 'Kurikulum yang digunakan oleh Yayasan Auladi Palembang\r\nadalah Kurikulum 2013 (K13) yang dilengkapi dengan kurikulum Auladi yang\r\nmeliputi Kurikulum JSIT, lalu Metode Ummi &nbsp;serta LIM untuk pembentukan karakter.', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Mengaji metode\r\nummi (termasuk hafalan surat, hadist, doa)</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Sentra Bermain\r\nKata</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Sentra Bermain\r\nAngka</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Sentara Seni dan Kreatifitas</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Sentra Bermain\r\nPeran</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Sentra Musik dan\r\nOlah Tubuh (MOT)</span></li><li><span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Sentra Ekspolarasi Bahan Alam</span></li></ol></p>', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Berenang</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Kunjungan Edukatif</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Market day</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">PHBI</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Outbound</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Manasik haji</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Home Visit</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Qurban Day</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Tahfiz dan Tahsin\r\nQuran</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Dance club</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">English club</span></li><li><span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Karate&nbsp;</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Memperlihatkan\r\nsifat, watak, karakter kepemimpinan yang islami</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Dapat melakukan\r\nibadah harian (doa2, hadist, sholat) secara sederhana </span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Memiliki\r\nkemandirian, keberanian, dan percaya diri untuk persiapan memasuki jenjang pendidikan\r\nyang lebih lanjut </span></li><li><span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Memiliki kesiapan\r\nemosional untuk berinteraksi dan bekerjasama dengan rekan seusia</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Kepala sekolah&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : Monalisa, S. Pd&nbsp; <o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Wakil kepala\r\nsekolah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Yuliana\r\nFitriyanti, S. Kep<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">ADM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :\r\nAmelia Herdiana, A.Md<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Guru kelompok TK A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Sri Hartati, S. Pd. I<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Pratiwi, S. Pd<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Guru kelompok TK B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Yuliana Fitriyanti, S. Kep<o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Winda Lestari, S.\r\nPd<o:p></o:p></span></p>\r\n\r\n<span style=\"font-size:12.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Riana Diarti&nbsp;</span>', 4, '2020-07-28 00:02:19', '2020-08-01 07:27:20'),
(5, '<p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\nnormal\"><font face=\"times new roman\" style=\"\" size=\"3\">Kurikulum\r\nyang digunakan oleh Yayasan Auladi Palembang adalah Kurikulum 2013 (K13) yang\r\ndilengkapi dengan kurikulum Auladi yang meliputi Kurikulum JSIT yang\r\nmengajarkan PAI, Hadist, BPI, dan Pramuka, lalu Metode Ummi yang mengajarkan\r\ntahsin dan tahfizh, serta LIM untuk pembentukan karakter.</font><font face=\"Times New Roman, serif\" style=\"font-size: 12pt;\"><o:p></o:p></font></p>', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Pendidikan Agama\r\nIslam</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Hadist</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Tematik</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">TTQ\r\n(Tahsin,Tahfidzh Quran)</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">PJOK (Pendidikan\r\nJasmani,Olahraga dan Kesehatan)</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Matematika</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Bahasa Inggris</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Bahasa Arab</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">TIK (Teknologi\r\nInformasi dan Komunikasi)</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">BPI (Bina Pribadi\r\nIslam)</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">LIM (Leader In Me)</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Berenang</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Kunjungan edukatif</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Leadership day</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Market day</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Pekan Muharram dan\r\npentas seni budaya</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Mabit</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Kemah</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Outbound</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Manasik haji</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Munaqosyah dan\r\nwisuda akbar</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Pesantren Ramadhan</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Qurban</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Baksos</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">SLC (Student Light\r\nConference)</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '<p class=\"MsoNormal\" style=\"margin-top:0in;margin-right:0in;margin-bottom:0in;\r\nmargin-left:.25in;margin-bottom:.0001pt;text-align:justify;line-height:normal\"><ol><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Pramuka</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Calistung</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Ttq\r\n(Tahsin,Tahfidz Quran) Club</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Arabic Club</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Math Club</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Robotic</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Panahan</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">English Club</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Taekwondo</span></li><li><span style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Seni dan Tari</span></li><li><span style=\"font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; color: inherit;\">Calistung</span></li></ol></p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '<p><span style=\"line-height: 107%;\"><font face=\"times new roman\" style=\"\" size=\"3\">Mendapat Hapalan 5 JUZ, dapat menjadikan siswa siswi yang berjiwa kepemimpinan,\r\ndapat mengikuti dan berinteraksi dengan kemajuan teknologi, membentuk pemimpin\r\nyang mencintai alquran dan as sunah.</font></span></p>', '<p class=\"MsoListParagraphCxSpFirst\" style=\"margin-bottom:0in;margin-bottom:.0001pt;\r\nmso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:normal;\r\nmso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\"><span style=\"font-size: 12pt;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size: 12pt;\">Kepala\r\nsekolah :&nbsp;&nbsp;&nbsp; Firmansyah, S. Pd.&nbsp; <o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:\r\nnormal;mso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\"><span style=\"font-size: 12pt;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-size: 12pt;\">Wakil\r\nkepala sekolah: Wakakur : Yanti Asnita, S. Pd.<o:p></o:p></span></font></p>\r\n\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"margin-bottom:0in;margin-bottom:\r\n.0001pt;mso-add-space:auto;text-align:justify;line-height:normal\"><span style=\"font-size: 12pt;\"><font face=\"times new roman\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wakasis&nbsp; : Siti Juriah, S. Pd.<o:p></o:p></font></span></p>\r\n\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"margin-bottom:0in;margin-bottom:.0001pt;\r\nmso-add-space:auto;text-align:justify;text-indent:-.25in;line-height:normal;\r\nmso-list:l0 level1 lfo1\"><!--[if !supportLists]--><font face=\"times new roman\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style=\"font-size: 12pt;\">Guru\r\nKelas : </span><font size=\"2\">Revida Contesa, SE. IHartika,\r\nS.Pd, Abdi Qoniyyah, S.Pd.I, Desy Puspitasari, S.Pd, Novi Tamala, S.Si, Dessy\r\nAmrina, S.Si, Yanti Asnita, S.Pd, Nur Mariyani, S.Pd, Fitriana, S. Pd,,\r\nSuhartono, S.Pd, Sari Putriani, S.Pd, Ria Aryani, S.Pd, Nina Mirza Utami,\r\nS.Psi, Trisnawati, S.Pd. Geni\r\nNoverti, S.Pd, Karnida, SE., Dwi Ayu Raffi, S. Pi, Siti Juriah, S. Pd, Novita\r\nPutri Utami, S.Pd, Zakia Indriyani, S. Pd., Iryani Zakiah, S. Pd., Rusmala\r\nDewi, S. Pd<o:p></o:p></font></font></p>\r\n\r\n<font face=\"times new roman\" size=\"2\"><span style=\"line-height: 107%;\">Guru\r\nMapel :</span><span style=\"line-height: 107%;\"> </span><span style=\"line-height: 107%;\">Alwi Novan Pitulima, S.E, Arief Rahman Hartanto,\r\nS.H.I, Misdanial, S.Pd.I, Lasmiaro, S.Pd., Doris Alamsyah, M. Yunus, Febta\r\nDwiyan, S. Pd. Titin Sumarni, SE.I, Siti Salwa, Fitriyanti, S. Hum, Nini\r\nSumarni. S.E.I, Lusita Artika, S. Pd., Sri Muryati,</span></font>', 5, '2020-07-28 00:02:35', '2020-07-29 03:46:11'),
(6, 'a', 'a', 'a', 'a', 'a', 'a', 6, '2020-07-28 00:02:48', '2020-07-28 00:02:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `judulpendaftaran`
--

CREATE TABLE `judulpendaftaran` (
  `id` int(11) NOT NULL,
  `judulpendaftaran` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `judulpendaftaran`
--

INSERT INTO `judulpendaftaran` (`id`, `judulpendaftaran`, `created_at`, `updated_at`) VALUES
(1, '<span style=\"font-weight: bolder; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px; text-align: center;\">Pengumuman</span><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px; text-align: center;\">&nbsp;: Pendaftaran calon siswa baru tahun ajaran 2020-2021 berlangsung dari tanggal&nbsp;</span><span style=\"font-weight: bolder; color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 20px; text-align: center;\">12 Juni - 12 Juli 2020</span>', '2020-07-17 00:40:30', '2020-07-17 00:49:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katamutiara`
--

CREATE TABLE `katamutiara` (
  `id` int(11) NOT NULL,
  `katamutiara` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `katamutiara`
--

INSERT INTO `katamutiara` (`id`, `katamutiara`, `created_at`, `updated_at`) VALUES
(2, '6f14888368dd9ffbc183ed094c4a4d99.jpg', '2020-07-17 09:58:46', '2020-07-17 09:58:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `marquee`
--

CREATE TABLE `marquee` (
  `id` int(11) NOT NULL,
  `marquee` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `marquee`
--

INSERT INTO `marquee` (`id`, `marquee`, `created_at`, `updated_at`) VALUES
(1, '<p>SDIT AULADI PALEMBANG&nbsp;<img alt=\"\" src=\"https://www.auladi.sch.id/wp-content/uploads/2019/04/logo-auladi.png\" style=\"height:13px; width:30px\" />&nbsp; SDIT AULADI PALEMBANG</p>\r\n', '2020-07-11 05:12:59', '2020-09-26 07:39:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `cabang` varchar(10) NOT NULL,
  `jenjang` varchar(10) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `telepon_ortu` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `cabang`, `jenjang`, `nama_ortu`, `telepon_ortu`, `email`, `pekerjaan`, `pendidikan`, `alamat`, `created_at`, `updated_at`) VALUES
(18, 'Farid', 'Laki-laki', 'Palembang', '17/07/2020', 'SU-II', 'TK', 'farida', '2139039103912', 'farda@gmail.com', 'isjfisfjsidfsd', 'SLTA', 'ewrewrewrewre', '2020-08-03 07:05:49', '2020-08-03 07:05:49'),
(19, 'tes', 'Laki-laki', 'ccna', '17/07/2020', 'SU-II', 'TK', 'tes', 'tes', 'tes', 'tes', 'SLTA', 'tesssss', '2020-08-03 07:54:28', '2020-08-03 07:54:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `nama_pengumuman` text NOT NULL,
  `keterangan` text NOT NULL,
  `file_pengumuman` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `nama_pengumuman`, `keterangan`, `file_pengumuman`, `created_at`, `updated_at`) VALUES
(10, 'tes', 'tesku', 'b5857c2847532fec5b5d0f8c70d2535e.pdf', '2020-09-26 08:17:36', '2020-09-26 08:31:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `album` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `photo`
--

INSERT INTO `photo` (`id`, `photo`, `album`, `created_at`, `updated_at`) VALUES
(24, '9181f8a493e8571e045378887369a1c5.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(25, '6832ca6a98d8785e76998e2abb192c3a.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(26, '9fbe8a23f7bd56a5242ac64bdbd7417a.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(27, '5a54dbdf5143dd19269cbfaa2fe70963.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(28, '411d31768e3d828e1dd24a6c7ecbb79e.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(29, '3b4b5686c62565556b84c1d4c83a0e2e.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(30, 'd5db6831d10116da2b5468cf61804877.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(31, '17922881dc4701fac6637afc1f0716bf.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(32, '38ba91d08a45f4869157e5e13402ec6d.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(33, '1cf9d38856761323ea881da8c1fb873a.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(34, '3f5c5630a3007c92d5a9211293873267.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(35, '79a4bbea0e408a827fd49de5974272c1.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(36, '438dd56724f2858fe2aaf1c609de1786.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(37, 'd99102f6f633cc48c17a59c63b6b16d3.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(38, '355955da5ffc50b912c58323084a1964.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(39, '131d4655cc5993d12bf94610e2250964.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(40, 'ce11b0937cd54eeb24334d819feb9e30.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(41, '570d8e0cafc2828d1ee56ee355eebf8d.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(42, 'b1c886b26211a423805458884ecab071.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(43, 'bec884a1c162063633068bb1dcb6ff0c.jpg', 5, '2020-08-31 14:39:02', '2020-08-31 14:39:02'),
(48, 'caadfc4fada07a757b319b1d84fbc1af.jpeg', 7, '2020-09-02 02:12:31', '2020-09-02 02:12:31'),
(49, 'a2e30349177f77591f412b16217a8c2d.jpeg', 7, '2020-09-02 02:12:31', '2020-09-02 02:12:31'),
(50, 'e15362e8b14fa1f6439818fcc8072017.jpeg', 7, '2020-09-02 02:12:31', '2020-09-02 02:12:31'),
(51, '5a2d264a81c86a2cb24ce79fb15c690b.jpeg', 7, '2020-09-02 02:12:31', '2020-09-02 02:12:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photoalbum`
--

CREATE TABLE `photoalbum` (
  `id` int(11) NOT NULL,
  `albumName` text NOT NULL,
  `coverPhoto` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `photoalbum`
--

INSERT INTO `photoalbum` (`id`, `albumName`, `coverPhoto`, `created_at`, `updated_at`) VALUES
(5, 'SIT Auladi Palembang Kurban 7 Sapi dan 10 Kambing', 'df49f3938b9c2cca48f3dc01de0640d7.jpg', '2020-08-31 14:38:16', '2020-08-31 14:38:16'),
(7, 'Perlombaan Virtual Mempertingati HUT RI Ke 75 di SDIT Auladi SU II', '4cb97207417b1efbb92175821dcf2ee1.jpeg', '2020-09-01 00:25:38', '2020-09-01 00:25:38'),
(8, 'Albmku', '7c5e7e13c73a61c3ebd6cf4c8e198e31.jpeg', '2020-09-02 02:15:25', '2020-09-02 02:15:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `schoolName` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `schools`
--

INSERT INTO `schools` (`id`, `schoolName`, `created_at`, `updated_at`) VALUES
(1, 'SD IT Auladi Pusat', '2020-07-11 05:17:18', '2020-07-11 05:17:18'),
(2, 'TKIT Auladi Pusat', '2020-07-11 05:17:33', '2020-07-11 05:17:33'),
(3, 'SDIT Auladi Cabang Sako', '2020-07-11 05:18:35', '2020-07-11 05:18:35'),
(4, 'TKIT Auladi Cabang Sako', '2020-07-11 05:18:35', '2020-07-11 05:18:35'),
(5, 'SDIT Auladi Cabang Pakjo', '2020-07-11 05:18:35', '2020-07-11 05:18:35'),
(6, 'TKIT Auladi Cabang Pakjo', '2020-07-11 05:18:35', '2020-07-11 05:18:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `role`, `school`, `created_at`, `updated_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1, 1, '2020-07-11 05:10:39', '2020-07-18 12:21:57'),
(3, 'satria', '477054c78baea7a1242f79d898a2ca46', 'Satria', 2, 1, '2020-07-18 05:55:56', '2020-07-18 12:21:59'),
(4, 'tono', '14d2d4119982cd6c68a566e523cb16ae', 'Tono', 2, 3, '2020-07-18 12:28:25', '2020-07-18 12:28:25'),
(5, 'adminsakotk', '0b36aad2a7e1a99c7182697104a0e320', 'adminsakotk', 2, 4, '2020-07-29 02:59:03', '2020-07-29 02:59:03'),
(7, 'adminsdpakjo', '7dbdcbbed9916db540044e5a60aae186', 'adminsdpakjo', 2, 5, '2020-07-29 03:34:54', '2020-07-29 03:34:54'),
(8, 'adminsutk', '02566f49b24a3025628c7dfa2ce8eb07', 'adminsutk', 2, 2, '2020-08-31 14:35:39', '2020-08-31 14:35:39'),
(9, 'adminsusd', '75d417193897ef4291e98ed398109d02', 'adminsusd', 2, 1, '2020-08-31 14:35:56', '2020-08-31 14:35:56'),
(10, 'admintkpakjo', 'ee0b912ff0729f60d0bb4506b9f10d08', 'admintkpakjo', 2, 6, '2020-09-01 00:23:13', '2020-09-01 00:23:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `youtubeID` text NOT NULL,
  `album` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `whatsapp`
--

CREATE TABLE `whatsapp` (
  `id` int(11) NOT NULL,
  `nomor_wa` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `whatsapp`
--

INSERT INTO `whatsapp` (`id`, `nomor_wa`, `created_at`, `updated_at`) VALUES
(1, '6282282333878', '2020-09-02 11:47:36', '2020-09-02 11:51:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slugJudul` (`slugJudul`) USING HASH;

--
-- Indeks untuk tabel `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indeks untuk tabel `detail_sekolah`
--
ALTER TABLE `detail_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indeks untuk tabel `judulpendaftaran`
--
ALTER TABLE `judulpendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `katamutiara`
--
ALTER TABLE `katamutiara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `marquee`
--
ALTER TABLE `marquee`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photoAlbum` (`album`);

--
-- Indeks untuk tabel `photoalbum`
--
ALTER TABLE `photoalbum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school` (`school`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album` (`album`);

--
-- Indeks untuk tabel `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `detail_sekolah`
--
ALTER TABLE `detail_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `judulpendaftaran`
--
ALTER TABLE `judulpendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `katamutiara`
--
ALTER TABLE `katamutiara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `marquee`
--
ALTER TABLE `marquee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `photoalbum`
--
ALTER TABLE `photoalbum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `whatsapp`
--
ALTER TABLE `whatsapp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD CONSTRAINT `data_sekolah_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_sekolah`
--
ALTER TABLE `detail_sekolah`
  ADD CONSTRAINT `detail_sekolah_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `schools` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photoAlbum` FOREIGN KEY (`album`) REFERENCES `photoalbum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`school`) REFERENCES `schools` (`id`);

--
-- Ketidakleluasaan untuk tabel `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`album`) REFERENCES `photoalbum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
