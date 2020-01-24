<?php
/*
Template Name: About us
*/
?>
<?php
get_header();
?>

<main class="aboutUsMain">
    <div class="aboutUsYellowLine">
          <div class="aboutUsYellowLineContent">
                <ul class="aboutUsMenu">
                    <li class="aboutUsMenuList">
                    <a class="aboutUsLink" href="http://chernenkoanzhela/" target="_blank">
                     <?php the_field('home_page'); ?>
                     </a>
                     </li>
                    <li class="aboutUsMenuList">
                    <a class="aboutUsLink" href="http://chernenkoanzhela/services/" target="_blank">
                    <?php the_field('business_page'); ?>
                    </a>
                    </li>
                    <li class="aboutUsMenuList">
                    <a class="aboutUsLink" href="http://chernenkoanzhela/about/" target="_blank">
                    <?php the_field('about_us_title'); ?>
                    </a>
                    </li>
                </ul>

          </div>
      </div>
    <div class="quality aboutUsQuality">
        <div class="quality__freshSkin wow rollIn">
            <p class="quality__subtitle"><?php the_field('quality__subtitle', 2); ?></p>
            <p class="quality__unique"><b><?php the_field('quality__unique_uniquebeauty', 2); ?></b></p>
            <p class="quality__s"><?php the_field('quality__s', 2); ?></p>

        </div>
        <div class="quality__unique wow rollIn delay-1s">
            <p class="quality__subtitle"><?php the_field('quality__subtitle', 2); ?></p>
            <p class="quality__unique"><b><?php the_field('quality__unique_freshskin', 2); ?></b></p>
            <p class="quality__s"><?php the_field('quality__s', 2); ?></p>
        </div>
    </div>
    <div class="aboutUsDescription">
        <div class="aboutUsDescription__picture "></div>
        <div class="aboutUsDescription__data wow fadeIn">

            <p class="aboutUsTitile"><?php the_field('beauty_studio_text_here'); ?></p>
            <p class="aboutUsOverview">
                <?php the_field('beauty_studio_text_here_data'); ?>
            </p>
        </div>
    </div>
    <div class="aboutUsGallery">
        <div class="aboutUsGallery__content">
            <ul class="aboutUsImages">
                <li class="aboutUsImages__list">
                    <img class="aApicture" src="<?php the_field('image_gallary_about_us_1'); ?>">
                </li>
                <li class="aboutUsImages__list">
                    <img class="aApicture" src="<?php the_field('image_gallary_about_us_2'); ?>">
                </li>
                <li class="aboutUsImages__list">
                    <img class="aApicture" src="<?php the_field('image_gallary_about_us_3'); ?>">
                </li>
                <li class="aboutUsImages__list">
                    <img class="aApicture" src="<?php the_field('image_gallary_about_us_4'); ?>">
                </li>
            </ul>
        </div>
    </div>
    <div class="aboutUsDescription aUDescriptionRevers">
        <div class="aboutUsDescription__picture aUDataPic"></div>
        <div class="aboutUsDescription__data wow fadeIn">

            <p class="aboutUsTitile"><?php the_field('beauty_studio_text_here'); ?></p>
            <p class="aboutUsOverview">
               <?php the_field('beauty_studio_text_here_data'); ?>
            </p>
        </div>
    </div>
    <div id="contactScroll" class="fastContact">
        <div class="fastContact__content">
            <p class="fastContact__subtitle wow jackInTheBox">
                <?php the_field('you_are_invited_to_the_beauty_center'); ?>
            </p>
            <p class="fastContact__title wow flip">
                <?php the_field('fastContact__title_fast_contact'); ?>
            </p>
            <div class="sentPhone">
                        <?php echo do_shortcode('[contact-form-7 id="293" title="Fast contact"]'); ?>
                    </div>
        </div>
    </div>
     <div id="portfolioScroll" class="photoGallery">
                <div class="gallery">
                    <div class="block galleryFirst">

                        <div class="logo logoBackground">

                            <div class="logoStudio logoGreen">
                                <?php the_custom_logo(); ?>
                            </div>
                            <p class="mottoStudio"><b><?php the_field('mottoStudio', 2); ?></b></p>
                            <p class="mottoStudio logoSubscribe"><?php the_field('logoSubscribe', 2); ?></p>
                        </div>
                        <div class="gallery__describe">
                            <p class="gallery__subtitle"><?php the_field('bodyStudio_spa_studio_salon', 2); ?></p>
                            <p class="gallery__title wow flipInX" data-wow-duration="2s"><?php the_field('gallery__title_photo_gallery', 2); ?></p>
                            <p class="gallery__motto"><?php the_field('subtitleGray_new_tastes', 2); ?></p>
                        </div>

                    </div>
                   <div class="block gallerySecond">
                        <div class="container">

                            <div class="content">
                                <div class="grid" id="good">

                                    <div class="grid__item "  data-size="1280x1280">
                                        <div id="pictireGlide" class="pictireGlide">
                                            <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon', 2); ?></p>
                                            <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here', 2); ?></p>
                                            <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen', 2); ?></p>
                                        </div>
                                        <a href="<?php the_field('image_33', 2); ?>"  class="img-wrap commonPic"><img class="imageAll" id="imgHover" src="<?php echo bloginfo('template_url'); ?>/assets/img/33.jpg" alt="Spa" />
                                            <div class="description description--grid">
                                                <h3><?php the_field('blow_bar', 2); ?></h3>
                                                <p><?php the_field('blow_bar_data', 2); ?></h3></p>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__item" data-size="1280x1280">
                                        <div class="pictireGlide">
                                            <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon', 2); ?></p>
                                            <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here', 2); ?></p>
                                            <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen', 2); ?></p>
                                        </div>
                                        <a href="<?php the_field('image_29', 2); ?>" class="img-wrap commonPic"><img class="imageAll" src="<?php echo bloginfo('template_url'); ?>/assets/img/29.jpg" alt="Spa" />
                                            <div class="description description--grid">
                                                <h3><?php the_field('blow-dry__styling', 2); ?></h3>
                                                <p><?php the_field('blow-dry__styling_data', 2); ?></p>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__item" data-size="1280x1280">
                                        <div class="pictireGlide">
                                            <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon', 2); ?></p>
                                            <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here', 2); ?></p>
                                            <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen', 2); ?></p>
                                        </div>
                                        <a href="<?php the_field('image_30', 2); ?>" class="img-wrap commonPic"><img class="imageAll" src="<?php echo bloginfo('template_url'); ?>/assets/img/30.jpg" alt="Spa" />
                                            <div class="description description--grid">
                                                <h3><?php the_field('highlights', 2); ?></h3>
                                                <p><?php the_field('highlights_data', 2); ?></p>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__item" id="propose" data-size="1280x1280">
                                        <div class="pictireGlide">
                                            <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon', 2); ?></p>
                                            <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here', 2); ?></p>
                                            <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen', 2); ?></p>
                                        </div>
                                        <a href="<?php the_field('image_31', 2); ?>" class="img-wrap commonPic"><img class="imageAll" src="<?php echo bloginfo('template_url'); ?>/assets/img/31.jpg" alt="Spa" />
                                            <div class="description description--grid">
                                                <h3><?php the_field('haircut_hover', 2); ?></h3>
                                                <p><?php the_field('haircut_data', 2); ?></p>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__item" data-size="1280x1280">
                                        <div class="pictireGlide">
                                            <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon', 2); ?></p>
                                            <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here', 2); ?></p>
                                            <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen', 2); ?></p>
                                        </div>
                                        <a href="<?php the_field('image_32', 2); ?>" class="img-wrap commonPic"><img class="imageAll"  src="<?php echo bloginfo('template_url'); ?>/assets/img/32.jpg" alt="Spa" />
                                            <div class="description description--grid">
                                                <h3><?php the_field('keraspa_keratin', 2); ?></h3>
                                                <p><?php the_field('keraspa_keratin_data', 2); ?></p>

                                            </div>
                                        </a>
                                    </div>



                                </div>

                                <div class="preview">
                                    <button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
                                    <div class="description description--preview"></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="block--large"></div>
            </div>
    <div class="testimonials">
        <p class="testimonials__subtitle"><?php the_field('testimonials__subtitle', 2); ?></p>
        <p class="testimonials__title wow zoomIn"><?php the_field('testimonials__title_testimonials', 2); ?></p>
        <p class="testimonials__motto"><?php the_field('subtitleGray_new_tastes', 2); ?></p>

    </div>
    <div class="testimonialsImage">
        <div class="testimonialsImageContent">
            <div class="testimonialsImageGrid">

                <div class="panel">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_34', 2); ?>" alt="Spa picture"></div>
                </div>

                <div class="panel">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_35', 2); ?>" alt="Spa picture"></div>
                </div>

                <div class="panel">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_36', 2); ?>" alt="Spa picture"></div>
                </div>

                <div class="panel">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_37', 2); ?>" alt="Spa picture"></div>
                </div>

                <div class="panel">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_38', 2); ?>" alt="Spa picture"></div>
                </div>

                <div class="panel">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_39', 2); ?>" alt="Spa picture"></div>
                </div>

                <div class="panel">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_40', 2); ?>" alt="Spa picture"></div>

                </div>
                <div class="panel">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_41', 2); ?>" alt="Spa picture"></div>

                </div>
                <div class="panel lastP">
                    <div class="panel__">
                        <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_42', 2); ?>" alt="Spa picture"></div>

                </div>
                <div class="panel" id="largeTestimPic">
                    <div class="largeTestimPic__content">
                        <div class="points">
                            <p class="point"><i class="fa fa-quote-left myPoint"></i></p>
                        </div>
                        <div class="variety">
                            <p class="variety__title"><?php the_field('variety__title', 2); ?></p>
                            <p class="variety__subtitle"><?php the_field('hair_studio_salon', 2); ?></p>
                            <p class="variety__text">
                                <?php the_field('variety_text_data', 2); ?>
                            </p>
                            <p class="variety__end"><?php the_field('hair_services_customer', 2); ?></p>
                        </div>
                        <div class="points">
                            <p id="pointRight" class="point"><i class="fa fa-quote-right myPoint"></i></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="deals aUdeals">

        <div class="whitePart">
            <div class="logoList aUlogoList">
                <ul class="listLogos">
                    <li class="logos">
                        <svg class="hair">
                           <use  xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/10.svg#hairLogo"></use>

                        </svg>
                    </li>
                    <li class="logos">
                        <svg class="hair">
                            <linearGradient x1="0" y1="0" x2="100%" y2="100%" id="gradient">
                                <stop stop-color="#eaaf8d" offset="0"/>
                                <stop stop-color="#63373e" offset="100%"/>
                            </linearGradient>
                            <use  xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/11.svg#hairLogo_2"></use>
                        </svg>
                    </li>
                    <li class="logos">
                        <svg class="hair">
                            <use  xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/12.svg#hairLogo_3"></use>
                        </svg>
                    </li>
                    <li class="logos">
                        <svg class="hair">
                            <use  xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/13.svg#hairLogo_4"></use>
                        </svg>
                    </li>
                    <li class="logos">
                        <svg class="hair">
                            <use  xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/14.svg#hairLogo_5"></use>
                        </svg>
                    </li>

                </ul>
            </div>
            <div class="appointment">
                                <div class="appointmentContent">

                                    <div class="logo logoBackground appoint">
                                        <div class="logoStudio logoGreen">
                                            <?php the_custom_logo(); ?>
                                        </div>
                                        <p class="mottoStudio"><b><?php the_field('mottoStudio', 2); ?></b></p>
                                        <p class="mottoStudio logoSubscribe"><?php the_field('logoSubscribe', 2); ?></p>
                                    </div>
                                <div class="appointmentText">
                                    <div class="frizzo">
                                    <p class="appointmentText__title wow heartBeat"><?php the_field('appointmentText_apointment', 2); ?></p>
                                    <p class="appointmentText__subtitle"><?php the_field('quality__s', 2); ?></p>
                                    </div>
                                    <div class="frizzoButtons">
                                        <div class="frizzoAppointment frizzoBut">
                                        <a class="appointmentLink" href='http://chernenkoanzhela/about/' target="_blank">
                                        <?php the_field('appointment_button', 2); ?>
                                            </a>
                                        </div>
                                        <div class="frizzoContactForm frizzoBut">
                                        <a class="contactLink" href='http://chernenkoanzhela/contact/' target="_blank">
                                        <?php the_field('contact_form_button', 2); ?>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appointmentForm">
                        <div class="contactData">
                            <div class="formData">
                                <div class="formInformation">
                                        <p class="formInformation__title"><?php the_field('formInformation__title', 2); ?></p>
                                        <p class="formInformation__subtitle"><?php the_field('appointment_form_data', 2); ?></p>
                                <?php echo do_shortcode('[contact-form-7 id="294" title="Main Form"]', 2); ?>
                                </div>
                            </div>
                        <div class="phoneImg">
                            <img class="cablePic" alt="Spa" src="<?php the_field('image_45', 2); ?>">

                        </div>
                        </div>
                    </div>


</main>



<?php
get_footer();
?>