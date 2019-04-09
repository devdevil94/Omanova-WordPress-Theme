

<footer class="page-footer deep-orange accent-2">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <div class="row">
          <form class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <input id="first_name" type="text" class="validate">
                <label for="first_name">Name</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <input id="email" type="email" class="validate">
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <textarea id="textarea" class="materialize-textarea" data-length="500"></textarea>
                <label for="textarea">Message</label>
              </div>
            </div>
            <button class="btn-flat amber-text text-lighten-5 waves-effect pink lighten-1 waves-light" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>
      </div>
      <div class="col l4 offset-l2 s12">
        <h6 class=" amber-text text-lighten-5"><strong>Information</strong></h6>
        <div class="divider"></div>
        <ul>
          <li></li><a class="amber-text text-lighten-5" href="<?php echo site_url('contact-information') ?>">Contact Us</a></li>
          <li><a class="amber-text text-lighten-5" href="#!">Privacy Policy</a></li>
          <li><a class="amber-text text-lighten-5" href="#!">Terms and Conditions</a></li>
        </ul>
        <h6 class=" amber-text text-lighten-5"><strong>Follow Us</strong></h6>
        <div class="divider"></div>
        <div class="container social-media-icons">
          <div class="row center">
            <a class="col amber-text text-lighten-5 s4 fab fa-facebook fa-2x" 
            href="<?php echo 'www.facebook.com/'.get_field('facebook') ?>"></a>
            <a class="col amber-text text-lighten-5 s4 fab fa-twitter fa-2x" 
            href="<?php echo 'www.twitter.com/'.get_field('twitter') ?>"></a>
            <a class="col amber-text text-lighten-5 s4 fab fa-instagram fa-2x" 
            href="<?php echo 'www.instagram.com/'.get_field('instagram') ?>"></a> 
          </div>             
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      All Rights Reserved © Omanova 2018
      <span class="right"><a class="amber-text text-lighten-5" href="credits.html">Credits</a></span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>