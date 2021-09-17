-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2016 at 04:08 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `takmobl`
--
CREATE DATABASE IF NOT EXISTS `takmobl` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `takmobl`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `age` int(11) NOT NULL,
  `img` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `age`, `img`, `username`, `password`) VALUES
(1, 'علیرضا', 'صادقی نژاد', 21, 'http://localhost/takmobl/thumb/perosnal.png', 'ashkan', 'ashkan29'),
(2, 'سجاد', 'اذربایجانی', 25, 'http://localhost/takmobl/thumb/perosnal.png', 'kaveh', '25');

-- --------------------------------------------------------

--
-- Table structure for table `btmads`
--

CREATE TABLE IF NOT EXISTS `btmads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `btmads`
--

INSERT INTO `btmads` (`id`, `src`, `link`) VALUES
(1, 'http://localhost/takmobl/thumb/_D985D8ADD984_D8AAD8A8D984DB8CD8BA_D8B4D-1.gif', 'http://google.php'),
(2, 'http://localhost/takmobl/thumb/ads11.gif', 'http://google.com'),
(3, 'http://localhost/takmobl/thumb/hvhqzcmvrkm2s5zuba1k.gif', 'http://google.com'),
(4, 'http://localhost/takmobl/thumb/jgrlfd6s3u35e52ni49f.gif', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`) VALUES
(3, 'خانه', 'http://localhost/takmobl/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `src` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `content` varchar(5000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `src`, `content`) VALUES
(11, 'سرویس خواب', 'http://localhost/takmobl/thumb/SmartPicture%20(1).jpg', 'وجود مدل های مختلف سرویس خواب هایa چوبی و سلطنتی در بهترین کیفیت اولین قدم خدمت رسانی ما می باشد. وجود تنوع بالا در سرویس خواب با مناسب ترین قیمت و تضمین کیفیت، بزرگ ترین وظیفه مجموعه ما نسبت به اعتماد شما می باشد. تهیه بهترین ها از ما و بررسی و انتخاب هوشمندانه از شما.\r\n\r\nدسته سرویس خواب دارای زیر مجموعه های تخت خواب و سرویس خواب چوبی می باشد که سرویس خواب چوبی خود دارای دو زیر مجموعه سرویس خواب اسپرت و سرویس خواب سلطنتی می باشد.\r\n\r\nهزینه حمل که برای هر یک از محصولات قید شده است به تفکیک تهران و شهرستان می باشد که در صورت باقی ماندن مبلغی از هزینه هایی که فروشگاه برای ارسال کالا تا مقصد می نماید، مابه التفاوت دریافتی به خریدار عودت می گردد.\r\n\r\nهمچنین از دیگر محصولات دیگر دیجی چوب بوفه می باشد که برای مشاهده این محصولات می توانید به صفحه بوفه مراجعه نمایید.\r\nود مدل های مختلف سرویس خواب هایa چوبی و سلطنتی در بهترین کیفیت اولین قدم خدمت رسانی ما می باشد. وجود تنوع بالا در سرویس خواب با مناسب ترین قیمت و تضمین کیفیت، بزرگ ترین وظیفه مجموعه ما نسبت به اعتماد شما می باشد. تهیه بهترین ها از ما و بررسی و انتخاب هوشمندانه از شما.\r\n\r\nدسته سرویس خواب دارای زیر مجموعه های تخت خواب و سرویس خواب چوبی می باشد که سرویس خواب چوبی خود دارای دو زیر مجموعه سرویس خواب اسپرت و سرویس خواب سلطنتی می باشد.\r\n\r\nهزینه حمل که برای هر یک از محصولات قید شده است به تفکیک تهران و شهرستان می باشد که در صورت باقی ماندن مبلغی از هزینه هایی که فروشگاه برای ارسال کالا تا مقصد می نماید، مابه التفاوت دریافتی به خریدار عودت می گردد.\r\n\r\nهمچنین از دیگر محصولات دیگر دیجی چوب بوفه می باشد که برای مشاهده این محصولات می توانید به صفحه بوفه مراجعه نمایید.\r\nود مدل های مختلف سرویس خواب هایa چوبی و سلطنتی در بهترین کیفیت اولین قدم خدمت رسانی ما می باشد. وجود تنوع بالا در سرویس خواب با مناسب ترین قیمت و تضمین کیفیت، بزرگ ترین وظیفه مجموعه ما نسبت به اعتماد شما می باشد. تهیه بهترین ها از ما و بررسی و انتخاب هوشمندانه از شما.\r\n\r\nدسته سرویس خواب دارای زیر مجموعه های تخت خواب و سرویس خواب چوبی می باشد که سرویس خواب چوبی خود دارای دو زیر مجموعه سرویس خواب اسپرت و سرویس خواب سلطنتی می باشد.\r\n\r\nهزینه حمل که برای هر یک از محصولات قید شده است به تفکیک تهران و شهرستان می باشد که در صورت باقی ماندن مبلغی از هزینه هایی که فروشگاه برای ارسال کالا تا مقصد می نماید، مابه التفاوت دریافتی به خریدار عودت می گردد.\r\n\r\nهمچنین از دیگر محصولات دیگر دیجی چوب بوفه می باشد که برای مشاهده این محصولات می توانید به صفحه بوفه مراجعه نمایید.'),
(12, 'مبل استیل', 'http://localhost/takmobl/thumb/SmartPicture%20(2).jpg', 'مبل استیل یا همام مبل سلطنتی از انواع مبلمان خانگی می باشد که بیشتر فرم رسمی و مجلسی دارد و بیشتر برای مراسم و مهمانی ها مورد  استفاده قرار می گیرد. مبل استیل دارای طراحی و رنگ بندی متنوعی می باشد و از این جهت جای بسیار زیادی برای تغییر دارد. قیمت مبلمان سلطنتی به نسبت میزان چوب بکار رفته، طرح منبت بکار رفته در آن، کیفیت پارچه بکار رفته و نوع رنگ آن تعیین می نماید و دارای قیمت بالاتری نسبت به مبل راحتی می باشد. در هنگام خرید مبلان استیل انتخاب پارچه یکی دیگر از مواردی می باشد که مد نظر قرار می گیرد. برای انتخاب پارچه می توانید در قسمت پارچه، بخش پارچه مبلمان خانگی، پارچه مد نظر را انتخاب نمایید. علاوه بر آن می توانید پارچه بکار رفته در مبلمان استیل موجود در سایت را برای بکار گیری در مبل استیل انتخاب شده خود برگزینید.\r\n\r\nهزینه حمل که برای هر یک از محصولات قید شده است به تفکیک تهران و شهرستان می باشد که در صورت باقی ماندن مبلغی از هزینه هایی که فروشگاه برای ارسال کالا تا مقصد می نماید، مابه التفاوت دریافتی به خریدار عودت می گردد.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `src`, `title`) VALUES
(7, 'http://localhost/takmobl/thumb/20158102342470a.jpg', 'بهترین-حس'),
(8, 'http://localhost/takmobl/thumb/20158102342631a.jpg', 'زیباترین');

-- --------------------------------------------------------

--
-- Table structure for table `specialpost`
--

CREATE TABLE IF NOT EXISTS `specialpost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `src` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `specialpost`
--

INSERT INTO `specialpost` (`id`, `title`, `src`, `content`) VALUES
(4, 'تست1', 'http://localhost/takmobl/thumb/test.jpg', 'مبل استیل یا همام مبل سلطنتی از انواع مبلمان خانگی می باشد که بیشتر فرم رسمی و مجلسی دارد و بیشتر برای مراسم و مهمانی ها مورد استفاده قرار می گیرد. مبل استیل دارای طراحی و رنگ بندی متنوعی می باشد و از این جهت جای بسیار زیادی برای تغییر دارد. قیمت مبلمان سلطنتی به نسبت میزان چوب بکار رفته، طرح منبت بکار رفته در آن، کیفیت پارچه بکار رفته و نوع رنگ آن تعیین می نماید و دارای قیمت بالاتری نسبت به مبل راحتی می باشد. در هنگام خرید مبلان استیل انتخاب ...'),
(5, 'تست2', 'http://localhost/takmobl/thumb/test.jpg', 'وجود میز ناهار خوری در منازل می تواند ظاهری به منزل شما ببخشد. وجود میز ناهار خوری چوبی بسته به سبک طراحی و ساخت محصولات می تواند هارمونی منزل شما را متحول نماید. فروشگاه اینترنتی دیجی چوب برای انتخاب میز ناهار خوری چوبی خوب تمام تلاش خود را بکار گرفته است تا محصولات زیبا، با کیفیت و با قیمت تمام شده مناسب در اختیار شما بگذارد. فروشگاه اینترنتی دیجی چوب این امکان را دارد تا در انتخاب میز ناهار خوری بصورت ترکیبی میز و صندلی مدل های مختلف ...'),
(6, 'تست3', 'http://localhost/takmobl/thumb/test.jpg', 'وجود مدل های مختلف سرویس خواب هایa چوبی و سلطنتی در بهترین کیفیت اولین قدم خدمت رسانی ما می باشد. وجود تنوع بالا در سرویس خواب با مناسب ترین قیمت و تضمین کیفیت، بزرگ ترین وظیفه مجموعه ما نسبت به اعتماد شما می باشد. تهیه بهترین ها از ما و بررسی و انتخاب هوشمندانه از شما. دسته سرویس خواب دارای زیر مجموعه های تخت خواب و سرویس خواب چوبی می باشد که سرویس خواب چوبی خود دارای دو زیر مجموعه سرویس خواب اسپرت و سرویس خواب سلطنتی می باشد. هزینه حمل که ...');

-- --------------------------------------------------------

--
-- Table structure for table `topads`
--

CREATE TABLE IF NOT EXISTS `topads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `topads`
--

INSERT INTO `topads` (`id`, `src`, `link`) VALUES
(3, 'http://localhost/takmobl/thumb/tunn8pe2xue2tbcefwe-1.gif', 'htt://google.com'),
(4, 'http://localhost/takmobl/thumb/y36qijob8tliug8ptvwp.gif', 'htt://google.com'),
(5, 'http://localhost/takmobl/thumb/ads11.gif', 'htt://google.com'),
(6, 'http://localhost/takmobl/thumb/29523247322362508919-1.gif', 'http://google.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
