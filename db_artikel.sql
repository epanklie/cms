-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 04 Feb 2016 pada 08.32
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_artikel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id` int(11) NOT NULL,
  `id_kategory` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `isi` text NOT NULL,
  `tag` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `create_at` varchar(45) NOT NULL,
  `update_at` varchar(45) NOT NULL,
  `hit` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `id_kategory`, `judul`, `isi`, `tag`, `image`, `path`, `posted_by`, `create_at`, `update_at`, `hit`) VALUES
(2, 1, 'Komputer1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Screenshot_from_2015-11-22_09:37:27.png', 'res/dist/images/Screenshot_from_2015-11-22_09:37:27.png', 2, 'Wed, 09-Dec-2015 15:48:22', 'Wed, 09-Dec-2015 15:48:22', 0),
(3, 1, 'Komputer2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Screenshot_from_2015-11-22_09:37:41.png', 'res/dist/images/Screenshot_from_2015-11-22_09:37:41.png', 2, 'Wed, 09-Dec-2015 15:49:00', 'Wed, 09-Dec-2015 15:49:00', 0),
(4, 1, 'Komputer3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Screenshot_from_2015-11-22_09:38:03.png', 'res/dist/images/Screenshot_from_2015-11-22_09:38:03.png', 1, 'Wed, 09-Dec-2015 15:49:25', 'Wed, 09-Dec-2015 15:49:25', 0),
(20, 1, 'xzcxzc', '&lt;p&gt;vbvcbvcbvcbvcbvcbzasdasd&lt;/p&gt;\r\n', 'komputer, laptop-bagus.', '15-1.jpg', 'res/dist/images/15-1.jpg', 1, 'Wed, 03-Feb-2016 17:56:42', 'Wed, 03-Feb-2016 17:56:42', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `nama`, `email`, `subject`, `pesan`) VALUES
(1, 'Epank', 'epank@gmail.com', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategory`
--

