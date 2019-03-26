-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 07:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `isi` varchar(2000) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `judul`, `isi`, `waktu`) VALUES
(8, 'Zenius Education ', 'Penulis mengenal situs ini sejak di bangku SMA. Saat itu sedang girang-girangnya mencari soal-soal latihan SBMPTN. Nah sahabat guru, Zenius Education adalah website pendidikan yang menyediakan berbagai materi pembelajaran mulai dari tingkat SD hingga SMA.<br>\r\nGuru bisa memanfaatkan situs ini sebagai sumber belajar dimana siswa diminta untuk mencari materi yang sedang dipelajari. Guru juga bisa memanfaatkan situs belajar online ini untuk meng-eksplorasi kemampuan siswa melalui latihan soal secara online. Hmmâ€¦ menarik bukan?\r\n', '2019-03-11 06:24:29'),
(9, 'Wikipedia (Website Pendidikan Ragam Ensiklopedia)', 'Bagi para guru yang sudah sering berselancar di dunia internet, tentu sudah tidak asing lagi dengan situs ini. Wikipedia merupakan salah satu website pendidikan terbesar di dunia yang menyajikan berbagai ulasan materi berdasarkan kata pencarian. Banyak hal yang bisa kita temukan.<br>\r\nMulai dari definisi kata, ensiklopedia sejarah, penjabaran sains, biografi tokoh, profil Negara, pengetahuan tentang budaya dunia dan lain sebagainya. Nah, kini saat nya menjadi guru inspiratif dengan menyajikan sumber belajar yang luas untuk siswa siswinya.', '2019-03-05 14:22:35'),
(10, 'KelasKita (Marketplace Pendidikan Indonesia)', 'Pertama kali membuka situs kelaskita, hal pertama yang terbesit adalah bahwa kelaskita adalah sebuah marketplace. Tetapi bukanlah marketplace barang konsumtif, melainkan marketplace ilmu. Ya, kelaskita merupakan portal pendidikan yang menyediakan berbagai kursus yang bisa diikuti pengunjung. Berbagai materi pembelajaran hingga materi pengetahuan umum bisa guru dapatkan disini, sehingga bisa menjadi tambahan modal mengajar di kelas. <br>\r\n Letâ€™s be an â€œout of the boxâ€ teacher!', '2019-03-05 14:23:20'),
(13, 'RuangGuru (Ruang Belajar Online Indonesia)', 'Situs untuk belajar  yang berdiri di tahun 2014 ini kini menjelma menjadi startup terkemuka di bidang pendidikan. Situs ini dapat dimanfaatkan baik oleh guru maupun siswa, karena disini guru dan siswa dapat berlangganan video materi pembelajaran dan mengerjakan soal-soal tryout berbagai mata pelajaran, membetuk suatu kelompok belajar di dunia maya, dan masih banyak lagi yang lainnya.', '2019-03-05 14:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(46, 'renyah', 'renyah@gmail.com', '78f358c6297af2b8a95b4897b17fe195'),
(47, 'dayat', 'day@gmail.com', '202cb962ac59075b964b07152d234b70'),
(48, 'ui', 'ui@gmail.com', '202cb962ac59075b964b07152d234b70'),
(49, 'pink', 'pinky@gmail.com', '202cb962ac59075b964b07152d234b70'),
(50, 'kharisa', 'kharisa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(51, 'yewi', 'ye@gmail.com', '202cb962ac59075b964b07152d234b70'),
(52, 'risya', 'risyasya28@gmail.com', '202cb962ac59075b964b07152d234b70'),
(53, 'uli', 'uli28@gmail.com', '202cb962ac59075b964b07152d234b70'),
(54, 'keyla', 'keyla@gmail.com', '202cb962ac59075b964b07152d234b70'),
(55, 'jelly', 'jel@gmail.com', '202cb962ac59075b964b07152d234b70'),
(56, 'tasya', 'tasya@gmail.com', '202cb962ac59075b964b07152d234b70'),
(57, 'gary', 'gary@gmail.com', '202cb962ac59075b964b07152d234b70'),
(58, 'gendut', 'gendut@gmail.com', '202cb962ac59075b964b07152d234b70'),
(59, 'ulik', 'ulik@gmail.com', '5e9035c8727db80f5b635f06c7e141d5'),
(60, 'bonbon', 'bon@gmail.com', '202cb962ac59075b964b07152d234b70'),
(61, 'bonyi', 'bu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(62, 'louis', 'luis@gmail.com', '3e7e122bf08f48432c961ba491089dc9'),
(63, 'eli', 'eli@gmail.com', '202cb962ac59075b964b07152d234b70'),
(64, 'indri', 'ind@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
