<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package imac-france
 */

get_header();

get_template_part('template-parts/single-page/index', get_post_format());

get_footer();