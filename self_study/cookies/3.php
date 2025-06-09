<?php
$cookie_name = "preferences";
$cookie_value = "dark_mode";
setcookie($cookie_name, $cookie_value, time() + 60*60*24*7,"/");
if (!isset($_COOKIE[$cookie_name])) {
    print("Куки {$cookie_name} не Установились...");
} else {
    print("Куки {$cookie_name} Установлены!<br>");
}
?>
