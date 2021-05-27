<?php 

include('include\head.php');
include_once('config\config.php');
$email = $password = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = test_input($_POST["email"]);
        $password = test_input($_POST["password"]);

        $sql = "SELECT * FROM members WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $_SESSION['logged_in'] = true;
                $_SESSION['user_id'] = $row['userID'];
                $_SESSION['user_email'] = $row['email'];
            }
            header("Location: profile.php?action=login_success");
        } else { header("Location: login.php?action=login_failed"); }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$conn->close();

?>
