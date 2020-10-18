-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2020 at 02:19 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
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
-- Database: `tot`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `thumbnail`, `name`, `content`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '/uploads/images/thumbnails/1602908804.png', 'ข้อมูลบริษัท', '<p>รายละเอียดทั่วไปขององค์กร</p>\r\n\r\n<hr />\r\n<p>บมจ.ทีโอที นับเป็นองค์กรที่วางรากฐานระบบสื่อสารโทรคมนาคมไทยมาเป็นระยะเวลากว่า 60 ปี ด้วยประสบการณ์อันยาวนาน ทีโอที พร้อมให้บริการสื่อสารโทรคมนาคมแบบครบวงจร ตอบสนองความต้องการครอบคลุมทุกกลุ่มเป้าหมายให้ได้รับความพึงพอใจสูงสุด</p>\r\n\r\n<p><img alt=\"\" src=\"/webimages/pages/tot/about/pastandpresent/company-info-img-1.jpg\" /></p>\r\n\r\n<p>ชื่อบริษัท</p>\r\n\r\n<p>บริษัท ทีโอที จำกัด (มหาชน)</p>\r\n\r\n<p>เริ่มก่อตั้ง</p>\r\n\r\n<p>วันที่ 24 กุมภาพันธ์ 2497 โดยแปลงสภาพมาจากองค์การโทรศัพท์แห่งประเทศไทย เมื่อวันที่ 31 กรกฎาคม 2545</p>\r\n\r\n<p><img alt=\"\" src=\"/webimages/pages/tot/about/pastandpresent/company-info-img-2.jpg\" /></p>\r\n\r\n<p>ประเภทธุรกิจ</p>\r\n\r\n<p>ให้บริการโทรคมนาคมและธุรกิจอื่นที่เกี่ยวเนื่อง โดยดำเนินการเอง และ/หรือร่วมกับบุคคลอื่น นอกจากนี้ยังดำเนินการลงทุน โดยการถือหุ้นในบริษัทอื่น</p>\r\n\r\n<p>ทะเบียนบริษัท</p>\r\n\r\n<p>0107545000161</p>\r\n', 1, 1, 1602908804, 1602910393),
(2, '/uploads/images/thumbnails/1602923415.png', 'วิสัยทัศน์และพันธกิจ', '<p>พันธกิจ</p>\r\n\r\n<hr />\r\n<p><img alt=\"\" src=\"https://www.tot.co.th/webimages/pages/tot/about/vision-mission-img-1.jpg\" /></p>\r\n\r\n<p>1</p>\r\n\r\n<p>เป็นรัฐวิสาหกิจสำคัญในการขับเคลื่อนเศรษฐกิจและสังคมไทยสู่ยุคดิจิทัล</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.tot.co.th/webimages/pages/tot/about/vision-mission-img-2.jpg\" /></p>\r\n\r\n<p>2</p>\r\n\r\n<p>ให้บริการโครงสร้างพื้นฐานโทรคมนาคมและดิจิทัลอย่างมีคุณภาพเพื่อส่งเสริมความมั่นคงของรัฐ</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.tot.co.th/webimages/pages/tot/about/vision-mission-img-3.jpg\" /></p>\r\n\r\n<p>3</p>\r\n\r\n<p>นำนวัตกรรมและเทคโนโลยีดิจิทัล<br />\r\nมายกระดับคุณภาพชีวิตที่ดีของคนไทย</p>\r\n\r\n<p>ค่านิยม</p>\r\n\r\n<hr />\r\n<p>A</p>\r\n\r\n<p>Acceleration &amp;&nbsp;Agility</p>\r\n\r\n<p>รวดเร็ว &amp; คล่องตัว</p>\r\n\r\n<p>I</p>\r\n\r\n<p>Innovation</p>\r\n\r\n<p>สรรค์สร้างนวัตกรรม</p>\r\n\r\n<p>T</p>\r\n\r\n<p>Transparency &amp;&nbsp;Integrity</p>\r\n\r\n<p>ซื่อสัตย์ &amp; โปร่งใส</p>\r\n\r\n<p>O</p>\r\n\r\n<p>Operation&nbsp;Excellence</p>\r\n\r\n<p>ทำงานมุ่งความเป็นเลิศ</p>\r\n\r\n<p>T</p>\r\n', 1, 1, 1602923415, 1602923415);

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `gallery` text,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `created_by` int NOT NULL,
  `updated_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `description`, `gallery`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.', 'Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.\r\n\r\nSed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.', '/uploads/images/activities/ac-1602910681-1.png,/uploads/images/activities/ac-1602910681-2.png,/uploads/images/activities/ac-1602910681-3.png,/uploads/images/activities/ac-1602910681-4.png', 1602910681, 1602910681, 1, 1),
(2, 'โครงการสุขศาลาพระราชทาน', '<h2>ทีโอที ได้ร่วมสืบสานพระราชปณิธานของสมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี ที่ทรงมุ่งหวังให้พสกนิกรได้รับการพัฒนาคุณภาพชีวิตที่ดีขึ้น</h2>\r\n\r\n<blockquote>\r\n<p>ด้วยพระราชปณิธานของสมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี ที่ทรงมุ่งหวังให้พสกนิกรผู้ยากไร้ได้รับการพัฒนาคุณภาพชีวิตที่ดีขึ้น และได้ทรงมีพระราชดำริที่จะพัฒนาหน่วยพยาบาลที่มีอยู่ในโรงเรียนตำรวจตระเวนชายแดนในพื้นที่ห่างไกลให้เป็น &ldquo;สุขศาลาพระราชทาน&rdquo; ตั้งแต่ปี พ.ศ. 2549 เป็นต้นมา เพื่อเป็นที่พึ่งทางด้านสุขภาพของนักเรียนและประชาชนในถิ่นทุรกันดารทั้งในยามปกติและฉุกเฉิน รวมทั้งช่วยให้เกิดความไว้วางใจในเจ้าหน้าที่ของรัฐและเป็นส่วนสนับสนุนให้เกิดความมั่นคงของชาติ<br />\r\n<br />\r\nเนื่องจากปัญหาในการติดต่อสื่อสาร ของระบบโทรคมนาคมในสุขศาลาพระราชทานกับโรงพยาบาลส่งเสริมสุขภาพตำบล (รพ.สต.) หรือโรงพยาบาลประจำอำเภอและจังหวัดเป็นไปด้วยความลำบาก และระบบวิทยุสื่อสารที่มีและติดตั้งใช้งานอยู่ก่อนหน้านั้น ไม่สามารถใช้งานติดต่อประสานงานได้ทุกที่อย่างต่อเนื่องพร้อมกัน เพราะส่วนมากโรงเรียนตำรวจตระเวนชายแดนแต่ละแห่งจะตั้งอยู่ในถิ่นทุรกันดาร หรืออยู่บริเวณริมตะเข็บชายแดนที่ไม่มีระบบสาธารณูปโภคใดๆเข้าถึง บริษัท ทีโอที จำกัด (มหาชน) จึงได้ดำเนินการติดตั้งระบบเทคโนโลยีสารสนเทศและการสื่อสาร ซึ่งประกอบไปด้วยอุปกรณ์สื่อสารผ่านดาวเทียม IP-Star (KU-Band), อุปกรณ์แพร่สัญญาณอินเทอร์เน็ตไร้สาย (Wireless Access Point) และโทรศัพท์ จำนวน 1 เลขหมาย เพื่อช่วยให้การติดต่อสื่อสารและประสานงานที่ดีขึ้น และอีกวัตถุประสงค์หนึ่งที่สำคัญ เพื่อเป็นการสนองพระราชดำริของสมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี เพื่อใช้ในการให้การให้คำปรึกษาและรักษาพยาบาลด้วยการสื่อสารทางไกลผ่านภาพและเสียง (Telemedicine) ซึ่งเป็นรูปแบบในการรักษาพยาบาลที่เหมาะสมกับโครงการสุขศาลาพระราชทาน ซึ่งมีแต่ครูพยาบาลและเจ้าหน้าที่อาสาสาธารณสุขหมู่บ้าน (อสม.) โดยไม่มีแพทย์ที่มีความเชี่ยวชาญในการรักษาพยาบาลผู้ป่วย</p>\r\n</blockquote>\r\n\r\n<h2>กลุ่มเป้าหมาย:</h2>\r\n\r\n<blockquote>\r\n<p>โรงเรียนตำรวจตระเวนชายแดนทั่วประเทศ หรือหน่วยพยาบาลในท้องถิ่นทุรกันดารที่ขาดโอกาสในการเข้าถึงทางการแพทย์พื้นฐาน อันเนื่องมาจากความยากลำบากในการเดินทาง ทีโอที ร่วมสนับสนุนการจัดหาระบบเทคโนโลยีสารสนเทศและเครือข่ายการสื่อสาร เพื่อใช้ในการรักษาพยาบาลด้วยการสื่อสารทางไกลผ่านภาพและเสียง (Telemedicine) โดยติดตั้งระบบและอุปกรณ์สื่อสารผ่านดาวเทียม IP-Star เพื่อให้บริการอินเทอร์เน็ตความเร็วสูงสุด 2/2 Mbps (หรือระบบอื่นที่สามารถให้บริการได้ เช่น Wi-Net ด้วยความเร็วสูงสุด 15/1 Mbps หรือ Fiber Optic ด้วยความเร็วสูงสุด 100/30 Mbps). อุปกรณ์แพร่สัญญาณอินเทอร์เน็ตไร้สาย (Wi-Fi Access Point). โทรศัพท์ 1 เลขหมาย และระบบการรักษาทางไกลผ่านภาพและเสียงที่มีความคมชัดระดับ HD ด้วย Web Conference ผ่าน MCU (Multi Conference Unit) ที่สามารถรองรับการใช้งานทั้งบนคอมพิวเตอร์ PC , Notebook, Tablet หรือ Smart Phone (รองรับทั้ง iOS และ Android)<br />\r\n<br />\r\nโดย ทีโอที ดำเนินการติดตั้งระบบและอุปกรณ์พร้อมทั้งติดตั้งโปรแกรมใช้งานและอุปกรณ์ IT อื่นๆที่จำเป็นต่อการใช้งาน รวมทั้งอบรมให้ความรู้ในการใช้งานและบำรุงรักษาอุปกรณ์ต่างๆอย่างถูกวิธี เพื่อให้สามารถใช้งานได้อย่างต่อเนื่องและยาวนาน<br />\r\n<br />\r\nเริ่มตั้งแต่ปี พ.ศ.2552 &ndash; 2558 ได้ดำเนินการติดตั้งระบบเทคโนโลยีสารสนเทศและเครือข่ายการสื่อสารสำหรับโครงการสุขศาลาพระราชทานโรงเรียนตำรวจตระเวนชายแดนจำนวน 14 แห่ง โดยมีระบบสื่อสารที่แตกต่างกันตามพื้นที่ให้บริการ ดังนี้</p>\r\n\r\n<p>1. โรงเรียนตำรวจตระเวนชายแดนชมรมอนุรักษ์พุธศิลปะไทยอนุสรณ์ บ้านแสนคำลือ อ.ปางมะผ้า จ.แม่ฮ่องสอน (IP-Star)<br />\r\n2. โรงเรียนตำรวจตระเวนชายแดนบ้านเลตองคุ อ. อุ้มผาง จ.ตาก (IP-Star)<br />\r\n3. โรงเรียนตำรวจตระเวนชายแดนบ้านแม่จันทะ อ. อุ้มผาง จ.ตาก (IP-Star)<br />\r\n4. โรงเรียนตำรวจตระเวนชายแดนบ้านทิไลป้า อ.สังขละบุรี จ.กาญจนบุรี (IP-Star)<br />\r\n5. โรงเรียนตำรวจตระเวนชายแดนบ้านโป่งลึก อ.แก่งกระจาน จ.เพชรบุรี (IP-Star)<br />\r\n6. โรงเรียนตำรวจตระเวนชายแดนบ้านละโอ อ.ศรีสาคร จ.นราธิวาส (Fiber Optic)<br />\r\n7. โรงเรียนตำรวจตระเวนชายแดนบ้านไอร์บือแต อ.จะแนะ จ.นราธิวาส (IP-Star)<br />\r\n8. โรงเรียนตำรวจตระเวนชายแดนบ้านปิล็อกคี่ อ.ทองผาภูมิ จ.กาญจนบุรี (IP-Star)<br />\r\n9. โรงเรียนตำรวจตระเวนชายแดนบ้านป่าหมาก อ.สามร้อยยอด จ.ประจวบคีรีขันธ์ (IP-Star)<br />\r\n10. โรงเรียนตำรวจตระเวนชายแดน มรว.เฉลิมลักษณ์ จันทรเสน อ.แม่ระมาด จ.ตาก (IP-Star)<br />\r\n11. โรงเรียนตำรวจตระเวนชายแดนท่านผู้หญิงประไพ ศิวะโกเศศ อ.อมก๋อย จ.เชียงใหม่ (IP-Star)<br />\r\n12. โรงเรียนตำรวจตระเวนชายแดนรางวัลอินทิรา คานธี อ.อมก๋อย จ.เชียงใหม่ (IP-Star)<br />\r\n13. โรงเรียนตำรวจตระเวนชายแดนบ้านลีนานนท์ อ.สุคิริน จ.นราธิวาส (Fiber Optic)<br />\r\n14. โรงเรียนตำรวจตระเวนชายแดนบ้านห้วยกุ๊ก อ.เวียงแก่น จ.เชียงราย (Wi-Net)<br />\r\nโดยมีแผนการดำเนินงานอย่างต่อเนื่อง (ตามกระแสพระราชดำริฯ) ในปี พ.ศ. 2559 - 2560 เพิ่มจำนวนสุขศาลาพระราชทานโรงเรียนตำรวจตระเวนชายแดนอีก 3 แห่ง ได้แก่<br />\r\n15. โรงเรียนตำรวจตระเวนชายแดนบ้านไบก์ อ. เมืองยะลา จ.ยะลา (Fiber Optic)<br />\r\n16. โรงเรียนตำรวจตระเวนชายแดนบ้านแพรกตะคร้อ อ.หัวหิน จ.ประจวบคีรีขันธ์ (IP-Star)<br />\r\n17. โรงเรียนตำรวจตระเวนชายแดนบ้านปอหมื้อ อ.แม่สะเรียง จ.แม่ฮ่องสอน (IP-Star)<br />\r\nปี พ.ศ. 2560 &ndash; 2561 มีเพิ่มอีก 3 แห่ง (เริ่มเปิดใช้งาน 15 ธ.ค. 60) ได้แก่<br />\r\n18. โรงเรียนตำรวจตระเวนชายแดนเฉลิมฉลองครบรอบร้อยปีฯ (บ้านสะไล) อ.บ่อเกลือ จ.น่าน (IP-Star)<br />\r\n19. บ้านป่าก่ำ อ.บ่อเกลือ จ.น่าน (IP-Star)<br />\r\n20. บ้านห้วยปูด อ.เฉลิมพระเกียรติ จ.น่าน (IP-Star)<br />\r\nและปี พ.ศ. 2561 ทรงมีพระราชกระแสรับสั่งให้จัดตั้งสุขศาลาพระราชทานเพิ่มอีก 2 แห่ง (เริ่มเปิดใช้งาน พ.ค. 61) คือ<br />\r\n21. ศูนย์การเรียน ตชด.บ้านโกแประ อ.แม่สะเรียง จ.แม่ฮ่องสอน (IP-Star)<br />\r\n22. ศูนย์การเรียน ตชด. ท่านผู้หญิงมณีรัตน์ บุนนาค (บ้านปางสนุก) อ.สังขละบุรี จ.กาญจนบุรี<br />\r\n(IP-Star)</p>\r\n</blockquote>\r\n', '/uploads/images/activities/ac-1602920045-1.jpg,/uploads/images/activities/ac-1602920045-2.jpg,/uploads/images/activities/ac-1602920045-3.png,/uploads/images/activities/ac-1602920045-4.png', 1602920045, 1602920045, 1, 1),
(3, 'TOT Sim For Learn', '<p>วันที่ 22 กันยายน 2563</p>\r\n\r\n<blockquote>\r\n<p>ศูนย์การขายฯและศูนย์บริการลูกค้าตะโหมด ออกบูธประชาสัมพันธ์​&nbsp; TOT Sim For Learn ให้นักเรียน และบุคลากรทางการศึกษา เพื่อใช้เป็นสื่อในการเรียนการสอน ออนไลน์ &ldquo;ค่าใช้บริการเพียงวันละ 1.10 บาท ณ. โรงเรียนตะโหมด มีน้องๆ และบุคลากร ให้ความสนใจ Sim For Learn เป็นจำนวนมาก</p>\r\n</blockquote>\r\n', '/uploads/images/activities/ac-1602920989-1.jpg,/uploads/images/activities/ac-1602920989-2.jpg', 1602920989, 1602920989, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1602897318),
('guest', '2', 1602981077);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('addActivity', 2, 'เพิ่มกิจกรรม', NULL, NULL, 1602897318, 1602897318),
('addNewsContent', 2, 'เพิ่มกิจกรรม', NULL, NULL, 1602897318, 1602897318),
('addNewsType', 2, 'เพิ่มประเภทข่าวสาร', NULL, NULL, 1602897318, 1602897318),
('admin', 1, NULL, NULL, NULL, 1602897318, 1602897318),
('deleteActivity', 2, 'ลบกิจกรรม', NULL, NULL, 1602897318, 1602897318),
('deleteNewsContent', 2, 'ลบข่าวสาร', NULL, NULL, 1602897318, 1602897318),
('deleteNewsType', 2, 'ลบประเภทข่าวสาร', NULL, NULL, 1602897318, 1602897318),
('guest', 1, NULL, NULL, NULL, 1602897318, 1602897318),
('updateActivity', 2, 'แก้ไขกิจกรรม', NULL, NULL, 1602897318, 1602897318),
('updateNewsContent', 2, 'แก้ไขข่าวสาร', NULL, NULL, 1602897318, 1602897318),
('updateNewsType', 2, 'แก้ไขประเภทข่าวสาร', NULL, NULL, 1602897318, 1602897318),
('viewActivity', 2, 'ดูกิจกรรม', NULL, NULL, 1602897318, 1602897318),
('viewNewsContent', 2, 'ดูข่าวสาร', NULL, NULL, 1602897318, 1602897318),
('viewNewsType', 2, 'ดูประเภทข่าวสาร', NULL, NULL, 1602897318, 1602897318);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'addActivity'),
('admin', 'addNewsContent'),
('admin', 'addNewsType'),
('admin', 'deleteActivity'),
('admin', 'deleteNewsContent'),
('admin', 'deleteNewsType'),
('admin', 'guest'),
('admin', 'updateActivity'),
('admin', 'updateNewsContent'),
('admin', 'updateNewsType'),
('guest', 'viewActivity'),
('guest', 'viewNewsContent'),
('guest', 'viewNewsType');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1602897312),
('m130524_201442_init', 1602897318),
('m140506_102106_rbac_init', 1602897314),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1602897314),
('m180523_151638_rbac_updates_indexes_without_prefix', 1602897314),
('m190124_110200_add_verification_token_column_to_user_table', 1602897318),
('m200409_110543_rbac_update_mssql_trigger', 1602897314),
('m200822_071546_create_news_type_table', 1602897318),
('m200822_072258_create_news_content_table', 1602897318),
('m200827_172825_init_rbac', 1602897318),
('m200904_015645_create_profile_table', 1602897318),
('m200913_031737_create_activities_table', 1602897318),
('m201017_024757_create_about_table', 1602903497);

-- --------------------------------------------------------

--
-- Table structure for table `news_content`
--

CREATE TABLE `news_content` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int DEFAULT NULL,
  `created_at` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  `news_type_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_content`
--

INSERT INTO `news_content` (`id`, `title`, `banner`, `content`, `created_by`, `created_at`, `updated_by`, `updated_at`, `news_type_id`) VALUES
(1, 'ทีโอที ยกระดับความโปร่งใสในการปฎิบัติตามมาตรฐาน ITA เสริมสร้างคุณธรรมและธรรมาภิบาล', NULL, '<p>ทีโอที ยกระดับความโปร่งใสในการปฎิบัติตามมาตรฐาน ITA เสริมสร้างคุณธรรมและธรรมาภิบาล\n            ทีโอที ยกระดับความโปร่งใสในการปฎิบัติตามมาตรฐาน ITA เสริมสร้างคุณธรรมและธรรมาภิบาล ภายในองค์กร\n            ป.ป.ช. เปิดคะแนนคุณธรรม-ความโปร่งใสภาพรวมหน่วยงานรัฐ ทีโอที เป็น 1 ใน 13% ของหน่วยงานภาครัฐ ที่ผ่านเกณฑ์ประเมิน ITA ปี 2563 นี้ ในระดับ A (89.46 คะแนน)</p><br/>\n            <p>\n            นายมรกต เธียรมนตรี รักษาการกรรมการผู้จัดการใหญ่ บมจ.ทีโอที กล่าวว่า การประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ (Integrity and Transparency Assessment: ITA) เป็นการประเมินที่มีจุดมุ่งหมายที่ก่อให้เกิดการพัฒนาและปรับปรุงด้านคุณธรรมและความโปร่งใสสำหรับการดำเนินงานของหน่วยงานภาครัฐทั่วประเทศ โดยตามมติคณะรัฐมนตรี เมื่อวันที่ 23 มกราคม พ.ศ. 2561 มีมติเห็นชอบให้หน่วยงานภาครัฐทุกหน่วยงานต้องให้ความร่วมมือและเข้าร่วมการประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ ในปีงบประมาณ พ.ศ.2561-2564 โดยใช้แนวทางและเครื่องมือการประเมินตามที่สำนักงาน ป.ป.ช. กำหนด และการประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ ได้ถูกกำหนดไว้ในแผนแม่บทภายใต้ยุทธศาสตร์ชาติ ระยะ 20 ปี ประเด็นการต่อต้านการทุจริตและประพฤติมิชอบ (พ.ศ. 2561 - 2580) ซึ่งมีผลผูกพันให้หน่วยงานภาครัฐทุกแห่งจะต้องเข้าร่วมการประเมินตั้งแต่ปี พ.ศ. 2561 ไปจนถึงปี พ.ศ. 2580\n            </p>\n            <p>\n            นายมรกต เธียรมนตรี กล่าวเพิ่มเติมว่า ทีโอที เป็นหนึ่งในรัฐวิสาหกิจภายใต้บันทึกข้อตกลงความร่วมมือ (MOU) โครงการส่งเสริมและสนับสนุนการขับเคลื่อนยุทธศาสตร์ชาติว่าด้วยการป้องกันและปราบปรามการทุจริตระยะที่ 3 (พ.ศ.2560-2564) โดยเมื่อวันที่ 28 กันยายน 2563 สำนักงานคณะกรรมการป้องกันและปราบปรามการทุจริตแห่งชาติ (ป.ป.ช.) ได้จัดงาน ITA DAY 2020 - Talks and Result Announcement พร้อมทั้งจัดเวทีสนทนาและประกาศผลการประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ (ITA) ประจำปี งบประมาณ พ.ศ.2563 ซึ่ง ป.ป.ช. เปิดคะแนนคุณธรรมความโปร่งใสภาพรวมหน่วยงานรัฐ โดย ทีโอที เป็น 1 ในหน่วยงานภาครัฐ จำนวน 13% ที่ผ่านเกณฑ์ประเมิน ITA ปี 2563 นี้ ในระดับ A (89.46 คะแนน) อยู่ในลำดับที่ 4 ของกระทรวงดิจิทัลเศรษฐกิจและสังคม ซึ่งความสำเร็จในครั้งนี้เกิดขึ้นจากความร่วมมือของผู้บริหารและพนักงาน ทีโอที ที่ให้ความร่วมมือและให้การสนับสนุนเป็นอย่างดี ทำให้ ทีโอที สามารถก้าวสู่องค์กรดิจิทัลที่มีคุณธรรม โปร่งใส และตรวจสอบได้ และจะยังคงรักษามาตรฐานให้ดียิ่งขึ้นไปอีกทั้งในปัจจุบันและอนาคต แต่มีบางประเด็นที่ได้คะแนนไม่สูงนัก ซึ่งในการประเมินคุณธรรมและความโปร่งใสของหน่วยงานภาครัฐ (Integrity Transparency and Assessment : ITA) ประจำปี 2563 ทีโอที ให้ความสำคัญและอธิบายชี้แจงให้ผู้เกี่ยวข้องทราบถึงกระบวนการทำงานของ ทีโอที เช่นเรื่องจัดซื้อจ้าง การให้บริการตามมาตรฐานที่กำหนด เป็นต้น ทีโอที ให้ความสำคัญกับผลการประเมิน ITA อย่างมากเพราะจะเป็นการสร้างความเชื่อมั่นให้กับองค์กรภายนอกและประชาชนทั่วไปทราบถึงการบริหารงานภายใน ทีโอที ที่มีคุณธรรมและโปร่งใส ตามหลัก ธรรมาภิบาล รวมทั้งมีการดำเนินตามนโยบายต่อต้านการทุจริตและคอร์รัปชั่น</p>', 1, 1602897318, 1, 1602897318, 1),
(2, 'รับมอบใบรับรองมาตรฐานระบบบริหารจัดการความมั่นคงปลอดภัยสารสนเทศ', NULL, '<p>วันที่ 28 ก.ย.63 ทีโอที สนญ.นายทินกร นาทองลาย ผู้ช่วยกรรมการผู้จัดการใหญ่สำนักโครงข่ายบรอดแบนด์และโทรศัพท์ประจำที่ รับมอบใบรับรองมาตรฐานระบบบริหารจัดการความมั่นคงปลอดภัยสารสนเทศ ISO/IEC 27001:2013 และมาตรฐานบริการด้านเทคโนโลยีสารสนเทศ ISO/IEC 20000-1:2018 สำหรับบริการ TOT Data Services บนโครงข่าย TOT MPLS จากบริษัท BSI Group (Thailand) Ltd.ซึ่งเป็นสถาบันรับรองมาตรฐานแห่งชาติจากประเทศอังกฤษ การได้ใบรับรองฯนี้ แสดงถึงความมุ่งมั่นของ ทีโอที ในการพัฒนาระบบบริหารจัดการความมั่นคงปลอดภัยสารสนเทศและบริการด้านเทคโนโลยีสารสนเทศ เพื่อเพิ่มความสามารถในการแข่งขันและสร้างความเชื่อมั่นให้แก่ลูกค้าตามมาตรฐานสากล</p>', 1, 1602897318, 1, 1602897318, 1),
(3, 'ลูกค้า TOT e-Bill สมัครสมาชิก TOT Privilege เพียง 50 ท่านแรก รับ Voucher', NULL, '<div><strong>ลดโลกร้อน กับ ทีโอที<br>\n            พิเศษสำหรับผู้ใช้บริการ TOT e-bill<br>\n            เพียงสมัครสมาชิก TOT Privilege วันนี้<br>\n            ผู้สมัคร 50 ท่านแรก รับ Voucher Tesco Lotus&nbsp;&nbsp;มูลค่า 100 บาท<br>\n            ร่วมสนุกวันนี้ - 15 ต.ค. 63<br>\n            ประกาศผล 23 ต.ค. 63</strong></div><div><strong><br>\n            </strong><strong>กติกาการร่วมกิจกรรม</strong><br>\n            1. ผู้ร่วมสนุกต้องเป็นผู้ใช้บริการรับใบแจ้งค่าใช้บริการทางอิเล็กทรอนิกส์ (e-Bill) สมัครออนไลน์ ที่&nbsp;<a href=\"https://www.tot.co.th/eservice\"><span style=\"display: inline; color: #0070c0;\">www.toteservice.com</span></a><br>\n            2. ผู้ร่วมสนุกต้องสมัครเป็นสมาชิก &nbsp;TOT Privilege &nbsp;ในระยะเวลาจัดกิจกรรมได้ที่ Link นี้&nbsp;<a href=\"https://bit.ly/3iZ9YhT\"><span style=\"display: inline; color: #0070c0;\">https://bit.ly/3iZ9YhT</span></a><br>\n            3. ผู้ทำถูกต้องตามกติกา 50 ท่านแรก รับ Gift Voucher Tesco Lotus &nbsp;มูลค่า 100 บาท ท่านละ 1 รางวัล/1 เลขหมาย &nbsp;<br>\n            4. ขอสงวนสิทธิ์ให้แก่ผู้ที่ทำถูกต้องตามกติกาครบถ้วนเท่านั้น<br>\n            * คำตัดสินของ บมจ.ทีโอที ถือเป็นที่สิ้นสุด<br>\n            ** อย่าลืมกด Like Facebook TOTPrivilege เพื่อจะได้ไม่พลาดกิจกรรมต่อไปอย่ารอช้า รีบสมัครเลย...</div>', 1, 1602897318, 1, 1602897318, 1),
(4, 'พิเศษสำหรับลูกค้า TOTmobile ระบบรายเดือน และเติมเงิน ทีโอที', NULL, '<div class=\"contentdesc tot_detailtextblock\">\n            <span class=\"txt_content3 detail\"><p><img src=\"https://www.tot.co.th/images/default-source/news/news-2020/10/foodpanda/content.png?sfvrsn=ac661e4a_4\" data-displaymode=\"Original\" alt=\"content\" title=\"content\"><br>\nพิเศษสำหรับลูกค้า TOTmobile ระบบรายเดือน และเติมเงิน ทีโอที ขอมอบส่วนลด 50 บาท เมื่อสั่งอาหารผ่าน App foodpanda ขั้นต่ำ 100 บาท โดยกด *9022*6*1#โทรออก และนำโค้ดมาใช้เป็นส่วนลดเมื่อสั่งอาหารผ่าน App foodpanda ตั้งแต่วันนี้ ถึง 31 ธ.ค. 63 หรือจนกว่าสิทธิ์จะหมด</p>\n<div>\n<p>&nbsp;</p>\n<h5>เงื่อนไขการใช้สิทธิ์</h5>\n<p>&nbsp;</p>\n<p>1. สิทธิพิเศษสำหรับลูกค้า TOTmobile ทั้งระบบรายเดือนและระบบเติมเงิน (1เลขหมาย/1สิทธิ์/1เดือน)<br>\n2. รับส่วนลด 50 บาท เมื่อสั่งอาหารขั้นต่ำ 100 บาท<br>\n3. ลูกค้ากดรับสิทธิ์ USSD *9022*6*1# โทรออก แล้วได้รับ sms เป็น Code ส่วนลด และนำ Code ไปกรอกลงในแอปพลิเคชั่น foodpanda เพื่อใช้สิทธิ์ต่อการสั่ง 1 ครั้ง<br>\n4. ลูกค้าสามารถกดรับสิทธิ์ได้ ตั้งแต่วันที่ 1 ตุลาคม – 31 ธันวาคม 2563 หรือหากมีจำนวนผู้รับสิทธิ์<br>\nครบ 2,000 สิทธิ์ (แล้วแต่กรณีใดเกิดก่อน)<br>\n5. สงวนสิทธิ์ในการเปลี่ยนแปลงเงื่อนไข โดยไม่ต้องแจ้งให้ทราบล่วงหน้า และไม่สามารถใช้ร่วมกับรายการส่งเสริมการขายหรือส่วนลดอื่นๆ ได้<br>\n6. สิทธิพิเศษนี้ไม่สามารถเปลี่ยนแปลงเป็นเงินสดได้<br>\n7. สิทธิพิเศษมีจำนวนจำกัด</p>\n</div></span>\n        </div>', 1, 1602897318, 1, 1602897318, 2),
(5, 'รับมอบใบรับรองมาตรฐานระบบบริหารจัดการความมั่นคงปลอดภัยสารสนเทศ2', NULL, '<p>วันที่ 28 ก.ย.63 ทีโอที สนญ.นายทินกร นาทองลาย ผู้ช่วยกรรมการผู้จัดการใหญ่สำนักโครงข่ายบรอดแบนด์และโทรศัพท์ประจำที่ รับมอบใบรับรองมาตรฐานระบบบริหารจัดการความมั่นคงปลอดภัยสารสนเทศ ISO/IEC 27001:2013 และมาตรฐานบริการด้านเทคโนโลยีสารสนเทศ ISO/IEC 20000-1:2018 สำหรับบริการ TOT Data Services บนโครงข่าย TOT MPLS จากบริษัท BSI Group (Thailand) Ltd.ซึ่งเป็นสถาบันรับรองมาตรฐานแห่งชาติจากประเทศอังกฤษ การได้ใบรับรองฯนี้ แสดงถึงความมุ่งมั่นของ ทีโอที ในการพัฒนาระบบบริหารจัดการความมั่นคงปลอดภัยสารสนเทศและบริการด้านเทคโนโลยีสารสนเทศ เพื่อเพิ่มความสามารถในการแข่งขันและสร้างความเชื่อมั่นให้แก่ลูกค้าตามมาตรฐานสากล</p>', 1, 1602897318, 1, 1602897318, 2),
(6, 'ทีโอที - มิวสเปซ เดินหน้าเทคโนโลยีอวกาศ ตั้งเป้าให้บริการ Space IDC หนุนธุรกิจในยุคดิจิทัล', NULL, '<div class=\"contentdesc tot_detailtextblock\">\n            <span class=\"txt_content3 detail\"><p style=\"text-align: justify;\"> <strong> </strong><strong>ทีโอที ร่วมกับ มิวสเปซ ศึกษาความเป็นไปได้ของดาวเทียมวงโคจรต่ำ เพิ่มขีดความสามารถทางการแข่งขัน พร้อมรับไลฟ์สไตล์คนยุคดิจิทัลในอนาคต ล่าสุดการยิงจรวด </strong><strong>Blue Origin</strong><strong>เพื่อทดสอบการทำงานอุปกรณ์ดิจิทัลในอวกาศ เมื่อวันที่ </strong><strong>13 </strong><strong>ตุลาคม </strong><strong>2563 </strong><strong>เวลา </strong><strong>20.35 </strong><strong>น</strong><strong>. </strong><strong>โดยภายในจรวดประกอบด้วยชุดการทดลองของ ทีโอที ที่บรรจุภายใน </strong><strong>Single Payload Locker </strong><strong>ของ </strong><strong>Blue Origin </strong><strong>คือ </strong><strong>TOT Data Center Payload </strong><strong>หลังจากนั้นนำข้อมูลที่ได้มาวิเคราะห์และขยายผลดำเนินการในขั้นตอนต่อไป<br>\n<br>\n</strong><strong>นายมรกต เธียรมนตรี รักษาการกรรมการผู้จัดการใหญ่ บริษัท ทีโอที จำกัด </strong><strong>(</strong><strong>มหาชน</strong><strong>) </strong><strong>กล่าวว่า</strong> จากการที่ ทีโอที ได้ลงนามบันทึกข้อตกลงร่วมมือกับ บริษัท มิว สเปซ แอนด์ แอดวานซ์ เทคโนโลยี จำกัด เพื่อศึกษาและวิจัยความเป็นไปได้และโอกาสในการดำเนินธุรกิจเทคโนโลยีไร้สายดาวเทียมวงโคจรต่ำ(LEO) โดย ทีโอที ได้จัดคณะทำงาน เพื่อดำเนินการศึกษาควบคู่กับการพัฒนาบุคคลากร ซึ่งประกอบไปด้วยผู้บริหารและพนักงาน เพื่อสร้างองค์ความรู้และขีดความสามารถในการให้บริการที่เกี่ยวข้องกับเทคโนโลยีดาวเทียมในอนาคต ตั้งเป้าหมายว่า จะเป็นผู้นำในการให้บริการและศูนย์กลางเกตเวย์ภาคพื้นดิน ในการให้บริการ Space IDCและ Space Digtal Platformในอนาคต ด้วยคุณสมบัติที่ได้เปรียบของดาวเทียมวงโคจรต่ำ ในด้านความสามารถในการเข้าถึงพื้นที่ต่างๆ จะทำได้ง่ายกว่าภาคพื้นดิน ทำให้ที่มีโอกาสอย่างมากที่จะเข้าแทนที่การใช้งานบริการบรอดแบนด์อินเทอร์เน็ตทางสาย ทำให้เกิดความเป็นไปได้ทางธุรกิจที่เกี่ยวข้อง เช่น การสร้าง Internet Data Center IoT Platform บนวงโคจรในอนาคตข้างหน้า<br>\n<br>\nขณะเดียวกัน ผลจากความร่วมมือครั้งนี้ ทีโอที และ มิวสเปซ ได้ส่งอุปกรณ์ขึ้นไปทดสอบกับBlue Origin จรวดของบริษัทในเครืออเมซอน อเมริกา เมื่อค่ำวันที่ 13 ตุลาคม 2563 เวลา 20.35 น. ที่ผ่านมาทุกอย่างเสร็จสิ้นตาม Mission ขั้นตอนต่อไปหลังจากนี้ คือรอนำข้อมูลที่ได้มาวิเคราะห์และดำเนินการต่อไป ซึ่งTOT Data Center Payload เป็นชุดการทดลองของ ทีโอที ที่ ทีโอที กับ มิว สเปซ ทดลองส่งอุปกรณ์ขึ้นสู่วงโคจรระดับ Sub-orbital ด้วยจรวด New Shepard ของ Blue Origin ในเที่ยวบิน NS-13 โดยอุปกรณ์ทดลองดังกล่าวเป็น Server Payload ที่ประกอบไปด้วย Web Server, IoT (Internet of Things) Platform, Big data device ต่างๆ เพื่อการวิจัยสำหรับการพัฒนาดาวเทียมสื่อสาร Low-Earth orbit (LEO) ในอนาคต เพื่อทดแทนระบบอินเทอร์เน็ตไร้สายแบบ Broadband ในปัจจุบัน<br>\n<br>\n<strong>นายมรกต กล่าวเพิ่มเติมว่า </strong>การที่ ทีโอที ได้ ร่วมมือกับ มิวสเปซ การมีพาร์ทเนอร์ที่ดี มีทีมงานของ ทีโอที ที่พร้อมแสดงให้เห็นถึงศักยภาพของ ทีโอที ที่มีความพร้อมในการร่วมทำภารกิจสำคัญๆ ได้เป็นอย่างดี ทีโอที และ มิวสเปซ ต้องการผลักดันกิจการอวกาศของประเทศไทยให้มีที่ยืนในสังคมโลกในด้านกิจการอวกาศอย่างจริงจัง ไอเดียด้านการทำ Space IDC เป็นไอเดียที่จุดประกายให้กับแวดวงโทรคมนาคมไทย ทีโอที และ มิวสเปซ อยากให้ในระดับรัฐบาลให้ช่วยสนับสนุนสิ่งที่ทำ ซึ่งไม่ใช่เป็นการแข่งขันกันแต่เป็นการร่วมมือในการทำ Mission เรื่องกิจการอวกาศโดยคนไทยมีส่วนร่วม พวกเราก้าวใหญ่มาก หวังให้เป็นแรงบันดาลใจให้ฮึกเหิมก้าวไปข้างหน้าได้อีก และในอนาคตอันใกล้นี้ ทีโอที จะมีงานจากความร่วมมือกับ มิวสเปซ อย่างต่อเนื่อง<br>\n<br>\n<strong>นายวรายุทธ</strong><strong> </strong><strong>เย็นบำรุง</strong><strong> </strong><strong>กรรมการและ</strong><strong> </strong><strong>ประธานเจ้าหน้าที่บริหาร</strong><strong> </strong><strong>บริษัท</strong><strong> </strong><strong>มิว</strong><strong> </strong><strong>สเปซ</strong><strong> </strong><strong>แอนด์</strong><strong> </strong><strong>แอดวานซ์</strong><strong> </strong><strong>เทคโนโลยี</strong><strong> </strong><strong>จำกัด</strong><strong> </strong><strong>กล่าวว่า</strong> mu Space Corp ร่วมกับ Blue Origin ทำการส่งชุดการทดลองทั้งหมด 5 โมดูลขึ้นไปในอวกาศกับจรวด New Shepard เที่ยวบิน NS-13 ซึ่งเดินทางขึ้นสู่อวกาศในวงโคจรแบบ Sub-orbital (ไปแล้วกลับ) โดย mu Space Corp ส่งอุปกรณ์ทดลองวิทยาศาสตร์ไปพร้อมกับยาน New Shepard เที่ยวบิน NS-13 ใน Single Payload Locker และ Mini Payload Locker ทั้งหมด 5 โมดูล ขั้นตอนต่อไปเมื่อได้ข้อมูลกลับมา มิวสเปซ ร่วมกับ ทีโอที จะนำข้อมูลที่ได้มาวิเคราะห์ และนำผลที่ได้มาออกแบบอุปกรณ์ครั้งต่อไป โดย คาดจะมี Mission ที่คาดว่าจะเกิดขึ้นให้เร็วๆ นี้</p>\n<br>\n<br></span>\n        </div>', 1, 1602897318, 1, 1602897318, 1),
(7, 'คุณคือคนแรก เพียงสมัคร TOT fiber 2U ทางออนไลน์ ได้เน็ตแรงๆ', NULL, '<p><img alt=\"120268145_1631265163708211_3944529041041179917_o\" src=\"https://www.tot.co.th/images/default-source/news/activity-tot-fiber-2u-sep-2020/120268145_1631265163708211_3944529041041179917_o.jpg?sfvrsn=a2c2ee4c_2\" style=\"height:500px; width:500px\" /></p>\r\n\r\n<p><strong>ลดโลกร้อน กับ ทีโอที<br />\r\nพิเศษสำหรับผู้ใช้บริการ TOT e-bill<br />\r\nเพียงสมัครสมาชิก TOT Privilege วันนี้<br />\r\nผู้สมัคร 50 ท่านแรก รับ Voucher Tesco Lotus&nbsp;&nbsp;มูลค่า 100 บาท<br />\r\nร่วมสนุกวันนี้ - 15 ต.ค. 63<br />\r\nประกาศผล 23 ต.ค. 63</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<strong>กติกาการร่วมกิจกรรม</strong><br />\r\n1. ผู้ร่วมสนุกต้องเป็นผู้ใช้บริการรับใบแจ้งค่าใช้บริการทางอิเล็กทรอนิกส์ (e-Bill) สมัครออนไลน์ ที่&nbsp;<a href=\"https://www.tot.co.th/eservice\">www.toteservice.com</a><br />\r\n2. ผู้ร่วมสนุกต้องสมัครเป็นสมาชิก &nbsp;TOT Privilege &nbsp;ในระยะเวลาจัดกิจกรรมได้ที่ Link นี้&nbsp;<a href=\"https://bit.ly/3iZ9YhT\">https://bit.ly/3iZ9YhT</a><br />\r\n3. ผู้ทำถูกต้องตามกติกา 50 ท่านแรก รับ Gift Voucher Tesco Lotus &nbsp;มูลค่า 100 บาท ท่านละ 1 รางวัล/1 เลขหมาย &nbsp;<br />\r\n4. ขอสงวนสิทธิ์ให้แก่ผู้ที่ทำถูกต้องตามกติกาครบถ้วนเท่านั้น<br />\r\n* คำตัดสินของ บมจ.ทีโอที ถือเป็นที่สิ้นสุด<br />\r\n** อย่าลืมกด Like Facebook TOTPrivilege เพื่อจะได้ไม่พลาดกิจกรรมต่อไปอย่ารอช้า รีบสมัครเลย...</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1602897318, 1, 1602898871, 1),
(8, 'Donec sollicitudin molestie malesuada.', '/uploads/images/news-content/1602898231.png', '<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh.</p>\r\n', 1, 1602898231, 1, 1602898231, 1),
(9, 'Test2', NULL, '<p>t</p>\r\n', 1, 1602928168, 1, 1602928168, 2),
(10, 'Test23', NULL, '<p>t3</p>\r\n', 1, 1602928180, 1, 1602928180, 2),
(11, 'Test24', NULL, '<p>t4</p>\r\n', 1, 1602928191, 1, 1602928191, 2),
(12, 'Donec sollicitudin molestie malesuada.lkl;klk', NULL, '<p>kjkjk</p>\r\n', 1, 1602928228, 1, 1602928228, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_type`
--

