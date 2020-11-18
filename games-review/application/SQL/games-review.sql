-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2020 at 08:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games-review`
--

-- --------------------------------------------------------

--
-- Table structure for table `activereviews`
--

CREATE TABLE `activereviews` (
  `ID` int(11) NOT NULL,
  `GameName` varchar(250) NOT NULL,
  `GameBlurb` longtext NOT NULL,
  `GameReview` longtext NOT NULL,
  `GameComments_YN` varchar(1) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `ReviewImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `activereviews`
--

INSERT INTO `activereviews` (`ID`, `GameName`, `GameBlurb`, `GameReview`, `GameComments_YN`, `slug`, `ReviewImage`) VALUES
(1, 'Borderlands 3', '1 billion guns? You\'re going to need a lot of ammo ... The original shooter-looter returns, packing an insane amount of guns and an all-new mayhem-fueled adventure! Stop the fanatical Calypso Twins from uniting the bandit clans and claiming the galaxy’s ultimate power.', 'Stubbornly refusing to reinvent itself after a five-year absence, Borderlands 3 sticks to its guns and manages to outdo itself. Refined movement and shooting, a legion of enjoyably challenging enemies, and the single largest arsenal of mechanically distinct firearms I’ve ever seen in a video game easily make this the best in a great series of co-op shooters. Its trademark stylized art, on-the-nose humor, and tattoo-fueled storyline are all enjoyable enough in their own right, but what really makes Borderlands 3 excellent is the addicting item chase that unfolds over the course of 30 hours’ worth of lovingly crafted main and side missions. What’s more, this is an adventure I could see myself happily undertaking again from scratch with a new character and a fresh group of friends.', 'Y', 'borderlands-3', 'borderlands-3.jpg'),
(2, 'Dragon Ball Xenoverse 2', 'Dragon Ball Xenoverse 2 returns with all the frenzied battles of the first Xenoverse game.', 'Die-hard Dragon Ball Z fans finally have a game to feel good about. It might stumble a bit along the way with some odd design choices and rough edges, but Dragon Ball Xenoverse 2’s mix of fan service, fast-paced arena brawling, and long-term questing and progression scratch a long-standing itch for series fans.\r\n\r\nThe unique and ambitious concept of the Xenoverse series really sets it apart from the rank and file of licensed anime games. It’s a three-dimensional arena brawler seated within an MMO-lite structure, which provides both the immediate fun of DBZs big battles and a broader experience of being a new Dragon Ball character that inhabits the same universe and grows gradually in power over time, just like the franchise’s greatest heroes.', 'Y', 'xenoverse-2', 'xenoverse.jpg'),
(3, 'Rocket League', 'Do you like football? Do you like cars? if yes this is the game for you.', 'Rocket League is a rare example where the execution of a simple, absurd idea is so strong and so engaging that it doesn’t need a ton of extra features around it. The rush of ripping across the pitch at full turbo to deny a shot on goal with a clutch bicycle-kick is enough to bring me back time and time again for just “one more match,” even without meaningful progression systems. Rocket League is a great, goofy, easy to learn and difficult to master action-sports game which demands that you grab a few friends and play a few rounds.', 'Y', 'rocket-league', 'rocketleague.jpg'),
(4, 'Minecraft', 'Minecraft revolves around one simple principal: survival. The game is split into day and night cycles. During the day, you spend time gathering resources, whether it be searching for ore, digging holes, fishing or planting crops. Night is spent either indoors, mining underground tunnels, building tools or running around outside being chased by monsters.', 'No other video game has unleashed my creativity like Minecraft. I\'ve spent countless hours chipping away at blocks, gathering the necessary materials to complete the next masterpiece that would otherwise only occupy my mind\'s eye. I\'ve also spent just as many hours exploring, spelunking and slashing my way through monsters with bravado. My character – my entire Minecraft\r\nSEE DEAL\r\n world – constantly evolves into whatever I want it to be. I tell my own stories, I write my own destiny and I bring my fantasies to life one brick at a time.\r\n\r\nMinecraft stands out not only for the way it inspires me creatively, but also because of its unique aesthetic. Look, I know the visuals look dated and a bit silly, but few games have visuals so endearing and charming. I know I\'m not the only one who feels that way either, or else Minecraft\'s graphics wouldn\'t be so iconic. Could you take a texture from Gears of War, Halo or Uncharted, put it on a shirt and have players identify it? I doubt it. The looks just work, giving the game a super unique appearance that\'s memorable, and brings up a bit of nostalgia in me for 8-bit era games.', 'Y', 'minecraft', 'minecraft.jpg'),
(5, 'Naruto Shippuden Ultimate Ninja Storm 4', 'In Naruto Shippuden: Ultimate Ninja Storm 4, players around the world will experience the exhilarating adventures of Naruto Uzumaki like never before! Leap into on a breathtaking and epic ride with new features like Change Leader System and Wall-run. For the first time ever, the world of Naruto will also take advantage of the graphics power of the new generation systems.', 'I both love and hate Naruto Shippuden: Ultimate Ninja Storm 4. As a fan of the anime and manga, I expected lots of intense action from what’s been presented as the final game of the Ultimate Ninja Storm series, and to its credit, Storm 4 delivers. The characters and over-the-top battles look and feel great, and the story pays off in a satisfying way. On the other hand, even the best combat system in the world would be wasted if there are no worthy opponents to be found.', 'Y', 'naruto-storm-4', 'storm-4.jpg'),
(6, 'For Honor', 'Carve a path of destruction through the battlefield in For Honor. Enter the chaos of a raging war as a bold knight, brutal viking, or mysterious samurai, three of the greatest warrior legacies. For Honor is a fast-paced, competitive experience mixing skill, strategy, and team play with visceral melee combat. The Art of Battle, For Honor’s innovative control system, puts you in total control of your heroes, each with distinct skills and weapons, as you fight for land, glory, and honor. As a skilled warrior on an intense, believable battleground, you annihilate all soldiers, archers, and opposing heroes who stand in your way.', 'For Honor’s ombat is the kind of brutal melee I always wanted, but never thought I’d actually get to play. Its third-person action-game exterior hides a strategically complex fighting game, mixing team-based action with less interesting solo modes, all built on the most flexible and technically complete melee fighting system I’ve ever experienced.\r\nFor Honor lives and dies on its fighting system, dubbed “The Art of Battle” by Ubisoft, and it’s the reason For Honor is more like a traditional fighting game in the vein of Street Fighter or Soul Calibur than the hack-and-slash Dynasty Warriors it appears to be at first glance. Locking onto an opponent puts you into “duel mode,” for lack of a better term, where you can change your guard to block left, right, or top. You can block incoming attacks from the direction you’re guarding, and you have to read which direction your opponent is guarding and attack from one of the two directions from which they’re vulnerable to successfully hit.', 'Y', 'for-honor', 'for-honor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gamescomments`
--

CREATE TABLE `gamescomments` (
  `UID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ReviewID` int(11) NOT NULL,
  `UserComment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `gamescomments`
--

INSERT INTO `gamescomments` (`UID`, `UserID`, `ReviewID`, `UserComment`) VALUES
(1, 1, 1, 'This is a comment that was generated manually in the database.'),
(124, 2, 2, 'This game has bad online performance!!'),
(125, 2, 2, 'sis'),
(126, 2, 1, 'This game was originated within the database'),
(127, 2, 2, 'this comment works dynamically'),
(128, 2, 2, 'doesn\'t refresh the page'),
(129, 1, 3, 'Rocket League is soooo gooodddd!!!\n'),
(130, 2, 2, 'best fighting game ever Cac and so many fan service features XDD\n'),
(131, 2, 3, 'My rank is platinum!'),
(132, 2, 4, 'Who would\'ve thought minecraft could be this famous'),
(133, 2, 5, 'if you\'re a naruto fan you must own this game'),
(134, 2, 6, 'for honor is the best tactically fighting game...');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UID` int(11) NOT NULL,
  `UserName` varchar(250) NOT NULL,
  `UserPassword` varchar(250) NOT NULL,
  `DarkMode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16le;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UID`, `UserName`, `UserPassword`, `DarkMode`) VALUES
(1, 'Lecturer', 'Example', 1),
(2, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activereviews`
--
ALTER TABLE `activereviews`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `gamescomments`
--
ALTER TABLE `gamescomments`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UID` (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activereviews`
--
ALTER TABLE `activereviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gamescomments`
--
ALTER TABLE `gamescomments`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
