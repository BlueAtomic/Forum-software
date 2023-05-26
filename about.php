<!DOCTYPE HTML>

<html lang="en">

<head>
    <title>About Atomic Forum</title>
    <link rel="stylesheet" href="styling/index.css">
</head>
<?php include_once 'scripts/php/discordusers.php' ?>

<body>
    <img src="<?php
                echo getUser(341988909363757057)['avatar'];
                ?>">
    <header><?php
            echo getUser(341988909363757057)['name'];
            ?></header>
</body>

</html>