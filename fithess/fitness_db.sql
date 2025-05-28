-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 26 2025 г., 04:24
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fitness_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `buyTariff`
--

CREATE TABLE `buyTariff` (
  `buyTariffId` int NOT NULL,
  `buyTariffDateToday` date NOT NULL,
  `buyTariffDateNext` date NOT NULL,
  `buyTariffCode` int NOT NULL,
  `UsersCode` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `buyTariff`
--

INSERT INTO `buyTariff` (`buyTariffId`, `buyTariffDateToday`, `buyTariffDateNext`, `buyTariffCode`, `UsersCode`) VALUES
(1, '2025-01-23', '2025-02-23', 1, 1),
(7, '2025-01-25', '2025-02-25', 2, 2),
(8, '2025-01-25', '2025-02-25', 3, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `fithess_club`
--

CREATE TABLE `fithess_club` (
  `fitness` int NOT NULL,
  `index_locate` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `name_fitness` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `fithess_club`
--

INSERT INTO `fithess_club` (`fitness`, `index_locate`, `location`, `name_fitness`) VALUES
(1, '456745', 'Ул. Кукурузова д.56', 'Фитнес');

-- --------------------------------------------------------

--
-- Структура таблицы `genderTreners`
--

CREATE TABLE `genderTreners` (
  `genderTrenersId` int NOT NULL,
  `genderTrenersValue` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `genderTreners`
--

INSERT INTO `genderTreners` (`genderTrenersId`, `genderTrenersValue`) VALUES
(1, 'Женский'),
(2, 'Мужской');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `postId` int NOT NULL,
  `PostName` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`postId`, `PostName`) VALUES
(1, 'Персональный тренер'),
(2, 'Тренер');

-- --------------------------------------------------------

--
-- Структура таблицы `program`
--

CREATE TABLE `program` (
  `programId` int NOT NULL,
  `programName` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `programTime` datetime NOT NULL,
  `programPeriod` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `trenersCode` int NOT NULL,
  `programLevel` int DEFAULT NULL,
  `programCatCode` int NOT NULL,
  `programText` varchar(600) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `program`
--

INSERT INTO `program` (`programId`, `programName`, `programTime`, `programPeriod`, `trenersCode`, `programLevel`, `programCatCode`, `programText`) VALUES
(1, 'ATHLETIC', '2025-01-17 10:00:00', '55 мин', 1, 2, 1, ''),
(2, 'TRX 30', '2025-01-29 09:30:00', '30', 2, 1, 2, 'Функциональная тренировка , которая развивает физическую силу, координацию и гибкость. Занятия с использованием петель TRX улучшают тонус и рельеф мышц, повышают подвижность суставов и укрепляют связки. Один из самых органичных типов тренировок, позволяющий сочетать статичную нагрузку и динамические упражнения'),
(3, 'nameProgram2', '2025-01-10 00:00:00', '40 мин', 2, 3, 3, ''),
(4, 'nameProgram3', '2025-01-23 00:00:00', '40 мин', 3, 1, 4, ''),
(5, 'nameProgram4', '2025-01-10 00:00:00', '40 мин', 2, 1, 5, ''),
(6, 'nameProgram5', '2025-01-10 00:00:00', '40 мин', 2, 2, 6, ''),
(7, 'nameProgram6', '1900-01-28 18:54:09', '40 мин', 2, 1, 7, ''),
(8, 'nameProgram7', '2025-01-10 00:00:00', '40 мин', 2, 3, 8, ''),
(9, 'nameProgram8', '2025-01-10 00:00:00', '40 мин', 2, 1, 9, ''),
(10, 'nameProgram', '2025-01-10 00:00:00', '40 мин', 2, 2, 10, ''),
(12, 'ksjdfksjd ', '2025-01-29 00:00:00', '50', 12, 1, 2, 'ldkfjkd jhkfjdk fjdkjf kdjkf jd'),
(13, 'kfkfkfkfk', '2025-01-30 00:00:00', '20', 12, 2, 6, 'fgd fd fdfdf df df df df'),
(14, 'фывафыва', '2025-01-31 00:00:00', '50', 14, 1, 4, 'ваваыв аыва ыва ыва'),
(15, 'sd;sddm ksdk', '2025-01-30 12:00:00', '73', 11, 1, 8, 'dfdfd fdf df d'),
(16, 'джуо', '2025-01-25 12:00:00', '30', 18, 2, 10, 'ВОВОВ ОЫДЛЦДЛ ЛЦЛЦЛД ДЦДЛ ЛЦЛ ДЦЛД Ц'),
(17, 'lrlhrlhkeroherk', '2025-01-24 11:00:00', '30', 14, 1, 5, 'dfgfg fdlg fdg fdg dfg fd'),
(18, 'vfdbdfbfdbdfb', '2025-01-28 11:00:00', '50', 16, 2, 5, 'sdafasdfasdf asdf asdf ads fasd fsda f');

-- --------------------------------------------------------

--
-- Структура таблицы `programCategory`
--

CREATE TABLE `programCategory` (
  `programCatId` int NOT NULL,
  `programCatName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `programCategory`
--

INSERT INTO `programCategory` (`programCatId`, `programCatName`) VALUES
(1, 'Семинары'),
(2, 'Функциональная'),
(3, 'Mind Body'),
(4, 'Кардио'),
(5, 'Силовая'),
(6, 'Танцевальная'),
(7, 'Cycle'),
(8, 'Games'),
(9, 'Smart Start'),
(10, 'Йога'),
(11, 'Мастер-класс');

-- --------------------------------------------------------

--
-- Структура таблицы `recordProgram`
--

CREATE TABLE `recordProgram` (
  `recordProgramId` int NOT NULL,
  `programCode` int NOT NULL,
  `usersCode` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `recordProgram`
--

INSERT INTO `recordProgram` (`recordProgramId`, `programCode`, `usersCode`) VALUES
(1, 16, 1),
(4, 14, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `subscriptions`
--

CREATE TABLE `subscriptions` (
  `subscriptionsId` int NOT NULL,
  `subscriptionsName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `subscriptionsPrice` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `subscriptionsNote` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `subscriptions`
--

INSERT INTO `subscriptions` (`subscriptionsId`, `subscriptionsName`, `subscriptionsPrice`, `subscriptionsNote`) VALUES
(1, 'Not', '0', 'Нет доступа'),
(2, 'Light', '1 700 ₽ /мес', 'Безлимитный доступ в клуб'),
(3, 'Smart', '2 400 ₽ /мес', 'Доступ в клуб и все групповые программы'),
(4, 'Infinity', '2 800 ₽ /мес', 'Безлимитный доступ во все клубы сети, любые групповые программы и шикарная спа-зона');

-- --------------------------------------------------------

--
-- Структура таблицы `tariff`
--

CREATE TABLE `tariff` (
  `tariffId` int NOT NULL,
  `tariffName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tariffPrice` int NOT NULL,
  `tariffNote` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tariff`
--

INSERT INTO `tariff` (`tariffId`, `tariffName`, `tariffPrice`, `tariffNote`) VALUES
(1, 'Light', 1700, 'Безлимитный доступ в клуб'),
(2, 'Smart', 2400, 'Доступ в клуб и все групповыне программы'),
(3, 'Infinity', 2800, 'Безлимитный доступ во все клубы сети, любые групповые программы и шикарная спа-зона');

-- --------------------------------------------------------

--
-- Структура таблицы `treners`
--

CREATE TABLE `treners` (
  `trenersId` int NOT NULL,
  `trenersName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `trenersSurname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `experience` int NOT NULL,
  `postCode` int NOT NULL,
  `fitnessCode` int NOT NULL,
  `genderCode` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `treners`
--

INSERT INTO `treners` (`trenersId`, `trenersName`, `trenersSurname`, `experience`, `postCode`, `fitnessCode`, `genderCode`) VALUES
(1, 'Алексей', 'Кравченко', 20, 1, 1, 2),
(2, 'Маргарита', 'Кузьмина', 6, 1, 1, 1),
(3, 'Анатолий', 'Попроцкий', 5, 1, 1, 2),
(4, 'Антон', 'Сысоев', 7, 1, 1, 2),
(5, 'Елена', 'Лачинова', 11, 1, 1, 1),
(6, 'Екатерина', 'Фролова', 1, 1, 1, 1),
(7, 'Татьяна', 'Четникова', 5, 1, 1, 1),
(8, 'Сергей', 'Гарманов', 9, 1, 1, 2),
(9, 'Алина', 'Горячева', 5, 1, 1, 1),
(10, 'Татьяна', 'Соколова', 3, 1, 1, 1),
(11, 'Ольга', 'Кочнева', 8, 2, 1, 1),
(12, 'Дарья', 'Волегова', 9, 2, 1, 1),
(13, 'Майя', 'Чичканова', 8, 2, 1, 1),
(14, 'Алиса', 'Трубникова', 7, 2, 1, 1),
(15, 'Елена', 'Кучма', 4, 2, 1, 1),
(16, 'Максим', 'Шерман', 6, 2, 1, 2),
(17, 'Илья', 'Гречин', 15, 2, 1, 2),
(18, 'Виктория', 'Сорокина', 7, 2, 1, 1),
(19, 'Святослав', 'Абаносимов', 6, 2, 1, 2),
(20, 'Елизавета', 'Брыгалина', 3, 2, 1, 1),
(21, 'sdgfsdg', 'fdsfsdf', 4, 2, 1, 1),
(22, 'asdfsdaf', 'dgdg', 6, 2, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `usersId` int NOT NULL,
  `usersName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'users',
  `fitnessCode` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `phone`, `email`, `pass`, `role`, `fitnessCode`) VALUES
(1, 'ergwerg', '78889998877', 'qwewewe@mail.ru', 'Qwerqwer1', 'admin', 1),
(2, 'rufndeelfjd', '71231232323', 'asdsafa@mail.ru', 'Qwerqwer1', 'users', 1),
(3, 'asddsaf', '73332223322', 'dsefsdf@mail.ru', 'Qwerqwer1', 'users', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `buyTariff`
--
ALTER TABLE `buyTariff`
  ADD PRIMARY KEY (`buyTariffId`);

--
-- Индексы таблицы `fithess_club`
--
ALTER TABLE `fithess_club`
  ADD PRIMARY KEY (`fitness`);

--
-- Индексы таблицы `genderTreners`
--
ALTER TABLE `genderTreners`
  ADD PRIMARY KEY (`genderTrenersId`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postId`);

--
-- Индексы таблицы `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`programId`),
  ADD KEY `trenersCode` (`trenersCode`),
  ADD KEY `programCatCode` (`programCatCode`);

--
-- Индексы таблицы `programCategory`
--
ALTER TABLE `programCategory`
  ADD PRIMARY KEY (`programCatId`);

--
-- Индексы таблицы `recordProgram`
--
ALTER TABLE `recordProgram`
  ADD PRIMARY KEY (`recordProgramId`),
  ADD KEY `programCode` (`programCode`),
  ADD KEY `usersCode` (`usersCode`);

--
-- Индексы таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`subscriptionsId`);

--
-- Индексы таблицы `tariff`
--
ALTER TABLE `tariff`
  ADD PRIMARY KEY (`tariffId`);

--
-- Индексы таблицы `treners`
--
ALTER TABLE `treners`
  ADD PRIMARY KEY (`trenersId`),
  ADD KEY `fitnessCode` (`fitnessCode`),
  ADD KEY `postCode` (`postCode`),
  ADD KEY `genderCode` (`genderCode`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`),
  ADD KEY `fitnessCode` (`fitnessCode`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `buyTariff`
--
ALTER TABLE `buyTariff`
  MODIFY `buyTariffId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `fithess_club`
--
ALTER TABLE `fithess_club`
  MODIFY `fitness` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `genderTreners`
--
ALTER TABLE `genderTreners`
  MODIFY `genderTrenersId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `postId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `program`
--
ALTER TABLE `program`
  MODIFY `programId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `programCategory`
--
ALTER TABLE `programCategory`
  MODIFY `programCatId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `recordProgram`
--
ALTER TABLE `recordProgram`
  MODIFY `recordProgramId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `subscriptionsId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `tariff`
--
ALTER TABLE `tariff`
  MODIFY `tariffId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `treners`
--
ALTER TABLE `treners`
  MODIFY `trenersId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`trenersCode`) REFERENCES `treners` (`trenersId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `program_ibfk_2` FOREIGN KEY (`programCatCode`) REFERENCES `programCategory` (`programCatId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `recordProgram`
--
ALTER TABLE `recordProgram`
  ADD CONSTRAINT `recordprogram_ibfk_1` FOREIGN KEY (`programCode`) REFERENCES `program` (`programId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `recordprogram_ibfk_2` FOREIGN KEY (`usersCode`) REFERENCES `users` (`usersId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `treners`
--
ALTER TABLE `treners`
  ADD CONSTRAINT `treners_ibfk_3` FOREIGN KEY (`fitnessCode`) REFERENCES `fithess_club` (`fitness`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `treners_ibfk_4` FOREIGN KEY (`postCode`) REFERENCES `post` (`postId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `treners_ibfk_5` FOREIGN KEY (`genderCode`) REFERENCES `genderTreners` (`genderTrenersId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fitnessCode`) REFERENCES `fithess_club` (`fitness`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
