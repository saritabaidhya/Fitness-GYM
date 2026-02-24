-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2026 at 05:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `associates`
--

CREATE TABLE `associates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `associates`
--

INSERT INTO `associates` (`id`, `name`, `detail`, `status`, `path`, `created_at`, `updated_at`) VALUES
(3, 'razat shrestha', '<p>Twert ert erye</p>', '1', '6t2IfHQNlETkVIk0FQenw97wgSVOrbCxehXHHsOY.png', '2025-02-03 12:02:02', '2025-03-03 22:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Terms & Conditions', '<ol>\r\n<li><strong>Introduction</strong></li>\r\n</ol>\r\n<p>1.1 The mobile application on Android and iOS platforms (together &ldquo;<strong>Platform</strong>&rdquo;) determined by us at our sole discretion and without requiring any prior notice or intimation to you (&ldquo;Company&rdquo;, &ldquo;we&rdquo; or &ldquo;us&rdquo; or &ldquo;our&rdquo;). Your (&ldquo;you&rdquo;, &ldquo;your&rdquo; or &ldquo;user&rdquo;) use of the Services (as defined herein) is subject to these terms and conditions (&ldquo;Terms and conditions&rdquo;).</p>\r\n<p>1.2. Please read these Terms and conditions, along with the Privacy Policy available at [website] and all other rules and policies made available or published on the Platform as they shall govern your use of the Platform and the services provided thereunder.</p>\r\n<p>1.3. By using or visiting the Platform, you signify your agreement to these Terms and conditions and the Privacy Policy.</p>\r\n<ol start=\"2\">\r\n<li><strong>Acceptance of our Terms and Conditions</strong></li>\r\n</ol>\r\n<p>By downloading and registering the app, user agrees to have read, understood and conveys acceptance that he User shall be bound by the Terms and conditions. The User understands that it is responsibility to check the Terms and conditions carefully before accessing app. We reserve the right, at our sole discretion, to change, modify, add or remove portions of these Terms and conditions, at any time without any prior written notice to you. Any such modifications would be effective immediately. It shall be your responsibility to review these Terms and conditions periodically for any updates/changes. We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service. Your continued use of the application following the posting of changes will mean that you accept and agree to the revisions.</p>\r\n<ol start=\"3\">\r\n<li><strong>User Account</strong></li>\r\n</ol>\r\n<p>You are required to signed up on our platform to create an account to access our services. At the time of creating Your Account and/or at any time during the utilization of our Services, you will be required to provide any and/or all of the following information and/or documents:</p>\r\n<ul>\r\n<li>Full Name</li>\r\n<li>Contact Number</li>\r\n<li>Mail address</li>\r\n<li>Date of Birth</li>\r\n</ul>\r\n<ol start=\"4\">\r\n<li><strong>ACCESS</strong>\r\n<ul>\r\n<li>Subject to these Terms and conditions, we may offer to provide you with Services selected by you, solely for your own use, and not for the use or benefit of any third party. Services shall include, but not be limited to, any services we perform for you, any hardware offered by us, or any widgets that you download from the Platform. In case of any discrepancy in the Services, you must bring the same to our notice in writing, within a period of 7 (seven) days from date of performance of the Services, failing which the Services shall be deemed accepted, fulfilled and satisfactorily completed.</li>\r\n<li>You agree not to circumvent, disable or otherwise interfere with security-related features of the Platform or features that prevent or restrict use or copying of any restricted information.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<ol start=\"5\">\r\n<li><strong>REGISTRATION AND ELIGIBILITY</strong>\r\n<ul>\r\n<li>Only persons who can form legally binding contracts under the The National Civil (Code) Act, 2017 (2074) may access the Platform and avail our Services. Persons who are &lsquo;incompetent to contract&rsquo; within the meaning of the The National Civil (Code) Act, 2017 (2074) including without limitation, un-discharged insolvents, are not eligible to avail our Services. If you are a minor i.e., under the age of 18 (eighteen) years, you cannot register and/or avail our Services. We reserve the right to refuse to provide you with access to the Services if it is brought to our notice or if it is discovered that you are incompetent to contract. You represent and warrant to us that you are of legal age to form a binding contract and are not a person barred from availing the Services under applicable laws.</li>\r\n<li>You may, at your sole discretion, log into the application using your phone number (&ldquo;<strong>Login Details</strong>&rdquo;).</li>\r\n<li>Notwithstanding anything contained herein, you shall not:</li>\r\n<li>provide any false personal information to us (including false/fraudulent Login Details) or create any account for anyone other than yourself without such person\'s explicit permission; or</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<p>5.3.2. use the Login Details of another person with the intent to impersonate that person.</p>\r\n<ol start=\"6\">\r\n<li><strong>YOUR RESPONSIBILITIES</strong>\r\n<ul>\r\n<li>By using the Platform, you represent and warrant that:\r\n<ul>\r\n<li>you have fully read and understood the Terms and conditions and Privacy Policy and consent to them;</li>\r\n<li>you will ensure that your use of the Platform and/or Services will not violate any applicable law or regulation;</li>\r\n<li>you have no rights in, or to, the Platform or the technology used or supported by the Platform or any of the Services, other than the right to use each of them in accordance with these Terms and conditions;</li>\r\n<li>you will not use the Platform or the Services in any manner inconsistent with these Terms and conditions or Privacy Policy;</li>\r\n<li>you will not resell or make any commercial use of the Services or use the Services in any way that is unlawful, for any unlawful purpose, or in a manner that your use harms us, the Platform, or any other person or entity, as determined in our sole discretion, or act fraudulently or maliciously;</li>\r\n<li>you will not decipher, decompile, disassemble, reverse engineer or otherwise attempt to derive any hardware, or source code or underlying ideas or algorithms of any part of the Service (including without limitation any application or widget), except to the limited extent applicable laws specifically prohibit such restriction;</li>\r\n<li>you will not transmit or make available any software or other computer files that contain a virus or other harmful component, or otherwise impair or damage the Platform or any connected network, or otherwise damage, disable, overburden, impair or compromise the Platform, our systems or security or interfere with any person or entity\'s use or enjoyment of the Platform;</li>\r\n<li>you will not post, publish or transmit any content or messages that (i) are false, misleading, defamatory, harmful, threatening, abusive or constitute harassment (ii) promote racism, entail hateful slurs or promote hateful behavior, associate with hate groups or any violence towards others including terrorism or self-harm or suicide or harm against any individual or group or religion or caste, (iii) infringe another\'s rights including any intellectual property rights or copyright or trademark, violate or encourage any conduct that would violate any applicable law or regulation or would give rise to civil liability, or (iv) depict or encourage profanity, nudity, inappropriate clothing, sexual acts, sexually suggestive poses or degrade or objectify people, whether in the nature of a prank, entertainment or otherwise.</li>\r\n<li>you will not promote the use of explosives or firearms, the consumption of psychotropic drugs or any other illegal activities.</li>\r\n<li>you will not disparage, make false or malicious statements against us or in connection with the Services or the Platform;</li>\r\n<li>you will not interfere or attempt to interfere with the proper working of the Platform or any activities conducted on the Platform;</li>\r\n<li>you will not bypass any measures we may use to prevent or restrict access to the Services;</li>\r\n<li>you will not run any form of auto responder or &ldquo;spam&rdquo; on the Platform;</li>\r\n<li>you will not use manual or automated software, devices, or other processes to &ldquo;crawl&rdquo; or &ldquo;spider&rdquo; any part of the Services;</li>\r\n<li>you will not modify, adapt, appropriate, reproduce, distribute, translate, create derivative works or adaptations of, publicly display, republish, repurpose, sell, trade, or in any way exploit the Service, except as expressly authorized by us;</li>\r\n<li>you will not delete or modify any content of the Services, including but not limited to, legal notices, disclaimers or proprietary notices such as copyright or trademark symbols, logos, that you do not own or have express permission to modify.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<ol start=\"7\">\r\n<li><strong>Online Payment</strong></li>\r\n</ol>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp;User understand and acknowledges</p>\r\n<ul>\r\n<li>That Company, undertakes utmost care to provide secure payment system, however, it is susceptible to hacking, virus attacks, malfunction.</li>\r\n<li>The information provided by User will not be utilized or shared with any third party unless required in relation to fraud verifications or by law, regulation or court order.</li>\r\n<li>That the User undertakes all payments subject to own risk and volition.</li>\r\n</ul>\r\n<ol start=\"8\">\r\n<li><strong>CONDITIONS TO USE</strong>\r\n<ul>\r\n<li>The Services will be provided on a best-efforts basis. We will make reasonable efforts and shall endeavor that you are able to use the Services without undue disruption, interruption or delay.</li>\r\n<li>Once your login on the Platform, you may receive updates, promotional materials and other information we may send with regards to the Service, or new services we may offer. You hereby consent to receiving all such commercial communications from us. By agreeing to these Terms and conditions, you also hereby unconditionally consent to us arranging a call with you on your mobile number although such number may be availing the DND service provided by your mobile service provider.</li>\r\n<li>We disclaim any responsibility for any harm resulting from anyone&rsquo;s use of or access to the Services. If you avail our Services, you are responsible for taking precautions as necessary to protect yourself and your device (s) from malware, viruses, spyware, trojan horses, worms or trap doors, and other such harmful or destructive software.</li>\r\n<li>We disclaim any responsibility for any harm resulting from anyone&rsquo;s use of or access to the Services. If you avail our Services, you are responsible for taking precautions as necessary to protect yourself and your device (s) from malware, viruses, spyware, trojan horses, worms or trap doors, and other such harmful or destructive software. You also agree that we shall not be liable to you for any damages that may result from your use and/or misuse of our Platform.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<ol start=\"9\">\r\n<li><strong>Cancellation and Refund policy</strong>\r\n<ul>\r\n<li>You may request to cancel your order up to 24 (twenty-four) hours before the date and time of the event.</li>\r\n<li>No refund shall be processed in the following instances:\r\n<ul>\r\n<li>The order has reached the processing stage i.e.; an astrologer has already been assigned.</li>\r\n<li>The Platform suffers a technical delay or glitch in processing the request or generating the report from the astrologer.</li>\r\n<li>The information provided by you is incorrect. You agree to verify any information submitted to the Platform and ensure that any such information is accurate. In the event the information provided is incorrect, you may request to rectify the information, provided such request is made within 2 (two) hours from the service rendered by the astrologer.</li>\r\n<li>The contact number provided by you for the purpose of availing the astrology services is incorrect. Once you choose to avail a call with the astrologer, you are requested to ensure that your contact number is reachable, within coverage area and that you answer such call when received.</li>\r\n<li>Inaccurate results from the consultation. Please note that we do not take responsibility for factual accuracy of the results arising out the service rendered.</li>\r\n</ul>\r\n</li>\r\n<li>The refunds, if any, shall be processed after deduction of the transaction charges levied by the bank and/or the payment gateway and/or any other charges that may have been incurred by the Platform during processing and/or delivering the service, as applicable.</li>\r\n<li>With respect to astrology services, refund may be considered in the following instances only:\r\n<ul>\r\n<li>Network issue due to which the chat/call was affected during the service or prevalence of factors such as weak signal, background noise or inaudibility of the astrologer during the session.</li>\r\n<li>Astrologer was unable to respond fluently in the language provided in their profile</li>\r\n<li>Astrologer was taking an inordinately long time to respond to the user.</li>\r\n<li>Astrologer has responded with irrelevant or inappropriate responses to the user&rsquo;s query.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<ol start=\"10\">\r\n<li><strong>Advertisement</strong></li>\r\n</ol>\r\n<p>The app will also post, display, publish or provide links of advertisements of advertisers on app. The places of such advertisement shall not be fixed. These advertisers might set cookies on Website which shall use your data, information for various other links. We are not responsible for advertisers as these will by third party advertisers. If you intend to deal with the advertisers, you shall directly deal with them at your entire risk and volition and Company shall not be made a party or forced party in any such conflicts.</p>\r\n<ol start=\"11\">\r\n<li><strong>THIRD-PARTY LINKS</strong>\r\n<ul>\r\n<li>The Platform includes links to third-party websites and/or applications. You acknowledge that when you access a third-party link that leaves the Platform:\r\n<ul>\r\n<li>The website or application you enter into is not controlled by the Company and different terms and conditions and privacy policies may apply;</li>\r\n<li>the inclusion of a link does not imply any endorsement by the Company of the third-party website and/or application, the website&rsquo;s and/or application&rsquo;s provider, or the information on the third-party website and/or application; and</li>\r\n<li>if you submit any information or details on any of those websites and/or applications, such information is governed by the terms and conditions and privacy policies of such third-party websites and/or applications and the Company disclaims all responsibility or liability with respect to these terms and conditions, policies or the websites and/or applications.</li>\r\n</ul>\r\n</li>\r\n<li>You are encouraged to carefully read the terms and conditions and privacy policy of any third-party website and/or application that you visit. The Company reserves the right to disable third-party links from the Platform, although the Company is under no obligation to do so.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<ol start=\"12\">\r\n<li><strong>Notice</strong></li>\r\n</ol>\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;All notices addressing to the company will be served by social media, or by general notifications on the app.</p>\r\n<ol start=\"13\">\r\n<li><strong>Intellectual Property</strong></li>\r\n</ol>\r\n<p>13.1. You agree and acknowledge that we are and we will remain the owner of the Platform and the Services thereunder at all times. You acknowledge that copyright in works contained on the Platform and the Services, including but not limited to all the features, functionality software, design, text, sound recordings and images, are our exclusive property, or licensed by us, except as otherwise expressly stated. You may access the Platform as a bona fide visitor or only for your use of the Services offered.</p>\r\n<p>13.2. All trademarks, service marks, trade names, trade dress, and other forms of intellectual property are proprietary to us. No information, code, algorithms, content or material from the Platform or the Services may be copied, reproduced, republished, uploaded, posted, transmitted or distributed in any way without our express written permission.</p>\r\n<ol start=\"14\">\r\n<li><strong>Termination</strong>\r\n<ul>\r\n<li>We may terminate your access to all or any part of the Service at any time, with or without cause, with or without notice, effective immediately. Any suspected illegal, fraudulent or abusive activity will also be grounds for terminating your access to the Platform and/or Services.</li>\r\n<li>We reserve the right to, at our sole discretion, (a) cease operating the Platform or any of the Services at any time without notice, and/or (b) terminate these Terms and conditions.</li>\r\n<li>All provisions of these Terms and conditions which by their nature survive termination shall survive termination, including, without limitation, intellectual property, indemnity and limitation of liability, and disclaimer.</li>\r\n</ul>\r\n</li>\r\n<li><strong>DISCLAIMER</strong>\r\n<ul>\r\n<li>We hereby expressly state that the Services provided on the Platform are solely in relation to the Sanatana Dharma. You hereby agree and acknowledge that such restriction of Services to the Sanatana Dharma is in no manner discriminatory towards other religions or religious practices and shall not, under any circumstances whatsoever be deemed to be a disrespect of other religions or be deemed as favouring of Sanatana Dharma over other religions or religious practices.</li>\r\n<li>We do not in any manner represent or warrant nor do we undertake any responsibility or liability about the reality or reliability of the astrological effects on human physiology or any other products or services represented and sold on the Platform. No advice or information, whether oral or written, obtained by you through the Platform while availing the Services (including from any third-party service provider) shall create any warranty by the Company. We do not encourage or tolerate any content that promotes actions involving black magic, witchcraft, voodoo or tantrism in any manner. We do not commit to treating or providing solutions for users experiencing weak physical and/or mental health nor do we provide any medical advice. Users are advised to seek appropriate medical advice for any issues relating to physical or mental health.</li>\r\n<li>The advisors/consultants/astrologers are not employees of the Platform or the Company and are third party service providers. You agree and acknowledge that you are connecting with third party service providers at your own risk, and we undertake no responsibility or liability with respect to such third-party service providers. We do not refer, endorse, recommend, verify, evaluate or guarantee any advice, information or other services provided by the third-party service providers or by the Company, nor do we warrant the validity, accuracy, completeness, safety, legality, quality, or applicability of the content, anything said or written by, or any advice provided by such third-party service providers. You further agree that in no event will we be made a party to or have any liability with respect to any dispute between you and any third-party service provider. We may terminate the services of any third-party service provider at any time and without any liability, at our sole discretion.</li>\r\n<li>Save to the extent required by law, we have no special relationship with or fiduciary duty to you. You acknowledge that we have no control over, and no duty to take any action regarding the effects the Services may have on you.</li>\r\n<li>You agree and acknowledge that the Services are provided on an &ldquo;as is&rdquo; basis, and that we hereby do not guarantee or warrant to the accuracy, adequacy, correctness, validity, completeness, or suitability for any purpose, of the Services and accept no liability or responsibility with respect to your reliance on the statements or claims made by us in the course of rendering.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<ol start=\"16\">\r\n<li><strong>Modification of Terms and Conditions</strong></li>\r\n</ol>\r\n<p>We reserve the right, at our sole discretion, to modify or replace any of these Terms and Conditions, or change, suspend, or discontinue the Services (including without limitation, the availability of any feature, database, or content) or its usage at any time by posting a notice or by sending you notice through our Service or via email/contact details provided as Login Details. We may also impose limits on certain features and services or restrict your access to parts or all of the Services without notice or liability. It is your responsibility to check these Terms and Conditions periodically for changes. Your continued use of the Services following the posting of any changes to these Terms and Conditions shall constitute an acceptance of those changes.</p>\r\n<ol start=\"17\">\r\n<li><strong>Miscellaneous</strong>\r\n<ul>\r\n<li>Unless otherwise specified in these Terms and conditions, all notices hereunder will be in writing and will be deemed to have been duly given when received or when receipt is electronically confirmed, if transmitted by e-mail.</li>\r\n<li>In respect of these Terms and conditions and your use of these Services, nothing in these Terms and conditions shall be deemed to grant any rights or benefits to any person, other than us and you, or entitle any third party to enforce any provision hereof, and it is agreed that we do not intend that any provision of these Terms and conditions should be enforceable by a third party as per any applicable law.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n<ol start=\"18\">\r\n<li><strong>Contact Us</strong></li>\r\n</ol>\r\n<p>In the event that you wish to raise a query or complaint with us, please contact our Grievance Officer (contact details set out below) who shall acknowledge your complaint within 24 (twenty-four) hours from the time of receipt of such complaint. Kindly note that once your complaint is received, we shall use our best efforts to redress it within a period of 15 (fifteen) days from the date of receipt of such complaint:</p>\r\n<p>Email id: shreeommandir@gmail.com</p>\r\n<p>YOU HAVE FULLY READ AND UNDERSTOOD THESE TERMS OF USE AND VOLUNTARILY AGREE TO ALL OF THE PROVISIONS CONTAINED ABOVE</p>', NULL, '2025-03-03 22:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `detail` varchar(191) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `category`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'fsdf', 'sdfsdf@gmail.com', 'fsdf', 'fsdfs', '2025-03-26 01:21:58.000000', '2025-03-26 01:21:58.000000'),
(2, 'dzdgsdg', 'gsdgsdg@gmail.cm', 'gfdg', 'dfgdg', '2025-03-26 01:22:30.000000', '2025-03-26 01:22:30.000000'),
(3, 'test', 'saritabaidhyas@gmail.com', 'dfsdf', 'fdsfsdf', '2025-03-26 03:32:17.000000', '2025-03-26 03:32:17.000000'),
(4, 'dfsdf', 'sdfdsf@gmail.com', 'sfddsf', 'sdf', '2025-03-26 22:52:05.000000', '2025-03-26 22:52:05.000000');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `icon`, `detail`, `path`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Our Timeline', 'flaticon-line-chart', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', NULL, 1, '2025-03-24 23:10:06', '2025-03-24 23:16:09'),
(4, 'Our Memberships', 'flaticon-sports', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', NULL, 1, '2025-03-24 23:11:09', '2025-03-24 23:11:09'),
(5, 'Our Trainers', 'flaticon-muscle', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', NULL, 1, '2025-03-24 23:11:49', '2025-03-24 23:15:52'),
(6, 'Our Classes', 'flaticon-machine', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', NULL, 1, '2025-03-24 23:12:20', '2025-03-24 23:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `name`, `detail`, `path`, `status`, `category`, `title`, `meta_keyword`, `meta_description`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'How to Become an Electricians', '<p>The UK needs an estimated 104,000 extra electricians by 2032 to meet government targets for housebuilding and renewable energy installations. If you&rsquo;re wondering how to become an electrician and figuring out if it&rsquo;s the right career path for you, there&rsquo;s never been a better time to join the in-demand industry.</p>', 'x3NxW7XgHwCRsfjlvESAEomTtHDG53pTidw6B00L.jpg', 1, '1', 'Become an Electrician', 'industry,electrician', 'there’s never been a better time to join the in-demand industry.', 'how-to-become-an-electrician', '2025-02-03 11:14:35', '2025-03-03 22:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `path`, `created_at`, `updated_at`) VALUES
(6, 'Classic Fitness', '0psVoGiFm0eZzCtpjtYNNEgU4NAxFzBnOlOuGRve.jpg', '2025-03-25 02:50:34', '2025-03-25 02:50:34'),
(7, 'Gym & Fitness', '8euQXLkfbQNxJWinVHOjfbI1uZKGlzHHGxhtshxm.jpg', '2025-03-25 02:53:56', '2025-03-25 02:53:56'),
(8, 'Gym & Fitness', 'GSiNXJkHlkclwraRGW6WpHLUevfJxd2vRocBK7ti.jpg', '2025-03-25 02:50:43', '2025-03-25 02:50:43'),
(9, 'Classic Fitness', 'bC62lgBAeB9qJBW7TyRSwNkA59RwnUpy5ko1wLRK.jpg', '2025-03-25 02:51:06', '2025-03-25 02:51:06'),
(10, 'Classic Fitness', 'apf3Ifl7QikqY8WsTHAhUb20uxlCmNpusqr7OZzW.jpg', '2025-03-25 02:51:14', '2025-03-25 02:51:14'),
(11, 'Classic Fitness', '8nTtvNcPsk1JMuobW5azP9zuipGjkbYJAAn8eDwt.jpg', '2025-03-25 02:51:21', '2025-03-25 02:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `detail` varchar(191) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `name`, `email`, `phone`, `category`, `detail`, `created_at`, `updated_at`) VALUES
(10, 'dfsdf', 'saritabaidhyas@gmail.com', '9843518368', 'Premium', 'fsdf', '2025-03-26 23:03:21.000000', '2025-03-26 23:03:21.000000'),
(11, 'test', 'saritabaidhyas@gmail.com', '9843518368', 'Standard', '00', '2025-03-26 23:08:59.000000', '2025-03-26 23:08:59.000000'),
(12, 'testsa', 'saritabaidhyas@gmail.com', 'dffsdfdasdas', 'Standard', 'dsadsa', '2025-03-26 23:14:45.000000', '2025-03-26 23:14:45.000000');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2025_01_06_104434_create_sliders_table', 2),
(12, '2025_01_08_070048_create_settings_table', 2),
(13, '2025_01_08_110818_create_utilities_table', 3),
(14, '2025_01_08_111744_add_icon_to_utilities_table', 4),
(18, '2025_01_09_091302_create_utility_types_table', 5),
(19, '2025_01_09_101035_create_conditions_table', 5),
(20, '2025_01_09_110801_create_policies_table', 6),
(21, '2025_01_09_114921_create_stories_table', 7),
(22, '2025_01_17_092437_create_media_table', 8),
(23, '2025_01_17_100217_create_popups_table', 9),
(25, '2025_01_17_103224_create_studios_table', 10),
(30, '2025_01_23_063435_create_squads_table', 11),
(31, '2025_01_28_051146_create_journals_table', 12),
(32, '2025_01_28_054258_create_queries_table', 13),
(33, '2025_01_29_105653_create_associates_table', 14),
(34, '2025_01_29_111328_create_reviews_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `amount` varchar(191) NOT NULL,
  `includes` varchar(1191) DEFAULT NULL,
  `excludes` varchar(1191) DEFAULT NULL,
  `status` varchar(191) DEFAULT '1',
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `slug`, `path`, `amount`, `includes`, `excludes`, `status`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Starter', 'starter', NULL, '59', '[{\"title\":\"GYM & Fitness\"},{\"title\":\"Bonxing Training\"},{\"title\":\"Classic Yoga Working\"}]', '[{\"title\":\"Fashion Yoga & GYM\"},{\"title\":\"Dummbelling\"}]', '1', NULL, '2025-03-25 06:02:47', '2025-03-25 22:42:44'),
(7, 'Standard', 'standard', NULL, '99', '[{\"title\":\"GYM & Fitness\"},{\"title\":\"Bonxing Training\"},{\"title\":\"Classic Yoga Working\"}]', '[{\"title\":\"Fashion Yoga & GYM\"},{\"title\":\"Dumbbelling\"}]', '1', NULL, '2025-03-25 06:10:13', '2025-03-25 22:42:52'),
(8, 'Premium', 'premium', NULL, '156', '[{\"title\":\"GYM & Fitness\"},{\"title\":\"Bonxing Training\"},{\"title\":\"Classic Yoga Working\"},{\"title\":\"Fashion Yoga & GYM\"}]', '[{\"title\":\"Dummbelling\"}]', '1', NULL, '2025-03-25 06:11:23', '2025-03-25 22:42:58'),
(9, 'VIP', 'vip', NULL, '399', '[{\"title\":\"GYM & Fitness\"},{\"title\":\"Bonxing Training\"},{\"title\":\"Classic Yoga Working\"},{\"title\":\"Fashion Yoga & GYM\"},{\"title\":\"Dummbelling\"}]', '[]', '1', NULL, '2025-03-25 22:28:54', '2025-03-25 22:30:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Privacy Policy', '<p>This Privacy Policy describes how Shreeom Mandir <strong>(\"we\", \"us\" or \"our</strong>\") collects, uses and discloses your personal information when you use the App&nbsp;<strong>(&ldquo;Shreeom</strong>&nbsp;<strong>Mandir\").</strong>&nbsp;By accessing or using the App, you consent to the collection and use of information in accordance with this Privacy Policy. If you do not agree with this Privacy Policy, please do not subscribe to the Services, use the Platform or provide us with your information in any way.</p>\r\n<p>For the purposes of this Privacy Policy, the words \"us\", \"we\", and \"our\" refer to the Company and all references to \"you\", \"your\" or \"user\", as applicable means the person who accesses, uses and/or participates in the Platform in any manner or capacity.</p>\r\n<ol>\r\n<li><strong>Collection of information</strong></li>\r\n</ol>\r\n<p>When you use our Application, we collect and store your personal information which is provided by you from time to time. Our primary goal in doing so is to provide you a safe, efficient, smooth and customized experience. This allows us to provide services and features that most likely meet your needs, and to customize our app to make your experience safer and easier. More importantly, while doing so we collect the following types of information from you that we consider necessary for achieving the respective purposes.</p>\r\n<ol start=\"2\">\r\n<li><strong>Use of Information</strong></li>\r\n</ol>\r\n<ul>\r\n<li>To provide, maintain, and improve the App, including personalizing your experience and delivering relevant content.</li>\r\n<li>To communicate with you, respond to your inquiries, and provide customer support.</li>\r\n<li>To enforce the company terms and conditions.</li>\r\n<li>To notify you about any changes in application.</li>\r\n<li>To observe and improve quality of services.</li>\r\n</ul>\r\n<ol start=\"3\">\r\n<li><strong>Disclosure of information</strong></li>\r\n</ol>\r\n<ul>\r\n<li>We may share your personal details with third party service providers and payment partners.</li>\r\n<li>We may disclose your information in response to legal requests.</li>\r\n<li>We may disclose your information in connection with a merger, acquisition, or sale of assets, but only to the extent necessary to complete the transaction.</li>\r\n</ul>\r\n<ol start=\"4\">\r\n<li><strong>Data security</strong></li>\r\n</ol>\r\n<p>We have implemented appropriate technical and organizational security measures designed to protect your personal information against accidental or unlawful destruction, loss, alteration, unauthorized disclosure, unauthorized access, and other unlawful or unauthorized forms of Processing, in accordance with applicable law.</p>\r\n<p>Unfortunately, the transmission of information via the internet (including by email) is not completely secure. Although we will do our best to protect your personal information, we cannot guarantee the security of your data transmitted to our site; and any transmission is at your own risk. Once we have received your information, we will use strict procedures and security features to try to prevent unauthorized access.</p>\r\n<ol start=\"5\">\r\n<li><strong>Changes to Privacy Policy</strong></li>\r\n</ol>\r\n<p>We have right to modify, change or update this Privacy policy at any time. Such changes shall be effective immediately upon posting to the Website. You are advised to keep a regular check and update on the Policy updates on the Website.</p>', NULL, '2025-03-03 22:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `popups`
--

CREATE TABLE `popups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popups`
--

INSERT INTO `popups` (`id`, `name`, `detail`, `path`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Razat Shrestha', 'asfasd', '6LdYZucDeV6WBXffsP61DRSNvSdacCJzUWryNgBX.jpg', 1, '2025-02-03 04:23:24', '2025-03-03 22:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(191) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `name`, `slug`, `detail`, `status`, `category`, `created_at`, `updated_at`) VALUES
(4, 'How old do I have to be to join Fitness First?', 'one', '<p>You are required to be 14 years or older to take up a membership.&nbsp;&nbsp;</p>\r\n<p>Minors (anyone under the age of 18) must have signed consent from their parent/legal guardian and memberships must be purchased in club.&nbsp;</p>\r\n<p>There are different club access requirements depending on a minor\'s age; for full details please refer to the Age Policy in our&nbsp;Terms and Conditions, which you can access in our footer below.&nbsp;</p>', 1, '1', '2025-03-26 23:53:25', '2025-03-26 23:53:25'),
(5, 'Can I put my membership on hold?', 'two', '<p>Yes you can, we call our hold option Time Freeze. You can freeze your membership up to a maximum of 4 weeks each calendar year at a cost of $5 per week. If you are within minimum term, Time Freeze is not classified as a full payment toward your minimum agreement period.</p>\r\n<p>You can freeze your membership on our App (Download on&nbsp;App Store&nbsp;or&nbsp;Play Store).</p>\r\n<p>To create an account for the first time, click \'Setup account\' and follow the prompts.&nbsp;</p>', 1, '1', '2025-03-26 23:54:03', '2025-03-26 23:54:03'),
(6, 'How do I find a personal trainer?', 'three', '<p>We have many ways to guide you in connecting with one of our expert&nbsp;Personal Trainers&nbsp;(PTs). The best way is to say hello to them directly and ask a question. They\'ll be more than happy to assist. In addition, a great place to enquire is via reception and/or your club Personal Training Manager. We also have in-club and online PT profile boards to assist you in checking out the specialties and qualifications of our team. Ask reception for directions to our in-club board and see your club\'s page on the website.&nbsp;</p>', 1, '1', '2025-03-26 23:54:30', '2025-03-26 23:54:30');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `detail`, `status`, `path`, `created_at`, `updated_at`) VALUES
(3, 'Reid Butt', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.&nbsp;</p>', '1', 'gb0OJHKoB378UN1Egq5q06tP2hk6cRJslBYbV23A.jpg', '2025-03-25 03:15:31', '2025-03-25 03:15:31'),
(4, 'Parker Jainez', '<p>&nbsp;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.&nbsp;</p>', '1', '3kHsWzE3QQ5UsLdn0X36QFx0PKAFMfes0sFshQD3.jpg', '2025-03-25 03:15:56', '2025-03-25 03:15:56'),
(5, 'Gordon D Novak', '<p>&nbsp;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.&nbsp;</p>', '1', 'u0xuWjKlEaeIqvy44vSvw02F4bOokcBEJAOUYs1u.jpg', '2025-03-25 03:16:16', '2025-03-25 03:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `time` varchar(191) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `map` varchar(455) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `title`, `detail`, `path`, `address`, `phone`, `email`, `time`, `facebook`, `instagram`, `youtube`, `meta_keyword`, `meta_description`, `website`, `map`, `created_at`, `updated_at`) VALUES
(1, 'Zenith Fitness', 'Zenith Fitness | Fitness Journey', '<p>We are many variations of passages available but the majority have suffered alteration in some form by injected humour words which don\'t look even slightly believable.</p>', '3Mv5lFtqnKo0Ghptd9YlybhC82uKzNSo41Y5tz5g.png', 'Bhaktapur , Nepal -44600', '01-5970139', 'info@zenithsolutions.com', 'Sun - Fri (08AM - 10PM)', 'https://www.facebook.com/thebigsolutions', 'https://www.instagram.com/thebigsolutions/', 'https://www.youtube.com/thebigsolutions/', 'fitness, gym,exercises', 'We are many variations of passages available but the majority have suffered alteration in some form by injected humour words which don\'t look even slightly believable.', 'https://zenithsolutions.com/', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243219.58996999083!2d85.25902639323442!3d27.672282001859934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xae0bb4611f5f8c8f%3A0xa0f786aca645375!2sBig%20Solutions!5e1!3m2!1sen!2snp!4v1736325827187!5m2!1sen!2snp', '2025-01-08 02:48:33', '2025-03-25 03:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Tester Test', 'tester@gmail.com', NULL, '$2y$12$h5DRatmNH5.yg5IF647WVOyapYORc/2BKVBPNmlEXgwhFRoHgs0dK', NULL, '2025-01-06 03:24:23', '2025-01-06 03:24:23'),
(7, 'Razat Shrestha', 'razatshrestha07@gmail.com', NULL, '$2y$12$FG0pkJF6tKYajkYTAuxM5unrhlguUswydlbX8K32yPMIXQLfXTSpy', NULL, '2025-03-04 05:11:24', '2025-03-04 05:11:24'),
(8, 'Front End Developer', '123456@gmail.com', NULL, '$2y$12$sLUTWaFypfXJos.utwk9keQUhLe1hLuniXmtxgKESuoIG7paZrX.e', NULL, '2025-04-23 05:39:43', '2025-04-23 05:39:43'),
(9, 'Test User', 'test@gmail.com', NULL, '$2y$12$Za6fjPWZmFQluSOr/9fSDOcB8/MqXgPXbUs0Eo67Dk0u6wqywf6GG', NULL, '2025-04-23 23:01:25', '2025-04-23 23:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `minidetail` varchar(1211) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `minidetail`, `detail`, `path`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Start Your Fitness Journey', '<div>\r\n<div>Build A Perfect &lt;span&gt;Health&lt;/span&gt; Growth</div>\r\n</div>', '<div>\r\n<div>Build A Perfect &lt;span&gt;Health&lt;/span&gt; Growth</div>\r\n</div>', 'DgwfzD4dYOKVIha4awJ8o2qdy6Vmd3dq56Dbk4Y2.jpg', 1, '2025-02-03 10:33:35', '2025-04-29 01:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `squads`
--

CREATE TABLE `squads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `squads`
--

