<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="nTheme">
    <meta name="author" content="Emmanuel Ezema">
    
	<?php
		wp_head();
	?>

</head>
<body>
    
    <header id="header" class="header">
        <nav class="nav<?php if(is_single()): echo ' post-page'; endif; ?>">
            <div class="logo">
            <?php 
                
                if(function_exists('the_custom_logo')) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                    echo '<a href="' .home_url() .'"><img src="' .$logo[0] .'" alt=""><a>';
                }
                
            ?>
            </div>
            
            <?php 
            
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="nav-links">%3$s</ul>'
                    )
                );
            
            ?>

            <div id="dropdown-icon" class="menu-dropdown">
                <div class="dropdown-icon-line"></div>
                <div class="dropdown-icon-line"></div>
                <div class="dropdown-icon-line"></div>
            </div>
        </nav>
    </header>
    
    <?php 

        nTheme_insert_hero_banner();
    
    ?>

<main>