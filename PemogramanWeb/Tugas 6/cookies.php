<?php
$cookie_name = "user";
$cookie_value = "Michael Jordan";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookies Exercise!</title>
</head>
<body>
<?php

if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie bernama '" . $cookie_name . "' belum diatur!";
} else {
    echo "Cookie '" . $cookie_name . "' sudah diatur!<br>";
    echo "Nilainya adalah: " . $_COOKIE[$cookie_name];
}
?>
<p><strong>Note:</strong> Muat ulang halaman untuk melihat nilai cookie.</p>
</body>
</html>