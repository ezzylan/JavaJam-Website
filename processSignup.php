<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["rpassword"])) {
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
    }
}

header("Location: profile.php?action=login_success");

?>