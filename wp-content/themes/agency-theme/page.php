
<?php get_header(); ?>


<div id="about" class="container">
    <div class="row">
<?php
        while(have_posts()){
            the_post();
?>
            <h4><?php the_title() ?></h4>
            <div class="col xl6 l6">
                <?php the_content() ?>
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