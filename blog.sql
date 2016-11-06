

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `articles` (`id`, `title`, `content`, `date`, `author`) VALUES
(1, 'First!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent maximus lectus non blandit vulputate. Suspendisse pellentesque ipsum erat, sed imperdiet urna consectetur eget. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque suscipit porta elit ac aliquet. Ut mattis est sem, sit amet scelerisque lectus dignissim sit amet. Phasellus at tincidunt tellus, quis finibus sapien. Suspendisse ut erat pretium, molestie odio ac, egestas purus. In pulvinar et augue non tincidunt. Nullam viverra mauris nec interdum faucibus.', '1980-01-01', 'JABS'),
(7, 'Welcome to JABS', 'You can delete these posts from admin panel', '1980-01-01', 'ivan770');

ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
