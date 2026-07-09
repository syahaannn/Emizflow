-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2021 pada 17.13
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emizflow`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_data` int(255) NOT NULL,
  `id_prd` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_data` int(255) NOT NULL,
  `nama_kat` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tampil` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_data`, `nama_kat`, `deskripsi`, `tampil`) VALUES
(4, 'Ikan Hias', 'Buat pajangan', 1),
(8, 'Pakan Ikan', 'Per kiloan', 1),
(9, 'Alat', 'Peralatan untuk memelihara ikan hias', 1),
(11, 'Limited Edition', 'Ikan Ini tidak bisa di temukan di manapun', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_data` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kategori` int(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_data`, `nama`, `kategori`, `deskripsi`, `foto`, `harga`, `qty`) VALUES
(14, 'Ikan Cupang', 4, 'Beraneka ragam warna', 'ebb064188fd9cea70acd24937a989a80.jpg', 25000, 200),
(18, 'Pelet Ikan ', 8, 'Berkualitas Tinggi', '230fb399f1d911214ac0447b73b2e7e9.jpg', 35000, 9000),
(20, 'Kail Pancing', 9, 'Alat Pancing', '27dc42ec53273eb1081a24a066d8f1c8.jpg', 5000, 200),
(21, 'Umpan Ikan', 9, 'Umpan ikan untuk pancing', 'fa687b83bbfe77f73924a9e5c9495821.jpg', 12000, 250),
(23, 'Ikan Arwana', 9, 'Merah Berkilau!', '57b9889376feb8513ed67d182bae76fd.jpg', 2000000, 100),
(24, 'Pakan Ikan (Tepung)', 8, 'Berkualitas Tinggi', '94b632cfe0e7fd3c03692af914e85100.jpg', 25000, 7000),
(25, 'Ikan Louhan', 4, 'Sangat bagus dan Unik', '99dcd9a5160c9f075ed4a43c90072730.jpg', 500000, 200),
(26, 'Fishing Rod', 9, 'Alat Pancing Serbaguna', 'f39770a68a4f1a5014ad0ff55cc0708a.jpg', 500000, 50),
(27, 'Senar Pancing', 9, 'Berdaya tahan tinggi', 'd4f82ab5980a9d72a1e560dadd736104.jpg', 75000, 800),
(28, 'Akuarium', 9, 'Tempat ikan hias', '902d522515d5b7950d6bf23e4f502fd1.jpg', 3000000, 50),
(29, 'Ikan Guppy', 4, 'Ikan Guppy adalah salah satu jenis ikan hias paling populer di Indonesia. Ikan ini berasal dari Amerika Selatan. Ikan Guppy memiliki bentuk tubuh seperti wanita yang mengenakan rok. Bentuknya juga menarik karena ikan ini memiliki ukuran yaitu kurang dari 2,5 cm jika diukur dari kepala ke ekor.', '1a660ad2f97c70490e2bce86dd1488ee.jpg', 100000, 20),
(30, 'Ikan Molly', 4, 'Ikan Molly sering juga disebut dengan ikan balon karena kebanyakan ikan molly memiliki perut yang buncit dan tubuh yang bundar.', '1375a74473a5752c618d216ea5ebf8b1.jpg', 5000, 100),
(31, 'Ikan Platy', 4, 'Ikan Platy memiliki bentuk tubuh yang mungil dan memiliki banyak sekali jenisnya. Ukurannya yang kecil dan sifatnya yang cinta damai, membuat banyak orang memilih ikan ini menjadi pilihan untuk dipelihara di akuarium.', '8b1d3973033d5e6ac55bafd89c20e988.jpg', 2000, 2000),
(32, ' Ikan Mas Koki', 4, 'Ikan Mas Koki merupakan salah satu jenis ikan hias yang populer dikalangan pecinta ikan hias. Ikan ini memiliki karakteristik perut buncit dan warna yang cerah dan cantik yang membuat banyak orang menyukainya.', '2c14b29de0e78be17481272854cdccc5.jpg', 10000, 100),
(33, 'Ikan Koi', 4, 'Salah satu jenis ikan hias yang populer dari waktu ke waktu adalah ikan koi. Ikan koi pertama kali diperkenalkan di Jepang pada tahun \'1920-an\' . Ikan koi termasuk hasil persilangan dari beberapa jenis ikan mas dengan warna putih dan merah.', 'dbdd4fef1ec51c90db6add0e23767752.jpg', 2000000, 20),
(34, 'Ikan Komet', 4, 'Ikan komet hampir mirip dengan ikan mas dan ikan mas koki. Jenis ikan hias ini kerap disebut ikan slayer karena bentuk sirip dan ekor ikan ini seperti slayer. Ikan komet juga memiliki warna yang sangat cantik.', '57c4e5b6d41c17424d92457b314aadc5.jpg', 60000, 50),
(35, 'Ikan Neon Tetra', 4, 'Ikan Neon Tetra berasal dari Amerika Latin, tepatnya di Sungai Amazon. Ikan ini memiliki variasi warna biru terang dan putih perak yang menghiasi tubuhnya yang kecil. Ikan ini lebih menarik dipelihara dalam jumlah yang banyak karena sifatnya yang berkoloni atau membentuk gerombolan.', '708224a1de1914250eeda9733a5a9a38.jpg', 100000, 100),
(36, 'Ikan Manfish', 4, 'Ikan Manfish adalah jenis ikan hias yang termasuk dalam keluarga Chiclidae. Ikan ini memiliki warna yang cantik namun elegan. Ikan ini biasanya makan makanan seperti larva nyamuk, cacing tubifeks atau chironomous.', 'fd2e53f44cb7a3e4530fb8ffbd384cb9.jpg', 50000, 50),
(37, 'Ikan Lemon', 9, 'Ikan Lemon diberi nama demikian karena memiliki warna kuning terang seperti buah lemon. Ikan ini terlihat sangat cantik dengan warna kuning yang mencolok tersebut dipadu dengan warna hitam pada ujung sirip atas.', 'aea81972d9ab0c503a7094ac936ac193.jpg', 1000000, 1),
(38, 'Aerator', 9, 'Mesin Aerator Air Pump 2 Lubang Hikari HK-AP3000', '83b66c0295bdc6481c639bebec62ce87.jpg', 41000, 10),
(39, 'Batu Aerasi', 9, 'batu untuk aerasi', 'be725b2715ad2e62b4de95affe4ddac9.jpg', 2000, 100),
(40, 'Filter Aquarium', 9, 'Cocok untuk aquarium 40-50 cm\r\nmerk: nikita ns333\r\nH. Max: 1 Meter\r\nQ. Max: 850L / Jam\r\ndaya: 12 Watt\r\n\r\n3 in 1\r\n- Pompa air\r\n- Box\r\n- Selang\r\n\r\nPacking Aman', 'caa62a4ee7867308de478982e2dd2a12.jpg', 40000, 20),
(41, 'SOBO Timed Auto Feeder DA - 08 -Tempat Pakan ikan Automatis', 9, 'SOBO TIMED AUTO FEEDER - Tidak Dapat Baterai\r\n- Tempat Untuk Memberi Pakan Automatic\r\nHarap Tanyakan Stock Sebelum Membeli\r\n\r\nPacking kardus +bubble wrap untuk pengiriman selain gojek/grab\r\nterutama untuk keluar kota', 'c42cd5fac8db069cf8e8c6d5e061e249.jpg', 200000, 10),
(42, 'Pompa Sirkulator Submersible Mini 12v 6w Brushless Anti Air Untuk Akua', 9, 'Pompa Sirkulator Submersible Mini 12v 6w Brushless Anti Air Untuk Akuarium\r\n\r\n\r\n⏳ Pre-Order. Perkiraan Sampai 10]-15 Hari\r\n✈ Beli DISINI, dari China GRATIS PAJAK\r\n💟 Garansi Uang kembali apabila barang Rusak, Beda Ukuran/Produk', '31888ad3fbe2284daf3aa06e5fee1c27.jpg', 500000, 10),
(43, 'LAMPU GANTUNG LED AQUARIUM HIKARI S 800 3X (SUPER TERANG!!)80CM', 9, 'LAMPU GANTUNG AQUARIUM HIKARI S 800\r\nUNTUK AQUARIUM UKURAN 70CM-85CM (6BARIS LED , 3 KALI LEBIH TERANG DARI LAMPU GANTUNG SEJENISNYA )\r\nBESI BISA DI SESUAIKAN DENGAN PANJANG AQUARIUM\r\nLAMPU BISA 3X GANTI WARNA (PUTIH / MERAH-BIRU-HIJAU / MERAH-BIRU-HIJAU-PUTIH)\r\nDAYA = 42W\r\nKELEBIHAN :\r\n-TIDAK MUDAH PECAH, TIDAK MEMBUAT IKAN PUSING\r\n-SUPER TERANG DAN BANYAK WARNA\r\n-HEMAT ENERGI DAN RAMAH LINGKUNGAN', '7c849c73e7a4ed77983e25ba7ec4ebfe.jpg', 150000, 12),
(44, 'RESUN HEATER RH9000 50W RISING HEAT PEMANAS PENGHANGAT AIR AQUARIUM', 9, 'RESUN HEATER RH9000 50W RISING HEAT ALAT PEMANAS PENGHANGAT AIR AQUARIUM\r\n\r\n- Spiral heating element gives even heat distribution\r\n- Top indicator to set ideal temperature in the aquariums\r\n- Eight different model options for different sizes of aquariums\r\n- Protecting cover is available for optional use\r\n\r\nSpesifikasi:\r\n- Tegangan 220-240V\r\n- Frekuensi 50/60Hz\r\n- Daya 50W\r\n- Dimensi 31 x 285 mm\r\n- Volume maks. 40L', 'eea5a7533bf60bf5576b767ca8d47da6.jpg', 100000, 20),
(45, 'Batu Hias Warna Warni Batu Taiwan Hiasan Aquarium Aquascape 250 Gram', 9, 'Batu Hiasan Untuk mempercantik setting Aquarium Ikan Hias Anda.\r\nWarna tidak luntur.\r\nDaya sebar kurang lebih 12x18 cm\r\nukuran batu kurang lebih sebesar biji jagung.\r\n', 'ad6cf7a32ecb395be7aa24b6f712814b.jpg', 10000, 100),
(46, 'CORONG PENYIMPANAN CACING SUTERA DI AKUARIUM', 9, 'CORONG UNTUK PEMBERIAN PAKAN HIDUP CACING SUTERA UKURAN KECIL,SANGAT BERGUNA KARENA CACING AKAN AWET DITEMPEL LANGSUNG DIDALAM AKUARIUM ANDA', 'c8b465d16dc8bf7746e244ce5c88315d.jpg', 10000, 100),
(47, 'Paket undergravel 60cm aquarium aquascape - Nikita 1200 - BUSA BANTAL', 9, 'Paket undergravel untuk filterisasi aquarium / aquascape.\r\n\r\nIni Adalah FILTER BAWAH\r\n\r\nIsi dalam paket :\r\n- 1bh Undergravel 60 merk Crown / Nikita\r\n- 1bh Mesin Pompa Nikita Ns 1200\r\n- 1bh busa bantal ukuran 30 cm X 100 cm\r\n\r\nDi anjurkan di tambah dengan Substrate bisa Pasir Malang / PAKET MEDIA TANAM / SOIL ULTIMATE', 'd6f58a0838c2d4a7a6dadf00cf2f6866.jpg', 80000, 80),
(48, 'Fluval C4 HOB aquarium filter 265L 1000 L/H - 264 GPH', 9, 'Designed for aquariums between 10 and 30 gallons\r\n\r\nTwo Mechanical stages trap large and fine debris – foams easily slide out for quick cleaning\r\n\r\nChemical stage with activated carbon effectively removes toxins\r\n\r\nBiological stage features Bio-Screen pad – blocks debris and provides massive surface area for beneficial bacteria growth\r\n\r\nBiological Trickle Chamber – super charged for fast and efficient nitrification when loaded with Fluval C-Nodes\r\n\r\nPatented refiltration control system permits slower water output to protect delicate fish/plants and increase contact time with media\r\n\r\nIndependent filtration stage management – changes can be made at different times while maintaining continuous biological activity\r\n\r\nCleaning indicator notifies user when polyfoam needs rinsing\r\n\r\nMade in Italy\r\n\r\nFor use in freshwater and saltwater aquariums\r\n\r\nAquarium Capacity: up to 120cm tank\r\nFilter Circulation: 1000 LPH\r\nWattage: 5W\r\nDimensions: 22.8 x 16.51 x 21.5 cm', 'b93c99ca2f2480f85a72c09b86663655.jpg', 1000000, 10),
(49, 'TOP FILTER AKUARIUM 3 in 1 NIKITA STAR NS-666', 9, 'HARGA PER 1 SET\r\n\r\nBELUM TERMASUK BUSA FILTER\r\n\r\n\r\n- Cocok untuk aquarium 50-60 cm\r\n- Hemat listrik dan tahan lama\r\n\r\nSatu set terdiri dari:\r\n- 1 mesin pompa celup\r\n- 1 box filter bisa di atur panjangnya 40 cm s/d 60 cm\r\n- 1 selang biru dan aksesoris pendukung lainnya.\r\n\r\nSpesifikasi mesin:\r\n- AC 220-240 Volt\r\n- 50 Hz 15 watt\r\n- QMax: 1100 liter/jam\r\n- Hmax: 1 m', '0feccdd6641cbc9eb1336a8f7ed20442.jpg', 100000, 20),
(50, 'Ikan Hiu Makan Tomat', 11, 'cakep', 'b7d4fabe5d85bee2cdb06a74021f1262.jpg', 2147483647, 1),
(51, 'PAUS ORCA', 11, 'AWAS MATI', '315d47b975fc01a4a9c470d4e329587f.jpg', 2147483647, 1),
(52, 'PIRANHA BARU DI TANGKAP', 11, 'AWAS GIGIT', '99c264d7a41c3ef55a60c38c8d286a59.jpg', 900000000, 1),
(53, 'IKAN DI PERUT KUCING', 11, 'MASIH FRESH BARU DI MAKAN', '1195aaf722aacafbfa6f1f2ce8d2c4b7.jpg', 10000, 1),
(54, 'KUDA LAUT', 11, 'BISA DI PAKE KUDA KUDAAN', '3612a06cea180834d1c1c698d048679f.jpg', 10000000, 1),
(55, 'IKAN TERBANG', 11, 'IKANNYA UDAH TERBANG JANGAN DI CARI LAGI', 'b659300de13883095be79119a8c35b3b.jpg', -1, 1),
(56, 'KERANG AJAIB', 11, 'PUJA KERANG AJAIB\r\n-mintalah maka akan ku kasih-', '0e09a4dd0160db7aabe2b751a8add71e.jpg', 2147483647, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id_data` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_data`, `id_user`, `nama_lengkap`, `nomor_hp`, `alamat`) VALUES
(13, 40, 'Test', '08123456789', 'Kobar'),
(14, 41, 'Hamba Allah', '123456789', 'Syurga'),
(15, 42, 'hambayesus', '666', 'di salib');

