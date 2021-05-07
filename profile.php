<!DOCTYPE html>
<html lang="en">

<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'profile'; include 'include\header.php'; ?>
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

        <?php include 'include\footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>