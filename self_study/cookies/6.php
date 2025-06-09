<?php
$cookie_name = 'country';
$cookie_value = 'Russia';
setcookie($cookie_name, $cookie_value, time() + (60*60*24), '/');
if (!isset($_COOKIE[$cookie_name])) {
    print("Куки '{$cookie_name}' не установлены!");
} else {
	print("Hello, {$cookie_value}!<br>");
	print("Bomb has been Planted");
}
?>
