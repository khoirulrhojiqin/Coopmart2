-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 05:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coopmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `harga_jual` double(10,2) NOT NULL,
  `ppn` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`id_barang`, `nama_barang`, `stok`, `satuan`, `harga_jual`, `ppn`, `diskon`, `gambar`, `deskripsi`, `kategori`, `created_at`, `update_at`) VALUES
(1, 'SARIMI KARI SPECIAL ISI DUA 113 GRSARIMI KARI SPECIAL ISI DUA 113 GR', 24, '', 2900.00, 0, 0, '138a671b2c20b8581d9de401c144b86f.jpg', 'isi :115 g. dijamin enak. pas buat kamu yang pengen makan puas', 1, '2018-09-07', '2018-09-20 08:09:57'),
(2, 'Naraya Bunga Krisantemum 300ml- Minuman kaleng', 0, '', 5000.00, 0, 0, 'b27cbd2b54f4fd820f51076d6ce47f7c.jpg', 'Minuman segar no.1 di pabriknya', 2, '2018-09-07', '2018-09-20 08:09:57'),
(3, 'Minyak goreng sunco 2 liter per dus', 9, '', 140000.00, 0, 0, '34328001afb34da4a460cea974109cdb.jpg', 'Minyak goreng sunco 2 liter per dus isi 6 bungkus\n\n', 3, '2018-09-07', '2018-09-25 22:28:48'),
(4, 'Sabun gove sepaket isi 5pcs', 5, '', 100000.00, 0, 0, '89f717c57ecc0e4034cfd7ff1ba6373a.jpg', '1. Aromanya bisa membantu sebagai aromaterapy dan anti depresi. \n2. Dapat membuat kulit wajah yang k', 4, '2018-09-07', '2018-09-20 08:09:57'),
(5, 'Sabun Cuci Piring DISHWASHING PROKLEEN  5L KONSENTRAT  ', 3, '', 50000.00, 0, 0, '16d7a2c9eb0edce3ad8c9453dca117e4.png', 'STOCK SELALU TERSEDIA, SILAHKAN LANGSUNG DI PESAN :)\r\nHANYA UNTUK PEMESANAN GOSEND & GRAB SAME DAY /', 5, '2018-09-07', '2018-09-20 08:09:57'),
(6, 'Garnier Men Natural Turbo Light White  Oil Control  100 mL n m', 1, '0', 20000.00, 0, 0, '2a958d72f276a2081c54c0a46985ede8.jpg', 'Garnier Men Natural Turbo Light White + Oil Control merupakan foam pembersih khusus untuk Pria. Berf', 6, '2018-09-07', '2018-09-20 08:09:57'),
(7, 'Sabun pemutih Badan Zwaine body wash Peach with Glutha', 3, '', 50000.00, 0, 0, 'e35e0e9ecf0572a536e2c85fd722d244.jpg', 'Sabun pemutih badan dengan bahan aktif glutathion yang bisa menekan pigmen melanosit.\n\nDengan ekstra', 7, '2018-09-07', '2018-09-25 22:28:48'),
(8, 'Ponds BB magic Powder Ponds BB Powder', 3, '0', 26000.00, 0, 0, '931438a57e1aa8078960e66aac8dd91b.jpg', 'Jaminan ORIGINAL FROM THAILAND YAH !! Exp nya Tahun dr kode produksi yg difoto. READY STO', 7, '2018-09-07', '2018-09-20 08:09:57'),
(9, 'Bolu Jadul Meses Coklat Keju', 1, '0', 65000.00, 0, 0, '0ebda17f52849852a1be944d153dbad8.jpg', 'dengan bolu yang lembut dan manis yg pas..isian bisa mix meses dan keju atau Meses saja atau Keju sa', 1, '2018-09-07', '2018-09-25 22:28:48'),
(10, 'Roti Pisang Coklat Keju', 99, '0', 12000.00, 0, 0, 'b39717357b6c31214cda453f0ec52c5d.jpg', 'dengan bolu yang lembut dan manis yg pas..isian bisa mix meses dan keju atau Meses saja atau Keju saja.Jika tidak ada note saat order maka akan dibuatkan mix meses keju', 1, '2018-09-07', '2018-09-25 22:28:48'),
(11, 'Sarimi 2 Soto Kaya Jeruk', 97, '', 3000.00, 0, 0, '43aee98b3eb59cd8d0c1aa9c221151bd.jpg', 'Sarimi soto isi 2 pas untuk kamu anak kos-kosan yang lagi lapar pengen kenyang hahaha', 1, '2018-09-07', '2018-09-20 08:09:57'),
(12, 'Herbadrink Sari Temulawak', 90, '', 38000.00, 0, 0, '2b5966d0d8b364940333da094bddd50c.jpg', 'Minuman herbal memelihara fungsi hati produksi KONIMEX - 4 pack', 2, '2018-09-07', '2018-09-20 08:09:57'),
(14, 'Tropicana Slim', 17, '', 34400.00, 0, 0, '33faa29c0ad394462c8d9bac41126c94.jpg', 'Sirup Rendah kalori Tropicana Slim 750 Ml - Sugar Free Syrup - Minuman - Drinks', 2, '2018-09-07', '2018-09-20 08:09:57'),
(15, 'Han Tepung Maizena 150gr', 18, '', 7900.00, 0, 0, 'd703509fc1faed8c8e4285b7be475cab.jpg', 'Haan Tepung Maizena 150gr terbuat dari 100% tepung jagung murni berkualitas tinggi yang berfungsi sebagai bahan pengental untuk soup, vla dan campuran pembuat pudding, kue, pie dan lain-lain.', 3, '2018-09-09', '2018-09-20 08:12:15'),
(16, 'Tepung Praktis Haan Pancake cheese Tepung Membuat Pancake Rasa Keju', 18, '', 16500.00, 0, 0, '76c3ff7f6471dd1e6129b0c864e22813.jpg', 'Tepung Praktis Haan untuk membuat Pancake Hanya tinggal membahkan Sedikit Bahan Tambahan\r\ndan adonan siap dibuat dan disajikan', 3, '2018-09-11', '2018-09-20 08:11:51'),
(17, 'BIOAQUA Aloevera Facial Cleanser Sabun pencuci muka lidah buaya', 17, '', 39000.00, 0, 0, 'f749906f3d2de87bb12095151b02d947.jpg', 'BIOAQUA Aloevera Facial Cleanser Original\r\nBerat 100g\r\n\r\nPembersih wajah ini bisa digunakan untuk wanita /pria\r\nProduk ini dapat membuat wajah lebih putih,bersih dan tidak berminyak.', 7, '2018-09-11', '2018-09-25 22:32:43'),
(18, 'Promo Ertos Facial Wash Brightening Pencuci Muka Erto S Terlaris', 17, '', 82500.00, 0, 0, '8a65f6fd6bb318cb190a14408ecd87a7.jpg', 'Facial brightening Wash Erto`s membantu membersihkan kulit wajah anda dari kotoran, Mengurangi minyak berlebih dan mengangkat sisa sisa make up.\r\n', 7, '2018-09-11', '2018-09-20 08:11:26'),
(19, 'Terbaik Facial wash Cleanser Foam Wak doyok Sabun Pencuci Muka Wajah WakDoyo Terkini', 3, '', 140000.00, 0, 0, '8a641a2541b42e040c0d015e2b73d6d9.jpg', 'selamat berbelanja di toko kami dan barang ready langsung checkout aja yah ^^', 6, '2018-09-11', '2018-09-22 02:44:59'),
(27, 'Parfum GucCi Gardenia Woman 100ml - Original Singapore', 0, '', 59300.00, 0, 0, '5d74e541c50ca5ff75d29f5a479ec9fc.jpg', 'Guc ci Flora Gorgeous Gardenia for Women EDT by Guc ci adalah wewangian beraroma Floral. Guc ci Flora Gorgeous Gardenia for Women EDT diluncurkan tahun 2012.\r\n\r\nBrand : Guc ci\r\nGender :Woman\r\nJenis: EDT\r\nKlasifikasi : floral\r\nTop Note : Red Berries, Pear, Patchouli\r\nMiddle Note : White Gardenia, Frangipani Flower\r\nBase Note : Brown Sugar Accord\r\nKekuatan aroma : sedan', 7, '2018-09-17', '2018-09-20 08:11:02'),
(28, 'Seblak MOMMY Cemilan yang Luar Biasa Rasa Original dan Rendang', 13, '', 4400.00, 0, 0, 'ef1e769778f477a5265fa9e63c2aa781.jpg', 'Produk Terbaru seblak instan nya, seblak dalam kemasan yang prakis, mudah dibawa dan dibuat :)\r\nTinggal tuang air panas, Tiriskan, Tuang Bumbu, jadi deh seblaknyaaa\r\n\r\nTersedia dalam 5 rasa :\r\n1. Rendang (BEST SELLER)\r\n2. Original (BEST SELLER) \r\n3. Iga Bakar (NEW PRODUCT)\r\n4. Pecel (NEW PRODUCT)\r\n5. Rica Rica (NEW PRODUCT)\r\n\r\nDisarankan untuk memesan dalam hitungan genap seperti 2,4,6,8,10, dst\r\n\r\nBerat Netto : 100gram\r\nBerat Volume : 200gram\r\n\r\nSilahkan memasukan jumlah dan variannya.\r\nEXP Date : Febuari 2019\r\n', 1, '2018-09-17', '2018-09-25 22:32:42'),
(30, 'Maicih Basreng', 12, '', 14000.00, 0, 0, 'd566e3e2faad57c7cf5b0b338f11ebd3.jpg', 'Keripik Maichi Basreng pas untuk anda yang lagi nongkrong maupun lagi nonton dan pengen ngemil. tersedia dengan berbagai variant rasa', 1, '2018-09-22', '2018-09-25 22:32:43'),
(31, 'Paket Pizza', 15, '', 45500.00, 0, 0, 'b0c1769eefa6e97eecc53a20ba9a3a99.jpg', 'FREE streofoam box tebal buat #keju Mozarellanya dan FREE bubble warp buat base pizza \r\npaket lengkap buat pizza jadi mudah , terdiri dari base #pizza 1 bungkus isi 3 pcs diameter 15 cm ,1 bungkus keju #mozarella @200 gram , 1 bungkus #sosis kimbo lauk /reedy  berat 60 gr an \r\n\r\nCara buat ,base pizza edo tinggal di beri toping bisa tambah saus, irisan keju mozarella ,irisan sosis, dan aneka toping lainnya sesuai selera ,panggang smpi keju lumer ,bisa di teflon asal api kecill dan di tutup \r\n', 1, '2018-09-22', '2018-09-25 22:35:55'),
(32, 'Cuanki Instan Lakoca Siap Seduh 3 Menit Saja- Netto 86gr', 15, '', 11800.00, 0, 0, '2a725687e25877c31306ecabf1dbcb97.jpg', 'Lakoca adalah CUANKI Siap Saji (jajanan tradisional khas Bandung yang isinya tahu kering, dan bakso pangsit ikan tenggiri) \r\nBiasanya kalau di Bandung Cuanki Ini dijual oleh Mamang yang membawa gerobak pikul, berjualan dengan berkeliling...\r\nBuat kalian yang lg ngidam Cuanki sekarang dah gak usah repot nunggu si mamang dateng sampe kelaperan lagi yah.. \r\nkarena sekarang sudah ada LAKOCA Cuanki Instan yang dikemas ulang agar lebih praktis, menarik dan dapat dinikmati kapan saja dimana saja, tinggal seduh langsung siap untuk dinikmati...', 1, '2018-09-22', '2018-09-25 22:35:54'),
(33, 'KEJU MOZARELLA PIZZA , PASTA , STICK MULUR , ENAK, HALAL', 18, '', 24570.00, 0, 0, '91e5e703db09cf20a1b476003df26842.jpg', 'PERBEDAAN jenis KEJU MOZARELLA terletak pada tekstur masing2 jenis  \r\nPIZZA (200 gram ) : Mulur panjang, berserat, biasa dipakai untuk segala macam topping makanan seperti pizza, roti bakar mozarella.\r\nPASTA (200 gram ) : Mulur biasa, mudah leleh, biasa dipakai untuk membuat makaroni, spagheti \r\nSTICK. (200 gram)  : Mulur panjang, Creamy , dipakai untuk isian / filling makanan seperti risoles, mozarella stick\r\n', 1, '2018-09-22', '2018-09-25 22:35:55'),
(34, 'BRAGG Apple Cider Vinegar - 60 Ml (kemasan REPACK 100% ORIGINAL)BRAGG Apple Cider Vinegar - 60 Ml (k', 19, '', 25000.00, 0, 0, '23eae2f5a01039b5ee745c27f2949071.png', 'Cuka apel atau yang juga dikenal dengan nama apple cider vinegar sangat baik untuk kesehatan dan sudah sejak berabad-abad lalu, bahan ini digunakan sebagai obat beragam jenis penyakit. Mulai dari penyakit ringan hingga serius, cuka apel sangat mampu diandalkan dan berikut ini adalah sejumlah manfaat apple cider vinegar untuk menjaga kesehatan Anda sehari-hari.\r\n', 2, '2018-09-22', '2018-09-22 17:45:12'),
(35, 'CANTIQA KEMIRI Penumbuh Rambut Alami | Minyak Kemiri Asli', 19, '', 130000.00, 0, 0, '7c02325f3eb854d9627366e321b19f4f.jpg', 'Cantiqa Kemiri 100% minyak kemiri murni tanpa bahan pengawet, pewarna dan pewangi buatan. Terbuat dari kemiri berkualitas dengan metode pengolahan tradisional asli Payakumbuh, Sumatera Barat, sehingga baik digunakan untuk dewasa maupun anak-anak.\r\n', 8, '2018-09-22', '2018-09-22 17:45:08'),
(36, 'Minyak Kemiri Kilau Kemiri', 88, '', 55000.00, 0, 0, 'a16189b10f422940865350646558f1d8.jpg', 'Minyak Kemiri Organik\r\nTerbuat dari kemiri pilihan tanpa campuran bahan kimia yang diproses secara cold processed\r\n\r\nIsi: 100ml\r\n\r\nApa kegunaan minyak kemiri?\r\nMinyak kemiri terkenal sangat ampuh untuk mengatasi permasalahan pada rambut.\r\n', 9, '2018-09-22', '2018-09-22 17:45:09'),
(37, 'Naroop Blend Canola Sunflower Oil 1L Minyak Goreng Sehat', 110, '', 68900.00, 0, 0, 'fc536569465af5e180d4b8da3ed0bd7c.jpg', 'Naroop Blend Canola (Non-GMO) Sunflower Oil adalah minyak premium yang terbuat dari campuran Minyak Canola Non-GMO dan Minyak Bunga Matahari yang ditambahkan NPE, yaitu sari pati tumbuhan yang berfungsi untuk melindungi minyak dari panas, sehingga dapat digunakan untuk menggoreng lebih sering dari minyak biasanya. ', 3, '2018-09-22', '2018-09-25 22:08:34'),
(38, 'Minyak rambut Sagha MARS Avaloka 100ml 100% alami', 22, '', 225000.00, 0, 0, '5b93c3ca31e73f1e16df5660e441d901.jpg', 'MARS bisa mengatasi masalah rambut dan kulit kepala seperti:\r\n-rambut rontok,\r\n-ketombean, \r\n-gatal kulit kepala, \r\n-mengkokohkan akar rambut, \r\n-pada rambut bercabang ketika tumbuh rambut baru sudah tidak bercabang, \r\n-pada kasus ubanan di usia muda, rambut yg tumbuh baru, akan berwarna hitam, \r\n-melebatkan rambut yg tumbuh jarang,\r\n-membuat rambut lembut, mudah diatur,\r\n-membuat rambut berkilau,\r\n-mengatasi migren dan pusing kepala karena terbukti MARS dapet melancarkan peredaran darah di kulit kepala kita.', 9, '2018-09-22', '2018-09-22 17:45:11'),
(39, 'Minute M. NB STRW300', 20, '', 6200.00, 0, 0, '84551af2e963f07b2dc3ad29fe6db8bc.jpg', 'Minuman sari buah dari Minute Maid ini hadir tak hanya memberikan kesegaran tapi juga menyediakan nutrisi yang dibutuhkan tubuh. Dibuat memadukan kombinasi susu dan sari buah segar yang kaya manfaat dengan rasa stroberi yang menyegarkan. Juga kaya akan kandungan Vitamin B3 & B6 yang bekerja membantu menghasilkan energi dan membentuk jaringan dalam tubuh, Vitamin E yang baik bagi kesehatan kulit, serta Kalsium dan Zinc yang baik untuk membantu membentuk dan mempertahankan kepadatan tulang dan gigi. Tersedia dalam kemasan botol PET 750ml yang ideal bagi seluruh keluarga.', 2, '2018-09-30', '2018-09-30 22:11:49'),
(40, 'Rin-Bee Stick Keju70', 25, '', 5500.00, 0, 0, 'ac5c44068dd750cacae9dd562dffd7ce.jpg', 'Stik Keju\r\nTerbuat dari bahan-bahan pilihan berkualitas\r\nDiolah secara higienis dan modern sehingga menghasilkan snack renyah dengan kualitas rasa yang istimewa\r\nDengan rasa keju yang kaya dan gurih, membuat Anda ingin menikmatinya\r\ndalam bentuk stik pipih dengan ukuran ideal untuk dikunyah dalam satu kali gigita', 1, '2018-09-30', '2018-09-30 22:15:16'),
(41, 'Walls PPL STW-VNL 90', 50, '', 4500.00, 0, 0, 'd5dbc828860689b68e45fd54f7584f64.jpg', 'Eskrim Walls pas untuk nyantai setiap saat, adem, enak lembut di mulut', 1, '2018-09-30', '2018-09-30 22:20:05'),
(42, 'Buavita Jambu SL 250', 20, '', 7100.00, 0, 0, 'cc7b13bae42886e531d6822b4c02f00c.jpg', 'Minuman sari buah jambu merah\r\nDibuat dengan menggunakan buah asli\r\nDiproduksi dengan dengan standar tinggi untuk menghasilkan minuman sari buah dengan kualitas yang tinggi\r\nSari buah beserta bulir-bulirnya berpadu dengan sempurna untuk kemudian diproses dengan menggunakan teknologi UHT terbaik untuk menjamin kandungan vitamin dan nutrisi buah yang ada di dalam kemasan Buavita tetap terjaga', 2, '2018-09-30', '2018-09-30 22:21:57'),
(43, 'Tango Fusion Cho/M75', 20, '', 5300.00, 0, 0, '1290d6de9904b47bd76d32460e5e81af.jpg', 'Tango Wafer Chocolate\r\nTerbuat dari resep ahli yang mengkombinasikan wafer krispi dengan chocolate cream premium dan susu\r\nMenghasilkan rasa yang gurih & lezat di setiap gigitannya\r\nIdeal dinikmati saat santai Anda bersama keluarga\r\nBerat produk : 75 gr', 1, '2018-09-30', '2018-09-30 22:24:01'),
(44, 'Tango WFR LG Chese52', 20, '', 2000.00, 0, 0, '1f6a84ea41df8752869a0084d2c3194a.jpg', 'Tango Wafer Chocolate\r\nTerbuat dari resep ahli yang mengkombinasikan wafer krispi dengan chocolate cream premium dan susu\r\nMenghasilkan rasa yang gurih & lezat di setiap gigitannya\r\nIdeal dinikmati saat santai Anda bersama keluarga', 1, '2018-09-30', '2018-09-30 22:27:22'),
(45, 'Happytos Chip HJU160', 20, '', 11497.00, 0, 0, 'fb21883c34b045fc60c28621c7fbc8b5.jpg', '	\r\nHappytos Snack Tortila Chips Hijau 160gr cocok untuk cemilan anda bersama keluarga, teman diwaktu senggang.', 1, '2018-09-30', '2018-09-30 22:29:49'),
(46, 'Nestle Pure life 330', 20, '', 2200.00, 0, 0, '74241f00249aca72e7919cd40914e9c4.jpg', '	\r\nNestle Pure Life Indonesia\r\nMinuman Segar, produk Nestle', 2, '2018-09-30', '2018-09-30 22:35:13'),
(47, 'Good Day F.Mocacino 250', 25, '', 5400.00, 0, 0, '8f953ed2224edccbe297dc83d7d85df0.jpg', '	\r\nHarga per renceng, satu renceng @20 gram x 10 sachet.', 2, '2018-09-30', '2018-09-30 22:38:14'),
(48, 'Hatari S.H Puff 260g', 25, '', 6796.00, 0, 0, '4b2ab326dd8011ad62c78bfb1ab9cb71.jpg', '	\r\nhatari malkist gula 260gr...... enak pas untuk nyantai sama keluarga', 1, '2018-09-30', '2018-09-30 22:41:10'),
(49, 'Twisko Jagung Bakar 30g', 25, '', 2500.00, 0, 0, 'f69b57eadf88ebc0e232d00ead55489b.jpg', '	\r\nStick rasa Jagung Bakar renyah yang diproses 100% Roasted tanpa digoreng.\r\nRasanya kekinian banget, sangat cocok untuk teman ngemil disegala suasana dan bisa dibawa kemana-mana.', 1, '2018-09-30', '2018-09-30 22:43:49'),
(50, 'Ros Tepung Beras 500', 22, '', 7700.00, 0, 0, 'ff0ebda2aa7aa3e810193df2860b8e9c.jpg', '	\r\ntepung beras rose brand 500 g. untuk olahan kue dan makanan kesukaan anda', 3, '2018-09-30', '2018-10-01 06:41:14'),
(51, 'ABC Kecap Manis TGG275', 19, '', 12900.00, 0, 0, '1d83e3127e5c874879a6b8e29669de74.jpg', '	\r\nSebagai salah satu bumbu pelengkap masakan, kecap sudah tentu menjadi hal wajib yang harus ada di dapur. Rasa manisnya yang unik memberi rasa tambahan dan menciptakan hasil masakan yang istimewa.', 3, '2018-09-30', '2018-10-01 06:41:13'),
(52, 'Sun Kara Santan KL65', 25, '', 5500.00, 0, 0, 'f71597b394ee744ee21715799c049690.jpg', '	\r\nSantan kelapa siap pakai begitu bungkus dibuka tanpa harus dimasak terlebih dahulu\r\nSebagai pelengkap bahan masakan\r\nNetto 65 ml', 3, '2018-09-30', '2018-09-30 22:57:20'),
(53, 'You C 1000 Health Drink Vitamin 500 Ml', 20, '', 7500.00, 0, 0, '772d4b5f1992a5e3d106df1adf1e4c14.jpg', '	\r\nMemelihara daya tahan tubuh dan mencukupi kebutuhan akan Vitamin C sehari hari\r\nNetto 140 ml', 2, '2018-10-02', '2018-10-02 17:47:45'),
(54, 'Teh Gelas Green Tea Cup 180 mL', 20, '', 1200.00, 0, 0, '4b7e52ace32b75211befafe53334e237.jpg', 'Dibuat dari seduhan daun teh alami dan berkualitas dengan gula asli yang bermutu', 2, '2018-10-02', '2018-10-02 17:52:06'),
(55, 'Sprite PET 250ml', 20, '', 3400.00, 0, 0, '6419a5ad9c76e9c4aba1f1ef76eb88c7.jpg', 'Minuman ringan berkarbonasi dengan rasa lemon Menyegarkan dan cocok diminum di saat santai Anda Dalam kemasan botol PET 250ml ', 2, '2018-10-02', '2018-10-02 17:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_detail_order`
--

CREATE TABLE `tabel_detail_order` (
  `id` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_detail_order`
--

INSERT INTO `tabel_detail_order` (`id`, `id_beli`, `id_order`, `id_barang`, `qty`, `harga`, `total`) VALUES
(1, 1, 1, 27, 2, 59300.00, 118600.00),
(2, 1, 1, 19, 1, 140000.00, 140000.00),
(3, 2, 2, 28, 2, 4400.00, 8800.00),
(4, 2, 2, 16, 2, 16500.00, 33000.00),
(5, 2, 2, 14, 1, 34400.00, 34400.00),
(6, 3, 3, 27, 1, 59300.00, 59300.00),
(8, 4, 4, 27, 1, 59300.00, 59300.00),
(9, 4, 4, 19, 2, 140000.00, 280000.00),
(10, 4, 4, 18, 1, 82500.00, 82500.00),
(11, 5, 5, 14, 1, 34400.00, 34400.00),
(12, 5, 5, 15, 1, 7900.00, 7900.00),
(13, 6, 6, 19, 14, 140000.00, 1960000.00),
(15, 8, 8, 3, 6, 140000.00, 840000.00),
(16, 9, 9, 3, 3, 140000.00, 420000.00),
(18, 12, 12, 30, 4, 14000.00, 56000.00),
(19, 12, 12, 19, 7, 140000.00, 980000.00),
(20, 13, 13, 30, 2, 14000.00, 28000.00),
(21, 13, 13, 38, 2, 225000.00, 450000.00),
(22, 14, 14, 35, 1, 130000.00, 130000.00),
(23, 14, 14, 36, 2, 55000.00, 110000.00),
(24, 14, 14, 37, 1, 68900.00, 68900.00),
(25, 14, 14, 38, 1, 225000.00, 225000.00),
(26, 14, 14, 34, 1, 25000.00, 25000.00),
(27, 15, 15, 37, 1, 68900.00, 68900.00),
(28, 15, 15, 32, 1, 11800.00, 11800.00),
(29, 15, 15, 31, 3, 45500.00, 136500.00),
(30, 16, 16, 3, 1, 140000.00, 140000.00),
(31, 16, 16, 10, 1, 12000.00, 12000.00),
(32, 16, 16, 7, 1, 50000.00, 50000.00),
(33, 16, 16, 9, 1, 65000.00, 65000.00),
(34, 17, 17, 28, 1, 4400.00, 4400.00),
(35, 17, 17, 30, 2, 14000.00, 28000.00),
(36, 17, 17, 17, 1, 39000.00, 39000.00),
(37, 18, 18, 32, 4, 11800.00, 47200.00),
(38, 18, 18, 31, 2, 45500.00, 91000.00),
(39, 18, 18, 33, 2, 24570.00, 49140.00);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Produk Makanan'),
(2, 'Produk Minuman'),
(3, 'Produk Dapur'),
(4, 'Produk Mandi'),
(5, 'Produk Cucian'),
(6, 'Produk Pria'),
(7, 'Produk Wanita'),
(8, 'Produk Anak'),
(9, 'Produk Pria & Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_order`
--

CREATE TABLE `tabel_order` (
  `id_order` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_order`
--

INSERT INTO `tabel_order` (`id_order`, `tanggal`, `id_pelanggan`) VALUES
(1, '2018-09-19', 1),
(2, '2018-09-20', 2),
(3, '2018-09-20', 3),
(4, '2018-09-20', 4),
(5, '2018-09-20', 5),
(6, '2018-09-21', 6),
(7, '2018-09-21', 7),
(8, '2018-09-21', 8),
(9, '2018-09-21', 9),
(10, '2018-09-21', 10),
(11, '2018-09-21', 11),
(12, '2018-09-22', 12),
(13, '2018-09-22', 13),
(14, '2018-09-22', 14),
(15, '2018-09-26', 15),
(16, '2018-09-26', 16),
(17, '2018-09-26', 17),
(18, '2018-09-26', 18),
(19, '2018-10-01', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pembeli`
--

CREATE TABLE `tabel_pembeli` (
  `id_beli` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(14) NOT NULL,
  `jns_transaksi` varchar(30) NOT NULL,
  `created_at` date DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pembeli`
--

INSERT INTO `tabel_pembeli` (`id_beli`, `id_user`, `nip`, `nama`, `email`, `alamat`, `telp`, `jns_transaksi`, `created_at`, `update_at`) VALUES
(1, 4, '60900114012', 'Zul Achmad', '-', 'Fak. Saintek', '082134432657', 'Tunai', '2018-09-19', '0000-00-00 00:00:00'),
(3, 5, '60900114054', 'Khairin Niswa', '-', 'Fak. Saintek', '082134432657', 'Potong Gaji', '2018-09-20', '0000-00-00 00:00:00'),
(4, 5, '60900114054', 'Khairin Niswa', '-', 'Fak. Saintek', '082134432657', 'Potong Gaji', '2018-09-20', '0000-00-00 00:00:00'),
(5, 4, '60900114012', 'Zul Achmad', '-', 'Fak. Saintek', '082134432657', 'Tunai', '2018-09-20', '0000-00-00 00:00:00'),
(6, 5, '60900114054', 'Khairen Niswa', '-', 'Fak. Adab', '082134432657', 'Tunai', '2018-09-21', '0000-00-00 00:00:00'),
(7, 5, '60900114054', 'Khairen Niswa', '-', 'Fak. Saintek', '082134432657', 'Potong Gaji', '2018-09-21', '0000-00-00 00:00:00'),
(8, 5, '60900114054', 'Khairen Niswa', '-', 'Fak. Saintek', '082134432657', 'Potong Gaji', '2018-09-21', '0000-00-00 00:00:00'),
(9, 5, '60900114054', 'Khairen Niswa', '-', 'Fak. Saintek', '082134432657', 'Tunai', '2018-09-21', '0000-00-00 00:00:00'),
(10, 5, '60900114054', 'Khairen Niswa', '-', 'Fak. Saintek', '082134432657', 'Tunai', '2018-09-21', '0000-00-00 00:00:00'),
(11, 4, '60900114012', 'Zul Achmad', '-', 'Fak. Saintek', '082134432657', 'Potong Gaji', '2018-09-21', '0000-00-00 00:00:00'),
(12, 4, '60900114012', 'Zul Achmad', '-', 'Fak. Saintek', '082134432657', 'Potong Gaji', '2018-09-22', '0000-00-00 00:00:00'),
(13, 5, '60900114054', 'Khairen Niswa', '-', 'Fak. Saintek', '082134432657', 'Potong Gaji', '2018-09-22', '0000-00-00 00:00:00'),
(14, 4, '60900114012', 'Zul Achmad', '-', 'Fak. Ushuludin', '082134432657', 'Tunai', '2018-09-22', '0000-00-00 00:00:00'),
(15, 7, '109131983032001', 'Hudaya R, SE', '-', 'Fak. Adab', '-', 'Potong Gaji', '2018-09-26', '0000-00-00 00:00:00'),
(16, 27, '009291993031002', 'HARIYANTO, S.SOS', '-', 'Fak. Saintek', '-', 'Potong Gaji', '2018-09-26', '0000-00-00 00:00:00'),
(17, 13, '202282009121003', 'Memen Suwandi, SE., M.Si', '-', 'Fakultas Ushuludin', '089231776534', 'Tunai', '2018-09-26', '0000-00-00 00:00:00'),
(18, 17, '904101995031001', 'DR. SALAHUDDIN, M.AG', '-', 'Fakultas Dakwah', '087654231122', 'Potong Gaji', '2018-09-26', '0000-00-00 00:00:00'),
(19, 5, '60900114054', 'Khairen Niswa', '-', 'rrty', '082134432657', 'Tunai', '2018-10-01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penjualan`
--

CREATE TABLE `tabel_penjualan` (
  `id_jual` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_penjualan`
--

INSERT INTO `tabel_penjualan` (`id_jual`, `id_barang`, `jumlah`, `tanggal`) VALUES
(2, 19, 1, '2018-09-19'),
(3, 28, 2, '2018-09-20'),
(4, 16, 2, '2018-09-20'),
(5, 14, 1, '2018-09-20'),
(6, 27, 1, '2018-09-20'),
(7, 19, 1, '2018-09-20'),
(8, 27, 1, '2018-09-20'),
(9, 19, 2, '2018-09-20'),
(10, 18, 1, '2018-09-20'),
(11, 14, 1, '2018-09-20'),
(12, 15, 1, '2018-09-20'),
(13, 19, 14, '2018-09-21'),
(14, 3, 6, '2018-09-21'),
(15, 3, 3, '2018-09-21'),
(16, 3, 5, '2018-09-21'),
(17, 30, 4, '2018-09-22'),
(18, 19, 7, '2018-09-22'),
(19, 30, 2, '2018-09-22'),
(20, 38, 2, '2018-09-22'),
(21, 35, 1, '2018-09-22'),
(22, 36, 2, '2018-09-22'),
(23, 37, 1, '2018-09-22'),
(24, 38, 1, '2018-09-22'),
(25, 34, 1, '2018-09-22'),
(26, 37, 1, '2018-09-26'),
(27, 32, 1, '2018-09-26'),
(28, 31, 3, '2018-09-26'),
(29, 3, 1, '2018-09-26'),
(30, 10, 1, '2018-09-26'),
(31, 7, 1, '2018-09-26'),
(32, 9, 1, '2018-09-26'),
(33, 28, 1, '2018-09-26'),
(34, 30, 2, '2018-09-26'),
(35, 17, 1, '2018-09-26'),
(36, 32, 4, '2018-09-26'),
(37, 31, 2, '2018-09-26'),
(38, 33, 2, '2018-09-26'),
(39, 51, 6, '2018-10-01'),
(40, 50, 3, '2018-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_status`
--

CREATE TABLE `tabel_status` (
  `id_status` int(11) NOT NULL,
  `id_beli` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `notif` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_status`
--

INSERT INTO `tabel_status` (`id_status`, `id_beli`, `status`, `notif`, `tanggal`) VALUES
(1, 1, 'Selesai', 0, '2018-09-19'),
(2, 2, 'Selesai', 0, '2018-09-20'),
(3, 3, 'Selesai', 0, '2018-09-20'),
(4, 4, 'Selesai', 0, '2018-09-20'),
(5, 5, 'Selesai', 0, '2018-09-20'),
(6, 6, 'Selesai', 0, '2018-09-21'),
(7, 7, 'Menunggu', 0, '2018-09-21'),
(8, 8, 'Selesai', 0, '2018-09-21'),
(9, 9, 'Selesai', 0, '2018-09-21'),
(10, 10, 'Menunggu', 0, '2018-09-21'),
(11, 11, 'Selesai', 0, '2018-09-21'),
(12, 12, 'Selesai', 0, '2018-09-22'),
(13, 13, 'Selesai', 0, '2018-09-22'),
(14, 14, 'Selesai', 0, '2018-09-22'),
(15, 15, 'Selesai', 0, '2018-09-26'),
(16, 16, 'Selesai', 0, '2018-09-26'),
(17, 17, 'Selesai', 0, '2018-09-26'),
(18, 18, 'Selesai', 1, '2018-09-26'),
(19, 19, 'Menunggu', 1, '2018-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `status` varchar(12) NOT NULL,
  `akses` varchar(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nip`, `nama`, `telepon`, `status`, `akses`, `username`, `password`) VALUES
(2, '60900883746', 'Ikram', '082378645647', 'Aktif', 'kasir', 'kasir', 'c7911af3adbd12a035b289556d96470a'),
(3, '60900114011', 'Hoirul Rhojiqin', '082394768545', 'Aktif', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, '60900114012', 'Zul Achmad', '082134432657', 'Aktif', 'user', '123', '202cb962ac59075b964b07152d234b70'),
(5, '60900114054', 'Khairen Niswa', '082134432657', 'Aktif', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee'),
(6, '107222014111001', 'Muh. Taufan Makmur', '-', 'Aktif', 'user', 'taufan', '92e9d63200f28086a3acb972738881e1'),
(7, '109131983032001', 'Hudaya R, SE', '-', 'Aktif', 'user', 'hudaya', '6dbe8aa80af9d9a8ef40425b3fe0857f'),
(8, '109221987031007', 'Drs. Mohammad Marjun, M.A', '-', 'Aktif', 'user', 'marjun', '9fd2b1e1d306e237103d0abccd165f1d'),
(9, '109291998031002', 'Irvan Muliadi, S.AG, S.S,M', '-', 'Aktif', 'user', 'irvan', '4c8e0251c853de2172b5e138075c7b3f'),
(10, '112311998032005', 'Darmawati H, S.Ag., M.Hi', '-', 'Aktif', 'user', 'darma', 'f90690e3c7de4452470c5f84120cd12f'),
(11, '201071994031002', 'Dr. Ilyas, M.PD., M.Si', '-', 'Aktif', 'user', 'ilyas', '3ea4a8e4d7a95ace878f907ab8b72d1b'),
(12, '201111993032001', 'Dra Lina Sandol', '-', 'Aktif', 'user', 'lina', 'f6f4deb7dad1c2e5e0b4d6569dc3c1c5'),
(13, '202282009121003', 'Memen Suwandi, SE., M.Si', '-', 'Aktif', 'user', 'memen', '8ee4abf1dde89e13870c41511db64211'),
(14, '907172014111001', 'ASHAR SINILELE', '-', 'Aktif', 'user', 'ashar', 'f10610e2e786c16c5c8bf5879a5a0007'),
(15, '701031997031002', 'BURHAN M.', '-', 'Aktif', 'user', 'burhan', 'fe9e3203ad8d1387bf8c8d1d889b902b'),
(16, '212311994032007', 'DARMIA, S.SOS.I', '-', 'Aktif', 'user', 'darmia', '3c284aad8a2fbb412e39ef5650f7fd0f'),
(17, '904101995031001', 'DR. SALAHUDDIN, M.AG', '-', 'Aktif', 'user', 'salahuddin', 'd3c11a5fd98549a52fccef74bf7146f6'),
(18, '212311991031019', 'DR. ABDULLAH, S.AG, M.Ag', '-', 'Aktif', 'user', 'abdullah', 'd93ec75bca4b7ef88df5a6c591654422'),
(19, '605092005011003', 'DR. SIRADJUDDIN, S.E.,M.S', '-', 'Aktif', 'user', 'siradjuddin', '182b47e21e9904e0b724505765fe551b'),
(20, '410131994032002', 'DRA ASNI DJAMERENG, M.Si', '-', 'Aktif', 'user', 'asni', 'eb682534d3f2ea91c94a9436a71e1808'),
(21, '803281996032002', 'DRA KAMSINAH. M.PD.I', '-', 'Aktif', 'user', 'kamsinah', '94df7c4e9a1893405b20c80db1a60129'),
(22, '912091994032001', 'DRA. ASRIYAH., M.PD.I', '-', 'Aktif', 'user', 'asriyah', '9df81e58a36117923204650f5550325d'),
(23, '906061994032003', 'DRA. Hj. RAHMATIAH HL,M.', '-', 'Aktif', 'user', 'rahmatiah', 'd954b77e2ccc3f28ace04ea4b7845675'),
(24, '312311983031036', 'DRS. ARIFUDDIN S.,M.PD', '-', 'Aktif', 'user', 'arifuddin', 'bdd4c721ea3c77bc5d8b99107019cc85'),
(25, '404171993031002', 'DRS DARSUL PUYU, M.AG', '-', 'Aktif', 'user', 'dasrul', '91437ba7be26e14447df8fb94f24c2f4'),
(26, '812251982031005', 'EMAN SULAIMAN, SH., MH', '-', 'Aktif', 'user', 'eman', '04ecff4292be7186a9fbfa186e83b87e'),
(27, '009291993031002', 'HARIYANTO, S.SOS', '-', 'Aktif', 'user', 'hariyanto', '3ab195be3472efcf37b55eeaa6fda16b'),
(28, '8090119990322002', 'HASLIAH HASAN, SH', '-', 'Aktif', 'user', 'hasliah', 'a13c4ce7de27463c41714c623680ed96'),
(29, '610191995032001', 'HJ. SURYANI S.SOS', '-', 'Aktif', 'user', 'suryani', '5347ed5eac4f941049b2a937582847ff'),
(30, '009152009101001', 'IBRAHIM ', '-', 'Aktif', 'user', 'ibrahim', 'f1c083e61b32d3a9be76bc21266b0648'),
(31, '903211992031005', 'KHAERUL MUTTAQIEN', '-', 'Aktif', 'user', 'khaerul', '4ed53c2a2ab5ef3a6635eca63d68fee0'),
(32, '006052014112003', 'NURWAHIDAH', '-', 'Aktif', 'user', 'nurwahidah', 'ee5445d01114f584a547e936b9528060'),
(33, '001142001121002', 'RAHMAT RAMLI', '-', 'Aktif', 'user', 'rahmat', 'af2a4c9d4c4956ec9d6ba62213eed568'),
(34, '212312009012012', 'SULFANI, S.AG', '-', 'Aktif', 'user', 'sulfani', '3648c7f2017e5b389878f978ed853794');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tabel_detail_order`
--
ALTER TABLE `tabel_detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tabel_order`
--
ALTER TABLE `tabel_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tabel_pembeli`
--
ALTER TABLE `tabel_pembeli`
  ADD PRIMARY KEY (`id_beli`);

--
-- Indexes for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  ADD PRIMARY KEY (`id_jual`);

--
-- Indexes for table `tabel_status`
--
ALTER TABLE `tabel_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tabel_detail_order`
--
ALTER TABLE `tabel_detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_order`
--
ALTER TABLE `tabel_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tabel_pembeli`
--
ALTER TABLE `tabel_pembeli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tabel_penjualan`
--
ALTER TABLE `tabel_penjualan`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tabel_status`
--
ALTER TABLE `tabel_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
