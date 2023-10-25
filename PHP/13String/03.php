<?php


$password = "12345678";


print_r(md5($password));
echo "<br>";
print_r(base64_encode($password));
echo "<br>";
print_r(base64_decode("MTIzNDU2Nzg="));











?>