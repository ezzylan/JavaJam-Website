<header>
    <div class="container text-center p-2">
        <h1>JavaJam Coffee House</h1>
    </div>

    <nav class="navbar navbar-expand navbar-light">
        <div class="container-fluid justify-content-center">
            <div class="navbar-nav d-flex flex-wrap justify-content-center">
                <a class="nav-link <?php if($page == 'home') echo 'active" aria-current="page"'; ?>" href="index.php">Home</a>
                <a class="nav-link <?php if($page == 'menu') echo 'active" aria-current="page"'; ?>" href="menu.php">Menu</a>
                <a class="nav-link <?php if($page == 'music') echo 'active" aria-current="page"'; ?>" href="music.php">Music</a>
                <a class="nav-link <?php if($page == 'jobs') echo 'active" aria-current="page"'; ?>" href="jobs.php">Jobs</a>
                <a class="nav-link <?php if($page == 'signup') echo 'active" aria-current="page"'; ?>" href="signup.php">Sign Up</a>
                <a class="nav-link <?php if($page == 'login') echo 'active" aria-current="page"'; ?>" href="login.php">Login</a>
                <a class="nav-link <?php if($page == 'profile') echo 'active" aria-current="page"'; ?>" href="profile.php">Profile</a>
                <a class="nav-link 
                <?php 

                $id = $_SESSION['user_id'] ?? null;
                $email = $_SESSION['user_email'] ?? null;
                $login = $_SESSION['logged_in'] ?? false;
                
                if (!isset($_SESSION['logged_in']) && !$id && !$email && $login==false):   
                    echo 'disabled" tabindex="-1" aria-disabled="true"'; 
                elseif ($page == 'logout'): 
                    echo 'active" aria-current="page"';
                endif;
                
                ?>
                " href="logout.php" onClick="return confirm('Are you sure you want to log out of your current profile?')">Logout</a>
            </div>
        </div>
    </nav>
</header>