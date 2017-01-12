-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 07:13 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `aa`
--

CREATE TABLE IF NOT EXISTS `aa` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aa`
--

INSERT INTO `aa` (`id`, `name`, `city`) VALUES
(1, 'ANT', 'moratuwa,ratnapura'),
(2, 'nuwan', 'kandy'),
(3, 'chama', 'ratnapura,jaffna,boralanda'),
(4, 'chamara', 'panadura,ratmalana'),
(5, 'cat', 'ella,sigiriya');

-- --------------------------------------------------------

--
-- Table structure for table `fulldemo`
--

CREATE TABLE IF NOT EXISTS `fulldemo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `fulldemo`
--

INSERT INTO `fulldemo` (`id`, `name`, `city`, `location`, `description`) VALUES
(7, 'cn', 'moratuwa,mirissa', 'photos/131.jpg', 'asjkdsa askjdsak sajkdjs akjd dajd'),
(8, 'cnm', 'kandy,kalutara', 'photos/14.jpg', 'ghjhj jhjkh ytg ui g iuhjhk iuyhkjh uiio 98ij jhjgh '),
(9, 'name', 'bandarawela,dambagalla,bibile,lunugala,talalla', 'photos/12.jpg', 'alkds skjjsnf sf;ksf ;fskjsf s;kjfjfjf fsiuf fsf suiffjf fjfaf fajfnf');

-- --------------------------------------------------------

--
-- Table structure for table `news_insert`
--

