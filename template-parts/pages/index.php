<?php
/*
    Template part : Pages
    Description : This Template Part Is For The Pages Of The Site.
    It Also Consists Of Other Template Parts That Brings About The Design And Looks Of The Single Page.

    Template Parts : 	1) hero-header
						2) page content
						3) None template part.
						4) The Side Bar.

*/
global $imac_theme_mods, $current_page_theme_mods, $post;
$current_page_theme_mods = imac_get_current_page_mods( $post );
$main_sec_width = ($current_page_theme_mods['toggle_sidebar']) ? 'col-8' : 'col-9';

?>

<section class="wrapper pages col-12">
	<div class="parent-container flex layout">
		<section class="<?php echo $main_sec_width; ?> main" >
			<?php if (have_posts()) :
	
				while (have_posts()) : the_post();
	
					get_template_part( 'template-parts/pages/pages-content', get_post_format() );
	
				endwhile;
	
			else:
	
				// if there is nothing on the page
				get_template_part( 'template-parts/none', get_post_format() );
	
			endif; ?>
		</section>
	
		<?php if ($current_page_theme_mods['toggle_sidebar']) { ?>
			<div class="col-4 side">
				<?php get_sidebar('pages'); ?>
			</div>
		<?php } ?>
	</div>

</section>