<?php
/*
Template Name: Header
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); echo " 🎀 | "; bloginfo('description'); ?></title>


    <?php
    wp_head();
    ?>
</head>
<body class="parse" id="hello">

    <div type="button" class="callback-bt">
        <div  onclick="sendFone()" class="text-call ">
            <i class="fa fa-phone animated infinite flash callMePress"></i>
            <span id="foneSend"  class="callbackB">Call me</span>
        </div>
    </div>
<section id="sendInfo" class="feedbackField">
<div id="fon" class="feedbackField__form">
    <div  class="dataPhone">
       <?php echo do_shortcode('[contact-form-7 id="207" title="Call me"]'); ?>
    </div>
</div>
</section>



    <header class="header">

       <div id="linkNav" class="nav">


                 <div class="logo ">
                  <?php the_custom_logo(); ?>
               <p class="mottoStudio"><b><?php the_field('mottoStudio', 2); ?></b></p>
               <p class="mottoStudio logoSubscribe"><?php the_field('logoSubscribe', 2); ?></p>
           </div>



           <ul id="list" class="list">

<?php
                                     wp_nav_menu( [
                                         'menu'            => 'Main',
                                         'container'       => false,
                                         'menu_class'      => 'nav__list',
                                         'echo'            => true,
                                         'fallback_cb'     => 'wp_page_menu',
                                         'items_wrap'      => '<ul class="nav__list">%3$s</ul>',
                                         'depth'           => 1
                                     ] );
                                 ?>



           </ul>
                <div class="burger">
                    <i onclick="openNav()" class="fa fa-navicon myBurger"></i>
                        </div>
           <div id="myNav" class="overlay">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <div class="overlay-content">
                   <a href="http://chernenkoanzhela/portfolio/" target="_self" class="navLinks"><?php the_field('overlay_content_portfolio', 2); ?></a>
                   <a href="http://chernenkoanzhela/about/" target="_self" class="navLinks"><?php the_field('overlay_content_about', 2); ?></a>
                   <a href="http://chernenkoanzhela/services/" target="_self" class="navLinks"><?php the_field('overlay_content_services', 2); ?></a>
                   <a href="http://chernenkoanzhela/team/" target="_self" class="navLinks"><?php the_field('overlay_content_team', 2); ?></a>
                   <a href="http://chernenkoanzhela/contact/" target="_self" class="navLinks"><?php the_field('overlay_content_contact', 2); ?></a>
               </div>
           </div>
       </div>

        <div class="swiper-container">

            <div class="swiper-wrapper">

                <div style="background: linear-gradient(45deg, rgba(66, 154, 134, 1), transparent), url(<?php the_field('image_102', 2); ?>)" class="swiper-slide first"></div>
                <div style="background: linear-gradient(45deg, rgba(66, 154, 134, 1), transparent), url(<?php the_field('image_102', 2); ?>)" class="swiper-slide second"></div>
                <div style="background: linear-gradient(45deg, rgba(66, 154, 134, 1), transparent), url(<?php the_field('image_102', 2); ?>)" class="swiper-slide third"></div>
                <div style="background: linear-gradient(45deg, rgba(66, 154, 134, 1), transparent), url(<?php the_field('image_102', 2); ?>)" class="swiper-slide forth"></div>

            </div>

        </div>
<div class="motto">
    <p id="cutWelcome" class="motto__welcome animated bounceInLeft"><?php the_field('motto__welcome', 2); ?></p>
    <h1 id="changeMotto" class="h1"><?php the_field('h1', 2); ?></h1>
    <p id="cutAppoint" class="motto__appointment animated bounceInLeft"><?php the_field('motto__appointment', 2); ?></p>
    <div id="cutReadMore" class="readMore">
       <a class="linkReadMore" target="_blank" href='http://chernenkoanzhela/services/'> <p class="readM">READ MORE</p></a>
        <i class="fa fa-circle read"></i>
    </div>
</div>
        <div class="freshSkin"><p class="frechS animated flash">#<b>fresh</b>skin</p> </div>
        <div class="orangeLine"></div>

    </header>