<?php
session_start();
$_SESSION['cart'] = $_SESSION['cart'] ?? [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $_SESSION['cart'][] = htmlspecialchars($_POST['item']);
    } elseif (isset($_POST['clear'])) {
        $_SESSION['cart'] = [];
    }
}
?>

<p>Корзина: <?php echo implode(", ", $_SESSION["cart"]); ?></p>
<form method="post">
    <input type="text" name="item">
    <button type="submit" name="add">Добавить</button><br>
    <button type="submit" name="clear">Очистить корзину</button>
</form>
