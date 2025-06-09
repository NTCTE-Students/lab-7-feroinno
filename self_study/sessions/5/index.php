<?php
session_start();
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
}
$_SESSION['last_visit_time'] = time();
print("Первый визит: " . date("H:i:s d-m-Y", $_SESSION['first_visit_time'])."<br>");
print("Последний визит: " . date("H:i:s d-m-Y", $_SESSION['last_visit_time']));
?>
