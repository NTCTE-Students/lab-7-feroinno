<?php
setcookie("font_size", "24px", time()+(60*60*1), '/');
setcookie("layout", "grid", time()+(60*60*1), '/');
setcookie("color", "whitesmoke", time()+(60*60*1), '/');
print("Куки font_size=" . ($_COOKIE["font_size"]."<br>" ?? "Null<br>"));
print("Куки layout=" . ($_COOKIE["layout"]."<br>" ?? "Null<br>"));
print("Куки color=" . ($_COOKIE["color"] ?? "Null"));
?>
