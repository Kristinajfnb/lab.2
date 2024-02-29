<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>График работы докторов, каб. 333</title>
</head>
<body>

<?php
// Установка временной зоны
date_default_timezone_set('Europe/Chisinau');

// Получение текущего дня недели (1 - понедельник, ..., 7 - воскресенье)
$weekday = date('N');

// Определение рабочих часов в зависимости от дня недели для Аксенти Елены
if ($weekday == 1 || $weekday == 3 || $weekday == 5) {
    $start_time_elen = '8:00';
    $end_time_elen = '12:00';
    $status_elen = $start_time_elen . ' - ' . $end_time_elen;
} else {
    $status_elen = 'Нерабочий день';
}

// Определение рабочих часов в зависимости от дня недели для Петровой Марии
if ($weekday == 2 || $weekday == 4 || $weekday == 6) {
    $start_time_maria = '12:00';
    $end_time_maria = '16:00';
    $status_maria = $start_time_maria . ' - ' . $end_time_maria;
} else {
    $status_maria = 'Нерабочий день';
}
?>

<table border="1">
    <caption>График работы докторов, каб. 333</caption>
    <tr>
        <th>П.н.</th>
        <th>Фамилия, имя</th>
        <th>График</th>
    </tr>
    <tr>
        <td>1.</td>
        <td>Аксенти Елена</td>
        <td><?php echo $status_elen; ?></td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Петрова Мария</td>
        <td><?php echo $status_maria; ?></td>
    </tr>
</table>

</body>
</html>
