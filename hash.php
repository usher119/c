<?php
$passwod="18521561390";
$hash = password_hash($passwod, PASSWORD_DEFAULT);
echo $hash;
echo "</br>";
if (password_verify('18521561390', $hash)) {
    echo "密码正确";
} else {
    echo 'Invalid password.';
}
?>