CREATE TABLE `news_type` (
  `id` int NOT NULL,
  `name_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `mode` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_type`
--

INSERT INTO `news_type` (`id`, `name_type`, `created_at`, `updated_at`, `created_by`, `updated_by`, `mode`) VALUES
(1, 'ข่าวประชาสัมพันธ์องค์กร', 1602897318, 1602897318, 1, 1, 0),
(2, 'ข่าวทั่วไป', 1602897318, 1602897318, 1, 1, 0),
(3, 'ข่าวธุรกิจ', 1602897318, 1602897318, 1, 1, 0),
(4, 'ข่าว CSR', 1602897318, 1602897318, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `f_name`, `l_name`, `picture`) VALUES
(1, 'Weerachai', 'Plodkaew', 'uploads/images/profile/1602897476.png'),
(2, 'Weerachai', 'Plodkaew', 'uploads/images/profile/1602981076.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT '10',
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`, `profile_id`) VALUES
(1, 'admin', 'm8eWBevxYMZ91cnkENB1Q9Yu4lG6-rnW', '$2y$13$ceIxJih.YNQ8tSyFcat4qODLkAk/nq5c2Jysyk7m.TkhODtEaAfXG', NULL, 'example@email.com', 10, 1602897476, 1602897476, '4BidtxwJcWLKZKpIDwi7AetU35Q_lxsL_1602897476', 1),
(2, 'clkeen157', 'LOksaT12cJkaRLWYc7gINaRaQhHQ229Y', '$2y$13$idzc5ZctGi98dqqXwmv89OoRGj8XMOdZEGTSBB6z.UAhuQ8FqvdGO', NULL, 'clkeen157@gmail.com', 10, 1602981077, 1602981386, 'uWC6ePKaM3IeSEVJePI0OTCDLA6jrb6q_1602981077', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news_content`
--
ALTER TABLE `news_content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `fk-news_content-news_type_id` (`news_type_id`);

--
-- Indexes for table `news_type`
--
ALTER TABLE `news_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_type` (`name_type`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `fk-user-profile_id` (`profile_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_content`
--
ALTER TABLE `news_content`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news_type`
--
ALTER TABLE `news_type`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news_content`
--
ALTER TABLE `news_content`
  ADD CONSTRAINT `fk-news_content-news_type_id` FOREIGN KEY (`news_type_id`) REFERENCES `news_type` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk-user-profile_id` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
