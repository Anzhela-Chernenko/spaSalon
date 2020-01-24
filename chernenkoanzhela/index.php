<?php
/*
Template Name: Main
*/
?>

<?php

get_header();
?>
    <main class="mainM">
        <div  class="quality">
            <div class="quality__freshSkin wow rollIn" data-wow-duration="1s">
                <p class="quality__subtitle"><?php the_field('quality__subtitle'); ?></p>
                <p class="quality__unique"><b><?php the_field('quality__unique_uniquebeauty'); ?></b></p>
                <p class="quality__s"><?php the_field('quality__s'); ?></p>

            </div>
            <div class="quality__unique wow rollIn delay-1s">
                <p class="quality__subtitle"><?php the_field('quality__subtitle'); ?></p>
                <p class="quality__unique"><b><?php the_field('quality__unique_freshskin'); ?></b></p>
                <p class="quality__s"><?php the_field('quality__s'); ?></p>
            </div>
        </div>
        <div id="aboutUsScroll" class="hairdressing">

            <div class="female wow slideInLeft" data-wow-duration="2s">
            <a class="femaleService" target="_blank" href='http://chernenkoanzhela/services/'>
                <div  class="female__subtitleBefore">
                    <p   class="subtitleB wow pulse delay-3s"><?php the_field('quality__subtitle'); ?></p>
                </div>
                    <div class="female__title">
                        <p class="titleF wow pulse delay-4s"><?php the_field('female__title'); ?>
                        </p>
                    </div>
                <div class="female__subtitleAfter">
                    <p class="subtitleA wow pulse delay-3s"><?php the_field('try_our_tastes'); ?></p>
                </div></a>
            </div>

            <div class="male maleWr wow slideInRight" data-wow-duration="2s">
            <a class="maleService" target="_blank" href='http://chernenkoanzhela/services/'>
                <div id="secondBox" class="male__subtitleBefore maleSubtB">
                    <p class="subtitleB maleS wow pulse delay-3s"><?php the_field('quality__subtitle'); ?></p>
                </div>
                <div class="male__title">
                    <p class="titleF wow pulse delay-4s"><?php the_field('titleF'); ?>
                    </p>
                </div>
                <div class="male__subtitleAfter">
                    <p class="subtitleA wow pulse delay-3s"><?php the_field('try_our_tastes'); ?></p>
                </div></a>
            </div>
        </div>
        <div id="serviceScroll" class="main">
            <div class="fs-slider" id="fs-slider">

               <figure>
                    <img class="heightPic" src="<?php the_field('image_1'); ?>" alt="Flowers" />
                    <figcaption>
                        <p class="titleGreen "><?php the_field('titleGreen'); ?></p>
                        <p class="titleGray "><?php the_field('titleGray'); ?></p>
                        <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes'); ?></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="spaGirl">

                        <div class="woman">

                            <figcaption>
                                <p class="titleGreen "><?php the_field('titleGreen'); ?></p>
                                <p class="titleGray "><?php the_field('titleGray'); ?></p>
                                <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes'); ?></p>
                            </figcaption>

                        </div>
                    </div>
                </figure>
                <figure>
                    <img class="heightPic" src="<?php the_field('image_22'); ?>" alt="Spa" />
                    <figcaption>
                        <p class="titleGreen "><?php the_field('titleGreen'); ?></p>
                        <p class="titleGray "><?php the_field('titleGray'); ?></p>
                        <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes'); ?></p>
                    </figcaption>
                </figure>

                <figure>
                    <img class="heightPic" src="<?php the_field('image_18'); ?>" alt="Spa" />
                    <figcaption>
                        <p class="titleGreen "><?php the_field('titleGreen'); ?></p>
                        <p class="titleGray "><?php the_field('titleGray'); ?></p>
                        <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes'); ?></p>
                    </figcaption>
                </figure>

                <figure>
                    <img class="heightPic" src="<?php the_field('image_23'); ?>" alt="Spa" />
                    <figcaption>
                        <p class="titleGreen "><?php the_field('titleGreen'); ?></p>
                        <p class="titleGray "><?php the_field('titleGray'); ?></p>
                        <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes'); ?></p>
                    </figcaption>
                </figure>



            </div>
        </div>
        <div id="taemScroll" class="bid">
            <ul class="listBid">
                <li class="bidItem__first">
                    <div class="discriptionSpa">
                        <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon'); ?><br>
                            <b><?php the_field('bodyStudio_body_massage_therapy'); ?></b>
                        </p>
                        <p class="details"><?php the_field('details_info_servise'); ?>
                        </p>
                        <p class="detailsPress"><a target="_blank" href='http://chernenkoanzhela/services/' class="linkServices"><?php the_field('detailsPress'); ?></a></p>
                    </div>
                    <div class="picture">
                        <svg class="svgImage">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/1.svg#kill"></use>
                        </svg>
                    </div>
                </li>
                <li class="bidItem__second">
                    <div class="discriptionSpa">
                        <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon'); ?><br>
                            <b><?php the_field('bodyStudio_aromatherapy_body'); ?></b>
                        </p>
                        <p class="details"><?php the_field('details_info_servise'); ?>
                        </p>
                        <p class="detailsPress"><a target="_blank" href='http://chernenkoanzhela/services/' class="linkServices"><?php the_field('detailsPress'); ?></a></p>
                    </div>
                    <div class="picture">
                        <svg class="svgImage">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/2.svg#kill"></use>
                        </svg>
                    </div>
                </li>
                <li class="bidItem__third">
                    <div class="discriptionSpa">
                        <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon'); ?><br>
                            <b><?php the_field('bodyStudio_spa_package'); ?></b>
                        </p>
                        <p class="details"><?php the_field('details_info_servise'); ?>
                        </p>
                        <p class="detailsPress"><a target="_blank" href='http://chernenkoanzhela/services/' class="linkServices"><?php the_field('detailsPress'); ?></a></p>
                    </div>
                    <div class="picture">
                        <svg class="svgImage">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/3.svg#kill"></use>
                        </svg>
                    </div>
                </li>
                <li class="bidItem__fourth">
                    <div class="discriptionSpa">
                        <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon'); ?><br>
                            <b><?php the_field('bodyStudio_manicure_treatment'); ?></b>
                        </p>
                        <p class="details"><?php the_field('details_info_servise'); ?>
                        </p>
                        <p class="detailsPress"><a target="_blank" href='http://chernenkoanzhela/services/' class="linkServices"><?php the_field('detailsPress'); ?></a></p>
                    </div>
                    <div class="picture">
                        <svg class="svgImage">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/4.svg#kill"></use>
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
        <div class="services">
            <div class="services__content">
                <div class="services__title">
                    <p class="titleServices wow heartBeat delay-2s"><?php the_field('titleServices_beauty_studio'); ?></p>
                    <p class="titleSerStrong wow heartBeat delay-1s"><?php the_field('titleSerStrong_salon_service'); ?></p>
                    <p class="titleSerSubtitle wow heartBeat delay-2s"><?php the_field('subtitleGray_new_tastes'); ?></p>
                </div>
                <div class="services__hexagon">

                    <svg class="svgH">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/5.svg#killo"></use>
                    </svg>
                        <div class="circle ">
                        <div class="circleAnimation focus-in-contract">
                            <p class="circle__title">
                                <?php the_field('titleServices_beauty_studio'); ?>
                            </p>
                            <p class="circle__subtitle">
                                <?php the_field('bodyStudio_spa_package'); ?>
                            </p>
                            <p class="circle__discription">
                               <?php the_field('circle__discription_circle_subtitle_data'); ?>
                            </p>
                            <p class="circle__readMore"><?php the_field('circle__readMore_read_more'); ?></p>
                            </div>
                        </div>
                    <div class="circle__cup package ">
                        <svg class="svgSpa">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/6.svg#listSpa"></use>
                        </svg>
                    </div>
                    <div class="circle__flower package rotate-vert-center">
                        <svg class="svgSpa">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                    <div class="circle__bottle package rotate-vert-center">
                        <svg class="svgSpa">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/8.svg#listSpa"></use>
                        </svg>
                    </div>
                    <div class="circle__shoes package rotate-vert-center">
                        <svg class="svgSpa">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/4.svg#kill"></use>
                        </svg>
                    </div>
                    <div class="circle__east package rotate-vert-center">
                        <svg class="svgSpa">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/9.svg#listSpa"></use>
                        </svg>
                    </div>
                    <div class="circle__stones package rotate-vert-center">
                        <svg class="svgSt">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/3.svg#kill"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div id="contactScroll" class="fastContact">
    <div class="fastContact__content">
        <p class="fastContact__subtitle">
             <?php the_field('fastContact__subtitle'); ?>
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
                        <p class="mottoStudio"><b><?php the_field('mottoStudio'); ?></b></p>
                        <p class="mottoStudio logoSubscribe"><?php the_field('logoSubscribe'); ?></p>
                    </div>
                    <div class="gallery__describe">
                        <p class="gallery__subtitle"><?php the_field('bodyStudio_spa_studio_salon'); ?></p>
                        <p class="gallery__title wow flipInX" data-wow-duration="2s"><?php the_field('gallery__title_photo_gallery'); ?></p>
                        <p class="gallery__motto"><?php the_field('subtitleGray_new_tastes'); ?></p>
                    </div>

                </div>
               <div class="block gallerySecond">
                    <div class="container">

                        <div class="content">
                            <div class="grid" id="good">

                                <div class="grid__item "  data-size="1280x1280">
                                    <div id="pictireGlide" class="pictireGlide">
                                        <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon'); ?></p>
                                        <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here'); ?></p>
                                        <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen'); ?></p>
                                    </div>
                                    <a href="<?php the_field('image_33'); ?>"  class="img-wrap commonPic"><img class="imageAll" id="imgHover" src="<?php echo bloginfo('template_url'); ?>/assets/img/33.jpg" alt="Spa" />
                                        <div class="description description--grid">
                                            <h3><?php the_field('blow_bar'); ?></h3>
                                            <p><?php the_field('blow_bar_data'); ?></h3></p>

                                        </div>
                                    </a>
                                </div>
                                <div class="grid__item" data-size="1280x1280">
                                    <div class="pictireGlide">
                                        <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon'); ?></p>
                                        <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here'); ?></p>
                                        <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen'); ?></p>
                                    </div>
                                    <a href="<?php the_field('image_29'); ?>" class="img-wrap commonPic"><img class="imageAll" src="<?php echo bloginfo('template_url'); ?>/assets/img/29.jpg" alt="Spa" />
                                        <div class="description description--grid">
                                            <h3><?php the_field('blow-dry__styling'); ?></h3>
                                            <p><?php the_field('blow-dry__styling_data'); ?></p>

                                        </div>
                                    </a>
                                </div>
                                <div class="grid__item" data-size="1280x1280">
                                    <div class="pictireGlide">
                                        <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon'); ?></p>
                                        <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here'); ?></p>
                                        <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen'); ?></p>
                                    </div>
                                    <a href="<?php the_field('image_30'); ?>" class="img-wrap commonPic"><img class="imageAll" src="<?php echo bloginfo('template_url'); ?>/assets/img/30.jpg" alt="Spa" />
                                        <div class="description description--grid">
                                            <h3><?php the_field('highlights'); ?></h3>
                                            <p><?php the_field('highlights_data'); ?></p>

                                        </div>
                                    </a>
                                </div>
                                <div class="grid__item" id="propose" data-size="1280x1280">
                                    <div class="pictireGlide">
                                        <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon'); ?></p>
                                        <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here'); ?></p>
                                        <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen'); ?></p>
                                    </div>
                                    <a href="<?php the_field('image_31'); ?>" class="img-wrap commonPic"><img class="imageAll" src="<?php echo bloginfo('template_url'); ?>/assets/img/31.jpg" alt="Spa" />
                                        <div class="description description--grid">
                                            <h3><?php the_field('haircut_hover'); ?></h3>
                                            <p><?php the_field('haircut_data'); ?></p>

                                        </div>
                                    </a>
                                </div>
                                <div class="grid__item" data-size="1280x1280">
                                    <div class="pictireGlide">
                                        <p class="pictireGlide__subtitle"><?php the_field('bodyStudio_spa_studio_salon'); ?></p>
                                        <p class="pictireGlide__title"><?php the_field('pictireGlide__title_service_text_here'); ?></p>
                                        <p class="pictireGlide__screen"><?php the_field('pictireGlide__screen_full_screen'); ?></p>
                                    </div>
                                    <a href="<?php the_field('image_32'); ?>" class="img-wrap commonPic"><img class="imageAll"  src="<?php echo bloginfo('template_url'); ?>/assets/img/32.jpg" alt="Spa" />
                                        <div class="description description--grid">
                                            <h3><?php the_field('keraspa_keratin'); ?></h3>
                                            <p><?php the_field('keraspa_keratin_data'); ?></p>

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
            <p class="testimonials__subtitle"><?php the_field('testimonials__subtitle'); ?></p>
            <p class="testimonials__title wow flip"><?php the_field('testimonials__title_testimonials'); ?></p>
            <p class="testimonials__motto"><?php the_field('subtitleGray_new_tastes'); ?></p>

        </div>
        <div class="testimonialsImage">
            <div class="testimonialsImageContent">
                <div class="testimonialsImageGrid">

                    <div class="panel">
                        <div class="panel__">
                            <div class="panel__h"></div>
                        <img class="panelPicture" src="<?php the_field('image_34'); ?>" alt="Spa"></div>
                    </div>

                    <div class="panel">
                        <div class="panel__">
                            <div class="panel__h"></div>
                            <img class="panelPicture" src="<?php the_field('image_35'); ?>" alt="Spa"></div>
                    </div>

                    <div class="panel">
                        <div class="panel__">
                            <div class="panel__h"></div>
                            <img class="panelPicture" src="<?php the_field('image_36'); ?>" alt="Spa"></div>
                    </div>

                    <div class="panel">
                        <div class="panel__">
                            <div class="panel__h"></div>
                            <img class="panelPicture" src="<?php the_field('image_37'); ?>" alt="Spa"></div>
                    </div>

                    <div class="panel">
                        <div class="panel__">
                            <div class="panel__h"></div>
                            <img class="panelPicture" src="<?php the_field('image_38'); ?>" alt="Spa"></div>
                        </div>

                        <div class="panel">
                            <div class="panel__">
                                <div class="panel__h"></div>
                                <img class="panelPicture" src="<?php the_field('image_39'); ?>" alt="Spa"></div>
                    </div>

                    <div class="panel">
                        <div class="panel__">
                            <div class="panel__h"></div>
                            <img class="panelPicture" src="<?php the_field('image_40'); ?>" alt="Spa"></div>

                    </div>
                    <div class="panel">
                        <div class="panel__">
                            <div class="panel__h"></div>
                            <img class="panelPicture" src="<?php the_field('image_41'); ?>" alt="Spa"></div>

                    </div>
                    <div class="panel lastP">
                        <div class="panel__">
                            <div class="panel__h"></div>
                            <img class="panelPicture" src="<?php the_field('image_42'); ?>" alt="Spa"></div>

                    </div>
                    <div class="panel" id="largeTestimPic">
                        <div class="largeTestimPic__content">
                            <div class="points">
                                <p class="point"><i class="fa fa-quote-left myPoint"></i></p>
                            </div>
                            <div class="variety">
                                <p class="variety__title"><?php the_field('variety__title'); ?></p>
                                <p class="variety__subtitle"><?php the_field('hair_studio_salon'); ?></p>
                                <p class="variety__text">
                                    <?php the_field('variety_text_data'); ?>
                                </p>
                                <p class="variety__end"><?php the_field('hair_services_customer'); ?></p>
                            </div>
                            <div class="points">
                                <p id="pointRight" class="point"><i class="fa fa-quote-right myPoint"></i></p>
                            </div>
                        </div>

                    </div>
                </div>
