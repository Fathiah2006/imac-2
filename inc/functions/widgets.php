<?php


//function that registers widget areas
function pure_commerce_widgets_init()
{

    register_sidebar(array(
        'name' => __('Single Page Sidebar', 'pure-commerce'),
        'id' => 'sidebar-single',
        'description' => __('This Widget space is for the Sidebar that will only appear on single pages', 'pure-commerce'),
        'before_widget' => '<aside id="%1$s" class="side-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array( // for pages
        'name' => __('Sidebar For Pages', 'pure-commerce'),
        'id' => 'sidebar-pages',
        'description' => __('This Sidebar Will appear only on the website pages like the about us page', 'pure-commerce'),
        'before_widget' => '<aside id="%1$s" class="side-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array( // for category page
        'name' => __('Sidebar For Category Page', 'pure-commerce'),
        'id' => 'sidebar-category',
        'description' => __('This Sidebar Will appear only on the Category. That is, it will appear on the page of each category you created', 'pure-commerce'),
        'before_widget' => '<aside id="%1$s" class="side-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array( // for search page
        'name' => __('Sidebar For search Page', 'pure-commerce'),
        'id' => 'sidebar-search',
        'description' => __('This Sidebar Will appear only on the search.', 'pure-commerce'),
        'before_widget' => '<aside id="%1$s" class="side-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array( // for archive page
        'name' => __('Sidebar For Archive Page', 'pure-commerce'),
        'id' => 'sidebar-archive',
        'description' => __('This Sidebar Will appear only on An Archive Page.', 'pure-commerce'),
        'before_widget' => '<aside id="%1$s" class="side-card card widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer First  Column', 'pure-commerce'),
        'id' => 'footer-widget-one',
        'description' => __('This Widget space is for the first Column in the footer.', 'pure-commerce'),
        'before_widget' => '<div id="%1$s" class="footer-c widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer Second  Column', 'pure-commerce'),
        'id' => 'footer-widget-two',
        'description' => __('This Widget space is for the Second Column in the footer.', 'pure-commerce'),
        'before_widget' => '<div id="%1$s" class="footer-c widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer Third  Column', 'pure-commerce'),
        'id' => 'footer-widget-three',
        'description' => __('This Widget space is for the Third Column in the footer.', 'pure-commerce'),
        'before_widget' => '<div id="%1$s" class="footer-c widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));

    register_sidebar(array(
        'name' => __('Footer fourth  Column', 'pure-commerce'),
        'id' => 'footer-widget-four',
        'description' => __('This Widget space is for the fourth Column in the footer.', 'pure-commerce'),
        'before_widget' => '<div id="%1$s" class="footer-c widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}
add_action('widgets_init', 'pure_commerce_widgets_init');


//function to render a sidebar
function pure_commerce_dynamic_sidebar($sidebar_id) {
    if (is_active_sidebar($sidebar_id)) :
        dynamic_sidebar($sidebar_id);
    else :
        // display a message if there is no active widget on the sidebar
        if (current_user_can( 'administrator' )) {
            ?>
            <aside class="side-card card">
                <h4>Add Widgets Here</h4>
                <div class="no-widget">
                    <p> Oops! It Seems There Are No Widgets Added Here. </p>
                    <p> Go to the admin or customizer section to add widget to this sidebar. </p>
                </div>
            </aside>
            <?php
        }
        else {
            echo '';
        }
    endif;
}
