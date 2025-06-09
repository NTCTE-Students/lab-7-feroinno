<?php
$cookie_name = "user";
$cookie_value = "guest";
setcookie($cookie_name, $cookie_value, time()+(60*60*24*1), '/');
if (!isset($_COOKIE[$cookie_name])) {
    print("Куки {$cookie_name} не Установились...");
} else {
    print("Куки {$cookie_name} Установлены!<br>");
}
?>
