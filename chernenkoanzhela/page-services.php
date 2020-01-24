<?php
/*
Template Name: Services
*/
?>

<?php
get_header();
?>

<main class="servicesMain">
    <div class="aboutUsYellowLine">
              <div class="aboutUsYellowLineContent">
                    <ul class="aboutUsMenu">
                        <li class="aboutUsMenuList">
                        <a class="aboutUsLink" href="http://chernenkoanzhela/" target="_blank">
                         <?php the_field('home_page', 208); ?>
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
    <div id="aboutUsScroll" class="hairdressing">

                <div class="female wow slideInLeft" data-wow-duration="2s">
                <a class="femaleService" target="_blank" href='http://chernenkoanzhela/services/'>
                    <div  class="female__subtitleBefore">
                        <p   class="subtitleB wow pulse delay-3s"><?php the_field('quality__subtitle', 2); ?></p>
                    </div>
                        <div class="female__title">
                            <p class="titleF wow pulse delay-4s"><?php the_field('female__title', 2); ?>
                            </p>
                        </div>
                    <div class="female__subtitleAfter">
                        <p class="subtitleA wow pulse delay-3s"><?php the_field('try_our_tastes', 2); ?></p>
                    </div></a>
                </div>

                <div class="male maleWr wow slideInRight" data-wow-duration="2s">
                <a class="maleService" target="_blank" href='http://chernenkoanzhela/services/'>
                    <div id="secondBox" class="male__subtitleBefore maleSubtB">
                        <p class="subtitleB maleS wow pulse delay-3s"><?php the_field('quality__subtitle', 2); ?></p>
                    </div>
                    <div class="male__title">
                        <p class="titleF wow pulse delay-4s"><?php the_field('titleF', 2); ?>
                        </p>
                    </div>
                    <div class="male__subtitleAfter">
                        <p class="subtitleA wow pulse delay-3s"><?php the_field('try_our_tastes', 2); ?></p>
                    </div></a>
                </div>
            </div>
    <div id="serviceScroll" class="main">
                <div class="fs-slider" id="fs-slider">

                   <figure>
                        <img class="heightPic" src="<?php the_field('image_1', 2); ?>" alt="Flowers" />
                        <figcaption>
                            <p class="titleGreen "><?php the_field('titleGreen', 2); ?></p>
                            <p class="titleGray "><?php the_field('titleGray', 2); ?></p>
                            <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes', 2); ?></p>
                        </figcaption>
                    </figure>
                    <figure>
                        <div class="spaGirl">

                            <div class="woman">

                                <figcaption>
                                    <p class="titleGreen "><?php the_field('titleGreen', 2); ?></p>
                                    <p class="titleGray "><?php the_field('titleGray', 2); ?></p>
                                    <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes', 2); ?></p>
                                </figcaption>

                            </div>
                        </div>
                    </figure>
                    <figure>
                        <img class="heightPic" src="<?php the_field('image_22', 2); ?>" alt="Spa" />
                        <figcaption>
                            <p class="titleGreen "><?php the_field('titleGreen', 2); ?></p>
                            <p class="titleGray "><?php the_field('titleGray', 2); ?></p>
                            <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes', 2); ?></p>
                        </figcaption>
                    </figure>

                    <figure>
                        <img class="heightPic" src="<?php the_field('image_18', 2); ?>" alt="Spa" />
                        <figcaption>
                            <p class="titleGreen "><?php the_field('titleGreen', 2); ?></p>
                            <p class="titleGray "><?php the_field('titleGray', 2); ?></p>
                            <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes', 2); ?></p>
                        </figcaption>
                    </figure>

                    <figure>
                        <img class="heightPic" src="<?php the_field('image_23', 2); ?>" alt="Spa" />
                        <figcaption>
                            <p class="titleGreen "><?php the_field('titleGreen', 2); ?></p>
                            <p class="titleGray "><?php the_field('titleGray', 2); ?></p>
                            <p class="subtitleGray "><?php the_field('subtitleGray_new_tastes', 2); ?></p>
                        </figcaption>
                    </figure>



                </div>
            </div>
    <div id="taemScroll" class="bid">
                <ul class="listBid">
                    <li class="bidItem__first">
                        <div class="discriptionSpa">
                            <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon', 2); ?><br>
                                <b><?php the_field('bodyStudio_body_massage_therapy', 2); ?></b>
                            </p>
                            <p class="details"><?php the_field('details_info_servise', 2); ?>
                            </p>
                            <p class="detailsPress"><a target="_blank" href='http://chernenkoanzhela/services/' class="linkServices"><?php the_field('detailsPress', 2); ?></a></p>
                        </div>
                        <div class="picture">
                            <svg class="svgImage">
                                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/1.svg#kill"></use>
                            </svg>
                        </div>
                    </li>
                    <li class="bidItem__second">
                        <div class="discriptionSpa">
                            <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon', 2); ?><br>
                                <b><?php the_field('bodyStudio_aromatherapy_body', 2); ?></b>
                            </p>
                            <p class="details"><?php the_field('details_info_servise', 2); ?>
                            </p>
                            <p class="detailsPress"><a target="_blank" href='http://chernenkoanzhela/services/' class="linkServices"><?php the_field('detailsPress', 2); ?></a></p>
                        </div>
                        <div class="picture">
                            <svg class="svgImage">
                                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/2.svg#kill"></use>
                            </svg>
                        </div>
                    </li>
                    <li class="bidItem__third">
                        <div class="discriptionSpa">
                            <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon', 2); ?><br>
                                <b><?php the_field('bodyStudio_spa_package', 2); ?></b>
                            </p>
                            <p class="details"><?php the_field('details_info_servise', 2); ?>
                            </p>
                            <p class="detailsPress"><a target="_blank" href='http://chernenkoanzhela/services/' class="linkServices"><?php the_field('detailsPress', 2); ?></a></p>
                        </div>
                        <div class="picture">
                            <svg class="svgImage">
                                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/3.svg#kill"></use>
                            </svg>
                        </div>
                    </li>
                    <li class="bidItem__fourth">
                        <div class="discriptionSpa">
                            <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon', 2); ?><br>
                                <b><?php the_field('bodyStudio_manicure_treatment', 2); ?></b>
                            </p>
                            <p class="details"><?php the_field('details_info_servise', 2); ?>
                            </p>
                            <p class="detailsPress"><a target="_blank" href='http://chernenkoanzhela/services/' class="linkServices"><?php the_field('detailsPress', 2); ?></a></p>
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
                        <p class="titleServices wow heartBeat delay-2s"><?php the_field('titleServices_beauty_studio', 2); ?></p>
                        <p class="titleSerStrong wow heartBeat delay-1s"><?php the_field('titleSerStrong_salon_service', 2); ?></p>
                        <p class="titleSerSubtitle wow heartBeat delay-2s"><?php the_field('subtitleGray_new_tastes', 2); ?></p>
                    </div>
                    <div class="services__hexagon">

                        <svg class="svgH">
                            <use xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/5.svg#killo"></use>
                        </svg>
                            <div class="circle ">
                            <div class="circleAnimation focus-in-contract">
                                <p class="circle__title">
                                    <?php the_field('titleServices_beauty_studio', 2); ?>
                                </p>
                                <p class="circle__subtitle">
                                    <?php the_field('bodyStudio_spa_package', 2); ?>
                                </p>
                                <p class="circle__discription">
                                   <?php the_field('circle__discription_circle_subtitle_data', 2); ?>
                                </p>
                                <p class="circle__readMore"><?php the_field('circle__readMore_read_more', 2); ?></p>
                                </div>
                            </div>
                        <div class="circle__cup package ">
                            <svg class="svgSpa">
                                <use xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/6.svg#listSpa"></use>
                            </svg>
                        </div>
                        <div class="circle__flower package rotate-vert-center">
                            <svg class="svgSpa">
                                <use xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/7.svg#listSpa"></use>
                            </svg>
                        </div>
                        <div class="circle__bottle package rotate-vert-center">
                            <svg class="svgSpa">
                                <use xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/8.svg#listSpa"></use>
                            </svg>
                        </div>
                        <div class="circle__shoes package rotate-vert-center">
                            <svg class="svgSpa">
                                <use xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/4.svg#kill"></use>
                            </svg>
                        </div>
                        <div class="circle__east package rotate-vert-center">
                            <svg class="svgSpa">
                                <use xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/9.svg#listSpa"></use>
                            </svg>
                        </div>
                        <div class="circle__stones package rotate-vert-center">
                            <svg class="svgSt">
                                <use xlink:href="<?php echo bloginfo('template_url', 2); ?>/assets/svg/3.svg#kill"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
    <div class="servicesContent">
        <div class="servicesTitle">
            <p class="servicesTitle__subtitle"><?php the_field('bodyStudio_spa_studio_salon', 2); ?></p>
            <p class="servicesTitle__title"><?php the_field('professional_services_list'); ?></p>
            <p class="servicesTitle__motto"><?php the_field('quality__s', 2); ?></p>
        </div>
        <div class="servicesList">
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon', 2); ?><br>
                        <b><?php the_field('body_massage_therapy'); ?></b>
                    </p>
                    <p class="details"><?php the_field('body_massage_therapy_data'); ?>
                    </p>

                </div>
                <div id="svgHoverServices" class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/1.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                    <div class="servicesListHover">
                        <button class="servicesListHover__button">
                        <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                            <?php the_field('details_now'); ?></a>
                        </button>
                        <svg class="svgSpa servicesListHover__svg">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon', 2); ?><br>
                        <b><?php the_field('bodyStudio_body_massage_therapy', 2); ?></b>
                    </p>
                    <p class="details"><?php the_field('body_massage_therapy_data'); ?>
                    </p>

                </div>
                <div class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/2.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                <div class="servicesListHover">
                    <button class="servicesListHover__button">
                    <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                        <?php the_field('details_now'); ?></a>
                    </button>
                    <svg class="svgSpa servicesListHover__svg">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                    </svg>
                </div>
                </div>
            </div>
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon', 2); ?><br>
                     <b><?php the_field('bodyStudio_body_massage_therapy', 2); ?></b>
                    </p>
                    <p class="details"><?php the_field('body_massage_therapy_data'); ?>
                    </p>

                </div>
                <div class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/3.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                    <div class="servicesListHover">
                        <button class="servicesListHover__button">
                        <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                            <?php the_field('details_now'); ?></a>
                        </button>
                        <svg class="svgSpa servicesListHover__svg">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio"><?php the_field('bodyStudio_spa_studio_salon', 2); ?><br>
                    <b><?php the_field('bodyStudio_body_massage_therapy', 2); ?></b>
                     </p>
                     <p class="details"><?php the_field('body_massage_therapy_data'); ?>
                    </p>


                </div>
                <div class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/4.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                    <div class="servicesListHover">
                        <button class="servicesListHover__button">
                        <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                            <?php the_field('details_now'); ?></a>
                        </button>
                        <svg class="svgSpa servicesListHover__svg">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio">
                    <?php the_field('bodyStudio_spa_studio_salon', 2); ?>
                    <br>
                     <b>
                     <?php the_field('bodyStudio_body_massage_therapy', 2); ?>
                     </b>
                     </p>
                     <p class="details">
                     <?php the_field('body_massage_therapy_data'); ?>
                     </p>

                </div>
                <div class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/17.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                    <div class="servicesListHover">
                        <button class="servicesListHover__button">
                        <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                            <?php the_field('details_now'); ?></a>
                        </button>
                        <svg class="svgSpa servicesListHover__svg">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio">
                    <?php the_field('bodyStudio_spa_studio_salon', 2); ?>
                    <br>
                    <b>
                    <?php the_field('bodyStudio_body_massage_therapy', 2); ?>
                     </b>
                      </p>
                        <p class="details">
                        <?php the_field('body_massage_therapy_data'); ?>
                        </p>

                </div>
                <div class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/18.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                    <div class="servicesListHover">
                        <button class="servicesListHover__button">
                        <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                            <?php the_field('details_now'); ?></a>
                        </button>
                        <svg class="svgSpa servicesListHover__svg">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio">
                    <?php the_field('bodyStudio_spa_studio_salon', 2); ?>
                    <br>
                    <b>
                    <?php the_field('bodyStudio_body_massage_therapy', 2); ?>
                    </b>
                      </p>
                       <p class="details">
                        <?php the_field('body_massage_therapy_data'); ?>
                         </p>

                </div>
                <div  class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/19.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                    <div class="servicesListHover">
                        <button class="servicesListHover__button">
                        <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                            <?php the_field('details_now'); ?></a>
                        </button>
                        <svg class="svgSpa servicesListHover__svg">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio">
                    <?php the_field('bodyStudio_spa_studio_salon', 2); ?>
                    <br>
                      <b>
                        <?php the_field('bodyStudio_body_massage_therapy', 2); ?>
                         </b>
                           </p>
                            <p class="details">
                             <?php the_field('body_massage_therapy_data'); ?>
                              </p>

                </div>
                <div class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/20.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                    <div class="servicesListHover">
                        <button class="servicesListHover__button">
                        <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                            <?php the_field('details_now'); ?></a>
                        </button>
                        <svg class="svgSpa servicesListHover__svg">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="servicesList__description">
                <div class="discriptionSpa servicesDescriptionSpa">
                    <p class="bodyStudio">
                    <?php the_field('bodyStudio_spa_studio_salon', 2); ?>
                    <br>
                     <b>
                       <?php the_field('bodyStudio_body_massage_therapy', 2); ?>
                         </b>
                           </p>
                             <p class="details">
                              <?php the_field('body_massage_therapy_data'); ?>
                                </p>

                </div>
                <div class="picture servicesPicture">
                    <svg class="svgImage">
                        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/21.svg#kill"></use>
                    </svg>
                </div>
                <div class="xer">
                    <div class="servicesListHover">
                        <button class="servicesListHover__button">
                        <a class="detailsService" target="_blank" href='http://chernenkoanzhela/services/'>
                            <?php the_field('details_now'); ?></a>
                        </button>
                        <svg class="svgSpa servicesListHover__svg">
                            <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/svg/7.svg#listSpa"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();
?>