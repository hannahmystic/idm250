<!DOCTYPE html>
<html lang="en">

<html>
<head>
<title> <?php ?></title>
<!-- META -->
<meta charset=utf-8>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS -->
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<!-- <link rel="stylesheet" href="style.css"> -->
    <?php wp_head(); ?>
</head>
<body>

<header>
<nav>
    <div class="navContents">
        <div class="littleMenu">
            <img id="hamburger" src="<?php echo get_template_directory_uri();?>/media/hamburger.png" alt="menu">
            
            <a href="<?php echo get_template_directory_uri();?>/home.php" id="myNameInitials"><img src="<?php echo get_template_directory_uri();?>/media/initials.png" alt="Home"></a>
        </div>
        <div id="myName">
            <a href="index.php">
                <img src="<?php echo get_template_directory_uri();?>/media/logo.png" alt="Hannah Mystic">
            </a>
        </div>

        <div class="navLinks">
            <div id="wdNavLink"><a href="<?php echo get_template_directory_uri();?>/webdesign.php">web design</a></div>
            <div id="artworkNavLink"><a href="<?php echo get_template_directory_uri();?>/artwork.php">artwork</a></div>
            <div id="musicNavLink"><a href="<?php echo get_template_directory_uri();?>/music.php">music</a></div>
            <div id="navArchive"><a href="<?php echo get_template_directory_uri();?>/archive.php">all projects</a></div>
        </div>
        
    </div>
    
</nav>
</header>

<!--
</body>
</html>
-->

