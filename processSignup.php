<?php 

include('include\head.php');
include_once('config\config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql1 = "SELECT * FROM members WHERE email='$email'";
        $result = $conn->query($sql1);
    }
}

?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'signup'; include('include\header.php'); ?>
        <hr>

        <main class="p-4">
        <?php if ($result->num_rows > 0): ?>
            <h2 class="pb-3">Email already exists.</h2>
            <div class="d-flex flex-row gap-2">
                <a class="btn btn-primary" href="signup.php" role="button">Sign Up</a>
                <a class="btn btn-primary" href="login.php" role="button">Log In</a>
            </div>
        <?php 
        
        else:
            $sql2 = "INSERT INTO members (name, email, password) 
                    VALUES ('$name', '$email', '$password')";

            if ($conn->query($sql2) === TRUE) { ?>
                <h2 class="pb-3">Registration successful!</h2>
                <a class="btn btn-primary" href="login.php" role="button">Log In</a>
        <?php 
        
        } endif; 
        
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $conn->close(); 
        
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