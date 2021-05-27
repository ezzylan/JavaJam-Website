<?php 

include('include\head.php');
include_once("config\config.php");

?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'profile'; include('include\header.php'); ?>
        <hr>

        <main class="p-4">
            <h1>JavaJam Coffee House - Member Profile</h1>

            <?php 
            
            if (isset($_SESSION['logged_in']) && $_SESSION['user_id'] && 
                $_SESSION['user_email'] && $_SESSION['logged_in']==true): 
                
                $id = $_SESSION['user_id'];
                $sql = "SELECT * FROM members WHERE userID='$id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $name = $row['name'];
                        $email = $row['email'];
                    }
                }

                $fname = explode(' ', $name);
                echo '<p>Hi '.$fname[0].'! Welcome to JavaJam Coffee House!</p>';

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

            <?php 
        
            else: 
                echo '<p>Only logged in and authorized member can access this page.</p>';
            endif; $conn->close();

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