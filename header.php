<?php

/**
 * The header for our theme
 *
 * @package imac-france
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
    <header id="site-header">
        <div className="container">
            <div id="progress" className="progress">
                <div className="progress-title">
                    <span>
                        BILLION SOUL<sup>®</sup> HARVEST UPDATES
                    </span>
                </div>

                <div className="progress-bars">
                    <div className="bar saved">
                        <div className="left">
                            <div className="bar-texts">
                                <span>september 2005</span>
                                <span>1st Billion</span>
                            </div>
                        </div>

                        <div className="right">
                            <div className="bar-texts">
                                <span>
                                    Progress: {peopleSaved.toLocaleString()}
                                </span>
                                <span>people saved</span>
                            </div>
                            <div className="bar-texts">
                                <span> Second Billion ® </span>
                            </div>
                        </div>
                    </div>

                    <div className="bar churches">
                        <div className="left">
                            <div className="bar-texts">
                                <span>0 Churches</span>
                            </div>
                        </div>
                        <div className="right">
                            <div className="bar-texts">
                                <span>Progress: {churches.toLocaleString()}</span>
                            </div>
                            <div className="bar-texts">
                                <span> 5 Million </span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div className="header-content">
                <div className="sub-text">
                    <p>
                        Partner With Billion Soul • <a> Give Today </a>
                    </p>
                </div>

                <div className="nav-content">
                        <div className="site-logo">
                            <img src="./h-logo.png" alt="header logo" />
                        </div>

                        <nav id="nav">
                            <ul className="nav-items">
                                <li className="nav-item"> 
                                    <a href="#">Home</a>
                                </li>
                                <li className="nav-item"> 
                                    <a href="#">About</a>
                                </li>
                                <li className="nav-item"> 
                                    <a href="#">Services</a>
                                </li>
                                <li className="nav-item"> 
                                    <a href="#">Portfolio</a>
                                </li>
                                <li className="nav-item"> 
                                    <a href="#">Blog</a>
                                </li>
                                <li className="nav-item"> 
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                </div>
            </div>
        </div>
    </header>
