-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 05:03 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `games-r-us`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `age` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `players` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `description`, `price`, `age`, `time`, `players`, `img_name`) VALUES
(1, 'Settlers of Catan', 'Your adventurous settlers seek to tame the remote but rich isle of Catan. Start by revealing Catan’s many harbors and regions: pastures, fields, mountains, hills, forests, and desert. The random mix creates a different board virtually every game. No two games are the same!\r\nEmbark on a quest to settle the isle of Catan! Guide your settlers to victory by clever trading and cunning development. Use resource combinations— grain, wool, ore, brick, and lumber—to buy handy development cards and build roads, settlements, and cities. Acquire your resources through trades, cards, or lucky dice (even outside your turn).\r\nBut beware! Someone might cut off your road or buy a monopoly. And you never know when the wily robber might steal some of your precious gains!', '59.97', '10+', '60 mins', '3-4', 'settlers-of-catan.jpg'),
(2, 'Splendor', 'As a wealthy Renaissance merchant, acquire mines and transportation, hire artisans and woo the nobility. Create the most fantastic jewelry to become the best-known merchant of them all! Acquire precious stones to trade them for development cards. Use development cards to acquire more gem stones. Use your gems and gold to create the most fantastic jewelry, and appeal to the nobles to gain the prestige you need to win.', '45.88', '10+', '30 mins', '2-4', 'splendor.jpg'),
(3, 'Ticket to Ride', 'October 2, 1900 - it\'s 28 years to the day that noted London eccentric, Phileas Fogg accepted and then won a bet that he could travel \"Around the World in 80 Days.\" Now, at the dawn of the century, some old friends have gathered to celebrate Fogg\'s impetuous and lucrative gamble - and to propose a new wager of their own. The stakes: $1 million in a winner-takes-all competition. The objective: to see the most cities in North America - in just 7 days. Ticket to Ride is a cross-country train adventure game. Players collect train cards that enable them to claim railway routes connecting cities throughout North America. The longer the routes, the more points they earn. Additional points come to those who can fulfill their Destination Tickets by connecting two distant cities, and to the player who builds the longest continuous railway. For 2 to 5 players ages 8 and older. Playing time: 30-60 minutes. Comes with: 1 Board map of North American train routes, 240 Colored Train Cars, 110 Train Car cards, 30 Destination Tickets, 5 Wooden Scoring Markers, 1 Days of Wonder Online access number, and a Rules booklet.', '59.95', '8+', '30-60 mins', '2-5', 'ticket-to-ride.jpg'),
(4, 'Prime Climb', 'Prime climb is a beautiful, colorful, mathematical board game designed for 2 to 4 players. Roll the dice and add, subtract, multiply and divide your way to the center of the board, picking up prime cards and bumping your opponents back to start as you go. The first to land both pawns on 101 wins the game! everyone can learn to multiply and divide using prime climb\'s unique color coding. Inspire deeper mathematical understanding while mastering arithmetic! prime climb is a perfect game for families & schools, kids & adults. Awaken your love of math, with prime climb.', '42.99', '10+', '15-30 mins', '2-4', 'prime-climb.jpg'),
(5, 'Mancala', 'Mancala is one of the world\'s oldest and best-loved games, and our folding wooden Mancala board offers an affordable way to play that makes a great travel game as well as a great home edition. Players take turns scooping up the special stones and counting them out one at a time into the pockets on the board. When they drop a stone into an empty pocket on their side of the board, they capture all the stones in the opposite pocket. It sounds like a simple marble game, but it\'s got plenty of strategy and reinforces STEM skills like counting and strategic planning. The player who collects the most stones wins. For 2 players, ages 6 and up.', '23.31', '6+', '15 mins', '2', 'mancala.jpg'),
(6, 'Cranium', 'The Cranium Game is outrageous fun and gives players a chance to show off their talents. Players team up to cruise around the board completing activities in 4 color-coded categories: Creative Cat, Data Head, Star Performer, and Word Worm. One team picks a card from the category that matches their space on the board, and must successfully complete the activity before time runs out. Spelling a word backwards, drawing with their eyes closed, and solving a puzzle are just of few of the activities they might do. The first team to reach the Cranium Central space and complete one last challenge wins. Cranium and all related trademarks of Cranium, Inc. Copyright 2016 Cranium. Hasbro Gaming and all related terms are trademarks of Hasbro.', '39.90', '16+', '30+ mins', '4+', 'cranium.jpg'),
(7, 'Connect 4', 'Do you go up, to the side, or diagonally? Start in the middle or at the edge? It’s your choice in Connect 4 Game. Stack the 4 discs vertically, line them up side to side, or go on the diagonal. As long as you get 4-in-a-row, you win. Stay one step ahead of your opponent and block their attempts to get to 4-in-a-row first. Play all 3 Connect 4 games, and crush the competition.Connect 4 and all related terms are trademarks of Hasbro.', '19.93', '6+', '5+ mins', '2', 'connect-4.jpg'),
(8, 'Code Names', 'Codenames is a social word game with a simple premise and challenging game play. Two rival spymasters know the secret identities of 25 agents. Their teammates know the agents only by their codenames. The teams compete to see who can make contact with all of their agents first. Spymasters give one-word clues that can point to multiple words on the table. Their teammates try to guess words of their color while avoiding those that belong to the opposing team. And everyone wants to avoid the assassin. The game works very well with 4 players if you prefer to guess without help. Or you can add more players if you prefer lively discussion. There is also a cooperative variant where a single team tries to achieve the highest score they can by playing against the game itself.', '21.99', '14+', '15 mins', '2+', 'code-names.jpg'),
(9, 'Chess', 'This chess set includes a beautiful No. 6 tournament standard size folding wooden inlaid chess board. Each Staunton chess piece is individually handcrafted and weighted with metal. This chess set is made from renewable plantation wood.', '65.99', '6+', '5+ mins', '2', 'chess.jpg'),
(10, 'Carcassonne', 'The Carcassonne is a clever tile-laying game. The southern French city of Carcassonne is famous for its unique roman and medieval fortifications. The players develop the area around Carcassonne and deploy their followers on the roads, in the cities, in the cloisters, and in the fields. The skill of the players to develop the area will determine who is victorious. The game is for ages 8 and up and 2 to 5 players.', '39.95', '7+', '35 min', '2-5', 'carcassonne.jpg'),
(11, 'Blokus', 'Stake your claim and protect your territory with the Blokus game! It takes less than a minute to learn, but offers endless strategy and fun challenges for the whole family. Each player gets a set of 21 pieces – in red, blue, green, or yellow – then takes turns placing them on the board. There’s just one rule: each piece you play must touch at least one other piece of the same color, but only at the corners! The goal is to fit the most pieces on the board. The game ends when no more pieces can be placed down, and the player with the lowest number remaining wins!', '36.99', '7+', '15+ mins', '2-4', 'blokus.jpg'),
(12, 'Apples to Apples', 'The Game of Crazy Combinations! APPLES to APPLES Party Box is packaged in a collectible tin and contains the same 1, 000 cards as found in the Party Box! The wild, award-winning card and party game that provides instant fun for four to ten players! It\'s as easy as “comparing apples to apples”. . . just open the tin, deal the cards, and you\'re ready to play! Select the card from your hand that you think is best described by a card played by the judge. If the judge picks your card, you win that round. And everyone gets a chance to be the judge! Each round is filled with surprising and outrageous comparisons from a wide range of people, places, things and events. Fast moving and refreshing, APPLES to APPLES is perfect for any get together with family and friends! The Party Box Tin comes complete with over 1, 000 cards. Colors and decorations may vary.', '39.99', '12+', '15+ mins', '4-10', 'apples-to-apples.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
