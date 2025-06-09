<?php
$theme = $_POST['theme'] ?? ($_COOKIE['theme'] ?? 'light');
setcookie("theme", $theme, time()+60*60, "/");
?>

<form method="post">
    <select name="theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
    </select>
    <button type="submit">Изменить</button>
</form>
