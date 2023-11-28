SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `ticket_mania` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ticket_mania`;

CREATE TABLE IF NOT EXISTS `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(1000) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`, `link`) VALUES
(1, 'Oppenheimer', '27/11 18.15 - 3h - Thriller -  R', 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.', 130000, 40, 'oppenheimer.jpg', 'uYPbbksJxIg'),
(2, 'Fast X', '28/11 15.30 - 2h 21m - Action - 13+', 'Dom Toretto and his family are targeted by the vengeful son of drug kingpin Hernan Reyes.', 60000, 55, 'fast.jpg', 'eoOaKN4qCKw'),
(3, 'PAW Patrol: The Mighty Movie', '28/11 19.30 - 1h 28m - Animation - PG', 'A magical meteor crash lands in Adventure City and gives the PAW Patrol pups superpowers, transforming them into The Mighty Pups.', 90000, 10, 'paw.jpg', 'UDgjJ9XzgHk'),
(4, 'JKT48: Ponytail dan Shu-Shu', '29/11 09.00 - 5m - Wota - G', 'Lebih cepat dari hari di kalender. Aku pun menyingsingkan lengan baju. Matahari pun mulai terasa dekat. Kurasa musim telah mulai berubah.', 500000, 0, 'pony.jpg', '2wvqBMjPmqk'),
(5, 'Blue Beetle', '29/11 09.00 - 2h 7m - Sci-Fi - PG-13', 'An alien scarab chooses Jaime Reyes to be its symbiotic host, bestowing the recent college graduate with a suit of armor thats capable of extraordinary powers, forever changing his destiny as he becomes the superhero known as Blue Beetle.', 70000, 50, 'blue.jpg', 'vS3_72Gb-bI'),
(6, 'Spider-Man: Across the Spider-Verse', '29/11 20.00 - 2h 20m - Animation - PG', 'Miles Morales catapults across the Multiverse, where he encounters a team of Spider-People charged with protecting its very existence. When the heroes clash on how to handle a new threat, Miles must redefine what it means to be a hero.', 125000, 30, 'spider.jpg', 'cqGjhVJWtEg'),
(7, 'Sewu Dino', '29/11 12.00 - 2h 1m - Horror - 13+', 'Sri is tasked to do a cleansing ritual for Dela Atmojo, an unconscious girl who is suffering from 1000 days-hex. The terror begins when her friend neglects to finish the ritual. Failing until the 1000th day will result in their demise.', 80000, 40, 'dino.jpg', '12sXNFbQa6I'),
(8, 'Shazam! Fury of the Gods', '29/11 12.15 - 2h 10m - Action - 13+', 'The film continues the story of teenage Billy Batson who, upon reciting the magic word "SHAZAM!" is transformed into his adult Super Hero alter ego, Shazam.', 85000, 40, 'shazam.jpg', 'Zi88i4CpHe4'),
(9, 'The Equalizer 3', '28/11 19.15 - 1h 49m - Action - R', 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.', 120000, 45, 'eq3.jpg', '19ikl8vy4zs'),
(10, 'The Nun II', '27/11 18.00 - 1h 50m - Horror - R', '1956 - France. A priest is murdered. An evil is spreading. The sequel to the worldwide smash hit follows Sister Irene as she once again comes face-to-face with Valak, the demon nun.', 40000, 40, 'nun.jpg', 'QF-oyCwaArU'),
(11, 'Barbie', '29/11 20.00 - 1h 54m - Fantasy - PG-13', 'Barbie suffers a crisis that leads her to question her world and her existence.', 50000, 55, 'barbie.jpg', 'pBk4NYhWNMM'),
(12, 'Kalian Pantas Mati', '30/11 15.00 - 1h 46m - Horror - 13+', 'A teenager with the uncanny ability to communicate with the dead must stop a vengeful demon whos exacting revenge on students at his high school.', 400000, 60, 'zee.jpg', 'Z5lJeoeo1BM'),
(13, 'Kingdom of the Planet of the Apes', '2024 - Sci-Fi', 'Many years after the reign of Caesar, a young ape goes on a journey that will lead him to question everything hes been taught about the past and make choices that will define a future for apes and humans alike.', 0, 0, 'apes.jpg', 'NQ_HvTBaFoo'),
(14, 'Joker: Folie à Deux', '2024 - Drama', 'Plot unknown. Sequel to the 2019 film Joker.', 0, 0, 'joker.jpg', 'FWNvrryaG9M'),
(15, 'Captain America: Brave New World', '2025 - Action', 'Plot kept under wraps. Fourth movie in the Captain America franchise.', 0, 0, 'captain.jpg', 'VNpmdsuo40M'),
(16, 'Godzilla x Kong: The New Empire', '2024 - Sci-Fi', 'Plot kept under wraps.', 0, 0, 'godzilla.jpg', 'odM92ap8_c0'),
(17, 'Spider-Man: Beyond the Spider-Verse', '? - Animation', 'After leaving off from Spider-Man: Across the Spider-Verse, the story continues.', 0, 0, 'beyond.jpg', 'rAXydvnvktE'),
(18, 'A Quiet Place: Day One', '2024 - Horror', 'Plot under wraps.', 0, 0, 'quiet.jpg', 'umVpZCzy5Ak'),
(19, 'Inside Out 2', '2024 - Animation', 'Follow Riley, in her teenage years, encountering new emotions.', 0, 0, 'inside.jpg', 'VWavstJydZU'),
(20, 'Deadpool 3', '2024 - Action', 'Wolverine joins the "merc with a mouth" in the third installment of the Deadpool film franchise.', 0, 0, 'deadpool.jpg', '2Z8me1bwZJE');

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2);

ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

COMMIT;