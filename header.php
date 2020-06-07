<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<style>
    <?php
        include_once 'styles/navbar.css';
        include_once 'styles/general.css';
     ?>
</style>

<nav class="topnav">
    <script src="https://kit.fontawesome.com/a03919215d.js" crossorigin="anonymous"></script>
    <a href="/index.php" target="content">
        <img alt="" src="/images/cover.png" class="logo">
    </a>
    <input type="checkbox" id="chk">
    <label for="chk" class="show-menu-btn" onclick="openMobileMenu()">
        <i class="fas fa-bars"></i>
    </label>
    <ul class="nav-btns">
        <li>
            <a href="/invatare.php" target="content" class="nav-active">Mediu de invatare</a>
        </li>
        <li>
            <a href="/tests-selector.php" target="content">Chestionare</a>
        </li>
        <li>
            <a href="/clasament.php" target="content">Clasament</a>
        </li>
        <?php
            //pentru user logat, afiseaza buton de logout, altfel afiseaza buton de login
            if (!isset($_SESSION['username'])) {
                echo '<li> <a href="profile.php">Profiluri</a>';
                echo '<li> <a href="/login.php">Login</a> </li>';
            }
            else {
                $link = "/profile.php?username=" . $_SESSION['username'];
                echo '<li> <a href=' . $link . ' >Profil</a > </li >
                               <li > <a href = "/php_scripts/Logout.php" id = "logout-btn" > Logout</a > </li > ';
            }
        ?>
        <li>
            <label for="chk" class="hide-menu-btn" onclick="closeMobileMenu()">
                <i class="fas fa-times">

                </i>
            </label></li>
    </ul>
</nav>
