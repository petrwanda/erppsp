-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 07, 2020 at 04:12 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proposal',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `staff_id` int(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `file`, `stage`, `description`, `status`, `staff_id`, `student_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'new one book', 'hsdhgaskha', 'Accountent', 'book proposal new one', 'Approved', 1234, 19499, NULL, '2020-02-07 11:09:45', '2020-02-07 11:09:45'),
(2, 'electronic research paper and presentation schedule platform', NULL, 'Accountent', 'dksllaksd', 'Deny', 2, 19499, '2020-02-07 09:57:18', '2020-02-07 13:05:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fulcult_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facults`
--

CREATE TABLE `facults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(3, '2020_01_10_105921_create_students_table', 1),
(4, '2020_01_10_105929_create_staff_table', 1),
(5, '2020_01_20_125930_create_books_table', 1),
(6, '2020_01_20_130242_create_facults_table', 1),
(7, '2020_01_20_130257_create_departments_table', 1),
(8, '2020_01_20_130323_create_rooms_table', 1),
(9, '2020_01_20_130347_create_schedules_table', 1),
(10, '2020_02_06_101648_create_student_infs_table', 2),
(11, '2020_02_06_115501_create_staff_infs_table', 3);

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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `staff_id_1` int(11) NOT NULL,
  `staff_id_2` int(11) NOT NULL,
  `staff_id_3` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `staff_id_1`, `staff_id_2`, `staff_id_3`, `room_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 0, '2020-01-27 12:20:15', '2020-01-27 12:22:15', '2020-01-27 12:22:15'),
(2, 1, 1, 1, 0, '2020-01-27 12:21:24', '2020-01-27 12:22:53', '2020-01-27 12:22:53'),
(3, 2, 1, 1, 0, '2020-01-27 12:24:58', '2020-02-07 13:06:51', '2020-02-07 13:06:51'),
(4, 1, 2, 1, 0, '2020-01-27 12:26:53', '2020-02-07 13:06:55', '2020-02-07 13:06:55'),
(5, 1, 1, 1, 0, '2020-01-27 12:27:33', '2020-01-27 12:28:04', '2020-01-27 12:28:04'),
(6, 2, 2, 2, 0, '2020-01-27 12:56:28', '2020-02-07 13:06:56', '2020-02-07 13:06:56'),
(7, 1, 2, 2, 0, '2020-01-27 12:57:54', '2020-02-07 13:06:58', '2020-02-07 13:06:58'),
(8, 2, 2, 1, 0, '2020-01-27 12:59:37', '2020-01-27 12:59:50', '2020-01-27 12:59:50'),
(9, 1, 1, 2, 110, '2020-01-27 13:00:53', '2020-01-27 13:10:54', NULL),
(10, 2, 2, 1, 104, '2020-01-27 13:04:38', '2020-01-27 13:04:38', NULL),
(11, 1, 2, 1, 10, '2020-02-07 13:07:26', '2020-02-07 13:07:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `book_id`, `room_id`, `schedule_date`, `schedule_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 9, '2020-01-30', '12:59:00', '2020-01-28 16:00:01', '2020-01-28 16:00:01', NULL),
(2, 1, 10, '2020-01-31', '12:59:00', '2020-01-28 16:00:44', '2020-01-28 19:47:17', NULL),
(3, 2, 9, '2020-02-14', '12:59:00', '2020-02-07 13:06:37', '2020-02-07 13:06:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `serial_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `serial_no`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1245', 'dean@auca.rw', NULL, '$2y$10$/b5hIYPfPFfCr8ylJAkPa.r2cEr6eYhyVH8MDonThePy3bPP4kzAu', NULL, '2020-01-27 05:49:22', '2020-01-27 05:49:22', NULL),
(2, '456', 'hod@auca.rw', NULL, '$2y$10$p/AZz.ZY837yzL5oJqunLe1PyTuw.TSF24ZK5RxDKDuvH79Is5SFG', NULL, '2020-01-27 12:43:22', '2020-01-27 12:43:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_infs`
--

CREATE TABLE `staff_infs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_no` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `facult_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_infs`
--

INSERT INTO `staff_infs` (`id`, `serial_no`, `first_name`, `last_name`, `gender`, `location`, `dob`, `facult_id`, `department_id`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1900, 'umurerwa', 'sharon', 'female', 'nyagatare', '1994-06-28', 1, 2, '8', NULL, NULL, NULL),
(2, 1940, 'kayirangwa', 'aline', 'female', 'Gasabo', '1994-06-28', 2, 5, '8', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '19499', 'manishimweemmanuel8@gmail.com', NULL, '$2y$10$e.5iBgnqn1RjA7fL2JfL8OjEB5BFbAgKOodzpZC0V70hryG5fYINm', NULL, '2020-01-27 05:48:10', '2020-01-27 05:48:10', NULL),
(2, '19490', 'uwunadine02@gmail.com', NULL, '$2y$10$K1Kf2qojsI/6zD3M8rNPv.YDDUwZVc.WdMx3XwuP3YRoUNMejhbp.', NULL, '2020-02-06 19:35:57', '2020-02-06 19:35:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_infs`
--

CREATE TABLE `student_infs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simester` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `facult_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_infs`
--

INSERT INTO `student_infs` (`id`, `student_id`, `first_name`, `last_name`, `gender`, `simester`, `location`, `dob`, `facult_id`, `department_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 19500, 'umurerwa', 'sharon', 'female', 8, 'nyagatare', '1994-06-28', 1, 2, '2020-02-06 11:27:42', NULL, NULL),
(4, 19940, 'kayirangwa', 'aline', 'female', 8, 'Gasabo', '1994-06-28', 2, 5, '2020-02-06 11:27:42', NULL, NULL);

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
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facults`
--
ALTER TABLE `facults`
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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_serial_no_unique` (`serial_no`),
  ADD UNIQUE KEY `staff_email_unique` (`email`);

--
-- Indexes for table `staff_infs`
--
ALTER TABLE `staff_infs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `student_infs`
--
ALTER TABLE `student_infs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facults`
--
ALTER TABLE `facults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_infs`
--
ALTER TABLE `staff_infs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_infs`
--
ALTER TABLE `student_infs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
