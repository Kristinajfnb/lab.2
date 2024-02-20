<?php
$nume = 'Иванов';
$prenume = 'Николай';
echo 'Фамилия клиента '.$nume. ', а его имя '.$prenume . '.';
$varsta = 30;
print '<br />Возраст клиента ' .$varsta .'.';
$d = date("w");
switch ($d) {
    case 1:
    case 2:
    case 3:
    case 4:
        echo "<br />Приятного рабочего дня, вам!";
        break;
    case 5:
        echo "<br />Хороших вам выходных!";
        break;
    case 0:
        echo "<br />Завтра начинается новая рабочая неделя!";
        break;
    default:
        echo "<br />Что-то пошло не так...";
}

?>
