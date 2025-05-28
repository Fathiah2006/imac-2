<?php

/**
 * The Front page template file
 *
 * @package imac-france
 */


get_header();

get_template_part('template-parts/front-page/index', get_post_format());

get_footer();
