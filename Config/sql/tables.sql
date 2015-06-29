-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `gallery_albums`;
CREATE TABLE `gallery_albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `default_name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `model` varchar(255) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `tags` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `gallery_pictures`;
CREATE TABLE `gallery_pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `size` bigint(20) NOT NULL,
  `album_id` int(11) NOT NULL,
  `main_id` int(11) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `style` varchar(255) NOT NULL DEFAULT 'full',
  `order` int(11) NOT NULL DEFAULT '9999999',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `folder_id` (`album_id`),
  KEY `main_id` (`main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `created` datetime NOT NULL,
  `ord` int(11) NOT NULL DEFAULT '999999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_czech_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

DROP TABLE IF EXISTS `quotes`;
CREATE TABLE `quotes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `text` text COLLATE utf8_czech_ci NOT NULL,
  `ord` int(11) NOT NULL DEFAULT '999999',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `quotes` (`id`, `author`, `title`, `text`, `ord`) VALUES
(2,	'Prof. PhDr. Zdeněk Jirásek',	'CSc.',	'\"Je léto – doba prázdnin, dovolených, uvolněné nálady a milého užívání si. Ti z nás, kteří však  neopouštějí město na celé zmíněné roční období, mohou navštívit výstavu fotografií, která jim atmosféru volna a pohody  přinese alespoň v jakési virtuální podobě. Jana Jabůrková a  Jiří Turek nás svými fotografiemi přenesou na Kapverdské ostrovy. Tak někde na půl cesty mezi Afrikou a Amerikou, obratníkem Raka a rovníkem. Na území, kde nikdy nezačíná sezóna prostě proto, že nikdy nekončí. Kde se nad plážemi s bělostným pískem sklánějí palmy a moře hraje mnoha odstíny modré a láká k tomu, aby pocestný vstoupil do jeho mihotavých vln a nechal se omývat pěnou, z níž se rodili mnozí bohové různých náboženství. Kde vize zemského ráje je umocňována rozesmátými a dovádějícími černoušky a obrovskou kolekcí roztodivných tropických plodů nezvyklých chuťových vjemů. Jistě – víme, že onen zemský ráj se vytváří především v myslích návštěvníků. Ale fotografie tento zázrak pomíjivého okamžiku zachycuje opravdu věrně. Přestože se řada z nás na Kapverdy hned jen tak nerozjede, užijme si je alespoň takto, zprostředkovaně. Takže – léto budiž pochváleno a dík za příjemný zážitek v opavském Domě umění.”',	999999),
(3,	'Jana Jabůrková',	'fotografka',	'\"Při své práci se společně s Jiřím Turkem snažíme stát součástí a mít možnost zachytit tak opravdový život lidí na různých místech. Kapverďané jsou opravdu lidé, kteří nejen že mají NO STRESS! jako univerzální odpověď na všechno, oni NO STRESS! žijí!\"',	999999),
(4,	'Jiří Turek',	'fotograf',	'\"Chtěli jsme zachytit pohodu na Kapverdských ostrovech a předat ji dál. V dnešní době globalizace, je to podle mého názoru, velice důležité. Vzhledem k tomu že na ostrovech vznikají další a další developerské projety a stále více cestovních kanceláří přiváží množství turistů, je možné, že za nedlouho nepoznáme rozdíl, mezi nedalekými Kanárskými ostrovy a Kapverdy.\"',	999999),
(5,	'Jana Jabůrková, Jiří Turek',	'fotografové',	'\"Chtěli jsme zachytit ojedinělý ráj nedaleko Evropy, dokud nebude zničený všudepřítomnou uniformitou. Věříme, že fotografie minimálně mile zahřejí….  Na konci výstavy chceme věnovat nově zrekonstruovanému opavskému Komunitnímu centru fotografii dle jejich výběru. Zároveň se tomuto centru chystámě věnovat část výtěžku z prodaných fotografií. Věříme, že tak podpoříme náročnou práci sociálních pracovníků, která je opomíjená a není často doceněná. Prosíme také o Vaši podporu!\"',	999999);

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_czech_ci NOT NULL,
  `desc` text COLLATE utf8_czech_ci,
  `ord` int(11) NOT NULL DEFAULT '9999999',
  `style` text COLLATE utf8_czech_ci,
  `url` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8_czech_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

INSERT INTO `sliders` (`id`, `title`, `desc`, `ord`, `style`, `url`, `page`) VALUES
(1,	'NO STRESS!',	'<p>Výstava NO STRESS!</p><p>    Autoři: Jana Jabůrková, Jiří Turek<br>    Místo: Dům umění OPAVA, Pekařská 12<br>    Trvání: 14.7. 2015 - 28.8.2015<br><span style=\"font-size:18px;font-size:1.4vw\">Otevřeno denně mimo pondělí od 10:00 do 18:00 hodin)</span><br><br>    Téma: NO STRESS! život na Kapverdských ostrovech<br></p>',	1,	'top: 18%;\r\nright: auto;\r\nleft: 60px;\r\nleft: 3vw;',	'/img/homepage.jpg',	'/no-stress'),
(2,	'O výstavě',	'<p>Výstava NO STRESS!</p><p>    Autoři: Jana Jabůrková, Jiří Turek<br>    Místo: Dům umění OPAVA, Pekařská 12<br>    Trvání: 14.7. 2015 - 28.8.2015<br><span style=\"font-size:18px;font-size:1.4vw\">Otevřeno denně mimo pondělí od 10:00 do 18:00 hodin)</span><br><br>    Téma: NO STRESS! život na Kapverdských ostrovech<br></p>',	2,	'  max-width: 470px;\r\n  max-width: 32vw;\r\n  top: 11%;',	'/img/vystava1.jpg',	'/o-vystave'),
(3,	'Galerie',	'<p>\"Chtěli jsme zachytit ojedinělý ráj nedaleko Evropy,<br>dokud ho nezničí všudepřítomná uniformita.\"</p>',	3,	'',	'/img/vystava2.jpg',	'/galerie');
