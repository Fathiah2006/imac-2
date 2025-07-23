<?php

global $imac_theme_mods;
?>

<section id="hero-header" class="hero-header no-pad fit-img" style="background-image: url('<?php echo $imac_theme_mods['hero_header_sec_img']; ?>');">
    <div class="parent-container">
        <div class="slide flex flex-center">
            <div class="hero-header-content flex flex-center" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <h1> <?php echo $imac_theme_mods['hero_header_sec_title']; ?> </h1>

                <?php if (!empty($imac_theme_mods['hero_header_sec_subtext'])) { ?>
                    <p> <?php echo $imac_theme_mods['hero_header_sec_subtext']; ?> </p>
                <?php }

                if ($imac_theme_mods['toggle_hero_header_sec_btn'] == true) {
                    imac_render_btn($imac_theme_mods['hero_header_sec_btn_text'], $imac_theme_mods['hero_header_sec_btn_url']);
                } ?>
            </div>
        </div>
    </div>
    <a href="#about" class="mouse smoothscroll" data-scrollto="about" aria-label="Explore our site">
        <span class="mouse-icon">
            <span class="mouse-wheel"></span>
        </span>
    </a>
</section>