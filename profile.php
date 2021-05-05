<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaJam Coffee House</title>
    <link rel="shortcut icon" href="./img/javajamlogo_HQg_icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="javajam.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid container-lg">
        <header>
            <div class="container text-center p-2">
                <h1>JavaJam Coffee House</h1>
            </div>

            <nav class="navbar navbar-expand navbar-light">
                <div class="container-fluid justify-content-center">
                    <div class="navbar-nav">
                        <a class="nav-link" href="index.php">Home</a>
                        <a class="nav-link" href="menu.html">Menu</a>
                        <a class="nav-link" href="music.html">Music</a>
                        <a class="nav-link" href="jobs.html">Jobs</a>
                        <a class="nav-link" href="signup.php">Sign Up</a>
                        <a class="nav-link" href="login.php">Login</a>
                        <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
                        <a class="nav-link" href="logout.php">Logout</a>
                    </div>
                </div>
            </nav>
        </header>
        <hr>

        <main class="p-4">
            <h1>JavaJam Member Profile</h1>

            <?php 

            $line = '';
            $text = fopen('javamember.txt', 'r');
            $cursor = -1;
            fseek($text, $cursor, SEEK_END);
            $char = fgetc($text);
            //Trim trailing newline characters in the file
            while ($char === "\n" || $char === "\r") {
                fseek($text, $cursor--, SEEK_END);
                $char = fgetc($text);
            }
            //Read until the next line of the file begins or the first newline char
            while ($char !== false && $char !== "\n" && $char !== "\r") {
            //Prepend the new character
                $line = $char . $line;
                fseek($text, $cursor--, SEEK_END);
                $char = fgetc($text);
            }
            $arr = explode(',', $line);

            $name = $arr[0];
            $email = $arr[1];

            echo '<p>Hi '.$name.'! Welcome to JavaJam Coffee House!</p>';

            ?>

            <table class="table table-light table-striped">
            <tbody>
                <tr>
                <th scope="row">Name:</th>
                <td> <?php echo $name ?> </td>
                </tr>
                <tr>
                <th scope="row">Email:</th>
                <td> <?php echo $email ?> </td>
                </tr>
            </tbody>
            </table>            
        </main>        
        <hr>

        <footer class="container-fluid container-lg text-center fst-italic p-3">
            Copyright &copy; 2021 JavaJam Coffee House<br>
            <a class="text-decoration-none" href="mailto:javajam@gmail.com">javajam@gmail.com</a>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>