CREATE TABLE IF NOT EXISTS `tbl_kategory` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `url` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategory`
--

INSERT INTO `tbl_kategory` (`id`, `nama`, `url`) VALUES
(1, 'Komputer', 'pc'),
(2, 'Laptop', 'laptop'),
(3, 'Handphone', 'mobile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `id` int(11) NOT NULL,
  `website_name` varchar(150) NOT NULL,
  `website_description` text NOT NULL,
  `website_email` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `page_about` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `website_name`, `website_description`, `website_email`, `icon`, `page_about`) VALUES
(1, 'GoBlogs', 'hai ASD', 'admin@asd.com', 'icon.png', '<p>Compellingly network innovative best practices and backward-compatible supply chains. Globally extend excellent sources through frictionless models. Continually predominate competitive ROI through turnkey outsourcing. Progressively brand synergistic opportunities via standardized mindshare. Phosfluorescently synthesize tactical web-readiness via ubiquitous methodologies.</p>\r\n\r\n<p>Appropriately pursue world-class niches with pandemic infomediaries. Efficiently pontificate dynamic metrics without fully tested users. Quickly negotiate customer directed e-business via performance based sources. Monotonectally utilize orthogonal ideas vis-a-vis covalent leadership. Credibly communicate virtual infomediaries for functionalized products.</p>\r\n\r\n<p>Assertively deliver one-to-one intellectual capital rather than interactive e-tailers. Uniquely e-enable multidisciplinary infomediaries after long-term high-impact experiences. Collaboratively innovate progressive technologies before viral infomediaries. Continually productize progressive interfaces rather than resource-leveling sources. Credibly plagiarize multidisciplinary paradigms via focused infrastructures.</p>\r\n\r\n<p>Credibly leverage existing next-generation e-tailers after standards compliant schemas. Phosfluorescently create one-to-one methods of empowerment with team driven networks. Phosfluorescently network market-driven catalysts for change for flexible internal or &quot;<em>organic</em>&quot; sources. Compellingly brand e-business materials for client-based leadership. Completely streamline cross-unit deliverables before resource sucking paradigms.</p>\r\n\r\n<p>Credibly provide access to cost effective synergy rather than resource-leveling products. Energistically predominate scalable networks without client-centric growth strategies. Completely optimize customized intellectual capital through revolutionary data. Energistically coordinate efficient products rather than cross functional quality vectors. Dramatically foster distinctive leadership before accurate opportunities.</p>\r\n\r\n<p>Seamlessly architect wireless initiatives vis-a-vis user-centric &quot;<strong>outside the box</strong>&quot; thinking. Assertively disseminate 2.0 initiatives whereas wireless e-tailers. Conveniently maintain multidisciplinary information with distributed functionalities. Seamlessly matrix visionary technologies through ethical vortals. Credibly procrastinate bleeding-edge partnerships with reliable testing procedures.</p>\r\n\r\n<p>Credibly strategize 24/365 synergy vis-a-vis 24/365 infomediaries. Professionally coordinate frictionless benefits rather than user friendly core competencies. Conveniently procrastinate front-end metrics vis-a-vis covalent networks. Uniquely productivate equity invested e-commerce vis-a-vis user-centric bandwidth. Energistically whiteboard prospective relationships through standardized ideas.</p>\r\n\r\n<p>Quickly facilitate state of the art bandwidth vis-a-vis business web services. Compellingly underwhelm just in time synergy before team building testing procedures. Objectively maintain visionary schemas through intuitive partnerships. Objectively e-enable front-end experiences rather than stand-alone infrastructures. Conveniently transition functional data whereas resource sucking innovation.</p>\r\n\r\n<p>Credibly underwhelm out-of-the-box e-markets via parallel e-tailers. Holisticly incubate innovative vortals rather than client-centered bandwidth. Synergistically initiate timely resources whereas alternative action items. Monotonectally develop 24/365 intellectual capital after reliable collaboration and idea-sharing. Rapidiously empower virtual initiatives before clicks-and-mortar core competencies.</p>\r\n\r\n<p>Dramatically architect impactful e-business whereas sustainable web-readiness. Compellingly synthesize cross-unit leadership skills before real-time synergy. Interactively initiate long-term high-impact schemas and interoperable collaboration and idea-sharing. Monotonectally cultivate economically sound content vis-a-vis interactive total linkage. Authoritatively innovate goal-oriented vortals through cross-platform e-business.</p>\r\n\r\n<p>Uniquely restore customized initiatives and scalable human capital. Uniquely impact team driven e-tailers vis-a-vis alternative innovation. Progressively communicate high-payoff process improvements via enabled best practices. Completely cultivate sticky solutions without interoperable bandwidth. Compellingly engage open-source scenarios via holistic potentialities.</p>\r\n\r\n<p>Interactively disintermediate timely opportunities after out-of-the-box customer service. Phosfluorescently recaptiualize best-of-breed users with superior supply chains. Uniquely build real-time web services vis-a-vis standardized web-readiness. Dramatically scale client-centric services for enabled web-readiness. Appropriately fabricate error-free growth strategies through standards compliant methodologies.</p>\r\n\r\n<blockquote>\r\n<p>Professionally fashion collaborative technologies before cost effective initiatives. Proactively repurpose clicks-and-mortar scenarios.</p>\r\n</blockquote>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE IF NOT EXISTS `tbl_sosmed` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `url` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id`, `title`, `url`, `icon`) VALUES
(1, 'Facebook', 'https://www.facebook.com/Epank.Lie', 'fa fa-facebook'),
(2, 'Twitter', 'https://www.twitter.com/ervantonius', 'fa fa-twitter'),
(3, 'Google+', '#', 'fa fa-google-plus'),
(4, 'Github', '#', 'fa fa-github');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tag`
--

CREATE TABLE IF NOT EXISTS `tbl_tag` (
  `id` int(11) NOT NULL,
  `tag_title` varchar(255) NOT NULL,
  `tag_seo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tag`
--

INSERT INTO `tbl_tag` (`id`, `tag_title`, `tag_seo`) VALUES
(1, 'handphone', 'handphone'),
(2, 'komputer', 'komputer'),
(3, 'laptop', 'laptop'),
(4, 'laptop bagus', 'laptop-bagus'),
(5, 'handphone bagus', 'handphone-bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` enum('1','2') NOT NULL,
  `create_at` varchar(45) NOT NULL,
  `update_at` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `username`, `password`, `level`, `create_at`, `update_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '08-11-2015 11:52:26', '10-12-2015 03:02:40'),
(2, 'User', 'user@user.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '2', '08-11-2015 11:52:59', '08-11-2015 11:52:59'),
(3, 'Epank', 'epank.lie2110@gmail.com', 'epanklie', '0b9559a7df099f12690fdb8c4ca3344c', '1', 'Wed, 03-Feb-2016 21:56:48', 'Wed, 03-Feb-2016 21:56:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kategory` (`id_kategory`),
  ADD KEY `posted_by` (`posted_by`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategory`
--
ALTER TABLE `tbl_kategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_kategory`
--
ALTER TABLE `tbl_kategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_kategory`) REFERENCES `tbl_kategory` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_artikel_ibfk_2` FOREIGN KEY (`posted_by`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
