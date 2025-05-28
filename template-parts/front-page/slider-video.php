<?php

global $pc_theme_mods;

$fp_slider_img1 = $pc_theme_mods['fp_slider_img1'];
$fp_slider_img2 = $pc_theme_mods['fp_slider_img2'];
$fp_slider_img3 = $pc_theme_mods['fp_slider_img3'];
$fp_slider_img4 = $pc_theme_mods['fp_slider_img4'];

$fp_video_showcase = $pc_theme_mods['fp_video_showcase'];

?>

<section id="page-banner" class="page-banner no-pad">
    <style>
        #page-banner {
            --banner-height: 360px;
            position: relative;
            padding: 40px 0px !important;
        }
        .page-banner .slider-video {
            position: inherit;
            height: unset;
            border-radius: var(--round-conners);
        }
        .slider-video .fp-slider,
        .slider-video .fp-video {
            background-color: black;
            height: calc(var(--banner-height) - 40px);
            position: relative;
        }
        .slider-video .fp-slider {
            margin: 0 0 15px 0;
        }
        .slider-video .fp-slider>div,
        .slider-video .splide__slide {
            height: 100%;
            overflow: hidden;
        }
        .fp-slider .splide__track {
            border-radius: var(--round-conners);
        }
        .fp-slider .splide__img.fit-img,
        .fp-slider .splide__img.fit-img img {
            height: inherit !important;
            width: 100% !important;
        }
        .fp-slider>.splide__pagination {
            width: 100%;
        }
        
        .slider-video .fp-video .card {
            height: 100%;
            border-radius: var(--round-conners);
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            max-width: 100%;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            overflow: hidden;
            background-color: black;
        }
        .slider-video .fp-video .card video {
            width: 100%;
            height: 100%;
        }
        .video-sub-txt {
            position: relative;
            bottom: -18px;
            left: 0;
            margin: 0;
            text-align: right;
            padding: 0 10px;
        }
        .video-sub-txt span,
        .video-sub-txt a {
            font-weight: bolder;
        }
        .video-sub-txt a {
            color: #efa43b;
        }
        @media screen and (min-width: 950px) {
            .page-banner .slider-video {
                height: var(--banner-height);
                overflow: hidden;
            }
            .slider-video .fp-slider {
                margin: 0;
            }
            .fp-slider .splide__track {
                border-radius: var(--round-conners) 0 0 var(--round-conners);
            }
            .fp-slider>.splide__pagination {
                position: relative;
                left: 0;
                bottom: -18px;
            }
            .slider-video .fp-video .card {
                border-radius: 0 var(--round-conners) var(--round-conners) 0 ;
            }
        }
    </style>

    <div class="parent-container">
        <div class="slider-video col-12">
            <div id="fp-slider" class="col-6 fp-slider splide">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide">
                            <div class="splide__img fit-img">
                                <img src="<?php echo $fp_slider_img1; ?>" alt="">
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="splide__img fit-img">
                                <img src="<?php echo $fp_slider_img2; ?>" alt="">
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="splide__img fit-img">
                                <img src="<?php echo $fp_slider_img3; ?>" alt="">
                            </div>
                        </div>
                        <div class="splide__slide">
                            <div class="splide__img fit-img">
                                <img src="<?php echo $fp_slider_img4; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 fp-video">
                <div class="card">
                    <video src="<?php echo $fp_video_showcase; ?>" controls class="card-img-top"></video>
                </div>

                <p class="video-sub-txt"> Get <span> VIP </span> Email Updates • <a href=""> Sign Up </a> </p>
            </div>
        </div>
    </div>
</section>