-- --------------------------------------------------------

--
-- Struktur dari tabel `receipt`
--

CREATE TABLE `receipt` (
  `id_data` int(255) NOT NULL,
  `kode_reg` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trans`
--

CREATE TABLE `trans` (
  `id_data` int(255) NOT NULL,
  `id_prd` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `kode_reg` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_data` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_data`, `username`, `password`, `level`) VALUES
(39, 'demo@demo', 'e396bbb053529d2ddb17b100aa04d7c5', 'admin'),
(40, 'test@test', 'e396bbb053529d2ddb17b100aa04d7c5', 'user'),
(41, 'hamba_allah@email.com', 'e396bbb053529d2ddb17b100aa04d7c5', 'user'),
(42, 'hambayesus@mail.com', 'fb9628132a209eb2883cc4274bebfa42', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_prd` (`id_prd`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_data` (`id_data`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `kategori` (`kategori`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `kode_reg` (`kode_reg`);

--
-- Indeks untuk tabel `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_prd` (`id_prd`),
  ADD KEY `username` (`username`),
  ADD KEY `kode_reg` (`kode_reg`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `trans`
--
ALTER TABLE `trans`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_data` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_prd`) REFERENCES `produk` (`id_data`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_data`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_data`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`kode_reg`) REFERENCES `trans` (`kode_reg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `trans`
--
ALTER TABLE `trans`
  ADD CONSTRAINT `trans_ibfk_1` FOREIGN KEY (`id_prd`) REFERENCES `produk` (`id_data`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trans_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
