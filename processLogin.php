<?php 

include('include\head.php');
include_once('config\config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql1 = "SELECT * FROM members WHERE email='$email'";
        $result = $conn->query($sql1);
    }
}

?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'login'; include('include\header.php'); ?>
        <hr>

        <main class="p-4">
        <?php if ($result->num_rows > 0):
            echo '<h2>Login successful!</h2>';
            while ($data = $result->fetch_assoc()) {
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $email;
            }
            
        else: ?>
            <h2>Login unsuccessful.</h2>
            <p>It seems like you don't have a JavaJam account. Please sign up before logging in.</p>
        <?php 
        
        endif;
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