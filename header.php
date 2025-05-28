<?php

/**
 * The header for our theme
 *
 * @package imac-france
 */


global $pc_theme_mods, $pure_commerce_body_classes;
$pc_theme_mods = pc_get_theme_mods();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class( $pure_commerce_body_classes ); ?>>
    <header id="site-header">
        <div class="parent-container">
            <div id="progress" class="progress">
                <div class="progress-title">
                    <span>
                        BILLION SOUL<sup>®</sup> HARVEST UPDATES
                    </span>
                </div>

                <div class="progress-bars">
                    <div class="bar saved">
                        <div class="left">
                            <div class="bar-texts">
                                <span>september 2005</span>
                                <span>1st Billion</span>
                            </div>
                        </div>

                        <div class="right">
                            <div class="bar-texts">
                                <span>
                                    Progress: 10192012
                                </span>
                                <span>people saved</span>
                            </div>
                            <div class="bar-texts">
                                <span> Second Billion ® </span>
                            </div>
                        </div>
                    </div>

                    <div class="bar churches">
                        <div class="left">
                            <div class="bar-texts">
                                <span>0 Churches</span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="bar-texts">
                                <span>Progress: 1298198</span>
                            </div>
                            <div class="bar-texts">
                                <span> 5 Million </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="header-content">
                <div class="sub-text">
                    <p>
                        Partner With Billion Soul • <a> Give Today </a>
                    </p>
                </div>

                <div class="nav-content">
                        <div class="site-logo">
                            <img src="http://localhost:94/wp/wp-content/themes/imac-2/assets/img/h-logo.png" alt="header logo" />
                        </div>

                        <nav id="nav">
                            <ul class="nav-items">
                                <li class="nav-item"> 
                                    <a href="#">Home</a>
                                </li>
                                <li class="nav-item"> 
                                    <a href="#">About</a>
                                </li>
                                <li class="nav-item"> 
                                    <a href="#">Networking</a>
                                </li>
                                <li class="nav-item"> 
                                    <a href="#">Resources</a>
                                </li>
                                <li class="nav-item"> 
                                    <a href="#">Contact</a>
                                </li>
                                <li class="nav-item"> 
                                    <a href="#">Give Today</a>
                                </li>
                            </ul>
                        </nav>
                </div>
            </div>
        </div>
    </header>
