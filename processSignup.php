<?php 

include('include\head.php');
include_once('config\config.php');
$nameErr = $emailErr = $pwdErr = $rpwdErr = '';
$name = $email = $pwd1 = $pwd2 = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["name"]) && isset($_POST["email"]) 
        && isset($_POST["password"]) && isset($_POST["rpassword"])) {
            if (empty($_POST["name"])) { $nameErr = "Name is required"; } 
            else { 
                $name = test_input($_POST["name"]); 
                if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                    $nameErr = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["email"])) { $emailErr = "Email is required"; } 
            else { 
                $email = test_input($_POST["email"]); 
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }

            if (empty($_POST["password"])) { $pwdErr = "Password is required"; } 
            else { $pwd1 = test_input($_POST["password"]); }

            if (empty($_POST["rpassword"])) { $rpwdErr = "Password is required"; } 
            else { $pwd2 = test_input($_POST["rpassword"]); }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function checkPassword($pwd1, $pwd2)
{
    if ($pwd1 == $pwd2) return true;
}

?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'signup'; include('include\header.php'); ?>
        <hr>

        <main class="p-4">
        <?php 

        if (checkPassword($pwd1, $pwd2)) {
            $sql1 = "SELECT * FROM members WHERE email='$email'";
            $result = $conn->query($sql1);

            if ($result->num_rows > 0): 
                echo '
                    <h2 class="pb-3">Email already exists.</h2>
                    <div class="d-flex flex-row gap-2">
                        <a class="btn btn-primary" href="signup.php" role="button">Sign Up</a>
                        <a class="btn btn-primary" href="login.php" role="button">Log In</a>
                    </div>
                ';
            else:
                $hashPwd = password_hash($pwd1, PASSWORD_DEFAULT);
                $sql2 = "INSERT INTO members (name, email, password) 
                        VALUES ('$name', '$email', '$hashPwd')";
    
                if ($conn->query($sql2) === TRUE) { 
                    echo '
                        <h2 class="pb-3">Registration successful!</h2>
                        <a class="btn btn-primary" href="login.php" role="button">Log In</a>
                    ';
                } 
            endif; 
            
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $conn->close(); 
        } else {
            echo '<p class="text-danger">Passwords did not match! Try again.</p>';
        }
        
        ?>
        </main>
        <hr>

        <?php include('include\footer.php'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>