-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2020 pada 00.38
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_admin`
--

CREATE TABLE `td_admin` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_admin`
--

INSERT INTO `td_admin` (`id_admin`, `username`, `password`) VALUES
(7, 'utafiyani', 'ami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_bkml`
--

CREATE TABLE `td_bkml` (
  `kdsewa` int(11) NOT NULL,
  `id_login` varchar(15) NOT NULL,
  `username` varchar(35) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `namak` varchar(50) NOT NULL,
  `jumlah` varchar(1) NOT NULL,
  `tglsewa` date NOT NULL,
  `tglkembali` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_bkml`
--

INSERT INTO `td_bkml` (`kdsewa`, `id_login`, `username`, `alamat`, `tlp`, `email`, `namak`, `jumlah`, `tglsewa`, `tglkembali`, `keterangan`) VALUES
(9, '12', 'Fahmy Hidayat', 'Jl. Menteng Atas Selatan 3', '081281476181', 'fahmy@yahoo.com', 'SUZUKI APV', '1', '2020-05-21', '2020-05-27', 'Good');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_bkmr`
--

CREATE TABLE `td_bkmr` (
  `kdsewa` int(11) NOT NULL,
  `id_login` varchar(15) NOT NULL,
  `username` varchar(35) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `namak` varchar(30) NOT NULL,
  `jumlah` varchar(1) NOT NULL,
  `tglsewa` date NOT NULL,
  `tglkembali` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_bkmr`
--

INSERT INTO `td_bkmr` (`kdsewa`, `id_login`, `username`, `alamat`, `tlp`, `email`, `namak`, `jumlah`, `tglsewa`, `tglkembali`, `keterangan`) VALUES
(8, '1', 'Fahmy Hidayat', 'Jl. Menteng Atas Selatan 3 ', '081281476181', 'fahmy@yahoo.com', 'YAMAHA NMX', '1', '2020-04-01', '2020-04-03', 'Good'),
(9, '3', 'fahmy hidayat', 'Jl. Menteng Atas Selatan 3', '081281476181', 'fahmy@gmail.com', 'Yamaha Nmxa', '1', '2020-05-21', '2020-05-29', 'rr');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_booking`
--

CREATE TABLE `td_booking` (
  `kdbooking` int(11) NOT NULL,
  `id_login` varchar(15) NOT NULL,
  `username` varchar(35) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `jumo` varchar(50) NOT NULL,
  `tglb` date NOT NULL,
  `tglp` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_booking`
--

INSERT INTO `td_booking` (`kdbooking`, `id_login`, `username`, `alamat`, `email`, `tlp`, `tujuan`, `jumo`, `tglb`, `tglp`, `keterangan`) VALUES
(22, '1', 'Fahmy hidayat', 'Jl. Menteng Atas Selatan 3', 'fahmy@gmail.com', '081281476181', 'JAKARTA', '3', '2020-05-04', '2020-05-09', 'Good'),
(23, '1', 'fahmy ', 'jl. setiabudi raya ', 'fahmy_115@yahoo.com', '081281476181', 'DKI Jakarta', '5', '2020-05-08', '2020-05-10', 'TOUR JAKARTA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_login`
--

CREATE TABLE `td_login` (
  `id_login` int(15) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_login`
--

INSERT INTO `td_login` (`id_login`, `username`, `password`, `email`) VALUES
(1, 'fahmy', '12345', 'fahmy@gmail.com'),
(2, 'sasa', '1234', 'fahmy@gmail.com'),
(3, 'suhelpa', '123', 'adsasd'),
(4, 'ff', '111', 'fahmy@gmail.com'),
(5, 'r', '111', 'dsad'),
(6, 'yani', 'yani', 'yani@yahoo.com'),
(7, 'panjul', 'peyang', 'panjul'),
(8, 'dadang', 'family', 'dadang'),
(9, 'pay', 'peyang', 'pay@gmail.com'),
(10, 'ss', 'ss', 'sss'),
(11, 'qq', 'qq', 'qq'),
(12, 'xx', 'xx', 'xx'),
(13, 'zz', 'zz', 'zz'),
(14, 'aa', 'aa', 'fafa'),
(15, 'uu', '111', 'fahmy@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_makakhas`
--

CREATE TABLE `td_makakhas` (
  `kdmakakhas` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_makakhas`
--

INSERT INTO `td_makakhas` (`kdmakakhas`, `gambar`, `judul`, `isi`, `tgl_upload`) VALUES
(2, 'akarkelapa.jpg', '8. Akar Kelapa', 'Coconut Root is a legendary cake from Jakarta Betawi kitchen, has a savory and crispy taste and a unique shape similar to the shape of a coconut tree root. There are also some people in Jakarta call it procot cake because when fried, the dough is procoted or released slowly using a tube that has been holes in the end. <br> <br> Jl. Belanak 2 Ujung RT.02 / 01 No.57 <br> Price: Rp. 25,000 IDR (fill 200gr per Pack)', '2020-05-05 08:38:22'),
(3, 'gabus.jpeg', '7. Gabus Pucung', 'The cucumbers use thick fleshy cork fish that is fried not to dry. The soup is combined with sliced â€‹â€‹cabbage, carrots and leeks. The savory taste is a bit spicy making many people like the cork pucung here.<br><br> Jl. M. Kahfi 2 No. 21 A, RT.11 / RW.8, Srengseng Sawah, Jagakarsa <br>Price: IDR 50,000 IDR per serving. <br><br><br>', '2020-06-15 09:41:47'),
(4, 'Gadogado.jpg', '6. Gado-Gado', 'One of the legendary gado-gado sellers in Jakarta. The advantage is in the savory peanut sauce, flushed fresh vegetables and pieces of tofu, tempeh and eggs, as well as shrimp crackers and chips as toppings to make this dish so tempting <br><br>Jl. ITC Cempaka Mas Lantai 5 No. 57 Foodistrict, RW.8, Cemp. Baru, Kec. Kemayoran, Kota Jakarta Pusat, Special Capital Region of Jakarta<br> Price: 35,000 IDR per serving<br><br><br>', '2020-05-05 08:36:39'),
(5, 'keraktelor.jpg', '5. Kerak Telor', 'Egg crust is a food made from glutinous rice and eggs which are then served with serundeng and other toppings. Egg crust is generally cooked using a frying pan and enjoyed while still warm so that the savory taste increasingly appetizing. <br>.<br> Jl. Warung Buncit Raya No.62, RT.11 / RW.5, Kalibata, Kec. Pancoran, Kota Jakarta Selatan, Special Capital Region of Jakarta 12740<br> Price: 25,000 IDR per serving <br><br><br>', '2020-05-05 08:35:29'),
(6, 'nasduk.jpg', '4.  Nasi Uduk', 'Betawi uduk rice is the mainstay of the stall. The choice of side dishes is also abundant. In total, there are 34 types of side dishes and vegetables to choose from. The types of chili sauce are also varied, from peanut sauce, tempeh sauce to anchovy chili sauce. Not interested in enjoying uduk rice, you can choose the vegetable rice cake that is no less delicious.<br><br>  Jl. Mangga Dua Raya No.55, Pinangsia, Kec. Taman Sari, West Jakarta City, Special Capital Region of Jakarta <br>Price: Starting from IDR 10,000 per serving (without side dishes)<br><br><br>', '2020-05-05 08:33:25'),
(7, 'nasiulam.jpg', '3. Nasi Ulam', 'Ulam rice itself is a typical Betawi culinary consisting of white rice with a sprinkling of serundeng, sliced â€‹â€‹cucumbers, basil leaves and mung bean sprouts. Usually eaten with various side dishes. Actually there is a slightly different style of Tangerang ulam rice. Rice is stirred with beans and finely crushed serundeng. Then given a side dish of fried vermicelli, stew or egg and cucumber and basil.<br><br>  Jl. Rubber Pedurenan Gg. Dogol Rt. 04 Rw 04 No 31Ketet Kuningan Setiabudi, South Jakarta<br> Price: IDR 10,000 per serving <br><br><br> ', '2020-05-05 08:32:13'),
(8, 'sotobetaw.jpg', '2. Soto Betawi', 'Imagine, in a portion of soto, you can find beef innards and relatively large and tender cuts of meat, and bring a sweet and savory taste. Intrigued by the taste? Just go straight to one of the most hits Soto Betawi places to eat in Central Jakarta.<br><br> Jl. West Minangkabau No.40, RT.1 / RW.1, Ps. Manggis, Setiabudi District, South Jakarta City<br> Price: 36,000 IDR per serving<br><br><br>', '2020-05-05 08:28:25'),
(13, 'Ketoprak1.jpg', '1. Ketoprak', 'Although this shop sells a main menu consisting of hodgepodge, but ketoprak Puri Kusti is no less tasty. The thing that distinguishes it from other ketoprak is that there are additional pieces of risol in each dish. Meanwhile, for the mixture itself, it consists of rice cake, vermicelli, bean sprouts and eggs which are then doused with peanut sauce. Ketoprak Puri Kusti is also increasingly delicious with the addition of crackers in addition.<br><br>Jl. Block A9 No. Kembangan, Jl. Puri Kembangan No.1, RT.3 / RW.8, Kembangan Sel., West Jakarta.<br>Price: Rp. 15,000 IDR per serving. <br><br><br>', '2020-06-15 09:38:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_makakhasbr`
--

CREATE TABLE `td_makakhasbr` (
  `kdmakakhas` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_makakhasbr`
--

INSERT INTO `td_makakhasbr` (`kdmakakhas`, `gambar`, `judul`, `isi`, `tgl_upload`) VALUES
(17, 'asinanjagung.jpg', '7. Asinan Jagung Bakar', 'Bogor is indeed famous for its pickles, and one of the things you should try is the grilled corn pickles, Mr. Sabur. If usually pickled is made from a mixture of vegetables and fruit such as mustard greens, papaya, cabbage, bean sprouts, kedondong, this pickled vegetables make roasted corn and cucumber as the main ingredients. With a special homemade pickled broth, plus a little spicy taste from the chili, a bowl of grilled pickled corn will be enjoyed with noodle crackers.<br><br>\r\nJl. Surya Kencana No.289, Babakan Ps., Bogor Tengah, Bogor City, West Java\r\n<br>Price: 12,500 IDR per serving', '2020-06-15 09:58:20'),
(18, 'bapatong.jpg', '6. Bapatong', 'Bapatong is short for kupat gentong meatballs. This typical Bogor food is one of the snacks that is nched up because of the taste and texture of the typical food. What distinguishes the culinary meatballs is the form of specially patterned meat, diced shaped and additional beef ribs as a topping.  <br><br>  Location: Jl. Taman Kencana, Babakan, Bogor Tengah, Kota Bogor, West Java <br>Price: 15,000 IDR per serving <br><br><br>', '2020-06-15 10:04:23'),
(19, 'doclang.jpg', '5. Doclang', 'If in Jakarta is famous for ketoprak, Bogor is identical with the doctrine. The difference, in doclang, vermicelli and bean sprouts replaced with potatoes and boiled eggs, equipped with rice cake or rice cake, tofu and watered with peanut sauce. <br><br> Location: Jln Pasir Kuda, Bogor <br>Price: Starting from IDR 8,000 to IDR 10,000 <br><br><br>', '2020-06-15 10:16:55'),
(20, 'laksabogor.jpg', '4. Laksa', 'Selling since 1965, Laksa Pak Inin is one of the culinary items that you must try while on a culinary tour to Bogor. Oncom sauce which is characteristic, as well as the difference between Betawi laksa and Bogor laksa. With the contents of the diamond, vermicelli, bean sprouts, basil leaves, yellow tofu and boiled eggs, you will enjoy a portion of the dish enjoyed. Slurpp! <br><br> Jl. Palasari, Palasari, Cijeruk, Bogor, West Java <br>Price: 10,000 IDR per serving<br><br><br>', '2020-06-15 10:14:03'),
(21, 'ngohiang.jpg', '3.  Ngo Hiang Gang Aut', 'This culinary is a typical Chinese food that enters Bogor. In their home country, this food is based on pork, but has been modified in such a way when entering Indonesia.<br><br>Jl. Suryakencana No.309 A, Sukasari, Kec. Bogor Tim., Kota Bogor, Jawa Barat <br>Price: 30,000 IDR per serving <br><br><br>', '2020-06-15 10:20:24'),
(22, 'soto mie.jpg', '2. Soto Mie', 'Soto Mie In Bogor there are also soto noodles, you know! In fact, this culinary is included in the Bogor special food category that you should try. With a complete filling, ranging from meat, tetelan, cabbage, noodles, radishes, potatoes, celery, leeks, chips and risol, which are then doused with thick broth and additional lime and chili sauce, enjoy soto mie at the Mang Ohim stall , guaranteed you will feel delicious and memorable culinary. <br><br> Jl. Taman Cimanggu Raya No.22, Kedung Waringin, Tanah Sereal, Bogor City, West Java <br>Price: IDR 15,000 per serving <br><br><br>', '2020-06-15 10:11:42'),
(23, 'togogoreng.jpg', '1. Toge Goreng', 'Haji Omah Fried Toge, The taste is spicy and savory, with a sprinkling of authentic Tauco seasoning and fresh bean sprouts. <br><br>Location: Jalan Jend. Sudirman No. 23 A, Pabaton, Bogor Tengah, Sempur, Bogor Tengah, Bogor City, West Java <br>Price: 15,000 IDR per serving<br><br><br>', '2020-06-15 10:24:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_wisata`
--

CREATE TABLE `td_wisata` (
  `kdwisata` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_wisata`
--

INSERT INTO `td_wisata` (`kdwisata`, `gambar`, `judul`, `isi`, `tgl_upload`) VALUES
(2, 'ragunan.jpg', '7. Kebun Binatang Ragunan', 'Visiting Ragunan Wildlife Park means entering a mini tropical forest, in which there is biodiversity that has high conservation value and holds hope for the future.\r\n\r\nA modern zoo displays a complete ecological system that can be a source of knowledge that will start the preservation of wildlife. In short, animal kebuna is our \"Noah Ship\" in the face of natural disasters and damage that often happens lately. When there will be no more forests on this earth, at least there are still examples of this amazing creature in the zoo, whether it has been in the form of animals or still in the form of embryos, cells or DNA.\r\n\r\n', '2020-05-05 10:23:20'),
(3, 'kepulauan.jpg', '6. Kepulauan Seribu', 'The Thousand Islands is an administrative district in the Special Capital Region of Jakarta whose territory includes several clusters of small islands in the Jakarta Bay. The Thousand Islands itself consists of 342 small islands. Not all islands located from the Thousand Islands are inhabited by humans. Only 11 islands inhabited by humans with 3 of them being the islands most inhabited by humans are Panggang Island, Coconut Island, and Pramuka Island which is the center of government of the Thousand Islands.However, did you know that several islands in the Thousand Islands have become tourist destinations in Jakarta and become a tourist icon in the Thousand Islands and the city of Jakarta itself.<br>1. Tidung Island<br>2. Island bush leaves<br>3. Stingray Island<br>4. Island of hopeand many others.<br><br><br>', '2020-05-05 11:49:04'),
(4, 'tamanmini.jpg', '5. Taman Mini Indonesia Indah', 'Taman Mini Indonesia Indah occupies an area of â€‹â€‹150 hectares with an archive lake in the middle of the Indonesian archipelago. Taman Mini has 32 regional platforms, 18 museums, 20 main rides and theaters, 13 parks, 22 facilities, 7 houses of worship and 13 main buildings spread across the TMII area.\r\n\r\nOf the many attractions in the Taman Mini it feels less if you have to be surrounded one by one in a day.\r\n\r\n<br><br><br>', '2020-05-05 10:35:26'),
(5, 'mangrove.jpg', '4. Taman Mangrove PIK', 'Do not assume in Jakarta there is no natural tourism. Glide to North Jakarta, precisely at Kamal Muara Penjaringan or Pantai Indah Kapuk. In this area there is the Jakarta Mangrove Tourism Park which was hit in the last few years.In this area there are three areas, one in the form of Muara Angke Wildlife Reserve which is not open to the public, Mangrove Forest managed by the DKI Provincial Government that can be visited but is not very attractive for tourism, and Angke Mangrove Nature Park which is devoted to mangrove conservation-based tourism areas. <br><br><br>', '2020-05-05 11:24:45'),
(6, 'ancol.jpg', '3. Ancol', 'One of the attractions in Jakarta that is most famous for its game is Taman Impian Jaya Ancol. Yes, who does not know Ancol. A place with high-tech game rides, a large variety of games, not only games for children but also for adults. All can be found in Ancol and are suitable tourist attractions for young people. ancol attractions: <br>1. Dufan<br>2.Sea world<br>3. Altantis Water Adventure<br>4. Ocean Rolls<br>5. Beaches and Parks. <br> <br> <br>', '2020-05-05 11:48:32'),
(7, 'kotatua.jpg', '2. Kota Tua', 'The old town has interesting tours many tourism activities here like this: <br> 1. Adjust Fatahillah <br>2. Fatahilla Art Streat <br>3. Bank Indonesia Mesuem<br><br><br>', '2020-05-05 11:51:19'),
(9, 'monas.jpg', '1. Monas', 'Not only posing in the background of the National Monument, actually there are many activities that can be done in the National Monument complex. Like the following types of activities at Monas:1. Visit the Monas Museum2. Visit the Independence Room3. Up to the top court4. See the dancing fountain. <br><br><br>', '2020-06-15 09:12:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `td_wisatabr`
--

CREATE TABLE `td_wisatabr` (
  `kdwisata` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `td_wisatabr`
--

INSERT INTO `td_wisatabr` (`kdwisata`, `gambar`, `judul`, `isi`, `tgl_upload`) VALUES
(14, 'curuglewi.jpg', '6. Curug Lewi Hejo', 'Curug Lewi Hejo Bogor is a tourist area that stores a variety of natural resources. The city in West Java is not surprised if tourists are always visited during holidays and weekends, especially tourists from the Greater Jakarta area. One of the natural wealth owned by this region is a beautiful waterfall. This waterfall is Curug Leuwi Hejo Sentul which can be used as a list of tourist destinations during the holidays later. Curug Leuwi Hejo is famous as an object of Jabodetabek Nature Tourism with beautiful scenery and clear water. This waterfall is also called the Crooked Curug, and is one of the small waterfalls with a fairly wide waterfall pool. The name Leuwi Hejo is taken from the local Sundanese language. Leuwi means pool. Whereas hejo means green.', '2020-06-15 09:02:53'),
(15, 'jungleland.jpg', '5. Jungleland', 'Jungleland Jungleland is present as an international class tourist attraction in Indonesia. Jungleland accompanied Dufan Ancol by becoming the largest thematic amusement park in Indonesia under the management of PT Jungleland Asia and opened in the Sentul Nirwana area, Sentul City, Bogor. This tourist attraction will stand on an area of â€‹â€‹40 hectares and has 33 types of games imported specifically from Germany and Italy.Jungleland tourism Jungleland began to open on December 12, 2012. Jungleland has four thematic zones namely Carnival, Eksplora, Tropicalia and Mysteria and the Science Center which will become the largest education center in Indonesia. In this Science Center, visitors can enjoy biology, physics labs, insect museums where we have a collection of thousands of butterflies, insects, shellfish galleries and so on. There is also the Downtown zone which will become a culinary tourism center where there are dozens of famous restaurants from a variety of traditional foods typical of Bogor.  <br><br><br>', '2020-06-15 09:21:59'),
(16, 'Tamanm.jpg', '4. Taman Wisata Matahari', 'Taman Wisata Matahari is a family tourism place located on Jalan Raya Puncak KM 77 Cilember, Cisarua, Bogor, West Java. Even though it is on the Puncak Pass tourist route which is prone to traffic congestion [1], but Taman Wisata Matahari is quite attractive to domestic and foreign tourists, especially children and adolescents because besides its relatively close location from Jakarta, the price of admission is also relatively cheap. By buying an entrance ticket of IDR 50,000 on a normal day or IDR 60,000 per person on weekends, [2] visitors can already enjoy water park rides, kayak boats, paddle dragon boats and inflatable boats.  <br><br><br>', '2020-06-15 09:21:23'),
(17, 'minibogor.jpg', '3. Taman Safari Bogor', 'Taman Safari Indonesia is an environmentally friendly family tourism destination oriented to wildlife habitat in the wild. Taman Safari Indonesia is located in Cibeureum Village, Cisarua District, Bogor Regency, West Java, or better known as the Puncak area. This park serves as a buffer for Mount Gede Pangrango National Park at an altitude of 900-1800 m above sea level, and has an average temperature of 16-24 degrees Celsius. [1] Feed animals with carrots.  The uniqueness of this tourist spot from other zoos in Indonesia is that visitors can walk around to various places to get a close look at all kinds of animals using a private car or take a bus that has been provided by the manager of the Safari Park. Visitors can also interact directly by feeding the animals.<br><br><br>', '2020-06-15 09:22:10'),
(18, 'images(8).jpg', '2. Hutan Pinus Gunung Pancar', 'Gunung Pancar is a mountain located in Citeureup Subdistrict, Bogor Regency, West Java, Indonesia. Mount Pancar is located at an altitude of 300-800 m above sea level with a gentle sloping topography with a steep slope of about 15-40%. The highest part is at the peak of Mount Pancar 800 m above sea level and Pasir Astana 700 m above sea level.Mount Pancar has objects and tourist attractions that are quite interesting, namely hot water baths, white mbah sacred tombs which are regarded as ancestors by local residents and enjoy the performance of traditional arts of the region.<br><br><br>', '2020-06-15 09:09:18'),
(19, 'kebunraya.jpg', '1. Kebun Raya Bogor', 'The establishment of the Bogor Botanical Gardens could not be separated from the intervention of a scientist named Rainwardt who conducted research on plants around the Bogor Botanical Gardens. His ambition is so great to find a type of plant that is useful for treatment makes him continue to explore plants that are in the botanical garden. Rainwardt also found various kinds of nutritious plants in a place that had previously been lived by Lieutenant Governor Thomas Stamford Raffles and his wife in 1811. <br><br><br>', '2020-06-15 09:10:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `td_admin`
--
ALTER TABLE `td_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `td_bkml`
--
ALTER TABLE `td_bkml`
  ADD PRIMARY KEY (`kdsewa`);

--
-- Indeks untuk tabel `td_bkmr`
--
ALTER TABLE `td_bkmr`
  ADD PRIMARY KEY (`kdsewa`);

--
-- Indeks untuk tabel `td_booking`
--
ALTER TABLE `td_booking`
  ADD PRIMARY KEY (`kdbooking`);

--
-- Indeks untuk tabel `td_login`
--
ALTER TABLE `td_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `td_makakhas`
--
ALTER TABLE `td_makakhas`
  ADD PRIMARY KEY (`kdmakakhas`);

--
-- Indeks untuk tabel `td_makakhasbr`
--
ALTER TABLE `td_makakhasbr`
  ADD PRIMARY KEY (`kdmakakhas`);

--
-- Indeks untuk tabel `td_wisata`
--
ALTER TABLE `td_wisata`
  ADD PRIMARY KEY (`kdwisata`);

--
-- Indeks untuk tabel `td_wisatabr`
--
ALTER TABLE `td_wisatabr`
  ADD PRIMARY KEY (`kdwisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `td_admin`
--
ALTER TABLE `td_admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `td_bkml`
--
ALTER TABLE `td_bkml`
  MODIFY `kdsewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `td_bkmr`
--
ALTER TABLE `td_bkmr`
  MODIFY `kdsewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `td_booking`
--
ALTER TABLE `td_booking`
  MODIFY `kdbooking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `td_login`
--
ALTER TABLE `td_login`
  MODIFY `id_login` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `td_makakhas`
--
ALTER TABLE `td_makakhas`
  MODIFY `kdmakakhas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `td_makakhasbr`
--
ALTER TABLE `td_makakhasbr`
  MODIFY `kdmakakhas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `td_wisata`
--
ALTER TABLE `td_wisata`
  MODIFY `kdwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `td_wisatabr`
--
ALTER TABLE `td_wisatabr`
  MODIFY `kdwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
