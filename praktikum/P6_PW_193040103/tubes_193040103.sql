-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 03:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040103`
--

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `Judul_Buku` varchar(100) NOT NULL,
  `Penerbit` varchar(100) NOT NULL,
  `Jumlah_Halaman` int(11) NOT NULL,
  `Penulis` varchar(100) NOT NULL,
  `Tahun_Terbit` int(11) NOT NULL,
  `Sinopsis` longtext NOT NULL,
  `Harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novel`
--

INSERT INTO `novel` (`id`, `gambar`, `Judul_Buku`, `Penerbit`, `Jumlah_Halaman`, `Penulis`, `Tahun_Terbit`, `Sinopsis`, `Harga`) VALUES
(1, 'london.jpg', 'London', 'PT. Gramedia Pustaka Utama	', 327, 'Windry Ramadhina', 0, 'London, sebuah novel fiksi yang menceritakan seorang laki-laki yang berprofesi sebagai penulis novel romance, yaitu bernama Gilang. Gilang memiliki sahabat bernama Ning, seorang yang cinta dengan seni rupa. Gilang dan Ning telah bersahabat selama empat belas tahun. Sahabat menjadi cinta, itulah yang Gilang rasakan. Ning yang memilih pergi ke London, Inggris demi mengejar impiannya untuk sekolah dan bekerja di sebuah galeri seni ternyata membuat rasa rindu yang amat dalam menerjang lubuk hati Gilang.Pada suatu malam, di pub Jakarta, Gilang memberitahukan keinginannya kepada teman-temannya bahwa akan menyusul Ning ke London. Niatan dia menyusul Ning ke London adalah untuk menyatakan cintanya yang selama ini hanya ia sembunyikan. Namun, menyatakan cinta tak semudah yang itu. Justru Kota London mengarahkannya kepada seorang wanita misterius yang berambut ikal, yang disebutnya Goldilocks.', '49.000.00'),
(2, 'maze1.jpg', 'The Maze Runner', 'Mizan Fantasi', 478, 'James Dashner', 2009, 'Setiap hari mereka harus berlari. Menyusuri lorong Maze yang berkelok-kelok di luar dinding Glade, tempat mereka tinggal, hingga senja tiba. Dan, ketika kegelapan turun, para pelari harus sudah ada di dalam Glade. Ya, pada saat itulah Griever, monster buas dan ganas, tak segan menerkam siapa saja yang masih berkeliaran di dalam Maze. Mereka bukan sekadar berlari. Itu cara mereka bertahan hidup. Dengan berlari mereka berharap menemukan jalan keluar dari tempat terkutuk itu. Keluar untuk kembali pulang menjumpai keluarga mereka. Namun, lintasan Maze selalu berubah-ubah dari hari ke hari. Rasanya, mustahil bisa keluar dari tempat itu. Suatu hari pintu batu pelindung mereka tak lagi turun menutup. Griever-griever itu bisa menyeruduk masuk kapan saja. Setiap hari, satu anak dibawa pergi dan lenyap. Satu-satunya jalan adalah bergegas keluar dari tempat itu. Namun, mereka harus melewati Maze yang membingungkan dengan sejumlah monster mengerikan di sana. Beranikah para pelari lari keluar dengan nyawa sebagai taruhannnya? Atau, akankah justru lebih baik tetap berada di dalam menanti pencabut nyawa sambil berharap mukjizat datang tiba-tiba?.', '55.000.00'),
(3, 'maze2.jpg', 'The Scorch Trials', 'Mizan Fantasi', 441, 'James Dashner', 2010, 'Meski sudah keluar dari Maze, tidak membuat Thomas dan teman-temannya merasa aman, dan semua pertanyaan mereka terjawab. Misteri belum semua terpecahkan, justru tantangan baru harus mereka hadapi. Terisolasi dalam satu ruangan, mengetahui bahwa Teresa dipisahkan dari mereka dan diberi label pengkhianat, munculnya sosok baru yakni Aris, dengan label Grup B, membuat sedikit pengetahuan mereka tentang dunia luar Glade terkuak. WICKED membuat dua grup bagi mereka, dengan perlakuan yang sama namun berbeda gender. Grup A, yang kesemuanya laki-laki dengan Teresa sebagai pengecualian, sementara di tempat lain ada pula Grup B yang dihuni oleh perempuan dengan Aris sebagai pengecualian. Mengejutkan, Aris memiliki kemampuan yang sama dengan Thomas yakni mampu berbicara dengan telepati. Dan terputusnya telepati Thomas dengan Teresa, membuat Thomas sedikit kacau. Situasi dalam tempat itu cukup menegangkan. Tidak ada makanan, tidak ada petunjuk mengenai apa yang sebenarnya terjadi. Lantas kemunculan seseorang dari WICKED membuka babak baru petualangan mereka. Tikus Botak--begitu julukannya--membagikan informasi bahwa mereka semua terjangkit virus berbahaya flare. Dikatakan bahwa mereka semua telah lolos dalam fase pertama dan harus melalui fase kedua untuk bisa disembuhkan. Dengan sebuah portal yang dinamakan dengan Flat Trans, mereka semua mendapatkan misi untuk melalui tempat yang dinamakan The Scorch Trial, mengarungi perjalanan 100 mil ke utara selama dua minggu untuk menyelamatkan diri, menuju tempat yang dijanjikan.', '55.000.00'),
(4, 'maze3.jpg', 'The Death Cure', 'Mizan Fantasi', 438, 'James Dashner', 2014, 'Thomas berhasil melewati Scorch, namun kini, yang ada di hadapannya hanyalah ruangan putih, kosong, minim perabot di dalam sana. Thomas dikurung selama beberapa minggu yang itu membuatnya frustasi. Terbelih jika ia memikirkan apa yang sudah dilewatinya sejauh ini. Hanya bau tubuhnya saja yang membuatnya waras, setidaknya itu membuat ia masih menyadari bahwa dirinya adalah manusia. Lalu Tikus Botak datang mengunjunginya, mengumpulkannya dengan para subjek yang lain, teman-temannya. Ada Newt, Minho, Frypan, dan bahkan Teresa di sana. WICKED memberitahukan bahwa dalam kelompok ini, ada orang-orang yang kebal virus dan ada yang tidak. Sebagian besar teman Thomas dan dirinya sendiri termasuk ke dalam Manusia Kebal, tapi tidak untuk Newt. Tikus Botak mengatakan bahwa WICKED akan memberikan pilihan kepada para subjek untuk mengikuti prosedur pengembalian ingatan atau tidak. Di sini, Thomas, Newt, dan Minho menolak. Teresa, Frypan, dan beberapa yang lain memutuskan untuk mengikuti prosedur. Namun WICKED berubah pikiran, dan memaksa semua orang untuk mengikuti prosedur ini. Thomas dipaksa untuk tunduk pada erintah WICKED. Brenda berhasil membujuk Tikus Botak untuk menyerahkan tugas itu kepadanya. Tapi ini hanyalah tipu muslihat Brenda untuk menyelamatkan Thomas. Ia mengatakan bahwa Jorge akan siap mengantar mereka keluar dai WICKED. Dalam upaya menuju hanggar pesawat, mereka bertemu dengan Minho dan Newt yang juga berniat untuk melarikan diri.', '57.000.00'),
(5, 'pemimpi.jpg', 'Sang Pemimpi', 'PT. Bentang Pustaka', 292, 'Andrea Hirata', 2008, 'Sang Pemimpi masih trilogi dari novel Laskar Pelangi, dari Andre Hirata. Novel ini mengusung tema persahabatan dan perjuangan dalam mengarungi kehidupan serta kepercayaan terhadap kekuatan sebuah mimpi. Dalam novelnya menceritakan tentang sebuah kehidupan tiga orang anak Melayu Belitong, yaitu Arai, Ikal, dan Jimbron yang penuh dengan perjuangan, tantangan, dan lika-liku kehidupan yang memesona, sehingga kita akan yakin adanya kekuatan cinta, percaya pada kekuatan mimpi, dan kekuasaan Allah.swt. Mereka bertiga, Ikal, Jimbron, dan Arai berjuang untuk menuntut ilmu di SMA Negeri Bukan Main yang letaknya sangat jauh dari kampungnya. Mereka tinggal di los pasar kumuh Magai, Pulau Belitong, bekerja sebagai kuli ngambat atau kuli ikan, pekerjaan itu mereka lakukan untuk bertahan hidup sembari menuntut ilmu. Pak Balia, sosok orang baik dan bijaksana, beliau adalah kepala sekolah dan juga sebagai pengajar kesusastraan di SMA Negeri Bukan Main. Ada juga sosok antagonis dalam novel ini, yaitu Pak Mustar, beliau ini ditakuti para siswa.', '50.000.00'),
(6, 'menara.jpg', 'Negeri 5 Menara', 'PT. Gramedia Pustaka Utama', 423, 'Ahmad Fuadi', 2009, 'Novel 5 Menara, karya sastra miliki Ahmad Fuadi yang telah diangkat ke film layar lebar. Mengusung tema religius dan moralitas. Tokoh utama dalam novel ini bernama Alif. Alif lahir di tanah Minangkabau, ia dilahirkan di pinggir Danau Maninjau dan tidak pernah ia menginjak tanah di luar Minangkabau. Sejak kecil, Alif memiliki cita-cita menjadi B. J. Habibie. Karena itu ia sudah berencana setelah lulus SMP ingin melanjutkan pendidikan ke SMU negeri di Padang, dengan harapan dapat memudahkan langkahnya untuk menorobos kuliah di jurusan yang sesuai. Di sisi lain, Amak Alif menginginkan ia jadi penerus Buya Hamka, membuat mimpi dan harapan Alif kandas. Alif diberi pilihan, ingin sekolah agama atau menuntut ilmu di pondok pesantren. Sempat kesal, namun akhirnya Alif ikhlas, karena ia tak ingin mengecawakan harapan orang tuanya, terutama ibu. Alif pun menuruti keinginan ibunya dan masuk pondok.Alif mendapatkan saran dari pamannya yang di Cairo untuk melanjutkan di pondok yang ada di Jawa Timur, yaitu Pondok Madani (Pondok Pesantren Modern Gontor).', '54.000.00'),
(7, 'hunger1.jpg', 'The Hunger Games', 'PT Gramedia Pustaka Utama', 408, 'Suzanne Collins', 2008, 'Di masa depan, Amerika Utara berubah menjadi sebuah negara yang bernama Panem. Sebelumnya, di Negara ini sempat terjadi pemberontakan besar, yang berujung pada penghancuran salah satu distrik di Panem, distrik 13, sebagai peringatan bagi para pemberontak. Setelah berdamai, Capitol ( Ibukota Panem, sering ditujukan juga sebagai pemerintah Panem ) memutuskan untuk mengadakan sebuah acara tahunan, dimana dua anak remaja berusia diantara 12 – 18 tahun dari setiap distrik dikumpulkan di suatu tempat untuk kemudian mencoba bertahan hidup dan saling membunuh hingga tersisa hanya satu pemenang saja, Hunger Games. Acara itu disiarkan di televise ke seluruh distrik, dan seluruh penduduk Negara Panem wajib menontonnya untuk mengingatkan kekuatan Capitol. Katniss Everdeen, gadis berusia 16 tahun yang tinggal di tempat paling kumuh di distrik 12 bersama ibu dan adik perempuannya, Primrose Everdeen. Distrik 12 merupakan distrik penghasil batubara di Panem, ayah Katniss meninggal dalam salah satu kecelakaan tambang batubara. Sejak kematian ayahnya tersebut, Katniss mengambil alih sebagai kepala keluarga. Setiap hari ia berburu bersama sahabat laki-lakinya, Gale Hawthrone. Pada saat pengambilan undian Hunger Games ke-74, nama Primrose terpilih sebagai perserta. Secara spontan, Katniss bersedia menggantikan posisi adiknya. Bersama anak laki-laki terpilih dari distrik 12 bernama Peeta Mellark, Katniss menyuguhkan acara The Hunger Games yang tak terlupakan untuk warga Panem.', '60.000.00'),
(8, 'hunger2.jpg', 'Catching Fire	', 'Gramedia Pustaka Utama', 424, 'Suzanne Collins', 2009, 'Buku ini menceritakan kelanjutan perjuangan Katniss Everdeen setelah menang dalam The Hunger Games yang ke 74. Katniss Everdeen memenangkan Hunger Games bersama Peeta Meelark, yang seharusnya hanya dimenangkan oleh satu orang saja. Setelah berakhirnya permainan itu, memicu muculnya pemberontakan-pemberontakan di beberapa distrik. Rakyat meminta kepada Presiden Snow untuk segera menghapuskan permainan Hunger Games secepatnya. Ternyata Pemberontakan di beberapa distrik tersebut memicu kemarahan dari Presiden Snow. Kemudian Presiden Snow bertemu dengan Katniss di rumahnya dan melakukan perbincangan dengannya. Dalam perbincangannya tersebut, Presiden Snow meminta Katniss untuk bisa meredamkan pemberontakan dibeberapa distrik dalam tur kemenangannya. Dalam tur kemenenangannya itu, Katniss akan mengunjungi beberapa distrik untuk merayakan kemenangannya bersama Peeta Meelark. Dalam tur kemenangannya, Presiden Snow meminta Katniss untuk bisa meyakinkan rakyat Capitol untuk tidak memberontak kepada pemerintah. Atau, Presiden Snow akan mengancam membunuh ibu, adik perempuannya, bahkan Gale dan Juga Peeta', '65.000.00'),
(9, 'hunger3.jpg', 'Mockingjay', 'PT. Gramedia Pustaka Utama', 432, 'Suzanne Collins', 2010, 'Mockingjay, serial terakhir dari trilogi the Hunger Games adalah sebuah novel penutup dari rentetan cerita panjang yang berakhir dengan happy ending. Kisah ini berawal dari sang tokoh utama, Katniss Everdeen, gadis 17 tahun yang selamat dari Hunger Games, dua kali. Menilik novel-novel sebelumnya, The Hunger Games menceritakan Quartel Quell, sebuah tradisi yang dilakukan setiap puluhan tahun sekali untuk bertarung, adu kekuatan, dan bahkan saling membunuh satu sama lain untuk bisa bertahan hidup. Orang-orang seperti Katniss adalah orang-orang yang tidak beruntung sebagai perwakillan dari tiap-tiap distrik yang ada. Pertarungan ini berisikan dua perwakillan orang dari tiap-tiap distrik dengan jumlah total ada 13 distrik atau lebih tepatnya 12 distrik jika sekarang. Karena pada distrik 13 sudah dianggap hilang akibat kotanya yang tampak mati dan hancur lebur semua bangunannya. Berasal dari distrik 12, Katniss tidak bejuang sendirian, Peeta, seorang yang pandai melukis dan pembuat roti menjadi kawan Katniss dalam perjuangannya di medan Quartel Quell.', '63.000.00'),
(10, 'laskar.jpg', 'Laskar Pelangi', 'Yogyakarta: Bentang Pustaka', 529, 'Andrea Hirata', 2010, 'Cerita terjadi di desa Gantung, Kabupaten Gantung, Belitung Timur. Dimulai ketika sekolah Muhammadiyah terancam akan dibubarkan oleh Depdikbud Sumsel jikalau tidak mencapai siswa baru sejumlah 10 anak. Ketika itu baru 9 anak yang menghadiri upacara pembukaan, akan tetapi tepat ketika Pak Harfan, sang kepala sekolah, hendak berpidato menutup sekolah, Harun dan ibunya datang untuk mendaftarkan diri di sekolah kecil itu. Mulai darisanalah dimulai cerita mereka. Mulai dari penempatan tempat duduk, pertemuan mereka dengan Pak Harfan, perkenalan mereka yang luar biasa di mana A Kiong yang malah cengar-cengir ketika ditanyakan namanya oleh guru mereka, Bu Mus. Kejadian bodoh yang dilakukan oleh Borek, pemilihan ketua kelas yang diprotes keras oleh Kucai, kejadian ditemukannya bakat luar biasa Mahar, pengalaman cinta pertama Ikal, sampai pertaruhan nyawa Lintang yang mengayuh sepeda 80 km pulang pergi dari rumahnya ke sekolah!', '51.000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
