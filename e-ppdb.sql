-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 08:33 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(200) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `artikel` text NOT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `penulis`, `tanggal`, `artikel`, `gambar`) VALUES
(18, 'Manfaat Vaksinasi Anak di Tengah Pandemi Covid-19', 'Hamba Allah', '2022-01-04', '<p><span style=\"font-family:Comic Sans MS,cursive\">Guna mendukung program pemerintah untuk pemulihan pandemi Covid-19 serta mempersiapkan Sumber Daya Manusia (SDM) unggul, Sentra Vaksin Generasi Maju khusus untuk Vaksin Covid-19&nbsp;anak dan vaksin booster diselenggarakan di sebuah mal di Jakarta Barat.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Sentra Vaksin Generasi Maju merupakan bagian dari rangkaian kampanye &#39;Indonesia Bangkit&#39; yang berlangsung pada 20 - 24 Januari 2022. Sentra vaksinasi ini menargetkan 5.000 peserta vaksin yang terdiri dari 2.500 peserta anak dan 2.500 peserta vaksinasi booster.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Sebagaimana diketahui, pemerintah telah mempersiapkan 58,7 juta total dosis vaksin untuk melakukan vaksinasi pada 26,4 juta anak usia 6-11 tahun. Vaksinasi Covid-19 untuk anak ini juga telah direkomendasikan oleh Ikatan Dokter Anak Indonesia (IDAI).</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Vaksinasi ini penting untuk dilakukan sebab, anak juga dapat tertular dan atau menularkan virus corona dari dan ke orang lain di sekitarnya walau tanpa gejala. Kegiatan vaksin melalui Sentra Vaksin Generasi Maju di beberapa kota di Indonesia, yaitu Jakarta, Yogyakarta dan Surabaya.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Pasalnya 3 kota besar tersebut masih menjadi fokus pemerintah dalam pengendalian kasus Covid-19. Direktur Pencegahan dan Pengendalian Penyakit Menular Langsung, dr. Siti Nadia Tarmizi, M.Epid mengatakan, anak-anak merupakan masa depan bangsa yang perlu didukung dan dilindungi bersama.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">&quot;Agar mereka dapat tumbuh maksimal menjadi generasi penerus yang maju. Di masa pandemi ini, vaksinasi pada anak menjadi modal besar untuk mempercepat pemulihan aktivitas anak,&quot; kata Siti Nadia.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Vaksinasi ini akan melindungi anak-anak khususnya dalam aktivitas pembelajaran. Ini merupakan upaya pemerintah dalam meningkatkan kekebalan daya tahan tubuh anak agar bisa menghindari infeksi Covid-19 dari lingkungan sekitar.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '1656338263image_04.jpg'),
(23, 'Kebersihan Sebagian Dari Iman', 'Hamba Allah', '2021-10-15', '<p><span style=\"font-family:Comic Sans MS,cursive\"><strong>Kebersihan Lingkungan Sekolah&nbsp;</strong><br />\r\n<br />\r\nKebersihan merupakan salah satu hal terpenting untuk menciptakan kesehatan lingkungan. Kebersihan juga berperan penting untuk menciptakan lingkungan yang nyaman dan tentram. Tentu saja bila lingkungan yang kumuh akan menjadikan orang menjadi enggan berlama lama untuk berada di lingkungan tersebut.&nbsp;<br />\r\nMaka kebersihan adalah harga mutlak untuk mewujudkan lingkungan yang nyaman, termasuk lingkungan sekolah. Bagaimana mungkin siswa mampu menangkap pelajaran yang disampaikan dengan maksimal bila siswa itu sendiri kurang nyaman berada di kelas karena kotor. Belum lagi kamar mandi sekolah yang identik dengan bau dan kotor karena perilaku jorok para siswa.<br />\r\n<br />\r\n<strong>Cara Menjaga Kebersihan Lingkungan di Sekolah</strong><br />\r\n<br />\r\n<strong>A. Program Sekolah Hijau&nbsp;</strong><br />\r\n&nbsp;&nbsp;&nbsp; Ada beberapa cara untuk mewujudkan program sekolah hijau diantaranya :</span></p>\r\n\r\n<ul>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">membangun apotek hidup di sekolah</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">membuat tempat pembuangan sampah di sekolah</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">menyediakan tempat sampah berdasarkan jenis sampahnya</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">melaksanakan kegiatan ekstra kurikuler berbasis lingkungan seperti pencinta alam, dan sejenisnya</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">melaksanakan tata tertib kebersihan dan kelestarian lingkungan sekolah&nbsp;</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">mengadakan gerakan cinta kebersihan</span></li>\r\n</ul>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><strong>B. Adiwiyata</strong>&nbsp; &nbsp;&nbsp;<br />\r\n&nbsp;&nbsp;&nbsp; Salah satu upaya pemerintah dalam menggugah kesadaran sekolah dalam menjaga kebersihan dan kesehatan lingkungan sekolah adalah program Adiwiyata.<strong>&nbsp;</strong>Adiwiyata adalah salah satu program Kementerian Lingkungan Hidup dalam rangka mendorong terciptanya pengetahuan dan kesadaran warga sekolah dalam upaya pelestarian lingkungan hidup. Diharapkan setiap warga sekolah ikut terlibat dalam kegiatan sekolah menuju lingkungan yang sehat dan menghindari dampak lingkungan yang negatif. Dengan program ini diharapkan sekolah berlomba untuk bisa memenangkan Adiwiyata Nasional sehingga Cara Menjaga Kebersihan Lingkungan Sekolah akan dapat terprogramkan dengan baik.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\"><strong>C.Gerakan Menjaga Kebersihan Kelas dan Sekolah</strong></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Menyapu dan Mengepel Lantai Kelas Secara Teratur<br />\r\n	Menyapu lantai ruang kelas dapat dilakukan ketika sebelum pelajaran dimulai, dan setelah pelajaran selesai. Sehingga ruang kelas selalu bersih. Suasana kelas menjadi&nbsp;nyaman untuk belajar. Selain dilakukan oleh regu piket kelas menyapu dan mengepel lantai ruang kelas juga dapat dilakukan secara bergotong royong seluruh warga kelas.&nbsp;&nbsp;</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Membersihkan Meja dan Kursi&nbsp; Meja dan kursi perlu&nbsp;dibersihkan secara teratur. Kamu dapat menulis&nbsp;dan membaca dengan nyaman di meja yang&nbsp;bersih. Cara membersihkan meja dan kursi adalah dengan menggunakan kemoceng. Membersihkan meja dan kursi dilakukan rutin setiap hari seperti menyapu ruang kelas. Apabila meja sudah terlalu kotor dan tidak bisa dibersihkan menggunakan alat sederhana, meja dan kursi dapat dibersihkan dengan cara menggunakan air (dicuci), maka dari itu hindarilah perbuatan seperti mencoret meja menggunakan tip-ex, dan sebagainya.</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Membuang Sampah di Tempat Sampah Membuang sampah di tempatnya wajib kita lakukan untuk menciptakan lingkungan yang bersih. Apabila kita membuang sampah sembarangan, selain memberikan kesan jorok dan tidak enak dilihat juga akan menimbulkan bau yang tidak sedap di sekitar halaman sekolah.</span></li>\r\n	<li><span style=\"font-family:Comic Sans MS,cursive\">Menjaga Kebersihan Fasilitas yang Ada di Sekolah Tindakan ini sangat penting karena apabila kita tidak menjaga kebersihan fasilitas, warga sekolah pun menjadi tidak nyaman menggunakan fasilitas tersebut. Contohnya, kamar mandi, sering sekali kamar mandi menjadi sarana yang paling tidak nyaman digunakan karena kurangnya kesadaran warga sekolah dalam menjaganya. Maka dari itu, mulai lah kita menjaga fasilitas - fasilitas di sekolah. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></li>\r\n</ol>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Pada dasarnya, menjaga kebersihan lingkungan sekolah itu sangatlah penting. Hal ini bukan hanya dilaksanakan oleh petugas kebersihan di sekolah tapi juga dibutuhkan peran serta warga sekolah untuk menjaganya.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n', '165633932111ppp.png'),
(24, 'Meningkatkan Motivasi Belajar Siswa', 'tandatanya?', '2022-06-25', '<div style=\"text-align:justify; text-indent:36pt\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\"><span style=\"background-color:#f6f5f2\"><span style=\"color:#666666\">Motivasi Belajar Adalah Kunci Sukses. &nbsp;Motivasi belajar sangat penting dalam pengembangan diri, sebab pengembangan diri adalah belajar, &nbsp;Jika Anda merasa sulit belajar, biasakanlah belajar meskipun sedikit demi sedikit sampai Anda terbiasa lagi belajar. Tidak ada waktu. Semua orang memiliki waktu, tetapi mengapa orang lain bisa tetapi Anda tidak? Bukan waktu yang menjadi masalah, tetapi pilihan Anda. Apakah Anda mau memprioritaskan belajar atau tidak?</span></span></span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify; text-indent:36pt\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\"><span style=\"background-color:#f6f5f2\"><span style=\"color:#666666\">Belajar Adalah Kunci Keluar Dari Masalah Satu lagi agar Anda memiliki motivasi belajar yang tinggi adalah kesadaran bahwa kemauan belajar Anda adalah kunci agar Anda bisa keluar dari masalah. Saat Anda sedang menghadapi masalah berat, maka Anda harus belajar agar bisa mengatasi masalah berat tersebut. Jika Anda melihat sebuah masalah sangat besar, penyebabnya karena diri Anda begitu kecil. Artinya mental Anda ciut, kemampuan Anda yang minim, wawasan yang sempit, dan keterampilan yang rendah. Artinya Anda harus memperbesar diri Anda sehingga masalah tidak lagi terlihat besar. Caranya adalah dengan belajar. Yup, tidak ada cara lain. Bukan mengeluh, bukan menyalahkan orang lain, dan bukan pula penyalahkan lingkungan. Saya rasa manfaat kebaikan bagi diri Anda dan juga kemampuan Anda menghadapi semua masalah adalah sudah sangat cukup menjadi motivasi untuk belajar dan tetap belajar. Termasuk, saat motivasi belajar anak Anda kurang, maka Anda harus belajar bagaimana cara memotivasi anak.</span></span></span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify; text-indent:36pt\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\"><span style=\"color:#666666\">Cara meningkatkan motivasi belajar siswa :</span></span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">1. Memberi angka</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Angka dalam hal ini sebagai simbol dari nilai kegiatan belajarnya. Banyak siswa yang justru untuk mencapai angka/nilai yang baik. Sehingga yang dikejar hanyalah nilai ulangan atau nilai raport yang baik. Angka-angka yang baik itu bagi para siswa merupakan motivasi belajar yang sangat kuat. Yang perlu diingat oleh guru, bahwa pencapaian angka-angka tersebut belum merupakan hasil belajar yang sejati dan bermakna. Harapannya angka-angka tersebut dikaitkan dengan nilai afeksinya bukan sekedar kognitifnya saja.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">2. Hadiah</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Hadiah dapat menjadi&nbsp;motivasi belajar&nbsp;yang kuat, dimana siswa tertarik pada bidang tertentu yang akan diberikan hadiah. Tidak demikian jika hadiah diberikan untuk suatu pekerjaan yang tidak menarik menurut siswa.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">3. Kompetisi</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Persaingan, baik yang individu atau kelompok, dapat menjadi sarana untuk meningkatkan motivasi belajar. Karena terkadang jika ada saingan, siswa akan menjadi lebih bersemangat dalam mencapai hasil yang terbaik.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><em><span style=\"font-size:12pt\">4.&nbsp;Ego-involvement</span></em></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Menumbuhkan kesadaran kepada siswa agar merasakan pentingnya tugas dan menerimanya sebagai tantangan sehingga bekerja keras adalah sebagai salah satu bentuk motivasi yang cukup penting. Bentuk kerja keras siswa dapat terlibat secara kognitif yaitu dengan mencari cara untuk dapat&nbsp;<em><a href=\"http://belajarpsikologi.com/pengertian-motivasi-belajar/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"motivasi belajar\"><span style=\"color:#222222\">meningkatkan motivasi</span></a></em>.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">5. Memberi Ulangan</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Para siswa akan giat belajar kalau mengetahui akan diadakan ulangan. Tetapi ulangan jangan terlalu sering dilakukan karena akan membosankan dan akan jadi rutinitas belaka.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">6. Mengetahui Hasil</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Mengetahui hasil belajar bisa dijadikan sebagai alat motivasi belajar anak. Dengan mengetahui hasil belajarnya, siswa akan terdorong untuk belajar lebih giat. Apalagi jika hasil belajar itu mengalami kemajuan, siswa pasti akan berusaha mempertahankannya atau bahkan termotivasi untuk dapat meningkatkannya.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">7. Pujian</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Apabila ada siswa yang berhasil menyelesaikan tugasnya dengan baik, maka perlu diberikan pujian. Pujian adalah bentuk&nbsp;<em>reinforcement</em>&nbsp;yang positif dan memberikan motivasi yang baik bagi siswa. Pemberiannya juga harus pada waktu yang tepat, sehingga akan memupuk suasana yang menyenangkan dan mempertinggi motivasi&nbsp; belajar serta sekaligus akan membangkitkan harga diri.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">8. Hukuman</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Hukuman adalah bentuk&nbsp;<em>reinforcement</em>&nbsp;yang negatif, tetapi jika diberikan secara tepat dan bijaksana, bisa menjadi alat&nbsp;<a href=\"http://belajarpsikologi.com/fungsi-motivasi-dalam-proses-belajar/\" style=\"text-decoration:none; color:#336699\" title=\"Motivasi Belajar\"><span style=\"color:#222222\">motivasi belajar&nbsp;</span></a>anak. Oleh karena itu, guru harus memahami prinsip-prinsip pemberian hukuman tersebut.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Hal senada juga diungkapkan oleh&nbsp; Fathurrohman dan Sutikno (2007: 20)&nbsp;<strong><em><a href=\"http://belajarpsikologi.com/pengertian-motivasi-belajar/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"motivasi belajar\"><span style=\"color:#222222\">motivasi siswa</span></a></em></strong>&nbsp;dapat ditumbuhkan melalui beberapa&nbsp;<a href=\"http://belajarpsikologi.com/cara-belajar-yang-baik/\" style=\"text-decoration:none; color:#336699\" title=\"Cara Belajar\"><span style=\"color:#222222\">cara</span></a>&nbsp;yaitu:</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">a) Menjelaskan tujuan kepada peserta didik.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Pada permulaan&nbsp;<a href=\"http://belajarpsikologi.com/macam-macam-metode-pembelajaran/\" style=\"text-decoration:none; color:#336699\" title=\"Macam-Macam Metode Pembelajaran\"><span style=\"color:#222222\">belajar mengajar</span></a>&nbsp;seharusnya terlebih dahulu seorang guru menjelaskan mengenai Tujuan Instruksional Khusus yang akan dicapainya kepada siswa. Makin jelas tujuan maka makin besar pula motivasi dalam belajar.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">b) Hadiah.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Hadiah akan memacu semangat mereka untuk bisa belajar lebih giat lagi. Berikan hadiah untuk siswa yang berprestasi. Di samping itu, siswa yang belum berprestasi akan termotivasi untuk bisa mengejar siswa yang berprestasi.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">c) Saingan/kompetisi.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Guru berusaha mengadakan persaingan di antara siswanya untuk meningkatkan prestasi belajarnya, berusaha memperbaiki hasil prestasi yang telah dicapai sebelumnya.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">d) Pujian.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Siswa yang berprestasi sudah sewajarnya untuk diberikan penghargaan atau pujian. Pujian yang diberikan bersifat membangun. Dengan pujian siswa akan lebih termotivasi untuk mendapatkan prestasi yang lebih baik lagi.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">e) Hukuman.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Cara meningkatkan</span><span style=\"font-size:12pt\">&nbsp;<strong><em><a href=\"http://belajarpsikologi.com/cara-meningkatkan-motivasi-belajar-anak/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"Motivasi Belajar\"><span style=\"color:#222222\">motivasi belajar</span></a></em></strong>&nbsp;dengan memberikan hukuman. Hukuman akan diberikan kepada siswa yang berbuat kesalahan saat proses belajar mengajar. Hukuman ini diberikan dengan harapan agar siswa tersebut mau merubah diri dan berusaha memacu motivasi belajarnya. Bentuk hukuman yang diberikan kepada siswa adalah hukuman yang bersifat mendidik seperti mencari artikel, mengarang dan lain sebagainya.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">f) &nbsp;Membangkitkan dorongan kepada peserta didik untuk belajar.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Strateginya adalah dengan memberikan perhatian maksimal ke peserta didik. Selain itu, guru juga dapat membuat siswa tertarik dengan materi yang disampaikan dengan cara menggunakan&nbsp;<a href=\"http://belajarpsikologi.com/macam-macam-metode-pembelajaran/\" style=\"text-decoration:none; color:#336699\" title=\"Macam-Macam Metode Pembelajaran\"><span style=\"color:#222222\">metode&nbsp;</span></a>yang menarik dan mudah dimengerti siswa.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">g) Membentuk kebiasaan belajar yang baik.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Kebiasaan belajar yang baik dapat dibentuk dengan cara adanya jadwal belajar.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">h) Membantu&nbsp;<a href=\"http://belajarpsikologi.com/pengertian-kesulitan-belajar/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"kesulitan belajar\"><span style=\"color:#222222\">kesulitan belajar</span></a>&nbsp;peserta didik, baik secara individual maupun kelompok.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Membantu&nbsp;<a href=\"http://belajarpsikologi.com/pengertian-kesulitan-belajar/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"kesulitan\"><span style=\"color:#222222\">kesulitan&nbsp;</span></a>peserta didik dengan cara memperhatikan proses dan hasil belajarnya.&nbsp; Dalam proses belajar terdapat beberap unsur antara lain yaitu penggunaan metode untuk mennyampaikan materi kepada para siswa. Metode yang menarik yaitu dengan gambar dan tulisan warna-warni akan menarik siswa untuk&nbsp; mencatat dan&nbsp; mempelajari materi yang telah disampaikan..</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\"><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">i) Menggunakan&nbsp;<a href=\"http://belajarpsikologi.com/macam-macam-metode-pembelajaran/\" style=\"text-decoration:none; color:#336699\" title=\"Macam-Macam Metode Pembelajaran\"><span style=\"color:#222222\">metode&nbsp;</span></a>yang bervariasi.</span></span></span></span></span></strong></div>\r\n\r\n<div style=\"text-align:justify\"><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">Meningkatkan&nbsp;<a href=\"http://belajarpsikologi.com/cara-meningkatkan-motivasi-belajar-anak/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"motivasi belajar\"><span style=\"color:#222222\">motivasi belajar</span></a>&nbsp;dengan menggunakan&nbsp;<strong><a href=\"http://belajarpsikologi.com/macam-macam-metode-pembelajaran/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"Macam-Macam Metode Pembelajaran\"><span style=\"color:#222222\">metode pembelajaran</span></a></strong>&nbsp;yang variasi.&nbsp;<a href=\"http://belajarpsikologi.com/macam-macam-metode-pembelajaran/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"Macam-Macam Metode Pembelajaran\"><span style=\"color:#222222\">Metode</span></a>&nbsp;yang bervariasi akan sangat membantu dalam proses belajar dan mengajar. Dengan adanya metode yang baru akan mempermudah guru untuk menyampaikan materi pada siswa.</span></span></span></span></span></div>\r\n\r\n<div style=\"text-align:justify\">\r\n<div><strong><span style=\"font-family:Comic Sans MS,cursive\"><span style=\"font-size:14.85px\"><span style=\"color:#333333\"><span style=\"background-color:#ffffff\"><span style=\"font-size:12pt\">j) Menggunakan&nbsp;</span><span style=\"font-size:12pt\"><a href=\"http://belajarpsikologi.com/pengertian-media-pembelajaran/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"Media Pembelajaran\"><em><span style=\"color:#222222\">media pembelajaran</span></em></a></span><span style=\"font-size:12pt\">&nbsp;yang baik, serta harus sesuai dengan&nbsp;<a href=\"http://belajarpsikologi.com/pengertian-model-pembelajaran/\" style=\"text-decoration:none; color:#336699\" target=\"_blank\" title=\"Tujuan Pembelajaran\"><span style=\"color:#222222\">tujuan pembelajaran</span></a>.</span></span></span></span></span></strong></div>\r\n</div>\r\n', '1656147209194e0885143c2e45f59b810651543843.jpg'),
(25, 'Mengajarkan Perilaku Hidup Bersih dan Sehat', 'Hamba Allah', '2021-05-12', '<p><span style=\"font-family:Comic Sans MS,cursive\">Membiasakan hidup bersih dan sehat pada anak-anak memang tidak mudah, diperlukan kesabaran dan ketelatenan. Untuk itu, kebiasaan hidup bersih dan sehat perlu di ajarkan sedini mungkin. Hal ini perlu dilakukan agar anak-anak terbiasa dengan kebiasaan demikian, sehingga nantinya akan terbawa sampai dewasa bahkan akan diajarkan kembali pada keturunan mereka.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Salah satu perilaku hidup bersih dan sehat yang perlu diajarkan sedini mungkin adalah perilaku sehat cuci tangan pakai sabun. Kebiasaan mencuci tangan perlu dibudayakan sejak masa kanak-kanak. Tujuannya adalah agar kebiasaan baik ini dibawa terus oleh anak-anak dan secara tidak langsung akan berdampak pada kesehatan individu. Oleh karena itu, dalam rumah tangga juga pendidikan kesehatan itu perlu diajarkan.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Konten ini telah tayang di Kompasiana.com dengan judul &quot;Mengajarkan Perilaku Hidup Bersih dan Sehat Pada Anak SD&quot;, Klik untuk baca:<br />\r\nhttps://www.kompasiana.com/architectur034/54f39186745513a22b6c792b/mengajarkan-perilaku-hidup-bersih-dan-sehat-pada-anak-sd</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Kreator: Arif Rahman</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Kompasiana adalah platform blog, setiap konten menjadi tanggungjawab kreator.</span></p>\r\n\r\n<p><span style=\"font-family:Comic Sans MS,cursive\">Tulis opini Anda seputar isu terkini di Kompasiana.com</span></p>\r\n', '1656340243Cuci-tangan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `informasi` text NOT NULL,
  `tanggal` date DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `id_sekolah`, `judul_informasi`, `informasi`, `tanggal`, `gambar`) VALUES
(6, 123, 'Pendaftaran Sudah Bisa Diakses di Website', '<p>Pengumuman pendaftaran penerimaan calon peserta didik baru dilakukan secara terbuka oleh pihak sekolah menggunakan media informasi sekolah seperti papan pengumuman atau media lainnya. Pengumuman pendaftaran penerimaan calon peserta didik baru dilaksanakan oleh sekolah paling lambat minggu pertama bulan Mei dengan memuat informasi seperti persyaratan calon peserta didik sesuai dengan jenjangnya, tanggal pendaftaran, jalur pendaftaran, jumlah daya tampung yang tersedia pada kelas 7 (tujuh) sesuai dengan data rombongan belajar dalam Dapodik, dan tanggal penetapan pengumuman hasil proses seleksi PPDB</p>\r\n', '2022-02-10', '1654397758--.jpg'),
(7, 123, 'Pendaftaran Dilaksanakan dari bulan Maret - Juli 2022', '<p><span style=\"font-family:Comic Sans MS,cursive\">Pengumuman pendaftaran penerimaan calon peserta didik baru dilakukan secara terbuka oleh pihak sekolah menggunakan media informasi sekolah seperti papan pengumuman atau media lainnya. Pengumuman pendaftaran penerimaan calon peserta didik baru dilaksanakan oleh sekolah paling lambat minggu pertama bulan Mei dengan memuat informasi seperti persyaratan calon peserta didik sesuai dengan jenjangnya, tanggal pendaftaran, jalur pendaftaran, jumlah daya tampung yang tersedia pada kelas 7 (tujuh) sesuai dengan data rombongan belajar dalam Dapodik, dan tanggal penetapan pengumuman hasil proses seleksi PPDB</span></p>\r\n', '2022-02-11', '1656510416SIAP PSB Online.png'),
(9, 123, 'Pendaftaran Lebih Mudah dan Efisien', '<p>Masukkan Informasi</p>\r\n', '2021-10-06', '16543977291646575601foto.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `jawaban` enum('Teman','Saudara','Mencari Tahu Sendiri') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawaban`, `jawaban`) VALUES
(1, 'Teman'),
(2, 'Saudara'),
(3, 'Mencari Tahu Sendiri'),
(4, 'Teman'),
(5, 'Saudara'),
(6, 'Teman'),
(7, 'Saudara'),
(8, 'Saudara'),
(9, 'Mencari Tahu Sendiri'),
(10, 'Saudara'),
(11, 'Mencari Tahu Sendiri'),
(12, 'Teman'),
(13, 'Saudara'),
(14, 'Teman'),
(15, 'Saudara'),
(16, 'Saudara'),
(17, 'Mencari Tahu Sendiri'),
(18, 'Saudara');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `gambar`) VALUES
(2, 'Kegiatan Pembelajaran Pengenalan IT', '16476208721.jpg'),
(4, 'Kegiatan Pembelajaran Di Masjid Assalafush', '16476209023.jpg'),
(6, 'Kegiatan Ekstra Kulikuler Karate', '164762093833 (2).jpg'),
(7, 'Kegiatan Ekstra Kulikuler Futsal', '1647620952eee (2).jpg'),
(10, 'Kegiatan Pramuka', '1647621028IMG-20220201-WA0044.jpg'),
(12, 'Kegiatan Ekstra Kulikuler Marching Band', '1647621063jjjjj (2).jpg'),
(15, 'Kegiatan Vaksinasi Covid-19', '1655044587IMG-20220530-WA0022.jpg'),
(16, 'Kagiatan Pembelajaran Sholat', '1655044677IMG-20220530-WA0034.jpg'),
(17, 'Kegiatan Pembelajaran', '1655044738IMG-20220530-WA0031.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_daftar` varchar(50) NOT NULL,
  `nama_lengkap_siswa` varchar(100) NOT NULL,
  `nama_panggilan_siswa` varchar(100) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `tempat_lh` varchar(20) NOT NULL,
  `tgl_lh` date NOT NULL,
  `jekel` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `alamat` text NOT NULL,
  `desa` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `pendidikan_ayah` varchar(20) DEFAULT NULL,
  `kerja_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(20) DEFAULT NULL,
  `telepon_ayah` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `pendidikan_ibu` varchar(20) DEFAULT NULL,
  `kerja_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` varchar(20) DEFAULT NULL,
  `telepon_ibu` varchar(20) DEFAULT NULL,
  `bertempat_tinggal` varchar(20) DEFAULT NULL,
  `berkebutuhan_khusus` varchar(40) DEFAULT NULL,
  `jumlah_saudara_kandung` int(11) DEFAULT NULL,
  `jumlah_saudara_tiri` int(11) DEFAULT NULL,
  `jumlah_saudara_angkat` int(11) DEFAULT NULL,
  `bahasa_sehari_hari` varchar(30) DEFAULT NULL,
  `gol_darah` varchar(5) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `jarak_rumah` varchar(20) DEFAULT NULL,
  `alat_transportasi` varchar(30) DEFAULT NULL,
  `asal_murid` varchar(25) DEFAULT NULL,
  `nama_lembaga` varchar(100) DEFAULT NULL,
  `status_lembaga` varchar(20) DEFAULT NULL,
  `npsn` varchar(20) DEFAULT NULL,
  `nsm` varchar(20) DEFAULT NULL,
  `alamat_lembaga` text DEFAULT NULL,
  `desa_lembaga` varchar(30) DEFAULT NULL,
  `kode_pos_lembaga` varchar(20) DEFAULT NULL,
  `kecamatan_lembaga` varchar(40) DEFAULT NULL,
  `kabupaten_lembaga` varchar(40) DEFAULT NULL,
  `provinsi_lembaga` varchar(40) DEFAULT NULL,
  `no_ijazah_ra_tk` varchar(20) DEFAULT NULL,
  `tanggal_ijazah` date DEFAULT NULL,
  `asal_murid_pindahan` varchar(20) DEFAULT NULL,
  `nama_lembaga_pindahan` varchar(100) DEFAULT NULL,
  `status_lembaga_pindahan` varchar(20) DEFAULT NULL,
  `npsn_pindahan` varchar(20) DEFAULT NULL,
  `nsm_pindahan` varchar(20) DEFAULT NULL,
  `alamat_lembaga_pindahan` text DEFAULT NULL,
  `desa_lembaga_pindahan` varchar(30) DEFAULT NULL,
  `kode_pos_lembaga_pindahan` varchar(20) DEFAULT NULL,
  `kecamatan_lembaga_pindahan` varchar(30) DEFAULT NULL,
  `kabupaten_lembaga_pindahan` varchar(30) DEFAULT NULL,
  `provinsi_lembaga_pindahan` varchar(30) DEFAULT NULL,
  `berkas` varchar(10) NOT NULL DEFAULT 'Belum',
  `waktu_daftar` datetime NOT NULL DEFAULT current_timestamp(),
  `foto` text DEFAULT NULL,
  `akte_kelahiran` text DEFAULT NULL,
  `ijazah_paud` text DEFAULT NULL,
  `kartu_keluarga` text DEFAULT NULL,
  `ktp_ayah` text DEFAULT NULL,
  `ktp_ibu` text DEFAULT NULL,
  `kartu` text DEFAULT NULL,
  `th_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_daftar`, `nama_lengkap_siswa`, `nama_panggilan_siswa`, `nisn`, `nik`, `tempat_lh`, `tgl_lh`, `jekel`, `agama`, `kewarganegaraan`, `alamat`, `desa`, `kode_pos`, `kecamatan`, `kabupaten`, `provinsi`, `no_kk`, `nama_ayah`, `nik_ayah`, `pendidikan_ayah`, `kerja_ayah`, `penghasilan_ayah`, `telepon_ayah`, `nama_ibu`, `nik_ibu`, `pendidikan_ibu`, `kerja_ibu`, `penghasilan_ibu`, `telepon_ibu`, `bertempat_tinggal`, `berkebutuhan_khusus`, `jumlah_saudara_kandung`, `jumlah_saudara_tiri`, `jumlah_saudara_angkat`, `bahasa_sehari_hari`, `gol_darah`, `tinggi_badan`, `berat_badan`, `jarak_rumah`, `alat_transportasi`, `asal_murid`, `nama_lembaga`, `status_lembaga`, `npsn`, `nsm`, `alamat_lembaga`, `desa_lembaga`, `kode_pos_lembaga`, `kecamatan_lembaga`, `kabupaten_lembaga`, `provinsi_lembaga`, `no_ijazah_ra_tk`, `tanggal_ijazah`, `asal_murid_pindahan`, `nama_lembaga_pindahan`, `status_lembaga_pindahan`, `npsn_pindahan`, `nsm_pindahan`, `alamat_lembaga_pindahan`, `desa_lembaga_pindahan`, `kode_pos_lembaga_pindahan`, `kecamatan_lembaga_pindahan`, `kabupaten_lembaga_pindahan`, `provinsi_lembaga_pindahan`, `berkas`, `waktu_daftar`, `foto`, `akte_kelahiran`, `ijazah_paud`, `kartu_keluarga`, `ktp_ayah`, `ktp_ibu`, `kartu`, `th_ajaran`) VALUES
('1f4445e8-e7d5-401d-b871-1b0ff5542f43', 'Firman Seftiawan', 'Firman', '1111888888888888', '320512520970002', 'Jakarta', '2000-05-25', 'Laki-laki', 'Islam', 'Indonesia', 'Kp. Bandrek', 'Sukamerang', '44186', 'Cibatu', 'Garut', 'Jawa Barat', '88888888888888888', 'Sanudin', '444444444444444', 'SMA', 'Buruh', 'Rp. 3.000.000 - Rp. ', '0878888888888888', 'Sumiati', '888888888888', 'SMA', 'Tidak Bekerja', '< Rp. 500.000', '085689988888', 'Orang Tua', 'Tidak', 3, 0, 0, 'Indonesia', 'O', 165, 60, '< 1 km', 'Antar Jemput Sekolah', 'Paud', 'Assyidikiah', 'Negeri', '1234567890121314', '1234567801191919', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '6666666666666666', '2000-08-04', '- Pilih -', '', '- Pilih -', '', '', '', '', '', '', '', '', 'Belum', '2022-05-21 20:37:18', '1653140238IMG-20200731-WA0085.jpg', '16531402381646575601foto.png', '16531402381646575601foto.png', '16531402381646575601foto.png', '16531402381646575601foto.png', '16531402381646575601foto.png', '16531402381646575601foto.png', '2022/2023'),
('2645fa1e-76e4-4260-bbb5-a8cf11c2ca8f', 'Reni Siti Nurjanah', 'Reni', '12121212121212', '22222222222222222222', 'Garut', '1998-09-12', 'Perempuan', 'Islam', 'Indonesia', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '141414141414', 'Hendi', '15151515151515', 'SD', 'Pedagang', 'Rp. 2.000.000 - Rp. ', '088889999966', 'Eti Rohaeti', '16161616161616', 'SMA', 'Guru/Dosen', 'Rp. 500.000 - Rp. 1.', '085555666111', 'Orang Tua', 'Tidak', 3, 0, 0, 'Indonesia', 'O', 160, 52, '< 1 km', 'Jalan Kaki', 'RA', 'RA Assalafush Sholihun', 'Swasta', '1234567890121314', '1234567801191919', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '27272727272727277', '2000-11-20', '- Pilih -', '', '- Pilih -', '', '', '', '', '', '', '', '', 'Sudah', '2022-05-21 18:59:01', '1653134341IMG-20200731-WA0084.jpg', '16531343411646575601foto.png', '16531343411646575601foto.png', '16531343411646575601foto.png', '16531343411646575601foto.png', '16531343411646575601foto.png', '16531343411646575601foto.png', '2022/2023'),
('612f2a74-19f1-426d-bd9b-805e168cdfb6', 'Yasmin Azbin Ramadhan', 'yasmin', '11999999999999999999', '5555555555', 'Garut', '2012-05-26', 'Perempuan', 'Islam', 'Indonesia', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '34343434344343', 'Ramdan', '15151515151515', 'SMA', 'Guru/Dosen', 'Rp. 2.000.000 - Rp. ', '09877777777777777', 'Desri Siti Maesaroh', '4545454545454545', 'D1', 'Politikus', 'Rp. 2.000.000 - Rp. ', '76878787878787878', 'Orang Tua', 'Tidak', 2, 0, 0, 'Indonesia', 'A', 120, 43, '< 1 km', 'Jalan Kaki', 'TK', 'RA Assalafush Sholihun', 'Swasta', '1234567890121314', '1234567801191919', 'Kp. Selagedang', 'Sukalilah', '44186', 'Cibatu', 'Garut', 'Jawa Barat', '27272727272727277', '2022-09-01', '- Pilih -', '', '- Pilih -', '', '', '', '', '', '', '', '', 'Belum', '2022-09-26 10:58:49', '1664164729teknik.png', '1664164729Diagram Konteks.png', '1664164729Diagram Konteks.png', '1664164729Diagram Konteks.png', '1664164729Diagram Konteks.png', '1664164729Diagram Konteks.png', '1664164729Diagram Konteks.png', '2022/2023'),
('7c88715f-0f65-4d79-a5a4-ca10619ced66', 'Listiana', 'Listi', '115511551155', '3205125209900000', 'Garut', '2000-10-16', 'Perempuan', 'Islam', 'Indonesia', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '1717171717', 'O Komarudin', '1818181818', 'SD', 'Pedagang', 'Rp. 1.000.000 - Rp. ', '088889999966', 'Syariah', '1717171717', 'SMA', 'Almarhum', '< Rp. 500.000', '08568998989', 'Orang Tua', 'Tidak', 5, 0, 0, 'Indonesia', 'A', 130, 40, '< 1 km', 'Jalan Kaki', 'RA', 'RA Assalafush Sholihun', 'Swasta', '1234567890121314', '1234567801191919', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '27272727272727277', '2000-02-20', '- Pilih -', '', '- Pilih -', '', '', '', '', '', '', '', '', 'Belum', '2022-05-21 20:09:29', '1653138569IMG-20200731-WA0087.jpg', '16531385691646575601foto.png', '16531385691646575601foto.png', '16531385691646575601foto.png', '16531385691646575601foto.png', '16531385691646575601foto.png', '16531385691646575601foto.png', '2022/2023'),
('804e932d-1a7b-420b-8b46-bf99fcce76b0', 'Yazqi Azbin', 'Ramadhan', '101010101010', '987654321987', 'Garut', '2003-10-10', 'Laki-laki', 'Islam', 'Indonesia', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '1919191919119191919', 'Ramdan', '2222222222222222', 'SMA', 'Pengusaha/Wiraswasta', 'Rp. 1.000.000 - Rp. ', '085864846840', 'Desri Siti Maesaroh', '333333333333333333', 'D3', 'Tidak Bekerja', '< Rp. 500.000', '0877777777777', 'Orang Tua', 'Tidak', 2, 0, 0, 'Indonesia', 'B', 120, 51, '< 1 km', 'Jalan Kaki', 'RA', 'RA Assalafush Sholihun', 'Swasta', '1234567890121314', '1234567801191919', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '282828228282828', '2000-12-20', '- Pilih -', '', '- Pilih -', '', '', '', '', '', '', '', '', 'Sudah', '2022-05-21 19:36:42', '1653136602IMG-20200729-WA0017.jpg', '16531366021646575601foto.png', '16531366021646575601foto.png', '16531366021646575601foto.png', '16531366021646575601foto.png', '16531366021646575601foto.png', '16531366021646575601foto.png', '2022/2023'),
('8e74c571-37b3-4d41-a4f4-20380b8638b4', 'Yasmin Nasyita Ramdhani', 'Yasmin', '11111111133333333333', '22222223333333', 'Garut', '2000-10-18', 'Perempuan', 'Islam', 'Indonesia', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '1919191919119191919', 'Ramdan', '15151515151515', 'SMA', 'Pengusaha/Wiraswasta', 'Rp. 1.000.000 - Rp. ', '088889999966', 'Desri Siti Maesaroh', '333333333333333333', 'D3', 'Tidak Bekerja', '< Rp. 500.000', '0877777777777', 'Orang Tua', 'Tidak', 2, 0, 0, 'Indonesia', 'A', 100, 43, '< 1 km', 'Jalan Kaki', 'RA', 'RA Assalafush Sholihun', 'Swasta', '1234567890121314', '1234567801191919', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '27272727272727277', '2000-10-10', '- Pilih -', '', '- Pilih -', '', '', '', '', '', '', '', '', 'Sudah', '2022-05-21 19:53:39', '1653137619IMG-20200721-WA0024.jpeg', '16531376191646575601foto.png', '16531376191646575601foto.png', '16531376191646575601foto.png', '16531376191646575601foto.png', '16531376191646575601foto.png', '16531376191646575601foto.png', '2022/2023'),
('9781195a-0468-4b6e-86ba-7df927682d7a', 'jojo jojojo', 'jojo', '00000000000', '0000000001', 'Jakarta', '2012-06-23', 'Laki-laki', 'Kristen', 'Indonesia', 'cibatu', 'Sukalilah', '44186', 'Cibatu', 'Garut', 'Jawa Barat', '000000000002', 'nono', '00000000003', 'S3', 'TN1/Polisi', '>Rp. 5.000.000', '000000000008', 'catrin', '77777777777', 'S2', 'Dokter/Bidan/Perawat', 'Rp. 3.000.000 - Rp. ', '5555555555555', 'Orang Tua', 'Tidak', 0, 0, 0, 'Indonesia', 'O', 140, 45, '5-10 km', 'Mobil Pribadi', 'TK', 'Assyidikiah', 'Negeri', '77777777', '888888888', 'cibatu', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '0909000999009', '2021-12-09', '- Pilih -', '', '- Pilih -', '', '', '', '', '', '', '', '', 'Belum', '2022-08-14 20:45:29', '1660484729IMG_20220803_115947_188.jpg', '1660484729IMG_20220803_115947_188.jpg', '1660484729IMG_20220803_115947_188.jpg', '1660484729IMG_20220803_115947_188.jpg', '1660484729IMG_20220803_115947_188.jpg', '1660484729IMG_20220803_115947_188.jpg', '1660484729IMG_20220803_115947_188.jpg', '2022/2023'),
('f3fe6630-6c4f-435d-8884-474008b055bd', 'Siti Rashyia Aprilia Budiman', 'Caca', '11111111133333333333', '3205125209900000', 'Karawang', '2000-10-12', 'Perempuan', 'Islam', 'Indonesia', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '111166669999', 'Deden Budiman', '15151515151515', 'SMA', 'Pedagang', 'Rp. 1.000.000 - Rp. ', '088889999966', 'Susi Susilawati', '16161616161616', 'D3', 'Dokter/Bidan/Perawat', 'Rp. 2.000.000 - Rp. ', '085555666111', 'Orang Tua', 'Tidak', 2, 0, 0, 'Indonesia', 'B', 140, 40, '< 1 km', 'Jalan Kaki', 'RA', 'RA Assalafush Sholihun', 'Swasta', '1234567890121314', '1234567801191919', 'Kp. Selagedang', 'Sukalilah', '44185', 'Cibatu', 'Garut', 'Jawa Barat', '333337777771111', '2000-02-23', '- Pilih -', '', '- Pilih -', '', '', '', '', '', '', '', '', 'Belum', '2022-05-21 20:29:02', '1653139742IMG-20200901-WA0003.jpg', '16531397421646575601foto.png', '16531397421646575601foto.png', '16531397421646575601foto.png', '16531397421646575601foto.png', '16531397421646575601foto.png', '16531397421646575601foto.png', '2022/2023');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajar`
--

CREATE TABLE `tb_pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `lulusan` varchar(100) DEFAULT NULL,
  `mata_pelajaran` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pengajar`
--

INSERT INTO `tb_pengajar` (`id_pengajar`, `nama_lengkap`, `jenis_kelamin`, `lulusan`, `mata_pelajaran`, `jabatan`, `foto`) VALUES
(3, 'Apip Abdul Latif, S.Ag', 'Laki-laki', 'S1', 'Kp. Selagedang RT 01 RW 03', 'Kepala Sekolah', '1652886961APIP.jpeg'),
(4, 'Yani Suryani, S.Pd', 'Perempuan', 'S1', 'Kp. Selagedang RT 02 RW 03', 'Guru ', '1652887027yanii.jpeg'),
(5, 'Eneng Siti Barokah,S.Pd.I', 'Perempuan', 'S1', 'Kp. Selagedang RT 01 RW 03', 'Guru ', '1652887093ENENG.jpeg'),
(6, 'Heksa Kurnia, S.Pd.I', 'Perempuan', 'S1', 'Perum Bandrek Indah', 'Guru', '1652887148HEKSAA 3.jpg'),
(7, 'Eti Rohaeti', 'Perempuan', 'SMA', 'Kp. Selagedang RT 01 RW 03', 'Guru ', '1652887180Eti Rohaeti.jpg'),
(8, 'Leli Hayati, S.Pd.I', 'Perempuan', 'S1', 'Kp. Selagedang RT 01 RW 03', 'Guru ', '1652887221Leli ASS.jpeg'),
(9, 'Sirli Nuradilah', 'Perempuan', 'SMA', 'Kp. Kubang', 'Guru ', '16529657631651754242_4df19b066fe117725352.jpg'),
(10, 'Ilma Wiladikal Huda, S.Pd', 'Laki-laki', 'S1', 'Kp. Kubang', 'Guru ', '16529657861651754242_4df19b066fe117725352.jpg'),
(11, 'Irvan Rhamdani', 'Laki-laki', 'SMA', 'Kp. Selagedang RT 01 RW 03', 'Guru ', '1652887271Irvan.jpg'),
(13, 'Ucu Nunur N.,S.Pd.I', 'Perempuan', 'S1', 'Pendidikan Agama', 'TU', '16529658551651754242_4df19b066fe117725352.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('Administrator','Calon Siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'Admin E-PPDB', 'admin', 'admin', 'Administrator'),
(5, 'Reni Siti Nurjanah', 'reninurj_', '12345', 'Administrator'),
(6, 'Reni Nurjanah', 'nurjanah_', '12345', 'Calon Siswa'),
(7, 'Firman Seftiawan', 'firman_', '12345', 'Calon Siswa'),
(8, 'yasmin nashita', 'yasmin', '12345', 'Calon Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prestasi`
--

CREATE TABLE `tb_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama_prestasi` varchar(100) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prestasi`
--

INSERT INTO `tb_prestasi` (`id_prestasi`, `nama_prestasi`, `tingkat`, `gambar`) VALUES
(1, 'Prestasi 1', 'Keccamatan', '1665469374prestasi1.jpg'),
(2, 'Prestasi 2', 'Keccamatan', '1665469501prestasi3.jpeg'),
(3, 'Prestasi 3', 'Kabupaten', '1665469692prestasi4.jpeg'),
(4, 'Prestasi 4', 'Kabupaten', '1665469718prestasi5.jpeg'),
(5, 'Prestasi 5', 'Nasional', '1665469752prestasi7.jpeg'),
(7, 'Prestasi 6', 'Nasional', '1665469854prestasi8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `akreditasi` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `nsm` varchar(20) DEFAULT NULL,
  `npsn` varchar(20) DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_rekening` varchar(20) DEFAULT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `no_sk_pendirian` varchar(50) DEFAULT NULL,
  `tanggal_sk_pendirian` date DEFAULT NULL,
  `no_izin_operasional` varchar(50) DEFAULT NULL,
  `tanggal_izin_operasional` date DEFAULT NULL,
  `no_sk_akreditasi` varchar(50) DEFAULT NULL,
  `tanggal_sk_akreditasi` date DEFAULT NULL,
  `nama_kepala` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `nama_yayasan` varchar(50) DEFAULT NULL,
  `no_sk_kemkumham` varchar(50) DEFAULT NULL,
  `tanggal_sk_kemkumham` date DEFAULT NULL,
  `akte_notaris_yayasan` varchar(255) DEFAULT NULL,
  `status_tanah` varchar(50) DEFAULT NULL,
  `luas_tanah` varchar(20) DEFAULT NULL,
  `status_bangunan` varchar(50) DEFAULT NULL,
  `luas_bangunan` varchar(50) DEFAULT NULL,
  `no_wa` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `akreditasi`, `deskripsi`, `nsm`, `npsn`, `npwp`, `latitude`, `longitude`, `email`, `no_rekening`, `bank`, `no_sk_pendirian`, `tanggal_sk_pendirian`, `no_izin_operasional`, `tanggal_izin_operasional`, `no_sk_akreditasi`, `tanggal_sk_akreditasi`, `nama_kepala`, `no_telepon`, `nama_yayasan`, `no_sk_kemkumham`, `tanggal_sk_kemkumham`, `akte_notaris_yayasan`, `status_tanah`, `luas_tanah`, `status_bangunan`, `luas_bangunan`, `no_wa`) VALUES
(123, 'MI Assalafush Sholihun', 'Kp. Selagedang Rt 01/03. Desa Sukalilah Kecamatan Cibatu, Kabupaten Garut 44185', 'B', 'MI Assalafush Sholihun Cibatu Garut yang beralamat di Kp. Selagedang RT 01 RW 03 Desa Sukalilah Kecamatan Cibatu Kabuaten Garut berdiri pada tahun 2014. Pada tahun 2016 MI Assalafush Sholihun memiliki Izin operasional dengan nomor statistik 111232050311. Selanjutnya pada tahun 2018 MI Assalafush Sholihun Cibatu mengikuti program Akreditasi sekolah dan mendapatkan nilai B dari BAN PT.', '111.2.32.05.0311', '69956148', '70.925.030.2-443.000', '-7,055627 (Latitude)', '108,005264 (Longitud', 'mi.assalafush@gmail.com', '0100761068100', 'BJB', '0129/IPM/2016', '2016-06-20', '385 tahun 2016', '2016-06-20', '02.00/203/SK/BAN-SM/XII/2018', '2018-12-04', 'Apip Abdul Latif, S.Ag., M.Pd', '085223645036', 'Yayasan Assalafush Sholihun', 'AHU-06423.50.10.2014', '2014-09-22', 'Intan Rubyati Dewi, S.H.,M.Kn : 830/24-6-2014', 'Wakaf', '2810 m2', 'Yayasan', '6  Kelas @ 48 m2 ', 83845405765);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sesi`
--

CREATE TABLE `tb_sesi` (
  `id_sesi` int(11) NOT NULL,
  `sesi` varchar(30) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `kuota_pendaftaran` int(11) DEFAULT 45
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sesi`
--

INSERT INTO `tb_sesi` (`id_sesi`, `sesi`, `tgl_awal`, `tgl_akhir`, `kuota_pendaftaran`) VALUES
(1, 'Gelombang 1', '2022-04-01', '2022-10-31', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun`
--

CREATE TABLE `tb_tahun` (
  `id_tahun` varchar(10) NOT NULL,
  `t_ajaran` varchar(40) NOT NULL,
  `status` enum('Aktif','Non Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tahun`
--

INSERT INTO `tb_tahun` (`id_tahun`, `t_ajaran`, `status`) VALUES
('2020/2021', 'Tahun Ajaran 2020/2021', 'Non Aktif'),
('2022/2023', 'Tahun Ajaran 2022/2023', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_sesi`
--
ALTER TABLE `tb_sesi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- Indexes for table `tb_tahun`
--
ALTER TABLE `tb_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_prestasi`
--
ALTER TABLE `tb_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tb_sesi`
--
ALTER TABLE `tb_sesi`
  MODIFY `id_sesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
