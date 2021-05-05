<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$rpassword = $_POST["rpassword"];
$arr = array($name, $email, $password, $rpassword);
$text = implode(',', $arr);

$textFile = fopen("javamember.txt", "a") or die("Unable to open file!");
fwrite($textFile, $text);
fwrite($textFile, "\n");
fclose($textFile);

header("Location: profile.php?action=login_success");

?>