<!DOCTYPE html>

<html lang="en">

<head>
    <title>Atomic Forum</title>
    <link rel="stylesheet" href="styling/index.css">
</head>
<nav>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <?php
        include_once('scripts/php/functions.php');
        $result = getAuthenticationStatus(); ?>
        <?php if ($result == 404) : ?>
            <li style='float: right'><a href='login.php'>login</a></li>
            <li style='float: right'><a href='register.php'>register</a></li>
        <?php else : ?>
            <a href="users/<?php echo $result['UID'] ?>-<?php echo $result['username'] ?>.php">
                <img src='assets/images/BlueAtomic/AtomicLogo.png' style='float: right' alt="user profile">
            </a>
            <li style="float: right"><a href="scripts/php/logout.php">log out</a></li>
        <?php endif; ?>
    </ul>
</nav>

<body>
    <!--First section-->
    <div>
        <img src="assets/images/BlueAtomic/AtomicLogo.png" alt="Blue Atomic logo">
        <h1 style="">Atomic Forums</h1>
        <p><em>Coming soon...</em></p>
        <p><a href="https://github.com/MiataBoy/forumSoftware">https://github.com/MiataBoy/forumSoftware</a></p>
    </div>
</body>

</html>