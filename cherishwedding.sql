-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2023 at 07:15 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cherishwedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, ' MUA', 'mua', '2023-12-28 05:38:24', '2023-12-28 05:38:24'),
(2, ' Fotografer', 'Foto-grafer', '2023-12-28 05:38:24', '2023-12-28 05:38:24'),
(3, ' Venue', 'venue', '2023-12-28 05:38:24', '2023-12-28 05:38:24'),
(4, ' Katering', 'katering', '2023-12-28 05:38:24', '2023-12-28 05:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, ' Bandung', 'bandung', '2023-12-28 05:38:24', '2023-12-28 05:38:24'),
(2, ' Jakarta', 'jakarta', '2023-12-28 05:38:24', '2023-12-28 05:38:24'),
(3, ' Yogyakarta', 'yogyakarta', '2023-12-28 05:38:24', '2023-12-28 05:38:24'),
(4, ' Malang', 'malang', '2023-12-28 05:38:24', '2023-12-28 05:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `vendor_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `vendor_id`, `created_at`, `updated_at`) VALUES
(2, 7, 3, '2023-12-30 00:27:15', '2023-12-30 00:27:15'),
(3, 7, 5, '2023-12-30 00:27:28', '2023-12-30 00:27:28'),
(4, 8, 22, '2023-12-30 08:30:12', '2023-12-30 08:30:12'),
(5, 8, 4, '2023-12-30 08:30:15', '2023-12-30 08:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_01_100835_create_vendors_table', 1),
(6, '2023_12_01_100905_create_categories_table', 1),
(7, '2023_12_01_100925_create_cities_table', 1),
(8, '2023_12_01_100958_create_favorites_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `google_id`, `email_verified_at`, `password`, `image`, `Type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '', NULL, '$2y$12$4YWrhKWM94Oga7G0dvhS/Onbdz.eYdotLM8nKEnFqBSM5rd.1baFq', '', 'admin', NULL, '2023-12-28 05:38:24', '2023-12-28 05:38:24'),
(2, 'Ms. Madaline Carter', 'padberg.nathanael', 'lbechtelar@example.org', '', '2023-12-28 05:38:25', '$2y$12$w.FrrtLF2nmvb6Py6Dh2OuHES5QpVzYmgWnzhqScKJDYHEOqlh8I.', 'putri.png', 'user', 'adO2OnvxaO', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(3, 'Rhea Crona', 'adolphus08', 'daren.schaden@example.org', '', '2023-12-28 05:38:25', '$2y$12$w.FrrtLF2nmvb6Py6Dh2OuHES5QpVzYmgWnzhqScKJDYHEOqlh8I.', 'putri.png', 'user', 'vXnGY6AV3x', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(4, 'Sallie Lowe', 'gschowalter', 'kaci.smith@example.com', '', '2023-12-28 05:38:25', '$2y$12$w.FrrtLF2nmvb6Py6Dh2OuHES5QpVzYmgWnzhqScKJDYHEOqlh8I.', 'putri.png', 'user', 'dxoUZXMXyD', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(5, 'Ardella Kris', 'alfreda.sanford', 'dorris26@example.com', '', '2023-12-28 05:38:25', '$2y$12$w.FrrtLF2nmvb6Py6Dh2OuHES5QpVzYmgWnzhqScKJDYHEOqlh8I.', 'putri.png', 'user', 'vG2vkY8fH8', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(6, 'Minerva Herzog', 'zprohaska', 'dan.rolfson@example.net', '', '2023-12-28 05:38:25', '$2y$12$w.FrrtLF2nmvb6Py6Dh2OuHES5QpVzYmgWnzhqScKJDYHEOqlh8I.', 'putri.png', 'user', 'O09He0RCfS', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(7, 'Invicible Production', 'Invicible Production', 'invicibleproduction@gmail.com', '110665787467777444871', '2023-12-30 01:23:00', '$2y$12$5izJTwSshQZmWVdd71YgbeQRGzDH4v7GwBY8kVisyIwZ5Obyckrku', NULL, 'user', NULL, '2023-12-30 00:25:57', '2023-12-30 01:23:01'),
(8, 'Putri Aulia Maulidina', 'Putri Aulia Maulidina', 'ptriauliam61@gmail.com', '113492073314768964892', '2023-12-30 08:30:30', '$2y$12$S6/dfUjJoFgiSDtKErmQWOut9pshiF7WR0nrOIRb.Rysl0c.SpM6W', NULL, 'user', NULL, '2023-12-30 01:26:12', '2023-12-30 08:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `price` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat_maps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `name`, `slug`, `category_id`, `city_id`, `price`, `address`, `koordinat_maps`, `detail`, `telp`, `email`, `instagram`, `image`, `profil`, `created_at`, `updated_at`) VALUES
(1, 'Occaecati maiores doloremque.', 'amet-corporis-illo-tempore-eos', 1, 2, 2330566, '397 Blake PassageJeromybury, MO 14405-4558', '73.378264,36.988676', '<div>Autem a perspiciatis excepturi. Ut non qui et repudiandae sit placeat. Inventore atque error et reprehenderit. Laboriosam quisquam iure modi quo id.</div><div>Animi amet et deleniti sunt facilis. Laboriosam omnis iusto maiores consequatur voluptatem sapiente. Veniam aut sit ut laudantium accusantium fuga. Repellendus necessitatibus qui expedita nesciunt.</div><div>Veniam corrupti molestiae quos et tempora velit accusantium. Nam voluptatem rem rerum sequi necessitatibus ullam aut.</div><div>Qui quasi quia sit placeat voluptatem dolorum omnis. Dolores cupiditate harum a quia enim. Sapiente libero nihil et vitae labore perferendis odit aspernatur.</div><div>Reiciendis quos adipisci ullam. Non consectetur quaerat omnis. Aut dignissimos aut non voluptatum est enim. Ratione sed provident soluta accusamus omnis.</div>', '08394950', 'claud.feil@dooley.com', 'hihi', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 06:41:41'),
(2, 'Architecto pariatur nobis.', 'laudantium-quidem-veritatis-distinctio-aperiam-voluptas', 2, 2, 4652625, '98172 Watsica Squares Suite 453\nIsmaelton, FL 51785-8997', '81.88711,18.009845', '<p>Est facilis et ea at atque voluptatem fugiat aut. Doloribus et enim consequatur consequuntur. Sed cum culpa eos consectetur.</p><p>Necessitatibus quo cum debitis aut temporibus numquam enim. Quasi tenetur eum et mollitia optio dolores cupiditate. Recusandae voluptate aut earum blanditiis voluptas est tempora. Omnis qui deleniti recusandae doloremque. Molestias rem eligendi placeat eius cumque rerum.</p><p>Placeat et dolores doloribus quod. Iure aut eum aut cumque. Voluptatibus ea optio temporibus illum magnam. Non a iusto accusantium culpa doloremque sed eos.</p><p>Magnam aut repudiandae magnam laudantium sed. Sunt ad velit minima qui dolorem commodi voluptatum. Ullam quis in minus accusantium odit ut repudiandae.</p><p>Quia reprehenderit veniam excepturi. Quis placeat id nam qui earum error voluptatibus qui. Tenetur ut voluptatum perferendis quia molestiae quas veniam. Non non error eligendi aut. Nulla est repudiandae in explicabo repellat dolorem.</p><p>Est ut necessitatibus et inventore. Voluptatem eligendi omnis neque eaque aut necessitatibus.</p><p>Id sint temporibus temporibus voluptas omnis. Et quia esse saepe consequuntur sint beatae ipsam. Nemo ab voluptate voluptates deserunt rerum. Voluptas ipsam dicta cum dolorem et. Magni nobis aspernatur architecto.</p><p>Id est esse quisquam quaerat est. Voluptate aut rem perferendis eveniet corporis. Repellendus ut harum explicabo qui.</p>', '+1 (530) 469-5952', 'kimberly44@ortiz.org', 'Molestiae ea.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(3, 'Harum ipsam facere.', 'sapiente-sed-in-excepturi-ut-corrupti', 3, 2, 3270242, '708 Elda Mountains\nPort Autumnmouth, IA 60620-3628', '52.67861,-13.184037', '<p>Est provident praesentium quam esse aliquid velit eos. Dolor veritatis voluptas consequatur voluptates rerum esse ipsum. Non rerum omnis ratione ut officiis blanditiis quia.</p><p>Exercitationem nemo non quia eum quisquam fugit. Totam rem sit corrupti vel quaerat rerum officiis. Recusandae eum culpa placeat.</p><p>Aut id nostrum odit expedita qui autem. Ut voluptas ut mollitia omnis asperiores placeat. Temporibus optio dolores nisi perspiciatis quod sed. Saepe voluptatibus magnam voluptas eius quos officiis.</p><p>Omnis corporis ipsa officiis facilis modi. Saepe dolor qui alias sed aut expedita illo. Quaerat suscipit omnis fugiat id rem fugiat sunt. Ea dolorum necessitatibus nostrum aut.</p><p>Vero mollitia ea ea distinctio fugit accusantium libero. Magnam rem enim dolore quod officiis. Tempora ducimus quia dolore nemo rerum voluptates iste id.</p><p>Vel harum soluta consectetur eum harum nostrum consequuntur. Fuga et autem aut vel soluta. Odio deleniti est asperiores nisi maxime.</p><p>Ex inventore est dolorum nihil eveniet. Et qui voluptatibus molestiae dolore enim eum. Rerum porro placeat sed est dolores. Repellat vero velit voluptatem consectetur.</p><p>Facilis iste non deserunt et magni. Harum repellendus distinctio ea enim. Nisi ea minima ipsa vitae. Amet voluptatem exercitationem assumenda est id modi non.</p>', '+18546103581', 'wilhelm.farrell@gmail.com', 'Voluptatibus.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(4, 'Aut.', 'est-esse-voluptatibus-impedit-dolorem-quia-numquam', 3, 2, 8595749, '4346 Daniel Ways Apt. 150\nNew Kiarra, GA 76402', '71.173563,105.670048', '<p>Et adipisci dignissimos aperiam. Et voluptate consectetur aliquid ea ea quis est. Doloremque dolore ducimus odit minus aut dolore.</p><p>Sunt et est non dolores nam cum ut. Et a exercitationem dolor est rem enim. Dignissimos aperiam amet adipisci consequatur incidunt hic autem. Voluptatem iste porro repellendus facilis ut.</p><p>Cum voluptatem voluptatum optio excepturi cum autem necessitatibus non. Vel enim possimus in temporibus consequatur deserunt sequi. Vero et sit dolore.</p><p>Aut commodi in dolor cumque. Repellendus facere delectus est. Fugiat quia dolorem ut corrupti nobis fugiat. Sint enim sunt officia numquam qui est placeat.</p><p>Dolorem iusto quia id aspernatur sint aut est. Aspernatur veniam odit dolores quasi. Nesciunt sed cupiditate aut explicabo adipisci voluptatem culpa explicabo.</p><p>Qui molestias itaque sunt eos. Non necessitatibus quia nam dolor aut et. Laudantium quam et omnis occaecati quasi necessitatibus rem ad. Itaque est voluptatem nostrum eaque placeat vitae. Laboriosam dolores nam dolorem magni.</p>', '+1 (785) 404-5795', 'aosinski@koss.com', 'Iure.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(5, 'Atque tempora.', 'repellat-cum-nulla-vero-quasi', 1, 3, 5005749, '33583 Toni Villages Apt. 088\nPort Idella, VT 64010-1479', '58.220845,33.771212', '<p>Incidunt minus quisquam occaecati accusantium recusandae. Voluptatem ratione rerum quisquam explicabo consequuntur. Incidunt in beatae voluptas beatae explicabo non in.</p><p>Quibusdam aliquam et cum sunt nesciunt perspiciatis earum voluptatem. Odit placeat velit harum sed quia temporibus facere. Officia aut iure molestiae qui et exercitationem fuga tempore.</p><p>Consectetur quis aut consequatur sint est quas aut voluptate. Odit nisi molestiae exercitationem temporibus saepe aut. Illo dolores laboriosam porro sunt dolores. Ut et aut quos sint nulla accusantium.</p><p>Et laboriosam tenetur architecto est unde. Inventore dolores fuga consequatur sit sunt ipsum. Aut molestiae id eligendi sit ipsa ab molestiae optio. Totam molestias consequatur dignissimos.</p><p>Vitae sit est qui quidem ut. Harum incidunt rerum odit optio. Animi amet totam officiis delectus fuga dolorem adipisci deleniti.</p><p>Officia aut sit et. Perspiciatis excepturi et autem quia. Qui similique voluptas tempora quasi nemo. Est dolore voluptatem dolorum.</p><p>Facere tempore consequatur odit vel tenetur maiores est. Totam quaerat sed sed aut ipsum facere. Minima labore delectus deleniti eos dolore et repudiandae.</p>', '+13615685530', 'roberts.lew@oconner.info', 'Quas exercitationem.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(6, 'Et dolorem.', 'dolores-in-odit-ab-dignissimos-soluta', 1, 2, 6229709, '614 Murray Field Apt. 938\nWizatown, CA 61445-1735', '21.445054,112.531575', '<p>Modi consequatur minima amet omnis. Voluptates quis dolore vel natus. Ipsum blanditiis iure doloribus aliquid. Aut possimus perspiciatis nam tempore ipsa minus ut natus.</p><p>Est distinctio sit ut repellendus repellendus nihil dignissimos. Est qui et et ratione facilis. Eum enim voluptatem et. Harum nostrum et qui qui.</p><p>Et labore nisi illum amet. Eligendi aperiam explicabo neque ut cum exercitationem asperiores. Sint saepe laboriosam enim sed unde. Doloremque ut odit qui tempora alias itaque molestiae quia.</p><p>Sunt autem sapiente asperiores facere voluptatibus repellat. Qui tempore fugiat illo in non. Nesciunt velit rerum facere dolorem vel inventore ea.</p><p>Deleniti ratione animi at qui a. Quo natus asperiores odit nihil provident id. Quasi laudantium iure eveniet mollitia maiores. Dicta aut sapiente cumque tenetur.</p><p>Molestiae sunt ipsum eos impedit vero deleniti nisi. Labore rerum et corporis quia delectus. Fuga repudiandae molestiae quisquam unde.</p><p>Quo sed qui ducimus aspernatur aliquam quis. Adipisci non sapiente dolores aspernatur quibusdam adipisci officia.</p><p>Aliquam doloribus sed dolorem sunt. Commodi ipsam accusamus ipsum esse in autem voluptatum. Nemo voluptas vel eligendi ea vel voluptatum. Quia aut inventore sit sint sunt. Eum voluptatem incidunt unde adipisci maiores aliquam consequatur.</p><p>Voluptatem qui reprehenderit harum ab sint. Voluptas dolorum et sunt architecto. Ut ut vitae voluptates laudantium minus dolores et.</p><p>Alias omnis dignissimos quibusdam est alias voluptatem minima. Adipisci vero veniam omnis. Eius autem debitis ipsum et enim voluptatibus id. Blanditiis quis sunt architecto. Ut sit officiis totam quos qui est.</p>', '747-726-8866', 'joan70@hotmail.com', 'Nemo qui.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(7, 'Eligendi sint.', 'voluptatem-non-porro-a-mollitia-labore', 4, 3, 2645359, '292 Maggie Knolls\nEast Johan, NV 49604-9348', '34.084071,-94.814052', '<p>Sed ut ea voluptas aliquid quae. Deserunt asperiores consequatur sunt dolorem et repellat optio. Dolorem expedita voluptate sequi consequatur deleniti. Vitae nihil sit ex.</p><p>Saepe mollitia nesciunt et odit. Voluptates consequuntur aut ut odit distinctio repellat hic. Culpa quo ut et perspiciatis esse in. Distinctio sed iure delectus.</p><p>Minus deserunt non nisi enim. Qui ut rerum in. Quidem dolorum id consequatur ipsa nihil et vel.</p><p>Delectus excepturi nulla recusandae. Nemo sint magnam ducimus sit molestias. Id expedita debitis velit voluptatem vel sed neque. Esse assumenda dolor impedit architecto.</p><p>Quaerat ad provident minus accusamus explicabo et aut. Aut ex accusamus aut. Dolorum quia atque ea quaerat aut magni reiciendis.</p><p>Nihil cupiditate iure asperiores ut accusamus et doloribus. Atque laborum quo a sint magnam quaerat sed. Saepe cupiditate voluptatum quia omnis aperiam voluptas cumque dolore. Minus animi veritatis cum quis labore dolor.</p><p>Non officiis expedita hic molestiae repudiandae. Voluptatem voluptatibus quos fuga sequi officia dicta. Eos ipsa occaecati sit molestiae.</p><p>Voluptates qui nostrum sapiente quis. Enim et voluptate dolorem corporis sit molestiae. Numquam a aliquam reiciendis molestias.</p><p>Similique voluptatem non ut dicta non maxime. Mollitia est vitae quia magnam eos consequuntur. Natus natus fugiat optio ea. Ut et veniam quis consectetur iste.</p>', '(319) 345-2941', 'bradtke.shany@hotmail.com', 'Hic quia.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(8, 'Odit odit sit.', 'qui-voluptatem-maiores-temporibus-corrupti-error-et', 2, 1, 6406738, '77709 Kody Crest\nDomenickshire, NC 14862-9572', '87.962685,98.599093', '<p>Sed facilis beatae sit error ipsam. Sapiente occaecati ut officia ipsam laboriosam beatae ut. Ipsa aliquam in sit ratione in mollitia illo.</p><p>Perferendis quia non voluptas molestias porro. Fugiat cumque facere qui perspiciatis magnam. Sed est ipsam laudantium non ut quasi voluptate. Architecto rerum et autem aspernatur quaerat iste nisi.</p><p>Illo quasi neque adipisci natus. Nihil deserunt sed voluptatem reprehenderit. Suscipit voluptatem voluptatem et velit minima. Et illum et eos provident aliquam a consectetur. Repellat laborum officiis vel facere enim.</p><p>Deserunt rerum facilis nihil nemo minima ipsa. Et iure ab velit ut.</p><p>Inventore error dolorum ratione est velit quo esse. Inventore provident possimus dignissimos iste voluptas ut aut temporibus. Autem voluptatem incidunt aperiam qui. Consequatur libero voluptatibus quo esse in et.</p>', '442.741.8473', 'orau@hotmail.com', 'Tempora culpa.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(9, 'Quis atque aut.', 'odit-voluptatibus-in-sequi-id-eum-cupiditate-delectus-aut', 4, 2, 3154101, '16227 O\'Keefe Inlet Apt. 813\nNew Favian, VT 23492', '19.979993,-62.137811', '<p>Accusantium tenetur explicabo libero. Tenetur ipsum provident dolores autem et nisi beatae animi. Quaerat at qui explicabo aut nihil accusantium omnis.</p><p>Eum sint molestiae voluptatem ipsa nemo aut. Nam blanditiis nemo assumenda ea nemo. Odit perferendis deserunt ea quae. Qui nisi aut harum illo qui. Provident inventore atque voluptate.</p><p>Dignissimos excepturi nesciunt ullam nobis praesentium tenetur maxime qui. Cum praesentium voluptatem ipsa libero veritatis illo velit. Sint doloribus tenetur sed animi non.</p><p>Est rerum illo aut. Facilis dolores provident esse temporibus consequuntur nulla doloremque. Hic ad et iste delectus non et.</p><p>Nemo ipsam laudantium eius sint necessitatibus maiores. Et aut corporis impedit autem. Molestiae et est a quo. Omnis dolorem labore sit aspernatur modi nesciunt.</p><p>Dignissimos temporibus et ut qui asperiores expedita voluptas. Nulla nesciunt magni itaque velit. Et nesciunt qui voluptas expedita saepe odit itaque.</p>', '+1-513-702-4899', 'eva.grady@kshlerin.info', 'Iste ut.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(10, 'Quae.', 'assumenda-sit-eaque-qui-eaque-aut-sit-provident', 3, 2, 6568496, '83661 Herman Port Suite 946\nEast Priscillafurt, OH 56031-8367', '24.170822,-42.077932', '<p>Ut rem harum aut rerum. Rerum sunt id laborum numquam. Iusto et ipsam iure eum adipisci. Iste quod architecto nam impedit commodi repellendus assumenda.</p><p>Mollitia quia eligendi aut fugit perspiciatis a quis odio. Molestiae unde enim est non dolores. Tempore aut omnis est quia. Quod nihil et voluptatem.</p><p>Debitis consequatur enim enim libero corporis et ea excepturi. Debitis tenetur labore rerum non asperiores officiis voluptas et. Voluptatem hic omnis deserunt natus. Est repellendus sed laboriosam aut voluptates aspernatur. Est et possimus nisi eum.</p><p>Fuga numquam suscipit quasi. Occaecati in sit sunt ea dignissimos tempore. Tenetur eveniet qui debitis reprehenderit quae in sit rerum. Nostrum occaecati facere alias blanditiis voluptates vitae nihil.</p><p>Nam atque placeat eaque harum pariatur. Praesentium pariatur voluptas voluptates nam natus modi maxime. Aut ea illum pariatur quas enim neque. Eum voluptatem modi odit est pariatur perferendis.</p><p>Et temporibus sit et. Aut sit nihil quidem placeat natus est. Non minima sed expedita consequatur rem sit.</p>', '1-484-516-1978', 'jones.glen@hotmail.com', 'Officia.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(11, 'Libero dolore.', 'ex-quae-est-neque-voluptatum-enim', 3, 2, 1661674, '3723 Ansley Stravenue\nEast Jermain, AK 76380-6627', '61.439355,21.773402', '<p>Mollitia velit est quam et qui molestiae illum. Vitae officia mollitia nobis eos necessitatibus. Modi dolorem magni et impedit ea.</p><p>Accusamus et et perspiciatis nihil assumenda inventore. Dolore earum quaerat necessitatibus sequi autem sint itaque. Iusto assumenda hic magni deserunt aut eos asperiores. Dolore modi ad consequatur nostrum.</p><p>Consequatur minus ad quod quasi qui blanditiis. Eum et quisquam tenetur dolores qui assumenda. Placeat dolorem et est et non cum.</p><p>Aut quae vel dolorum est quis. Hic blanditiis eaque sed et iure odit. Ut enim accusamus voluptatem qui animi quos. Ut possimus harum incidunt natus quam harum molestiae repellat.</p><p>Et corporis ut aut nam natus. In eius dicta veniam animi error ad. Soluta voluptas natus eos.</p>', '+19124235268', 'dach.kaylin@collier.info', 'Dolore quo.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(12, 'Iste voluptas.', 'assumenda-nobis-autem-ut-eveniet-dignissimos-consequatur-animi', 3, 2, 2622974, '82170 Major Summit\nWest Jamarcusside, ID 91078', '11.762537,88.330983', '<p>Ut libero enim iure animi et laudantium ab. Nesciunt dolor non explicabo ducimus. Laudantium rerum eum voluptates deserunt nam voluptatem. Amet porro dolor qui id.</p><p>Amet quod repellat et nihil. Id odio ducimus distinctio ut eos eum voluptatum. Voluptas veritatis architecto et earum esse sed est. Ea commodi vitae commodi ut.</p><p>Corrupti sit consectetur eaque vel sit. Quos explicabo dicta maxime quidem totam. Natus est quis voluptatem aut quia provident optio sapiente. Aspernatur suscipit architecto autem enim.</p><p>Consequatur dolor tenetur ea. Voluptate eligendi sed quidem asperiores. Vitae illum asperiores ducimus harum. Impedit sint autem atque temporibus.</p><p>Et culpa impedit totam cumque similique. Mollitia unde dolore illum sed. Vel omnis minus facilis minus ipsa nihil inventore sed. Maiores officiis natus cumque sed est laborum delectus qui.</p><p>Similique ad enim temporibus placeat amet numquam. Excepturi consectetur tempore error ipsa. Quia rem ipsa et iste sit asperiores et earum.</p><p>Tempora odio qui voluptas repellendus nesciunt. Nam laudantium error totam ut reiciendis.</p>', '325-226-3049', 'cortez.homenick@gmail.com', 'Est ut.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(13, 'Sed.', 'inventore-cumque-ea-dolor-impedit-ad-non-optio', 2, 3, 5440797, '91501 Manley Rapid Suite 452\nReicherttown, GA 07107-7796', '71.682161,-75.988538', '<p>Illo tempora pariatur quo magnam aliquid. Distinctio ratione itaque aliquid. Repellat et assumenda sint autem. Optio inventore voluptatem aliquid rem voluptatum.</p><p>Sit quo temporibus temporibus ut repellat tempora. Nihil quia dolores ea ut dignissimos ut. Eligendi vero voluptatem voluptatem et quas pariatur dolorem eveniet. Sapiente optio commodi odit deleniti sequi.</p><p>Sint autem dolores sunt ipsa ut quo molestiae. Non ab nihil explicabo quo. Praesentium error at est et voluptate. Rerum quae in tempore facere non minus voluptatibus.</p><p>Sed perferendis voluptatem ea veniam non debitis doloremque. Tempora deserunt dolores accusantium natus blanditiis quis. Ab ut rerum necessitatibus ex rerum aliquam ex. Est aut voluptas est ratione occaecati expedita eos. Id similique consequatur non rem porro.</p><p>Provident omnis quod et veritatis iure velit placeat. Aut asperiores ex corporis quas at ratione temporibus. Assumenda quia incidunt dolores voluptatem est.</p><p>Ipsum fugit praesentium modi dolor et aut. Libero quidem praesentium nulla quo ut. Error amet eveniet est praesentium eos.</p><p>Dicta hic repudiandae iusto et. Eius ipsam in cumque.</p>', '+1-954-335-5700', 'ylindgren@romaguera.info', 'Et.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(14, 'Qui assumenda.', 'recusandae-reprehenderit-natus-quis-libero', 4, 4, 264797, '993 Evalyn Rue Suite 602\nWest Chynaborough, TX 54188-7171', '20.209661,-10.956946', '<p>Facere explicabo nam minima nulla. Est quidem perspiciatis voluptates soluta voluptas necessitatibus quis. Sed non esse atque vel consequatur illum.</p><p>Dolorem aut voluptas eligendi. Quae natus nihil harum a. Doloremque error aut id suscipit dolore. Et aliquid ad voluptatem autem.</p><p>Praesentium et veniam repudiandae. Blanditiis laborum odit autem deserunt adipisci qui numquam. Cum voluptas quasi odit molestias molestiae. Et libero impedit praesentium eum est consequatur sed.</p><p>Quisquam inventore incidunt tenetur et rerum numquam. Eum ut non laboriosam autem. Et delectus quo fugiat autem est cum. Omnis quidem distinctio dolores deserunt aliquam aliquam.</p><p>Libero aut autem quo minus possimus. Nihil quia qui consequatur maiores suscipit. Doloribus consequuntur quia est at facilis non labore. Cumque odit sit ab est a et.</p><p>Consectetur nobis possimus voluptatem non vero et fugit. At non expedita dolores inventore nisi possimus quidem. Eveniet molestiae eveniet iusto. Soluta qui sit velit dolorum omnis.</p><p>Cupiditate et repudiandae voluptatem totam et. Eius rem vel culpa magni praesentium at ut. Cupiditate doloribus excepturi dignissimos asperiores praesentium. Quibusdam fugit ex neque et voluptates debitis.</p><p>Velit optio id hic ea velit qui sed. Adipisci fuga nobis dolorum quibusdam quam. Odit cum ducimus vel.</p><p>Sint accusantium quia sapiente rerum eius. Aut aut eligendi unde sint et. Sapiente corporis non aliquid et quo alias et et. Ab voluptatum illum quos et reiciendis velit ut.</p><p>Fuga veritatis dicta veniam consequatur. Repellendus illum voluptate velit maxime illo. Aut consequatur error vel deserunt et. Ea dolor odit quo sapiente.</p>', '607-921-7145', 'nohara@hotmail.com', 'Deserunt vitae.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(15, 'Facere beatae.', 'ratione-libero-labore-alias-iusto', 1, 2, 2296411, '5876 Mayra Viaduct Apt. 070\nLake Lucie, AL 97298-2035', '25.748446,168.66594', '<p>Similique sed et voluptatem laborum illum. Iure labore optio tenetur ipsam. Rerum asperiores quisquam eos voluptatum. Omnis doloremque ipsum quas ratione quo sit sit iste. Odit voluptatibus commodi fuga rerum.</p><p>Cum harum amet rerum et dolor repellat quae. Porro consequatur excepturi quis et quia sequi voluptatem. Fugit quo mollitia perferendis voluptas sed omnis.</p><p>Veritatis omnis ab eum accusantium et eum explicabo. Molestiae aliquam quia exercitationem at. Rerum nulla sapiente libero dolor dolorem sunt vel. Facere praesentium velit aut aut voluptatem sint.</p><p>Blanditiis incidunt quibusdam aliquid distinctio dignissimos. Temporibus assumenda corrupti voluptates praesentium sed. Ratione ut autem et.</p><p>Fugiat expedita ut ullam eos est iste dolore optio. Incidunt delectus numquam fugiat omnis debitis.</p>', '636-618-1276', 'ydooley@greenfelder.com', 'Temporibus enim.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(16, 'Quia eum.', 'voluptatem-eum-perferendis-et-eaque-et', 1, 2, 8963409, '44916 Okuneva Village\nPaigeborough, KY 35636', '44.622743,101.103063', '<p>Aut aut fuga et dolor debitis est ad. Nam velit rerum aut omnis reiciendis praesentium ut expedita. Id quia dolorem hic non modi sunt occaecati quos. Aspernatur quo dolor iure architecto eos porro dolorum.</p><p>In modi similique dolore suscipit modi praesentium maiores. Commodi porro incidunt sed tenetur. At qui ullam excepturi voluptatibus dolores impedit sint. Voluptate nulla dignissimos id magnam libero vero voluptatibus voluptatibus.</p><p>Odio amet corrupti laboriosam natus eum repellendus. Maiores unde sunt ipsam. Dicta consequuntur voluptates aliquid reprehenderit.</p><p>Eligendi consectetur aut culpa quia. Sed voluptatum nihil natus amet quam. Sint dicta doloremque sequi commodi quaerat.</p><p>Quia ipsum aut minima reprehenderit amet et. Est tenetur quia et doloremque.</p><p>Dolores blanditiis adipisci adipisci amet. Omnis et rerum ut sint. Reiciendis quae pariatur placeat voluptatem. Eius sapiente voluptas asperiores non totam magni.</p><p>Iusto aut qui maxime deserunt. Illum molestiae explicabo perspiciatis aut accusamus voluptatem corrupti ratione. Magnam aspernatur nulla nihil cumque. Sapiente consectetur et voluptas consequatur porro.</p>', '385-619-6194', 'rath.mara@lakin.com', 'Ullam.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(17, 'Deserunt.', 'quas-voluptatem-rerum-quaerat', 3, 2, 6647478, '84158 Maggio Crossing Suite 553\nWest Jewelville, AL 58016-3148', '-0.455932,-15.028789', '<p>Aliquid laudantium sed et ipsa itaque sequi. Voluptatem facilis odio ut eos. Distinctio enim qui nesciunt vero.</p><p>Distinctio adipisci repellendus perferendis cupiditate. Quod quisquam praesentium consectetur qui numquam voluptas. Sed velit veniam reprehenderit.</p><p>Quibusdam dolores pariatur consequatur in delectus culpa tenetur. Dolor quia pariatur illo error libero. Voluptas qui qui illo. Fugit veniam beatae accusantium tempore et.</p><p>Accusantium enim molestiae totam autem. Sunt aliquid ea dignissimos quis quo enim aliquam. Unde ducimus dolore rem praesentium ipsa cumque. Totam et provident iste cum officia ducimus ratione doloribus. Sint ut vel est saepe neque.</p><p>Tempore et aliquid qui non. Aut aut magnam quia aut dolores quia suscipit. Neque ex voluptates tempore eaque. Aut vel aut eum veniam praesentium non inventore.</p><p>Illum ipsam sunt explicabo ipsa aut. Et a adipisci nam incidunt similique quis facilis. Aspernatur rerum occaecati vel.</p>', '737.224.2978', 'bwalker@gmail.com', 'Non explicabo.', 'image/banner.jpg', 'image/putri.png', '2023-12-28 05:38:26', '2023-12-28 05:38:26'),
(21, 'Venue Lembang', 'venue-lembang', 1, 1, 5000000, 'Lembang', '-6.819512629645479, 107.62378853512892', '<div>venue</div>', '980088', 'ptriauliam@gmail.com', 'ptriauliam', 'image/uUbmgiXXEjSilEBlXfQyYKwkh4CNffteW4kr4xx8.jpg', 'image/kHqXaZN5Oh2a24rFNIlE32IcoddZkHH9scpvVBOt.png', '2023-12-29 02:30:58', '2023-12-29 02:34:37'),
(22, 'Foto', 'fotoo', 1, 1, 600000000, 'Kampung Durian Runtuh', '3.1494627815475926, 101.66636626740784', '<div>Foto yg lucu</div>', '0811246890', 'putriauliam@gmail.com', 'ptriauliam', 'image/NCxxnE3T2titPRVY4CaxJJC2CoSWnW6nGXOUXZ2J.jpg', 'image/8JJVeOvV3fmrp6N74WqqhA0NhNz6DP0tZ2s4dvMz.jpg', '2023-12-30 05:52:15', '2023-12-30 05:53:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cities_name_unique` (`name`),
  ADD UNIQUE KEY `cities_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
