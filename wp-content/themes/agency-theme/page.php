
<?php get_header(); ?>


<div id="about" class="container">
    <div class="row">
<?php
        while(have_posts()){
            the_post();
?>
            <h4><?php the_title() ?></h4>
            <div class="col xl6 l6">
<?php
            if(is_page('contact-information')){
?>
            <div class="row">
                <p><i class="material-icons pink-text text-lighten-1">location_on</i>Address:</p>
                <div style="padding-left: 25px">
                    <?php echo get_field('building_name') ?><br>
                    <?php echo get_field('street') ?><br>
                    <?php echo get_field('city_town').' '.get_field('zip_code'); ?><br>
                    <?php echo get_field('state_province') ?> <br>
                    <?php echo get_field('country') ?>
                </div>
            </div>
            <div class="row">
                <p>
                    <i class="material-icons pink-text text-lighten-1">local_phone</i>
                    Phone: <?php echo '+'.get_field('phone_no') ?>
                </p>
            </div>
            <div class="row">
                <p>
                    <i class="material-icons pink-text text-lighten-1">email</i>
                    Email: <?php echo get_field('email') ?>
                </p>
            </div>
<?php
            }else
                the_content();
?>
            </div>
            <div id="images" class="col xl6 l6">
                <div class="row">
                    <div class="col xl6 l6 m6 s12">
                        <img class="responsive-img" src="<?php echo get_theme_file_uri('img/camel-468096_1280.jpg') ?>">
                    </div>
                    <div class="col xl6 l6 m6 s12">
                        <img class="responsive-img" src="<?php echo get_theme_file_uri('img/muscat_center.jpg') ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col xl6 l6 m6 s12">
                        <img class="responsive-img" src="<?php echo get_theme_file_uri('img/al-hamra-3259539_1280.jpg') ?>">
                    </div>
                    <div class="col xl6 l6 m6 s12">
                        <img class="responsive-img" src="<?php echo get_theme_file_uri('img/oman-243245_1280.jpg') ?>">
                    </div>
                </div>
            </div>  
<?php
        }
?>
    </div>

</div>


<?php get_footer(); ?>