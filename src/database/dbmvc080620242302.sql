-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 06:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `aktivitas` text DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `lokasi` text DEFAULT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `nama`, `deskripsi`, `aktivitas`, `fasilitas`, `alamat`, `telepon`, `email`, `lokasi`, `gambar`) VALUES
(21, 'Candi Borobudur', 'Candi Borobudur adalah sebuah candi Buddha yang terletak di Magelang, Jawa Tengah, Indonesia. Candi ini merupakan salah satu monumen Buddha terbesar di dunia dan juga situs Warisan Dunia UNESCO. Dibangun pada abad ke-8 dan ke-9 Masehi oleh Dinasti Syailendra, Borobudur terdiri dari sembilan platform bertingkat, enam berbentuk persegi dan tiga berbentuk lingkaran, dengan sebuah kubah besar di puncaknya.\r\n\r\nStruktur candi ini dihiasi dengan lebih dari 2.600 panel relief dan 504 arca Buddha. Relief tersebut menceritakan kisah-kisah dari kehidupan Buddha dan ajaran-ajarannya, serta berbagai cerita dari kehidupan sehari-hari masyarakat pada masa itu. Borobudur juga dirancang sebagai mandala yang melambangkan kosmologi Buddha dan berfungsi sebagai tempat ziarah bagi umat Buddha.\r\n\r\nCandi Borobudur memiliki tata letak yang mencerminkan perjalanan spiritual, dimulai dari dunia keinginan di dasar candi, melalui dunia berbentuk di tengah, dan mencapai dunia tanpa bentuk di puncak. Pemandangan dari puncak candi menawarkan panorama yang menakjubkan dari pedesaan sekitarnya, termasuk Gunung Merapi yang megah di kejauhan.', 'Tur Sejarah dan Budaya:\r\nMengikuti tur dengan pemandu yang dapat memberikan penjelasan mendalam tentang sejarah, arsitektur, dan relief-relief yang ada di candi. Pemandu biasanya menjelaskan makna di balik relief dan cerita dari ajaran Buddha yang terukir di dinding candi.\r\n\r\nFotografi:\r\nMengambil foto di berbagai sudut candi. Keindahan arsitektur candi dan latar belakang alam yang memukau menjadikan Borobudur tempat yang sangat fotogenik.\r\n\r\nMeditasi:\r\nMelakukan meditasi di area candi yang tenang. Banyak pengunjung datang untuk merasakan ketenangan dan spiritualitas dari lingkungan candi yang damai.', 'Pusat Informasi:\r\nTersedia pusat informasi untuk membantu pengunjung dengan peta, brosur, dan informasi umum tentang candi dan aktivitas yang bisa dilakukan.\r\n\r\nPemandu Wisata:\r\nLayanan pemandu wisata yang berpengalaman tersedia untuk memberikan tur berpemandu, menjelaskan sejarah, arsitektur, dan cerita di balik relief-relief candi.\r\n\r\nToilet Umum:\r\nToilet yang bersih dan terawat tersedia di beberapa lokasi di sekitar kompleks candi.', 'Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah', 293788266, 'borobudurpark@email.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15818.790274517898!2d110.18529713335613!3d-7.6078521405600705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8cf009a7d697%3A0xdd34334744dc3cb!2sCandi%20Borobudur!5e0!3m2!1sid!2sid!4v1717076934336!5m2!1sid!2sid', 'uploads/destinasi/borobudur.jpg'),
(22, 'Garuda Wisnu Kencana', 'Garuda Wisnu Kencana (GWK) adalah sebuah kompleks seni dan budaya yang terletak di Bali, Indonesia. Salah satu ikon pariwisata Pulau Dewata ini memiliki patung Garuda Wisnu Kencana yang megah, yang merupakan perwujudan dari dewa Hindu, Wisnu, bersama dengan wahana permainan dan taman. Patung ini memiliki tinggi sekitar 121 meter, menjadikannya salah satu patung tertinggi di dunia. Selain menjadi daya tarik wisata, kompleks ini juga menjadi tempat untuk berbagai acara seni dan budaya, serta konser musik yang menarik wisatawan dari seluruh dunia.', 'Di Garuda Wisnu Kencana, pengunjung dapat menikmati beragam aktivitas, termasuk:\r\n\r\nMelihat dan berfoto dengan Patung Garuda Wisnu Kencana: Patung ini merupakan landmark utama kompleks dan menawarkan pemandangan yang mengagumkan.\r\n\r\nMenyaksikan pertunjukan seni dan budaya: Ada berbagai pertunjukan tari tradisional dan musik Bali yang dapat dinikmati di tempat ini, memberikan pengalaman budaya yang kaya.\r\n\r\nMenjelajahi wahana permainan: Kompleks ini memiliki berbagai wahana permainan yang cocok untuk keluarga, seperti Flying Fox dan segala sesuatu yang menarik bagi pecinta petualangan.\r\n\r\n', 'Di Garuda Wisnu Kencana, pengunjung dapat menikmati beragam fasilitas yang mencakup:\r\n\r\nArea Parkir: Terdapat area parkir yang luas untuk kendaraan pribadi dan bus wisata.\r\n\r\nSentra Kuliner: Terdapat berbagai warung makan dan kafe yang menyajikan hidangan lokal dan internasional untuk memenuhi kebutuhan kuliner pengunjung.\r\n\r\nToko Suvenir: Toko-toko suvenir yang menjual berbagai barang kerajinan lokal, patung miniatur Garuda Wisnu Kencana, kaos, dan barang memorabilia lainnya.', 'Jl. Raya Uluwatu, Ungasan, Kec. Kuta Sel., Kabupaten Badung, Bali 80364', 361700808, 'gwkbali@email.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.7406557843447!2d115.16502367321506!3d-8.810417490108984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd244cf54e1dec7%3A0x1988663e064f5a51!2sTaman%20Budaya%20Garuda%20Wisnu%20Kencana!5e0!3m2!1sid!2sid!4v1717079859795!5m2!1sid!2sid', 'uploads/destinasi/gwk-bali.jpg'),
(23, 'Danau Toba', 'Danau Toba adalah sebuah danau vulkanik yang terletak di Sumatera Utara, Indonesia. Danau ini merupakan danau kawah terbesar di dunia, terbentuk dari letusan supervulkan sekitar 75.000 tahun yang lalu. Selain menjadi salah satu danau terbesar di dunia, Danau Toba juga merupakan salah satu daya tarik wisata utama di Indonesia. Dikelilingi oleh pegunungan yang hijau dan pemandangan alam yang memukau, danau ini menawarkan pengalaman wisata yang menakjubkan bagi pengunjung. Pulau Samosir, sebuah pulau di tengah Danau Toba, juga menjadi tujuan wisata yang populer dengan budaya Bataknya yang kaya dan keindahan alamnya yang memesona. Danau Toba tidak hanya menawarkan pemandangan alam yang indah, tetapi juga merupakan situs sejarah dan budaya yang penting bagi masyarakat lokal dan pengunjung yang tertarik dengan warisan budaya Indonesia.', 'Di Danau Toba, pengunjung dapat menikmati berbagai aktivitas yang menarik, termasuk:\r\n\r\nMenyewa Perahu: Menyewa perahu tradisional atau modern untuk menikmati pemandangan indah Danau Toba dari tengah danau, atau menjelajahi pulau-pulau kecil di sekitarnya.\r\n\r\nBerendam di Air Panas: Mengunjungi air panas alami yang tersebar di sekitar Danau Toba, seperti di Pangururan atau Tarabunga, untuk merilekskan tubuh dan menikmati pemandangan alam sekitarnya.\r\n\r\nMengunjungi Pulau Samosir: Berjalan-jalan di sekitar Pulau Samosir untuk mengeksplorasi desa-desa tradisional Batak, mengunjungi makam raja-raja Batak, dan menikmati keindahan alam serta kebudayaan lokal yang kaya.', 'Di sekitar Danau Toba, terdapat berbagai fasilitas yang mendukung pengalaman wisata, antara lain:\r\n\r\nAkomodasi: Terdapat berbagai pilihan akomodasi mulai dari hotel, resort, vila, hingga penginapan sederhana yang menawarkan berbagai fasilitas sesuai dengan kebutuhan dan anggaran.\r\n\r\nRestoran dan Warung Makan: Terdapat banyak restoran dan warung makan di sekitar danau yang menyajikan masakan lokal maupun internasional, memungkinkan pengunjung untuk menikmati kuliner khas Batak dan berbagai hidangan lainnya.\r\n\r\nTransportasi: Terdapat layanan transportasi umum seperti bus, taksi, dan ojek yang memudahkan pengunjung untuk berkeliling dan menjangkau berbagai destinasi wisata di sekitar Danau Toba.', 'Sumatera Utara', 0, 'danautoba@email.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1020332.6518813769!2d97.65249275104182!3d2.61157945524545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031de07a843b6ad%3A0xc018edffa69c0d05!2sDanau%20Toba!5e0!3m2!1sid!2sid!4v1717080063795!5m2!1sid!2sid', 'uploads/destinasi/danau-toba.jpg'),
(24, 'Labuan Bajo', 'Labuan Bajo adalah sebuah kota kecil yang terletak di ujung barat Pulau Flores, Indonesia. Dikenal sebagai pintu gerbang menuju Taman Nasional Komodo, Labuan Bajo menjadi tujuan utama bagi para pelancong yang ingin menjelajahi keindahan alam dan kekayaan bawah laut di sekitar Kepulauan Komodo. Kota ini menawarkan pemandangan alam yang spektakuler, termasuk bukit-bukit yang hijau, teluk-teluk berpasir putih, dan perairan yang jernih. Selain itu, Labuan Bajo juga merupakan pusat aktivitas menyelam dan snorkeling yang terkenal di seluruh dunia, dengan terumbu karang yang memukau dan kehidupan laut yang beragam. Selain kegiatan di bawah air, pengunjung juga dapat menikmati wisata darat seperti trekking ke bukit-bukit sekitar, mengunjungi desa-desa tradisional, atau menikmati sunset di salah satu pantai yang indah. Dengan pesona alamnya yang memikat dan beragamnya aktivitas yang ditawarkan, Labuan Bajo menjadi destinasi yang tak terlupakan bagi para pengunjung yang mencari petualangan dan keindahan alam yang belum terjamah.', 'Di Labuan Bajo, pengunjung dapat menikmati berbagai aktivitas yang seru dan memikat, seperti:\r\n\r\nMenyelam dan Snorkeling: Menjelajahi keindahan bawah laut Labuan Bajo yang mempesona dengan menyelam atau snorkeling di berbagai spot terkenal seperti Pulau Kanawa, Pulau Seraya, atau Pulau Komodo.\r\n\r\nTur Kepulauan Komodo: Mengikuti tur ke Taman Nasional Komodo untuk melihat langsung habitat kadal Komodo yang langka, bersama dengan pemandangan alam yang indah di sekitar pulau-pulau Komodo.\r\n\r\nMengunjungi Pulau Padar: Mendaki bukit Pulau Padar untuk menikmati pemandangan spektakuler dari atas, termasuk pantai-pantai berpasir putih yang memukau dan air laut yang biru kristal.', 'Di Labuan Bajo, terdapat berbagai fasilitas yang mendukung kegiatan wisatawan, termasuk:\r\n\r\nAkomodasi: Berbagai pilihan akomodasi seperti hotel, resort, penginapan, dan hostel yang sesuai dengan berbagai anggaran dan preferensi pengunjung.\r\n\r\nRestoran dan Warung Makan: Banyaknya pilihan restoran, kafe, dan warung makan yang menyajikan beragam hidangan lokal dan internasional.\r\n\r\nPusat Penyewaan Perahu: Terdapat banyak agen wisata atau penyedia jasa penyewaan perahu tradisional dan modern untuk menjelajahi kepulauan sekitar.', 'Kec. Komodo, Kabupaten Manggarai Barat, Nusa Tenggara Tim.', 0, 'labuanbajo@email.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126288.47273265688!2d119.78182362697088!3d-8.449215626292606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db468a6d47ed641%3A0x87f524333c6a6e8d!2sLabuan%20Bajo%2C%20Kec.%20Komodo%2C%20Kabupaten%20Manggarai%20Barat%2C%20Nusa%20Tenggara%20Tim.!5e0!3m2!1sid!2sid!4v1717080265550!5m2!1sid!2sid', 'uploads/destinasi/labuan-bajo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `deskripsi`, `kategori`, `harga`, `gambar`) VALUES
(16, 'Wayang', 'Wayang adalah seni pertunjukan tradisional yang berasal dari Indonesia, terutama Jawa dan Bali. Pertunjukan wayang melibatkan penggunaan boneka kayu atau kulit yang diatur di belakang layar, dengan para dalang yang menggerakkan boneka-boneka tersebut dan menceritakan cerita yang sering kali berdasarkan pada mitologi atau epik-epik klasik seperti Ramayana dan Mahabharata. Pertunjukan wayang tidak hanya merupakan hiburan semata, tetapi juga sering kali membawa pesan moral dan filosofis yang dalam. Wayang merupakan bagian penting dari budaya Indonesia dan masih sering dipertunjukkan dalam berbagai acara tradisional, upacara agama, dan festival budaya di seluruh nusantara.', 'benda', 150000, 'uploads/produk/wayang.jpg'),
(18, 'Batik', 'deskripsi batik', 'pakaian', 100000, 'uploads/produk/batik.jpg'),
(19, 'keris', 'deskripsi keris', 'senjata', 12345, 'uploads/produk/keris.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gambar`, `role`) VALUES
(105, 'admin', 'admin', 'uploads/users/wallhaven-zypyyv.png', 'admin'),
(106, 'sadrach', '1', 'uploads/users/cclub.jpg', 'user'),
(107, 'nathan', 'pass', 'uploads/users/Foto almet 4x6.png', 'user'),
(112, 'halo', 'halo', NULL, 'user'),
(113, 'udin', 'udin123', 'uploads/users/wallhaven-we5m9q.png', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
