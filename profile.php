<?php include('include\head.php'); ?>

<body>
    <div class="container-fluid container-lg">
        <?php $page = 'profile'; include('include\header.php'); ?>
        <hr>

        <main class="p-4">
            <h1>JavaJam Member Profile</h1>

            <?php if ($name && $email): ?>       
                <p>Hi <?php echo $name ?>! Welcome to JavaJam Coffee House!</p>;
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
            <?php else: ?>
                <p>Sign up or log in to view profile details.</p>
            <?php endif; ?>
        </main>        
        <hr>

        <?php include('include\footer.php'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>