INSERT INTO `squads` (`id`, `name`, `slug`, `detail`, `status`, `path`, `email`, `facebook`, `created_at`, `updated_at`) VALUES
(3, 'Chad Smith', 'chad-smith', '<p>Fitness Trainer</p>', '1', 'RYIP95GCDgHbgjZAzCGHl0sb4YNuSzw4d1XRnBEB.jpg', NULL, NULL, '2025-03-25 03:09:03', '2025-03-26 06:04:44'),
(4, 'Arron Rodri', 'arron-rodri', '<p>Fitness Trainer</p>', '1', '1ZcxtZejpSfHFGXw1zrtROQyGZD4jm5QP74dBIIr.jpg', NULL, NULL, '2025-03-25 03:09:17', '2025-03-26 06:05:04'),
(5, 'Malissa Fierro', 'malissa-fierro', '<p>Fitness Trainer</p>', '1', 'ZE8387QJQ89tnNStjbDD6yh4XJ2jziyRJBzn01XV.jpg', NULL, NULL, '2025-03-25 03:09:33', '2025-03-26 06:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `features` mediumtext DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `name`, `detail`, `features`, `path`, `created_at`, `updated_at`) VALUES
(1, 'We Are Ready To Making You Different From Others', '<p class=\"about-text\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of orem psum you need to be sure.All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks.</p>\r\n<div class=\"about-list-wrapper\">\r\n<ul class=\"about-list list-unstyled\">\r\n<li>\r\n<div class=\"icon\">&nbsp;</div>\r\n</li>\r\n</ul>\r\n</div>', '[{\"entity\":\"flaticon-people\",\"title\":\"Qualified Instructor\",\"detail\":\"Take a look at our round up of the best shows.\"},{\"entity\":\"flaticon-stationary-bike\",\"title\":\"Get Fitness Training\",\"detail\":\"It has survived not only five centuries.\"}]', 'KySaQr4erhfXEDnRUZZRjehwIxs9NbYk3SIb5cLh.jpg', NULL, '2025-03-24 23:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE `studios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`id`, `name`, `slug`, `path`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Tester', 'test', '4fexmLBmfv8zU4LPLmgZocSIMXBzBGM0Oim4CBHW.jpg', '[\"CmyO9ZFeW3qaZHfqaKIX5AlHjy7vCOrCotqU8K5r.jpg\",\"gLxkav9R6rdg26dsF4FhqRs0zB8qOvhZLDE9f60d.jpg\",\"4ttQ2qYtmwH7QCxWSY1lMpFPKxEL70ka0bSHm97w.png\",\"hmyUhDIFc1gK9oRaBO1kLEmB4oDs8yDMPz4HP7BL.png\",\"v1gbOOKZVYFcbvUl3ywQeXQjGME5IBSHrd6OIUsf.jpg\"]', '2025-01-17 05:08:55', '2025-04-29 01:13:22'),
(3, 'Tester2', 'tester2', 'MTZeChSrDsuGdpiYCIXxwj7yck4uhwa6hmH5vNIv.jpg', '[\"vJXFE3HieFEbLOwUIsuOP83fFVEmnOQr9AKoyjn7.jpg\",\"6miv7CIHbNOUZHzotizi41xiloCF8dnLQe4TgKbv.jpg\"]', '2025-04-29 01:13:06', '2025-04-29 01:13:41'),
(4, 'tester3', 'tester3', 'qVMCvVPKr13ab1LHGyoT2MKkyn7oBllNwT536juT.jpg', '[\"Nvne9YTaEhgHzYaoVLCee1ofQy0JpALRtuK62Swj.jpg\"]', '2025-04-29 01:14:04', '2025-04-29 01:14:04');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(11) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(4, 'saritabaidhyas@gmail.com', '2025-03-26 23:39:54', '2025-03-26 23:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Tester Test', 'tester@gmail.com', NULL, '$2y$12$h5DRatmNH5.yg5IF647WVOyapYORc/2BKVBPNmlEXgwhFRoHgs0dK', NULL, '2025-01-06 03:24:23', '2025-01-06 03:24:23'),
(7, 'Razat Shrestha', 'razatshrestha07@gmail.com', NULL, '$2y$12$FG0pkJF6tKYajkYTAuxM5unrhlguUswydlbX8K32yPMIXQLfXTSpy', NULL, '2025-03-04 05:11:24', '2025-03-04 05:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `utilities`
--

CREATE TABLE `utilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `path1` varchar(1191) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `highlights` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `utilities`
--

INSERT INTO `utilities` (`id`, `name`, `icon`, `detail`, `path`, `path1`, `status`, `category`, `meta_keyword`, `meta_description`, `image`, `slug`, `title`, `highlights`, `created_at`, `updated_at`) VALUES
(10, 'Cycling GYM', 'flaticon-machine', '<p class=\"mb-20\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.</p>\r\n<p class=\"mb-20\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6 mb-20\"><img src=\"../../training/assets/img/class/01.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-6 mb-20\"><img src=\"../../training/assets/img/class/02.jpg\" alt=\"\" /></div>\r\n</div>', '3zHSrvPpET9b5Q1RgYyfxCSbLmPgIME2xApYX1NW.jpg', 'lNvbWqXHcy0admc0NtGFgAnUlNNmXVHD1VXqwjXV.jpg', 1, '3', NULL, NULL, 'R0Ozj8rjLd0ECYQEt5sPBsPmlo2F2vkJZN9EWOUM.jpg', 'cycling-gym', 'Cycling GYM', 'There are many variations of passages available but the majority have suffered alteration injected.', '2025-03-25 01:09:40', '2025-03-26 06:15:58'),
(11, 'Fitness', 'flaticon-machine', '<p class=\"mb-20\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.</p>\r\n<p class=\"mb-20\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6 mb-20\"><img src=\"../../training/assets/img/class/01.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-6 mb-20\"><img src=\"../../training/assets/img/class/02.jpg\" alt=\"\" /></div>\r\n</div>', 'kGKhu7Uv3rh9uvKxPNdeaGNJmDJVZascC7t6cGVT.jpg', 'lNvbWqXHcy0admc0NtGFgAnUlNNmXVHD1VXqwjXV.jpg', 1, '3', NULL, NULL, NULL, 'fitness', 'Fitness', 'There are many variations of passages available but the majority have suffered alteration injected.', '2025-03-25 01:13:33', '2025-03-26 06:10:46'),
(13, 'Grid Training', 'flaticon-people-1', '<p class=\"mb-20\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.</p>\r\n<p class=\"mb-20\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>\r\n<div class=\"row\">\r\n<div class=\"col-md-6 mb-20\"><img src=\"../../training/assets/img/class/01.jpg\" alt=\"\" /></div>\r\n<div class=\"col-md-6 mb-20\"><img src=\"../../training/assets/img/class/02.jpg\" alt=\"\" /></div>\r\n</div>', 'SyzAnIdGPPF0sE49YPkor42krPVF2xyIvY76Qzpu.jpg', NULL, 1, '3', NULL, NULL, NULL, 'grid-training', 'Grid Training', 'There are many variations of passages available but the majority have suffered alteration injected.', '2025-03-25 01:14:29', '2025-03-26 06:10:55'),
(14, 'Dumbbelling', 'flaticon-muscle', '<p class=\"mb-20\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et.</p>\r\n<p class=\"mb-20\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>', 'K6TKpWM8eg2T7clGNkaMlJyl3GCrTCM8D6dDa4bq.jpg', '6F0nMOcUIUFlXd0VnLQoffMpY2fE0Q26HGixuX1V.jpg', 1, '3', NULL, NULL, 'c3gY0TztsSl9AwcDqar41rtbR2EAcKa7Uv7kp9fb.jpg', 'dumbbelling', 'Dumbbelling', 'There are many variations of passages available but the majority have suffered alteration injected.', '2025-03-26 05:08:26', '2025-04-29 01:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `utility_types`
--

CREATE TABLE `utility_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `path` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `utility_types`
--

INSERT INTO `utility_types` (`id`, `name`, `detail`, `path`, `status`, `meta_keyword`, `meta_description`, `image`, `slug`, `title`, `created_at`, `updated_at`) VALUES
(3, 'Builders', '<p>If you&rsquo;d like to find a builder in your area, MyJobQuote can help. We have a variety of local builders that are ready to give you a quote. You can get up to 3 quotes and choose the best builder that&rsquo;s right for you within your budget.</p>\r\n<p>It doesn&rsquo;t matter how big or small the job is; whether you need to build an extension or loft conversion or if you need to knock down a load-bearing wall, MyJobQuote will have a reputable builder for the job.</p>\r\n<p>You can also check out our builder reviews from previous customers to help find a trusted builder.</p>', 'Dosqcw9iVJhrDiE0LtRLYXsfQBfT63YcK2uSGR6n.png', 1, 'builders.tradie', 'Find a Builder, compare up to 3 quotes!', 'INwwmd4GwiBQhPLd7WGe7kijb9clIsPHfu8ifuk5.jpg', 'builders', NULL, '2025-02-03 10:40:46', '2025-02-03 10:41:36'),
(4, 'Building Inspection', '<p>Find a local architect to bring your dreams alive. Get up to three quotes from architects in your area and save time and money hunting around for the best price. Architects drawings are essential for planning permission and getting a professional start to your project.</p>\r\n<p>Builders and specialist tradesmen use architect drawings for everything from ordering materials to their final spec finish. To ensure low waste, low cost, good timekeeping, and a high-spec finish, it is essential to have a drawing and architect specification before starting any major project.</p>\r\n<p>You can hire an architect here for both residential and commercial projects; simply fill out the form to get started.</p>', 'jMv2qiF9F7uesN4Ce1r3jTaX3hIfiBKjDaPls5bf.jpg', 1, 'inspection', 'You can hire an architect here for both residential and commercial projects; simply fill out the form to get started.', 'jMv2qiF9F7uesN4Ce1r3jTaX3hIfiBKjDaPls5bf.jpg', 'building-inspection', 'Building Inspection Title', '2025-02-03 10:45:57', '2025-02-11 06:15:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associates`
--
ALTER TABLE `associates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `squads`
--
ALTER TABLE `squads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `utilities`
--
ALTER TABLE `utilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utility_types`
--
ALTER TABLE `utility_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associates`
--
ALTER TABLE `associates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `popups`
--
ALTER TABLE `popups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `squads`
--
ALTER TABLE `squads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studios`
--
ALTER TABLE `studios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `utilities`
--
ALTER TABLE `utilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `utility_types`
--
ALTER TABLE `utility_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
