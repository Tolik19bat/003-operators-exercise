<?php
// Функция для преобразования первой буквы в верхний регистр и остальных букв в нижний
function mb_ucfirst($string) {
    // Получаем первую букву строки и преобразуем её в верхний регистр
    $firstLetter = mb_strtoupper(mb_substr($string, 0, 1));
    // Получаем остальные буквы строки и преобразуем их в нижний регистр
    $remainingLetters = mb_strtolower(mb_substr($string, 1));
    // Соединяем первую букву и остальные буквы
    return $firstLetter . $remainingLetters;
}

// Запрашиваем у пользователя имя
echo "Введите имя: ";
$firstName = trim(fgets(STDIN));
$firstName = mb_ucfirst($firstName);

// Запрашиваем у пользователя фамилию
echo "Введите фамилию: ";
$lastName = trim(fgets(STDIN));
$lastName = mb_ucfirst($lastName);

// Запрашиваем у пользователя отчество
echo "Введите отчество: ";
$middleName = trim(fgets(STDIN));
$middleName = mb_ucfirst($middleName);

// Объявляем переменную $fullName и объединяем фамилию, имя и отчество
$fullName = $lastName . ' ' . $firstName . ' ' . $middleName;

// Объявляем переменную $surnameAndInitials и объединяем фамилию с инициалами
$surnameAndInitials = $lastName . ' ' . mb_substr($firstName, 0, 1) . '.' . mb_substr($middleName, 0, 1) . '.';

// Объявляем переменную $fio и объединяем первые буквы фамилии, имени и отчества
$fio = mb_substr($lastName, 0, 1) . mb_substr($firstName, 0, 1) . mb_substr($middleName, 0, 1);

// Выводим результаты на экран
echo "Ваши данные:\n";
echo "Полное имя: '$fullName'\n";
echo "Фамилия и инициалы: '$surnameAndInitials'\n";
echo "Аббревиатура: '$fio'\n";
