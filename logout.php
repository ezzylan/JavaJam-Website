<?php include 'include\head.php'; ?>

<body>
    <div class="container-fluid container-lg">
        <?php 
        
        $page = 'logout'; include 'include\header.php'; 
        session_unset();
        session_destroy();
        
        ?>
        <hr>

        <main class="p-4">
            <h1>JavaJam Coffee House - Logout</h1>
            <p>You have been logged out.</p>
        </main>        
        <hr>

        <?php include 'include\footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>

</html>