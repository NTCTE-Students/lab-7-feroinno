<?php
//setcookie("loggedin","loggedin", time()+60,"/");
if (!isset($_COOKIE["loggedin"])) {
    header("location: ../../login.php");
    exit();
}
print("Молодец (✿◡‿◡)");
?>
