<?php
setcookie("user","info@gmail.com", time() + (86400*3), "/");

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];

?>