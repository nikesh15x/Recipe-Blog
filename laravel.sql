-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2020 at 07:21 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `created_at`, `updated_at`, `speciality`, `age`, `country`) VALUES
(24, 'Nikesh', '2020-11-20 05:43:24', '2020-11-20 06:21:34', 'Pizza', 20, 'Africa'),
(25, 'jack', '2020-11-20 06:06:56', '2020-11-20 06:20:07', 'baker', 22, 'India'),
(27, 'jane', NULL, NULL, 'chicken', 29, 'China'),
(31, 'sunial', NULL, NULL, 'all rounder', 20, 'india'),
(32, 'manoj', NULL, NULL, 'all rounder', 20, 'india'),
(33, 'denail', NULL, '2020-11-20 11:21:59', 'all rounder', 23, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_18_151311_create_chef_table', 1),
(5, '2020_11_18_154651_create_chef_table', 2),
(6, '2020_11_18_154845_create_recipe_table', 3),
(7, '2020_11_19_143552_update_chef_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `proce_dure` varchar(6000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chef_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `food_name`, `description`, `proce_dure`, `chef_id`, `created_at`, `updated_at`) VALUES
(1, 'Pav bhaji', 'Pav bhaji is a fast food dish from India. It consists of a thick vegetable curry served with a soft bread roll. Vegetables in the curry may include potatoes, onions, carrots, chillies, peas, bell peppers, and tomatoes. ', '3 medium sizes potatoes or 250 grams potatoes, peeled and chopped\r\n▢1 to 1.25 cups chopped cauliflower or 120 to 130 grams cauliflower\r\n▢1 cup chopped carrot\r\n▢1 cup green peas – fresh or frozen\r\n▢⅓ cup chopped french beans – 12 to 14 french beans, chopped – optional\r\n▢2.25 to 2.5 cups water – for pressure cooking\r\n\r\nRinse, peel and chop the veggies. You will need 1 cup chopped cauliflower, 1 cup chopped carrot, 3 medium sized potatoes (chopped) and ⅓ cup chopped french beans. You can also add veggies of your choice.\r\nAdd all the above chopped veggies in a 2 litre pressure cooker. Also add 1 cup green peas (fresh or frozen).\r\nAdd 2.25 to 2.5 cups water.\r\nPressure cook the veggies for 5 to 6 whistles or for about 12 minutes on medium flame.\r\nWhen the pressure settles down on its own, open the cooker and check if the veggies are cooked well. You can even steam or cook the veggies in a pan. The vegetables have be to cooked completely.\r\n\r\n', 25, NULL, NULL),
(2, 'Fish Curry', 'Malabar matthi curry, also known as fish curry, is an Indian dish. It consists of sardines semi-stewed in a Kerala-style curry with assorted vegetables, such as okra or onions. It is usually served with rice, naan, bread, or tapioca', 'eat fishInstructions. Marinate fish with ½ tbsp ginger garlic paste, ⅛ tsp turmeric, ¼ tsp red chilli powder & ¼ tsp salt. On a flat fry pan, heat 1 tsp oil. Heat 1 tbsp oil in a pot and add cumin. Next add ginger garlic paste and saute for 30 seconds. Next add coconut, fennel seeds (optional), red chili powder & turmeric.', 27, '2020-11-20 09:33:34', '2020-11-20 09:33:34'),
(3, 'Cake', 'Cake is a form of sweet food made from flour, sugar, and other ingredients, that is usually baked. In their oldest forms, cakes were modifications of bread, but cakes now cover a wide range of preparations ', 'Step 1\r\nPreheat the oven to 350 degrees F (175 degrees C). Grease and flour a 10x15-inch cake pan.\r\n\r\nStep 2\r\nCombine butter, water, and cocoa powder for cake in a saucepan over medium heat. Cook until butter has melted and mixture comes to a boil. Remove from the heat and cool slightly.\r\n\r\nStep 3\r\nMeanwhile, mix flour, sugar, and salt together in a large bowl. Beat buttermilk, eggs, baking soda, and vanilla extract together in a separate bowl.\r\n\r\nStep 4\r\nAdd melted butter mixture to the flour mixture, then add buttermilk-egg mixture and beat until thoroughly combined. Pour into the prepared cake pan.\r\n\r\nStep 5\r\nBake in the preheated oven until a toothpick inserted into the center comes out clean, about 20 minutes. Remove cake from the oven and cool on a wire rack for 5 minutes.\r\n\r\nStep 6\r\nMeanwhile, combine butter, milk, cocoa powder, and vanilla extract for the frosting in a saucepan over medium heat. Stir until butter melts, then stir in powdered sugar. Spread frosting over the warm cake.', 24, '2020-11-20 09:43:38', '2020-11-20 09:43:38'),
(4, 'Chicken Maggi', 'The ban on Maggi broke a lot of hearts, especially people who put up in hostels or ones who stay alone. There is hardly any substitute for Maggi. But thankfully, now it is back!', 'Let\'s start with something simple. If you have leftover chicken from the night before, then it is time to put it into use. Separate the meat from the bones - in tiny pieces or slices. Prepare Maggi in your usual way and then add the chicken. You can also use finely chopped sausages instead of chicken.', 27, '2020-11-20 13:58:46', '2020-11-20 13:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_chef_id_foreign` (`chef_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_chef_id_foreign` FOREIGN KEY (`chef_id`) REFERENCES `chefs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
