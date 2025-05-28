<?php

// Function to add Social share buttons to blog post
function social_share_btns() {
    global $pc_theme_mods;
    $facebook = $pc_theme_mods['toggle_facebook_btn'];
    $x = $pc_theme_mods['toggle_x_btn'];
    $whatsapp = $pc_theme_mods['toggle_whatsapp_btn'];
    $telegram = $pc_theme_mods['toggle_telegram_btn'];
    $pinterest = $pc_theme_mods['toggle_pinterest_btn'];
    $linkedin = $pc_theme_mods['toggle_linkedin_btn'];
    ?>
    <div class="social-share">

        <?php if( $facebook == true ) { ?>
            <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink() ?>" aria-label="Facebook" class="facebook" >
                <i class="bx bxl-facebook" style="color: #fff;"></i>
            </a>
        <?php } ?>

        <?php if( $x == true ) { ?>
            <a href="https://x.com/intent/tweet?url=<?php the_permalink() ?>&text=<?php the_title(); ?>" aria-label="X (Twitter)" class="x-twitter" >
                <i class="bx bxl-x-twitter" style="color: #fff;"></i>
            </a>
        <?php } ?>

        <?php if( $whatsapp == true ) { ?>
            <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?>%20%0D_<?php the_permalink() ?>_" aria-label="whatsapp" class="whatsapp" >
                <i class="bx bxl-whatsapp" style="color: #fff;"></i>
            </a>
        <?php } ?>

        <?php if( $telegram == true ) { ?>
            <a href="https://telegram.me/share/url?url=<?php the_permalink() ?>&text=<?php the_title(); ?>" aria-label="telegram" class="telegram" >
                <i class="bx bxl-telegram" style="color: #fff;"></i>
            </a>
        <?php } ?>

        <?php if( $pinterest == true ) { ?>
            <a href="http://pinterest.com/pin/create/link/?url=<?php the_permalink() ?>" aria-label="Pinterest" class="pinterest" >
                <i class="bx bxl-pinterest" style="color: #fff;"></i>
            </a>
        <?php } ?>

        <?php if( $linkedin == true ) { ?>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink() ?>" aria-label="linkedin" class="linkedin" >
                <i class="bx bxl-linkedin" style="color: #fff;"></i>
            </a>
        <?php } ?>
    </div>
<?php
}