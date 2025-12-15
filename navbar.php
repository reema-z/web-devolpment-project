<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

    <link rel="stylesheet" href="css/nav.css" >

<nav>
    <ul >
        <li style="margin: 0;">
            <a href="index.php">
                <img src="img/logo.png" height="95" width="85">
            </a>
        </li>

        <li><a href="destination.php">Destinations</a></li>
        
        <li><a href="gallery.php">Gallery</a></li>

        <li><a href="aboutUs.php">About Us</a></li>
        </ul>
      <ul class="right-lu">
    <?php if (isset($_SESSION['user'])): ?>
        <!-- USER LOGGED IN -->
        <li class="boxed-li"><a href="getVisa.php">Get Visa</a></li>
        <li class="boxed-li"><a href="logout.php">Logout</a></li>
    <?php else: ?>
        <!-- USER NOT LOGGED IN -->
        <li class="boxed-li"><a href="signUp.php">Login</a></li>
    <?php endif; ?>
</ul>

</nav>
