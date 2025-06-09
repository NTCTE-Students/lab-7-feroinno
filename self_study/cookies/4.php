<?php
$cookie_name = "language";
$cookie_value = "English";
setcookie($cookie_name, $cookie_value, time() + 60*60*2, "/");
if (!isset($_COOKIE[$cookie_name])) {
    print("Куки {$cookie_name} не Установились...");
} else {
    print("Куки {$cookie_name} Установлены!<br>");
}
?>
