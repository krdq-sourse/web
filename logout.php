<?php
unset($_COOKIE['ver']);
setcookie('ver', null, -1, '/');
unset($_COOKIE['email']);
setcookie('email', null, -1, '/');
echo "<body onload=\"location.href='index.php'\"></body>" ?>

