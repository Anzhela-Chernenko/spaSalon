<?php
/*
Template Name: Footer
*/
?>
<footer class="footer">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12612.141576173755!2d-122.40980428628734!3d37.789210287725055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858088ec195fa7%3A0xf95aacf1b23e5ce6!2zNTUgR3JhbnQgQXZlIGxldmVsIDQsIFNhbiBGcmFuY2lzY28sIENBIDk0MTA4LCDQodC_0L7Qu9GD0YfQtdC90ZYg0KjRgtCw0YLQuCDQkNC80LXRgNC40LrQuA!5e0!3m2!1suk!2sua!4v1577967556146!5m2!1suk!2sua" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="сontactВetails">
            <div class="сontactВetails__content">
    <i class="fa fa-phone сontactВetailsAws commonContent"><p class="awsData"><?php the_field('awsData_phone', 2); ?></p> </i>
    <i class="fa fa-envelope-o сontactВetailsAws commonContent"><p class="awsData"><?php the_field('awsData_email', 2); ?></p> </i>
    <i class="fa fa-skype сontactВetailsAws commonContent"><p class="awsData"><?php the_field('awsData_skype', 2); ?></p> </i>
            </div>
        </div>
        <div class="footerContent">
            <div class="footing">
                <div class="footing__content">
                    <div class="footing__content__logo">

                        <div class="logo logoFooter">
                            <div class="logoStudio footerStyleLogo">
                                <?php the_custom_logo(); ?>
                            </div>
                            <p class="mottoStudio"><b><?php the_field('mottoStudio', 2); ?></b></p>
                            <p class="mottoStudio logoSubscribe"><?php the_field('logoSubscribe', 2); ?></p>
                        </div>
                        <p class="questions">Have any questions?</p>
                        <p class="questions">+61 383 766 284 noreply@envato.com</p>
                    </div>
                    <div class="footing__content__fastMenu">

                        <ul  class="list fastList">
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#aboutUsScroll">
                                    <p class="fastMenuList"><?php the_field('fastMenuList_fast_menu', 2); ?></p>
                                </a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" target="_blank" href="http://chernenkoanzhela/about/"><?php the_field('overlay_content_about', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle"  target="_blank" href="http://chernenkoanzhela/services/"><?php the_field('overlay_content_services', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" target="_blank" href="http://chernenkoanzhela/team/"><?php the_field('overlay_content_team', 2); ?></a>
                            </li>

                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" target="_blank" href="http://chernenkoanzhela/contact/"><?php the_field('overlay_content_contact', 2); ?></a>
                            </li>

                        </ul>
                    </div>
                    <div class="footing__content__services">
                        <ul  class="list fastList">
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#">
                                    <p class="fastMenuList"><?php the_field('fastMenuList_services', 2); ?></p>
                                </a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav"><?php the_field('fastMenuList_body_massage_therapy', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle"  href="#linkNav"><?php the_field('fastMenuList_hair_cutting', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav"><?php the_field('fastMenuList_aromatherapy_body_treatment', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav"><?php the_field('fastMenuList_manicure_treatment', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav"><?php the_field('fastMenuList_hot_stones_massage', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav"><?php the_field('fastMenuList_skin_care', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav"><?php the_field('fastMenuList_spa_package', 2); ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footing__content__mobile">
                        <ul  class="list fastList">
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav">
                                    <p class="fastMenuList"><?php the_field('fastMenuList_mobile_app', 2); ?></p>
                                </a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav">
                                    <div class="googlePlay">
                                        <div class="googleContent">
                                            <img class="googleImg" alt="Spa" src="<?php the_field('image_46', 2); ?>">
                                        </div>
                                        <div class="googleApp">
                                            <p class="googleApp__subtitle">ANDROID APP ON</p>
                                            <p class="googleApp__title">Google play</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle"  href="#linkNav">
                                    <div class="googlePlay store">
                                        <div class="googleContent storeCont">
                                            <i class="fa fa-tablet storeImg"></i>
                                        </div>
                                        <div class="googleApp storeApp">
                                            <p class="googleApp__subtitle">Find us on the</p>
                                            <p class="googleApp__title"><b>App Store</b></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav"><?php the_field('your_phone_beauty_salon', 2); ?></a>
                            </li>
                            <li class="nav__list fLs">
                                <a class="scroll-to fastListStyle" href="#linkNav"><?php the_field('app_download!', 2); ?></a>
                            </li>
                            </ul>
                    </div>
                    <div class="footing__content__hash">
                        <p class="hashText">.<b>fresh</b>skin</p>
                    </div>
                </div>
                <div class="footing__copyright">
                    <div class="copyright">
                        <p class="copyright__copyright">
                            Copyright@2019 All right reserved.
                        </p>
                        <p class="copyright__copyright">
                            Made by <b class='anzhela'>Anzhela</b>
                        </p>
                        <div class="copyright__social">
                            <ul class="socialList">
                                <li class="social">
                                   <a class="socialLinks" target="_blank" href="https://web.skype.com/"> <i class="fa fa-skype socialFa"></i></a>
                                </li>
                                <li class="social">
                                    <a class="socialLinks" target="_blank" href="https://uk-ua.facebook.com/">  <i class="fa fa-facebook-square socialFa"></i></a>
                                </li>
                                <li class="social">
                                    <a class="socialLinks" target="_blank" href="https://www.google.com.ua/?hl=ru">  <i class="fa fa-google-plus socialFa"></i></a>
                                </li>
                                <li class="social">
                                    <a class="socialLinks" target="_blank" href="https://www.google.com.ua/?hl=ru">  <i class="fa fa-twitter socialFa"></i></a>
                                </li>
                                <li class="social">
                                    <a class="socialLinks" target="_blank" href="https://www.youtube.com/?hl=uk&gl=UA">  <i class="fa fa-youtube-play socialFa"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </footer>



<?php
wp_footer();
?>
</body>
</html>