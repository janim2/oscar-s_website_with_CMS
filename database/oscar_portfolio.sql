-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2024 at 12:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oscar_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Oscar Bimpong', 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` bigint(11) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `status`, `fullname`, `email`, `phonenumber`, `message`, `date`) VALUES
(1, 0, 'Jesse ', 'Anim', 233554368510, '', '2022-04-07'),
(2, 1, 'Henry Ford', 'email@gmail.com', 233268977129, '', '2022-04-13'),
(3, 0, 'Jesse', 'iamjesse75@gmail.com', 268977129, 'i want to meet you', '2022-04-20'),
(4, 0, 'Jesse', 'animjesse55@gmail.com', 268977129, 'Testing apointment', '2022-04-16'),
(5, 0, 'Michael ', 'animjesse55@gmail.com', 268977129, 'Hi', '2022-04-22'),
(6, 0, 'CHARITY DERY', 'deryc2014@gmail.com', 249093254, 'One day masterclass in Accra', '2023-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `tmp_image_upload_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` varchar(15000) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `show_comments` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `tmp_image_upload_id`, `title`, `content`, `tags`, `show_comments`, `date_added`) VALUES
(18, 272363, 'Mindset Revolution Motivational Session with Asante Kotoko FC', 'This was a powerful session with the Asante Kotoko players and the management team. The whole ideology was how they can have a winning mentality. That is that mentality that says that I\'m born to win. Asante Kotoko has a rich history of success and this tradition can only be continued if the current crop of players believe that winning is in their DNA and their passion is to succeed against all odds. The session was engaging and thought-provoking and it was designed to drive a new mindset of can-do spirit. There is nothing impossible if you put your mind to it. A new mindset has been inculcated in the team after the session. The feedback was awesome and they were posied to fight the battles associated with any game to win against all odds. I\'m humbled to be part of Kotoko\'s success story, especially this season where they are leading the league with 9 points with about 5 games to go. Congrats to the CEO, Nana Yaw Amponsah and the head coach, Dr Prosper Obenfo and the entire Kotoko management team as well as the players and the supporters for working so hard over the years to bring Kotoko back to its glorious days.', '1', 1, '2022-06-15 18:51:33'),
(19, 656153, 'Strategic Positioning of the Oscar Bimpong Brand', 'I have a business that strategically positions me in the marketplace because the corporate world spends too much money on skill set training to the detriment of behavioural training.\r\n\r\nWhat they forget is that anyone they employ already has a level of skill set. Therefore allocating a big budget for skill set training and neglecting the behaviour that backs the skill set can hinder the growth of the organisation.\r\n\r\nIf an excellent skill set is backed with a bad attitude, it will surely impact your organisation negatively. This is the reason why behavioural training is now breaking ground in the corporate world. \r\nWhat many Directors and CEOs don\'t know is every employee walks through the door of their organisation with a particular mindset based on their background, the environment they grew up in, tribal sentiments, attitude towards work, ethics etc. \r\n\r\nMy work is to make sure that the mindset of every employee is aligned with the vision of the company.  A team that has the right mindset will succeed more than a team that has the right skill set backed with a bad attitude. \r\n\r\nThis is why you must book for my two days training dubbed â€œHow to Develop the Right Corporate Mindsetâ€. \r\n\r\nSome of my clients are Vanguard Assurance, Zeepay, Asante Kotoko Sporting Club, Acacia Health Insurance, ALS Global Shipping & Logistics Limited etc just to mention a few.\r\n\r\nWhatsapp +447591152983 or email info@train2inspire.com for more details and the opportunity to work with you.\r\n', '1', 1, '2022-08-30 19:37:42'),
(20, 498380, 'Be Unique in the Markeplace', 'Donâ€™t build your brand around an existing brand because when they google your brand, that brand will overshadow yours. Be authentic and unique in the marketplace. This means it doesn\'t matter how competitive your industry is, there must be a unique proposition that will make potential customers attracted to you and existing customers stay loyal. \r\n\r\nThere is only one Oscar Bimpong when you google. As a business or a personal brand, uniqueness is an anchor to surviving in the industry that you operate.\r\n', '1', 1, '2022-09-01 12:26:04'),
(21, 871604, 'Book the Mindset Revolutionist of our Time', 'In the last quarter of the year, let me be the first speaker at your conference, summit or seminar. The aim is to set the minds of your audience right before you impact their lives with your subject matter.\r\n\r\nAlso, as a business start-up, organisation or as entrepreneur, you will need my well-developed training program on how to develop the right corporate mindset. This is an unusual training designed to align the mindset of your staff to the vision of the company.\r\n\r\nLastly, as a group, association or Church, you need to experience the transformational speaking engagement based on the mindset Revolution book. This is designed to change mindsets to achieve your goals in 2022 against all odds.\r\n\r\n2022 is a results-oriented year. Book a date with The Mindset Revolutionist ahead of time. The diary is already picking up. WhatsApp +447591152983 or email info@train2inspire.com for more details.', '1', 1, '2022-09-01 12:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`id`, `blog_id`, `image_url`) VALUES
(10, 14, 'one.png'),
(11, 15, 'one.png'),
(12, 17, 'kenedy.jpeg'),
(13, 18, 'try.jpg'),
(14, 19, 'Forever Living 1.jpeg'),
(15, 20, '300995612_5580638728633284_442996227444627988_n.jpeg'),
(16, 21, '271739243_4918413368189160_147230585465062837_n.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `date_published` date NOT NULL,
  `amazon_link` varchar(255) NOT NULL,
  `tmp_image_upload_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `date_published`, `amazon_link`, `tmp_image_upload_id`, `date_added`) VALUES
(3, 'Mindset Revolution', 'Kingdom Clientele - Deploying Corporate Strategy Rooted in Biblical Principles for Church Growth. It is about the principles of businesses have taken from the Bible, and remodelled it and the Church which is the custodian of such principles seems to struggle. For example, customer service in business terms is the redefinition of love. Businesses have used this principle of love to build multi-national companies but the Church which is the custodian of such principles seem to struggle.', '2017-07-17', 'https://www.amazon.co.uk/Mindset-Revolution-Re-engineering-Prison-Purpose-ebook/dp/B08ZL5SZ94/ref=mp_s_a_1_1?crid=36KT5JA4EODCI&keywords=mindset+revolution&qid=1659468907&sprefix=mindset+rev%2Caps%2C220&sr=8-1', 823967, '2022-08-02 19:39:31'),
(4, 'Inspirational Wisdom for Today (IWFT)', 'Inspirational Wisdom for Today (IWFT) was birthed out of my passion for influencing the world positively. Five years ago when I started my weekly Radio program which was based on the precept of inspiring my generation to succeed against all odds, I realised that I was still not fulfilled. Hence I wanted something that will give me the opportunity to inspire my generation on a daily basis.', '2017-05-15', 'https://www.amazon.co.uk/Inspirational-Wisdom-Today-Oscar-Bimpong-ebook/dp/B072FH8L7V/ref=sr_1_3?crid=21AGM2C20G2RS&keywords=oscar+bimpong&qid=1647021567&sprefix=oscar+bimpong%2Caps%2C232&sr=8-3', 112249, '2022-07-28 08:40:54'),
(7, 'Kingdom Clientele', 'This Book Outlines â€¦â€¢How to use corporate strategies rooted in Biblical principles for Church growth.â€¢The Biblical principles for customer retention and growth of your Church or business.â€¢Some factors that may affect the growth of your Church or business.â€¢Strategic structures needed in integrating new members to your Church.â€¢Creation of customer consciousness and centricity in your Church or business.â€¢How to acquire a competitive urge in todayâ€™s competitive market.', '2017-08-17', 'https://www.amazon.co.uk/Kingdom-Clientele-Deploying-Corporate-Principles/dp/1999800001/ref=sr_1_1?crid=1ZDW7Z8BJQ2IT&keywords=kingdom+clientele&qid=1659021752&sprefix=kingdom+clientele%2Caps%2C130&sr=8-1', 295014, '2022-08-02 19:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `book_images`
--

CREATE TABLE `book_images` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_images`
--

INSERT INTO `book_images` (`id`, `book_id`, `image_url`) VALUES
(1, 2, '5.jpg'),
(2, 3, '5.jpg'),
(3, 3, 'Kingdom Clientele Link.jpg'),
(5, 5, 'Safet.jpg'),
(6, 6, 'Safet.jpg'),
(8, 8, 'Safet.jpg'),
(9, 4, 'wisdom.jpg'),
(10, 5, '0A546F32-0EC2-41F9-A385-6F3E8FA5E2B8.jpeg'),
(11, 6, 'scan.png'),
(12, 7, 'oscar_bk3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `blog_id`, `name`, `email`, `date_added`) VALUES
(2, 'If that address is correct, here are three other things you can try', 15, 'Jesse Anim', 'iamjesse75@gmail.com', '2022-04-13 14:32:27'),
(3, 'Wow this is awesome ', 18, 'Stephen Boakye Frimpong', 'stephenfrimpongyg@gmail.com', '2022-07-03 13:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `email`, `subject`, `date_added`) VALUES
(7, 'getting in touch8', 'Jesse Anim', 'iamjesse75@gmail.com', 'Getting in touch with you', '2022-04-15 14:39:53'),
(8, 'Fixing the people in time', 'Jesse Anim', 'iamjesse75@gmail.com', 'Fellow Ghanaians', '2022-04-15 15:03:29'),
(9, 'Greetings,\r\n\r\nI see you have a broken link on your website:  http://oscarbimpong.com/index.html\r\n\r\nIn the past I\'ve used a service like DeadLinkScanner.com to help keep broken links off of my websites.\r\n\r\n-Brenda', 'Brenda Reynolds', 'BRogers12@gmail.com', 'Problem with your website', '2022-05-29 08:25:03'),
(10, 'Do you need help with graphic design - brochures, banners, flyers, advertisements, social media posts, logos etc? \r\n\r\nWe charge a low fixed monthly fee. Let me know if you\'re interested and would like to see our portfolio.\r\n	\r\n', 'Danny K', 'pat@aneesho.com', 'Design Work', '2024-02-16 06:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `speaker_images`
--

CREATE TABLE `speaker_images` (
  `id` int(11) NOT NULL,
  `testimony_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `speaker_images`
--

INSERT INTO `speaker_images` (`id`, `testimony_id`, `image_url`) VALUES
(2, 7, '2.jpg'),
(3, 8, '2.jpg'),
(4, 9, '2.jpg'),
(5, 10, '2.jpg'),
(6, 7, 'FD59CA8D-5966-41FC-9C49-D942187C83F6.jpeg'),
(7, 8, 'FD59CA8D-5966-41FC-9C49-D942187C83F6.jpeg'),
(8, 9, 'FD59CA8D-5966-41FC-9C49-D942187C83F6.jpeg'),
(9, 10, 'therss.jpeg'),
(10, 11, 'therss.jpeg'),
(11, 12, 'therss.jpg'),
(12, 13, 'therss.jpg'),
(13, 14, '20160110_103140.jpg'),
(14, 15, 'Safet.jpg'),
(15, 16, 'hud.png'),
(16, 17, 'hud.png'),
(17, 18, 'hud.png'),
(18, 19, 'kenedy.jpeg'),
(19, 20, 'ken.jpeg'),
(20, 21, 'therss.jpg'),
(21, 22, 'zambia.jpeg'),
(22, 23, 'esi.jpeg'),
(23, 24, 'fran.jpeg'),
(24, 25, 'akua.jpeg'),
(25, 26, 'lasc.jpeg'),
(26, 27, 'kotokos.jpeg'),
(27, 28, 'woman.jpg'),
(28, 29, 'man.jpg'),
(29, 30, '300823449_10226463653270454_3020393498411512381_n.jpeg'),
(30, 31, '300823449_10226463653270454_3020393498411512381_n.jpg'),
(31, 32, '179782a4-a905-46f1-ae15-4fb3457d5703.jpeg'),
(32, 33, '1645519941266.jpeg'),
(33, 34, 'ec08a592-a87a-416a-9525-8563fbe40fd4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `testimony` varchar(1000) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `tmp_image_upload_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `testimony`, `speaker`, `position`, `tmp_image_upload_id`, `date_added`) VALUES
(19, 'Mindset revolution is not just a speculative topic to wine downtime. Through Oscar Bimpong\'s book, one is taken on a journey in understanding the power enveloped in the mind. The grammar and scenarios utilized in the literature, make it suitable even for children to grasp. \r\n\r\nAfrica indeed needs a revolution, focused on investing in the mind (SCOPO as we call it in Zambia). Oscar\'s book is indeed a must-read for every person with the desire to scale to greater highs.', '                                                                                                       Aston Njovu ', '                                                                                                     Zeepay Zambia', 473467, '2022-08-30 18:27:43'),
(20, 'The Mindset Revolution book is the perfect guide to the realization that your mindset determines how far you can go. A limitless mindset leads to a limitless realization of your goals. The mind is the single most important factor in determining how high you can soar. Book Oscar for his behavioural training and there will be a paradigm shift in your organisation.\r\n', 'Kennedy Osei', 'Head of Operations, Zeepay Ghana', 381500, '2022-05-23 22:43:33'),
(22, 'Reading the Mindset Revolution book - Re-engineering your mind from prison to purpose made me think twice as to what Oscar was trying to tell me as an engineer myself.\r\n\r\nThe book is transformative and has personally given me a perspective on life. I have made Oscarâ€™s book, Mindset Revolution a reference book. I will not hesitate to recommend the book to anyone who wants his life transformed to read the book\r\n', 'H.E. Richard Mwanza', 'Zambia\'s High Commission to Ghana', 199550, '2022-08-30 19:39:23'),
(23, 'Since I read the Mindset Revolution book, there has been a great impact on my way of thinking. \r\n\r\nI learnt that the mind is the most priced resource in my life, hence, I began making conscious efforts to train my mind to stay positive in all instances. \r\n\r\nI learned to stop putting limitations on my life as to what I think I can achieve. I will recommend the Mindset Revolution book to anyone or a corporate organisation.', 'Ewura Esi Antwi -Bosiako', 'Service delivery Analysts', 576297, '2022-05-22 10:03:42'),
(25, ' I sat in a session where Oscar Bimpong did a presentation for the playing body and technical team of Asante Kotoko(a football Club in Ghana). \r\n\r\nI was very much impacted positively. Reading his book â€˜Mindset Revolutionâ€™ opened my eyes even more to how powerful a tool our mind is, a fact which we mostly downplay. \r\n\r\nI highly recommend this book to everyone and his thought-provoking Mindset Revolution Training Sessions.\r\n', 'Akua Pokua Kwarteng ', 'Head of Legal of Asante Kotoko Sporting Club (Domestic) ', 493194, '2022-05-23 22:40:13'),
(26, 'Oscar writes and gives extremely powerful insights into using the creative power of your thoughts to think, dream, create and accomplish one\'s life\'s goals no matter who you are, where you\'re born and social standing. An insightful book!', 'Frederick Amissah', 'CEO Universal Hospitals Group Accra, Ghana.', 778511, '2022-05-22 10:13:51'),
(27, 'Oscar Bimpongâ€™s â€˜Mindset Revolutionâ€™ session with the Asante Kotoko team earlier in the season played a significant role in our league victory. \r\n\r\nAs demonstrated by Oscar, the mind is a powerful tool and Asante Kotoko winning the 2021/22 Ghana premier league signifies the same.\r\n\r\nThe mental fortitude of our team has been immeasurable and we cannot underestimate the value his session added to our season.\r\n\r\nWe celebrate with you Oscar and we endorse you wholeheartedly. Keep helping institutions to reach their full potential. Asante Kotoko is grateful.\r\n', 'Nana Yaw Amponsah', 'CEO of Asante Kotoko', 220827, '2022-09-04 13:44:47'),
(28, 'The Mindset Revolution book is a must-read. It is different from other books as it is designed to distort your old ways of negative thought patterns to a new mental attitude.\r\n\r\nIt then leads to a transformed mindset ready to fight the battles of life to succeed in pursuit of life and vision. \r\n\r\nI have personally encountered a new way of viewing life through this book and it has affected my life positively, home and community in a positive way.\r\n', 'Theresa Chukwuma', 'Staff Nurse, NHS UK', 400821, '2022-07-06 11:55:52'),
(31, 'The mindset Revolution book is indeed a solid transformational book. It speaks to you and once you come to know that it\'s all in the mind you see no limits. It has been very resourceful as British International School uses the book to help transform our students\' thinking in secondary. \r\n\r\nSince they started using the book, they have begun to take control of their learning, go the extra mile in their studies and manage peer pressure. This book is a must-read for every young child in Ghana, Africa and across the globe especially for schools to adapt to help the thinking pattern of students to succeed against all odds.', 'Franklin Adjetey', 'CEO of Project Know Thyself & Former School Principal, British International School.', 903676, '2022-08-30 19:01:55'),
(32, 'I have organised and been in a series of training sessions but the training we had on \"Mindset Revolution\" will stay with Vine Christian School for a long time.\r\n\r\nAs educators, it is important to have a renewed mindset to help the generation we are training.\r\n\r\nWe must undo what is killing the creativity of the next generation so that we can become meaningful global citizens.\r\n\r\nAnd the right training we needed was that on \"Mindset Revolution\"\r\n\r\n\r\n', 'Sheila Abban-Looh', 'HR, Vine Christian School, Accra', 775692, '2022-08-30 19:09:27'),
(33, 'Oscar had a powerful mindset revolution training session with the team. It was thought-provoking, engaging, full of practical activities, and case studies. The overall feedback from the team at Acacia Health Insurance after the Mindset Revolution Corporate Training was Excellent. We have a rating from 0 - 10. \r\n\r\n9 - 10 is excellent \r\n7 - 8 is very good\r\n5 - 6 is good \r\n\r\nand Oscar got an average rating of 9.2. Good job done Oscar!\r\n\r\nI will recommend Oscar\'s mindset revolution corporate training to any organisation that wants to break the mental limitations of their staff.', 'Dr Dan V. Armooh', 'CEO, Acacia Health Insurance Ltd', 769928, '2022-09-04 06:59:30'),
(34, 'The Mindset revolution corporate training facilitated by Oscar Bimpong has been a truly transformational experience for our staff. Not only have they been sensitized to the power of words, but they have also understood how to apply the knowledge in the work environment and in their personal lives.  We believe that Oscar brings to the table a wealth of knowledge and practical teachings that make sessions with staff relatable and realistic. Additionally, from a business perspective, he equips staff with the necessary skills to align with company objectives.', 'Belinda Larbi ', 'Human Resource Specialist, Zeepay Ghana Ltd.', 498692, '2022-09-04 06:06:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_images`
--
ALTER TABLE `book_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `speaker_images`
--
ALTER TABLE `speaker_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book_images`
--
ALTER TABLE `book_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `speaker_images`
--
ALTER TABLE `speaker_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