CREATE TABLE IF NOT EXISTS `news_insert` (
  `nid` int(10) NOT NULL AUTO_INCREMENT,
  `news_id` int(10) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`news_id`),
  UNIQUE KEY `nid` (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `news_insert`
--

INSERT INTO `news_insert` (`nid`, `news_id`, `title`, `image`, `body`) VALUES
(43, 9, 'jkj', '3d_inspiration-wide.jpg', 'jhjkh'),
(47, 12, 'dd', '1000732_514209148652539_505163077_n.jpg', '<p>ddddddddddddddddddddddddddddddddddddddddd</p>\r\n<p>ddddddddddddddddddddd</p>'),
(42, 20, 'testing is done', 'robocop_2014_movie-wide.jpg', 'kjskj\r\nslkklksd\r\ndjdsdls\r\n'),
(1, 21, 'lkdjd', 'nphotos/11.jpg', '<p>kajshd .,sahdj&nbsp;&nbsp;&nbsp; kkx <strong>cc.c <em>jkdh</em></strong></p>'),
(21, 22, 'test2', 'nphotos/s-l225.jpg', '<p>zlkNx&lt;&gt;ZX KjSAlajs</p>'),
(22, 24, 'dd', 'nphotos/5643d106N255de557.jpg', '<p>ddddd</p>'),
(24, 25, 'dd', 'nphotos/5643d106N255de557.jpg', '<p>ddddd</p>'),
(44, 50, 'kellae', '1000732_514209148652539_505163077_n.jpg', 'amda,mdsad'),
(45, 52, 'edited', 'anime_protagonist-1920x1080.jpg', ',sdm,sd'),
(46, 75, 'hello', 'girl_in_rain-HD.jpg', '<p>jDJJDjd</p>\r\n<p>jdkdj kjDJd jdkdd <em>jkSJSAJKS Mnsm</em></p>\r\n<p><em>kjsjkJKJjS</em></p>\r\n<p><em>kjsjkJS</em></p>\r\n<p><em>kJSKSjk</em></p>\r\n<p>&nbsp;</p>'),
(48, 88, 'jkj', 'the_vampire_diaries_season_5_2013-wide.jpg', '<p>afd jghjh jjh kjh kjkj kj kl kjkkll lkkj lkjkj kjlkjll kjkjk kjlkkj lkjkjk kjklkj kjkjj kjlkj kllj kjklj</p>'),
(49, 98, 'hh', 'katniss_jennifer_lawrence-wide.jpg', 'nb mhb mbn kjhjk kjhk kjhjkk hjkh khkj kjh hjkhkj kjh kjhkjh hjhj jhhj jhj jhkj khjgh hjghjg  khj hghjg hjghg '),
(35, 128, 't', 'Kanisa-A600_411.jpg', '<p>hhhhhh</p>\r\n<p>ldkssadk</p>\r\n<p>&nbsp;</p>'),
(36, 129, 't', 'Kanisa-A600_411.jpg', '<p>hhhhhh</p><p>ldkssadk</p><p>&nbsp;<br></p>'),
(31, 134, 'dfd', 'nphotos/27a1a458ac.jpg', 'sffddf'),
(32, 135, 'dfd', 'nphotos/27a1a458ac.jpg', '<p>sffddf</p>'),
(34, 137, 'teest', 'imaghes.jpg', '<aLKS/ksm.,as'),
(39, 140, 'testing2', 'index.jpg', 'kaslksjsa'),
(40, 141, 'testing3', 'bugatti_veyron_grand_sport_vitesse_legend_jean_bugatti_2013-1920x1080.jpg', 'hi '),
(41, 143, 'testing5', 'battlefield_4_game-wide.jpg', 'hello world'),
(33, 321, 'sdfsdf', 'nphotos/Anne-Teubert600_758.jpg', 'hi '),
(28, 390, 'hgh', 'nphotos/tumblr_nfrsul6kvo1tyxwuyo4_1280.jpg', '<p>nm</p>'),
(51, 432, 'tieke hsc', 'bicycle-wide.jpg', '<p>kdjjhd klhfjdhf lkdfhlf lkdlfhf lkafhjjkf kjdfhdf lkdfhjfd lkdhjkdf lkfjdhdfjk lkfjdjhkdf kjfddhkjhadsf lkdfdhjkj hdsflkdjfh .k.f</p>'),
(50, 452, 'ur rjskjxzc', '', '<p>.zn,mcznd,nxc .,N&lt; XC.,c s.,jnZX&lt;&gt;jas sa,s,.skjDZzx</p>\r\n<p><strong>,HJZBBXC&lt;b</strong></p>'),
(38, 682, 'test9', '27a1a458ac.jpg', '<p>ksjajs askjsa cnxmc jklkj</p>'),
(52, 889, 'oiupE', '283109_361114883977241_34566100_n.jpg', '<p>LKSDDDDDDDDDDDD</p>');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `caption` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `location`, `caption`, `desc`) VALUES
(1, '2.jpg', 'nmn', 'These image description guidelines were developed by the Carl and Ruth Shapiro Family National Center for Accessible Media at WGBH (NCAM) in conjunction with the DIAGRAM Center (Digital Image And Graphic Resources for Accessible Materials) at Benetech. The DIAGRAM Center is a research and development center whose goal is to make it easier, cheaper, and faster to create and use accessible digital images. Established in 2010, the DIAGRAM Center is a Benetech Global Literacy initiative supported by the U.S. Department of Education, Office of Special Education Programs.zea.'),
(2, '1.jpg', 'ss', 'Through a series of grants funded by the National Science Foundation and the US Department of Education, NCAM has been researching and developing methods for creating effective and efficient text alternatives to images so that kids and adults, students and professionals, who are blind or have low vision can have equal access to image-rich digital texts cn.'),
(3, '4.jpg', 'cn', 'Beginning in 2004, under a grant from the National Science Foundation, NCAM began research into refining description approaches for images found in science, technology, engineering, and mathematics (STEM) texts. NCAM and its project partners reviewed hundreds of by descriptions and numerous image types, eventually narrowing their focus to the most commonly used images in STEM. This research included rounds of surveys with blind and low vision STEM professionals (scientists, mathematicians, etc.) and user-testing with higher education students with visual impairments. The result was a set of guidelines and training materials for image description that encourage recommended practices such as brevity, focus on data, clarity and consistency in language, navigation control via accessible lists, tables, and the proper use of headers.'),
(4, '5.jpg', 'kdkd', 'In late 2012, the DIAGRAM Center launched the Poet Image Description Tool – an open-source, web-based tool facilitating the production of accessible images. To date, over 45,000 image descriptions have been created using Poet, but feedback from early adopters and partners unearthed significant challenges related to writing descriptions. In response, NCAM and DIAGRAM teamed up in the fall of 2014 to provide additional references to support those looking to make images accessible.'),
(5, '3.jpg', 'jkdsd kjd kjAJS Kjs ', ' India''s bowlers required just 38.1 overs to wrap up a 246-run victory on the final day of the second Test in Visakhapatnam, as England''s resolve - fatally weakened by the loss of two wickets late on the fourth evening - was finally cracked with nothing but pride left to play for. The damage had been done in a frantic morning session in which they slumped from 87 for 2 to 142 for 7, and the tail succumbed meekly after lunch, with only Jonny Bairstow showing any real resistance with 34 not out.\r\n\r\nThe margin of victory perhaps overstated the gulf between the sides - the key difference, in every sense, was India''s captain and Man of the Match Virat Kohli, whose aggregate of 248 runs single-handedly accounted for the deficit in England''s balance. But, having fought so hard for so long, especially in the second half of the contest, the speed of their final-day demise was dispiriting for England, with the third Test in Mohali looming large next week. '),
(6, '1.jpg', 'Spinners wrap up India''s', ' Contrary to all pre-match predictions, the pitch still wasn''t spinning dramatically by the final day, but it was skidding through at a hustling pace to match India''s turbo-charged over-rate - they bowled 33.4 in the morning session, including an extraordinary ten in the first half-hour alone as Ravindra Jadeja and R Ashwin tied England in knots at a rate of knots.\r\n\r\nThe devastating dismissal of Alastair Cook, in the last over of the fourth day, had left England fearing the worst when play resumed, and there was an inevitability about the identity of the first victim of the morning. Ben Duckett''s rich strokeplay and inventive attitude will doubtless serve him well as his England career progresses, but in this situation - and particularly against his nemesis, Ashwin - those attributes had roughly the same value as an INR 500 note. '),
(7, '2.jpg', 'news jff kfj', ' Moeen Ali was the next to go, his technique against the spinners looking solid right up until the moment Jadeja got one to grip in the rough outside off, and accelerate onto his inside edge for Kohli to complete a lobbed catch at leg gully. From 75 for 0 after 50 overs, England were now in freefall at 101 for 4 after 74 - the flip-side of their siege mentality being that India were now camping as many as five close catchers under every new batsman''s nose.\r\n\r\nSuch close attention didn''t bother Ben Stokes at first. He had been so solid in defence in the first innings, and continued his tried-and-trusted methods in a 33-ball stay. But, when India turned to the second new ball - and in the process, gave Jadeja''s fingers a rest after 25 overs on the trot had left him with the outstanding figures of 34-14-35-2 - the lankier offspin of Jayant Yadav conjured the ball of the match. '),
(8, '3.jpg', 'root m,xmf ,mc', ' A faster, flatter offbreak from around the wicket drifted as Stokes played back, then spat past his edge to clip the outside of his off stump. Stokes nodded his appreciation as the bowler hurtled past in celebration, and when Root was nailed by Mohammed Shami nine balls later, the teams might as well have shaken hands there and then.\n\nRoot had once again been England''s most accomplished technician on the day. But, having survived an early reprieve when Kohli spilled a sharp chance at leg slip, he was pinned on the crease by a zippy nipbacker from Shami and sent on his way for 25 from 107 balls.\n\nThere was time for one more breakthrough before lunch, as Adil Rashid top-edged an attempted ramp over the slips, to give Shami his second wicket of the innings, and the denouement came in a resigned procession after the resumption. '),
(9, 'Kanisa-A600_411.jpg', 't', '<p>hhhhhh</p>\r\n<p>ldkssadk</p>\r\n<p>&nbsp;</p>'),
(10, 'index.jpg', 'testing2', 'kaslksjsa'),
(11, 'bugatti_veyron_grand_sport_vitesse_legend_jean_bugatti_2013-1920x1080.jpg', 'testing3', 'hi '),
(12, 'fantasy_warrior-HD.jpg', 'testing4', 'hello world'),
(13, 'girl_in_rain-HD.jpg', 'hello', '<p>jDJJDjd</p>\r\n<p>jdkdj kjDJd jdkdd <em>jkSJSAJKS Mnsm</em></p>\r\n<p><em>kjsjkJKJjS</em></p>\r\n<p><em>kjsjkJS</em></p>\r\n<p><em>kJSKSjk</em></p>\r\n<p>&nbsp;</p>'),
(14, '1000732_514209148652539_505163077_n.jpg', 'dd', '<p>dddd\nddd dddd ddd dddd dddddd dddd ddddddd ddd ddd</p>\n<p>dd ddddd ddddd dd \nddddd dd</p\n>\n'),
(15, '10.jgp', 'kjxjkc', 'kjhgvhsagsfaga'),
(16, 'the_vampire_diaries_season_5_2013-wide.jpg', 'jkj', '<p>afd jghjh jjh kjh kjkj kj kl kjkkll lkkj lkjkj kjlkjll kjkjk kjlkkj lkjkjk kjklkj kjkjj kjlkj kllj kjklj</p>'),
(17, 'katniss_jennifer_lawrence-wide.jpg', 'hh', 'nb mhb mbn kjhjk kjhk kjhjkk hjkh khkj kjh hjkhkj kjh kjhkjh hjhj jhhj jhj jhkj khjgh hjghjg  khj hghjg hjghg '),
(18, '', 'ur rjskjxzc', '<p>.zn,mcznd,nxc .,N&lt; XC.,c s.,jnZX&lt;&gt;jas sa,s,.skjDZzx</p>\r\n<p><strong>,HJZBBXC&lt;b</strong></p>'),
(19, 'bicycle-wide.jpg', 'tieke hsc', '<p>kdjjhd klhfjdhf lkdfhlf lkdlfhf lkafhjjkf kjdfhdf lkdfhjfd lkdhjkdf lkfjdhdfjk lkfjdjhkdf kjfddhkjhadsf lkdfdhjkj hdsflkdjfh .k.f</p>');

-- --------------------------------------------------------

--
-- Table structure for table `vx`
--

CREATE TABLE IF NOT EXISTS `vx` (
  `id` int(4) NOT NULL DEFAULT '0',
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phonenum` int(10) NOT NULL,
  `nic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
