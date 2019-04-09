
<?php get_header(); ?>

<div id="about-landing" class="col s6 center-align amber lighten-5">
    <h4>Welcome to Omanova Travel Agency</h4>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Doloremque, ipsum? Magnam reiciendis unde,
      enim similique eos ipsa earum iste laboriosam saepe omnis
      rerum tenetur harum ducimus illum quisquam sit dolor!
    </p>
    <a href="<?php site_url('/about') ?>" class="btn waves-effect pink lighten-1">View More</a>
</div>

<div id="attractions-landing" class="center-align">
    <h4 class="dark-text center">Popular Attractions</h4>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Doloremque, ipsum? Magnam reiciendis unde,
      enim similique eos ipsa earum iste laboriosam saepe omnis
      rerum tenetur harum ducimus illum quisquam sit dolor!
    </p>
    
<?php
    $attractionsQuery = new WP_Query(array(
      'post_type' => 'attraction',
      'posts_per_page' => 5
    ));
?>
<?php
    if($attractionsQuery->have_posts()){
      while($attractionsQuery->have_posts()){
        $attractionsQuery->the_post();
        $modalTargetId = get_the_ID().'-modal';
        

        $columnLayout ='col s12 ';

        if($attractionsQuery->current_post < 2)
          $columnLayout .= 'm6 l4 xl4';
        elseif($attractionsQuery->current_post == 2)
          $columnLayout .= 'm12 l4 xl4';
        elseif($attractionsQuery->current_post > 2)
          $columnLayout .= 'm6 l6 xl6';
        
        if($attractionsQuery->current_post == 0 || $attractionsQuery->current_post == 3)
          echo '<div class="row">';
?>
          <div class="<?php echo $columnLayout ?>">
            <div class="card attr-card">
              <div class="attr-overlay hide-on-med-and-down">
                <a class="btn-flat btn-large amber-text text-lighten-5 pink lighten-1 modal-trigger"
                data-target="<?php echo $modalTargetId ?>">View</a>
              </div>
              <div class="card-image">
                <img class="modal-trigger responsive-img" data-target="$modalTargetId"
                src="<?php the_post_thumbnail(); ?>">
                <p class="card-title deep-orange accent-2">
                  <a style="cursor: pointer;" class="modal-trigger amber-text text-lighten-5"
                  data-target="<?php echo $modalTargetId ?>"><?php the_title(); ?></a>
                </p>
            </div>
          </div>
          <div id="<?php echo $modalTargetId ?>" class="modal">
            <div class="modal-content">
              <h4><?php the_title(); ?></h4>
              <img class="responsive-img" src="<?php the_post_thumbnail(); ?>">
              <p class="left-align" style="padding: 0 20px"><?php the_content(); ?></p>
            </div>
          </div>
        </div>
<?php
        if($attractionsQuery->current_post == 2 || $attractionsQuery->current_post == 4) echo '</div>';

      }
    }
?>
  <?php echo get_post_type_archive_link('attraction'); ?>
    <a href="<?php echo get_post_type_archive_link('attraction'); ?>" class="btn-large waves-effect pink lighten-1">VIEW ATTRACTIONS</a>
  </div>

  <div class="divider"></div>

  <div id="packages-landing" class="center-align">
    <h4>Our Packages</h4>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit.
      Doloremque, ipsum? Magnam reiciendis unde,
      enim similique eos ipsa earum iste laboriosam saepe omnis
      rerum tenetur harum ducimus illum quisquam sit dolor!
    </p>
<?php
    $packagesQuery = new WP_Query(array(
      'post_type' => 'package',
      'posts_per_page' => 5
    ));

    echo '<div class="row">';

    if($packagesQuery->have_posts()){
      while($packagesQuery->have_posts()){
        $packagesQuery->the_post();
        $index = $packagesQuery->current_post;

        $modalTargetId = get_the_ID().'-modal';

        if (has_post_thumbnail())
          $thumbUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name')[0];

        if($index == 0) echo '<div class="col xl6 l6 m12 s12">';
        if($index == 1 || $index == 3) echo '<div class="col xl3 l3 m6 s12">';
?>
            <div class="card hoverable package-card modal-trigger" data-target="<?php echo $modalTargetId ?>">
              <div class="card-image waves-effect">
                <img class="responsive-img" src="<?php echo $thumbUrl ?>">
                <span class="badge red white-text deep-orange accent-2">$500</span>
                <span class="card-title cyan-text text-lighten-1 left-align">
                  <?php the_title(); ?><br>
                  5 Days/4 Night
                </span>           
              </div>
            </div>
            <div id="<?php echo $modalTargetId ?>" class="modal modal-fixed-footer">
              <div class="modal-content" style="padding: 0 20px">
                <h4><?php the_title() ?></h4>
                <img class="responsive-img" src="<?php echo $thumbUrl ?>">
                <div class="left-align"><?php the_content() ?></div>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect cyan lighten-1 btn-flat">Book</a>
              </div>
            </div>

<?php     
        if($index == 0 || $index == 2 || $index == 4) echo '</div>';
      }
    }
?>
    </div>
    <a href="<?php echo get_post_type_archive_link('package'); ?>"
    class="btn-large waves-effect pink lighten-1">VIEW PACKAGES</a>
  </div>
  
  <div id="testimonials-landing" class="amber lighten-5">
    <h4 class="dark-text center">Testimonials</h4>
    <div class="container">
      <div class="row">
<?php
        $testimonialsQuery = new WP_Query(array(
          'post_type' => 'testimonial',
          'posts_per_page' => 3
        ));

        if($testimonialsQuery->have_posts()){
          while($testimonialsQuery->have_posts()){
            $testimonialsQuery->the_post();
            
            if (has_post_thumbnail())
              $thumbUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail_name')[0];
?>
            <div class="col xl4 l4 m12 s12">
              <div class="card">
                <div class="overlay"></div>
                <div class="card-content dark-text">
                  <p class="quote"><?php echo '"'.get_the_content().'"'; ?></p>
                  <div class="testimonial-image center">
                    <img width="120" height="120" src="<?php echo $thumbUrl ?>" alt="someone">
                  </div>
                  <p class="author center-align"><?php echo get_field('testimonial_author'); ?></p>
                </div>
              </div>
            </div>
<?php
          }
        }
?>
      </div>
    </div>
  </div>


<?php get_footer(); ?>