<?php
// Запрашиваем данные у пользователя
$firstName = 'иван'; // Имя
$lastName = 'иванов'; // Фамилия
$middleName = 'иванович'; // Отчество

// Функция для преобразования первой буквы в верхний регистр и остальных букв в нижний
function mb_ucfirst($string) {
    // Получаем первую букву строки и преобразуем её в верхний регистр
    $firstLetter = mb_strtoupper(mb_substr($string, 0, 1));
    // Получаем остальные буквы строки и преобразуем их в нижний регистр
    $remainingLetters = mb_strtolower(mb_substr($string, 1));
    // Соединяем первую букву и остальные буквы
    return $firstLetter . $remainingLetters;
}

// Преобразуем первую букву каждого слова в верхний регистр
$firstName = mb_ucfirst($firstName);
$lastName = mb_ucfirst($lastName);
$middleName = mb_ucfirst($middleName);

// Объявляем переменную $fullName и объединяем фамилию, имя и отчество
$fullName = $lastName . ' ' . $firstName . ' ' . $middleName;

// Объявляем переменную $surnameAndInitials и объединяем фамилию с инициалами
$surnameAndInitials = $lastName . ' ' . mb_substr($firstName, 0, 1) . '.' . mb_substr($middleName, 0, 1) . '.';

// Объявляем переменную $fio и объединяем первые буквы фамилии, имени и отчества
$fio = mb_substr($lastName, 0, 1) . mb_substr($firstName, 0, 1) . mb_substr($middleName, 0, 1);

// Выводим результаты на экран
echo "Полное имя: '$fullName'\n";
echo "Фамилия и инициалы: '$surnameAndInitials'\n";
echo "Аббревиатура: '$fio'\n";
?>
