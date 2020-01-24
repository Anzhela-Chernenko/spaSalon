<?php
/*
Template Name: 404
*/
?>

<?php

get_header();
?>
<main class="notFoundMain">
    <div class="aboutUsYellowLine">
              <div class="aboutUsYellowLineContent">
                    <ul class="aboutUsMenu">
                        <li class="aboutUsMenuList">
                        <a class="aboutUsLink" href="http://chernenkoanzhela/" target="_blank">
                         <?php the_field('home_page',208); ?>
                         </a>
                         </li>
                        <li class="aboutUsMenuList">
                        <a class="aboutUsLink" href="http://chernenkoanzhela/services/" target="_blank">
                        <?php the_field('business_page', 208); ?>
                        </a>
                        </li>
                        <li class="aboutUsMenuList">
                        <a class="aboutUsLink" href="http://chernenkoanzhela/about/" target="_blank">
                        <?php the_field('about_us_title', 208); ?>
                        </a>
                        </li>
                    </ul>

              </div>
          </div>
    <div class="notFoundMain__content">
        <figure class="notFoundCard">
            <div class="notFoundCard__cut">
                <img class="notFoundCut" src="<?php echo bloginfo('template_url'); ?>/assets/img/52.png">
                <img class="notFoundCut" src="<?php echo bloginfo('template_url'); ?>/assets/img/16.png">
            </div>
            <div class="notFoundCard__info">
                <p class="notFound__ups">UPS...</p>
                <p class="notFound__title">NOT FOUND</p>
                <p class="notFound__subtitle"><a class="aboutUsLink" href="<?php echo get_home_url(); ?>">RETURN HOMEPAGE</a></p>
                <p class="notFound__info">Diam in arcu cursus euismod quis viverra nibh cras. In ante metus dictum at
                    tempor commodo ullamcorper. Ultrices eros in cursus turpis massa.
                    <br><br>
                    Purus in massa tempor nec. Sagittis vitae et leo duis ut. Faucibus purus in massa tempor.</p>

            </div>

        </figure>
    </div>

</main>






<?php
get_footer();
?>