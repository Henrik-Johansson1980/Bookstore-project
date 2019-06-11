-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 22 jan 2019 kl 16:46
-- Serverversion: 10.1.36-MariaDB
-- PHP-version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `bookstore`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `bok`
--

CREATE TABLE `bok` (
  `Artikelnr` int(255) NOT NULL,
  `Titel` text COLLATE utf8_swedish_ci NOT NULL,
  `ISBN` bigint(255) NOT NULL,
  `Vikt` decimal(10,3) NOT NULL,
  `Format` text COLLATE utf8_swedish_ci NOT NULL,
  `Beskrivning` text COLLATE utf8_swedish_ci NOT NULL,
  `Förlag` text COLLATE utf8_swedish_ci NOT NULL,
  `Bildid` int(255) NOT NULL,
  `Kategori_id` int(255) NOT NULL,
  `pris` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `bok`
--

INSERT INTO `bok` (`Artikelnr`, `Titel`, `ISBN`, `Vikt`, `Format`, `Beskrivning`, `Förlag`, `Bildid`, `Kategori_id`, `pris`) VALUES
(1, 'Daughter of the Empire', 9780553272116, '0.227', 'Pocket', 'Magic and murder engulf the realm of Kelewan. Fierce warlords ignite a bitter blood feud to enslave the empire of Tsuranuanni. While in the opulent Imperial courts, assassins and spy-master plot cunning and devious intrigues against the rightful heir. Now Mara, a young, untested Ruling lady, is called upon to lead her people in a heroic struggle for survival. But first she must rally an army of rebel warriors, form a pact with the alien cho-ja, and marry the son of a hated enemy. Only then can Mara face her most dangerous foe of all--in his own impregnable stronghold. An epic tale of adventure and intrigue. Daughter of the Empire is fantasy of the highest order by two of the most talented writers in the field today.', '\r\nBantam Doubleday Dell Publishing Group', 5, 3, '89.00'),
(2, 'Cthulhu Vaknar', 9789187222993, '0.934', 'Inbunden', '\"Den nya utgåvan av Cthulhu vaknar från Fria Ligan är ett riktigt samlarexemplar av en tidlös klassiker. Fans av kosmisk skräck bör göra plats för denna i sin bokhylla.\"- Daniel Rydelius, Varvat\r\n\r\nH.P. Lovecraft är en av den amerikanska skräcklitteraturens allra största författare. Med sina noveller om kosmisk skräck, uråldriga gudar och fasansfulla kulter i Massachusetts 1930-tal har han varit stilbildande och hyllats av bland annat Stephen King och Guillermo del Toro. Kanske mest känd av Lovecrafts alla berättelser är Cthulhu vaknar (The Call of Cthulhu) som här återges i sin helhet med målningar av närmast filmisk kvalitet av den franske konstnären François Baranger. I Frankrike har boken gjort succé och sålt slut första upplagan på några veckor. Nu kommer den på svenska i ett lyxigt och påkostat storformat. Lovecrafts klassiker har aldrig tidigare varit så här vacker.', 'Fria ligan', 1, 1, '200.00'),
(3, 'Det', 9789100174682, '1.024', 'Storpocket', '”Skräcken som inte skulle upphöra förrän tjugoåtta år senare – om den nu någonsin upphörde – började, såvitt jag vet och kan berätta, med en båt gjord av en tidningssida som seglade fram i en rännsten som nästan svämmade över efter allt regnandet.” Den lilla staden Derry i Maine ser ut som den typiska amerikanska småstaden trygg och sömnig med sina villaområden, snabbmatsställen och affärer. Men det är bara på ytan. I kloakerna under staden finns något som ligger på lur och iakttar. Där finns ondskan. Där finns Det.En gång på femtiotalet samlade ett kompisgäng sina krafter och trotsade Det. Förenade av känslan av att vara misslyckade och utstötta, lyckades de driva ondskan och skräcken tillbaka till de mörka djup där den hör hemma. De lovar sedan varandra att samlas igen om Det någon gång skulle komma tillbaka.Många år senare, när en serie ohyggliga mord och gåtfulla försvinnanden på nytt skakar Derry, lyfter så Mike Hanlon telefonluren och kallar på sina barndomskamrater. Alla lämnar sina hem och familjer, sina vardagsbestyr och karriärer, för att ännu en gång trotsa skräcken och möta Det.   ', 'Albert Bonniers Förlag', 2, 1, '102.00'),
(4, 'De två tornen', 9789113044941, '0.227', 'Pocket', '\"En ring att styra dem, en ring att se dem,\r\nen ring att fånga dem och till mörkret ge dem,\r\ni Mordor, i skuggornas land\"\r\n\r\nHobbiten Frodo har fått ta över den magiska ring hans farbror Bilbo en gång vann av Gollum. Gandalf grå inser att det är den stora ringen som en gång smiddes av den onde Sauron och som styr alla andra maktens ringar.\r\n\r\nTillsammans med följerslagarna Sam, Merry och Pippin ger sig Frodo ut på en lång färd för att förgöra ringen i Eldsberget i Mordor. Annars kan ondskan snart komma att härska över Midgård.\r\n\r\nRingarnas herre nyöversattes 2004-05 av Erik Andersson och Lotta Olsson.\r\n\r\nDe två tornen:\r\n\r\nMerry och Pippin blir tillfångatagna av orker, men lyckas fly in i Fangornskogen där de träffar enten Trädskägge. Aragorn, Gimli och Legolas får snart kontakt med Rohans ryttareoch rider med dem mot Sarumans ointagliga torn Orthanc.\r\n\r\nFrodo och Sam har flytt från tumultet och stöter på Gollum. De lyckas nästan övervinna hans fiendskap och han hjälper dem att hitta en hemlig ingång till Mordor. Men den vaktas av den vederstyggliga jättespindeln Lockan.', 'Norstedts', 3, 3, '69.00'),
(5, 'Tommyknockers', 9781444723243, '0.676', 'Pocket', 'Jim Gardener goes back to the little community. He finds that whilst everything is familiar, everything is about to change.', 'Hodder Stoughton General Div', 10, 2, '89.90'),
(6, 'Världarnas krig', 9789188275042, '0.130', 'Pocket', 'H. G. Wells chockerade världen med sina fasansfulla marsianska varelser som invaderade jorden och satte skräck i invånarna i England. Med naiv förvåning och nyfikenhet närmar sig människorna i den lilla staden Woking de främmande cylindrar som landat i landskapet då helt ovetandes om den förödelse som skulle komma\r\n\r\nSom en de första författarna som på allvar hävdade att vi inte var ensamma i universum, gjorde H. G. Wells sensation med boken i slutet av 1800-talet.', 'Trut Publishing', 9, 2, '59.50'),
(7, 'King of Ashes\r\n', 9780007264858, '0.860', 'Inbunden', 'A new novel from internationally bestselling author Raymond E. Feist.\r\n\r\nThe world of Garn once boasted five great kingdoms, until the King of Ithrace was defeated and every member of his family executed by Lodavico, the ruthless King of Sandura, a man with ambitions to rule the world.\r\n\r\nIthrace\'s ruling family were the legendary Firemanes, and represented a great danger to the other kings. Now four great kingdoms remain, on the brink of war. But rumour has it that the newborn son of the last king of Ithrace survived, carried off during battle and sequestered by the Quelli Nacosti, a secret society whose members are trained to infiltrate and spy upon the rich and powerful throughout Garn. Terrified that this may be true, and that the child will grow to maturity with bloody revenge in his heart, the four kings have placed a huge bounty on the child\'s head.\r\n\r\nIn the small village of Oncon, Declan is apprenticed to a master blacksmith, learning the secrets of producing the mythical king\'s steel. Oncon is situated in the Covenant, a neutral region lying between two warring kingdoms. Since the Covenant was declared, the region has existed in peace, until violence explodes as slavers descend upon the village to capture young men to press as soldiers for Sandura.\r\n\r\nDeclan must escape, to take his priceless knowledge to Baron Daylon Dumarch, ruler of Marquensas, perhaps the only man who can defeat Lodavico of Sandura, who has now allied himself with the fanatical Church of the One, which is marching across the continent, imposing its extreme form of religion upon the population and burning unbelievers as they go.\r\n\r\nMeanwhile, on the island of Coaltachin, the secret domain of the Quelli Nacosti, three friends are being schooled in the deadly arts of espionage and assassination: Donte, son of one of the most powerful masters of the order; Hava, a serious girl with fighting abilities that can set any opponent on their back; and Hatu, a strange, conflicted lad in whom fury and calm war constantly, whose hair is a bright and fiery shade of red.', 'Harper Collins UK', 7, 3, '199.00'),
(8, 'Drakarnas Dans', 9789175031828, '0.509', 'Pocket', 'Den femte boken i Sagan om is och eld. Fortsättningen på Kampen om Järntronen, Kungarnas krig, Svärdets makt och Kråkornas fest.De sju konungarikenas framtid är osäker. Det jäser överallt i Västeros. I öster regerar Daenerys Targaryen, hennes många fiender är villiga att riskera allt för att oskadliggöra henne och hennes tre drakar. Men en ung man beger sig frivilligt iväg för att söka upp henne av helt andra skäl. Samtidigt tvingas Tyrion Lannister att fly med ett pris på sitt huvud, och det märkliga sällskap som blir hans allierade är inte vad de utger sig för att vara.Intriger och förräderi, maktspel och ond bråd död är ständigt närvarande. Fredlösa och präster, riddare och soldater, ädlingar och slavar, ingen går säker, ingen slipper undan. Många kommer att gå under, andra växer sig starkare i skuggan av mörkret. I tider av omvälvande förändring för ödets vindar och kampen om tronen dem samman till den mäktigaste dansen på liv och död som någonsin skådats. HBO har skapat teveserien Game of thrones, baserad på George R. R. Martins böcker, som gjort succé världen över och som sänts i SVT under 2012.', 'Månpocket', 4, 3, '79.00'),
(9, 'Pawn Of Prophecy', 9780552168335, '0.288', 'Pocket', 'BOOK 1 OF THE BELGARIAD, the worldwide bestselling fantasy series by one of the godfathers of the tradition. Pursued by evil forces, with only a small band of companions they can trust, Garion begins to doubt all he thought he knew...', 'Transworld Publishers Ltd', 6, 3, '59.00'),
(10, 'Revolvermannen', 9789100170844, '0.207', 'Pocket', 'Romansviten Det mörka tornet är Stephen Kings livsverk – ett myllrande rikt fantasiepos som för oss in i världar fulla av skönhet och grymhet, mod och förräderi, magi och stor berättarkonst. I en främmande värld med genklanger från vår egen möter vi för första gången Roland av Gilead, den siste revolvermannen, en ensam hämnare ständigt på väg genom ett ödelagt land på jakt efter den undflyende mannen i svart. Här lägger Stephen King grunden till sagan om Det mörka tornet. Vi får en glimt av vad Rolands värld har blivit, men inte av hur. Vi träffar Jake, pojken från New York som blir Rolands vän och som ställer honom inför hans livs svåraste val. Ännu är Det mörka tornet avlägset. Men det ekar som en storm i fjärran. ”Den första boken i Stephen Kings serie om Det mörka tornet är sällsam, oroande och fullständigt uppslukande – en perfekt början på en oförglömlig resa.” – James Smythe, The Guardian', '\r\nAlbert Bonniers Förlag', 8, 3, '59.00');

-- --------------------------------------------------------

--
-- Tabellstruktur `bokförfattare`
--

CREATE TABLE `bokförfattare` (
  `Artikelnr` int(255) NOT NULL,
  `Författarid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `bokförfattare`
--

INSERT INTO `bokförfattare` (`Artikelnr`, `Författarid`) VALUES
(1, 9),
(1, 4),
(2, 6),
(3, 1),
(4, 5),
(5, 1),
(6, 8),
(7, 4),
(8, 2),
(9, 3),
(10, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur `bokorder`
--

CREATE TABLE `bokorder` (
  `bokordernr` int(255) NOT NULL,
  `Artikelnr` int(32) NOT NULL,
  `Ordernr` int(255) NOT NULL,
  `Antal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `bokorder`
--

INSERT INTO `bokorder` (`bokordernr`, `Artikelnr`, `Ordernr`, `Antal`) VALUES
(1, 1, 1, 1),
(2, 6, 1, 1),
(3, 2, 1, 1),
(4, 1, 2, 1),
(5, 2, 3, 1),
(6, 3, 4, 1),
(7, 8, 5, 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `erbjudande`
--

CREATE TABLE `erbjudande` (
  `Erbjudandenr` int(32) NOT NULL,
  `Rabatt` int(2) NOT NULL,
  `Datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `erbjudande`
--

INSERT INTO `erbjudande` (`Erbjudandenr`, `Rabatt`, `Datum`) VALUES
(1, 5, '2018-12-03'),
(2, 10, '2018-11-30');

-- --------------------------------------------------------

--
-- Tabellstruktur `författare`
--

CREATE TABLE `författare` (
  `Författarid` int(255) NOT NULL,
  `fnamn` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `enamn` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `författare`
--

INSERT INTO `författare` (`Författarid`, `fnamn`, `enamn`) VALUES
(1, 'Stephen', 'King'),
(2, 'George R.R.', 'Martin'),
(3, 'David', 'Eddings'),
(4, 'Raymond E.', 'Feist'),
(5, 'J.R.R', 'Tolkien'),
(6, 'H.P.', 'Lovecraft'),
(7, 'Robert E.', 'Howard'),
(8, 'H.G.', 'Wells'),
(9, 'Janny', 'Wurts');

-- --------------------------------------------------------

--
-- Tabellstruktur `kategori`
--

CREATE TABLE `kategori` (
  `Kategori_id` int(255) NOT NULL,
  `namn` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `kategori`
--

INSERT INTO `kategori` (`Kategori_id`, `namn`) VALUES
(1, 'Skräck'),
(2, 'Science Fiction'),
(3, 'Fantasy');

-- --------------------------------------------------------

--
-- Tabellstruktur `kund`
--

CREATE TABLE `kund` (
  `kundnr` int(32) NOT NULL,
  `fnamn` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `enamn` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `epost` varchar(128) COLLATE utf8_swedish_ci NOT NULL,
  `personnr` varchar(13) COLLATE utf8_swedish_ci NOT NULL,
  `postnr` int(5) NOT NULL,
  `stad` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `adress` varchar(60) COLLATE utf8_swedish_ci NOT NULL,
  `telefon` varchar(12) COLLATE utf8_swedish_ci NOT NULL,
  `password` longtext COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `kund`
--

INSERT INTO `kund` (`kundnr`, `fnamn`, `enamn`, `epost`, `personnr`, `postnr`, `stad`, `adress`, `telefon`, `password`) VALUES
(1, 'Henrik', 'Johansson', 'henrikjohansson@example.com', '19801114-1234', 44236, 'Kungälv', 'Roliga gatan 12', '123456789', 'password'),
(2, 'Henrietta', 'Eskilsson', 'hettis@example.com', '19120304-1564', 12345, 'Göteborg', 'Hejsanhoppsanvägen 9', '1235499744', 'mittoknackbarapord'),
(3, 'Linda', 'Lingon', 'll1289@example.com', '19990101-3214', 44444, 'Henån', 'Intevetjagvägen 145', '9876549811', 'mittoknackbarapord2'),
(4, 'Olle', 'Nilsson', 'olenilsson@example.com', '19871015-1542', 0, '44236', 'Storstaden', '070-8803123', '1Password9'),
(5, 'Henrik', 'Johansson', 'henrikjohansson1980@example1.com', '19871015-1542', 0, '11223', 'Storstaden', '070-8803123', '$2y$10$EDioOtG0r9R2ihkPbRoj5.Cn1IKLfONW1j8kQcUVzDa56jrMBx/7C'),
(6, 'Henrik', 'Johansson', 'henrikjohansson1980@example2.com', '19871015-1542', 0, '32145', 'Citysjutton', '070-1203497', '$2y$10$daFGfOYNepPEJwa.6JoMs.2tGCmmal8AzQEORTYa.MT/nSHE7qeQu'),
(7, 'Olle', 'Nilsson', 'olenilsson@example1.com', '19871015-1542', 0, '98541', 'Lilleby', '070-1233123', '$2y$10$ExK0b/A1hsBi4.Xn4V4PKeQCWHsr8GAffXK/AOBnR6TjytBSBsMAG'),
(9, 'Olle', 'Nilsson', 'ollenilsson@example1.com', '19871015-2415', 0, '98541', 'Lilleby', '070-1233123', '$2y$10$PvLOcWir9grFUT0ORiUlBuvpOqTomfygZ1aaOlvhd4R504ZVbbcKi'),
(10, '', '', '', '', 0, '', 'Citysjutton', '', '$2y$10$elEILWjfG1Xdabp3ptTza.iOjf4xcYW0Zm3pYqUTfnLwxh9sHFp4C'),
(11, 'Henrik', 'Johansson', 'henrikjohansson1980@example2.com', '19871015-2415', 0, 'Citysjutton', 'Citysjutton', '070-1203497', '$2y$10$NCYXC0id0mDII8fnQrXHw.Et8Do0XNV.EukkRv.j9QB2lVliS2cPK'),
(12, 'Christina', 'Eklund', 'christinaeklund@example.com', '19870712-1544', 0, 'Någonstans', 'Någonstans', '070-8203123', '$2y$10$Y/NugSRcMO8kLeSNER2mpeybKITz/NE/DX27fV5.fvxjaB0YPhKLe'),
(13, 'Ada', 'Svensson', 'ada@example.com', '19771015-4243', 0, 'Storstaden', 'Storstaden', '070-2803123', '$2y$10$CqlydBDovIALkUEscbPfwek0CbgSDE8t2ZrK1ALhqBXUpSk75Srky'),
(14, 'Ada', 'Svensson', 'ada2@example.com', '19871015-2415', 0, 'Storstaden', 'Storstaden', '070-2803123', '$2y$10$IscXQnkH.KjUz/FtFv21..hUwp8ArOBh0IuH9Lc1vIQP0XYTg4MTS'),
(15, 'Olle', 'Nilsson', 'olenilsson12@example.com', '19871015-1542', 0, 'Storstaden', 'Storstaden', '070-8403123', '$2y$10$yfnAvJcRhkXSmVkdOJbSMeJVmElDR/vOnYeVPoeZmxZQwb.e6CBh6'),
(16, 'Lars', 'Johansson', 'lars@example.com', '19607124-1987', 0, 'Staden', 'Staden', '070-8803497', '$2y$10$HkkCx4FMMVHDr3S/F8BHvu/WxchGq//glZeoXeiyJgC9Cl94cjW7.'),
(17, 'Lars', 'Johansson', 'larsa@example.com', '19607124-6625', 0, 'Staden', 'Staden', '070-8803988', '$2y$10$wx2EhCm.cP0cbGUZQSE9teLLwJHLLWN/yp0msFS.nHscPviHzT2DC'),
(18, 'Ada', 'Svensson', 'ada12@example.com', '19607124-1123', 0, 'Storstaden', 'Storstaden', '070-2803123', '$2y$10$pllKggtYqdBOXoFWcWOJTOVn56ay7BwiFgF99ZRgSyFIXObP3Gm9K'),
(19, 'Christina', 'Eklund', 'ville@example.com', '19870712-1542', 0, 'Storstaden', 'Storstaden', '070-3503497', '$2y$10$HG2yP6r/YFud/4wj3mrGdOloPkwla0NzRzkLDo7iZAd5y2RW3FP9u'),
(20, 'Ada', 'Svensson', '1ada12@example.com', '19670712-1544', 0, 'Storstaden', 'Storstaden', '070-2803123', '$2y$10$ifTaMrBLeFt.P/eJIZRwK.Q9vbiyWIXt3rTKKFwWE7WCHF0Nv2NIW');

-- --------------------------------------------------------

--
-- Tabellstruktur `kunderbjudande`
--

CREATE TABLE `kunderbjudande` (
  `Erbjudandenr` int(32) NOT NULL,
  `Kundnr` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `kunderbjudande`
--

INSERT INTO `kunderbjudande` (`Erbjudandenr`, `Kundnr`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `Ordernr` int(255) NOT NULL,
  `Datum` date NOT NULL,
  `Kundnr` int(32) NOT NULL,
  `Summa` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `orders`
--

INSERT INTO `orders` (`Ordernr`, `Datum`, `Kundnr`, `Summa`) VALUES
(1, '2018-12-02', 1, '348.50'),
(2, '2018-11-30', 2, '89.00'),
(3, '2018-12-03', 2, '200.00'),
(4, '2018-12-03', 3, '102.00'),
(5, '2018-12-04', 3, '158.00');

-- --------------------------------------------------------

--
-- Tabellstruktur `produktbild`
--

CREATE TABLE `produktbild` (
  `Bildid` int(255) NOT NULL,
  `namn` text COLLATE utf8_swedish_ci,
  `beskrivning` text COLLATE utf8_swedish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `produktbild`
--

INSERT INTO `produktbild` (`Bildid`, `namn`, `beskrivning`) VALUES
(1, 'cthulhu-vaknar.jpg', 'Bilden visar en varelse som tornar upp sig framför ett skepp.'),
(2, 'det.jpg', 'En röd ballong sträcks ut mot en pojke i gul regnrock.'),
(3, 'de-tva-tornen.jpg', 'Bilden visar ett bokomslag med två torn.'),
(4, 'drakarnas-dans.jpg', 'Bilden visar ett smycke med drakar på.'),
(5, 'daughter-of-the-empire.jpg', 'Bilden visar en vitklädd kvinna och en krigare i exotisk rustning.'),
(6, 'pawn-of-prophecy.jpg', 'Bilden på bokomslaget visar ett svärdsfäste mot blåaktig bakgrund med blixtar.'),
(7, 'king-of-ashes.jpg', 'Bokomslaget visar en juvelbesatt kungakrona i guld, på en mörk bakgrund.'),
(8, 'revolvermannen.jpg', 'Bilden visar en man i lång rock och hatt som står på en klippa.'),
(9, 'varldarnas-krig.jpg', 'Bilden visar en man som tittar i ett teleskop och en sorts robot som skjuter en stråle mot en springande man.'),
(10, 'tommyknockers.jpg', 'Bilden visar silluetten av en skog mot norrskenet.');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `bok`
--
ALTER TABLE `bok`
  ADD PRIMARY KEY (`Artikelnr`),
  ADD UNIQUE KEY `ISBN` (`ISBN`),
  ADD KEY `Bildid` (`Bildid`),
  ADD KEY `Kategori_id` (`Kategori_id`);

--
-- Index för tabell `bokförfattare`
--
ALTER TABLE `bokförfattare`
  ADD KEY `Artikelnr` (`Artikelnr`),
  ADD KEY `Författarid` (`Författarid`);

--
-- Index för tabell `bokorder`
--
ALTER TABLE `bokorder`
  ADD PRIMARY KEY (`bokordernr`),
  ADD KEY `Artikelnr` (`Artikelnr`),
  ADD KEY `Ordernr` (`Ordernr`);

--
-- Index för tabell `erbjudande`
--
ALTER TABLE `erbjudande`
  ADD PRIMARY KEY (`Erbjudandenr`);

--
-- Index för tabell `författare`
--
ALTER TABLE `författare`
  ADD PRIMARY KEY (`Författarid`);

--
-- Index för tabell `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`Kategori_id`);

--
-- Index för tabell `kund`
--
ALTER TABLE `kund`
  ADD PRIMARY KEY (`kundnr`),
  ADD UNIQUE KEY `epost` (`epost`,`personnr`);

--
-- Index för tabell `kunderbjudande`
--
ALTER TABLE `kunderbjudande`
  ADD KEY `Erbjudandenr` (`Erbjudandenr`),
  ADD KEY `Kundnr` (`Kundnr`);

--
-- Index för tabell `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Ordernr`),
  ADD KEY `Kundnr` (`Kundnr`);

--
-- Index för tabell `produktbild`
--
ALTER TABLE `produktbild`
  ADD PRIMARY KEY (`Bildid`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `bok`
--
ALTER TABLE `bok`
  MODIFY `Artikelnr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT för tabell `bokorder`
--
ALTER TABLE `bokorder`
  MODIFY `bokordernr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT för tabell `erbjudande`
--
ALTER TABLE `erbjudande`
  MODIFY `Erbjudandenr` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT för tabell `författare`
--
ALTER TABLE `författare`
  MODIFY `Författarid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT för tabell `kategori`
--
ALTER TABLE `kategori`
  MODIFY `Kategori_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `kund`
--
ALTER TABLE `kund`
  MODIFY `kundnr` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT för tabell `orders`
--
ALTER TABLE `orders`
  MODIFY `Ordernr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `produktbild`
--
ALTER TABLE `produktbild`
  MODIFY `Bildid` int(255) NOT NULL AUTO_INCREMENT;

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `bok`
--
ALTER TABLE `bok`
  ADD CONSTRAINT `bok_ibfk_1` FOREIGN KEY (`Bildid`) REFERENCES `produktbild` (`bildid`),
  ADD CONSTRAINT `bok_ibfk_2` FOREIGN KEY (`Kategori_id`) REFERENCES `kategori` (`kategori_id`);

--
-- Restriktioner för tabell `bokförfattare`
--
ALTER TABLE `bokförfattare`
  ADD CONSTRAINT `bokförfattare_ibfk_1` FOREIGN KEY (`Artikelnr`) REFERENCES `bok` (`Artikelnr`),
  ADD CONSTRAINT `bokförfattare_ibfk_2` FOREIGN KEY (`Författarid`) REFERENCES `författare` (`Författarid`);

--
-- Restriktioner för tabell `bokorder`
--
ALTER TABLE `bokorder`
  ADD CONSTRAINT `bokorder_ibfk_1` FOREIGN KEY (`Artikelnr`) REFERENCES `bok` (`Artikelnr`),
  ADD CONSTRAINT `bokorder_ibfk_2` FOREIGN KEY (`Ordernr`) REFERENCES `orders` (`Ordernr`);

--
-- Restriktioner för tabell `kunderbjudande`
--
ALTER TABLE `kunderbjudande`
  ADD CONSTRAINT `kunderbjudande_ibfk_1` FOREIGN KEY (`Erbjudandenr`) REFERENCES `erbjudande` (`Erbjudandenr`),
  ADD CONSTRAINT `kunderbjudande_ibfk_2` FOREIGN KEY (`Kundnr`) REFERENCES `kund` (`kundnr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
