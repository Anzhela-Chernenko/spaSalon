<?php
/*
Template Name: Contact
*/
?>

<?php
get_header();
?>

<main class="contactMain">
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
    <div class="contactContent">
        <div class="contactContent__data">
            <div class="contactContent__data__link">
                <div class="itemContact"><i class="fa fa-map-marker faContact"></i></div>
                   <div class="itemContact">
                    <p class="contactTitle"><b><?php the_field('office_address'); ?></b></p>
                    <p class="contactDataSubtitle"><?php the_field('support_information'); ?></p>
                </div>
                <div class="itemContact">
                    <p class="contactDataDescription"><?php the_field('po_box_16122_collins_street_west'); ?></p>
                    <p class="contactDataDescription"><?php the_field('121_king_street_melbourne'); ?></p>
                    <p class="contactDataDescription"><?php the_field('victoria_8007_australia'); ?></p>
                </div>
            </div>
            <div class="contactContent__data__link">
                <div class="itemContact"><i class="fa fa-phone faContact"></i></div>
                <div class="itemContact">
                    <p class="contactTitle"><b><?php the_field('support_phone'); ?></b></p>
                    <p class="contactDataSubtitle"><?php the_field('support_information'); ?></p>
                </div>
                <div class="itemContact">
                    <p class="contactDataDescription"><?php the_field('964_403_24_29_-_support'); ?></p>
                    <p class="contactDataDescription"><?php the_field('387_845_89_74'); ?></p>
                    <p class="contactDataDescription"><?php the_field('563_450_68_93_-_information'); ?></p>
                </div>
            </div>
            <div class="contactContent__data__link">
                <div class="itemContact"><i class="fa fa-inbox faContact"></i></div>
                <div class="itemContact">
                    <p class="contactTitle"><b><?php the_field('email_address'); ?></b></p>
                    <p class="contactDataSubtitle"><?php the_field('support_information'); ?></p>
                </div>
                <div class="itemContact">
                    <p class="contactDataDescription"><?php the_field('supportsitecom_-_support'); ?></p>
                    <p class="contactDataDescription"><?php the_field('infositecom_-_information'); ?></p>
                </div>
            </div>
        </div>
        <div class="contactContent__form">
            <div class="contactContent__text">
                <?php echo do_shortcode('[contact-form-7 id="295" title="Contacts"]'); ?>
            </div>
        </div>

    </div>

</main>
<section class="mapContact">
<div class="contactMain__map">
    <iframe class="mapConnection" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112606.49618760693!2d-80.72759494118556!3d28.117462705518736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88de0e2c4771994d%3A0x8bcdb254a90cd2a8!2z0JzQtdC70LHQvtGA0L0sINCk0LvQvtGA0LjQtNCwLCDQodCo0JA!5e0!3m2!1sru!2sua!4v1578581493948!5m2!1sru!2sua" width="65%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</section>

<?php
get_footer();
?>