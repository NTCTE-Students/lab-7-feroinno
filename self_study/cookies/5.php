<?php
$cookie_name = "visited";
if (isset($_COOKIE[$cookie_name])) {
    $visit = $_COOKIE[$cookie_name] + 1;
} else {
    $visit = 1;
}
setcookie($cookie_name, $visit, time() + 60*60*24, "/");
print ("Количество Посещений: $visit");
// Первоначально у Меня Выдавало Error 500, Нейронка Предложила в Четвёртой Строке Добавить (int) перед $_COOKIE, после чего Код Заработал, но Когда Удалил int, то Код Продолжал Работать. Я не Понял этой Магии... (╯°□°）╯︵ ┻━┻ 
?>
