-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2022 at 06:54 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youbelong`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

DROP TABLE IF EXISTS `advertisements`;
CREATE TABLE IF NOT EXISTS `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `advertiser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` timestamp NOT NULL,
  `end_date` timestamp NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `advertiser`, `banner`, `url`, `start_date`, `end_date`, `price`, `clicks`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Om Ali Tekeyeh', '1652215097.jpg', 'https://www.tua.jo/ar', '2022-05-10 19:00:00', '2022-05-15 19:00:00', '50', 9, 1, '2022-05-10 17:38:17', '2022-05-13 11:35:51'),
(4, 'Talabat', '1652455697.jpg', 'https://www.talabat.com/jordan', '2022-05-13 03:28:00', '2022-05-13 03:28:00', '120', 2, 1, '2022-05-13 12:28:17', '2022-05-13 12:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE IF NOT EXISTS `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `announcments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `cover_image`, `title`, `short_description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, '1652120046.jpg', 'GUEST HOME FOR THE ELDERLY', 'he old man “elderly.”That is, he grew old, and he grew old, and the elderly, or the elderly, are plural of the word (the elderly)', '<p style=\"margin-bottom: 20px; line-height: 28px;\">The old man “elderly.”That is, he grew old, and he grew old, and the elderly, or the elderly, are plural of the word (the elderly), knowing that this word is associated with sociologists with a specific age, which is the age of sixty years; An elderly man is one who is over sixty years old, and the elderly are: individuals who have exceeded the official age for retirement; That is, they have reached the age of retirement, and this age ranges between 65-70 years, In addition, the elderly are: those who entered the stage of old age, which represents a biological fact that characterizes the final development in the stages of human life, and some of them define the elderly as: every individual is unable to take care of himself and serve it; Because of advancing age, and not because of a disability, or a specific disease, and it is worth noting that there are those who classify old age into: first old age, which is between 65-74 years, and advanced old age 86.</p><p style=\"margin-bottom: 20px; line-height: 28px;\"><br></p><p style=\"margin-bottom: 20px; line-height: 28px;\"><br></p><p style=\"margin-bottom: 20px; line-height: 28px;\">Caring for the elderly:</p><p style=\"margin-bottom: 20px; line-height: 28px;\">The elderly should receive an adequate amount of attention and care by parents, and even members of society, as this is represented by various means, the most important of which are:</p><p style=\"margin-bottom: 20px; line-height: 28px;\">Medical means: These include treating diseases in the elderly, correcting the deficiency in his sensory organs, and preventing him from using medicines without medical advice, in addition to providing auxiliary medical devices, such as: a wheelchair, and tools for maintaining balance, and taking care of conducting periodic examinations.</p><p style=\"margin-bottom: 20px; line-height: 28px;\">Environmental means: They are represented by the use of household tools that suit the condition of the elderly, improving the lighting condition, not using polished or uneven floors, choosing shoes or insoles suitable for the elderly, and other measures that guarantee the safety and health of the elderly.</p><p style=\"margin-bottom: 20px; line-height: 28px;\">Performing routine chores: The elderlys performance of routine chores during the day contributes greatly to improving and maintaining their health.</p><p style=\"margin-bottom: 20px; line-height: 28px;\">Attention to physical activities: The elderly can protect himself from health problems, by practicing sports activities that include the movement of the body; they help burn fat, strengthen muscles, and improve bowel movement.</p><p style=\"margin-bottom: 20px; line-height: 28px;\">Attention to social activities: by keeping the elderly away from isolation, engaging him with people, helping him find old friends, maintaining his mental health, and not feeling depressed, through mental and mental stimulation.</p>', 1, '2022-05-09 15:14:06', '2022-05-09 15:14:06'),
(2, 11, '1652120178.jpg', 'PEACE HOME FOR THE ELDERLY', 'The old man “elderly.”That is, he grew old, and he grew old, and the elderly, or the elderly, are plural of the word (the elderly)', '<p style=\"margin-bottom: 20px; line-height: 28px;\">The old man “elderly.”That is, he grew old, and he grew old, and the elderly, or the elderly, are plural of the word (the elderly), knowing that this word is associated with sociologists with a specific age, which is the age of sixty years; An elderly man is one who is over sixty years old, and the elderly are: individuals who have exceeded the official age for retirement; That is, they have reached the age of retirement, and this age ranges between 65-70 years, In addition, the elderly are: those who entered the stage of old age, which represents a biological fact that characterizes the final development in the stages of human life, and some of them define the elderly as: every individual is unable to take care of himself and serve it; Because of advancing age, and not because of a disability, or a specific disease, and it is worth noting that there are those who classify old age into: first old age, which is between 65-74 years, and advanced old age 86.</p><p><br style=\"\"></p><p style=\"margin-bottom: 20px; line-height: 28px;\">Caring for the elderly:<br>The elderly should receive an adequate amount of attention and care by parents, and even members of society, as this is represented by various means, the most important of which are:<br><br>Medical means: These include treating diseases in the elderly, correcting the deficiency in his sensory organs, and preventing him from using medicines without medical advice, in addition to providing auxiliary medical devices, such as: a wheelchair, and tools for maintaining balance, and taking care of conducting periodic examinations.<br><br>Environmental means: They are represented by the use of household tools that suit the condition of the elderly, improving the lighting condition, not using polished or uneven floors, choosing shoes or insoles suitable for the elderly, and other measures that guarantee the safety and health of the elderly.<br><br>Performing routine chores: The elderlys performance of routine chores during the day contributes greatly to improving and maintaining their health.<br><br>Attention to physical activities: The elderly can protect himself from health problems, by practicing sports activities that include the movement of the body; they help burn fat, strengthen muscles, and improve bowel movement.<br><br>Attention to social activities: by keeping the elderly away from isolation, engaging him with people, helping him find old friends, maintaining his mental health, and not feeling depressed, through mental and mental stimulation.</p>', 1, '2022-05-09 15:16:18', '2022-05-09 15:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `cover_image`, `title`, `short_description`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, '1651932382.jpg', 'CARING FOR THE ELDERLY', 'The old man “elderly.”That is, he grew old, and he grew old, and the elderly, or the elderly, are plural of the word (the elderly), knowing that this word is associated with sociologists with a specific age, which is the age of sixty years', '<p style=\"margin-bottom: 20px; line-height: 28px;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 17px;\">The old man “elderly.”That is, he grew old, and he grew old, and the elderly, or the elderly, are plural of the word (the elderly), knowing that this word is associated with sociologists with a specific age, which is the age of sixty years; An elderly man is one who is over sixty years old, and the elderly are: individuals who have exceeded the official age for retirement; That is, they have reached the age of retirement, and this age ranges between 65-70 years, In addition, the elderly are: those who entered the stage of old age, which represents a biological fact that characterizes the final development in the stages of human life, and some of them define the elderly as: every individual is unable to take care of himself and serve it; Because of advancing age, and not because of a disability, or a specific disease, and it is worth noting that there are those who classify old age into: first old age, which is between 65-74 years, and advanced old age 86.</span></font></p><p style=\"margin-bottom: 20px; line-height: 28px;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 17px;\">Caring for the elderly:</span></font></p><p style=\"margin-bottom: 20px; line-height: 28px;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 17px;\">The elderly should receive an adequate amount of attention and care by parents, and even members of society, as this is represented by various means, the most important of which are:</span></font></p><p style=\"margin-bottom: 20px; line-height: 28px;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 17px;\">Medical means: These include treating diseases in the elderly, correcting the deficiency in his sensory organs, and preventing him from using medicines without medical advice, in addition to providing auxiliary medical devices, such as: a wheelchair, and tools for maintaining balance, and taking care of conducting periodic examinations.</span></font></p><p style=\"margin-bottom: 20px; line-height: 28px;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 17px;\">Environmental means: They are represented by the use of household tools that suit the condition of the elderly, improving the lighting condition, not using polished or uneven floors, choosing shoes or insoles suitable for the elderly, and other measures that guarantee the safety and health of the elderly.</span></font></p><p style=\"margin-bottom: 20px; line-height: 28px;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 17px;\">Performing routine chores: The elderlys performance of routine chores during the day contributes greatly to improving and maintaining their health.</span></font></p><p style=\"margin-bottom: 20px; line-height: 28px;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 17px;\">Attention to physical activities: The elderly can protect himself from health problems, by practicing sports activities that include the movement of the body; they help burn fat, strengthen muscles, and improve bowel movement.</span></font></p><p style=\"margin-bottom: 20px; line-height: 28px;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 17px;\">Attention to social activities: by keeping the elderly away from isolation, engaging him with people, helping him find old friends, maintaining his mental health, and not feeling depressed, through mental and mental stimulation.</span></font></p>', 0, '2022-04-28 11:06:22', '2022-05-07 13:20:41'),
(2, '1651934393.png', 'Elderly abuse', 'Many elderly people are subjected to abuse and ill-treatment by some members of society, or even those close to the family, and this abuse takes different forms and methods', '<p>Many elderly people are subjected to abuse and ill-treatment by some members of society, or even those close to the family, and this abuse takes different forms and methods, the most important of which are as follows:</p><p>Physical assault: It is inflicting bodily harm to the elderly, and causing actions that hurt his body, such as: breaking the bone, burning, slapping, bruising, biting, kicking, or shoving, in addition to causing his body hygiene to deteriorate.</p><p>Sexual assault: It is any form of sexual intercourse with the inability of the elderly to give consent, and the sexual assault is by the use of force and threats, which leads to rape, assault, and sexual harassment.</p><p>Psychological abuse: It is represented by the actions and threats to which the elderly are exposed, which lead to his feeling of fear of violence, the desire for isolation, depression, and psychological anxiety, for example: unjustified imprisonment, isolation, insults, humiliation, humiliation, and hardship.</p><p>Financial abuse: It is represented in the physical exploitation of the elderly by one of his relatives, or those in charge of his care, so that the elderly’s property and money are used immorally and illegally; With the aim of obtaining personal gains and benefits, and financial abuse may be due to not providing adequate care to the elderly despite the abundance of resources such as food and clothing.</p><p>Neglect: It is the deliberate and intentional deprivation of the elderly from necessary services or goods; To maintain the mental and physical health of the elderly, such as depriving him of medicine, clothing, food, health, and other services.</p>', 1, '2022-05-07 11:39:53', '2022-05-07 11:39:53'),
(3, '1651935136.png', 'Psychological characteristics of the elderly', 'There may be many individual differences between individuals of the same age (young people, for example), but the elderly are similar to each other in some key features,', '<p>There may be many individual differences between individuals of the same age (young people, for example), but the elderly are similar to each other in some key features, the most important of which are:</p><p>1.<span style=\"white-space:pre\">	</span>Excess sensitivity: the elderly make themselves the center of attention, and a primary focus of love, hate, and attention, as they constantly direct interests from external and social issues to themselves; therefore, we find that many thinkers and writers in their advanced ages write books and novels about themselves.</p><p>2.<span style=\"white-space:pre\">	</span>To admire the past: The elderly are distinguished by constant admiration for their past, and they show others how much they admire the exploits, heroisms, categorical decisions, and decisive positions that they implemented in the past, and had a great impact on the lives of a group of people, and the elderly woman may remember what she was in the past of the beauty of appearance, sedition, and attract people\'s attention.</p><p>3.<span style=\"white-space:pre\">	</span>Indifference to the self: Most of the elderly tend to a state of indifference, and this situation is that the old person makes a mockery of everything, ridicule all people, and everything that calls for ridicule, even himself, laughing at every funny act that comes from others, or From himself, he is not resentful against himself, nor admired by him.</p>', 1, '2022-05-07 11:52:16', '2022-05-07 11:52:24'),
(5, '1652170601.jpg', 'Caring for the elderly', 'The elderly should receive an adequate amount of attention and care by parents, and even members of society.', '<p class=\"MsoNormal\"><b><span style=\"font-size:16.0pt;line-height:107%;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-bidi-language:AR-JO\">The old man <span dir=\"RTL\"></span><span dir=\"RTL\"></span><span lang=\"AR-JO\" dir=\"RTL\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span>“</span>elderly<span dir=\"RTL\"></span><span dir=\"RTL\"></span><span lang=\"AR-JO\" dir=\"RTL\"><span dir=\"RTL\"></span><span dir=\"RTL\"></span>. ”</span></span></b><span style=\"font-size:16.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-bidi-language:AR-JO\">That is, he grew old, and he grew old, and the\r\nelderly, or the elderly, are plural of the word (the elderly), knowing that\r\nthis word is associated with sociologists with a specific age, which is the age\r\nof sixty years; An elderly man is one who is over sixty years old, and the\r\nelderly are: individuals who have exceeded the official age for retirement;\r\nThat is, they have reached the age of retirement, and this age ranges between\r\n65-70 years,</span> <span style=\"font-size:16.0pt;line-height:107%;font-family:\r\n&quot;Times New Roman&quot;,serif;mso-bidi-language:AR-JO\">In addition, the elderly are:\r\nthose who entered the stage of old age, which represents a biological fact that\r\ncharacterizes the final development in the stages of human life, and some of\r\nthem define the elderly as: every individual is unable to take care of himself\r\nand serve it; Because of advancing age, and not because of a disability, or a\r\nspecific disease, and it is worth noting that there are those who classify old\r\nage into: first old age, which is between 65-74 years, and advanced old age 86.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n27.0pt;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt\"><b><span lang=\"EN\" style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;font-family:&quot;inherit&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Courier New&quot;;\r\nmso-ansi-language:EN\">Caring for the elderly:<o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n27.0pt;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt\"><span style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;font-family:&quot;inherit&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Courier New&quot;\">The\r\nelderly should receive an adequate amount of attention and care by parents, and\r\neven members of society, as this is represented by various means, the most\r\nimportant of which are:<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n27.0pt;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt\"><b><span style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;font-family:&quot;inherit&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Courier New&quot;\">Medical\r\nmeans</span></b><span style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;\r\nfont-family:&quot;inherit&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:&quot;Courier New&quot;\">: These include treating diseases in the\r\nelderly, correcting the deficiency in his sensory organs, and preventing him\r\nfrom using medicines without medical advice, in addition to providing auxiliary\r\nmedical devices, such as: a wheelchair, and tools for maintaining balance, and\r\ntaking care of conducting periodic examinations.</span><span lang=\"AR-SA\" dir=\"RTL\" style=\"font-size:14.0pt;mso-ansi-font-size:17.0pt;font-family:&quot;Courier New&quot;;\r\nmso-ascii-font-family:inherit;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-hansi-font-family:inherit\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n27.0pt;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt\"><b><span style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;font-family:&quot;inherit&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Courier New&quot;\">Environmental\r\nmeans:</span></b><span style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;\r\nfont-family:&quot;inherit&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:&quot;Courier New&quot;\"> They are represented by the use of\r\nhousehold tools that suit the condition of the elderly, improving the lighting\r\ncondition, not using polished or uneven floors, choosing shoes or insoles\r\nsuitable for the elderly, and other measures that guarantee the safety and\r\nhealth of the elderly.</span><span lang=\"AR-SA\" dir=\"RTL\" style=\"font-size:14.0pt;\r\nmso-ansi-font-size:17.0pt;font-family:&quot;Courier New&quot;;mso-ascii-font-family:inherit;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-font-family:inherit\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n27.0pt;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt\"><span lang=\"AR-SA\" dir=\"RTL\" style=\"font-size:14.0pt;mso-ansi-font-size:17.0pt;\r\nfont-family:&quot;Courier New&quot;;mso-ascii-font-family:inherit;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-hansi-font-family:inherit\"><o:p>&nbsp;</o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n27.0pt;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt\"><b><span style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;font-family:&quot;inherit&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Courier New&quot;\">Performing\r\nroutine chores:</span></b><span style=\"font-size:17.0pt;mso-bidi-font-size:\r\n14.0pt;font-family:&quot;inherit&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:&quot;Courier New&quot;\"> The elderly’s performance of routine\r\nchores during the day contributes greatly to improving and maintaining their\r\nhealth.</span><span lang=\"AR-SA\" dir=\"RTL\" style=\"font-size:14.0pt;mso-ansi-font-size:\r\n17.0pt;font-family:&quot;Courier New&quot;;mso-ascii-font-family:inherit;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-hansi-font-family:inherit\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n27.0pt;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt\"><span style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;font-family:&quot;inherit&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Courier New&quot;\">&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;margin-bottom:.0001pt;line-height:\r\n27.0pt;tab-stops:45.8pt 91.6pt 137.4pt 183.2pt 229.0pt 274.8pt 320.6pt 366.4pt 412.2pt 458.0pt 503.8pt 549.6pt 595.4pt 641.2pt 687.0pt 732.8pt\"><b><span style=\"font-size:17.0pt;mso-bidi-font-size:14.0pt;font-family:&quot;inherit&quot;,serif;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Courier New&quot;\">Attention\r\nto physical activities</span></b><span style=\"font-size:17.0pt;mso-bidi-font-size:\r\n14.0pt;font-family:&quot;inherit&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-bidi-font-family:&quot;Courier New&quot;\">: The elderly can protect himself from\r\nhealth problems, by practicing sports activities that include the movement of\r\nthe body; they help burn fat, strengthen muscles, and improve bowel movement.<o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-size:1.0pt;line-height:107%;font-family:\r\n&quot;Arial&quot;,sans-serif;mso-fareast-font-family:&quot;Times New Roman&quot;;color:#202124;\r\nbackground:#F8F9FA\"><br>\r\n<!--[if !supportLineBreakNewLine]--><br>\r\n<!--[endif]--></span><span lang=\"AR-JO\" dir=\"RTL\" style=\"font-size:16.0pt;line-height:\r\n107%;font-family:&quot;Times New Roman&quot;,serif;mso-bidi-language:AR-JO\"><o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\"><b><span style=\"font-size:16.0pt;line-height:107%;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-bidi-language:AR-JO\">Attention to\r\nsocial activities:</span></b><span style=\"font-size:16.0pt;line-height:107%;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-bidi-language:AR-JO\"> by keeping the\r\nelderly away from isolation, engaging him with people, helping him find old\r\nfriends, maintaining his mental health, and not feeling depressed, through\r\nmental and mental stimulation.<span lang=\"AR-JO\" dir=\"RTL\"><o:p></o:p></span></span></p>', 1, '2022-05-10 05:16:41', '2022-05-10 05:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `care_home_contacts`
--

DROP TABLE IF EXISTS `care_home_contacts`;
CREATE TABLE IF NOT EXISTS `care_home_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `care_home_contacts_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `care_home_contacts`
--

INSERT INTO `care_home_contacts` (`id`, `user_id`, `subject`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 11, 'Donation', 'Ehab Aboushi', 'ehab@gmail.com', '0781113338', 'Hello test', '2022-05-07 12:46:52', '2022-05-07 12:46:52'),
(2, 11, 'Messages for care homes', 'Razan', 'razan@gmail.com', '0798456699', 'i want to contact you to support you!', '2022-05-07 12:50:34', '2022-05-07 12:50:34'),
(3, 11, 'Messages for care homes', 'Ramzi Aboushi', 'ramzialqaddomui@gmail.com', '0781114448', 'helloooooooooo', '2022-05-07 16:03:32', '2022-05-07 16:03:32'),
(4, 13, 'Events', 'Ramzi Aboushi', 'ramzialqaddomui@gmail.com', '0781114448', 'test', '2022-05-10 14:11:42', '2022-05-10 14:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `subject`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Donation', 'Randall Nash', 'vyheqixy@mailinator.com', '+1 (351) 583-2911', 'Ipsum ea dolore rei', '2022-05-06 12:21:51', '2022-05-06 12:21:51'),
(2, 'Messages for care homes', 'Robin Vaughn', 'hyfonohih@mailinator.com', '+1 (235) 871-9856', 'Enim obcaecati ducim', '2022-05-06 12:21:55', '2022-05-06 12:21:55'),
(3, 'Donation', 'Grace Alston', 'focoditol@mailinator.com', '+1 (556) 555-7354', 'Est ex aut lorem fac', '2022-05-06 12:21:58', '2022-05-06 12:21:58'),
(4, 'Events', 'Audra Espinoza', 'wucaco@mailinator.com', '+1 (516) 814-2494', 'Eveniet qui qui eli', '2022-05-06 12:22:00', '2022-05-06 12:22:00'),
(5, 'Donation', 'Nola Richmond', 'juxoxivuga@mailinator.com', '+1 (957) 137-5726', 'Eos consequatur nobi', '2022-05-06 12:22:03', '2022-05-06 12:22:03'),
(6, 'Care homes', 'Calvin Rice', 'mehuf@mailinator.com', '+1 (407) 329-3513', 'Elit suscipit unde', '2022-05-06 12:22:06', '2022-05-06 12:22:06'),
(7, 'How the website works', 'Len Williamson', 'wobap@mailinator.com', '+1 (207) 548-6952', 'Qui qui corporis exp', '2022-05-06 12:22:08', '2022-05-06 12:22:08'),
(8, 'Messages for care homes', 'Alyssa Clay', 'tokop@mailinator.com', '+1 (877) 925-5104', 'Beatae a rerum autem', '2022-05-06 12:22:11', '2022-05-06 12:22:11'),
(9, 'Donation', 'Xaviera Bush', 'lapico@mailinator.com', '+1 (905) 561-9085', 'Nulla molestias et m', '2022-05-06 12:22:14', '2022-05-06 12:22:14'),
(10, 'Donation', 'Hunter Yates', 'wojo@mailinator.com', '+1 (715) 483-5719', 'Voluptatibus pariatu', '2022-05-06 12:22:16', '2022-05-06 12:22:16'),
(11, 'How the website works', 'Ursa Weeks', 'zakob@mailinator.com', '+1 (959) 889-4426', 'Eiusmod provident s', '2022-05-06 12:22:19', '2022-05-06 12:22:19'),
(12, 'Care homes', 'Channing Mcneil', 'xubigakyj@mailinator.com', '+1 (712) 196-9032', 'Est quia voluptate q', '2022-05-06 12:22:23', '2022-05-06 12:22:23'),
(13, 'Care homes', 'Knox Anderson', 'mutijaxaq@mailinator.com', '+1 (172) 329-3243', 'Aut aut quis ullamco', '2022-05-10 14:13:31', '2022-05-10 14:13:31'),
(14, 'Advertisement', 'Wang Ortega', 'qivynu@mailinator.com', '+1 (737) 119-5197', 'Hello, I wanna ad with you\r\nplease contact me', '2022-05-10 17:37:12', '2022-05-10 17:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attendees` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `user_id`, `title`, `date`, `from_time`, `to_time`, `location`, `short_description`, `content`, `cover_image`, `attendees`, `created_at`, `updated_at`) VALUES
(1, 11, 'GROUP DINING WITH THE ELDERLY', '2022-05-15', '02:00:00', '03:00:00', 'Amman, Jordan', 'We are having a group lunch party to celebrate with the elderly and share moments of happiness with them', '<p>HE EVENT WILL BE HELD IN THE GUEST HOUSE FOR THE ELDERLY, WHERE WE WILL HAVE A GROUP LUNCH WITH THE ELDERLY TO GIVE THEM A NICE TIME AND ENTERTAIN THEMSELVES.THIS EVENT WILL BE HELD FROM 11 AM TO 1 PM.&nbsp; WE ARE GLAD TO HAVE YOU JOIN US.<br></p>', '1652390775.jpg', 50, '2022-05-12 18:26:15', '2022-05-13 13:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_22_174420_create_user_carehomes_table', 1),
(6, '2022_05_01_141124_create_contacts_table', 1),
(7, '2022_05_01_144832_create_articles_table', 1),
(8, '2022_05_06_163959_create_articles_table', 1),
(9, '2022_05_07_151341_create_care_home_contacts_table', 2),
(10, '2022_05_09_173834_create_announcments_table', 3),
(11, '2022_05_10_163857_create_user_individuals_table', 4),
(12, '2022_05_10_163926_create_user_companies_table', 4),
(13, '2022_05_10_185518_create_advertisements_table', 5),
(19, '2022_05_11_190216_create_events_table', 6),
(20, '2022_05_11_190306_create_user_events_table', 6),
(21, '2022_05_11_191313_create_payment_methods_table', 6),
(22, '2022_05_11_191808_create_payment_accounts_table', 6),
(23, '2022_05_11_191946_create_user_transactions_table', 6),
(24, '2022_05_13_130026_alter_user_transactions_dad_status', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `payment_accounts`
--

DROP TABLE IF EXISTS `payment_accounts`;
CREATE TABLE IF NOT EXISTS `payment_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED NOT NULL,
  `account_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payment_accounts_user_id_foreign` (`user_id`),
  KEY `payment_accounts_payment_gateway_id_foreign` (`payment_method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `payment_accounts`
--

INSERT INTO `payment_accounts` (`id`, `user_id`, `payment_method_id`, `account_number`, `status`, `created_at`, `updated_at`) VALUES
(2, 11, 6, '0782565898', 1, '2022-05-13 10:41:02', '2022-05-13 10:41:02'),
(3, 11, 3, 'donation@guest.com', 1, '2022-05-13 11:14:51', '2022-05-13 11:15:15'),
(4, 11, 4, '3423423432', 1, '2022-05-13 11:31:32', '2022-05-13 11:31:32'),
(5, 20, 6, '0780577727', 1, '2022-05-13 15:26:54', '2022-05-13 15:26:54'),
(6, 20, 2, '09000-1309683', 1, '2022-05-13 15:29:08', '2022-05-13 15:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
CREATE TABLE IF NOT EXISTS `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Bank', '1652466786.jpg', 1, '2022-05-12 18:12:47', '2022-05-13 15:33:06'),
(3, 'PayPal', '1652466850.jpeg', 1, '2022-05-12 18:12:47', '2022-05-13 15:34:10'),
(4, 'Credit Card', '1652452313.png', 1, '2022-05-12 18:12:47', '2022-05-13 11:33:15'),
(6, 'Qlik', '1652447912.png', 1, '2022-05-13 10:18:23', '2022-05-13 10:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2022-05-06 10:44:40', '2022-05-06 10:44:40'),
(2, 'individual', '2022-05-06 10:44:40', '2022-05-06 10:44:40'),
(3, 'company', '2022-05-06 10:44:40', '2022-05-06 10:44:40'),
(4, 'carehome', '2022-05-06 10:44:40', '2022-05-06 10:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  KEY `users_email_index` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `profile`, `address`, `role_id`, `approved`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@youbelong.com', '$2y$10$.UWHUIWceTMcJDzXmQ0Mt.Vh2/5Sdk61S2.oRAurV1AFLSfw9robm', '962-780577727', '1652169920.jpg', 'Amman, Jordan', 1, 0, NULL, '2022-05-06 10:44:40', '2022-05-13 10:18:23'),
(2, 'Razan Aboushi', 'razan@gmail.com', '$2y$10$jZtueeHTNkn7Ptn5ufZST.vIph8uYz3IcC3MCq6HsqptgILzAB.de', '78154454645', NULL, 'Amman, Jordan', 2, 1, NULL, '2022-05-06 10:48:09', '2022-05-06 10:48:09'),
(3, 'Ehab Aboushi', 'ehab@gmail.com', '$2y$10$RIAb5W3we48uFukncp6ks./SA6nkP302.nd0WcUwNGuMQEcxZOjHK', '7815455454', NULL, 'Zarqaa, Jordan', 2, 1, NULL, '2022-05-06 10:50:53', '2022-05-06 10:50:53'),
(4, 'Rami', 'rami@gmai.com', '$2y$10$57O0oIdStBo3HyVE3Gd/Ve96Fedby9AxFP9qoyl5XeE0gyg9OEW/i', '7856565656', NULL, 'Amman, Jordan', 2, 1, NULL, '2022-05-06 10:55:05', '2022-05-06 10:55:05'),
(5, 'Sami', 'sami@gmail.com', '$2y$10$H.PNvvJIc.RF.fb5BXpebuCpOPehVJloTm31Y.IExXv8dDxOb58hS', '7856565665', NULL, 'Mafraq, Jordan', 2, 1, NULL, '2022-05-06 10:56:07', '2022-05-06 10:56:07'),
(6, 'Yazan', 'yazan@gmail.com', '$2y$10$TudOWdx5N/6Z/JYD4KWml.WzYuat/aeyfmVynmzwkJAFg/l52O6FC', '7826565656', NULL, 'Amman, JOrdan', 2, 1, NULL, '2022-05-06 10:58:44', '2022-05-06 10:58:44'),
(8, 'JSC', 'jsc@gmail.com', '$2y$10$g5tCAccQh0wJM3DV52wmNutYtKnYpaPN/Z.atGmac5nUVjz8kHQ.u', '065989898', NULL, 'Amman, JOrdan', 3, 1, NULL, '2022-05-06 11:03:02', '2022-05-06 11:03:02'),
(9, 'Om Ali Company', 'omali@gmail.com', '$2y$10$OPOcmxDJ7ojuP/MT.XVUBuctAgtKAdRB0FDxJ9mI0N.g6KF0WFVS.', '0656565656', NULL, 'Amman, Jordan', 3, 0, NULL, '2022-05-06 11:57:17', '2022-05-07 17:23:08'),
(11, 'GUEST HOME FOR THE ELDERLY', 'GuestH@gmail.com', '$2y$10$Dth9rlKL60KSSJb4xHzobOIiRf7NBwqnfCVPT6vceFzF.iQjYxkne', '962-64126924', '1651853111.jpg', 'Amman / Juwaida , Jordan', 4, 1, '2ocEYiln8B852Rnwb042QHpdSo8P7JH8KBPijaVTacbbsUqR5Wa5ieNoEuXl', '2022-05-06 12:44:40', '2022-05-06 13:05:11'),
(12, 'Lila Mann', 'raba@mailinator.com', '$2y$10$JeT7BoEs0jOybkhruaJlOurWCPBcYHfIo3z/UW4VDZ7QHfd3TtsZG', '+1 (112) 949-4192', NULL, 'Amet irure velit o', 4, 0, NULL, '2022-05-06 15:15:05', '2022-05-07 11:56:59'),
(13, 'Denton Reilly', 'tubu@mailinator.com', '$2y$10$.0T.htY3XAt2bxZb74rHJutBb5IV4DxxyFXnc7Vd3cjGy2ffVIQQa', '+1 (764) 287-1289', NULL, 'Odit ut quas labore', 4, 0, NULL, '2022-05-06 15:15:16', '2022-05-10 15:37:44'),
(14, 'Deacon Mckee', 'hutut@mailinator.com', '$2y$10$FOp1cWT00UUiCjFqkL8OguHsTrb6qmLMVo1HEEYZObh53Ao/98gfG', '+1 (729) 505-4115', NULL, 'Adipisci eaque repud', 4, 0, NULL, '2022-05-06 15:15:27', '2022-05-10 15:37:01'),
(15, 'Eric Mason', 'xenebydet@mailinator.com', '$2y$10$83JyYWdh.gFrg2wLCzbkoe5HQFqYYLL0cyKd5HTGJeA48gvXISxaW', '+1 (302) 546-9655', NULL, 'In id minima aut con', 2, 1, NULL, '2022-05-06 15:17:29', '2022-05-06 15:17:29'),
(16, 'Ehab Aboushi', 'ehab22@gmail.com', '$2y$10$QK/RtQdXE4uheeEwe6feFuyAWvP8RDysa/O0MFZwWVuG6fZNxfmUm', '0781113338', NULL, 'Amman, Jordan', 2, 1, NULL, '2022-05-07 12:03:32', '2022-05-07 13:30:53'),
(17, 'Patricia Travis', 'qihudehiw@mailinator.com', '$2y$10$upcfuBpahBjb0tyzuFu23.kaVXW/iOtdZ0wQ4nTIgrBUCCj.STwNG', '+1 (618) 648-3309', NULL, 'Qui quia id irure in', 2, 1, NULL, '2022-05-07 16:28:38', '2022-05-07 16:28:38'),
(18, 'Zeph Nash', 'mevez@mailinator.com', '$2y$10$3l7pxPU72lHVhwIwhU/D5.w76HmNMBD.IoAYw/.1FWP13C0LSZmKC', '+1 (838) 172-2099', NULL, 'Nobis nihil voluptat', 3, 0, NULL, '2022-05-07 16:28:57', '2022-05-09 15:44:44'),
(19, 'Colleen Pope', 'qabawejif@mailinator.com', '$2y$10$jOGFEJN0QrFrfHPv8R.i0.dR0survoiFsaxxbfs.OaU96BjqilLSS', '+1 (875) 572-3154', NULL, 'Ipsa ut nostrum exe', 4, 0, NULL, '2022-05-07 16:29:12', '2022-05-10 15:37:15'),
(20, 'Dar Al Zahraa for the elderly', 'Al_Zahraa@gmail.com', '$2y$10$d5IMSjoOyzDMXEDyZindROOBXVHRoTrfE9wZNGXbYJte0SKZx6U02', '(06) 571 6704', '1652438827.jpg', 'Marj Al-Hamam, Al-Jalah Street-Amman-Jordan', 4, 1, NULL, '2022-05-10 04:49:52', '2022-05-13 07:47:07'),
(21, 'Home of peace for the elderly', 'Peace_home@hmail.com', '$2y$10$9jgayTkNoMqkYgUOspU4ceqcQhME6wYznkA4bpZm5n0Jaby6.U.92', '(06) 552 4218', '1652438735.png', 'Wasfi Al-Tal Street - Amman – Jordan', 4, 1, NULL, '2022-05-10 05:03:16', '2022-05-13 07:45:35'),
(22, 'Darat Al Ber for the elderly', 'Darat_Ber@gmail.com', '$2y$10$36QA/MJIaP8mlk014J4.VOZ6ySEUlr5cgPyaYjN2BZvKohJpRGDHy', '0772228826', NULL, 'Irbid Eastern Street \"Directorate of Social Development / Irbid\"', 4, 0, NULL, '2022-05-10 05:07:59', '2022-05-13 07:47:52'),
(23, 'Darat Samir Shamma for the elderly and retired Jordanians and non-Jordanians', 'Darat_Samir@gmail.com', '$2y$10$sjan7FKrdhOAB/a.3.UqlOoWL4L5YXS/2Dt9xF50ZklEQn.W7mUDq', '(06) 523 2940', '1652439189.jpg', 'Shafa Badran-Jordan', 4, 1, NULL, '2022-05-10 05:12:55', '2022-05-13 07:53:09'),
(24, 'August Berger', 'jeba@mailinator.com', '$2y$10$L4mDc6Ijv2pJRnJaCZtcbuyOSItJkqfcUCRxWEFIvTX4UxVdQilp2', '+1 (935) 386-4418', NULL, 'Cupiditate temporibu', 2, 1, NULL, '2022-05-10 13:51:30', '2022-05-10 13:51:30'),
(25, 'Nathan Bartlett', 'fihor@mailinator.com', '$2y$10$Zm5kCWazhcagmCpf2foYCet.SCqEuJ9/JaFCf4CI9SXiJtBhGrp02', '+1 (588) 354-5939', NULL, 'Mollit occaecat irur', 3, 1, NULL, '2022-05-10 13:51:39', '2022-05-10 13:51:39'),
(26, 'Tamara Rodgers', 'gonexyfu@mailinator.com', '$2y$10$58m8xQJe5HtIMUCKvHe1Qei9S.XijOr2L75JqGXT3IN0Xa5pIWFaG', '+1 (461) 156-8315', NULL, 'Adipisci quasi et lo', 4, 0, NULL, '2022-05-10 13:51:46', '2022-05-10 13:51:46'),
(27, 'Sara Asaad', 'saraaqa2000@gmail.com', '$2y$10$2cv1GnoNmCQszPL.pGiLruHOUc34c67Kry1JdgPgqG3f5iHzrnfUy', '0799647374', NULL, 'Amman', 2, 1, 'mhDdQRUZYiTlBl2OKyES1qd7Dx263ySf7XBBM280slLyvpKJV1GFl8GsyWjj', '2022-05-11 07:03:51', '2022-05-11 07:03:51'),
(28, 'Human Care home', 'Human_Care@gmail.com', '$2y$10$YutXitkYzEO.r2yJ4O.uoeegKpOnq.bgs4Q2zuVtoVEa6LzSwRPrW', '064729010 / 4729567', '1652440355.jpg', 'Fuheis - Amman', 4, 1, NULL, '2022-05-13 08:01:56', '2022-05-13 08:12:35'),
(29, 'Thaddeus Lawrence', 'dawu@mailinator.com', '$2y$10$edAEtO/dfAl8KrqNjlmbVOj7iEZOgEMBpDBWGmh6gFPo7I9epguyS', '+1 (506) 628-8956', NULL, 'In accusantium totam', 4, 0, NULL, '2022-05-13 13:47:53', '2022-05-13 13:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_carehomes`
--

DROP TABLE IF EXISTS `user_carehomes`;
CREATE TABLE IF NOT EXISTS `user_carehomes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `elderlies_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `establishment_date` date DEFAULT NULL,
  `bio` mediumtext COLLATE utf8_unicode_ci,
  `short_description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `care_homes_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_carehomes`
--

INSERT INTO `user_carehomes` (`id`, `user_id`, `elderlies_number`, `establishment_date`, `bio`, `short_description`, `created_at`, `updated_at`) VALUES
(3, 11, '2', '1979-05-19', '<p><span style=\"background-color: rgb(255, 255, 255);\">The <b style=\"\">guest house</b> for the elderly is a home based on the care and service of the elderly and providing everything they need from food, drink and health care through the functional staff, which consists of 9 workers who serve approximately 51 elderly people. The guest home for the elderly was established in 1979. And she works from Sunday to Thursday and starts working from From 8 in the morning until 6 in the evening.\r\n</span></p><p><span style=\"background-color: rgb(255, 255, 255);\">\r\nIt is considered a voluntary sector, and it has a landline number: 4129624, and a fax: 4126923. And her bank account number: 0118-267003-500. It is located in the Juwaida area in Amman.</span></p>', 'The guest house for the elderly is a home based on the care and service of the elderly and providing everything they need .', '2022-05-06 12:44:40', '2022-05-10 04:58:49'),
(4, 12, '2', '2011-08-06', NULL, NULL, '2022-05-06 15:15:05', '2022-05-06 15:15:05'),
(5, 13, '4', '1976-03-03', NULL, NULL, '2022-05-06 15:15:16', '2022-05-06 15:15:16'),
(6, 14, '2', '1991-06-08', NULL, NULL, '2022-05-06 15:15:27', '2022-05-06 15:15:27'),
(7, 19, '3', '1970-01-10', NULL, NULL, '2022-05-07 16:29:12', '2022-05-07 16:29:12'),
(8, 20, '2', '1980-05-25', 'لققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققققق', 'Dar Al Zahraa for the elderly is a home based on the care and service of the elderly and providing everything they need', '2022-05-10 04:49:52', '2022-05-13 07:47:07'),
(9, 21, '2', '1980-11-05', '<p style=\"margin-bottom: 35px; line-height: 1.6;\"><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 18px;\">Home of peace for the elderly&nbsp;is a home based on the care and service of the elderly and providing everything they need as health care through the functional staff, which consists of 10 workers who serve approximately 56 elderly people. Home of peace for the elderly&nbsp;was established in 1980. And she works from Sunday to Saturday&nbsp;and starts working from From 12pm&nbsp; until 3pm.</span></font></p><p style=\"margin-bottom: 35px; font-size: 18px; line-height: 1.6; color: rgb(41, 176, 162); font-family: Roboto, sans-serif;\">It is considered a voluntary sector, and it has a landline number: 4129624, and&nbsp;<span lang=\"EN\" style=\"font-size:16.0pt;line-height:\r\n107%;font-family:&quot;inherit&quot;,serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\r\nminor-latin;mso-bidi-font-family:Arial;mso-bidi-theme-font:minor-bidi;\r\nmso-ansi-language:EN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Tel\r\nfax: 552418</span>. And her bank account number:&nbsp;<span lang=\"EN\" style=\"font-size:16.0pt;line-height:\r\n107%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-ansi-language:EN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">0118-267003-510</span>. It is located in the&nbsp;<span lang=\"EN\" style=\"font-size:16.0pt;line-height:\r\n107%;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-ansi-language:EN;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Wasfi\r\nAl-Tal Street - Amman – Jordan</span>.</p>', 'Home of peace for the elderly is a home based on the care and service of the elderly and providing everything they need.', '2022-05-10 05:03:16', '2022-05-13 07:43:48'),
(10, 22, '2', '1981-12-23', NULL, NULL, '2022-05-10 05:07:59', '2022-05-10 05:07:59'),
(11, 23, '2', '1985-11-04', '<p><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 18px;\">Darat Samir Shamma for the elderly and retired Jordanians and non-Jordanians</span></font><span style=\"color: rgb(41, 176, 162); font-family: Roboto, sans-serif; font-size: 18px;\">&nbsp;is a home based on the care and service of the elderly and providing everything they need as health care through the functional staff, which consists of 11 workers who serve approximately 59 elderly people.&nbsp;</span><span style=\"color: rgb(41, 176, 162); font-family: Roboto, sans-serif; font-size: 18px;\">Darat Samir Shamma for the elderly&nbsp;</span><span style=\"color: rgb(41, 176, 162); font-family: Roboto, sans-serif; font-size: 18px;\">was established in 1985. And she works from Sunday to Saturday&nbsp;and starts working from From 12pm&nbsp; until 3pm.</span><br></p>', 'Darat Samir Shamma for the elderly  is a home based on the care and service of the elderly and providing everything they need.', '2022-05-10 05:12:55', '2022-05-13 07:53:09'),
(12, 26, '3', '1983-07-24', NULL, NULL, '2022-05-10 13:51:46', '2022-05-10 13:51:46'),
(13, 28, '2', '1989-12-10', '<p><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 18px;\">Human Care home - Sisters of the Cross Society</span></font><span style=\"color: rgb(41, 176, 162); font-family: Roboto, sans-serif; font-size: 18px;\">&nbsp;is a home based on the care and service of the elderly and providing everything they need as health care through the functional staff, which consists of 14 workers who serve approximately 62 elderly people.&nbsp;</span><font color=\"#29b0a2\" face=\"Roboto, sans-serif\"><span style=\"font-size: 18px;\">Human Care home&nbsp;</span></font><span style=\"color: rgb(41, 176, 162); font-family: Roboto, sans-serif; font-size: 18px;\">was established in 1989. And she works from Sunday to Saturday&nbsp;and starts working from From 9 pm&nbsp; until 4pm.</span><br></p>', 'Human Care home is a home based on the care and service of the elderly and providing everything they need.', '2022-05-13 08:01:56', '2022-05-13 08:05:53'),
(14, 29, '3', '1978-12-30', NULL, NULL, '2022-05-13 13:47:53', '2022-05-13 13:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_companies`
--

DROP TABLE IF EXISTS `user_companies`;
CREATE TABLE IF NOT EXISTS `user_companies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sector` enum('public','private') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_companies_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_companies`
--

INSERT INTO `user_companies` (`id`, `user_id`, `sector`, `created_at`, `updated_at`) VALUES
(1, 25, 'public', '2022-05-10 13:51:39', '2022-05-10 13:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_events`
--

DROP TABLE IF EXISTS `user_events`;
CREATE TABLE IF NOT EXISTS `user_events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_events_user_id_foreign` (`user_id`),
  KEY `user_events_event_id_foreign` (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_events`
--

INSERT INTO `user_events` (`id`, `user_id`, `event_id`, `created_at`, `updated_at`) VALUES
(19, 9, 1, '2022-05-12 20:19:04', '2022-05-12 20:19:04'),
(24, 11, 1, '2022-05-13 09:21:19', '2022-05-13 09:21:19'),
(26, 16, 1, '2022-05-13 14:40:03', '2022-05-13 14:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_individuals`
--

DROP TABLE IF EXISTS `user_individuals`;
CREATE TABLE IF NOT EXISTS `user_individuals` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_individuals_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_individuals`
--

INSERT INTO `user_individuals` (`id`, `user_id`, `birthdate`, `gender`, `created_at`, `updated_at`) VALUES
(1, 24, '1971-01-10', 'male', '2022-05-10 13:51:30', '2022-05-10 13:51:30'),
(2, 27, '2000-05-22', 'male', '2022-05-11 07:03:51', '2022-05-11 07:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_transactions`
--

DROP TABLE IF EXISTS `user_transactions`;
CREATE TABLE IF NOT EXISTS `user_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_account_id` bigint(20) UNSIGNED NOT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_transactions_user_id_foreign` (`user_id`),
  KEY `user_transactions_payment_account_id_foreign` (`payment_account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `user_transactions`
--

INSERT INTO `user_transactions` (`id`, `user_id`, `payment_account_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 16, 4, '100', 0, '2022-05-13 11:56:38', '2022-05-13 11:56:38'),
(2, 16, 4, '50', 0, '2022-05-13 11:56:44', '2022-05-13 11:56:44'),
(3, 16, 4, '50', 1, '2022-05-13 11:56:46', '2022-05-13 11:56:46'),
(4, 16, 4, '34', 1, '2022-05-13 11:58:20', '2022-05-13 11:58:20'),
(5, 16, 2, '900', 0, '2022-05-13 12:04:50', '2022-05-13 12:04:50'),
(6, 16, 2, '500', 1, '2022-05-13 12:04:56', '2022-05-13 12:04:56'),
(7, 16, 2, '50', 1, '2022-05-13 13:54:05', '2022-05-13 13:54:05');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `care_home_contacts`
--
ALTER TABLE `care_home_contacts`
  ADD CONSTRAINT `care_home_contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_accounts`
--
ALTER TABLE `payment_accounts`
  ADD CONSTRAINT `payment_accounts_payment_gateway_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_carehomes`
--
ALTER TABLE `user_carehomes`
  ADD CONSTRAINT `care_homes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_companies`
--
ALTER TABLE `user_companies`
  ADD CONSTRAINT `user_companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_events`
--
ALTER TABLE `user_events`
  ADD CONSTRAINT `user_events_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_individuals`
--
ALTER TABLE `user_individuals`
  ADD CONSTRAINT `user_individuals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD CONSTRAINT `user_transactions_payment_account_id_foreign` FOREIGN KEY (`payment_account_id`) REFERENCES `payment_accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
