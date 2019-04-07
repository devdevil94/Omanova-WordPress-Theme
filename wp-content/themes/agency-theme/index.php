
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
        $columnLayout ='col s12 xl4';

        if($attractionsQuery->current_post < 2)
          $columnLayout .= 'm6 l4';
        elseif($attractionsQuery->current_post == 2)
          $columnLayout .= 'm12 l4';
        else
          $columnLayout .= 'm6 l6';
        
        if($attractionsQuery->current_post == 0 || $attractionsQuery->current_post == 3) echo '<div class="row">';
?>
          <div class="<?php echo $columnLayout ?>">
            <div class="card attr-card">
              <div class="attr-overlay hide-on-med-and-down">
                <a class="btn-flat btn-large amber-text text-lighten-5 pink lighten-1 modal-trigger"
                data-target="<?php echo $modalTargetId ?>">View</a>
              </div>
              <div class="card-image">
                <img class="modal-trigger" <?php echo 'data-target="$modalTargetId"' ?>
                src="<?php the_post_thumbnail(); ?>">
                <p class="card-title deep-orange accent-2">
                  <a style="cursor: pointer;" class="modal-trigger amber-text text-lighten-5"
                  data-target="<?php echo $modalTargetId ?>">
                    <?php the_title(); ?>
                  </a>
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
    <a href="packages.html" class="btn-large waves-effect pink lighten-1">VIEW ATTRACTIONS</a>
  </div>

<?php get_footer(); ?>