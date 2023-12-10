<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyZone</title>
    <?php
    wp_head();
    ?>
</head>


<header>
    <div class="logo">
        <?php
            if(function_exists('the_custom_logo')){
                the_custom_logo();
            }
        ?>
    </div>

    <nav>
        <div id="navmenu">
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => 'navmenu',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="navitem navbar-nav flex-row text-sm-center text-md-left">%3$s</ul>'
                    )
                );
            ?>
        </div>
    </nav>

    <div class="language">
                <img src="<?php echo get_template_directory_uri(); ?>'/assets/images/language.svg'" alt=""> 
                <img src="<?php echo get_template_directory_uri(); ?>'/assets/images/arrow.svg'" alt=""> 
                <div class="nav-button">
                    <a href="#">Book free session</a>
                </div>
    </div>

  


</header>

<body>

    
