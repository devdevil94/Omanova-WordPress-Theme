
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
    <div class="row">
<?php
    if($attractionsQuery->have_posts()){
      while($attractionsQuery->have_posts()){
        $attractionsQuery->the_post();
        $modalTargetId = the_ID().'-modal';
        $columnLayout ='';

        if($attractionsQuery->current_post < 2)
          $columnLayout = 'col s12 m6 l4 xl4';
        elseif($attractionsQuery->current_post == 2)
          $columnLayout = 'col s12 m12 l4 xl4';
        else
          $columnLayout = 'col s12 m6 l6 xl4';
        
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
      <!-- <div class="col s12 m6 l4">
        <div class="card attr-card">
          <div class="attr-overlay hide-on-med-and-down">
            <a class="btn-flat btn-large amber-text text-lighten-5 pink lighten-1 modal-trigger" data-target="hamra-modal">View</a>
          </div>
          <div class="card-image">
            <img class="modal-trigger" data-target="hamra-modal" src="img/al-hamra-3259539_1280.jpg">
            <p class="card-title deep-orange accent-2">
              <a style="cursor: pointer;" class="modal-trigger amber-text text-lighten-5" data-target="hamra-modal">
                Alhamra, Nizwa
              </a>
            </p>
          </div>
        </div>
        <div id="hamra-modal" class="modal">
          <div class="modal-content">
            <h4>Alhamra, Nizwa</h4>
            <img class="responsive-img" src="img/al-hamra-3259539_1280.jpg">
            <p class="left-align" style="padding: 0 20px">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Doloremque, ipsum? Magnam reiciendis unde,
              enim similique eos ipsa earum iste laboriosam saepe omnis
              rerum tenetur harum ducimus illum quisquam sit dolor!
            </p>
          </div>
        </div>
      </div>
      <div class="col s12 m12 l4">
        <div class="card attr-card">
          <div class="attr-overlay hide-on-med-and-down">
            <a class="btn-flat btn-large amber-text text-lighten-5 pink lighten-1 modal-trigger" data-target="saeed-modal">View</a>
          </div>
          <div class="card-image">
            <img class="modal-trigger" data-target="saeed-modal" src="img/oman-3108539_1280.jpg">
            <p class="card-title deep-orange accent-2">
              <a style="cursor: pointer;" class="modal-trigger amber-text text-lighten-5" data-target="saeed-modal">
                Saeed Bin Taimur Mosque
              </a>
            </p>
          </div>
        </div>
        <div id="saeed-modal" class="modal">
          <div class="modal-content">
            <h4>Saeed Bin Taimur Mosque</h4>
            <img class="responsive-img" src="img/oman-3108539_1280.jpg">
            <p class="left-align" style="padding: 0 20px">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Doloremque, ipsum? Magnam reiciendis unde,
              enim similique eos ipsa earum iste laboriosam saepe omnis
              rerum tenetur harum ducimus illum quisquam sit dolor!
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m6 l6">
        <div class="card attr-card">
          <div class="attr-overlay hide-on-med-and-down">
            <a class="btn-flat btn-large amber-text text-lighten-5 pink lighten-1 modal-trigger" data-target="royal-modal">View</a>
          </div>
          <div class="card-image">
            <img class="modal-trigger" data-target="royal-modal" src="img/royal-opera-house-3190332_1280.jpg">
            <p class="card-title deep-orange accent-2">
              <a style="cursor: pointer;" class="modal-trigger amber-text text-lighten-5" data-target="royal-modal">
                Royal Opera House
              </a>
            </p>
          </div>
        </div>
        <div id="royal-modal" class="modal">
          <div class="modal-content">
            <h4>Royal Opera House</h4>
            <img class="responsive-img" src="img/royal-opera-house-3190332_1280.jpg">
            <p class="left-align" style="padding: 0 20px">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Doloremque, ipsum? Magnam reiciendis unde,
              enim similique eos ipsa earum iste laboriosam saepe omnis
              rerum tenetur harum ducimus illum quisquam sit dolor!
            </p>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l6">
        <div class="card attr-card">
          <div class="attr-overlay hide-on-med-and-down">
            <a class="btn-flat btn-large amber-text text-lighten-5 pink lighten-1 modal-trigger" data-target="muscat-modal">View</a>
          </div>
          <div class="card-image">
            <img class="modal-trigger" data-target="muscat-modal" src="img/muscat_center.jpg">
            <p class="card-title amber-text text-lighten-5 deep-orange accent-2">
              <a style="cursor: pointer;" class="modal-trigger amber-text text-lighten-5" data-target="muscat-modal">
                Muscat City Center
              </a>
            </p>
          </div>
        </div>
        <div id="muscat-modal" class="modal">
          <div class="modal-content">
            <h4>Muscat City Center</h4>
            <img class="responsive-img" src="img/muscat_center.jpg">
            <p class="left-align" style="padding: 0 20px">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Doloremque, ipsum? Magnam reiciendis unde,
              enim similique eos ipsa earum iste laboriosam saepe omnis
              rerum tenetur harum ducimus illum quisquam sit dolor!
            </p>
          </div>
        </div>
      </div>
    </div> -->
    <a href="packages.html" class="btn-large waves-effect pink lighten-1">VIEW ATTRACTIONS</a>
  </div>

<?php get_footer(); ?>