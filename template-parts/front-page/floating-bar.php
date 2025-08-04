<?php

global $imac_theme_mods;

?>

<section class="floating-bar">
    <style>
        .floating-bar{
            position: fixed;
            right: 0px;
            top: 50px;
            z-index: 200;
            display: flex;
            flex-direction: column;
            align-items: end;
        }
        .social-bars {
            background-color: #0c0c0c;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
            padding: 15px 15px 10px;
            border-radius: 10px 0 0 10px;
            min-width: 80px;
        }
        .social-bar {
            width: 40px;
            height: 40px;
            border: 1px solid #333;
            border-radius: 10px;
        }

        .banner-bar {
            margin-top: 20px;
            width: 125px;
            height: auto;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
    </style>

    <div class="social-bars">
        <span class="social-bar">
            <a href="">
                <img src="<?php echo get_imac_assets( 'img/socials' ) . 'ig.png'; ?>" alt="">
            </a>
        </span>
        <span class="social-bar">
            <a href="">
                <img src="<?php echo get_imac_assets( 'img/socials' ) . 'fb.png'; ?>" alt="">
            </a>
        </span>
        <span class="social-bar">
            <a href="">
                <img src="<?php echo get_imac_assets( 'img/socials' ) . 'yt.png'; ?>" alt="">
            </a>
        </span>
    </div>

    <div class="banner-bar fit-img">
        <a href="">
            <img src="<?php echo get_imac_assets( 'img' ) . 'billion-church.jpg'; ?>" alt="">
        </a>
    </div>
</section>