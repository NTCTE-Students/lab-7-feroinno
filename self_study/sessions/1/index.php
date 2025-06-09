<?php
session_start();
$_SESSION["username"] = "student";
if (!isset($_SESSION["username"])) {
    print("Сессии Нет");
    exit();
} else {
    print("Сессия Есть");
    exit();
}
?>
