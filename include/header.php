<header>
    <div class="container text-center p-2">
        <h1>JavaJam Coffee House</h1>
    </div>

    <nav class="navbar navbar-expand navbar-light">
        <div class="container-fluid justify-content-center">
            <div class="navbar-nav">
                <a class="nav-link <?php if($page == 'home') echo 'active" aria-current="page"'; ?>" href="index.php">Home</a>
                <a class="nav-link <?php if($page == 'menu') echo 'active" aria-current="page"'; ?>" href="menu.php">Menu</a>
                <a class="nav-link <?php if($page == 'music') echo 'active" aria-current="page"'; ?>" href="music.php">Music</a>
                <a class="nav-link <?php if($page == 'jobs') echo 'active" aria-current="page"'; ?>" href="jobs.php">Jobs</a>
                <a class="nav-link <?php if($page == 'signup') echo 'active" aria-current="page"'; ?>" href="signup.php">Sign Up</a>
                <a class="nav-link <?php if($page == 'login') echo 'active" aria-current="page"'; ?>" href="login.php">Login</a>
                <a class="nav-link <?php if($page == 'profile') echo 'active" aria-current="page"'; ?>" href="profile.php">Profile</a>
                <a class="nav-link <?php if($page == 'logout') echo 'active" aria-current="page"'; ?>" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>
</header>