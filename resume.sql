-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 06:47 PM
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
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `year`, `exp`, `country`, `city`, `phone`, `email`, `status`, `img`, `introduction`) VALUES
(1, '林仕杰', '36', '5', '台灣', '基隆市', '0939621520', 'edwardlin1116@gmail.com', '待業', 'about-2.jpg', '我是個喜愛自由自在與無拘無束的生活，並好好享受人生的每分每秒。\r\n\r\n在學習新事物，則抱持好奇的心與興奮感，讓我學習無負擔。');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234'),
(2, 'root123', 'root123');

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`id`, `content`, `sh`) VALUES
(1, '我的家庭成員有五位，爸爸、媽媽、姐姐、我和弟弟。在小時候，父母教導我們做事情認真的態度，並準時完成交付的事務。\r\n		\r\n在大學這四年中，學習課內與課外的知識；磨練課內與課外的相關技能；教導學到課內與課外的知識與技能給所需要的人。在過程中，我不只是學習；還練習；甚至指導，在需要時便能信手拈來，這樣讓我更加得心應手。\r\n\r\n以下是我個人的特色、專長、興趣與宗教信仰：\r\n\r\n1.我的個性積極進取，著重於助人，在閒暇之餘利用時間自我進修程式語言。\r\n2.我的優缺點合併，基於讓事情、事件或工作呈現完美化。但會先正常運作執行，再優化。\r\n3.我的興趣為各球類運動、聽音樂與閱讀書籍（程式語言、勵志書籍等）。\r\n4.我的專長為網頁撰寫、球類運動。\r\n5.我的宗教信仰為 SGI 國際創價學會。\r\n6.我的社交活動為 SGI 國際創價學會(有各個行業的朋友)、同學與朋友，有休閒、團體活動、舉辦活動與家訪同學等。\r\n\r\n在踏入社會的行業中，每個人都有著自己必需擔任的角色或者是自己想要擔任的角色，那就必需做到稱職並做到最好，這就是最佳的將才。\r\n\r\n在津橋管理顧問有限公司，擔任 MIS 一職。在任職期間，工作內容如下：\r\n\r\n1.官網的建置、程式撰寫、維護、管理與備份。\r\n2.網路設備的建置、設定(內外部 VPN 等)、維護、管理與備份，讓網路頻寬在使用上更為順暢。\r\n3.伺服器與平台建置、維護、管理與備份。\r\n4.電腦設備組裝與軟體應用安裝。\r\n5.網路佈線與規劃，在各辦公室的使用與維護較為方便。\r\n6.軟體使用教學及撰寫簡易手冊。\r\n7.設備廠商的聯繫、洽談與購買，並減低軟硬體成本。\r\n8.使用 Access 製作資料庫製作顧客登記與諮詢表單，減少找尋紙本的時間成本。\r\n9.使用 Excel 製作資料庫製作登記顧問訪談達成率、學生出國率、英國各校達成率、顧問績效達成率，可清楚了解成效與目標。\r\n10.教學課程影片拍攝與剪輯。\r\n\r\n※ 出差於倫敦、北京與上海公司，也完成上述項目。\r\n\r\n\r\n在進入一家公司後，我所設立的目標：\r\n\r\n在短間內，向有經驗的前輩學習並充分瞭解整個公司營運的規模與模式，就能邁向成功的第一步。因為有了明確的做事方式，肯定能節省時間、呈現最好的效率。\r\n\r\n在中期內，自我設定明確的目標必定能如願達成，這樣便能朝向下一個設定的目標前進，盡而產生自我的團隊或團隊合作更為融洽，目標並再度達標。\r\n	\r\n在長期內，除了設定更加長遠的目標自我成長，既可以實現又能達成公司賦予的任務。', 1),
(2, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bottom`
--

CREATE TABLE `bottom` (
  `id` int(10) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '頁尾');

-- --------------------------------------------------------

--
-- Table structure for table `edu`
--

CREATE TABLE `edu` (
  `id` int(10) UNSIGNED NOT NULL,
  `school` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `edu`
--

INSERT INTO `edu` (`id`, `school`, `year`, `dep`, `sh`) VALUES
(1, '景文科技大學', '2006 ~ 2011', '資訊工程系', 1),
(2, '聖心高職', '1998 ~ 2001', '資訊科', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`id`, `title`, `year`, `content`, `sh`) VALUES
(1, '歐立科技股份有限公司', '2016 - 2019', '1. 網站的程式撰寫、維護與管理\r\n2. 伺服器與平台維護與管理\r\n3. 平面設計\r\n4. 影片製作與後製', 1),
(2, '津橋管理顧問有限公司', '2013 - 2015', '1. 網站的建置、程式撰寫、維護與管理\r\n2. 網路設備的建置、設定、維護與管理\r\n3. 伺服器與平台建置、維護與管理\r\n4. 電腦設備組裝與軟體應用安裝\r\n5. 網路佈線建置\r\n6. 軟體使用教學及撰寫簡易手冊\r\n7. 設備廠商的購買、聯繫與洽談\r\n8. 教學課程影片拍攝與剪輯', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `category`, `property`, `salary`, `place`, `sh`) VALUES
(1, '前端工程師、後端工程師、全端工程師', '全職', '面議', '台北市、新北市、基隆市', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portf`
--

CREATE TABLE `portf` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portf`
--

INSERT INTO `portf` (`id`, `text`, `img`, `href`, `sh`) VALUES
(1, '統一發票管理系統', 'invoice.jpg', 'http://220.128.133.15/s1090207/invoice/index.php', 1),
(2, '獵人試驗', 'trial.jpg', 'http://220.128.133.15/s1090207/Through-Game/index.html', 1),
(3, '數位時鐘', 'digital_clock.jpg', 'http://220.128.133.15/s1090207/Digital-Clock/index.html', 1),
(4, '類比時鐘', 'analog_clock.jpg', 'http://220.128.133.15/s1090207/Analog-Clock/index.html', 1),
(5, '打地鼠', 'gophers.jpg', 'http://220.128.133.15/s1090207/Gophers/index.html', 1),
(6, '顏色選擇器', 'color.jpg', 'http://220.128.133.15/s1090207/Palette/index.html', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `img`, `text`, `sh`) VALUES
(1, 'html.png', 'HTML', 1),
(2, 'css.png', 'CSS', 1),
(3, 'bs.png', 'Bootstrap', 1),
(4, 'js.png', 'Java Script', 1),
(5, 'jq.png', 'JQuery', 1),
(6, 'php.png', 'PHP', 1),
(7, 'ps.png', 'Photoshop', 1),
(8, 'ai.png', 'Illustrator', 1);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `img`, `text`, `sh`) VALUES
(6, 'c1.jpg', 'code', 1),
(9, 'c2.jpg', '駭客任務', 0);

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE `total` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 777888);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portf`
--
ALTER TABLE `portf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `edu`
--
ALTER TABLE `edu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portf`
--
ALTER TABLE `portf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `total`
--
ALTER TABLE `total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
