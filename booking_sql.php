-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 10:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bravo_attrs`
--

CREATE TABLE `bravo_attrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `display_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide_in_single` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_attrs`
--

INSERT INTO `bravo_attrs` (`id`, `name`, `slug`, `service`, `create_user`, `update_user`, `created_at`, `updated_at`, `deleted_at`, `display_type`, `hide_in_single`) VALUES
(1, 'Travel Styles', 'travel-styles', 'tour', NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(2, 'Facilities', 'facilities', 'tour', NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(3, 'Space Type', 'space-type', 'space', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(4, 'Amenities', 'amenities', 'space', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(5, 'Property type', 'property-type', 'hotel', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(6, 'Facilities', 'facilities-1', 'hotel', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(7, 'Hotel Service', 'hotel-service', 'hotel', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(8, 'Room Amenities', 'room-amenities', 'hotel_room', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(9, 'Car Type', 'car-type', 'car', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 1),
(10, 'Car Features', 'car-features', 'car', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(11, 'Event Type', 'event-type', 'event', NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bravo_attrs_translations`
--

CREATE TABLE `bravo_attrs_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_bookings`
--

CREATE TABLE `bravo_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `gateway` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `total_guests` int(11) DEFAULT NULL,
  `currency` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` decimal(10,2) DEFAULT NULL,
  `deposit_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` decimal(10,2) DEFAULT NULL,
  `commission_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `buyer_fees` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_before_fees` decimal(10,2) DEFAULT NULL,
  `paid_vendor` tinyint(4) DEFAULT NULL,
  `object_child_id` bigint(20) DEFAULT NULL,
  `number` smallint(6) DEFAULT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `pay_now` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_booking_meta`
--

CREATE TABLE `bravo_booking_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_booking_payments`
--

CREATE TABLE `bravo_booking_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `payment_gateway` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `converted_amount` decimal(10,2) DEFAULT NULL,
  `converted_currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_rate` decimal(10,2) DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_cars`
--

CREATE TABLE `bravo_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` tinyint(4) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `sale_price` decimal(12,2) DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `enable_extra_price` tinyint(4) DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_by_days` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passenger` tinyint(4) DEFAULT 0,
  `gear` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `baggage` tinyint(4) DEFAULT 0,
  `door` tinyint(4) DEFAULT 0,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_state` tinyint(4) DEFAULT 1,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `review_score` decimal(2,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_cars`
--

INSERT INTO `bravo_cars` (`id`, `title`, `slug`, `content`, `image_id`, `banner_image_id`, `location_id`, `address`, `map_lat`, `map_lng`, `map_zoom`, `is_featured`, `gallery`, `video`, `faqs`, `number`, `price`, `sale_price`, `is_instant`, `enable_extra_price`, `extra_price`, `discount_by_days`, `passenger`, `gear`, `baggage`, `door`, `status`, `default_state`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`, `review_score`) VALUES
(1, 'BMW-X6-facelift', 'bmw-x6-facelift', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 142, 135, 1, 'Arrondissement de Paris', '21.054831', '105.796077', 12, 0, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 2, '500.00', '261.00', 0, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 10, 'Auto', 10, 4, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5'),
(2, '2019 Honda Clarity', '2019-honda-clarityt-1', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 143, 135, 1, 'Arrondissement de Paris', '21.039771', '105.777203', 12, 0, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 5, '300.00', '0.00', 1, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 9, 'Auto', 7, 4, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '5.0'),
(3, '2019 Honda Clarity', '2019-honda-clarityt', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 143, 135, 3, 'Arrondissement de Paris', '21.031217', '105.773698', 12, 0, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 2, '300.00', '0.00', 0, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 8, 'Auto', 9, 4, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5'),
(4, '2019 BMW M6 Gran Coupe', '2019-bmw-m6-gran-coupe', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 144, 135, 1, 'Arrondissement de Paris', '21.020161', '105.789655', 12, 0, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 2, '300.00', '0.00', 0, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 3, 'Auto', 5, 4, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.7'),
(5, '2019 Audi S3', '2019-audi-s3', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 145, 135, 5, 'Arrondissement de Paris', '21.014873', '105.794117', 12, 0, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 1, '300.00', '0.00', 1, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 4, 'Auto', 6, 4, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5'),
(6, 'Vinfast Fadil Plus', 'vinfast-fadil-plus', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 146, 135, 1, 'Arrondissement de Paris', '21.018398', '105.812820', 12, 1, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 5, '400.00', '0.00', 1, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 9, 'Auto', 5, 4, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.3'),
(7, 'Mercedes Benz', 'mercedes-benz', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 147, 135, 1, 'Arrondissement de Paris', '21.025769', '105.829635', 12, 0, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 1, '200.00', '0.00', 1, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 8, 'Auto', 7, 4, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.0'),
(8, 'Vinfast Lux SA2.0 Plus', 'vinfast-lux-sa20-plus', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 148, 135, 1, 'Arrondissement de Paris', '21.017437', '105.831179', 12, 0, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 1, '600.00', '0.00', 0, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 3, 'Auto', 8, 4, 'publish', 1, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5'),
(9, 'Honda Civic', 'honda-civic', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 149, 135, 6, 'Arrondissement de Paris', '21.047879', '105.809731', 12, 1, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 1, '450.00', '0.00', 1, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 7, 'Auto', 6, 4, 'publish', 1, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.8'),
(10, 'Toyota Prius Plus', 'toyota-prius-plus', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 150, 135, 7, 'Arrondissement de Paris', '21.025449', '105.804412', 12, 1, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 3, '199.00', '0.00', 1, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 6, 'Auto', 6, 4, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5');
INSERT INTO `bravo_cars` (`id`, `title`, `slug`, `content`, `image_id`, `banner_image_id`, `location_id`, `address`, `map_lat`, `map_lng`, `map_zoom`, `is_featured`, `gallery`, `video`, `faqs`, `number`, `price`, `sale_price`, `is_instant`, `enable_extra_price`, `extra_price`, `discount_by_days`, `passenger`, `gear`, `baggage`, `door`, `status`, `default_state`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`, `review_score`) VALUES
(11, 'Vinfast Lux V8 (SUV)', 'vinfast-lux-v8-suv', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 151, 135, 8, 'Arrondissement de Paris', '21.020001', '105.836670', 12, 1, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 1, '250.00', '0.00', 1, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 8, 'Auto', 9, 4, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.7'),
(12, 'Vinfast Lux A2.0 Plus', 'vinfast-lux-a20-plus', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 152, 135, 3, 'Arrondissement de Paris', '21.051244', '105.777988', 12, 0, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 2, '350.00', '0.00', 0, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 6, 'Auto', 10, 4, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.3'),
(13, 'Vinfast Fadil Standard', 'vinfast-fadil-standard', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 153, 135, 1, 'Arrondissement de Paris', '21.053326', '105.841475', 12, 1, '154,155,156,157,158,159,160', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"When should I check the transmission fluid?\",\"content\":\"You should check the transmission fluid regularly. Try to check it at least once a month or at the sign of any trouble, for instance if there is any hesitation when you shift gears in an automatic.\"},{\"title\":\"How do I check the transmission fluid?\",\"content\":\"It\\u2019s not hard to check your transmission fluid if the vehicle is an automatic. This link to the Dummies guide to checking your transmission fluid has step-by-step instructions and illustrations that show you where to locate the dipstick. What you want is clear, pink transmission fluid. If it is low, top it up. If it is dark, smells burnt or has bits in it then you need to get it changed by at a reliable auto repair shop.\"},{\"title\":\"Is it really that important to check the transmission fluid?\",\"content\":\"Yes, it can be. Often times the symptoms you\\u2019ll experience from low or dirty transmission fluid will be the same as transmission problems. If you check the fluid levels regularly and refill as necessary then you\\u2019ll know if there are any symptoms of trouble that it\\u2019s not because the fluid levels are low and you need to see a mechanic.\"},{\"title\":\"Are there different types of transmission fluid?\",\"content\":\"How do I know what to buy? Yes, there are many different types of transmission fluid, each designed for a certain transmission. Different vehicles require different transmission fluids and the age of the car can also be a factor because newer transmissions take different types of transmission fluids than older vehicles. Don\\u2019t guess! Find out which type of transmission fluid is required for your vehicle by checking your owner\\u2019s manual.\"},{\"title\":\"What is a transmission flush and should I get one?\",\"content\":\"A transmission flush is used by some auto repair shops with the goal of flushing out debris.  Auto Tech does not do any sort of transmission flush.  Flushing an older transmission can cause harmful sediment to get stuck in the solenoids of the transmission. We heavily favor regular maintenance to lengthen the life of your transmission.  We service the transmission by changing fluid and the filter and do not recommend having your transmission flushed.\"},{\"title\":\"How do I know I have a fluid leak from the transmission?\",\"content\":\"Transmission fluid is slightly pink in color \\u2013 it will appear pink or red, or possibly more brownish if the transmission fluid is dirty and needs to be replaced. When you feel transmission fluid it will be slick and oily on your fingers. It smells much like oil unless it is dirty, in which case it will smell burnt. Usually transmission fluid leaks around the front or middle of your vehicle, so if you find puddles of reddish liquid there it is probably transmission fluid. Another clue is if in addition to the leak your transmission is not working well and you notice changes in the way it sounds when you shift gears, or if shifting gears is not working as well. In this case you likely have a leak of transmission fluid that is impacting how your transmission operates.\"}]', 1, '400.00', '0.00', 0, 1, '[{\"name\":\"Child Toddler Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Infant Child Seat\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"GPS Satellite\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 7, 'Auto', 3, 4, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.7');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_car_dates`
--

CREATE TABLE `bravo_car_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `number` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT 0,
  `note_to_customer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_car_term`
--

CREATE TABLE `bravo_car_term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_car_term`
--

INSERT INTO `bravo_car_term` (`id`, `term_id`, `target_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 61, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(2, 62, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(3, 63, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(4, 64, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(5, 65, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(6, 67, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(7, 68, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(8, 61, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(9, 62, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(10, 63, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(11, 64, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(12, 65, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(13, 66, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(14, 67, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(15, 68, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(16, 65, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(17, 66, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(18, 67, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(19, 63, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(20, 64, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(21, 65, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(22, 67, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(23, 68, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(24, 61, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(25, 61, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(26, 62, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(27, 63, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(28, 64, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(29, 67, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(30, 68, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(31, 61, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(32, 63, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(33, 65, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(34, 66, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(35, 68, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(36, 61, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(37, 62, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(38, 63, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(39, 65, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(40, 67, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(41, 68, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(42, 61, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(43, 63, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(44, 67, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(45, 68, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(46, 62, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(47, 65, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(48, 66, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(49, 67, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(50, 68, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(51, 61, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(52, 62, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(53, 64, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(54, 65, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(55, 66, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(56, 67, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(57, 61, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(58, 63, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(59, 64, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(60, 65, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(61, 66, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(62, 68, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(63, 62, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(64, 64, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(65, 66, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(66, 67, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(67, 68, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(68, 69, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(69, 70, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(70, 71, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(71, 72, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(72, 73, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(73, 74, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(74, 69, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(75, 70, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(76, 71, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(77, 72, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(78, 73, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(79, 74, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(80, 69, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(81, 70, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(82, 71, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(83, 72, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(84, 73, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(85, 74, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(86, 69, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(87, 70, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(88, 71, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(89, 72, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(90, 73, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(91, 74, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(92, 69, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(93, 70, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(94, 71, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(95, 72, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(96, 73, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(97, 74, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(98, 69, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(99, 70, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(100, 71, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(101, 72, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(102, 73, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(103, 74, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(104, 69, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(105, 70, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(106, 71, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(107, 72, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(108, 73, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(109, 74, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(110, 69, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(111, 70, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(112, 71, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(113, 72, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(114, 73, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(115, 74, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(116, 69, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(117, 70, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(118, 71, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(119, 72, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(120, 73, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(121, 74, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(122, 69, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(123, 70, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(124, 71, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(125, 72, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(126, 73, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(127, 74, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(128, 69, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(129, 70, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(130, 71, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(131, 72, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(132, 73, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(133, 74, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(134, 69, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(135, 70, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(136, 71, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(137, 72, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(138, 73, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(139, 74, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(140, 69, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(141, 70, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(142, 71, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(143, 72, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(144, 73, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(145, 74, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_car_translations`
--

CREATE TABLE `bravo_car_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_contact`
--

CREATE TABLE `bravo_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_enquiries`
--

CREATE TABLE `bravo_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` bigint(20) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_events`
--

CREATE TABLE `bravo_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_types` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `sale_price` decimal(12,2) DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `enable_extra_price` tinyint(4) DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_score` decimal(2,1) DEFAULT NULL,
  `ical_import_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_state` tinyint(4) DEFAULT 1,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_events`
--

INSERT INTO `bravo_events` (`id`, `title`, `slug`, `content`, `image_id`, `banner_image_id`, `location_id`, `address`, `map_lat`, `map_lng`, `map_zoom`, `is_featured`, `gallery`, `video`, `faqs`, `ticket_types`, `duration`, `start_time`, `price`, `sale_price`, `is_instant`, `enable_extra_price`, `extra_price`, `review_score`, `ical_import_url`, `status`, `default_state`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Andante & Allegro Event Design', 'andante-allegro-event-design', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 162, 180, 1, 'Arrondissement de Paris', '48.852754', '2.339155', 12, 0, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 4, '20:00', '2000.00', '0.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.7', NULL, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(2, 'Painted Desert Event Designs', 'painted-desert-event-designs', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 163, 181, 1, 'Porte de Vanves', '48.853917', '2.307199', 12, 1, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 7, '19:00', '900.00', '514.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.5', NULL, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(3, 'Bamboo Grove Event Planning', 'bamboo-grove-event-planning', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 164, 182, 1, 'Petit-Montrouge', '48.884900', '2.346377', 12, 1, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 1, '19:00', '1500.00', '327.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.3', NULL, 'publish', 1, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(4, 'Aspen Glade Weddings & Events', 'aspen-glade-weddings-events', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 165, 180, 2, 'New York', '40.707891', '-74.008825', 12, 1, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 8, '17:00', '850.00', '0.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.8', NULL, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(5, 'Southwest States (Ex Los Angeles) ', 'southwest-states', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 166, 181, 2, 'Regal Cinemas Battery Park 11', '40.714578', '-73.983888', 12, 0, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 2, '18:00', '1900.00', '265.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.5', NULL, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(6, 'Spanish Moss Event Design', 'spanish-moss-event-design', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 167, 182, 2, 'Prince St Station', '40.720161', '-74.009628', 12, 1, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 4, '19:00', '600.00', '0.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.8', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(7, 'Eastern Discovery', 'eastern-discovery', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 168, 180, 2, 'Pier 36 New York', '40.708581', '-73.998817', 12, 0, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 3, '15:00', '2100.00', '1177.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.0', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(8, 'Pink Crescent Moon Events', 'pink-crescent-moon-events', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 169, 181, 3, 'Trimmer Springs Rd, Sanger', '36.822484', '-119.365266', 12, 0, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 1, '21:00', '700.00', '0.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '5.0', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(9, 'Northern Lights Event Planners', 'northern-lights-event-planners', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 170, 182, 4, 'United States', '37.040023', '-95.643144', 12, 1, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 6, '20:00', '800.00', '600.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.5', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(10, 'Origami Crane Wedding Planners', 'origami-crane-wedding-planners', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 171, 180, 5, 'Washington, DC, USA', '34.049345', '-118.248479', 12, 0, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 4, '18:00', '400.00', '0.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.7', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(11, 'New York – Discover America', 'new-york-discover-america', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 172, 181, 6, 'New Jersey', '40.035329', '-74.417227', 12, 1, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 3, '14:00', '300.00', '0.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '4.5', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(12, 'Event of Washington, D.C. Highlights', 'event-of-washington-dc-highlights', '<p>Start and end in San Francisco! With the in-depth cultural event Northern California Summer 2019, you have a 8 day event package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 173, 182, 7, 'Francisco Parnassus Campus', '37.782668', '-122.425058', 12, 1, '174,175,176,177,178,179', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Can children come to events?\",\"content\":\"Unless otherwise stated, children are always welcome, but please be aware that most of our events are aimed at an adult audience.  Children must be supervised at all times.\"},{\"title\":\"Is there seating at events?\",\"content\":\"Yes, we always provide a variety of seating for all ticketholders unless it\\u2019s a dance event or art show opening.  One of our crew will always be on hand to assist you in finding a seat if you need one.\"},{\"title\":\"Where can I park?\",\"content\":\"There is a wide choice of places to park, however most are not free so please do check before you come on the Southampton City Council website.  We have no onsite parking.\"},{\"title\":\"Are you near public transport?\",\"content\":\"Very.  There is a bus stop a few doors up and the train station is about 7 minutes gentle walk away.\"},{\"title\":\"Is it safe to come at night?\",\"content\":\"To our knowledge, none of our customers has had any bad experience, however we do recommend that if you are worried you stick to the roads rather than walk through the parks.  The roads are well-lit and generally there are a lot of people about at night.\"},{\"title\":\"Can I come on my own?\",\"content\":\"YES!  Many of our customers come alone to events, it\\u2019s never a problem and you will be welcomed warmly.\"}]', '[{\"code\":\"ticket_vip\",\"name\":\"Ticket Vip\",\"name_ja\":\"\\u30c1\\u30b1\\u30c3\\u30c8VIP\",\"name_egy\":null,\"price\":\"1000\",\"number\":\"10\"},{\"code\":\"ticket_group_tickets\",\"name\":\"Group Tickets\",\"name_ja\":\"\\u30b0\\u30eb\\u30fc\\u30d7\\u30c1\\u30b1\\u30c3\\u30c8\",\"name_egy\":null,\"price\":\"500\",\"number\":\"10\"}]', 6, '17:00', '2100.00', '798.00', 0, 1, '[{\"name\":\"Event service\",\"price\":\"100\",\"type\":\"one_time\"}]', '0.0', NULL, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_event_dates`
--

CREATE TABLE `bravo_event_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `ticket_types` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) DEFAULT 0,
  `note_to_customer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_event_term`
--

CREATE TABLE `bravo_event_term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_event_term`
--

INSERT INTO `bravo_event_term` (`id`, `term_id`, `target_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 75, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(2, 77, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(3, 78, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(4, 80, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(5, 81, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(6, 75, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(7, 76, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(8, 78, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(9, 79, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(10, 80, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(11, 81, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(12, 75, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(13, 77, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(14, 78, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(15, 79, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(16, 80, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(17, 81, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(18, 75, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(19, 76, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(20, 78, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(21, 79, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(22, 81, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(23, 82, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(24, 75, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(25, 76, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(26, 77, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(27, 78, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(28, 79, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(29, 80, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(30, 81, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(31, 82, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(32, 75, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(33, 76, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(34, 77, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(35, 79, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(36, 80, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(37, 82, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(38, 75, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(39, 76, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(40, 77, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(41, 78, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(42, 79, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(43, 80, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(44, 81, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(45, 75, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(46, 76, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(47, 77, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(48, 78, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(49, 79, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(50, 81, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(51, 82, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(52, 75, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(53, 76, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(54, 77, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(55, 78, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(56, 79, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(57, 80, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(58, 82, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(59, 75, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(60, 76, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(61, 78, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(62, 79, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(63, 80, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(64, 81, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(65, 82, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(66, 77, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(67, 78, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(68, 79, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(69, 80, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(70, 82, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(71, 76, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(72, 79, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(73, 80, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(74, 81, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(75, 82, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_event_translations`
--

CREATE TABLE `bravo_event_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_hotels`
--

CREATE TABLE `bravo_hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star_rate` smallint(6) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `check_in_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_out_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_full_day` smallint(6) DEFAULT NULL,
  `sale_price` decimal(12,2) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `review_score` decimal(2,1) DEFAULT NULL,
  `ical_import_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_extra_price` tinyint(4) DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_hotels`
--

INSERT INTO `bravo_hotels` (`id`, `title`, `slug`, `content`, `image_id`, `banner_image_id`, `location_id`, `address`, `map_lat`, `map_lng`, `map_zoom`, `is_featured`, `gallery`, `video`, `policy`, `star_rate`, `price`, `check_in_time`, `check_out_time`, `allow_full_day`, `sale_price`, `status`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`, `review_score`, `ical_import_url`, `enable_extra_price`, `extra_price`) VALUES
(1, 'Hotel Stanford', 'hotel-stanford', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 67, 95, 1, 'Arrondissement de Paris', '19.148665', '72.839670', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '300.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.3', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(2, 'Hotel WBF Hommachi', 'hotel-wbf-homachi', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 68, 94, 1, 'Porte de Vanves', '19.110390', '72.832764', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '350.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.3', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(3, 'Castello Casole Hotel', 'castello-casole-hotel', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 69, 93, 1, 'Petit-Montrouge', '19.077946', '72.838255', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '350.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.8', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(4, 'Redac Gateway Hotel', 'redac-gateway-hotel', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 70, 96, 1, 'Petit-Montrouge', '19.031217', '72.851982', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '500.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.8', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(5, 'Studio Allston Hotel', 'studio-allston-hotel', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 71, 94, 5, 'New York', '18.972786', '72.819724', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '500.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '5.0', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(6, 'EnVision Hotel Boston', 'envision-hotel-biston', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 72, 96, 3, 'New York', '18.873011', '72.975724', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '700.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.3', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(7, 'Crowne Plaza Hotel', 'crowne-plaza-hotel', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 73, 95, 2, 'New York', '19.001355', '73.111444', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '900.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.0', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(8, 'Stewart Hotel', 'stewart-hotel', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 74, 94, 5, 'New York', '19.080542', '73.010551', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '900.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.0', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(9, 'Parian Holiday Villas', 'parian-holiday-villas', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 75, 94, 1, 'Regal Cinemas Battery Park', '19.161637', '72.997510', 12, 1, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '550.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.3', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(10, 'Dylan Hotel', 'dylan-hotel', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 64, 96, 2, 'Regal Cinemas Battery', '19.229727', '72.984470', 12, 1, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 5, '550.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]'),
(11, 'The May Fair Hotel', 'the-may-fair-hotel', '<p>Built in 1986, Hotel Stanford is a distinct addition to New York (NY) and a smart choice for travelers. The excitement of the city center is only 0 KM away. No less exceptional is the hotel’s easy access to the city’s myriad attractions and landmarks, such as Toto Music Studio, British Virgin Islands Tourist Board, L’Atelier Du Chocolat. Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 67, 93, 1, 'Paris Cinemas Battery', '19.277696', '72.887009', 12, 0, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '[{\"title\":\"Guarantee Policy\",\"content\":\"- A valid credit card will be required upon booking;\\r\\n- For credit card reservations, the same card(s) must be presented upon check in at the respective hotels;\\r\\n- Management reserves the right to cancel any reservations without notice if we are notified of any fraud or illegal activities associated with the full payments received.\"},{\"title\":\"Children Policy\",\"content\":\"- Child under 5-year old: free of charge.\\r\\n- Child from 5-year old to under 12-year old: surcharge $10\\/person\\/room\\/night.\\r\\n- Child from 12-year old or extra Adult: surcharge $15\\/person\\/room\\/night.\"},{\"title\":\"Cancellation\\/Amendment Policy\",\"content\":\"- If cancellation\\/amendment is made 72 hours prior to your arrival date, no fee will be charged.\\r\\n- If cancellation\\/amendment is made within 72 hours, including reservations made within 72 hours of your arrival, 1st night\\u2019s room rate and tax will be charged\\r\\n- In case of no-show, 100% room rate and tax will be charged.\\r\\n- Early Bird\\/Long Stay\\/Last Min\\/Package Rates are Non - changeable & Non - refundable\"},{\"title\":\"Late check-out policy\",\"content\":\"- Late check-out is subject to room availability\\r\\n- 12:00 to 17:00 check-out: 50% room rate surcharge\\r\\n- After 17:00 check-out: 100% room rate surcharge\"}]', 4, '550.00', '12:00AM', '11:00AM', NULL, NULL, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.0', NULL, 1, '[{\"name\":\"Service VIP \",\"price\":\"200\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"100\",\"type\":\"one_time\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_hotel_rooms`
--

CREATE TABLE `bravo_hotel_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `number` smallint(6) DEFAULT NULL,
  `beds` tinyint(4) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `adults` tinyint(4) DEFAULT NULL,
  `children` tinyint(4) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ical_import_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_hotel_rooms`
--

INSERT INTO `bravo_hotel_rooms` (`id`, `title`, `content`, `image_id`, `gallery`, `video`, `price`, `parent_id`, `number`, `beds`, `size`, `adults`, `children`, `status`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`, `ical_import_url`) VALUES
(1, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 1, 10, 2, 200, 7, 4, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(2, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 1, 10, 2, 200, 9, 1, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(3, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 1, 6, 3, 200, 8, 3, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(4, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 1, 5, 5, 200, 10, 2, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(5, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 2, 5, 2, 200, 6, 5, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(6, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 2, 5, 5, 200, 10, 2, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(7, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 2, 6, 3, 200, 7, 3, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(8, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 2, 9, 2, 200, 6, 2, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(9, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 3, 10, 3, 200, 8, 4, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(10, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 3, 9, 3, 200, 9, 5, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(11, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 3, 8, 4, 200, 7, 1, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(12, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 3, 6, 5, 200, 6, 4, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(13, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 4, 7, 4, 200, 10, 1, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(14, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 4, 6, 5, 200, 10, 4, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(15, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 4, 9, 2, 200, 9, 3, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(16, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 4, 8, 4, 200, 9, 2, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(17, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 5, 5, 2, 200, 7, 5, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(18, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 5, 5, 2, 200, 8, 4, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(19, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 5, 9, 3, 200, 6, 4, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(20, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 5, 8, 4, 200, 8, 3, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(21, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 6, 9, 2, 200, 8, 1, 'publish', 5, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(22, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 6, 9, 4, 200, 8, 1, 'publish', 5, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(23, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 6, 6, 2, 200, 9, 1, 'publish', 5, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(24, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 6, 10, 3, 200, 5, 5, 'publish', 5, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(25, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 7, 10, 4, 200, 10, 4, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(26, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 7, 9, 2, 200, 10, 1, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(27, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 7, 7, 5, 200, 8, 1, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(28, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 7, 8, 4, 200, 7, 5, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(29, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 8, 5, 2, 200, 5, 2, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(30, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 8, 6, 5, 200, 5, 3, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(31, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 8, 5, 2, 200, 10, 3, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(32, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 8, 10, 2, 200, 7, 2, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(33, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 9, 7, 3, 200, 10, 2, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(34, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 9, 5, 2, 200, 5, 1, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(35, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 9, 10, 5, 200, 7, 2, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(36, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 9, 5, 4, 200, 7, 2, 'publish', 1, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(37, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 10, 7, 3, 200, 10, 2, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(38, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 10, 8, 3, 200, 8, 5, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(39, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 10, 8, 4, 200, 5, 2, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(40, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 10, 5, 3, 200, 10, 2, 'publish', 4, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(41, 'Room Kerama Islands', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 67, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 11, 9, 4, 200, 7, 1, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(42, 'Room Sheraton Hotel', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 69, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 11, 5, 4, 200, 10, 5, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(43, 'Double Room With Town View', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 64, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 11, 7, 4, 200, 5, 3, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL),
(44, 'Standard Double Room', 'Room Sheraton comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony.Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.', 63, '97,98,99,100,101,102', 'https://www.youtube.com/watch?v=bhOiLfkChPo', '350.00', 11, 10, 2, 200, 10, 4, 'publish', 6, NULL, NULL, '2021-10-03 01:47:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bravo_hotel_room_bookings`
--

CREATE TABLE `bravo_hotel_room_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` bigint(20) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `booking_id` bigint(20) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `number` smallint(6) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_hotel_room_dates`
--

CREATE TABLE `bravo_hotel_room_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `max_guests` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT 0,
  `note_to_customer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `number` smallint(6) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_hotel_room_term`
--

CREATE TABLE `bravo_hotel_room_term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_hotel_room_term`
--

INSERT INTO `bravo_hotel_room_term` (`id`, `term_id`, `target_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 56, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(2, 57, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(3, 58, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(4, 59, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(5, 60, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(6, 57, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(7, 58, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(8, 59, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(9, 60, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(10, 56, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(11, 57, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(12, 59, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(13, 60, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(14, 56, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(15, 57, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(16, 58, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(17, 59, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(18, 60, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(19, 56, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(20, 57, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(21, 58, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(22, 59, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(23, 60, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(24, 56, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(25, 57, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(26, 58, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(27, 59, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(28, 60, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(29, 57, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(30, 58, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(31, 59, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(32, 60, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(33, 58, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(34, 59, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(35, 60, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(36, 58, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(37, 59, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(38, 60, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(39, 56, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(40, 58, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(41, 59, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(42, 60, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(43, 56, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(44, 57, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(45, 59, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(46, 60, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(47, 56, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(48, 57, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(49, 58, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(50, 59, 12, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(51, 56, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(52, 57, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(53, 58, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(54, 60, 13, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(55, 56, 14, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(56, 58, 14, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(57, 59, 14, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(58, 60, 14, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(59, 56, 15, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(60, 57, 15, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(61, 58, 15, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(62, 59, 15, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(63, 60, 15, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(64, 56, 16, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(65, 57, 16, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(66, 58, 16, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(67, 59, 16, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(68, 60, 16, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(69, 56, 17, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(70, 58, 17, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(71, 59, 17, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(72, 56, 18, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(73, 57, 18, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(74, 58, 18, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(75, 59, 18, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(76, 60, 18, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(77, 56, 19, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(78, 57, 19, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(79, 58, 19, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(80, 60, 19, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(81, 56, 20, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(82, 57, 20, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(83, 58, 20, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(84, 60, 20, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(85, 56, 21, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(86, 57, 21, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(87, 58, 21, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(88, 60, 21, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(89, 56, 22, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(90, 57, 22, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(91, 58, 22, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(92, 59, 22, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(93, 60, 22, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(94, 56, 23, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(95, 57, 23, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(96, 58, 23, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(97, 59, 23, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(98, 60, 23, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(99, 56, 24, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(100, 57, 24, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(101, 58, 24, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(102, 59, 24, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(103, 60, 24, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(104, 56, 25, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(105, 57, 25, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(106, 58, 25, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(107, 56, 26, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(108, 57, 26, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(109, 58, 26, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(110, 59, 26, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(111, 60, 26, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(112, 57, 27, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(113, 58, 27, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(114, 59, 27, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(115, 60, 27, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(116, 56, 28, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(117, 57, 28, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(118, 58, 28, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(119, 60, 28, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(120, 56, 29, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(121, 57, 29, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(122, 58, 29, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(123, 59, 29, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(124, 60, 29, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(125, 56, 30, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(126, 57, 30, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(127, 58, 30, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(128, 59, 30, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(129, 58, 31, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(130, 59, 31, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(131, 60, 31, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(132, 56, 32, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(133, 57, 32, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(134, 58, 32, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(135, 59, 32, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(136, 56, 33, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(137, 57, 33, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(138, 58, 33, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(139, 59, 33, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(140, 56, 34, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(141, 57, 34, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(142, 58, 34, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(143, 59, 34, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(144, 57, 35, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(145, 58, 35, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(146, 59, 35, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(147, 60, 35, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(148, 56, 36, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(149, 57, 36, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(150, 58, 36, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(151, 59, 36, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(152, 60, 36, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(153, 56, 37, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(154, 57, 37, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(155, 58, 37, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(156, 60, 37, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(157, 56, 38, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(158, 58, 38, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(159, 59, 38, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(160, 60, 38, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(161, 56, 39, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(162, 58, 39, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(163, 59, 39, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(164, 60, 39, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(165, 56, 40, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(166, 57, 40, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(167, 59, 40, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(168, 60, 40, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(169, 57, 41, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(170, 59, 41, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(171, 56, 42, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(172, 57, 42, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(173, 58, 42, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(174, 57, 43, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(175, 58, 43, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(176, 59, 43, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(177, 60, 43, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(178, 56, 44, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(179, 58, 44, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(180, 59, 44, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(181, 60, 44, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_hotel_room_translations`
--

CREATE TABLE `bravo_hotel_room_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_hotel_term`
--

CREATE TABLE `bravo_hotel_term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_hotel_term`
--

INSERT INTO `bravo_hotel_term` (`id`, `term_id`, `target_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 42, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(2, 46, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(3, 47, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(4, 48, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(5, 42, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(6, 43, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(7, 44, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(8, 45, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(9, 46, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(10, 47, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(11, 48, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(12, 42, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(13, 43, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(14, 44, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(15, 45, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(16, 46, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(17, 47, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(18, 42, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(19, 44, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(20, 46, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(21, 47, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(22, 48, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(23, 42, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(24, 43, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(25, 44, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(26, 45, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(27, 46, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(28, 47, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(29, 42, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(30, 43, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(31, 44, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(32, 45, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(33, 46, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(34, 47, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(35, 48, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(36, 42, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(37, 43, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(38, 44, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(39, 46, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(40, 47, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(41, 48, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(42, 42, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(43, 43, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(44, 44, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(45, 45, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(46, 46, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(47, 48, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(48, 42, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(49, 43, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(50, 44, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(51, 45, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(52, 47, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(53, 48, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(54, 44, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(55, 45, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(56, 47, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(57, 48, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(58, 42, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(59, 43, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(60, 44, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(61, 45, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(62, 46, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(63, 47, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(64, 48, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(65, 49, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(66, 50, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(67, 53, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(68, 50, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(69, 52, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(70, 53, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(71, 55, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(72, 50, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(73, 51, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(74, 52, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(75, 53, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(76, 55, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(77, 49, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(78, 50, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(79, 52, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(80, 53, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(81, 54, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(82, 55, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(83, 49, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(84, 50, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(85, 51, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(86, 53, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(87, 54, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(88, 55, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(89, 49, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(90, 50, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(91, 52, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(92, 54, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(93, 55, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(94, 50, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(95, 52, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(96, 53, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(97, 49, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(98, 50, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(99, 51, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(100, 52, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(101, 53, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(102, 54, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(103, 55, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(104, 49, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(105, 51, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(106, 53, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(107, 55, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(108, 50, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(109, 52, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(110, 54, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(111, 49, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(112, 50, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(113, 51, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(114, 52, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(115, 53, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(116, 54, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(117, 55, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_hotel_translations`
--

CREATE TABLE `bravo_hotel_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_locations`
--

CREATE TABLE `bravo_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `trip_ideas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_locations`
--

INSERT INTO `bravo_locations` (`id`, `name`, `content`, `slug`, `image_id`, `map_lat`, `map_lng`, `map_zoom`, `status`, `_lft`, `_rgt`, `parent_id`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`, `banner_image_id`, `trip_ideas`) VALUES
(1, 'Paris', 'New York, a city that doesnt sleep, as Frank Sinatra sang. The Big Apple is one of the largest cities in the United States and one of the most popular in the whole country and the world. Millions of tourists visit it every year attracted by its various iconic symbols and its wide range of leisure and cultural offer. New York is the birth place of new trends and developments in many fields such as art, gastronomy, technology,...', 'paris', 106, '48.856613', '2.352222', 12, 'publish', 1, 2, NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 111, '\"[{\\\"title\\\":\\\"Experiencing the best jazz in Harlem, birthplace of bebop\\\",\\\"link\\\":\\\"#\\\",\\\"content\\\":\\\"New Orleans might be the home of jazz, but New York City is where many of the genre\\u2019s greats became stars \\u2013 and Harlem was at the heart of it.The neighborhood experienced a rebirth during the...\\\",\\\"image_id\\\":\\\"112\\\"},{\\\"title\\\":\\\"Reflections from the road: transformative \\u2018Big Trip\\u2019 experiences\\\",\\\"link\\\":\\\"#\\\",\\\"content\\\":\\\"Whether it\\u2019s a gap year after finishing school, a well-earned sabbatical from work or an overseas adventure in celebration of your retirement, a big trip is a rite of passage for every traveller, with myriad life lessons to be ...\\\",\\\"image_id\\\":\\\"113\\\"}]\"'),
(2, 'New York, United States', NULL, 'new-york-united-states', 107, '40.712776', '-74.005974', 12, 'publish', 3, 4, NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(3, 'California', NULL, 'california', 108, '36.778259', '-119.417931', 12, 'publish', 5, 6, NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(4, 'United States', NULL, 'united-states', 109, '37.090240', '-95.712891', 12, 'publish', 7, 8, NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(5, 'Los Angeles', NULL, 'los-angeles', 110, '34.052235', '-118.243683', 12, 'publish', 9, 10, NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(6, 'New Jersey', NULL, 'new-jersey', 106, '40.058323', '-74.405663', 12, 'publish', 11, 12, NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(7, 'San Francisco', NULL, 'san-francisco', 107, '37.774929', '-122.419418', 12, 'publish', 13, 14, NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(8, 'Virginia', NULL, 'virginia', 108, '37.431572', '-78.656891', 12, 'publish', 15, 16, NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bravo_location_translations`
--

CREATE TABLE `bravo_location_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `trip_ideas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_payouts`
--

CREATE TABLE `bravo_payouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_method` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_vendor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_process_by` int(11) DEFAULT NULL,
  `pay_date` timestamp NULL DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_review`
--

CREATE TABLE `bravo_review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_number` int(11) DEFAULT NULL,
  `author_ip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vendor_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_review`
--

INSERT INTO `bravo_review` (`id`, `object_id`, `object_model`, `title`, `content`, `rate_number`, `author_ip`, `status`, `publish_date`, `create_user`, `update_user`, `deleted_at`, `lang`, `created_at`, `updated_at`, `vendor_id`) VALUES
(1, 1, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 12, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(2, 1, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 11, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(3, 1, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(4, 1, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 16, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(5, 2, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 13, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(6, 2, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 8, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(7, 2, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 12, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(8, 2, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(9, 3, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 8, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 6),
(10, 3, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 6),
(11, 4, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 11, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(12, 4, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 8, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(13, 4, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 13, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(14, 4, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 9, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(15, 5, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(16, 5, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 14, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(17, 5, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 11, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(18, 6, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 8, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(19, 6, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 12, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(20, 6, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 11, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(21, 6, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 7, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(22, 7, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 10, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(23, 7, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 14, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(24, 7, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 14, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(25, 7, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 9, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(26, 7, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(27, 8, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 16, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(28, 8, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(29, 8, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(30, 8, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 7, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(31, 9, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 9, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 5),
(32, 9, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 16, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 5),
(33, 10, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 13, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(34, 10, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 10, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(35, 10, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 9, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(36, 10, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 13, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(37, 11, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 5),
(38, 11, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 9, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 5),
(39, 11, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 5),
(40, 12, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(41, 12, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 16, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(42, 12, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 14, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(43, 13, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 16, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 6),
(44, 13, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 8, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 6),
(45, 13, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 15, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 6),
(46, 13, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 14, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 6),
(47, 14, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 13, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(48, 14, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 11, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(49, 14, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 11, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(50, 14, 'tour', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 13, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(51, 15, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 10, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(52, 15, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 8, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(53, 15, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 16, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 4),
(54, 16, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 12, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(55, 16, 'tour', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 14, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(56, 16, 'tour', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 12, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(57, 16, 'tour', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:29', 7, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1),
(58, 1, 'space', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(59, 1, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(60, 1, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(61, 1, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(62, 2, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(63, 2, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(64, 3, 'space', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(65, 3, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(66, 3, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(67, 3, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(68, 3, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(69, 4, 'space', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(70, 4, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(71, 4, 'space', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(72, 4, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(73, 5, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(74, 5, 'space', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(75, 6, 'space', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(76, 6, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(77, 7, 'space', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(78, 7, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(79, 7, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(80, 7, 'space', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(81, 8, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(82, 8, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(83, 8, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(84, 8, 'space', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(85, 8, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(86, 9, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(87, 9, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(88, 9, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(89, 9, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(90, 10, 'space', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(91, 10, 'space', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(92, 10, 'space', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(93, 11, 'space', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(94, 1, 'hotel', 'Good location, quality should be better', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(95, 1, 'hotel', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(96, 1, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(97, 1, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(98, 2, 'hotel', 'Good location, quality should be better', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(99, 2, 'hotel', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(100, 2, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(101, 3, 'hotel', 'Good location, quality should be better', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(102, 3, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(103, 3, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(104, 3, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(105, 4, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(106, 4, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(107, 4, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(108, 4, 'hotel', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(109, 5, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(110, 5, 'hotel', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(111, 6, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(112, 6, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(113, 6, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(114, 7, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(115, 7, 'hotel', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(116, 7, 'hotel', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(117, 7, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(118, 8, 'hotel', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(119, 8, 'hotel', 'Good location, quality should be better', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(120, 9, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(121, 9, 'hotel', 'Good location, quality should be better', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(122, 9, 'hotel', 'Nothing good this time', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1);
INSERT INTO `bravo_review` (`id`, `object_id`, `object_model`, `title`, `content`, `rate_number`, `author_ip`, `status`, `publish_date`, `create_user`, `update_user`, `deleted_at`, `lang`, `created_at`, `updated_at`, `vendor_id`) VALUES
(123, 9, 'hotel', 'Good location, quality should be better', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(124, 10, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(125, 10, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(126, 10, 'hotel', 'Good location, quality should be better', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(127, 10, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(128, 11, 'hotel', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(129, 11, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(130, 11, 'hotel', 'Beautiful spot with a lovely view', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(131, 1, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(132, 1, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(133, 1, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(134, 1, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(135, 2, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(136, 2, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(137, 3, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(138, 3, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(139, 4, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(140, 4, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(141, 4, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(142, 5, 'car', 'Good Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(143, 5, 'car', 'Good Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(144, 6, 'car', 'Good Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(145, 6, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(146, 6, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(147, 6, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(148, 7, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(149, 7, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(150, 7, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(151, 8, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(152, 8, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(153, 8, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(154, 8, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(155, 9, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(156, 9, 'car', 'Good Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(157, 9, 'car', 'Good Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(158, 9, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(159, 10, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(160, 10, 'car', 'Great Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(161, 11, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(162, 11, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(163, 11, 'car', 'Good Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(164, 12, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(165, 12, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(166, 12, 'car', 'Good Car', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 8, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(167, 13, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(168, 13, 'car', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(169, 13, 'car', 'Car was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(170, 1, 'event', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(171, 1, 'event', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(172, 1, 'event', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(173, 2, 'event', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(174, 2, 'event', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(175, 3, 'event', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(176, 3, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(177, 3, 'event', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 5),
(178, 4, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 14, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(179, 4, 'event', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(180, 4, 'event', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(181, 4, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 1),
(182, 5, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(183, 5, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 6),
(184, 6, 'event', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 11, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(185, 6, 'event', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 16, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(186, 6, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(187, 6, 'event', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(188, 7, 'event', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(189, 7, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(190, 7, 'event', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(191, 8, 'event', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 15, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(192, 8, 'event', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(193, 8, 'event', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(194, 8, 'event', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(195, 9, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(196, 9, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(197, 9, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 12, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(198, 9, 'event', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(199, 10, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(200, 10, 'event', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 10, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(201, 10, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 7, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(202, 11, 'event', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 9, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4),
(203, 11, 'event', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 'approved', '2021-10-03 07:17:30', 13, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bravo_review_meta`
--

CREATE TABLE `bravo_review_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review_id` int(11) DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_review_meta`
--

INSERT INTO `bravo_review_meta` (`id`, `review_id`, `object_id`, `object_model`, `name`, `val`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(2, 1, 1, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(3, 1, 1, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(4, 1, 1, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(5, 1, 1, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(6, 2, 1, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(7, 2, 1, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(8, 2, 1, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(9, 2, 1, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(10, 2, 1, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(11, 3, 1, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(12, 3, 1, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(13, 3, 1, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(14, 3, 1, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(15, 3, 1, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(16, 4, 1, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(17, 4, 1, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(18, 4, 1, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(19, 4, 1, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(20, 4, 1, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(21, 5, 2, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(22, 5, 2, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(23, 5, 2, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(24, 5, 2, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(25, 5, 2, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(26, 6, 2, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(27, 6, 2, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(28, 6, 2, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(29, 6, 2, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(30, 6, 2, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(31, 7, 2, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(32, 7, 2, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(33, 7, 2, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(34, 7, 2, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(35, 7, 2, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(36, 8, 2, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(37, 8, 2, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(38, 8, 2, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(39, 8, 2, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(40, 8, 2, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(41, 9, 3, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(42, 9, 3, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(43, 9, 3, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(44, 9, 3, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(45, 9, 3, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(46, 10, 3, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(47, 10, 3, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(48, 10, 3, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(49, 10, 3, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(50, 10, 3, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(51, 11, 4, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(52, 11, 4, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(53, 11, 4, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(54, 11, 4, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(55, 11, 4, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(56, 12, 4, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(57, 12, 4, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(58, 12, 4, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(59, 12, 4, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(60, 12, 4, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(61, 13, 4, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(62, 13, 4, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(63, 13, 4, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(64, 13, 4, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(65, 13, 4, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(66, 14, 4, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(67, 14, 4, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(68, 14, 4, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(69, 14, 4, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(70, 14, 4, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(71, 15, 5, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(72, 15, 5, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(73, 15, 5, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(74, 15, 5, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(75, 15, 5, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(76, 16, 5, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(77, 16, 5, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(78, 16, 5, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(79, 16, 5, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(80, 16, 5, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(81, 17, 5, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(82, 17, 5, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(83, 17, 5, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(84, 17, 5, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(85, 17, 5, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(86, 18, 6, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(87, 18, 6, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(88, 18, 6, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(89, 18, 6, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(90, 18, 6, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(91, 19, 6, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(92, 19, 6, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(93, 19, 6, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(94, 19, 6, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(95, 19, 6, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(96, 20, 6, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(97, 20, 6, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(98, 20, 6, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(99, 20, 6, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(100, 20, 6, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(101, 21, 6, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(102, 21, 6, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(103, 21, 6, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(104, 21, 6, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(105, 21, 6, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(106, 22, 7, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(107, 22, 7, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(108, 22, 7, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(109, 22, 7, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(110, 22, 7, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(111, 23, 7, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(112, 23, 7, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(113, 23, 7, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(114, 23, 7, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(115, 23, 7, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(116, 24, 7, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(117, 24, 7, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(118, 24, 7, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(119, 24, 7, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(120, 24, 7, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(121, 25, 7, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(122, 25, 7, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(123, 25, 7, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(124, 25, 7, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(125, 25, 7, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(126, 26, 7, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(127, 26, 7, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(128, 26, 7, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(129, 26, 7, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(130, 26, 7, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(131, 27, 8, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(132, 27, 8, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(133, 27, 8, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(134, 27, 8, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(135, 27, 8, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(136, 28, 8, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(137, 28, 8, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(138, 28, 8, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(139, 28, 8, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(140, 28, 8, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(141, 29, 8, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(142, 29, 8, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(143, 29, 8, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(144, 29, 8, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(145, 29, 8, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(146, 30, 8, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(147, 30, 8, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(148, 30, 8, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(149, 30, 8, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(150, 30, 8, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(151, 31, 9, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(152, 31, 9, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(153, 31, 9, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(154, 31, 9, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(155, 31, 9, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(156, 32, 9, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(157, 32, 9, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(158, 32, 9, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(159, 32, 9, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(160, 32, 9, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(161, 33, 10, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(162, 33, 10, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(163, 33, 10, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(164, 33, 10, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(165, 33, 10, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(166, 34, 10, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(167, 34, 10, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(168, 34, 10, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(169, 34, 10, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(170, 34, 10, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(171, 35, 10, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(172, 35, 10, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(173, 35, 10, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(174, 35, 10, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(175, 35, 10, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(176, 36, 10, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(177, 36, 10, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(178, 36, 10, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(179, 36, 10, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(180, 36, 10, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(181, 37, 11, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(182, 37, 11, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(183, 37, 11, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(184, 37, 11, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(185, 37, 11, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(186, 38, 11, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(187, 38, 11, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(188, 38, 11, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(189, 38, 11, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(190, 38, 11, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(191, 39, 11, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(192, 39, 11, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(193, 39, 11, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(194, 39, 11, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(195, 39, 11, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(196, 40, 12, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(197, 40, 12, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(198, 40, 12, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(199, 40, 12, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(200, 40, 12, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(201, 41, 12, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(202, 41, 12, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(203, 41, 12, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(204, 41, 12, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(205, 41, 12, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(206, 42, 12, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(207, 42, 12, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(208, 42, 12, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(209, 42, 12, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(210, 42, 12, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(211, 43, 13, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(212, 43, 13, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(213, 43, 13, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(214, 43, 13, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(215, 43, 13, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(216, 44, 13, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(217, 44, 13, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(218, 44, 13, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(219, 44, 13, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(220, 44, 13, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(221, 45, 13, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(222, 45, 13, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(223, 45, 13, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(224, 45, 13, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(225, 45, 13, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(226, 46, 13, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(227, 46, 13, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(228, 46, 13, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(229, 46, 13, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(230, 46, 13, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(231, 47, 14, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(232, 47, 14, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(233, 47, 14, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(234, 47, 14, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(235, 47, 14, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(236, 48, 14, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(237, 48, 14, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(238, 48, 14, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(239, 48, 14, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(240, 48, 14, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(241, 49, 14, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(242, 49, 14, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(243, 49, 14, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(244, 49, 14, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(245, 49, 14, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(246, 50, 14, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(247, 50, 14, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(248, 50, 14, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(249, 50, 14, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(250, 50, 14, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(251, 51, 15, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(252, 51, 15, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(253, 51, 15, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(254, 51, 15, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(255, 51, 15, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(256, 52, 15, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(257, 52, 15, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(258, 52, 15, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(259, 52, 15, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(260, 52, 15, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(261, 53, 15, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(262, 53, 15, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(263, 53, 15, 'tour', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(264, 53, 15, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(265, 53, 15, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(266, 54, 16, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(267, 54, 16, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(268, 54, 16, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(269, 54, 16, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(270, 54, 16, 'tour', 'Safety', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(271, 55, 16, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(272, 55, 16, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(273, 55, 16, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(274, 55, 16, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(275, 55, 16, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(276, 56, 16, 'tour', 'Service', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(277, 56, 16, 'tour', 'Organization', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(278, 56, 16, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(279, 56, 16, 'tour', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(280, 56, 16, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(281, 57, 16, 'tour', 'Service', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(282, 57, 16, 'tour', 'Organization', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(283, 57, 16, 'tour', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(284, 57, 16, 'tour', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(285, 57, 16, 'tour', 'Safety', '4', 1, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(286, 58, 1, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(287, 58, 1, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(288, 58, 1, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(289, 58, 1, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(290, 58, 1, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(291, 59, 1, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(292, 59, 1, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(293, 59, 1, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(294, 59, 1, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(295, 59, 1, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(296, 60, 1, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(297, 60, 1, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(298, 60, 1, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(299, 60, 1, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(300, 60, 1, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(301, 61, 1, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(302, 61, 1, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(303, 61, 1, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(304, 61, 1, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(305, 61, 1, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(306, 62, 2, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(307, 62, 2, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(308, 62, 2, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(309, 62, 2, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(310, 62, 2, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(311, 63, 2, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(312, 63, 2, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(313, 63, 2, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(314, 63, 2, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(315, 63, 2, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(316, 64, 3, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(317, 64, 3, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(318, 64, 3, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(319, 64, 3, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(320, 64, 3, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(321, 65, 3, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(322, 65, 3, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(323, 65, 3, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(324, 65, 3, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(325, 65, 3, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(326, 66, 3, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(327, 66, 3, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(328, 66, 3, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(329, 66, 3, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(330, 66, 3, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(331, 67, 3, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(332, 67, 3, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(333, 67, 3, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(334, 67, 3, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(335, 67, 3, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(336, 68, 3, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(337, 68, 3, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(338, 68, 3, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(339, 68, 3, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(340, 68, 3, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(341, 69, 4, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(342, 69, 4, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(343, 69, 4, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(344, 69, 4, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(345, 69, 4, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(346, 70, 4, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(347, 70, 4, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(348, 70, 4, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(349, 70, 4, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(350, 70, 4, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(351, 71, 4, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(352, 71, 4, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(353, 71, 4, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(354, 71, 4, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(355, 71, 4, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(356, 72, 4, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(357, 72, 4, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(358, 72, 4, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(359, 72, 4, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(360, 72, 4, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(361, 73, 5, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(362, 73, 5, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(363, 73, 5, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(364, 73, 5, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(365, 73, 5, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(366, 74, 5, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(367, 74, 5, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(368, 74, 5, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(369, 74, 5, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(370, 74, 5, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(371, 75, 6, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(372, 75, 6, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(373, 75, 6, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(374, 75, 6, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(375, 75, 6, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(376, 76, 6, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(377, 76, 6, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(378, 76, 6, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(379, 76, 6, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(380, 76, 6, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(381, 77, 7, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(382, 77, 7, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(383, 77, 7, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(384, 77, 7, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(385, 77, 7, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(386, 78, 7, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(387, 78, 7, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(388, 78, 7, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(389, 78, 7, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(390, 78, 7, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(391, 79, 7, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(392, 79, 7, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(393, 79, 7, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(394, 79, 7, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(395, 79, 7, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(396, 80, 7, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(397, 80, 7, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(398, 80, 7, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(399, 80, 7, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(400, 80, 7, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(401, 81, 8, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(402, 81, 8, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(403, 81, 8, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(404, 81, 8, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(405, 81, 8, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(406, 82, 8, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(407, 82, 8, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(408, 82, 8, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(409, 82, 8, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(410, 82, 8, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(411, 83, 8, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(412, 83, 8, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(413, 83, 8, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(414, 83, 8, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(415, 83, 8, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(416, 84, 8, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(417, 84, 8, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(418, 84, 8, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(419, 84, 8, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(420, 84, 8, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(421, 85, 8, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(422, 85, 8, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(423, 85, 8, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(424, 85, 8, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(425, 85, 8, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(426, 86, 9, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(427, 86, 9, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(428, 86, 9, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(429, 86, 9, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(430, 86, 9, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(431, 87, 9, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(432, 87, 9, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(433, 87, 9, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(434, 87, 9, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(435, 87, 9, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(436, 88, 9, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(437, 88, 9, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(438, 88, 9, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(439, 88, 9, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(440, 88, 9, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(441, 89, 9, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(442, 89, 9, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(443, 89, 9, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(444, 89, 9, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(445, 89, 9, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(446, 90, 10, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(447, 90, 10, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(448, 90, 10, 'space', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(449, 90, 10, 'space', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(450, 90, 10, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(451, 91, 10, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(452, 91, 10, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(453, 91, 10, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(454, 91, 10, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(455, 91, 10, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(456, 92, 10, 'space', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(457, 92, 10, 'space', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(458, 92, 10, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(459, 92, 10, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(460, 92, 10, 'space', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(461, 93, 11, 'space', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(462, 93, 11, 'space', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(463, 93, 11, 'space', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(464, 93, 11, 'space', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(465, 93, 11, 'space', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(466, 94, 1, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(467, 94, 1, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(468, 94, 1, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(469, 94, 1, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(470, 94, 1, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(471, 95, 1, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(472, 95, 1, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(473, 95, 1, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(474, 95, 1, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(475, 95, 1, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(476, 96, 1, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(477, 96, 1, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(478, 96, 1, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(479, 96, 1, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(480, 96, 1, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(481, 97, 1, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(482, 97, 1, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(483, 97, 1, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(484, 97, 1, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(485, 97, 1, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(486, 98, 2, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(487, 98, 2, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(488, 98, 2, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(489, 98, 2, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(490, 98, 2, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(491, 99, 2, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(492, 99, 2, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(493, 99, 2, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(494, 99, 2, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(495, 99, 2, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(496, 100, 2, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(497, 100, 2, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(498, 100, 2, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(499, 100, 2, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(500, 100, 2, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(501, 101, 3, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(502, 101, 3, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(503, 101, 3, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(504, 101, 3, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(505, 101, 3, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(506, 102, 3, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(507, 102, 3, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(508, 102, 3, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(509, 102, 3, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(510, 102, 3, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(511, 103, 3, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(512, 103, 3, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(513, 103, 3, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(514, 103, 3, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(515, 103, 3, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(516, 104, 3, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(517, 104, 3, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(518, 104, 3, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(519, 104, 3, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(520, 104, 3, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(521, 105, 4, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(522, 105, 4, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(523, 105, 4, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(524, 105, 4, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(525, 105, 4, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(526, 106, 4, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(527, 106, 4, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(528, 106, 4, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(529, 106, 4, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(530, 106, 4, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(531, 107, 4, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(532, 107, 4, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(533, 107, 4, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(534, 107, 4, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(535, 107, 4, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(536, 108, 4, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30');
INSERT INTO `bravo_review_meta` (`id`, `review_id`, `object_id`, `object_model`, `name`, `val`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(537, 108, 4, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(538, 108, 4, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(539, 108, 4, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(540, 108, 4, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(541, 109, 5, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(542, 109, 5, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(543, 109, 5, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(544, 109, 5, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(545, 109, 5, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(546, 110, 5, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(547, 110, 5, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(548, 110, 5, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(549, 110, 5, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(550, 110, 5, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(551, 111, 6, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(552, 111, 6, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(553, 111, 6, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(554, 111, 6, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(555, 111, 6, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(556, 112, 6, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(557, 112, 6, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(558, 112, 6, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(559, 112, 6, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(560, 112, 6, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(561, 113, 6, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(562, 113, 6, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(563, 113, 6, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(564, 113, 6, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(565, 113, 6, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(566, 114, 7, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(567, 114, 7, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(568, 114, 7, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(569, 114, 7, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(570, 114, 7, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(571, 115, 7, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(572, 115, 7, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(573, 115, 7, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(574, 115, 7, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(575, 115, 7, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(576, 116, 7, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(577, 116, 7, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(578, 116, 7, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(579, 116, 7, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(580, 116, 7, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(581, 117, 7, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(582, 117, 7, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(583, 117, 7, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(584, 117, 7, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(585, 117, 7, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(586, 118, 8, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(587, 118, 8, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(588, 118, 8, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(589, 118, 8, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(590, 118, 8, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(591, 119, 8, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(592, 119, 8, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(593, 119, 8, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(594, 119, 8, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(595, 119, 8, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(596, 120, 9, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(597, 120, 9, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(598, 120, 9, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(599, 120, 9, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(600, 120, 9, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(601, 121, 9, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(602, 121, 9, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(603, 121, 9, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(604, 121, 9, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(605, 121, 9, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(606, 122, 9, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(607, 122, 9, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(608, 122, 9, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(609, 122, 9, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(610, 122, 9, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(611, 123, 9, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(612, 123, 9, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(613, 123, 9, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(614, 123, 9, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(615, 123, 9, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(616, 124, 10, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(617, 124, 10, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(618, 124, 10, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(619, 124, 10, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(620, 124, 10, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(621, 125, 10, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(622, 125, 10, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(623, 125, 10, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(624, 125, 10, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(625, 125, 10, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(626, 126, 10, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(627, 126, 10, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(628, 126, 10, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(629, 126, 10, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(630, 126, 10, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(631, 127, 10, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(632, 127, 10, 'hotel', 'Location', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(633, 127, 10, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(634, 127, 10, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(635, 127, 10, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(636, 128, 11, 'hotel', 'Sleep', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(637, 128, 11, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(638, 128, 11, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(639, 128, 11, 'hotel', 'Clearness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(640, 128, 11, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(641, 129, 11, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(642, 129, 11, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(643, 129, 11, 'hotel', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(644, 129, 11, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(645, 129, 11, 'hotel', 'Rooms', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(646, 130, 11, 'hotel', 'Sleep', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(647, 130, 11, 'hotel', 'Location', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(648, 130, 11, 'hotel', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(649, 130, 11, 'hotel', 'Clearness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(650, 130, 11, 'hotel', 'Rooms', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(651, 131, 1, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(652, 131, 1, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(653, 131, 1, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(654, 131, 1, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(655, 131, 1, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(656, 132, 1, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(657, 132, 1, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(658, 132, 1, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(659, 132, 1, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(660, 132, 1, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(661, 133, 1, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(662, 133, 1, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(663, 133, 1, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(664, 133, 1, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(665, 133, 1, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(666, 134, 1, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(667, 134, 1, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(668, 134, 1, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(669, 134, 1, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(670, 134, 1, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(671, 135, 2, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(672, 135, 2, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(673, 135, 2, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(674, 135, 2, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(675, 135, 2, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(676, 136, 2, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(677, 136, 2, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(678, 136, 2, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(679, 136, 2, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(680, 136, 2, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(681, 137, 3, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(682, 137, 3, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(683, 137, 3, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(684, 137, 3, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(685, 137, 3, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(686, 138, 3, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(687, 138, 3, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(688, 138, 3, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(689, 138, 3, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(690, 138, 3, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(691, 139, 4, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(692, 139, 4, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(693, 139, 4, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(694, 139, 4, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(695, 139, 4, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(696, 140, 4, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(697, 140, 4, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(698, 140, 4, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(699, 140, 4, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(700, 140, 4, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(701, 141, 4, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(702, 141, 4, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(703, 141, 4, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(704, 141, 4, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(705, 141, 4, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(706, 142, 5, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(707, 142, 5, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(708, 142, 5, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(709, 142, 5, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(710, 142, 5, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(711, 143, 5, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(712, 143, 5, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(713, 143, 5, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(714, 143, 5, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(715, 143, 5, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(716, 144, 6, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(717, 144, 6, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(718, 144, 6, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(719, 144, 6, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(720, 144, 6, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(721, 145, 6, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(722, 145, 6, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(723, 145, 6, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(724, 145, 6, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(725, 145, 6, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(726, 146, 6, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(727, 146, 6, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(728, 146, 6, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(729, 146, 6, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(730, 146, 6, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(731, 147, 6, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(732, 147, 6, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(733, 147, 6, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(734, 147, 6, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(735, 147, 6, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(736, 148, 7, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(737, 148, 7, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(738, 148, 7, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(739, 148, 7, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(740, 148, 7, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(741, 149, 7, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(742, 149, 7, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(743, 149, 7, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(744, 149, 7, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(745, 149, 7, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(746, 150, 7, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(747, 150, 7, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(748, 150, 7, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(749, 150, 7, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(750, 150, 7, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(751, 151, 8, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(752, 151, 8, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(753, 151, 8, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(754, 151, 8, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(755, 151, 8, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(756, 152, 8, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(757, 152, 8, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(758, 152, 8, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(759, 152, 8, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(760, 152, 8, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(761, 153, 8, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(762, 153, 8, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(763, 153, 8, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(764, 153, 8, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(765, 153, 8, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(766, 154, 8, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(767, 154, 8, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(768, 154, 8, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(769, 154, 8, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(770, 154, 8, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(771, 155, 9, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(772, 155, 9, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(773, 155, 9, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(774, 155, 9, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(775, 155, 9, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(776, 156, 9, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(777, 156, 9, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(778, 156, 9, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(779, 156, 9, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(780, 156, 9, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(781, 157, 9, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(782, 157, 9, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(783, 157, 9, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(784, 157, 9, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(785, 157, 9, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(786, 158, 9, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(787, 158, 9, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(788, 158, 9, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(789, 158, 9, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(790, 158, 9, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(791, 159, 10, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(792, 159, 10, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(793, 159, 10, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(794, 159, 10, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(795, 159, 10, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(796, 160, 10, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(797, 160, 10, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(798, 160, 10, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(799, 160, 10, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(800, 160, 10, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(801, 161, 11, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(802, 161, 11, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(803, 161, 11, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(804, 161, 11, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(805, 161, 11, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(806, 162, 11, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(807, 162, 11, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(808, 162, 11, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(809, 162, 11, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(810, 162, 11, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(811, 163, 11, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(812, 163, 11, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(813, 163, 11, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(814, 163, 11, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(815, 163, 11, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(816, 164, 12, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(817, 164, 12, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(818, 164, 12, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(819, 164, 12, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(820, 164, 12, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(821, 165, 12, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(822, 165, 12, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(823, 165, 12, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(824, 165, 12, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(825, 165, 12, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(826, 166, 12, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(827, 166, 12, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(828, 166, 12, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(829, 166, 12, 'car', 'Facility', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(830, 166, 12, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(831, 167, 13, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(832, 167, 13, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(833, 167, 13, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(834, 167, 13, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(835, 167, 13, 'car', 'Aftercare', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(836, 168, 13, 'car', 'Equipment', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(837, 168, 13, 'car', 'Comfortable', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(838, 168, 13, 'car', 'Climate Control', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(839, 168, 13, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(840, 168, 13, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(841, 169, 13, 'car', 'Equipment', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(842, 169, 13, 'car', 'Comfortable', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(843, 169, 13, 'car', 'Climate Control', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(844, 169, 13, 'car', 'Facility', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(845, 169, 13, 'car', 'Aftercare', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(846, 170, 1, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(847, 170, 1, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(848, 170, 1, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(849, 170, 1, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(850, 170, 1, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(851, 171, 1, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(852, 171, 1, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(853, 171, 1, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(854, 171, 1, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(855, 171, 1, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(856, 172, 1, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(857, 172, 1, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(858, 172, 1, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(859, 172, 1, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(860, 172, 1, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(861, 173, 2, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(862, 173, 2, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(863, 173, 2, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(864, 173, 2, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(865, 173, 2, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(866, 174, 2, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(867, 174, 2, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(868, 174, 2, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(869, 174, 2, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(870, 174, 2, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(871, 175, 3, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(872, 175, 3, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(873, 175, 3, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(874, 175, 3, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(875, 175, 3, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(876, 176, 3, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(877, 176, 3, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(878, 176, 3, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(879, 176, 3, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(880, 176, 3, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(881, 177, 3, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(882, 177, 3, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(883, 177, 3, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(884, 177, 3, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(885, 177, 3, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(886, 178, 4, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(887, 178, 4, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(888, 178, 4, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(889, 178, 4, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(890, 178, 4, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(891, 179, 4, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(892, 179, 4, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(893, 179, 4, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(894, 179, 4, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(895, 179, 4, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(896, 180, 4, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(897, 180, 4, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(898, 180, 4, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(899, 180, 4, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(900, 180, 4, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(901, 181, 4, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(902, 181, 4, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(903, 181, 4, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(904, 181, 4, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(905, 181, 4, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(906, 182, 5, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(907, 182, 5, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(908, 182, 5, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(909, 182, 5, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(910, 182, 5, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(911, 183, 5, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(912, 183, 5, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(913, 183, 5, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(914, 183, 5, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(915, 183, 5, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(916, 184, 6, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(917, 184, 6, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(918, 184, 6, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(919, 184, 6, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(920, 184, 6, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(921, 185, 6, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(922, 185, 6, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(923, 185, 6, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(924, 185, 6, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(925, 185, 6, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(926, 186, 6, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(927, 186, 6, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(928, 186, 6, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(929, 186, 6, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(930, 186, 6, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(931, 187, 6, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(932, 187, 6, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(933, 187, 6, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(934, 187, 6, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(935, 187, 6, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(936, 188, 7, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(937, 188, 7, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(938, 188, 7, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(939, 188, 7, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(940, 188, 7, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(941, 189, 7, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(942, 189, 7, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(943, 189, 7, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(944, 189, 7, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(945, 189, 7, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(946, 190, 7, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(947, 190, 7, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(948, 190, 7, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(949, 190, 7, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(950, 190, 7, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(951, 191, 8, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(952, 191, 8, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(953, 191, 8, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(954, 191, 8, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(955, 191, 8, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(956, 192, 8, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(957, 192, 8, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(958, 192, 8, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(959, 192, 8, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(960, 192, 8, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(961, 193, 8, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(962, 193, 8, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(963, 193, 8, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(964, 193, 8, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(965, 193, 8, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(966, 194, 8, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(967, 194, 8, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(968, 194, 8, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(969, 194, 8, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(970, 194, 8, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(971, 195, 9, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(972, 195, 9, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(973, 195, 9, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(974, 195, 9, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(975, 195, 9, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(976, 196, 9, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(977, 196, 9, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(978, 196, 9, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(979, 196, 9, 'event', 'Area Expert', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(980, 196, 9, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(981, 197, 9, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(982, 197, 9, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(983, 197, 9, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(984, 197, 9, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(985, 197, 9, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(986, 198, 9, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(987, 198, 9, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(988, 198, 9, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(989, 198, 9, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(990, 198, 9, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(991, 199, 10, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(992, 199, 10, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(993, 199, 10, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(994, 199, 10, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(995, 199, 10, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(996, 200, 10, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(997, 200, 10, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(998, 200, 10, 'event', 'Friendliness', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(999, 200, 10, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1000, 200, 10, 'event', 'Safety', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1001, 201, 10, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1002, 201, 10, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1003, 201, 10, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1004, 201, 10, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1005, 201, 10, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1006, 202, 11, 'event', 'Service', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1007, 202, 11, 'event', 'Organization', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1008, 202, 11, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1009, 202, 11, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1010, 202, 11, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1011, 203, 11, 'event', 'Service', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1012, 203, 11, 'event', 'Organization', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1013, 203, 11, 'event', 'Friendliness', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1014, 203, 11, 'event', 'Area Expert', '5', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(1015, 203, 11, 'event', 'Safety', '4', 1, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_seo`
--

CREATE TABLE `bravo_seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_index` tinyint(4) DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_image` int(11) DEFAULT NULL,
  `seo_share` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_spaces`
--

CREATE TABLE `bravo_spaces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `sale_price` decimal(12,2) DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `allow_children` tinyint(4) DEFAULT 0,
  `allow_infant` tinyint(4) DEFAULT 0,
  `max_guests` int(11) DEFAULT 0,
  `bed` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `square` int(11) DEFAULT NULL,
  `enable_extra_price` tinyint(4) DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_by_days` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_state` tinyint(4) DEFAULT 1,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `review_score` decimal(2,1) DEFAULT NULL,
  `ical_import_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_spaces`
--

INSERT INTO `bravo_spaces` (`id`, `title`, `slug`, `content`, `image_id`, `banner_image_id`, `location_id`, `address`, `map_lat`, `map_lng`, `map_zoom`, `is_featured`, `gallery`, `video`, `faqs`, `price`, `sale_price`, `is_instant`, `allow_children`, `allow_infant`, `max_guests`, `bed`, `bathroom`, `square`, `enable_extra_price`, `extra_price`, `discount_by_days`, `status`, `default_state`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`, `review_score`, `ical_import_url`) VALUES
(1, 'LUXURY STUDIO', 'luxury-studio', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 63, 85, 2, 'Arrondissement de Paris', '51.528564', '-0.203010', 12, 0, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '300.00', '305.00', 1, 0, 0, 10, 7, 1, 138, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:30', '4.5', NULL),
(2, 'LUXURY APARTMENT', 'luxury-apartment', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 64, 84, 3, 'Porte de Vanves', '51.519592', '-0.226346', 12, 0, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '900.00', '0.00', 1, 0, 0, 9, 3, 3, 165, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '5.0', NULL),
(3, 'BEAUTIFUL LOFT', 'beautiful-loft', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 65, 85, 3, 'Porte de Vanves', '51.461875', '-0.211246', 12, 0, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '650.00', '0.00', 0, 0, 0, 6, 9, 8, 163, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.8', NULL),
(4, 'BEST OF WEST VILLAGE', 'best-of-west-village', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 66, 84, 4, 'Porte de Vanves', '51.427638', '-0.170752', 12, 1, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '800.00', '0.00', 0, 0, 0, 9, 10, 5, 144, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5', NULL),
(5, 'DUPLEX GREENWICH', 'duplex-greenwich', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 67, 83, 1, 'Porte de Vanves', '51.442192', '-0.043778', 12, 1, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '220.00', '0.00', 1, 0, 0, 5, 3, 8, 155, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5', NULL),
(6, 'THE MEATPACKING SUITES', 'the-meatpacking-suites', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 68, 84, 1, 'Porte de Vanves', '51.475135', '0.003592', 12, 1, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '320.00', '0.00', 1, 0, 0, 8, 7, 8, 191, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5', NULL),
(7, 'EAST VILLAGE', 'east-village', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 69, 83, 1, 'Porte de Vanves', '51.524292', '-0.022489', 12, 0, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '300.00', '260.00', 1, 0, 0, 8, 6, 7, 172, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.5', NULL),
(8, 'PARIS GREENWICH VILLA', 'paris-greenwich-villa', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 70, 84, 1, 'Porte de Vanves', '51.556749', '-0.091124', 12, 1, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '500.00', '0.00', 0, 0, 0, 9, 7, 4, 121, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.8', NULL),
(9, 'LUXURY SINGLE', 'luxury-single', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 71, 83, 1, 'Porte de Vanves', '51.569555', '0.012563', 12, 0, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '400.00', '350.00', 1, 0, 0, 9, 5, 7, 136, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.0', NULL),
(10, 'LILY DALE VILLAGE', 'lily-dale-village', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 72, 85, 1, 'Porte de Vanves', '51.517883', '-0.134314', 12, 0, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '250.00', '0.00', 1, 0, 0, 8, 4, 8, 200, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '4.3', NULL),
(11, 'STAY GREENWICH VILLAGE', 'stay-greenwich-village', '<p>Libero sem vitae sed donec conubia integer nisi integer rhoncus imperdiet orci odio libero est integer a integer tincidunt sollicitudin blandit fusce nibh leo vulputate lobortis egestas dapibus faucibus metus conubia maecenas cras potenti cum hac arcu rhoncus nullam eros dictum torquent integer cursus bibendum sem sociis molestie tellus purus</p><p>Quam fusce convallis ipsum malesuada amet velit aliquam urna nullam vehicula fermentum id morbi dis magnis porta sagittis euismod etiam</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 73, 84, 1, 'Porte de Vanves', '51.514892', '-0.176181', 12, 1, '76,77,78,79,80,81,82', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', '300.00', '150.00', 0, 0, 0, 5, 10, 3, 162, 1, '[{\"name\":\"Lawn garden\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Clearning\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Breakfasts\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, 'publish', 1, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', '5.0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bravo_space_dates`
--

CREATE TABLE `bravo_space_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `max_guests` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT 0,
  `note_to_customer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_space_term`
--

CREATE TABLE `bravo_space_term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_space_term`
--

INSERT INTO `bravo_space_term` (`id`, `term_id`, `target_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 29, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(2, 30, 1, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(3, 26, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(4, 27, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(5, 28, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(6, 29, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(7, 30, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(8, 31, 2, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(9, 26, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(10, 27, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(11, 28, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(12, 29, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(13, 31, 3, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(14, 26, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(15, 29, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(16, 30, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(17, 31, 4, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(18, 27, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(19, 28, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(20, 29, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(21, 30, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(22, 31, 5, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(23, 26, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(24, 27, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(25, 28, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(26, 29, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(27, 30, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(28, 31, 6, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(29, 26, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(30, 30, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(31, 31, 7, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(32, 27, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(33, 28, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(34, 30, 8, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(35, 26, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(36, 27, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(37, 29, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(38, 31, 9, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(39, 26, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(40, 27, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(41, 28, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(42, 30, 10, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(43, 27, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(44, 28, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(45, 29, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30'),
(46, 31, 11, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_space_translations`
--

CREATE TABLE `bravo_space_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_terms`
--

CREATE TABLE `bravo_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_terms`
--

INSERT INTO `bravo_terms` (`id`, `name`, `content`, `attr_id`, `slug`, `create_user`, `update_user`, `origin_id`, `lang`, `created_at`, `updated_at`, `deleted_at`, `image_id`, `icon`) VALUES
(1, 'Cultural', NULL, 1, 'cultural', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(2, 'Nature & Adventure', NULL, 1, 'nature-adventure', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(3, 'Marine', NULL, 1, 'marine', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(4, 'Independent', NULL, 1, 'independent', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(5, 'Activities', NULL, 1, 'activities', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(6, 'Festival & Events', NULL, 1, 'festival-events', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(7, 'Special Interest', NULL, 1, 'special-interest', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(8, 'Wifi', NULL, 2, 'wifi', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(9, 'Gymnasium', NULL, 2, 'gymnasium', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(10, 'Mountain Bike', NULL, 2, 'mountain-bike', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(11, 'Satellite Office', NULL, 2, 'satellite-office', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(12, 'Staff Lounge', NULL, 2, 'staff-lounge', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(13, 'Golf Cages', NULL, 2, 'golf-cages', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(14, 'Aerobics Room', NULL, 2, 'aerobics-room', NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL, NULL),
(15, 'Auditorium', NULL, 3, 'auditorium', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(16, 'Bar', NULL, 3, 'bar', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(17, 'Cafe', NULL, 3, 'cafe', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(18, 'Ballroom', NULL, 3, 'ballroom', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(19, 'Dance Studio', NULL, 3, 'dance-studio', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(20, 'Office', NULL, 3, 'office', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(21, 'Party Hall', NULL, 3, 'party-hall', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(22, 'Recording Studio', NULL, 3, 'recording-studio', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(23, 'Yoga Studio', NULL, 3, 'yoga-studio', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(24, 'Villa', NULL, 3, 'villa', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(25, 'Warehouse', NULL, 3, 'warehouse', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(26, 'Air Conditioning', NULL, 4, 'air-conditioning', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 86, NULL),
(27, 'Breakfast', NULL, 4, 'breakfast', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 87, NULL),
(28, 'Kitchen', NULL, 4, 'kitchen', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 88, NULL),
(29, 'Parking', NULL, 4, 'parking', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 89, NULL),
(30, 'Pool', NULL, 4, 'pool', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 90, NULL),
(31, 'Wi-Fi Internet', NULL, 4, 'wi-fi-internet', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 91, NULL),
(32, 'Apartments', NULL, 5, 'apartments', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(33, 'Hotels', NULL, 5, 'hotels', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(34, 'Homestays', NULL, 5, 'homestays', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(35, 'Villas', NULL, 5, 'villas', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(36, 'Boats', NULL, 5, 'boats', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(37, 'Motels', NULL, 5, 'motels', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(38, 'Resorts', NULL, 5, 'resorts', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(39, 'Lodges', NULL, 5, 'lodges', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(40, 'Holiday homes', NULL, 5, 'holiday-homes', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(41, 'Cruises', NULL, 5, 'cruises', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(42, 'Wake-up call', NULL, 6, 'wake-up-call', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-wall-clock'),
(43, 'Car hire', NULL, 6, 'car-hire', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-car-alt-3'),
(44, 'Bicycle hire', NULL, 6, 'bicycle-hire', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-bicycle-alt-2'),
(45, 'Flat Tv', NULL, 6, 'flat-tv', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-imac'),
(46, 'Laundry and dry cleaning', NULL, 6, 'laundry-and-dry-cleaning', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-recycle-alt'),
(47, 'Internet – Wifi', NULL, 6, 'internet-wifi', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-wifi-alt'),
(48, 'Coffee and tea', NULL, 6, 'coffee-and-tea', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-tea'),
(49, 'Havana Lobby bar', NULL, 7, 'havana-lobby-bar', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(50, 'Fiesta Restaurant', NULL, 7, 'fiesta-restaurant', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(51, 'Hotel transport services', NULL, 7, 'hotel-transport-services', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(52, 'Free luggage deposit', NULL, 7, 'free-luggage-deposit', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(53, 'Laundry Services', NULL, 7, 'laundry-services', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(54, 'Pets welcome', NULL, 7, 'pets-welcome', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(55, 'Tickets', NULL, 7, 'tickets', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(56, 'Wake-up call', NULL, 8, 'wake-up-call-1', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-wall-clock'),
(57, 'Flat Tv', NULL, 8, 'flat-tv-1', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-imac'),
(58, 'Laundry and dry cleaning', NULL, 8, 'laundry-and-dry-cleaning-1', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-recycle-alt'),
(59, 'Internet – Wifi', NULL, 8, 'internet-wifi-1', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-wifi-alt'),
(60, 'Coffee and tea', NULL, 8, 'coffee-and-tea-1', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, 'icofont-tea'),
(61, 'Convertibles', NULL, 9, 'convertibles', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 123, NULL),
(62, 'Coupes', NULL, 9, 'coupes', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 124, NULL),
(63, 'Hatchbacks', NULL, 9, 'hatchbacks', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 125, NULL),
(64, 'Minivans', NULL, 9, 'minivans', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 126, NULL),
(65, 'Sedan', NULL, 9, 'sedan', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 127, NULL),
(66, 'SUVs', NULL, 9, 'suvs', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 128, NULL),
(67, 'Trucks', NULL, 9, 'trucks', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 129, NULL),
(68, 'Wagons', NULL, 9, 'wagons', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 130, NULL),
(69, 'Airbag', NULL, 10, 'airbag', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 136, NULL),
(70, 'FM Radio', NULL, 10, 'fm-radio', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 137, NULL),
(71, 'Power Windows', NULL, 10, 'power-windows', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 141, NULL),
(72, 'Sensor', NULL, 10, 'sensor', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 138, NULL),
(73, 'Speed Km', NULL, 10, 'speed-km', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 139, NULL),
(74, 'Steering Wheel', NULL, 10, 'steering-wheel', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, 140, NULL),
(75, 'Field Day', NULL, 11, 'field-day', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(76, 'Glastonbury', NULL, 11, 'glastonbury', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(77, 'Green Man', NULL, 11, 'green-man', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(78, 'Latitude', NULL, 11, 'latitude', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(79, 'Boomtown', NULL, 11, 'boomtown', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(80, 'Wilderness', NULL, 11, 'wilderness', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(81, 'Exit Festival', NULL, 11, 'exit-festival', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL),
(82, 'Primavera Sound', NULL, 11, 'primavera-sound', NULL, NULL, NULL, NULL, '2021-10-03 01:47:30', '2021-10-03 01:47:30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bravo_terms_translations`
--

CREATE TABLE `bravo_terms_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_tours`
--

CREATE TABLE `bravo_tours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `sale_price` decimal(12,2) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `min_people` int(11) DEFAULT NULL,
  `max_people` int(11) DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `default_state` tinyint(4) DEFAULT 1,
  `include` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exclude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itinerary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_score` decimal(2,1) DEFAULT NULL,
  `ical_import_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_tours`
--

INSERT INTO `bravo_tours` (`id`, `title`, `slug`, `content`, `image_id`, `banner_image_id`, `short_desc`, `category_id`, `location_id`, `address`, `map_lat`, `map_lng`, `map_zoom`, `is_featured`, `gallery`, `video`, `price`, `sale_price`, `duration`, `min_people`, `max_people`, `faqs`, `status`, `publish_date`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`, `default_state`, `include`, `exclude`, `itinerary`, `review_score`, `ical_import_url`) VALUES
(1, 'American Parks Trail end Rapid City', 'american-parks-trail', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 21, 44, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 4, 1, 'Arrondissement de Paris', '48.852754', '2.339155', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2000.00', '137.00', 6, 1, 19, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.0', NULL),
(2, 'New York: Museum of Modern Art', 'new-york-museum-of-modern-art', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 22, 45, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 4, 1, 'Porte de Vanves', '48.853917', '2.307199', 12, 1, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '900.00', '413.00', 7, 1, 14, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.5', NULL),
(3, 'Los Angeles to San Francisco Express ', 'los-angeles-to-san-francisco-express', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 23, 46, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 4, 1, 'Petit-Montrouge', '48.884900', '2.346377', 12, 1, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '1500.00', '178.00', 4, 1, 10, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 6, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.5', NULL),
(4, 'Paris Vacation Travel ', 'paris-vacation-travel', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 24, 47, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 3, 2, 'New York', '40.707891', '-74.008825', 12, 1, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '850.00', '621.00', 9, 1, 17, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.3', NULL),
(5, 'Southwest States (Ex Los Angeles) ', 'southwest-states', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 25, 48, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 2, 2, 'Regal Cinemas Battery Park 11', '40.714578', '-73.983888', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '1900.00', '606.00', 6, 1, 19, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 4, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.3', NULL),
(6, 'Eastern Discovery (Start New Orleans)', 'eastern-discovery-start-new-orleans', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 26, 49, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 4, 2, 'Prince St Station', '40.720161', '-74.009628', 12, 1, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '921.00', 7, 1, 14, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 4, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.3', NULL),
(7, 'Eastern Discovery', 'eastern-discovery', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 27, 50, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 4, 2, 'Pier 36 New York', '40.708581', '-73.998817', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '1269.00', 4, 1, 10, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 4, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.8', NULL),
(8, 'Pure Luxe in Punta Mita', 'pure-luxe-in-punta-mita', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 28, 51, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 3, 3, 'Trimmer Springs Rd, Sanger', '36.822484', '-119.365266', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '1266.00', 5, 1, 16, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 4, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.8', NULL),
(9, 'Tastes and Sounds of the South 2019', 'tastes-and-sounds-of-the-south-2019', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 29, 52, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 1, 4, 'United States', '37.040023', '-95.643144', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '1685.00', 4, 1, 11, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 5, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '5.0', NULL),
(10, 'Giverny and Versailles Small Group Day Trip', 'giverny-and-versailles-small-group-day-trip', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 30, 53, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 4, 5, 'Washington, DC, USA', '34.049345', '-118.248479', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '913.00', 6, 1, 14, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 4, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.0', NULL),
(11, 'Trip of New York – Discover America', 'trip-of-new-york-discover-america', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 31, 54, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 2, 6, 'New Jersey', '40.035329', '-74.417227', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '148.00', 6, 1, 13, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 5, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.7', NULL),
(12, 'Segway Tour of Washington, D.C. Highlights', 'segway-tour-of-washington-dc-highlights', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 32, 55, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 2, 7, 'Francisco Parnassus Campus', '37.782668', '-122.425058', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '819.00', 5, 1, 14, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.7', NULL);
INSERT INTO `bravo_tours` (`id`, `title`, `slug`, `content`, `image_id`, `banner_image_id`, `short_desc`, `category_id`, `location_id`, `address`, `map_lat`, `map_lng`, `map_zoom`, `is_featured`, `gallery`, `video`, `price`, `sale_price`, `duration`, `min_people`, `max_people`, `faqs`, `status`, `publish_date`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`, `default_state`, `include`, `exclude`, `itinerary`, `review_score`, `ical_import_url`) VALUES
(13, 'Hollywood Sign Small Group Tour in Luxury Van', 'hollywood-sign-small-group-tour-in-luxury-van', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 33, 56, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 3, 8, 'Virginia', '37.445688', '-78.673668', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '121.00', 2, 1, 19, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 6, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.8', NULL),
(14, 'San Francisco Express Never Ceases', 'san-francisco-express', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 34, 57, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 1, 7, 'Comprehensive Cancer Center', '37.757522', '-122.447984', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '1349.00', 6, 1, 18, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.8', NULL),
(15, 'Cannes and Antibes Night Tour', 'cannes-and-antibes-night-tour', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 35, 58, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 4, 1, 'UCSF Helen Diller Family', '36.201066', '-88.112292', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '1298.00', 3, 1, 14, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 4, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.3', NULL),
(16, 'River Cruise Tour on the Seine', 'river-cruise-tour-on-the-seine', '<p>Start and end in San Francisco! With the in-depth cultural tour Northern California Summer 2019, you have a 8 day tour package taking you through San Francisco, USA and 9 other destinations in USA. Northern California Summer 2019 includes accommodation as well as an expert guide, meals, transport and more.</p><h4>HIGHLIGHTS</h4><ul><li>Visit the Museum of Modern Art in Manhattan</li><li>See amazing works of contemporary art, including Vincent van Gogh\'s The Starry Night</li><li>Check out Campbell\'s Soup Cans by Warhol and The Dance (I) by Matisse</li><li>Behold masterpieces by Gauguin, Dali, Picasso, and Pollock</li><li>Enjoy free audio guides available in English, French, German, Italian, Spanish, Portuguese</li></ul>', 36, 59, 'From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of \'The City\'. Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 3, 1, 'Nevada, US', '36.401066', '-88.312292', 12, 0, '37,38,39,40,41,42,43', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '2100.00', '1084.00', 3, 1, 15, '[{\"title\":\"When and where does the tour end?\",\"content\":\"Your tour will conclude in San Francisco on Day 8 of the trip. There are no activities planned for this day so you\'re free to depart at any time. We highly recommend booking post-accommodation to give yourself time to fully experience the wonders of this iconic city!\"},{\"title\":\"When and where does the tour start?\",\"content\":\"Day 1 of this tour is an arrivals day, which gives you a chance to settle into your hotel and explore Los Angeles. The only planned activity for this day is an evening welcome meeting at 7pm, where you can get to know your guides and fellow travellers. Please be aware that the meeting point is subject to change until your final documents are released.\"},{\"title\":\"Do you arrange airport transfers?\",\"content\":\"Airport transfers are not included in the price of this tour, however you can book for an arrival transfer in advance. In this case a tour operator representative will be at the airport to greet you. To arrange this please contact our customer service team once you have a confirmed booking.\"},{\"title\":\"What is the age range\",\"content\":\"This tour has an age range of 12-70 years old, this means children under the age of 12 will not be eligible to participate in this tour. However, if you are over 70 years please contact us as you may be eligible to join the tour if you fill out G Adventures self-assessment form.\"}]', 'publish', NULL, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', 1, '[{\"title\":\"Specialized bilingual guide\"},{\"title\":\"Private Transport\"},{\"title\":\"Entrance fees (Cable and car and Moon Valley)\"},{\"title\":\"Box lunch water, banana apple and chocolate\"}]', '[{\"title\":\"Additional Services\"},{\"title\":\"Insurance\"},{\"title\":\"Drink\"},{\"title\":\"Tickets\"}]', '[{\"image_id\":\"110\",\"title\":\"Day 1\",\"desc\":\"Los Angeles\",\"content\":\"There are no activities planned until an evening welcome meeting. Additional Notes: We highly recommend booking pre-tour accommodation to fully experience this crazy city.\"},{\"image_id\":\"109\",\"title\":\"Day 2\",\"desc\":\"Lake Havasu City\",\"content\":\"Pack up the van in the morning and check out the stars on the most famous sidewalk in Hollywood on an orientation tour\"},{\"image_id\":\"108\",\"title\":\"Day 3\",\"desc\":\"Las Vegas\\/Bakersfield\",\"content\":\"Travel to one of the country\'s most rugged landscapes \\u2014 the legendary Death Valley, California. Soak in the dramatic landscape. In the afternoon, continue on to Bakersfield for the night.\"},{\"image_id\":\"107\",\"title\":\"Day 4\",\"desc\":\"San Francisco\",\"content\":\"We highly recommend booking post-accommodation to fully experience this famous city.\"}]', '4.8', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bravo_tour_category`
--

CREATE TABLE `bravo_tour_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_tour_category`
--

INSERT INTO `bravo_tour_category` (`id`, `name`, `content`, `slug`, `status`, `_lft`, `_rgt`, `parent_id`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'City trips', '', 'city-trips', 'publish', 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(2, 'Ecotourism', '', 'ecotourism', 'publish', 3, 4, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(3, 'Escorted tour', '', 'escorted-tour', 'publish', 5, 6, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(4, 'Ligula', '', 'ligula', 'publish', 7, 8, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_tour_category_translations`
--

CREATE TABLE `bravo_tour_category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_tour_dates`
--

CREATE TABLE `bravo_tour_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `person_types` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_guests` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT 0,
  `note_to_customer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bravo_tour_meta`
--

CREATE TABLE `bravo_tour_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `enable_person_types` tinyint(4) DEFAULT NULL,
  `person_types` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_extra_price` tinyint(4) DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_by_people` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_open_hours` tinyint(4) DEFAULT NULL,
  `open_hours` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_tour_meta`
--

INSERT INTO `bravo_tour_meta` (`id`, `tour_id`, `enable_person_types`, `person_types`, `enable_extra_price`, `extra_price`, `discount_by_people`, `enable_open_hours`, `open_hours`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 14, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 15, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 16, 1, '[{\"name\":\"Adult\",\"desc\":\"Age 18+\",\"min\":\"1\",\"max\":\"10\",\"price\":\"1000\"},{\"name\":\"Child\",\"desc\":\"Age 6-17\",\"min\":\"0\",\"max\":\"10\",\"price\":\"300\"}]', 1, '[{\"name\":\"Clean\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bravo_tour_term`
--

CREATE TABLE `bravo_tour_term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` int(11) DEFAULT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bravo_tour_term`
--

INSERT INTO `bravo_tour_term` (`id`, `term_id`, `tour_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(2, 2, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(3, 4, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(4, 6, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(5, 7, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(6, 1, 2, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(7, 2, 2, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(8, 3, 2, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(9, 4, 2, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(10, 6, 2, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(11, 3, 3, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(12, 4, 3, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(13, 7, 3, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(14, 1, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(15, 2, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(16, 4, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(17, 5, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(18, 6, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(19, 1, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(20, 2, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(21, 3, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(22, 4, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(23, 5, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(24, 6, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(25, 3, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(26, 4, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(27, 5, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(28, 6, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(29, 1, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(30, 2, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(31, 5, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(32, 7, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(33, 1, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(34, 2, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(35, 3, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(36, 5, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(37, 6, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(38, 7, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(39, 1, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(40, 2, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(41, 3, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(42, 4, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(43, 5, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(44, 6, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(45, 3, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(46, 4, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(47, 5, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(48, 6, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(49, 7, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(50, 1, 11, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(51, 2, 11, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(52, 4, 11, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(53, 6, 11, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(54, 7, 11, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(55, 3, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(56, 5, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(57, 7, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(58, 1, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(59, 5, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(60, 6, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(61, 7, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(62, 1, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(63, 2, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(64, 3, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(65, 4, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(66, 6, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(67, 7, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(68, 1, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(69, 2, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(70, 3, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(71, 4, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(72, 4, 16, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(73, 7, 16, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(74, 10, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(75, 11, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(76, 12, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(77, 13, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(78, 14, 1, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(79, 8, 2, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(80, 10, 2, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(81, 14, 2, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(82, 9, 3, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(83, 11, 3, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(84, 8, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(85, 9, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(86, 10, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(87, 13, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(88, 14, 4, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(89, 8, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(90, 12, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(91, 13, 5, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(92, 8, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(93, 9, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(94, 10, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(95, 11, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(96, 12, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(97, 13, 6, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(98, 8, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(99, 9, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(100, 11, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(101, 12, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(102, 13, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(103, 14, 7, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(104, 8, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(105, 9, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(106, 10, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(107, 11, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(108, 12, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(109, 13, 8, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(110, 8, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(111, 10, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(112, 12, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(113, 13, 9, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(114, 9, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(115, 10, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(116, 11, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(117, 13, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(118, 14, 10, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(119, 8, 11, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(120, 11, 11, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(121, 12, 11, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(122, 8, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(123, 9, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(124, 10, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(125, 12, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(126, 13, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(127, 14, 12, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(128, 9, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(129, 11, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(130, 12, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(131, 13, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(132, 14, 13, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(133, 11, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(134, 12, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(135, 13, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(136, 14, 14, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(137, 9, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(138, 10, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(139, 11, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(140, 12, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(141, 13, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(142, 14, 15, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(143, 8, 16, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(144, 11, 16, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(145, 12, 16, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(146, 13, 16, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(147, 14, 16, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `bravo_tour_translations`
--

CREATE TABLE `bravo_tour_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `include` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exclude` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itinerary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_inbox`
--

CREATE TABLE `core_inbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `object_id` bigint(20) DEFAULT NULL,
  `object_model` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT 0,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_inbox_messages`
--

CREATE TABLE `core_inbox_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inbox_id` bigint(20) DEFAULT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT 0,
  `is_read` tinyint(4) DEFAULT 0,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_languages`
--

CREATE TABLE `core_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `last_build_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_languages`
--

INSERT INTO `core_languages` (`id`, `locale`, `name`, `flag`, `status`, `create_user`, `update_user`, `last_build_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'en', 'English', 'gb', 'publish', 1, NULL, NULL, NULL, '2021-10-03 01:47:28', '2021-10-03 01:47:28'),
(2, 'ja', 'Japanese', 'jp', 'publish', 1, NULL, NULL, NULL, '2021-10-03 01:47:28', '2021-10-03 01:47:28'),
(3, 'egy', 'Egyptian', 'eg', 'publish', 1, NULL, NULL, NULL, '2021-10-03 01:47:28', '2021-10-03 01:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `core_menus`
--

CREATE TABLE `core_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `items` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_menus`
--

INSERT INTO `core_menus` (`id`, `name`, `items`, `create_user`, `update_user`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Main Menu', '[{\"name\":\"Home\",\"url\":\"\\/\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Home Page\",\"url\":\"\\/\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Home Hotel\",\"url\":\"\\/page\\/hotel\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Home Tour\",\"url\":\"\\/page\\/tour\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Home Space\",\"url\":\"\\/page\\/space\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Home Car\",\"url\":\"\\/page\\/car\",\"item_model\":\"custom\",\"children\":[]}]},{\"name\":\"Hotel\",\"url\":\"\\/hotel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Hotel List\",\"url\":\"\\/hotel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Hotel Map\",\"url\":\"\\/hotel?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Hotel Detail\",\"url\":\"\\/hotel\\/parian-holiday-villas\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Tours\",\"url\":\"\\/tour\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Tour List\",\"url\":\"\\/tour\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Tour Map\",\"url\":\"\\/tour?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Tour Detail\",\"url\":\"\\/tour\\/paris-vacation-travel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Space\",\"url\":\"\\/space\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Space List\",\"url\":\"\\/space\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Space Map\",\"url\":\"\\/space?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Space Detail\",\"url\":\"\\/space\\/stay-greenwich-village\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Car\",\"url\":\"\\/car\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Car List\",\"url\":\"\\/car\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Car Map\",\"url\":\"\\/car?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Car Detail\",\"url\":\"\\/car\\/vinfast-lux-a20-plus\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Event\",\"url\":\"\\/event\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Event List\",\"url\":\"\\/event\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Event Map\",\"url\":\"\\/event?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Event Detail\",\"url\":\"\\/event\\/aspen-glade-weddings-events\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Pages\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"News List\",\"url\":\"\\/news\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"News Detail\",\"url\":\"\\/news\\/morning-in-the-northern-sea\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Location Detail\",\"url\":\"\\/location\\/paris\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Become a vendor\",\"url\":\"\\/page\\/become-a-vendor\",\"item_model\":\"custom\",\"children\":[]}]},{\"name\":\"Contact\",\"url\":\"\\/contact\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]', 1, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_menu_translations`
--

CREATE TABLE `core_menu_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_menu_translations`
--

INSERT INTO `core_menu_translations` (`id`, `origin_id`, `locale`, `items`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 1, 'ja', '[{\"name\":\"\\u30db\\u30fc\\u30e0\",\"url\":\"\\/ja\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30db\\u30fc\\u30e0\\u30da\\u30fc\\u30b8\",\"url\":\"\\/ja\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30db\\u30fc\\u30e0\\u30db\\u30c6\\u30eb\",\"url\":\"\\/ja\\/page\\/hotel\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"\\u30db\\u30fc\\u30e0 \\u30c4\\u30a2\\u30fc\",\"url\":\"\\/ja\\/page\\/tour\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30db\\u30fc\\u30e0\\u30b9\\u30da\\u30fc\\u30b9\",\"url\":\"\\/ja\\/page\\/space\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"\\u30db\\u30c6\\u30eb\",\"url\":\"\\/ja\\/hotel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30db\\u30c6\\u30eb\\u4e00\\u89a7\",\"url\":\"\\/ja\\/hotel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30db\\u30c6\\u30eb\\u306e\\u8a73\\u7d30\",\"url\":\"\\/ja\\/hotel\\/parian-holiday-villas\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"\\u30c4\\u30a2\\u30fc\",\"url\":\"\\/ja\\/tour\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30c4\\u30a2\\u30fc\\u30ea\\u30b9\\u30c8\",\"url\":\"\\/ja\\/tour\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30c4\\u30a2\\u30fc\\u30de\\u30c3\\u30d7\",\"url\":\"\\/ja\\/tour?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30c4\\u30a2\\u30fc\\u8a73\\u7d30\",\"url\":\"\\/ja\\/tour\\/paris-vacation-travel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"\\u30b9\\u30da\\u30fc\\u30b9\",\"url\":\"\\/ja\\/space\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30b9\\u30da\\u30fc\\u30b9\\u30ea\\u30b9\\u30c8\",\"url\":\"\\/ja\\/space\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30b9\\u30da\\u30fc\\u30b9\\u306e\\u8a73\\u7d30\",\"url\":\"\\/ja\\/space\\/stay-greenwich-village\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"\\u30da\\u30fc\\u30b8\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30cb\\u30e5\\u30fc\\u30b9\\u4e00\\u89a7\",\"url\":\"\\/ja\\/news\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30cb\\u30e5\\u30fc\\u30b9\\u8a73\\u7d30\",\"url\":\"\\/ja\\/news\\/morning-in-the-northern-sea\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u5834\\u6240\\u306e\\u8a73\\u7d30\",\"url\":\"\\/ja\\/location\\/paris\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"\\u30d9\\u30f3\\u30c0\\u30fc\\u306b\\u306a\\u308b\",\"url\":\"\\/ja\\/page\\/become-a-vendor\",\"item_model\":\"custom\",\"children\":[]}]},{\"name\":\"\\u63a5\\u89e6\",\"url\":\"\\/ja\\/contact\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]', 1, NULL, '2021-10-03 01:47:29', NULL),
(2, 1, 'egy', '[{\"name\":\"Home\",\"url\":\"\\/egy\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Home Page\",\"url\":\"\\/egy\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Home Hotel\",\"url\":\"\\/egy\\/page\\/hotel\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Home Tour\",\"url\":\"\\/egy\\/page\\/tour\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Home Space\",\"url\":\"\\/egy\\/page\\/space\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Home Car\",\"url\":\"\\/egy\\/page\\/car\",\"item_model\":\"custom\",\"children\":[]}]},{\"name\":\"Hotel\",\"url\":\"\\/egy\\/hotel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Hotel List\",\"url\":\"\\/egy\\/hotel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Hotel Map\",\"url\":\"\\/egy\\/hotel?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Hotel Detail\",\"url\":\"\\/egy\\/hotel\\/parian-holiday-villas\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Tours\",\"url\":\"\\/egy\\/tour\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Tour List\",\"url\":\"\\/egy\\/tour\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Tour Map\",\"url\":\"\\/egy\\/tour?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Tour Detail\",\"url\":\"\\/egy\\/tour\\/paris-vacation-travel\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Space\",\"url\":\"\\/egy\\/space\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Space List\",\"url\":\"\\/egy\\/space\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Space Map\",\"url\":\"\\/egy\\/space?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Space Detail\",\"url\":\"\\/egy\\/space\\/stay-greenwich-village\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Car\",\"url\":\"\\/egy\\/car\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Car List\",\"url\":\"\\/egy\\/car\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Car Map\",\"url\":\"\\/egy\\/car?_layout=map\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Car Detail\",\"url\":\"\\/egy\\/car\\/vinfast-lux-a20-plus\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Pages\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"News List\",\"url\":\"\\/egy\\/news\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"News Detail\",\"url\":\"\\/egy\\/news\\/morning-in-the-northern-sea\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Location Detail\",\"url\":\"\\/egy\\/location\\/paris\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Become a vendor\",\"url\":\"\\/egy\\/page\\/become-a-vendor\",\"item_model\":\"custom\",\"children\":[]}]},{\"name\":\"Contact\",\"url\":\"\\/egy\\/contact\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]', 1, NULL, '2021-10-03 01:47:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_model_has_permissions`
--

CREATE TABLE `core_model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_model_has_roles`
--

CREATE TABLE `core_model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_model_has_roles`
--

INSERT INTO `core_model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 2),
(1, 'App\\User', 4),
(1, 'App\\User', 5),
(1, 'App\\User', 6),
(2, 'App\\User', 3),
(2, 'App\\User', 8),
(2, 'App\\User', 9),
(2, 'App\\User', 10),
(2, 'App\\User', 11),
(2, 'App\\User', 12),
(2, 'App\\User', 13),
(2, 'App\\User', 14),
(2, 'App\\User', 15),
(2, 'App\\User', 16),
(2, 'App\\User', 17),
(2, 'App\\User', 18),
(3, 'App\\User', 1),
(3, 'App\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `core_news`
--

CREATE TABLE `core_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_news`
--

INSERT INTO `core_news` (`id`, `title`, `content`, `slug`, `status`, `cat_id`, `image_id`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'The day on Paris', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'the-day-on-paris', 'publish', 3, 114, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(2, 'Pure Luxe in Punta Mita', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'pure-luxe-in-punta-mita', 'publish', 2, 115, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(3, 'All Aboard the Rocky Mountaineer', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'all-aboard-the-rocky-mountaineer', 'publish', 2, 116, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(4, 'City Spotlight: Philadelphia', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'city-spotlight-philadelphia', 'publish', 3, 117, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(5, 'Tiptoe through the Tulips of Washington', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'tiptoe-through-the-tulips-of-washington', 'publish', 3, 118, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(6, 'A Seaside Reset in Laguna Beach', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'a-seaside-reset-in-laguna-beach', 'publish', 3, 119, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(7, 'America  National Parks with Denver', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'america-national-parks-with-denver', 'publish', 3, 120, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(8, 'Morning in the Northern sea', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'morning-in-the-northern-sea', 'publish', 1, 115, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_news_category`
--

CREATE TABLE `core_news_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_news_category`
--

INSERT INTO `core_news_category` (`id`, `name`, `content`, `slug`, `status`, `_lft`, `_rgt`, `parent_id`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`, `origin_id`, `lang`) VALUES
(1, 'Adventure Travel', NULL, 'adventure-travel', 'publish', 1, 2, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(2, 'Ecotourism', NULL, 'ecotourism', 'publish', 3, 4, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(3, 'Sea Travel ', NULL, 'sea-travel', 'publish', 5, 6, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(4, 'Hosted Tour', NULL, 'hosted-tour', 'publish', 7, 8, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(5, 'City trips ', NULL, 'city-trips', 'publish', 9, 10, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL),
(6, 'Escorted Tour ', NULL, 'escorted-tour', 'publish', 11, 12, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_news_category_translations`
--

CREATE TABLE `core_news_category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_news_tag`
--

CREATE TABLE `core_news_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_news_translations`
--

CREATE TABLE `core_news_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_notifications`
--

CREATE TABLE `core_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `is_read` tinyint(4) DEFAULT 0,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `target_parent_id` bigint(20) DEFAULT NULL,
  `params` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_pages`
--

CREATE TABLE `core_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `template_id` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_pages`
--

INSERT INTO `core_pages` (`id`, `slug`, `title`, `content`, `short_desc`, `status`, `publish_date`, `image_id`, `template_id`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'home-page', 'Home Page', NULL, NULL, 'publish', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(2, 'tour', 'Home Tour', NULL, NULL, 'publish', NULL, NULL, 2, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(3, 'space', 'Home Space', NULL, NULL, 'publish', NULL, NULL, 3, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(4, 'hotel', 'Home Hotel', NULL, NULL, 'publish', NULL, NULL, 4, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(5, 'become-a-vendor', 'Become a vendor', NULL, NULL, 'publish', NULL, NULL, 5, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(6, 'car', 'Home Car', NULL, NULL, 'publish', NULL, NULL, 6, 1, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_page_translations`
--

CREATE TABLE `core_page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_permissions`
--

CREATE TABLE `core_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_permissions`
--

INSERT INTO `core_permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'report_view', 'web', '2021-10-03 01:47:26', '2021-10-03 01:47:26'),
(2, 'contact_manage', 'web', '2021-10-03 01:47:26', '2021-10-03 01:47:26'),
(3, 'newsletter_manage', 'web', '2021-10-03 01:47:26', '2021-10-03 01:47:26'),
(4, 'language_manage', 'web', '2021-10-03 01:47:26', '2021-10-03 01:47:26'),
(5, 'language_translation', 'web', '2021-10-03 01:47:26', '2021-10-03 01:47:26'),
(6, 'booking_view', 'web', '2021-10-03 01:47:26', '2021-10-03 01:47:26'),
(7, 'booking_update', 'web', '2021-10-03 01:47:26', '2021-10-03 01:47:26'),
(8, 'booking_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(9, 'enquiry_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(10, 'enquiry_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(11, 'enquiry_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(12, 'template_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(13, 'template_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(14, 'template_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(15, 'template_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(16, 'news_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(17, 'news_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(18, 'news_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(19, 'news_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(20, 'news_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(21, 'role_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(22, 'role_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(23, 'role_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(24, 'role_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(25, 'permission_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(26, 'permission_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(27, 'permission_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(28, 'permission_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(29, 'dashboard_access', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(30, 'dashboard_vendor_access', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(31, 'setting_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(32, 'menu_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(33, 'menu_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(34, 'menu_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(35, 'menu_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(36, 'user_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(37, 'user_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(38, 'user_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(39, 'user_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(40, 'page_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(41, 'page_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(42, 'page_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(43, 'page_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(44, 'page_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(45, 'setting_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(46, 'media_upload', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(47, 'media_manage', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(48, 'tour_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(49, 'tour_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(50, 'tour_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(51, 'tour_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(52, 'tour_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(53, 'tour_manage_attributes', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(54, 'location_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(55, 'location_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(56, 'location_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(57, 'location_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(58, 'location_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(59, 'review_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(60, 'system_log_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(61, 'space_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(62, 'space_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(63, 'space_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(64, 'space_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(65, 'space_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(66, 'space_manage_attributes', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(67, 'hotel_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(68, 'hotel_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(69, 'hotel_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(70, 'hotel_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(71, 'hotel_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(72, 'hotel_manage_attributes', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(73, 'car_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(74, 'car_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(75, 'car_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(76, 'car_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(77, 'car_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(78, 'car_manage_attributes', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(79, 'event_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(80, 'event_create', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(81, 'event_update', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(82, 'event_delete', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(83, 'event_manage_others', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(84, 'event_manage_attributes', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(85, 'social_manage_forum', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(86, 'plugin_manage', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(87, 'vendor_payout_view', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(88, 'vendor_payout_manage', 'web', '2021-10-03 01:47:27', '2021-10-03 01:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `core_roles`
--

CREATE TABLE `core_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_roles`
--

INSERT INTO `core_roles` (`id`, `name`, `guard_name`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'vendor', 'web', NULL, NULL, '2021-10-03 01:47:27', '2021-10-03 01:47:27'),
(2, 'customer', 'web', NULL, NULL, '2021-10-03 01:47:28', '2021-10-03 01:47:28'),
(3, 'administrator', 'web', NULL, NULL, '2021-10-03 01:47:28', '2021-10-03 01:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `core_role_has_permissions`
--

CREATE TABLE `core_role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_role_has_permissions`
--

INSERT INTO `core_role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 1),
(30, 3),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 3),
(38, 3),
(39, 3),
(40, 3),
(41, 3),
(42, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 1),
(46, 3),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 3),
(53, 3),
(54, 3),
(55, 3),
(56, 3),
(57, 3),
(58, 3),
(59, 3),
(60, 3),
(61, 1),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 3),
(66, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 3),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 3),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 3),
(84, 3),
(85, 3),
(86, 3),
(87, 3),
(88, 3);

-- --------------------------------------------------------

--
-- Table structure for table `core_settings`
--

CREATE TABLE `core_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autoload` tinyint(4) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_settings`
--

INSERT INTO `core_settings` (`id`, `name`, `group`, `val`, `autoload`, `create_user`, `update_user`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'site_locale', 'general', 'en', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'site_enable_multi_lang', 'general', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'enable_rtl_egy', 'general', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'menu_locations', 'general', '{\"primary\":1}', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'admin_email', 'general', 'contact@bookingcore.com', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'email_from_name', 'general', 'Booking Core', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'email_from_address', 'general', 'contact@bookingcore.com', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'logo_id', 'general', '8', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'site_favicon', 'general', '10', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'topbar_left_text', 'general', '<div class=\"socials\">\r\n<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>\r\n<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>\r\n<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>\r\n</div>\r\n<span class=\"line\"></span>\r\n<a href=\"mailto:contact@bookingcore.com\">contact@bookingcore.com</a>', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'footer_text_left', 'general', 'Copyright © 2019 by Booking Core', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'footer_text_right', 'general', 'Booking Core', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'list_widget_footer', 'general', '[{\"title\":\"NEED HELP?\",\"size\":\"3\",\"content\":\"<div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            Call Us\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            + 00 222 44 5678\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            Email for Us\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            hello@yoursite.com\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            Follow Us\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-facebook\\\"><\\/i>\\r\\n            <\\/a>\\r\\n            <a href=\\\"#\\\">\\r\\n               <i class=\\\"icofont-twitter\\\"><\\/i>\\r\\n            <\\/a>\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-youtube-play\\\"><\\/i>\\r\\n            <\\/a>\\r\\n        <\\/div>\\r\\n    <\\/div>\"},{\"title\":\"COMPANY\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">About Us<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Community Blog<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Rewards<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Work with Us<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Meet the Team<\\/a><\\/li>\\r\\n<\\/ul>\"},{\"title\":\"SUPPORT\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">Account<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Legal<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Contact<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Affiliate Program<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">Privacy Policy<\\/a><\\/li>\\r\\n<\\/ul>\"},{\"title\":\"SETTINGS\",\"size\":\"3\",\"content\":\"<ul>\\r\\n<li><a href=\\\"#\\\">Setting 1<\\/a><\\/li>\\r\\n<li><a href=\\\"#\\\">Setting 2<\\/a><\\/li>\\r\\n<\\/ul>\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'list_widget_footer_ja', 'general', '[{\"title\":\"\\u52a9\\u3051\\u304c\\u5fc5\\u8981\\uff1f\",\"size\":\"3\",\"content\":\"<div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u304a\\u96fb\\u8a71\\u304f\\u3060\\u3055\\u3044\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            + 00 222 44 5678\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u90f5\\u4fbf\\u7269\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            hello@yoursite.com\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u30d5\\u30a9\\u30ed\\u30fc\\u3059\\u308b\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-facebook\\\"><\\/i>\\r\\n            <\\/a>\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-twitter\\\"><\\/i>\\r\\n            <\\/a>\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-youtube-play\\\"><\\/i>\\r\\n            <\\/a>\\r\\n        <\\/div>\\r\\n    <\\/div>\"},{\"title\":\"\\u4f1a\\u793e\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">\\u7d04, \\u7565<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30b3\\u30df\\u30e5\\u30cb\\u30c6\\u30a3\\u30d6\\u30ed\\u30b0<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u5831\\u916c<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u3068\\u9023\\u643a<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30c1\\u30fc\\u30e0\\u306b\\u4f1a\\u3046<\\/a><\\/li>\\r\\n<\\/ul>\"},{\"title\":\"\\u30b5\\u30dd\\u30fc\\u30c8\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">\\u30a2\\u30ab\\u30a6\\u30f3\\u30c8<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u6cd5\\u7684<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u63a5\\u89e6<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30a2\\u30d5\\u30a3\\u30ea\\u30a8\\u30a4\\u30c8\\u30d7\\u30ed\\u30b0\\u30e9\\u30e0<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u500b\\u4eba\\u60c5\\u5831\\u4fdd\\u8b77\\u65b9\\u91dd<\\/a><\\/li>\\r\\n<\\/ul>\"},{\"title\":\"\\u8a2d\\u5b9a\",\"size\":\"3\",\"content\":\"<ul>\\r\\n<li><a href=\\\"#\\\">\\u8a2d\\u5b9a1<\\/a><\\/li>\\r\\n<li><a href=\\\"#\\\">\\u8a2d\\u5b9a2<\\/a><\\/li>\\r\\n<\\/ul>\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'page_contact_title', 'general', 'We\'d love to hear from you', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'page_contact_sub_title', 'general', 'Send us a message and we\'ll respond as soon as possible', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'page_contact_desc', 'general', '<!DOCTYPE html><html><head></head><body><h3>Booking Core</h3><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Tell. + 00 222 444 33</p><p>Email. hello@yoursite.com</p><p>1355 Market St, Suite 900San, Francisco, CA 94103 United States</p></body></html>', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'page_contact_image', 'general', '9', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'home_page_id', 'general', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'page_contact_title', 'general', 'We\'d love to hear from you', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'page_contact_title_ja', 'general', 'あなたからの御一報をお待ち', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'page_contact_sub_title', 'general', 'Send us a message and we\'ll respond as soon as possible', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'page_contact_sub_title_ja', 'general', '私たちにメッセージを送ってください、私たちはできるだ', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'page_contact_desc', 'general', '<!DOCTYPE html><html><head></head><body><h3>Booking Core</h3><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>Tell. + 00 222 444 33</p><p>Email. hello@yoursite.com</p><p>1355 Market St, Suite 900San, Francisco, CA 94103 United States</p></body></html>', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'page_contact_image', 'general', '9', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'currency_main', 'payment', 'usd', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'currency_format', 'payment', 'left', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'currency_decimal', 'payment', ',', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'currency_thousand', 'payment', '.', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'currency_no_decimal', 'payment', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'extra_currency', 'payment', '[{\"currency_main\":\"eur\",\"currency_format\":\"left\",\"currency_thousand\":\".\",\"currency_decimal\":\",\",\"currency_no_decimal\":\"2\",\"rate\":\"0.902807\"},{\"currency_main\":\"jpy\",\"currency_format\":\"right_space\",\"currency_thousand\":\".\",\"currency_decimal\":\",\",\"currency_no_decimal\":\"0\",\"rate\":\"0.00917113\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'map_provider', 'advance', 'gmap', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'map_gmap_key', 'advance', '', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'g_offline_payment_enable', 'payment', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'g_offline_payment_name', 'payment', 'Offline Payment', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'date_format', 'general', 'm/d/Y', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'site_title', 'general', 'Booking Core', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'site_timezone', 'general', 'UTC', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'site_title', 'general', 'Booking Core', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'email_header', 'general', '<h1 class=\"site-title\" style=\"text-align: center\">Booking Core</h1>', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'email_footer', 'general', '<p class=\"\" style=\"text-align: center\">&copy; 2019 Booking Core. All rights reserved</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'enable_mail_user_registered', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'user_content_email_registered', 'user', '<h1 style=\"text-align: center\">Welcome!</h1>\r\n                    <h3>Hello [first_name] [last_name]</h3>\r\n                    <p>Thank you for signing up with Booking Core! We hope you enjoy your time with us.</p>\r\n                    <p>Regards,</p>\r\n                    <p>Booking Core</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'admin_enable_mail_user_registered', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'admin_content_email_user_registered', 'user', '<h3>Hello Administrator</h3>\r\n                    <p>We have new registration</p>\r\n                    <p>Full name: [first_name] [last_name]</p>\r\n                    <p>Email: [email]</p>\r\n                    <p>Regards,</p>\r\n                    <p>Booking Core</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'user_content_email_forget_password', 'user', '<h1>Hello!</h1>\r\n                    <p>You are receiving this email because we received a password reset request for your account.</p>\r\n                    <p style=\"text-align: center\">[button_reset_password]</p>\r\n                    <p>This password reset link expire in 60 minutes.</p>\r\n                    <p>If you did not request a password reset, no further action is required.\r\n                    </p>\r\n                    <p>Regards,</p>\r\n                    <p>Booking Core</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'email_driver', 'email', 'log', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'email_host', 'email', 'smtp.mailgun.org', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'email_port', 'email', '587', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'email_encryption', 'email', 'tls', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'email_username', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'email_password', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'email_mailgun_domain', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'email_mailgun_secret', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'email_mailgun_endpoint', 'email', 'api.mailgun.net', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'email_postmark_token', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'email_ses_key', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'email_ses_secret', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'email_ses_region', 'email', 'us-east-1', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'email_sparkpost_secret', 'email', '', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'booking_enquiry_for_hotel', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'booking_enquiry_for_tour', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'booking_enquiry_for_space', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'booking_enquiry_for_car', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'booking_enquiry_for_event', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'booking_enquiry_type', 'enquiry', 'booking_and_enquiry', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'booking_enquiry_enable_mail_to_vendor', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'booking_enquiry_mail_to_vendor_content', 'enquiry', '<h3>Hello [vendor_name]</h3>\r\n                            <p>You get new inquiry request from [email]</p>\r\n                            <p>Name :[name]</p>\r\n                            <p>Emai:[email]</p>\r\n                            <p>Phone:[phone]</p>\r\n                            <p>Content:[note]</p>\r\n                            <p>Service:[service_link]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Booking Core</p>\r\n                            </div>', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'booking_enquiry_enable_mail_to_admin', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'booking_enquiry_mail_to_admin_content', 'enquiry', '<h3>Hello Administrator</h3>\r\n                            <p>You get new inquiry request from [email]</p>\r\n                            <p>Name :[name]</p>\r\n                            <p>Emai:[email]</p>\r\n                            <p>Phone:[phone]</p>\r\n                            <p>Content:[note]</p>\r\n                            <p>Service:[service_link]</p>\r\n                            <p>Vendor:[vendor_link]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Booking Core</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'vendor_enable', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'vendor_commission_type', 'vendor', 'percent', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'vendor_commission_amount', 'vendor', '10', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'vendor_role', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'role_verify_fields', 'vendor', '{\"phone\":{\"name\":\"Phone\",\"type\":\"text\",\"roles\":[\"1\",\"2\",\"3\"],\"required\":null,\"order\":null,\"icon\":\"fa fa-phone\"},\"id_card\":{\"name\":\"ID Card\",\"type\":\"file\",\"roles\":[\"1\",\"2\",\"3\"],\"required\":\"1\",\"order\":\"0\",\"icon\":\"fa fa-id-card\"},\"trade_license\":{\"name\":\"Trade License\",\"type\":\"multi_files\",\"roles\":[\"1\",\"3\"],\"required\":\"1\",\"order\":\"0\",\"icon\":\"fa fa-copyright\"}}', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'enable_mail_vendor_registered', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'vendor_content_email_registered', 'vendor', '<h1 style=\"text-align: center;\">Welcome!</h1>\r\n                            <h3>Hello [first_name] [last_name]</h3>\r\n                            <p>Thank you for signing up with Booking Core! We hope you enjoy your time with us.</p>\r\n                            <p>Regards,</p>\r\n                            <p>Booking Core</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'admin_enable_mail_vendor_registered', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'admin_content_email_vendor_registered', 'vendor', '<h3>Hello Administrator</h3>\r\n                            <p>An user has been registered as Vendor. Please check the information bellow:</p>\r\n                            <p>Full name: [first_name] [last_name]</p>\r\n                            <p>Email: [email]</p>\r\n                            <p>Registration date: [created_at]</p>\r\n                            <p>You can approved the request here: [link_approved]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Booking Core</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'cookie_agreement_enable', 'advance', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'cookie_agreement_button_text', 'advance', 'Got it', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'cookie_agreement_content', 'advance', '<p>This website requires cookies to provide all of its features. By using our website, you agree to our use of cookies. <a href=\'#\'>More info</a></p>', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'logo_invoice_id', 'booking', '8', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'invoice_company_info', 'booking', '<p><span style=\"font-size: 14pt;\"><strong>Booking Core Company</strong></span></p>\r\n                                <p>Ha Noi, Viet Nam</p>\r\n                                <p>www.bookingcore.org</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'news_page_list_title', 'news', 'News', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'news_page_list_banner', 'news', '121', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'news_sidebar', 'news', '[{\"title\":null,\"content\":null,\"type\":\"search_form\"},{\"title\":\"About Us\",\"content\":\"Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa\",\"type\":\"content_text\"},{\"title\":\"Recent News\",\"content\":null,\"type\":\"recent_news\"},{\"title\":\"Categories\",\"content\":null,\"type\":\"category\"},{\"title\":\"Tags\",\"content\":null,\"type\":\"tag\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'tour_page_search_title', 'tour', 'Search for tour', NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'tour_page_search_banner', 'tour', '20', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'tour_layout_search', 'tour', 'normal', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'tour_enable_review', 'tour', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'tour_review_approved', 'tour', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'tour_review_stats', 'tour', '[{\"title\":\"Service\"},{\"title\":\"Organization\"},{\"title\":\"Friendliness\"},{\"title\":\"Area Expert\"},{\"title\":\"Safety\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'tour_booking_buyer_fees', 'tour', '[{\"name\":\"Service fee\",\"desc\":\"This helps us run our platform and offer services like 24\\/7 support on your trip.\",\"name_ja\":\"\\u30b5\\u30fc\\u30d3\\u30b9\\u6599\",\"desc_ja\":\"\\u3053\\u308c\\u306b\\u3088\\u308a\\u3001\\u5f53\\u793e\\u306e\\u30d7\\u30e9\\u30c3\\u30c8\\u30d5\\u30a9\\u30fc\\u30e0\\u3092\\u5b9f\\u884c\\u3057\\u3001\\u65c5\\u884c\\u4e2d\\u306b\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'tour_map_search_fields', 'tour', '[{\"field\":\"location\",\"attr\":null,\"position\":\"1\"},{\"field\":\"category\",\"attr\":null,\"position\":\"2\"},{\"field\":\"date\",\"attr\":null,\"position\":\"3\"},{\"field\":\"price\",\"attr\":null,\"position\":\"4\"},{\"field\":\"advance\",\"attr\":null,\"position\":\"5\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'tour_search_fields', 'tour', '[{\"title\":\"Location\",\"field\":\"location\",\"size\":\"6\",\"position\":\"1\"},{\"title\":\"From - To\",\"field\":\"date\",\"size\":\"6\",\"position\":\"2\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'space_page_search_title', 'space', 'Search for space', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'space_page_search_banner', 'space', '62', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'space_layout_search', 'space', 'normal', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'space_enable_review', 'space', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'space_review_approved', 'space', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'space_review_stats', 'space', '[{\"title\":\"Sleep\"},{\"title\":\"Location\"},{\"title\":\"Service\"},{\"title\":\"Clearness\"},{\"title\":\"Rooms\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'space_booking_buyer_fees', 'space', '[{\"name\":\"Cleaning fee\",\"desc\":\"One-time fee charged by host to cover the cost of cleaning their space.\",\"name_ja\":\"\\u30af\\u30ea\\u30fc\\u30cb\\u30f3\\u30b0\\u4ee3\",\"desc_ja\":\"\\u30b9\\u30da\\u30fc\\u30b9\\u3092\\u6383\\u9664\\u3059\\u308b\\u8cbb\\u7528\\u3092\\u30db\\u30b9\\u30c8\\u304c\\u8acb\\u6c42\\u3059\\u308b1\\u56de\\u9650\\u308a\\u306e\\u6599\\u91d1\\u3002\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Service fee\",\"desc\":\"This helps us run our platform and offer services like 24\\/7 support on your trip.\",\"name_ja\":\"\\u30b5\\u30fc\\u30d3\\u30b9\\u6599\",\"desc_ja\":\"\\u3053\\u308c\\u306b\\u3088\\u308a\\u3001\\u5f53\\u793e\\u306e\\u30d7\\u30e9\\u30c3\\u30c8\\u30d5\\u30a9\\u30fc\\u30e0\\u3092\\u5b9f\\u884c\\u3057\\u3001\\u65c5\\u884c\\u4e2d\\u306b\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'space_map_search_fields', 'space', '[{\"field\":\"location\",\"attr\":null,\"position\":\"1\"},{\"field\":\"attr\",\"attr\":\"3\",\"position\":\"2\"},{\"field\":\"date\",\"attr\":null,\"position\":\"3\"},{\"field\":\"price\",\"attr\":null,\"position\":\"4\"},{\"field\":\"advance\",\"attr\":null,\"position\":\"5\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'space_search_fields', 'tour', '[{\"title\":\"Location\",\"field\":\"location\",\"size\":\"4\",\"position\":\"1\"},{\"title\":\"From - To\",\"field\":\"date\",\"size\":\"4\",\"position\":\"2\"},{\"title\":\"Guests\",\"field\":\"guests\",\"size\":\"4\",\"position\":\"3\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'hotel_page_search_title', 'hotel', 'Search for hotel', NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'hotel_page_search_banner', 'hotel', '92', NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'hotel_layout_item_search', 'hotel', 'list', NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'hotel_attribute_show_in_listing_page', 'hotel', '6', NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'hotel_layout_search', 'hotel', 'normal', NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'hotel_enable_review', 'hotel', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'hotel_review_approved', 'hotel', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'hotel_review_stats', 'hotel', '[{\"title\":\"Service\"},{\"title\":\"Organization\"},{\"title\":\"Friendliness\"},{\"title\":\"Area Expert\"},{\"title\":\"Safety\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'hotel_booking_buyer_fees', 'hotel', '[{\"name\":\"Service fee\",\"desc\":\"This helps us run our platform and offer services like 24\\/7 support on your trip.\",\"name_ja\":\"\\u30b5\\u30fc\\u30d3\\u30b9\\u6599\",\"desc_ja\":\"\\u3053\\u308c\\u306b\\u3088\\u308a\\u3001\\u5f53\\u793e\\u306e\\u30d7\\u30e9\\u30c3\\u30c8\\u30d5\\u30a9\\u30fc\\u30e0\\u3092\\u5b9f\\u884c\\u3057\\u3001\\u65c5\\u884c\\u4e2d\\u306b\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'hotel_map_search_fields', 'hotel', '[{\"field\":\"location\",\"attr\":null,\"position\":\"1\"},{\"field\":\"attr\",\"attr\":\"7\",\"position\":\"2\"},{\"field\":\"date\",\"attr\":null,\"position\":\"3\"},{\"field\":\"price\",\"attr\":null,\"position\":\"4\"},{\"field\":\"advance\",\"attr\":null,\"position\":\"5\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'hotel_search_fields', 'hotel', '[{\"title\":\"Location\",\"field\":\"location\",\"size\":\"4\",\"position\":\"1\"},{\"title\":\"Check In - Out\",\"field\":\"date\",\"size\":\"4\",\"position\":\"2\"},{\"title\":\"Guests\",\"field\":\"guests\",\"size\":\"4\",\"position\":\"3\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'car_page_search_title', 'car', 'Search for car', NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'car_page_search_banner', 'car', '62', NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'car_layout_search', 'car', 'normal', NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'car_enable_review', 'car', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'car_review_approved', 'car', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'car_review_stats', 'car', '[{\"title\":\"Equipment\"},{\"title\":\"Comfortable\"},{\"title\":\"Climate Control\"},{\"title\":\"Facility\"},{\"title\":\"Aftercare\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'car_booking_buyer_fees', 'car', '[{\"name\":\"Equipment fee\",\"desc\":\"One-time fee charged by host to cover the cost of cleaning their space.\",\"name_ja\":\"\\u30af\\u30ea\\u30fc\\u30cb\\u30f3\\u30b0\\u4ee3\",\"desc_ja\":\"\\u30b9\\u30da\\u30fc\\u30b9\\u3092\\u6383\\u9664\\u3059\\u308b\\u8cbb\\u7528\\u3092\\u30db\\u30b9\\u30c8\\u304c\\u8acb\\u6c42\\u3059\\u308b1\\u56de\\u9650\\u308a\\u306e\\u6599\\u91d1\\u3002\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Facility fee\",\"desc\":\"This helps us run our platform and offer services like 24\\/7 support on your trip.\",\"name_ja\":\"\\u30b5\\u30fc\\u30d3\\u30b9\\u6599\",\"desc_ja\":\"\\u3053\\u308c\\u306b\\u3088\\u308a\\u3001\\u5f53\\u793e\\u306e\\u30d7\\u30e9\\u30c3\\u30c8\\u30d5\\u30a9\\u30fc\\u30e0\\u3092\\u5b9f\\u884c\\u3057\\u3001\\u65c5\\u884c\\u4e2d\\u306b\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'car_map_search_fields', 'car', '[{\"field\":\"location\",\"attr\":null,\"position\":\"1\"},{\"field\":\"attr\",\"attr\":\"9\",\"position\":\"2\"},{\"field\":\"date\",\"attr\":null,\"position\":\"3\"},{\"field\":\"price\",\"attr\":null,\"position\":\"4\"},{\"field\":\"advance\",\"attr\":null,\"position\":\"5\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'car_search_fields', 'car', '[{\"title\":\"Location\",\"field\":\"location\",\"size\":\"6\",\"position\":\"1\"},{\"title\":\"From - To\",\"field\":\"date\",\"size\":\"6\",\"position\":\"2\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'event_page_search_title', 'event', 'Search for event', NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'event_page_search_banner', 'event', '161', NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'event_layout_search', 'event', 'normal', NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'event_enable_review', 'event', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'event_review_approved', 'event', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'event_review_stats', 'event', '[{\"title\":\"Service\"},{\"title\":\"Organization\"},{\"title\":\"Friendliness\"},{\"title\":\"Area Expert\"},{\"title\":\"Safety\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'event_booking_buyer_fees', 'event', '[{\"name\":\"Service fee\",\"desc\":\"This helps us run our platform and offer services like 24\\/7 support on your trip.\",\"name_ja\":\"\\u30b5\\u30fc\\u30d3\\u30b9\\u6599\",\"desc_ja\":\"\\u3053\\u308c\\u306b\\u3088\\u308a\\u3001\\u5f53\\u793e\\u306e\\u30d7\\u30e9\\u30c3\\u30c8\\u30d5\\u30a9\\u30fc\\u30e0\\u3092\\u5b9f\\u884c\\u3057\\u3001\\u65c5\\u884c\\u4e2d\\u306b\",\"price\":\"100\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'event_map_search_fields', 'event', '[{\"field\":\"location\",\"attr\":null,\"position\":\"1\"},{\"field\":\"category\",\"attr\":null,\"position\":\"2\"},{\"field\":\"date\",\"attr\":null,\"position\":\"3\"},{\"field\":\"price\",\"attr\":null,\"position\":\"4\"},{\"field\":\"advance\",\"attr\":null,\"position\":\"5\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'event_search_fields', 'event', '[{\"title\":\"Location\",\"field\":\"location\",\"size\":\"6\",\"position\":\"1\"},{\"title\":\"From - To\",\"field\":\"date\",\"size\":\"6\",\"position\":\"2\"}]', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_subscribers`
--

CREATE TABLE `core_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_tags`
--

CREATE TABLE `core_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_tags`
--

INSERT INTO `core_tags` (`id`, `name`, `slug`, `content`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'park', 'park', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(2, 'National park', 'national-park', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(3, 'Moutain', 'moutain', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(4, 'Travel', 'travel', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(5, 'Summer', 'summer', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29'),
(6, 'Walking', 'walking', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', '2021-10-03 01:47:29');

-- --------------------------------------------------------

--
-- Table structure for table `core_tag_translations`
--

CREATE TABLE `core_tag_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_templates`
--

CREATE TABLE `core_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_templates`
--

INSERT INTO `core_templates` (`id`, `title`, `content`, `type_id`, `create_user`, `update_user`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', '[{\"type\":\"form_search_all_service\",\"name\":\"Form Search All Service\",\"model\":{\"service_types\":[\"hotel\",\"space\",\"tour\",\"car\",\"event\"],\"title\":\"Hi There!\",\"sub_title\":\"Where would you like to go?\",\"bg_image\":16},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"offer_block\",\"name\":\"Offer Block\",\"model\":{\"list_item\":[{\"_active\":false,\"title\":\"Special Offers\",\"desc\":\"Find Your Perfect Hotels Get the best<br>\\nprices on 20,000+ properties<br>\\nthe best prices on\",\"background_image\":17,\"link_title\":\"See Deals\",\"link_more\":\"#\",\"featured_text\":\"HOLIDAY SALE\"},{\"_active\":true,\"title\":\"Newsletters\",\"desc\":\"Join for free and get our <br>\\ntailored newsletters full of <br>\\nhot travel deals.\",\"background_image\":18,\"link_title\":\"Sign Up\",\"link_more\":\"/register\",\"featured_icon\":\"icofont-email\"},{\"_active\":true,\"title\":\"Travel Tips\",\"desc\":\"Tips from our travel experts to <br>\\nmake your next trip even<br>\\nbetter.\",\"background_image\":19,\"link_title\":\"Sign Up\",\"link_more\":\"/register\",\"featured_text\":null,\"featured_icon\":\"icofont-island-alt\"}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_hotel\",\"name\":\"Hotel: List Items\",\"model\":{\"title\":\"Bestseller Listing\",\"desc\":\"Hotel highly rated for thoughtful design\",\"number\":4,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":[\"space\",\"hotel\",\"tour\"],\"title\":\"Top Destinations\",\"desc\":\"It is a long established fact that a reader\",\"number\":6,\"layout\":\"style_4\",\"order\":\"id\",\"order_by\":\"asc\",\"to_location_detail\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_tours\",\"name\":\"Tour: List Items\",\"model\":{\"title\":\"Our best promotion tours\",\"number\":6,\"style\":\"box_shadow\",\"category_id\":\"\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\",\"is_featured\":\"\",\"desc\":\"Most popular destinations\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_space\",\"name\":\"Space: List Items\",\"model\":{\"title\":\"Rental Listing\",\"desc\":\"Homes highly rated for thoughtful design\",\"number\":4,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_car\",\"name\":\"Car: List Items\",\"model\":{\"title\":\"Car Trending\",\"desc\":\"Book incredible things to do around the world.\",\"number\":8,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true},{\"type\":\"list_event\",\"name\":\"Event: List Items\",\"model\":{\"title\":\"Classical Music Event \",\"desc\":\"Lorem Ipsum is simply dummy text of the printing and typesetting industry\",\"number\":4,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"\",\"order_by\":\"\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true},{\"type\": \"list_news\", \"name\": \"News: List Items\", \"model\": {\"title\": \"Read the latest from blog\", \"desc\": \"Contrary to popular belief\", \"number\": 6, \"category_id\": null, \"order\": \"id\", \"order_by\": \"asc\"}, \"component\": \"RegularBlock\", \"open\": true, \"is_container\": false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"Know your city?\",\"sub_title\":\"Join 2000+ locals & 1200+ contributors from 3000 cities\",\"link_title\":\"Become Local Expert\",\"link_more\":\"#\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"testimonial\",\"name\":\"List Testimonial\",\"model\":{\"title\":\"Our happy clients\",\"list_item\":[{\"_active\":false,\"name\":\"Eva Hicks\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":1},{\"_active\":false,\"name\":\"Donald Wolf\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":6,\"avatar\":2},{\"_active\":false,\"name\":\"Charlie Harrington\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.\",\"number_star\":5,\"avatar\":3}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', NULL, 1, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(2, 'Home Tour', '[{\"type\":\"form_search_tour\",\"name\":\"Tour: Form Search\",\"model\":{\"title\":\"Love where you\'re going\",\"sub_title\":\"Book incredible things to do around the world.\",\"bg_image\":20},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":false,\"title\":\"1,000+ local guides\",\"sub_title\":\"Morbi semper fames lobortis ac hac penatibus\",\"icon_image\":5},{\"_active\":false,\"title\":\"Handcrafted experiences\",\"sub_title\":\"Morbi semper fames lobortis ac hac penatibus\",\"icon_image\":4},{\"_active\":false,\"title\":\"96% happy travelers\",\"sub_title\":\"Morbi semper fames lobortis ac hac penatibus\",\"icon_image\":6}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_tours\",\"name\":\"Tour: List Items\",\"model\":{\"title\":\"Trending Tours\",\"number\":5,\"style\":\"carousel\",\"category_id\":\"\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"title\":\"Top Destinations\",\"number\":5,\"order\":\"id\",\"order_by\":\"desc\",\"service_type\":\"tour\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_tours\",\"name\":\"Tour: List Items\",\"model\":{\"title\":\"Local Experiences You’ll Love\",\"number\":8,\"style\":\"normal\",\"category_id\":\"\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"Know your city?\",\"sub_title\":\"Join 2000+ locals & 1200+ contributors from 3000 cities\",\"link_title\":\"Become Local Expert\",\"link_more\":\"#\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"testimonial\",\"name\":\"List Testimonial\",\"model\":{\"title\":\"Our happy clients\",\"list_item\":[{\"_active\":false,\"name\":\"Eva Hicks\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":1},{\"_active\":false,\"name\":\"Donald Wolf\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":6,\"avatar\":2},{\"_active\":false,\"name\":\"Charlie Harrington\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui.\",\"number_star\":5,\"avatar\":3}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', NULL, 1, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(3, 'Home Space', '[{\"type\":\"form_search_space\",\"name\":\"Space: Form Search\",\"model\":{\"title\":\"Find your next rental\",\"sub_title\":\"Book incredible things to do around the world.\",\"bg_image\":61},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_space\",\"name\":\"Space: List Items\",\"model\":{\"title\":\"Recommended Homes\",\"number\":5,\"style\":\"carousel\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\",\"desc\":\"Homes highly rated for thoughtful design\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"space_term_featured_box\",\"name\":\"Space: Term Featured Box\",\"model\":{\"title\":\"Find a Home Type\",\"desc\":\"It is a long established fact that a reader\",\"term_space\":[\"26\",\"27\",\"28\",\"29\",\"30\",\"31\"]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":\"space\",\"title\":\"Top Destinations\",\"number\":6,\"order\":\"id\",\"order_by\":\"desc\",\"layout\":\"style_2\",\"desc\":\"It is a long established fact that a reader\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_space\",\"name\":\"Space: List Items\",\"model\":{\"title\":\" Rental Listing\",\"desc\":\"Homes highly rated for thoughtful design\",\"number\":4,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"Know your city?\",\"sub_title\":\"Join 2000+ locals & 1200+ contributors from 3000 cities\",\"link_title\":\"Become Local Expert\",\"link_more\":\"#\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', NULL, 1, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(4, 'Home Hotel', '[{\"type\":\"form_search_hotel\",\"name\":\"Hotel: Form Search\",\"model\":{\"title\":\"Find Your Perfect Hotels\",\"sub_title\":\"Get the best prices on 20,000+ properties\",\"bg_image\":92},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":false,\"title\":\"20,000+ properties\",\"sub_title\":\"Morbi semper fames lobortis ac hac penatibus\",\"icon_image\":103,\"order\":null},{\"_active\":false,\"title\":\"Trust & Safety\",\"sub_title\":\"Morbi semper fames lobortis ac hac penatibus\",\"icon_image\":104,\"order\":null},{\"_active\":true,\"title\":\"Best Price Guarantee\",\"sub_title\":\"Morbi semper fames lobortis ac hac penatibus\",\"icon_image\":105,\"order\":null}],\"style\":\"normal\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_hotel\",\"name\":\"Hotel: List Items\",\"model\":{\"title\":\"Last Minute Deals\",\"desc\":\"Hotel highly rated for thoughtful design\",\"number\":5,\"style\":\"carousel\",\"location_id\":\"\",\"order\":\"\",\"order_by\":\"\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":\"hotel\",\"title\":\"Top Destinations\",\"desc\":\"It is a long established fact that a reader\",\"number\":6,\"layout\":\"style_3\",\"order\":\"\",\"order_by\":\"\",\"to_location_detail\":false},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"text\",\"name\":\"Text\",\"model\":{\"content\":\"<h2><span style=\\\"color: #1a2b48; font-family: Poppins, sans-serif; font-size: 28px; font-weight: 500; background-color: #ffffff;\\\">Why be a Local Expert</span></h2>\\n<div><span style=\\\"color: #5e6d77; font-family: Poppins, sans-serif; font-size: 10pt; background-color: #ffffff;\\\">Varius massa maecenas et id dictumst mattis</span></div>\",\"class\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":false,\"title\":\"Earn an additional income\",\"sub_title\":\"Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":15,\"order\":null},{\"_active\":false,\"title\":\"Open your network\",\"sub_title\":\"Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":14,\"order\":null},{\"_active\":false,\"title\":\"Practice your language\",\"sub_title\":\"Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":13,\"order\":null}],\"style\":\"style3\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_hotel\",\"name\":\"Hotel: List Items\",\"model\":{\"title\":\"Bestseller Listing\",\"desc\":\"Hotel highly rated for thoughtful design\",\"number\":8,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', NULL, 1, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(5, 'Become a vendor', '[{\"type\":\"vendor_register_form\",\"name\":\"Vendor Register Form\",\"model\":{\"title\":\"Become a vendor\",\"desc\":\"Join our community to unlock your greatest asset and welcome paying guests into your home.\",\"youtube\":\"https://www.youtube.com/watch?v=AmZ0WrEaf34\",\"bg_image\":11},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"text\",\"name\":\"Text\",\"model\":{\"content\":\"<h3><strong>How does it work?</strong></h3>\",\"class\":\"text-center\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":false,\"title\":\"Sign up\",\"sub_title\":\"Click edit button to change this text  to change this text\",\"icon_image\":null,\"order\":null},{\"_active\":false,\"title\":\" Add your services\",\"sub_title\":\" Click edit button to change this text  to change this text\",\"icon_image\":null,\"order\":null},{\"_active\":true,\"title\":\"Get bookings\",\"sub_title\":\" Click edit button to change this text  to change this text\",\"icon_image\":null,\"order\":null}],\"style\":\"style2\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"video_player\",\"name\":\"Video Player\",\"model\":{\"title\":\"Share the beauty of your city\",\"youtube\":\"https://www.youtube.com/watch?v=hHUbLv4ThOo\",\"bg_image\":12},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"text\",\"name\":\"Text\",\"model\":{\"content\":\"<h3><strong>Why be a Local Expert</strong></h3>\",\"class\":\"text-center ptb60\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":false,\"title\":\"Earn an additional income\",\"sub_title\":\" Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":15,\"order\":null},{\"_active\":true,\"title\":\"Open your network\",\"sub_title\":\" Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":14,\"order\":null},{\"_active\":true,\"title\":\"Practice your language\",\"sub_title\":\" Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":13,\"order\":null}],\"style\":\"style3\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"faqs\",\"name\":\"FAQ List\",\"model\":{\"title\":\"FAQs\",\"list_item\":[{\"_active\":false,\"title\":\"How will I receive my payment?\",\"sub_title\":\" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.\"},{\"_active\":true,\"title\":\"How do I upload products?\",\"sub_title\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.\"},{\"_active\":true,\"title\":\"How do I update or extend my availabilities?\",\"sub_title\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.\\n\"},{\"_active\":true,\"title\":\"How do I increase conversion rate?\",\"sub_title\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.\"}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', NULL, 1, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL),
(6, 'Home Car', '[{\"type\":\"form_search_car\",\"name\":\"Car: Form Search\",\"model\":{\"title\":\"Search Rental Car Deals\",\"sub_title\":\"Book better cars from local hosts across the US and around the world.\",\"bg_image\":122},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":true,\"title\":\"Free Cancellation\",\"sub_title\":\"Morbi semper fames lobortis ac\",\"icon_image\":103,\"order\":null},{\"_active\":true,\"title\":\"No Hidden Costs\",\"sub_title\":\"Morbi semper fames lobortis\",\"icon_image\":104,\"order\":null},{\"_active\":true,\"title\":\"24/7 Customer Care\",\"sub_title\":\"Morbi semper fames lobortis\",\"icon_image\":105,\"order\":null}],\"style\":\"normal\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"car_term_featured_box\",\"name\":\"Car: Term Featured Box\",\"model\":{\"title\":\"Browse by categories\",\"desc\":\"Book incredible things to do around the world.\",\"term_car\":[\"68\",\"67\",\"66\",\"65\",\"64\",\"63\",\"62\",\"61\"]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_car\",\"name\":\"Car: List Items\",\"model\":{\"title\":\"Trending used cars\",\"desc\":\"Book incredible things to do around the world.\",\"number\":8,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"how_it_works\",\"name\":\"How It Works\",\"model\":{\"title\":\"How does it work?\",\"list_item\":[{\"_active\":false,\"title\":\"Find The Car\",\"sub_title\":\"Lorem Ipsum is simply dummy text of the printing\",\"icon_image\":132,\"order\":null},{\"_active\":false,\"title\":\"Book It\",\"sub_title\":\"Lorem Ipsum is simply dummy text of the printing\",\"icon_image\":133,\"order\":null},{\"_active\":false,\"title\":\"Grab And Go\",\"sub_title\":\"Lorem Ipsum is simply dummy text of the printing\",\"icon_image\":134,\"order\":null}],\"background_image\":131},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":[\"car\"],\"title\":\"Top destinations\",\"desc\":\"Lorem Ipsum is simply dummy text of the printing\",\"number\":6,\"layout\":\"style_2\",\"order\":\"id\",\"order_by\":\"asc\",\"to_location_detail\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', NULL, 1, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_template_translations`
--

CREATE TABLE `core_template_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_template_translations`
--

INSERT INTO `core_template_translations` (`id`, `origin_id`, `locale`, `title`, `content`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 1, 'ja', 'Home Page', '[{\"type\":\"form_search_all_service\",\"name\":\"Form Search All Service\",\"model\":{\"service_types\":[\"hotel\",\"space\",\"tour\",\"car\"],\"title\":\"こんにちは！\",\"sub_title\":\"どこに行きたい？\",\"bg_image\":16},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"offer_block\",\"name\":\"Offer Block\",\"model\":{\"list_item\":[{\"_active\":true,\"title\":\"特別オファー\",\"desc\":\"最適なホテルを探す<br>\\n20,000以上の物件の価格<br>\\n上の最高の価格\",\"background_image\":17,\"link_title\":\"取引\",\"link_more\":\"#\",\"featured_text\":\"ホリデーセール\"},{\"_active\":true,\"title\":\"ニュースレター\",\"desc\":\"無料で参加して取得 <br>\\nに合わせたニュースレター<br>\\nホット旅行情報。\",\"background_image\":18,\"link_title\":\"サインアップ\",\"link_more\":\"/register\",\"featured_icon\":\"icofont-email\"},{\"_active\":true,\"title\":\"旅行のヒント\",\"desc\":\"旅行の専門家からのヒント <br>\\nあなたの次の<br>\\nより良い。\",\"background_image\":19,\"link_title\":\"サインアップ\",\"link_more\":\"/register\",\"featured_text\":null,\"featured_icon\":\"icofont-island-alt\"}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_hotel\",\"name\":\"Hotel: List Items\",\"model\":{\"title\":\"ベストセラーリスト\",\"desc\":\"思慮深いデザインで高い評価を得ているホテル\",\"number\":4,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":[\"space\",\"hotel\",\"tour\"],\"title\":\"人気の目的地\",\"desc\":\"読者が\",\"number\":6,\"layout\":\"style_4\",\"order\":\"id\",\"order_by\":\"asc\",\"to_location_detail\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_tours\",\"name\":\"Tour: List Items\",\"model\":{\"title\":\"最高のプロモーションツアー\",\"number\":6,\"style\":\"box_shadow\",\"category_id\":\"\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\",\"is_featured\":\"\",\"desc\":\"最も人気のある目的地\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_space\",\"name\":\"Space: List Items\",\"model\":{\"title\":\"賃貸物件\",\"desc\":\"思慮深いデザインで高い評価を受けている家\",\"number\":4,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_car\",\"name\":\"Car: List Items\",\"model\":{\"title\":\"Car Trending\",\"desc\":\"Book incredible things to do around the world.\",\"number\":8,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true},{\"type\": \"list_news\", \"name\": \"News: List Items\", \"model\": {\"title\": \"Read the latest from blog\", \"desc\": \"Contrary to popular belief\", \"number\": 6, \"category_id\": null, \"order\": \"id\", \"order_by\": \"asc\"}, \"component\": \"RegularBlock\", \"open\": true, \"is_container\": false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"あなたの街を知？\",\"sub_title\":\"3000以上の都市から2000人以上の地元民と\",\"link_title\":\"ローカルエ\",\"link_more\":\"#\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"testimonial\",\"name\":\"List Testimonial\",\"model\":{\"title\":\"私たちの幸せなクライアント\",\"list_item\":[{\"_active\":false,\"name\":\"Eva Hicks\",\"desc\":\"右ずへやん間申ゃ投法けゃイ仙一もと政情ルた食的て代下ずせに丈律ルラモト聞探チト棋90績ム的社ず置攻景リフノケ内兼唱堅ゃフぼ。場ルアハ美\",\"number_star\":5,\"avatar\":1},{\"_active\":false,\"name\":\"Donald Wolf\",\"desc\":\"右ずへやん間申ゃ投法けゃイ仙一もと政情ルた食的て代下ずせに丈律ルラモト聞探チト棋90績ム的社ず置攻景リフノケ内兼唱堅ゃフぼ。場ルアハ美\",\"number_star\":6,\"avatar\":2},{\"_active\":true,\"name\":\"Charlie Harrington\",\"desc\":\"右ずへやん間申ゃ投法けゃイ仙一もと政情ルた食的て代下ずせに丈律ルラモト聞探チト棋90績ム的社ず置攻景リフノケ内兼唱堅ゃフぼ。場ルアハ美\",\"number_star\":5,\"avatar\":3}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', 1, NULL, '2021-10-03 01:47:29', NULL),
(2, 2, 'ja', 'Home Tour', '[{\"type\":\"form_search_tour\",\"name\":\"Tour: Form Search\",\"model\":{\"title\":\"どこへ行くのが大好き\",\"sub_title\":\"世界中で信じられないようなことを予約しましょう。\",\"bg_image\":20},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":true,\"title\":\"1,000+ ローカルガイド\",\"sub_title\":\"プロのツアーガイドとーガイドとーガイドと 験。 光の\",\"icon_image\":5},{\"_active\":true,\"title\":\"手作りの体験\",\"sub_title\":\"プロのツアーガイドとーガイドとーガイドと 験。 光の\",\"icon_image\":4},{\"_active\":true,\"title\":\"96% 幸せな旅行者\",\"sub_title\":\"プロのツアーガイドとーガイドとーガイドと 験。 光の\",\"icon_image\":6}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_tours\",\"name\":\"Tour: List Items\",\"model\":{\"title\":\"トレンドツアー\",\"number\":5,\"style\":\"carousel\",\"category_id\":\"\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"title\":\"人気の目的地\",\"number\":5,\"order\":\"id\",\"order_by\":\"desc\",\"service_type\":\"tour\",\"desc\":\"\",\"layout\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_tours\",\"name\":\"Tour: List Items\",\"model\":{\"title\":\"あなたが好きになるローカル体験\",\"number\":8,\"style\":\"normal\",\"category_id\":\"\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"っていますか？\",\"sub_title\":\"3000以上の都市から2000人以上の地元民と1200人以上の貢献者に参加する\",\"link_title\":\"ローカルエ\",\"link_more\":\"#\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"testimonial\",\"name\":\"List Testimonial\",\"model\":{\"title\":\"私たちの幸せなクライアント\",\"list_item\":[{\"_active\":false,\"name\":\"Eva Hicks\",\"desc\":\"融づ苦佐とき百配ほづあ禁安テクミ真覧チヱフ行乗ぱたば外味ナ演庭コヲ旅見ヨコ優成コネ治確はろね訪来終島抄がん。\",\"number_star\":5,\"avatar\":1},{\"_active\":false,\"name\":\"Donald Wolf\",\"desc\":\"融づ苦佐とき百配ほづあ禁安テクミ真覧チヱフ行乗ぱたば外味ナ演庭コヲ旅見ヨコ優成コネ治確はろね訪来終島抄がん。\",\"number_star\":6,\"avatar\":2},{\"_active\":true,\"name\":\"Charlie Harrington\",\"desc\":\"右ずへやん間申ゃ投法けゃイ仙一もと政情ルた食的て代下ずせに丈律ルラモト聞探チト棋90績ム的社ず置攻景リフノケ内兼唱堅ゃフぼ。場ルアハ美\",\"number_star\":5,\"avatar\":3}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', 1, NULL, '2021-10-03 01:47:29', NULL),
(3, 3, 'ja', 'Home Space', '[{\"type\":\"form_search_space\",\"name\":\"Space: Form Search\",\"model\":{\"title\":\"次のレンタルを探す\",\"sub_title\":\"世界中で信じられないようなことを予約しましょう。\",\"bg_image\":61},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_space\",\"name\":\"Space: List Items\",\"model\":{\"title\":\"おすすめの家\",\"number\":5,\"style\":\"carousel\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\",\"desc\":\"思慮深いデザインで高い評価を受けている家\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"space_term_featured_box\",\"name\":\"Space: Term Featured Box\",\"model\":{\"title\":\"ホームタイプを見つける\",\"desc\":\"これは、読者はその長い既成の事実であります\",\"term_space\":[\"26\",\"27\",\"28\",\"29\",\"30\",\"31\"]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":\"space\",\"title\":\"人気の目的地\",\"number\":6,\"order\":\"id\",\"order_by\":\"desc\",\"layout\":\"style_2\",\"desc\":\"これは、読者はその長い既成の事実であります\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_space\",\"name\":\"Space: List Items\",\"model\":{\"title\":\"賃貸物件\",\"desc\":\"思慮深いデザインで高い評価を受けている家\",\"number\":4,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"desc\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"っていますか？\",\"sub_title\":\"3000以上の都市から2000人以上の地元民と1200人以上の貢献者に参加する\",\"link_title\":\"ローカルエ\",\"link_more\":\"#\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', 1, NULL, '2021-10-03 01:47:29', NULL),
(4, 4, 'ja', 'Home Hotel', '[{\"type\":\"form_search_hotel\",\"name\":\"Hotel: Form Search\",\"model\":{\"title\":\"最適なホテルを探す\",\"sub_title\":\"20,000以上のプロパティで最高の価格を取得\",\"bg_image\":92},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":false,\"title\":\"20,000以上のプロパティ\",\"sub_title\":\"これは飢饉は常にlobortis交流pede Suspendisseたです\",\"icon_image\":103,\"order\":null},{\"_active\":false,\"title\":\"信頼と安全性\",\"sub_title\":\"これは飢饉は常にlobortis交流pede Suspendisseたです\",\"icon_image\":104,\"order\":null},{\"_active\":false,\"title\":\"ベストプライス保証\",\"sub_title\":\"これは飢饉は常にlobortis交流pede Suspendisseたです\",\"icon_image\":105,\"order\":null}],\"style\":\"normal\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_hotel\",\"name\":\"Hotel: List Items\",\"model\":{\"title\":\"直前予約\",\"desc\":\"思慮深いデザインで高い評価を得ているホテル\",\"number\":5,\"style\":\"carousel\",\"location_id\":\"\",\"order\":\"\",\"order_by\":\"\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":\"hotel\",\"title\":\"人気の目的地\",\"desc\":\"それは長い間確立された事実であり、\",\"number\":6,\"layout\":\"style_3\",\"order\":\"\",\"order_by\":\"\",\"to_location_detail\":false},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"text\",\"name\":\"Text\",\"model\":{\"content\":\"<h2><span style=\\\"color: #1a2b48; font-family: Poppins, sans-serif; font-size: 28px; font-weight: 500; background-color: #ffffff;\\\">ローカルエキスパートになる理由</span></h2>\\n<div><span style=\\\"color: #5e6d77; font-family: Poppins, sans-serif; font-size: 10pt; background-color: #ffffff;\\\">様々な質量マエケナスとその格言不動産</span></div>\\n<div id=\\\"gtx-trans\\\" style=\\\"position: absolute; left: -118px; top: 55.8125px;\\\">\\n<div class=\\\"gtx-trans-icon\\\">&nbsp;</div>\\n</div>\",\"class\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"list_item\":[{\"_active\":false,\"title\":\"追加の収入を得る\",\"sub_title\":\"Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":15,\"order\":null},{\"_active\":false,\"title\":\"ネットワークを開く\",\"sub_title\":\"Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":14,\"order\":null},{\"_active\":false,\"title\":\"あなたの言語を練習する\",\"sub_title\":\"Ut elit tellus, luctus nec ullamcorper mattis\",\"icon_image\":13,\"order\":null}],\"style\":\"style3\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_hotel\",\"name\":\"Hotel: List Items\",\"model\":{\"title\":\"ベストセラーリスト\",\"desc\":\"思慮深いデザインで高い評価を得ているホテル\",\"number\":8,\"style\":\"normal\",\"location_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', 1, NULL, '2021-10-03 01:47:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_translations`
--

CREATE TABLE `core_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `string` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `last_build_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_vendor_plans`
--

CREATE TABLE `core_vendor_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_commission` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_vendor_plan_meta`
--

CREATE TABLE `core_vendor_plan_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_plan_id` int(11) NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` tinyint(4) DEFAULT NULL,
  `maximum_create` int(11) DEFAULT NULL,
  `auto_publish` tinyint(4) DEFAULT NULL,
  `commission` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media_files`
--

CREATE TABLE `media_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `app_id` int(11) DEFAULT NULL,
  `app_user_id` int(11) DEFAULT NULL,
  `file_width` int(11) DEFAULT NULL,
  `file_height` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_files`
--

INSERT INTO `media_files` (`id`, `file_name`, `file_path`, `file_size`, `file_type`, `file_extension`, `create_user`, `update_user`, `deleted_at`, `app_id`, `app_user_id`, `file_width`, `file_height`, `created_at`, `updated_at`) VALUES
(1, 'avatar', 'demo/general/avatar.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'avatar-2', 'demo/general/avatar-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'avatar-3', 'demo/general/avatar-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'ico_adventurous', 'demo/general/ico_adventurous.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'ico_localguide', 'demo/general/ico_localguide.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'ico_maps', 'demo/general/ico_maps.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'ico_paymethod', 'demo/general/ico_paymethod.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'logo', 'demo/general/logo.svg', NULL, 'image/svg+xml', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'bg_contact', 'demo/general/bg-contact.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'favicon', 'demo/general/favicon.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'thumb-vendor-register', 'demo/general/thumb-vendor-register.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'bg-video-vendor-register1', 'demo/general/bg-video-vendor-register1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'ico_chat_1', 'demo/general/ico_chat_1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'ico_friendship_1', 'demo/general/ico_friendship_1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'ico_piggy-bank_1', 'demo/general/ico_piggy-bank_1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'home-mix', 'demo/general/home-mix.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'image_home_mix_1', 'demo/general/image_home_mix_1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'image_home_mix_2', 'demo/general/image_home_mix_2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'image_home_mix_3', 'demo/general/image_home_mix_3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'banner-search', 'demo/tour/banner-search.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'tour-1', 'demo/tour/tour-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'tour-2', 'demo/tour/tour-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'tour-3', 'demo/tour/tour-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'tour-4', 'demo/tour/tour-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'tour-5', 'demo/tour/tour-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'tour-6', 'demo/tour/tour-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'tour-7', 'demo/tour/tour-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'tour-8', 'demo/tour/tour-8.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'tour-9', 'demo/tour/tour-9.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'tour-10', 'demo/tour/tour-10.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'tour-11', 'demo/tour/tour-11.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'tour-12', 'demo/tour/tour-12.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'tour-13', 'demo/tour/tour-13.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'tour-14', 'demo/tour/tour-14.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'tour-15', 'demo/tour/tour-15.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'tour-16', 'demo/tour/tour-16.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'gallery-1', 'demo/tour/gallery-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'gallery-2', 'demo/tour/gallery-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'gallery-3', 'demo/tour/gallery-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'gallery-4', 'demo/tour/gallery-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'gallery-5', 'demo/tour/gallery-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'gallery-6', 'demo/tour/gallery-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'gallery-7', 'demo/tour/gallery-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'banner-tour-1', 'demo/tour/banner-detail/banner-tour-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'banner-tour-2', 'demo/tour/banner-detail/banner-tour-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'banner-tour-3', 'demo/tour/banner-detail/banner-tour-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'banner-tour-4', 'demo/tour/banner-detail/banner-tour-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'banner-tour-5', 'demo/tour/banner-detail/banner-tour-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'banner-tour-6', 'demo/tour/banner-detail/banner-tour-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'banner-tour-7', 'demo/tour/banner-detail/banner-tour-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'banner-tour-8', 'demo/tour/banner-detail/banner-tour-8.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'banner-tour-9', 'demo/tour/banner-detail/banner-tour-9.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'banner-tour-10', 'demo/tour/banner-detail/banner-tour-10.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'banner-tour-11', 'demo/tour/banner-detail/banner-tour-11.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'banner-tour-12', 'demo/tour/banner-detail/banner-tour-12.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'banner-tour-13', 'demo/tour/banner-detail/banner-tour-13.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'banner-tour-14', 'demo/tour/banner-detail/banner-tour-14.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'banner-tour-15', 'demo/tour/banner-detail/banner-tour-15.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'banner-tour-16', 'demo/tour/banner-detail/banner-tour-16.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'banner-tour-17', 'demo/tour/banner-detail/banner-tour-17.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'banner-search-space', 'demo/space/banner-search-space.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'banner-search-space-2', 'demo/space/banner-search-space-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'space-1', 'demo/space/space-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'space-2', 'demo/space/space-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'space-3', 'demo/space/space-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'space-4', 'demo/space/space-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'space-5', 'demo/space/space-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'space-6', 'demo/space/space-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'space-7', 'demo/space/space-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'space-8', 'demo/space/space-8.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'space-9', 'demo/space/space-9.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'space-10', 'demo/space/space-10.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'space-11', 'demo/space/space-11.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'space-12', 'demo/space/space-12.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'space-13', 'demo/space/space-13.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'space-gallery-1', 'demo/space/gallery/space-gallery-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'space-gallery-2', 'demo/space/gallery/space-gallery-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'space-gallery-3', 'demo/space/gallery/space-gallery-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'space-gallery-4', 'demo/space/gallery/space-gallery-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'space-gallery-5', 'demo/space/gallery/space-gallery-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'space-gallery-6', 'demo/space/gallery/space-gallery-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'space-gallery-7', 'demo/space/gallery/space-gallery-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'space-single-1', 'demo/space/space-single-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'space-single-2', 'demo/space/space-single-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'space-single-3', 'demo/space/space-single-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'icon-space-box-1', 'demo/space/featured-box/icon-space-box-1.png', NULL, 'image/png', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'icon-space-box-2', 'demo/space/featured-box/icon-space-box-2.png', NULL, 'image/png', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'icon-space-box-3', 'demo/space/featured-box/icon-space-box-3.png', NULL, 'image/png', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'icon-space-box-4', 'demo/space/featured-box/icon-space-box-4.png', NULL, 'image/png', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'icon-space-box-5', 'demo/space/featured-box/icon-space-box-5.png', NULL, 'image/png', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'icon-space-box-6', 'demo/space/featured-box/icon-space-box-6.png', NULL, 'image/png', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'banner-search-hotel', 'demo/hotel/banner-search-hotel.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'hotel-featured-1', 'demo/hotel/hotel-featured-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'hotel-featured-2', 'demo/hotel/hotel-featured-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'hotel-featured-3', 'demo/hotel/hotel-featured-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'hotel-featured-4', 'demo/hotel/hotel-featured-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'hotel-gallery-1', 'demo/hotel/gallery/hotel-gallery-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'hotel-gallery-2', 'demo/hotel/gallery/hotel-gallery-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'hotel-gallery-3', 'demo/hotel/gallery/hotel-gallery-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'hotel-gallery-4', 'demo/hotel/gallery/hotel-gallery-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'hotel-gallery-5', 'demo/hotel/gallery/hotel-gallery-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'hotel-gallery-6', 'demo/hotel/gallery/hotel-gallery-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'hotel-icon-1', 'demo/hotel/hotel-icon-1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'hotel-icon-2', 'demo/hotel/hotel-icon-2.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'hotel-icon-3', 'demo/hotel/hotel-icon-3.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'location-1', 'demo/location/location-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'location-2', 'demo/location/location-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'location-3', 'demo/location/location-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'location-4', 'demo/location/location-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'location-5', 'demo/location/location-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'banner-location-1', 'demo/location/banner-detail/banner-location-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'trip-idea-1', 'demo/location/trip-idea/trip-idea-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'trip-idea-2', 'demo/location/trip-idea/trip-idea-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'news-1', 'demo/news/news-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'news-2', 'demo/news/news-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'news-3', 'demo/news/news-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'news-4', 'demo/news/news-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'news-5', 'demo/news/news-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'news-6', 'demo/news/news-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'news-7', 'demo/news/news-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'news-banner', 'demo/news/news-banner.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'banner-search-car', 'demo/car/banner-search-car.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'Convertibles', 'demo/car/terms/convertibles.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'Coupes', 'demo/car/terms/couple.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'Hatchbacks', 'demo/car/terms/hatchback.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'Minivans', 'demo/car/terms/minivans.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'Sedan', 'demo/car/terms/sedan.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'SUVs', 'demo/car/terms/suv.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'Trucks', 'demo/car/terms/trucks.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'Wagons', 'demo/car/terms/wagons.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'home-car-bg-1', 'demo/car/home-car-bg-1.png', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'number-1', 'demo/car/number-1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'number-2', 'demo/car/number-2.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'number-3', 'demo/car/number-3.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'banner-car-single', 'demo/car/banner-single.jpg', NULL, 'image/jpg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'Airbag', 'demo/car/feature/Airbag.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 'FM Radio', 'demo/car/feature/Radio.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 'Sensor', 'demo/car/feature/Sensor.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'Speed Km', 'demo/car/feature/Speed.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 'Steering Wheel', 'demo/car/feature/Steering.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'Power Windows', 'demo/car/feature/Windows.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'car-1', 'demo/car/car-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'car-2', 'demo/car/car-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 'car-3', 'demo/car/car-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, 'car-4', 'demo/car/car-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, 'car-5', 'demo/car/car-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, 'car-6', 'demo/car/car-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 'car-7', 'demo/car/car-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, 'car-8', 'demo/car/car-8.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, 'car-9', 'demo/car/car-9.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'car-10', 'demo/car/car-10.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, 'car-11', 'demo/car/car-11.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, 'car-12', 'demo/car/car-12.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 'car-gallery-1', 'demo/car/gallery-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 'car-gallery-2', 'demo/car/gallery-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'car-gallery-3', 'demo/car/gallery-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 'car-gallery-4', 'demo/car/gallery-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, 'car-gallery-5', 'demo/car/gallery-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, 'car-gallery-6', 'demo/car/gallery-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, 'car-gallery-7', 'demo/car/gallery-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, 'banner-search-event', 'demo/event/banner-search.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, 'event-1', 'demo/event/event-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, 'event-2', 'demo/event/event-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, 'event-3', 'demo/event/event-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, 'event-4', 'demo/event/event-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, 'event-5', 'demo/event/event-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, 'event-6', 'demo/event/event-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, 'event-7', 'demo/event/event-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, 'event-8', 'demo/event/event-8.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, 'event-9', 'demo/event/event-9.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, 'event-10', 'demo/event/event-10.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, 'event-11', 'demo/event/event-11.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, 'event-12', 'demo/event/event-12.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, 'gallery-event-1', 'demo/event/gallery-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, 'gallery-event-2', 'demo/event/gallery-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, 'gallery-event-3', 'demo/event/gallery-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, 'gallery-event-4', 'demo/event/gallery-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, 'gallery-event-5', 'demo/event/gallery-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, 'gallery-event-6', 'demo/event/gallery-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, 'banner-event-1', 'demo/event/banner-detail/banner-event-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, 'banner-event-2', 'demo/event/banner-detail/banner-event-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, 'banner-event-3', 'demo/event/banner-detail/banner-event-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_13_174533_create_permission_tables', 1),
(4, '2019_03_17_114820_create_table_core_pages', 1),
(5, '2019_03_17_140539_create_media_files_table', 1),
(6, '2019_03_20_072502_create_bravo_tours', 1),
(7, '2019_03_20_081256_create_core_news_category_table', 1),
(8, '2019_03_27_081940_create_core_setting_table', 1),
(9, '2019_03_28_101009_create_bravo_booking_table', 1),
(10, '2019_03_28_165911_create_booking_meta_table', 1),
(11, '2019_03_29_093236_update_bookings_table', 1),
(12, '2019_04_01_045229_create_user_meta_table', 1),
(13, '2019_04_01_150630_create_menu_table', 1),
(14, '2019_04_02_150630_create_core_news_table', 1),
(15, '2019_04_03_073553_bravo_tour_category', 1),
(16, '2019_04_03_080159_bravo_location', 1),
(17, '2019_04_05_143248_create_core_templates_table', 1),
(18, '2019_04_18_152537_create_bravo_tours_meta_table', 1),
(19, '2019_05_07_085430_create_core_languages_table', 1),
(20, '2019_05_07_085442_create_core_translations_table', 1),
(21, '2019_05_17_074008_create_bravo_review', 1),
(22, '2019_05_17_074048_create_bravo_review_meta', 1),
(23, '2019_05_17_113042_create_tour_attrs_table', 1),
(24, '2019_05_21_084235_create_bravo_contact_table', 1),
(25, '2019_05_28_152845_create_core_subscribers_table', 1),
(26, '2019_06_17_142338_bravo_seo', 1),
(27, '2019_07_03_070406_update_from_1_0_to_1_1', 1),
(28, '2019_07_08_075436_create_core_vendor_plans', 1),
(29, '2019_07_08_083733_create_vendors_plan_payments', 1),
(30, '2019_07_11_083501_update_from_110_to_120', 1),
(31, '2019_07_30_072809_create_space_table', 1),
(32, '2019_07_30_072809_create_tour_dates_table', 1),
(33, '2019_08_05_031018_create_core_vendor_plan_meta_table', 1),
(34, '2019_08_09_163909_create_inbox_table', 1),
(35, '2019_08_16_094354_update_from_120_to_130', 1),
(36, '2019_08_20_162106_create_table_user_upgrade_requests', 1),
(37, '2019_09_13_070650_update_from_130_to_140', 1),
(38, '2019_09_20_072809_create_hotel_table', 1),
(39, '2019_10_22_151319_create_car_table', 1),
(40, '2019_10_22_151319_create_social_table', 1),
(41, '2019_11_05_092516_update_from_140_to_150', 1),
(42, '2019_11_18_085024_update_from_150_to_151', 1),
(43, '2020_03_09_102753_update_from_151_to_160', 1),
(44, '2020_04_02_150631_create_core_tags_table', 1),
(45, '2020_04_05_101016_create_event_table', 1),
(46, '2020_05_16_073120_update_from_160_to_170', 1),
(47, '2021_04_02_150632_create_core_tag_new_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_forums`
--

CREATE TABLE `social_forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_forums`
--

INSERT INTO `social_forums` (`id`, `name`, `content`, `slug`, `status`, `icon`, `icon_image`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 'Solo Travel', NULL, 'solo-travel', 'publish', 'fa fa-cloud', NULL, NULL, NULL, '2021-10-03 01:47:31', '2021-10-03 01:47:31'),
(2, 'Road Trips', NULL, 'road-trips', 'publish', 'fa fa-bear', NULL, NULL, NULL, '2021-10-03 01:47:31', '2021-10-03 01:47:31'),
(3, 'Travel Gadgets and Gear', NULL, 'travel-gadgets-and-gear', 'publish', 'fa fa-gear', NULL, NULL, NULL, '2021-10-03 01:47:31', '2021-10-03 01:47:31'),
(4, 'Family Travel', NULL, 'family-travel', 'publish', 'fa fa-map-o', NULL, NULL, NULL, '2021-10-03 01:47:31', '2021-10-03 01:47:31'),
(5, 'Honeymoons and Romance', NULL, 'honeymoons-and-romance', 'publish', 'fa fa-heartbeat', NULL, NULL, NULL, '2021-10-03 01:47:31', '2021-10-03 01:47:31'),
(6, 'Outdoors', NULL, 'outdoors', 'publish', 'fa fa-paper-plane-o', NULL, NULL, NULL, '2021-10-03 01:47:31', '2021-10-03 01:47:31'),
(7, 'Traveling with Pets', NULL, 'traveling-with-pets', 'publish', 'fa fa-paw', NULL, NULL, NULL, '2021-10-03 01:47:31', '2021-10-03 01:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `social_groups`
--

CREATE TABLE `social_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image` bigint(20) DEFAULT NULL,
  `banner_image` bigint(20) DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_id` bigint(20) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_group_user`
--

CREATE TABLE `social_group_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_posts`
--

CREATE TABLE `social_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forum_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `file_id` bigint(20) DEFAULT NULL,
  `file_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `comment_disabled_by` bigint(20) DEFAULT NULL,
  `privary` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_post_comments`
--

CREATE TABLE `social_post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `file_id` bigint(20) DEFAULT NULL,
  `file_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_user_follow`
--

CREATE TABLE `social_user_follow` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `avatar_id` bigint(20) DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `vendor_commission_amount` int(11) DEFAULT NULL,
  `vendor_commission_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `payment_gateway` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_guests` int(11) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_submit_status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `address`, `address2`, `phone`, `birthday`, `city`, `state`, `country`, `zip_code`, `last_login_at`, `avatar_id`, `bio`, `status`, `create_user`, `update_user`, `vendor_commission_amount`, `vendor_commission_type`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `payment_gateway`, `total_guests`, `locale`, `business_name`, `verify_submit_status`, `is_verified`) VALUES
(1, 'System Admin', 'System', 'Admin', 'admin@dev.com', NULL, '$2y$10$VuvsPx9NeItLL8unQjen5uvbL4xvPIzX6//eBLhhE6HGsUAmAO/W.', NULL, NULL, '112 666 888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, 'meIFx3FWrr82O3V5yUnWdrpG1STjiXRe59X4TX3iTkvR38cOa6j1CcxtlG3m', '2021-10-03 01:47:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '', 'Vendor', '01', 'vendor1@dev.com', NULL, '$2y$10$2QaeWhVDGE/dPwkAHkVZt.ZBG3lFhOx26dtm3IUgeVYbT3LShG/8a', NULL, NULL, '112 666 888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '', 'Customer', '01', 'customer1@dev.com', NULL, '$2y$10$KcmZKpWt/j0pOqtWdUduk.QUfkWhLcHTc6PcqycKMuEHHyfW4n/aS', NULL, NULL, '112 666 888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '', 'Elise', 'Aarohi', 'Aarohi@dev.com', NULL, '$2y$10$691V1iJLHIzlwlgQi97R2eKR2MZrwQAjBsFPzut0J6ThpcLNguesW', NULL, NULL, '112 666 888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', 'Kaytlyn', 'Alvapriya', 'Alvapriya@dev.com', NULL, '$2y$10$x4mg95AjxDZmoult8Lob9.tRuuDWEDNlJVfbg364s.9bgEZo5ZwBS', NULL, NULL, '112 666 888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '', 'Lynne', 'Victoria', 'Victoria@dev.com', NULL, '$2y$10$MhHcB03FaPV1oCrsKZ7I8eHWq6kkFkpzQD48zvqmdgdle9QQqBmem', NULL, NULL, '112 666 888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '', 'Do', 'Quan', 'quandq@gmail.com', NULL, '$2y$10$w.XOAiwdE6pEpkiHUMNgvec8Ekc5uq7tOEEA2JGscGgvII34yxVim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '', 'William', 'Diana', 'Diana@dev.com', NULL, '$2y$10$Hqel2WKNphLPk/sZjGbmrOld.oHfL98K4BjeCnMj33rBw6133SzbS', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '', 'Sarah', 'Violet', 'Violet@dev.com', NULL, '$2y$10$J/XaRW9gT2VPkL7XCe.h4uZYSvoFwO1eB./YgEp6sT1F70zypX7Ty', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '', 'Paul', 'Amora', 'Amora@dev.com', NULL, '$2y$10$loEsxWcZu1rqog8eU11ybOhZPZ1UD87F9ZYV20CYjV7mEA5tf.GbC', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '', 'Richard', 'Davina', 'Davina@dev.com', NULL, '$2y$10$216mOMg43fyBGXmB0aedsuFPEP1TwxUtZEs8mgxURvF8RWnbzVxYm', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '', 'Shushi', 'Yashashree', 'Yashashree@dev.com', NULL, '$2y$10$emOgV4nUdfWzkrZEltbgQu8hWCNrgzvTQzziRdMf81KflWsz3Bym2', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '', 'Anne', 'Nami', 'Nami@dev.com', NULL, '$2y$10$duh2DUDn0lNW.rWdnQnB3u/i727h4ls3.zgCY96eLK8YUdD5/Btwe', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '', 'Bush', 'Elise', 'Elise@dev.com', NULL, '$2y$10$MQci/9oJqYmrFa8wRAZJvOpdrC9DehEJlGbayIavkqiXftCWMrk0m', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '', 'Elizabeth', 'Norah', 'Norah@dev.com', NULL, '$2y$10$cGCzvvTRQbtvNVWD.GotMOauGmMHz9zc5wPn/wAoDM5.dMxIA9olu', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '', 'James', 'Alia', 'Alia@dev.com', NULL, '$2y$10$VkXrpaFt.zNBvwXVOsFvPOujbwDVnTTsdz4WtASkKQY/GgzTvvRlW', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '', 'John', 'Dakshi', 'Dakshi@dev.com', NULL, '$2y$10$TOLhyb.XBIaYh07NW1GMSON9s2nlwXQZWeacUEVPksx7oQy3v9XNO', NULL, NULL, '888 999 777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'publish', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:47:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'pankaj sharma', 'pankaj', 'sharma', 'pankaj@gmail.com', NULL, '$2y$10$VuvsPx9NeItLL8unQjen5uvbL4xvPIzX6//eBLhhE6HGsUAmAO/W.', NULL, NULL, '9999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-03 01:54:51', '2021-10-03 01:54:51', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_upgrade_request`
--

CREATE TABLE `user_upgrade_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `role_request` int(11) DEFAULT NULL,
  `approved_time` datetime DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors_plan_payments`
--

CREATE TABLE `vendors_plan_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_gateway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_trial` int(11) NOT NULL,
  `price_per` enum('onetime','per_time') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'onetime',
  `price_unit` enum('day','month','year') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'day',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bravo_attrs`
--
ALTER TABLE `bravo_attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_attrs_translations`
--
ALTER TABLE `bravo_attrs_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bravo_attrs_translations_origin_id_locale_unique` (`origin_id`,`locale`);

--
-- Indexes for table `bravo_bookings`
--
ALTER TABLE `bravo_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_booking_meta`
--
ALTER TABLE `bravo_booking_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_booking_payments`
--
ALTER TABLE `bravo_booking_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_cars`
--
ALTER TABLE `bravo_cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_cars_slug_index` (`slug`);

--
-- Indexes for table `bravo_car_dates`
--
ALTER TABLE `bravo_car_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_car_term`
--
ALTER TABLE `bravo_car_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_car_translations`
--
ALTER TABLE `bravo_car_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_car_translations_locale_index` (`locale`);

--
-- Indexes for table `bravo_contact`
--
ALTER TABLE `bravo_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_enquiries`
--
ALTER TABLE `bravo_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_events`
--
ALTER TABLE `bravo_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_events_slug_index` (`slug`);

--
-- Indexes for table `bravo_event_dates`
--
ALTER TABLE `bravo_event_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_event_term`
--
ALTER TABLE `bravo_event_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_event_translations`
--
ALTER TABLE `bravo_event_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_event_translations_locale_index` (`locale`);

--
-- Indexes for table `bravo_hotels`
--
ALTER TABLE `bravo_hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_hotels_slug_index` (`slug`);

--
-- Indexes for table `bravo_hotel_rooms`
--
ALTER TABLE `bravo_hotel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_hotel_room_bookings`
--
ALTER TABLE `bravo_hotel_room_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_hotel_room_dates`
--
ALTER TABLE `bravo_hotel_room_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_hotel_room_term`
--
ALTER TABLE `bravo_hotel_room_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_hotel_room_translations`
--
ALTER TABLE `bravo_hotel_room_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_hotel_room_translations_locale_index` (`locale`);

--
-- Indexes for table `bravo_hotel_term`
--
ALTER TABLE `bravo_hotel_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_hotel_translations`
--
ALTER TABLE `bravo_hotel_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_hotel_translations_locale_index` (`locale`);

--
-- Indexes for table `bravo_locations`
--
ALTER TABLE `bravo_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_locations__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `bravo_location_translations`
--
ALTER TABLE `bravo_location_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bravo_location_translations_origin_id_locale_unique` (`origin_id`,`locale`);

--
-- Indexes for table `bravo_payouts`
--
ALTER TABLE `bravo_payouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_review`
--
ALTER TABLE `bravo_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_review_meta`
--
ALTER TABLE `bravo_review_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_seo`
--
ALTER TABLE `bravo_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_spaces`
--
ALTER TABLE `bravo_spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_spaces_slug_index` (`slug`);

--
-- Indexes for table `bravo_space_dates`
--
ALTER TABLE `bravo_space_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_space_term`
--
ALTER TABLE `bravo_space_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_space_translations`
--
ALTER TABLE `bravo_space_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_space_translations_locale_index` (`locale`);

--
-- Indexes for table `bravo_terms`
--
ALTER TABLE `bravo_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_terms_translations`
--
ALTER TABLE `bravo_terms_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bravo_terms_translations_origin_id_locale_unique` (`origin_id`,`locale`);

--
-- Indexes for table `bravo_tours`
--
ALTER TABLE `bravo_tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_tours_slug_index` (`slug`);

--
-- Indexes for table `bravo_tour_category`
--
ALTER TABLE `bravo_tour_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bravo_tour_category__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `bravo_tour_category_translations`
--
ALTER TABLE `bravo_tour_category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bravo_tour_category_translations_origin_id_locale_unique` (`origin_id`,`locale`);

--
-- Indexes for table `bravo_tour_dates`
--
ALTER TABLE `bravo_tour_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_tour_meta`
--
ALTER TABLE `bravo_tour_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_tour_term`
--
ALTER TABLE `bravo_tour_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bravo_tour_translations`
--
ALTER TABLE `bravo_tour_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bravo_tour_translations_origin_id_locale_unique` (`origin_id`,`locale`),
  ADD KEY `bravo_tour_translations_slug_index` (`slug`);

--
-- Indexes for table `core_inbox`
--
ALTER TABLE `core_inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_inbox_messages`
--
ALTER TABLE `core_inbox_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_languages`
--
ALTER TABLE `core_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_menus`
--
ALTER TABLE `core_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_menu_translations`
--
ALTER TABLE `core_menu_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_menu_translations_locale_index` (`locale`);

--
-- Indexes for table `core_model_has_permissions`
--
ALTER TABLE `core_model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `core_model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `core_model_has_roles`
--
ALTER TABLE `core_model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `core_model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `core_news`
--
ALTER TABLE `core_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_news_category`
--
ALTER TABLE `core_news_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_news_category__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `core_news_category_translations`
--
ALTER TABLE `core_news_category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_news_category_translations_locale_index` (`locale`);

--
-- Indexes for table `core_news_tag`
--
ALTER TABLE `core_news_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_news_translations`
--
ALTER TABLE `core_news_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_news_translations_locale_index` (`locale`);

--
-- Indexes for table `core_notifications`
--
ALTER TABLE `core_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_pages`
--
ALTER TABLE `core_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_pages_slug_index` (`slug`);

--
-- Indexes for table `core_page_translations`
--
ALTER TABLE `core_page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `core_page_translations_origin_id_locale_unique` (`origin_id`,`locale`),
  ADD KEY `core_page_translations_locale_index` (`locale`);

--
-- Indexes for table `core_permissions`
--
ALTER TABLE `core_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_roles`
--
ALTER TABLE `core_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_role_has_permissions`
--
ALTER TABLE `core_role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `core_role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `core_settings`
--
ALTER TABLE `core_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_subscribers`
--
ALTER TABLE `core_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_tags`
--
ALTER TABLE `core_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_tag_translations`
--
ALTER TABLE `core_tag_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_tag_translations_locale_index` (`locale`);

--
-- Indexes for table `core_templates`
--
ALTER TABLE `core_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_template_translations`
--
ALTER TABLE `core_template_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `core_template_translations_locale_index` (`locale`);

--
-- Indexes for table `core_translations`
--
ALTER TABLE `core_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_vendor_plans`
--
ALTER TABLE `core_vendor_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_vendor_plan_meta`
--
ALTER TABLE `core_vendor_plan_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_files`
--
ALTER TABLE `media_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `social_forums`
--
ALTER TABLE `social_forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_groups`
--
ALTER TABLE `social_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_group_user`
--
ALTER TABLE `social_group_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_posts`
--
ALTER TABLE `social_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_post_comments`
--
ALTER TABLE `social_post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_user_follow`
--
ALTER TABLE `social_user_follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_upgrade_request`
--
ALTER TABLE `user_upgrade_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors_plan_payments`
--
ALTER TABLE `vendors_plan_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bravo_attrs`
--
ALTER TABLE `bravo_attrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bravo_attrs_translations`
--
ALTER TABLE `bravo_attrs_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_bookings`
--
ALTER TABLE `bravo_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_booking_meta`
--
ALTER TABLE `bravo_booking_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_booking_payments`
--
ALTER TABLE `bravo_booking_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_cars`
--
ALTER TABLE `bravo_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bravo_car_dates`
--
ALTER TABLE `bravo_car_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_car_term`
--
ALTER TABLE `bravo_car_term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `bravo_car_translations`
--
ALTER TABLE `bravo_car_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_contact`
--
ALTER TABLE `bravo_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_enquiries`
--
ALTER TABLE `bravo_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_events`
--
ALTER TABLE `bravo_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bravo_event_dates`
--
ALTER TABLE `bravo_event_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_event_term`
--
ALTER TABLE `bravo_event_term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `bravo_event_translations`
--
ALTER TABLE `bravo_event_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_hotels`
--
ALTER TABLE `bravo_hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bravo_hotel_rooms`
--
ALTER TABLE `bravo_hotel_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `bravo_hotel_room_bookings`
--
ALTER TABLE `bravo_hotel_room_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_hotel_room_dates`
--
ALTER TABLE `bravo_hotel_room_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_hotel_room_term`
--
ALTER TABLE `bravo_hotel_room_term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `bravo_hotel_room_translations`
--
ALTER TABLE `bravo_hotel_room_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_hotel_term`
--
ALTER TABLE `bravo_hotel_term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `bravo_hotel_translations`
--
ALTER TABLE `bravo_hotel_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_locations`
--
ALTER TABLE `bravo_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bravo_location_translations`
--
ALTER TABLE `bravo_location_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_payouts`
--
ALTER TABLE `bravo_payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_review`
--
ALTER TABLE `bravo_review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `bravo_review_meta`
--
ALTER TABLE `bravo_review_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1016;

--
-- AUTO_INCREMENT for table `bravo_seo`
--
ALTER TABLE `bravo_seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_spaces`
--
ALTER TABLE `bravo_spaces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bravo_space_dates`
--
ALTER TABLE `bravo_space_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_space_term`
--
ALTER TABLE `bravo_space_term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `bravo_space_translations`
--
ALTER TABLE `bravo_space_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_terms`
--
ALTER TABLE `bravo_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `bravo_terms_translations`
--
ALTER TABLE `bravo_terms_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_tours`
--
ALTER TABLE `bravo_tours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bravo_tour_category`
--
ALTER TABLE `bravo_tour_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bravo_tour_category_translations`
--
ALTER TABLE `bravo_tour_category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_tour_dates`
--
ALTER TABLE `bravo_tour_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bravo_tour_meta`
--
ALTER TABLE `bravo_tour_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bravo_tour_term`
--
ALTER TABLE `bravo_tour_term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `bravo_tour_translations`
--
ALTER TABLE `bravo_tour_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_inbox`
--
ALTER TABLE `core_inbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_inbox_messages`
--
ALTER TABLE `core_inbox_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_languages`
--
ALTER TABLE `core_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_menus`
--
ALTER TABLE `core_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `core_menu_translations`
--
ALTER TABLE `core_menu_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `core_news`
--
ALTER TABLE `core_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `core_news_category`
--
ALTER TABLE `core_news_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_news_category_translations`
--
ALTER TABLE `core_news_category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_news_tag`
--
ALTER TABLE `core_news_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_news_translations`
--
ALTER TABLE `core_news_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_notifications`
--
ALTER TABLE `core_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_pages`
--
ALTER TABLE `core_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_page_translations`
--
ALTER TABLE `core_page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_permissions`
--
ALTER TABLE `core_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `core_roles`
--
ALTER TABLE `core_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `core_settings`
--
ALTER TABLE `core_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `core_subscribers`
--
ALTER TABLE `core_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_tags`
--
ALTER TABLE `core_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_tag_translations`
--
ALTER TABLE `core_tag_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_templates`
--
ALTER TABLE `core_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `core_template_translations`
--
ALTER TABLE `core_template_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `core_translations`
--
ALTER TABLE `core_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_vendor_plans`
--
ALTER TABLE `core_vendor_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `core_vendor_plan_meta`
--
ALTER TABLE `core_vendor_plan_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_files`
--
ALTER TABLE `media_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `social_forums`
--
ALTER TABLE `social_forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social_groups`
--
ALTER TABLE `social_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_group_user`
--
ALTER TABLE `social_group_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_posts`
--
ALTER TABLE `social_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_post_comments`
--
ALTER TABLE `social_post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_user_follow`
--
ALTER TABLE `social_user_follow`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_upgrade_request`
--
ALTER TABLE `user_upgrade_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors_plan_payments`
--
ALTER TABLE `vendors_plan_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `core_model_has_permissions`
--
ALTER TABLE `core_model_has_permissions`
  ADD CONSTRAINT `core_model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `core_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_model_has_roles`
--
ALTER TABLE `core_model_has_roles`
  ADD CONSTRAINT `core_model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `core_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_role_has_permissions`
--
ALTER TABLE `core_role_has_permissions`
  ADD CONSTRAINT `core_role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `core_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `core_role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `core_roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
