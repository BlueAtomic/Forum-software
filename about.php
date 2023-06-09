<!DOCTYPE HTML>

<html lang="en">
<script src="https://kit.fontawesome.com/d1393c407a.js" crossorigin="anonymous"></script>

<head>
    <title>About Atomic Forum</title>
    <link rel="stylesheet" href="styling/about.css">
</head>
<?php include_once 'scripts/php/discordusers.php' ?>

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
    <h2>Our Team</h2>
    <div class="ribbon">
        <div class="user">
            <img class="userimage" src="<?php echo getUser(839237573595365406)['avatar'] ?>">
            <i class="fa-brands fa-discord"></i> <span class="name"><?php echo getUser(839237573595365406)['name'] ?></header>
        </div>
        <div class="user">
            <img class="userimage" src="<?php echo getUser(513072262409355274)['avatar'] ?>">
            <i class="fa-brands fa-discord"></i> <span class="name"><?php echo getUser(513072262409355274)['name'] ?></header>
        </div>
        <div class="user">
            <img class="userimage" src="<?php echo getUser(341988909363757057)['avatar'] ?>">
            <i class="fa-brands fa-discord"></i> <span class="name"><?php echo getUser(341988909363757057)['name']; ?></header>
        </div>
        <div class="user">
            <img class="userimage" src="<?php echo getUser(104933285506908160)['avatar'] ?>">
            <i class="fa-brands fa-discord"></i> <span class="name"><?php echo getUser(104933285506908160)['name'] ?></header>
        </div>
        <div class="user">
            <img class="userimage" src="<?php echo getUser(715898328973574185)['avatar'] ?>">
            <i class="fa-brands fa-discord"></i> <span class="name"><?php echo getUser(715898328973574185)['name'] ?></header>
        </div>
        <div class="user">
            <img class="userimage" src="<?php echo getUser(820255805257023498)['avatar'] ?>">
            <i class="fa-brands fa-discord"></i> <span class="name"><?php echo getUser(820255805257023498)['name'] ?></header>
        </div>
        <div class="user">
            <img class="userimage" src="<?php echo getUser(912852147392102421)['avatar'] ?>">
            <i class="fa-brands fa-discord"></i> <span class="name"><?php echo getUser(912852147392102421)['name'] ?></header>
        </div>
        <div class="user">
            <img class="userimage" src="<?php echo getUser(584672380085862407)['avatar'] ?>">
            <i class="fa-brands fa-discord"></i> <span class="name"><?php echo getUser(584672380085862407)['name'] ?></header>
        </div>
    </div>
</body>

</html>