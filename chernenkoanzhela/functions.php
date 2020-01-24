<?php
add_action('wp_enqueue_scripts', 'spaSalon_scripts');

function spaSalon_scripts(){

wp_enqueue_style('spaSalon-style', get_stylesheet_uri());
wp_enqueue_style('404-style', get_template_directory_uri() . '/assets/css/404.css');
wp_enqueue_style('services2-style', get_template_directory_uri() . '/assets/css/services.css');
wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/css/contact.css');
wp_enqueue_style('team-style', get_template_directory_uri() . '/assets/css/team.css');
wp_enqueue_style('aboutUs-style', get_template_directory_uri() . '/assets/css/aboutUs.css');
wp_enqueue_style('demo-style', get_template_directory_uri() . '/assets/css/demo.css');
wp_enqueue_style('demo2-style', get_template_directory_uri() . '/assets/css/demo2.css');
wp_enqueue_style('media-style', get_template_directory_uri() . '/assets/css/media.css');
wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/normalize.css');
wp_enqueue_style('noscript-style', get_template_directory_uri() . '/assets/css/noscript.css');
wp_enqueue_style('style-style', get_template_directory_uri() . '/assets/css/style.css');
wp_enqueue_style('style2-style', get_template_directory_uri() . '/assets/css/style2.css');
wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css');
wp_enqueue_style('fonts3-style', get_template_directory_uri() . '/assets/fonts/font-awesome-4.3.0/css/font-awesome.css');


wp_enqueue_style('maxcdn-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
wp_enqueue_style('swip-style', 'https://unpkg.com/swiper/css/swiper.css');
wp_enqueue_style('swip2-style', 'https://unpkg.com/swiper/css/swiper.min.css');
wp_enqueue_style('fonts-style', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700&display=swap');
wp_enqueue_style('fonts2-style', 'https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700&display=swap');

wp_enqueue_style('favicon', 'https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,600,700&display=swap');


wp_enqueue_script('unpkg3-scripts', 'https://unpkg.com/swiper/js/swiper.js', false);
wp_enqueue_script('unpkg4-scripts', 'https://unpkg.com/swiper/js/swiper.min.js', array(), null, false);
wp_enqueue_script('modernizr1-scripts', get_template_directory_uri() . '/assets/js/modernizr-custom.js', array(), null, false);
wp_enqueue_script('modernizr2-scripts', get_template_directory_uri() . '/assets/js/modernizr.custom.26887.js', array(), null, false);
//wp_enqueue_script('ajax-scripts', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js', array(), null, false);


wp_enqueue_script('jqueryM-scripts', get_template_directory_uri() . '/assets/plugin/jquery.mask.js', array(), null, true);
wp_enqueue_script('unpkg-scripts', 'https://unpkg.com/swiper/js/swiper.js', array(), null, true);
wp_enqueue_script('unpkg2-scripts', 'https://unpkg.com/swiper/js/swiper.min.js', array(), null, true);
wp_enqueue_script('ajax-scripts', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null, true);
wp_enqueue_script('imgslider-scripts', get_template_directory_uri() . '/assets/js/jquery.imgslider.js', array(), null, true);
wp_enqueue_script('sliderCard-scripts', get_template_directory_uri() . '/assets/js/sliderCard.js', array(), null, true);
wp_enqueue_script('imagesloaded-scripts', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), null, true);
wp_enqueue_script('masonry-scripts', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array(), null, true);
wp_enqueue_script('classie-scripts', get_template_directory_uri() . '/assets/js/classie.js', array(), null, true);
wp_enqueue_script('main-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
wp_enqueue_script('script-scripts', get_template_directory_uri() . '/assets/script.js', array(), null, true);
wp_enqueue_script('galleryImageView-scripts', get_template_directory_uri() . '/assets/js/galleryImageView.js', array(), null, true);
wp_enqueue_script('imageHover-scripts', get_template_directory_uri() . '/assets/js/imageHover.js', array(), null, true);
wp_enqueue_script('check-scripts', get_template_directory_uri() . '/assets/js/check.js', array(), null, true);
wp_enqueue_script('resize-scripts', get_template_directory_uri() . '/assets/js/resize.js', array(), null, true);
wp_enqueue_script('wow-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), null, true);
wp_enqueue_script('wow2-scripts', get_template_directory_uri() . '/assets/js/animateJquery.js', array(), null, true);
wp_enqueue_script('aboutUs-scripts', get_template_directory_uri() . '/assets/js/aboutUs.js', array(), null, true);
wp_enqueue_script('servicess-scripts', get_template_directory_uri() . '/assets/js/services.js', array(), null, true);







wp_enqueue_script('ajax2-scripts', 'https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', array(), null, false);
}

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );



add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'scroll-to';

        if ($item->current) {
            $atts['class'] .= ' scroll-to-active';
        }
    };

    return $atts;
}
?>