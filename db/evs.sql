-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 05:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evs`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `user_token` varchar(255) NOT NULL,
  `university_id_img` varchar(255) DEFAULT NULL,
  `image_src` varchar(255) DEFAULT NULL,
  `user_level` varchar(50) NOT NULL,
  `university` varchar(100) DEFAULT NULL,
  `university_id` varchar(100) DEFAULT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passw` varchar(100) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `time_stamp_in` timestamp NULL DEFAULT NULL,
  `time_stamp_out` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `user_token`, `university_id_img`, `image_src`, `user_level`, `university`, `university_id`, `user_id`, `first_name`, `last_name`, `email`, `passw`, `status`, `time_stamp_in`, `time_stamp_out`) VALUES
(48, '', 'IDCard-SAMPLE-02-767159.jpg', 'nayeon.jpg', 'facilitator', 'University of the Philippines-Diliman', 'UPD-19-2343', 'EVS-c3c7c6', 'Na-yeon', 'Im', 'im.nayeon@gmail.com', '$2y$10$.CVeTjhjxCypLNRFlyZNUOB0ofmHpnl9h.ZIROnIOVxmiGaP8Gd9K', 'active', '2022-06-20 16:09:02', NULL),
(63, '5d220ad91c339371', 'IDCard-SAMPLE-02-767159.jpg', '264165739_4501303539988253_4768271605685310825_n.jpg', 'student', 'Technological University of the Philippines-Manila', 'TUPM-22-2322', 'EVS-60a39b', 'Lee', 'Ji-eun', 'Lee.Ji-eun@tup.edu.ph', '$2y$10$.YK2XmEkLKsYCQEqNwHT0.0PWOk8FzQN58imfIQUshPmDyFSU0aNy', NULL, NULL, NULL),
(64, '632f25ce5507fc48', 'IDCard-SAMPLE-02-767159.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'PLM-22-2112', 'EVS-368141', 'Oden', 'Kozuki', 'kozuki.oden@plm.edu.ph', '$2y$10$kG7jjStPOQtqJ0MYv1RK0.iO1elvEsHJcBNwjFnDr6IXxYC1VZG0.', NULL, NULL, NULL),
(65, 'e4fedd77fd7a7f6c', 'IDCard-SAMPLE-02-767159.jpg', '2312.jpg', 'facilitator', 'Technological University of the Philippines-Manila', 'UPD-22-1029', 'EVS-1cfaa0', 'Hiyori', 'Kozuki', 'john.lappay@tup.edu.ph', '$2y$10$a1gr8z5dkKKX/Uhzt6aXM.QqJjad34NiIZTzSYP/oAusmkigdAFYy', 'active', '2022-07-05 03:05:18', '2022-07-04 14:48:42'),
(66, 'd961b55dbd909ead', 'polIDfront.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-19-1123', 'EVS-b6d456', 'Angelica', 'Perez', 'angeperez@tup.edu.ph', '$2y$10$0B5MaR0dNDPu71DKeVwIuOOgTpNkpIXCQx6t.6VtJhOIi02q07ZXW', NULL, NULL, NULL),
(67, 'bb3b04fd55eca987', 'photo_2021-09-02_19-15-10.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-20-1222', NULL, 'Kristle', 'Cruz', 'kristlecruz@tup.edu.ph', '$2y$10$k2UUH146M5iqQ1rY6KQBxuOnNSq9Z7.zk732Q2Tt6PVHp4LXXrArW', NULL, NULL, NULL),
(68, '3dad30ab865cba8c', 'photo_2021-09-02_19-15-10.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-21-2232', 'EVS-a7590a', 'Sandara', 'Park', 'SandaraPark12@tup.edu.ph', '$2y$10$a1gr8z5dkKKX/Uhzt6aXM.QqJjad34NiIZTzSYP/oAusmkigdAFYy', NULL, NULL, NULL),
(69, '3f642331c2d868b1', 'photo_2021-09-02_19-15-10.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-19-0011', 'EVS-6e23e4', 'Althea', 'Dela Cruz', 'AltheaDelaCruz@tup.edu.ph', '$2y$10$.YK2XmEkLKsYCQEqNwHT0.0PWOk8FzQN58imfIQUshPmDyFSU0aNy', NULL, NULL, NULL),
(70, '69adcc4a7cd56db0', 'photo_2021-09-02_19-15-10.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPV-20-1112', NULL, 'Juan Benjamin', 'Ongkiko', 'JuanBenjaminOngkiko@tup.edu.ph', '$2y$10$sgrMXVYXyCb2kjFjJHmFke/EAPLt/VlMEuuEo5kCFj2L9mf2z8S0O', NULL, NULL, NULL),
(71, 'a90acc0130233df6', 'polIDfront.jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TUPT-21-2423', NULL, 'Sonia', 'Arevalo', 'soniaarevalo@tup.edu.ph', '$2y$10$VD5lrtj8qibEWWzdsUZZ1ujCZPhPSPOwPRlmjrKQn2UX/R7lMs15G', NULL, NULL, NULL),
(72, '6ee4a9645e10154f', 'polIDfront.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-22-2122', NULL, 'Tyra Marielle', 'Concepcion', 'TyraConcepcion@tup.edu.ph', '$2y$10$t6kv1XRJkE0oHcIvuly0HuRcVqDvSZq.KxCnDzOoZrcYvKVpPdpZO', NULL, NULL, NULL),
(73, '2d8f5a47bc720d84', 'polIDfront.jpg', NULL, 'student', 'Technological University of the Philippines-Visayas', 'TUPV-22-2222', NULL, 'Rejie Mei', 'Tenorio', 'RejieMei@tup.edu.ph', '$2y$10$/PE.J5kTMlDQ/zbXy34R7eoP6jx6ZpI4ipG4SKdazWtKC/cjEfGU6', NULL, NULL, NULL),
(74, '82e2f4b3b0fe2992', 'polIDfront.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-19-2148', NULL, 'John Angelo', 'Silvestre', 'AngeloSilvestre@tup.edu.ph', '$2y$10$PWiSqIVHE/Rx3S1LBSXAl.Z1IP9AzbuPzqMUt4qTXw1KeOgWHnekS', NULL, NULL, NULL),
(75, 'ec72c68a0af5f29e', 'polIDfront.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-21-2976', 'EVS-d82372', 'Meckal', 'Tanalgo', 'MeckalTanalgo@tup.edu.ph', '$2y$10$.YK2XmEkLKsYCQEqNwHT0.0PWOk8FzQN58imfIQUshPmDyFSU0aNy', NULL, NULL, NULL),
(76, '9c8a9471cbe9202b', 'photo_2021-09-02_19-15-10.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-19-2020', NULL, 'Chrischelle', 'Dungao', 'Chrischelle@tup.edu.ph', '$2y$10$opd8r1nyob0i1tAo0splee6zVdTQ4YjDejM9GQ3IgZtZV56aLIpqy', NULL, NULL, NULL),
(77, 'b3fa9eb31ecff833', 'girl.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUP,-21-2076', NULL, 'Patricia Marielle', 'Lebajan', 'PatriciaLebajan@tup.edu.ph', '$2y$10$3yipb3KCLKislrMLt66jm.9U9iPwPGArGw4FbkE23Y.oLI67mNMMK', NULL, NULL, NULL),
(78, '2cc1f049051fc6b7', 'images.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-19-2132', NULL, 'Russel', 'Icalina', 'RusselIcalina@tup.edu.ph', '$2y$10$Gn4V6Xfkwd7ZNPsICe3GgO1D3cSVard81cqIpuSVQ8k3ebUl6FpEO', NULL, NULL, NULL),
(79, 'da3b08cf5575e0d7', 'photo_2021-09-02_19-15-10.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-21-2333', NULL, 'Ma. Theressa', 'Allibio', 'Theressa@tup.edu.ph', '$2y$10$WeHo3oK.pEpgpPxfZSRYd.jJs4fT3z8Eo0hXA4rsPqMUPzq6tzi9u', NULL, NULL, NULL),
(80, 'b6d7ede46ad5dd25', 'girl.jpg', NULL, 'student', 'Technological University of the Philippines-Manila', 'TUPM-20-1221', NULL, 'Elaisa Mae', 'Alarcon', 'alarcon@tup.edu.ph', '$2y$10$qoV9or.SsqYLoQBONKg4POoEL7ecXKXcGwgCAZt2s1xDDIaB/eZLe', NULL, NULL, NULL),
(81, '40812210f2491690', 'id.jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-1232', NULL, 'Jack Daniel', 'Dela Cruz', 'JackDaniel@tip.edu.ph', '$2y$10$dS2UqSTxVMzLSNOm4JwcJuCjlx4IutJL8Qy9ZZRoCVpxXHZRsexzC', NULL, NULL, NULL),
(82, '47a32e1e519463cf', 'polIDfront.jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-1222', NULL, 'Angelica', 'Cueto', 'maangelicacueto@tip.edu.ph', '$2y$10$dzbBYhG9ajC0NzkKpNx7vubMF6EWAlff5ogftNVjgqqd61ZoZRQI.', NULL, NULL, NULL),
(83, '6433ecf2ecd865f5', 'images.jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-1523', NULL, 'Kim Francis', 'Villacer', 'KimVillacer@tip.edu.ph', '$2y$10$cubQgQRJ8MADChYfM0ux.uWfkSCVbjl3p8NS.wMphAd6KeesOZZLC', NULL, NULL, NULL),
(85, '3b978ed0d87a8411', 'images.jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-1763', NULL, 'Reiner ', 'Sabado', 'ReinerSabado@tip.edu.ph', '$2y$10$OF.pSQNGG1OP3ciGMMIXsuYEjmze/fA5k4IKCDlaFkoZnMxQt2CNm', NULL, NULL, NULL),
(86, 'a647029e98efda44', 'images.jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-1855', NULL, 'Renz Joal', 'Borais', 'RenzBorais@tip.edu.ph', '$2y$10$h8BG4r7FXMi.CmCnzsAkb.WsccBbNKGwbrCijcFm7PGH9dj/Y6Zxy', NULL, NULL, NULL),
(87, 'fc3f4a651188877a', 'sample-hcb-id-card-design-identity-document-115633449947amyankyx3.png', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-1633', NULL, 'Jeffry', 'Vicencio', 'jeffry@tip.edu.ph', '$2y$10$DAjEazjtyJ/fnJ8JPvwUA.ZX9dg2hVB7cnT/5kKlkb4JE7AzVB6Z6', NULL, NULL, NULL),
(88, 'b47950bb29adda5d', 'sample-hcb-id-card-design-identity-document-115633449947amyankyx3.png', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-2342', NULL, 'Renz Joal', 'Borais', 'renzborais@tip.edu.ph', '$2y$10$PUqAX3GyazchI7n0ko57IOiVPmVrV6jRLFVmQleDUaxqbdZxWgHzy', NULL, NULL, NULL),
(89, 'a6633351795cc61f', 'images.jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-1531', NULL, 'Kristian Ray', 'Cueto', 'kristiancueto@tup.edu.ph', '$2y$10$0FOsypH/EwQ3tN/KNhg1zeEvcgtmxr84SDTpw4ZnsVSv6U2OmbLu2', NULL, NULL, NULL),
(90, '736a35c07f93b29e', 'girl.jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-1633', NULL, 'Rose Tiffany', 'Go', 'rosego@tip.edu.ph', '$2y$10$GR2GMC4ABCDC3o7PSmuQvuIte3w85oex7aeZ86cYw1Xeu34944OZ2', NULL, NULL, NULL),
(91, 'e7eb24615707b203', 'images (1).jpg', NULL, 'student', 'Technological Institute of the Philippines-Manila', 'TIPM-5633', NULL, 'Sharina Mae', 'Atienza', 'sharina@tip.edu.ph', '$2y$10$YK1cbo1z3A0OUJTK9PV2AeK7X1xU6YoeJaMnzWIMCc7HqcA.9biPi', NULL, NULL, NULL),
(92, '074d08146c1c5f56', 'images (1).jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-2311', 'EVS-ee1f37', 'Alyssa', 'Ebuenga', 'alyssa@pup.edu.ph', '$2y$10$ZFbM1TZYwxFQpjJJpCxRzO3almzMSX3SyWV6owF9GgpLv7qVVx.cC', NULL, NULL, NULL),
(93, '0935fef9d4bccb6e', 'girl.jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-2422', 'EVS-968986', 'Chandy Mae', 'Fortunado', 'chandymae@pup.edu.ph', '$2y$10$HQGKJa.prTcm.8ucq7o1qeWAPfLxBjG3yXqT1I5d.qGi0u9JeRo9W', NULL, NULL, NULL),
(94, '66d860fcfcfe5102', 'girl.jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-2424', NULL, 'Julie Anne', 'Austria', 'julieastria@pup.edu.ph', '$2y$10$BdqEZzLknwLG8OEh0bOAeekPIVxrhEGBWObYvp8ifK3DeoNAjLSwq', NULL, NULL, NULL),
(95, 'e07499278e5ff56c', 'sample-hcb-id-card-design-identity-document-115633449947amyankyx3.png', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-8533', NULL, 'Arnie ', 'Fraga', 'arniefraga@pup.edu.ph', '$2y$10$.vPQKfquEFUsKK3mWtnMXehsskXN0P8b/dEmaIUvZ/mbLQHxx2cq.', NULL, NULL, NULL),
(96, '0e22e44bfec405db', 'images (1).jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-0922', NULL, 'Erica', 'Ordonez', 'erica@pup.edu.ph', '$2y$10$8KCuT8IwyR9.TK5gUAVeQ.rEOTSVndvlZ3w.hW152i.5At6XvC0dG', NULL, NULL, NULL),
(97, 'ae1bc56bf2c3e1aa', 'images (1).jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-2452', NULL, 'Jennylyn', 'Sevilla', 'jennysevilla@pup.edu.ph', '$2y$10$3PQWfKwQ.19DmaAcSgcjX.xffT4yarLaC6KMtuaF5ubgrY9jkzxbK', NULL, NULL, NULL),
(98, '265e030d52f641bc', 'girl.jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-3434', NULL, 'Jennylyn', 'Aguelo', 'jenAgue@pup.edu.ph', '$2y$10$WYMcw6sd4q4OkvYrjZE85OD6TEsCIYDjdheVDmNwPgwZcO4QQnMIq', NULL, NULL, NULL),
(99, '4e381c3fed3b7f4d', 'id.jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-4342', NULL, 'James Irish', 'Sorrosa', 'JamesSorrosa@pup.edu.ph', '$2y$10$h9wwwt/B0lCUDtrsFmNU1eHRaYD5hqX5PdkttjA68zDo4jk3Jbgfq', NULL, NULL, NULL),
(100, 'aa9c2c77dadfc7f5', 'girl.jpg', NULL, 'student', 'Polytechnic University of The Philippines-Open University', 'PUP-01-4563', NULL, 'Angela Mae', 'Miranda', 'angelamiranda@pup.edu.ph', '$2y$10$0Ry9x7DnDadn2qnP3w/vWePmvpPz6RMOjj79xjtTOX7u2vCil..J.', NULL, NULL, NULL),
(101, '5611c237a1ae8b11', 'photo_2021-09-02_19-15-10.jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-3423', NULL, 'Madeline', 'Domingsil', 'madelinedomingsil@pup.edu.ph', '$2y$10$BYS0EtIg.QPLt6BLzVGTWOwqqpiN12UwxMYs6NkCm8nNjMWFBt1Fq', NULL, NULL, NULL),
(102, '1cb299674c3e3c0f', 'images (1).jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-3745', 'EVS-3b8042', 'Ricalyn', 'Lee', 'ricalyn@pup.edu.ph', '$2y$10$gw1O5gd.HhWZCGv1BHHX5.jp9k.yLlVo7uPX7wd8LK1cKZZInqOoq', NULL, NULL, NULL),
(103, '4cfad926e5b11f6d', 'staff-id-card-500x500.jpg', NULL, 'student', 'Polytechnic University of the Philippines', 'PUP-01-3458', NULL, 'Jhon Carlos', 'Drilon', 'jhondrilon@pup.edu.ph', '$2y$10$plaLq.RqW0UC7gqRRMyvSOMi.v/Wma4qXB6kav6tu/Hof2pzOVDG2', NULL, NULL, NULL),
(104, '231319b192fcaa5c', 'images (2).jpg', NULL, 'student', 'St. Anthony College-Calapan City', 'STAC-0222-1455', NULL, 'Christian', 'Cemanes', 'Christiancemanes@stac.edu.ph', '$2y$10$Wj6NOrAKxSM0rUwjcisdb.pBWraAferjaT/fehrIt2bhNTYc4gW.m', NULL, NULL, NULL),
(105, 'fe4c9e0ea280c93c', 'staff-id-card-500x500.jpg', NULL, 'student', 'St. Anthony College-Calapan City', 'STAC-0219-0231', NULL, 'Anthony Carl', 'Lopez', 'anthony@stac.edu.ph', '$2y$10$orZ3EOe9lPoGNhy2pSGsK.0ykYde./CjL1QKZRqI1b1ofLqGIfDCu', NULL, NULL, NULL),
(106, '40d13c3b723d4b23', 'sample-hcb-id-card-design-identity-document-115633449947amyankyx3.png', NULL, 'student', 'St. Anthony College-Calapan City', 'STAC-0219-2445', NULL, 'Jorel', 'Nebril', 'jorelnebril@stac.edu.ph', '$2y$10$ZaskFrykYl7rEsVrYO6B6upWagwJSaMRPeWCANu6OLEA.jahysMze', NULL, NULL, NULL),
(107, '444ff2e27d5f5bb8', '45ce71d327b12134eb887faa0bbf329d.jpg', NULL, 'student', 'St. Anthony College-Calapan City', 'STAC-0222-2695', NULL, 'Angelina', 'Diaz', 'angelinadiaz@stac.edu.ph', '$2y$10$4K2x2RH/E/9jk0aS85rhA.KsF/xD7iNSZeppYOFPaZnt.aDg.XCmG', NULL, NULL, NULL),
(108, '7ea6349056552666', 'd13n5n9-88aeca2e-b1c0-442e-92be-204945086946.jpg', NULL, 'student', 'St. Anthony College-Calapan City', 'STAC-0120-3568', NULL, 'Jelliam', 'Martinez', 'jelymartinez@stac.edu.ph', '$2y$10$.HPE0nwiEBTcBqE922C2vO2FFZD08zDIc01WGzG1fv1.9o9g6dORS', NULL, NULL, NULL),
(109, 'e3aede90454ec94b', 'd13n5n9-88aeca2e-b1c0-442e-92be-204945086946.jpg', NULL, 'student', 'STI College Puerto Princesa', 'STI-PP452-12', NULL, 'Princess Althea', 'Perez', 'princessperez@sti.edu.ph', '$2y$10$sIDji2hr322kurtTJkCOzeDJw7JwlV1mSvzrTdiRCW8FzW2kIhhBy', NULL, NULL, NULL),
(110, '9254b32e4fb29a4b', '45ce71d327b12134eb887faa0bbf329d.jpg', NULL, 'student', 'STI College Puerto Princesa', 'STI-PP133-1412', NULL, 'Nicole Ann', 'Guiterrez', 'nicoleguiterrez@sti.edu.ph', '$2y$10$9gZpQfrQ7sXjL62LAIG.O.HBZgd3HcWqR7Q.7BLZzhCp8EDeIZdZq', NULL, NULL, NULL),
(111, '220e6cd57a773e54', 'd13n5n9-88aeca2e-b1c0-442e-92be-204945086946.jpg', NULL, 'student', 'STI College Puerto Princesa', 'STI-PP0987-2827', NULL, 'Zephanie Nicole', 'Olivares', 'zephanieolivares@sti.edu.ph', '$2y$10$TUD1LDJq7pT9ZLzIsKum7eRM/ekE.Qur7n1L3MLLVC226/PH8eDHe', NULL, NULL, NULL),
(112, '05a72f31f87ffea1', '45ce71d327b12134eb887faa0bbf329d.jpg', NULL, 'student', 'STI College Puerto Princesa', 'STI-PP452-5222', NULL, 'Jersey Ann', 'Bantaculo', 'jerseybantaculo@sti.edu.ph', '$2y$10$/ubHIluuyVKSFK6fP0P7me83W4Xd4euECULsuwTtZSI8y.rI3Lx3S', NULL, NULL, NULL),
(113, '0a0b0e7346b10f83', 'images (2).jpg', NULL, 'student', 'STI College Puerto Princesa', 'STI-PP232-355', NULL, 'Oliver', 'Pasis', 'oliverpasis@sti.edu.ph', '$2y$10$nf2lUs1xQHMauWLF1MiBWOLoQ5gN15NZiJqwxaob11EAga2yqJr.i', NULL, NULL, NULL),
(114, 'f1eadc7801ec5349', 'staff-id-card-500x500.jpg', NULL, 'student', 'STI College Puerto Princesa', 'STI-PP342-0013', NULL, 'John Carlo', 'Romero', 'johncarlo@sti.edu.ph', '$2y$10$LFLpta84qIOJDE9ydGBhgO0hRsUXepCahsm2ShOQRWGGB/moSec9q', NULL, NULL, NULL),
(115, 'a19265d3e8503e51', 'images (2).jpg', NULL, 'student', 'ACLC College of Calapan', 'ACLC-002441', NULL, 'Andrei John', 'Pantia', 'andreipantia@aclc.edu.ph', '$2y$10$94xRIbesaTRRhRMJOiuLoOjE27ubNrY46aPEaiXpwaUelps.2.9Wq', NULL, NULL, NULL),
(116, '180d1ff9982d1e0d', 'sample-hcb-id-card-design-identity-document-115633449947amyankyx3.png', NULL, 'student', 'ACLC College of Calapan', 'ACLC-002452', NULL, 'John Prince', 'Cea', 'princecea@aclc.edu.ph', '$2y$10$y/V5xYcekNI747rHB2JzWeUQ7jM7M8y2wP4DoPIFoqBxhOwXz58eq', NULL, NULL, NULL),
(117, '843239f434abe098', 'images (2).jpg', NULL, 'student', 'ACLC College of Calapan', 'ACLC-004245', NULL, 'Karl Justine', 'Tuando', 'JustineTuando@aclc.edu.ph', '$2y$10$H3q9fynEy3T2QqQZUNKZX.fPKdXjcmVkRP.kv0KICQGmHyABXxKM.', NULL, NULL, NULL),
(118, '28177a30d676bffe', 'd13n5n9-88aeca2e-b1c0-442e-92be-204945086946.jpg', NULL, 'student', 'ACLC College of Calapan', 'ACLC-009573', NULL, 'karla Kia', 'Borrero', 'Kiaborrero@aclc.edu.ph', '$2y$10$xaRy5w/yBFOgqL5u9oQFZ.5PEauhdw3ms2Ss13dc94ldP6dqMLGG.', NULL, NULL, NULL),
(119, 'f6abd14b78e99b9e', '45ce71d327b12134eb887faa0bbf329d.jpg', NULL, 'student', 'ACLC College of Calapan', 'ACLC-001245', NULL, 'Rufia Mae', 'Cruz', 'rufiacruz@aclc.edu.ph', '$2y$10$7e3RbEhuFFXAuW299eyPZux0X.hL1YKdmOmif8ffhF3FkVf3JyCXa', NULL, NULL, NULL),
(120, '1938f0be61f41780', 'images (1).jpg', NULL, 'student', 'ACLC College of Calapan', 'ACLC-003523', NULL, 'Sophia Anne', 'Sanchez', 'Sophiasanchez@aclc.edu.ph', '$2y$10$/xNSJl.7TuhW0fYChWFVjuY4QskbRHUcAlvr9Vy6EYL8dlX.BKe5S', NULL, NULL, NULL),
(121, 'c28d7a15084bf88e', 'IDCard-SAMPLE-02-767159.jpg', NULL, 'student', 'University of the Philippines-Diliman', 'upd-92-2232', NULL, 'Luffy', 'Monkey', 'luffy.monkey@up.edu.ph', '$2y$10$YX.05MmJjUi8U.3.HiU6B.AHwFTMzH2F9ldP8lGnAiRz6CMMfwPUW', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
