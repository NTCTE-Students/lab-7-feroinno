<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header('Location: ../3/w-w-w-welcome.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
	<body>
		<h2>Форма Авторизации</h2>
		<form method="post" action="index.php">
			Имя: <input type="text" name="username" required><br><br>
            Пароль: <input type="password" name="password" required><br><br>
			<input type="submit" value="Войти">
		</form>
	</body>
</html>
