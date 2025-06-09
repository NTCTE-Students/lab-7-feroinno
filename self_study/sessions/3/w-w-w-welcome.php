<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../2/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
	<body>
		<h2>Добро Пожаловать!</h2>
		<p>Привет, <?php print($_SESSION['username']); ?></p>
		<p>с Паролём <?php print($_SESSION['password']); ?></p>
		<a href="logout.php">Выйти</a>
	</body>
</html>