</div>
        </div>
        <div class="deals">
            <div class="greanPart">
                <div class="greanPart__title">

                    <div class="logo greanPartLogo">
                        <div class="logoStudio">
                           <?php the_custom_logo(); ?>
                        </div>
                        <p class="mottoStudio"><b><?php the_field('mottoStudio'); ?></b></p>
                        <p class="mottoStudio logoSubscribe"><?php the_field('logoSubscribe'); ?></p>
                    </div>
                    <div class="greanPart__describe">

                        <p class="gallery__subtitle grSub wow zoomInLeft"><?php the_field('bodyStudio_spa_studio_salon'); ?></p>
                        <p class="gallery__title grSub"><?php the_field('gallery__title_grSub'); ?></p>
                        <p class="gallery__motto grM"><?php the_field('subtitleGray_new_tastes'); ?></p>
                    </div>
                </div>
                <div class="greanPart__offers">
                        <div class="offersContent">
                            <div class="offersContent__block">
                                <div class="star">

                                    <i class="fa fa-certificate newItem">
                                        <p class="starNew"><?php the_field('starNew_new'); ?></p>
                                    </i>
                                </div>
                                <div class="offCont">
                                    <!--  <div class="triangle"></div>-->
                                    <p class="title"><?php the_field('title_holiday'); ?></p>
                                    <p class="subtitle"><?php the_field('subtitle_offer'); ?></p>
                                    <p class="textDeal"><?php the_field('offcontent_data'); ?></p>
                                    <p class="dateNews"><?php the_field('date_news'); ?></p>
                                </div>


                            </div>
                            <div class="offersContent__block">
                                <div class="star">
                                    <i class="fa fa-certificate newItem">
                                        <p class="starNew"><?php the_field('starNew_new'); ?></p>
                                    </i>
                                </div>
                                <div class="offCont">
                                <!--  <div class="triangle"></div>-->
                                <p class="title titleColor"><?php the_field('title _25'); ?></p>
                                <p class="subtitleColor"><?php the_field('subtitleColor_off'); ?></p>
                                <p class="textDeal"><?php the_field('offcontent_data'); ?></p>
                                    <p class="dateNews"><?php the_field('date_news'); ?></p></div>
                            </div>
                            <div class="offersContent__block">
                                <div class="star">
                                    <i class="fa fa-certificate newItem">
                                        <p class="starNew"><?php the_field('starNew_new'); ?></p>
                                    </i>
                                </div>
                                <div class="offCont">
                                <!--  <div class="triangle"></div>-->
                                <p class="title"><b><?php the_field('title_10'); ?></b></p>
                                <p class="subtitle caskBack"><?php the_field('subtitle_caskBack'); ?></p>
                                <p class="textDeal"><?php the_field('offcontent_data'); ?></p>
                                    <p class="dateNews"><?php the_field('date_news'); ?></p></div>
                            </div>
                            <div class="offersContent__block">
                                <div class="star">
                                    <i class="fa fa-certificate newItem">
                                        <p class="starNew"><?php the_field('starNew_new'); ?></p>
                                    </i>
                                </div>
                                <div class="offCont">
                                <!--  <div class="triangle"></div>-->
                                <p class="title"><?php the_field('title_woman'); ?></p>
                                <p class="subtitleColor"><?php the_field('subtitleColor_special'); ?></p>
                                <p class="textDeal"><?php the_field('offcontent_data'); ?></p>
                                    <p class="dateNews"><?php the_field('date_news'); ?></p></div>
                            </div>
                            <div class="offersContent__block">
                                <div class="star">
                                    <i class="fa fa-certificate newItem">
                                        <p class="starNew"><?php the_field('starNew_new'); ?></p>
                                    </i>
                                </div>
                                <div class="offCont">
                                <!--<div class="triangleBottom"></div>-->
                                <p class="title"><?php the_field('title_holiday'); ?></p>
                                <p class="subtitleColor"><?php the_field('subtitle_offer'); ?></p>
                                <p class="textDeal"><?php the_field('offcontent_data'); ?></p>
                                    <p class="dateNews"><?php the_field('date_news'); ?></p></div>
                            </div>
                            <div class="offersContent__block">
                                <div class="star">
                                    <i class="fa fa-certificate newItem">
                                        <p class="starNew"><?php the_field('starNew_new'); ?></p>
                                    </i>
                                </div>
                                <div class="offCont">
                                <!--<div class="triangleBottom"></div>-->
                                <p class="title"><b><?php the_field('title _25'); ?></b></p>
                                <p class="subtitleColor"><?php the_field('subtitleColor_off'); ?></p>
                                <p class="textDeal"><?php the_field('offcontent_data'); ?></p>
                                    <p class="dateNews"><?php the_field('date_news'); ?></p></div>
                            </div>
                            <div class="offersContent__block">
                                <div class="star">
                                    <i class="fa fa-certificate newItem">
                                        <p class="starNew"><?php the_field('starNew_new'); ?></p>
                                    </i>
                                </div>
                                <div class="offCont">

                                <p class="title"><b><?php the_field('title_10'); ?></b></p>
                                <p class="subtitle caskBack"><?php the_field('subtitle_caskBack'); ?>K</p>
                                <p class="textDeal"><?php the_field('offcontent_data'); ?></p>
                                    <p class="dateNews"><?php the_field('date_news'); ?></p></div>
                            </div>
                            <div class="offersContent__block">
                                <div class="star">
                                    <i class="fa fa-certificate newItem">
                                        <p class="starNew"><?php the_field('starNew_new'); ?></p>
                                    </i>
                                </div>
                                <div class="offCont">

                                <p class="title"><?php the_field('title_woman'); ?></p>
                                <p class="subtitle"><?php the_field('subtitleColor_special'); ?></p>
                                <p class="textDeal"><?php the_field('offcontent_data'); ?></p>
                                    <p class="dateNews"><?php the_field('date_news'); ?></p></div>
                            </div>

                        </div>
                </div>
            </div>
            <div class="whitePart">
                <div class="logoList">
                    <ul class="listLogos">
                        <li class="logos">
                            <svg class="hair">
                               <use  xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/10.svg#hairLogo"></use>
                            </svg>
                        </li>
                        <li class="logos">
                            <svg class="hair">
                                <linearGradient x1="0" y1="0" x2="100%" y2="100%" id="gradient">
                                    <stop stop-color="#eaaf8d" offset="0"/>
                                    <stop stop-color="#63373e" offset="100%"/>
                                </linearGradient>
                                <use  xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/11.svg#hairLogo_2"></use>
                            </svg>
                        </li>
                        <li class="logos">
                            <svg class="hair">
                                <use  xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/12.svg#hairLogo_3"></use>
                            </svg>
                        </li>
                        <li class="logos">
                            <svg class="hair">
                                <use  xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/13.svg#hairLogo_4"></use>
                            </svg>
                        </li>
                        <li class="logos">
                            <svg class="hair">
                                <use  xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/14.svg#hairLogo_5"></use>
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
                            <p class="mottoStudio"><b><?php the_field('mottoStudio'); ?></b></p>
                            <p class="mottoStudio logoSubscribe"><?php the_field('logoSubscribe'); ?></p>
                        </div>
                    <div class="appointmentText">
                        <div class="frizzo">
                        <p class="appointmentText__title wow heartBeat"><?php the_field('appointmentText_apointment'); ?></p>
                        <p class="appointmentText__subtitle"><?php the_field('quality__s'); ?></p>
                        </div>
                        <div class="frizzoButtons">
                            <div class="frizzoAppointment frizzoBut">
                            <a class="appointmentLink" href='http://chernenkoanzhela/about/' target="_blank">
                            <?php the_field('appointment_button'); ?>
                                </a>
                            </div>
                            <div class="frizzoContactForm frizzoBut">
                            <a class="contactLink" href='http://chernenkoanzhela/contact/' target="_blank">
                            <?php the_field('contact_form_button'); ?>
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
                            <p class="formInformation__title"><?php the_field('formInformation__title'); ?></p>
                            <p class="formInformation__subtitle"><?php the_field('appointment_form_data'); ?></p>
                    <?php echo do_shortcode('[contact-form-7 id="294" title="Main Form"]'); ?>
                    </div>
                </div>
            <div class="phoneImg">
                <img class="cablePic" alt="Spa" src="<?php the_field('image_45'); ?>">

            </div>
            </div>
        </div>
    </main>
<?php
get_footer();
?>