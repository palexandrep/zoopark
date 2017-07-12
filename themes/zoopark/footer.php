    <footer class="page-footer brown lighten-1">
    <div class="container">
      <div class="row">
        <div class="col l3 m6 s12">
        
          <h3 class="white-text">Spectacles</h3>
          
          <ul class="footer-links">
          <?php 
                    $args = array(
                        'post_type'=> 'spectacles',
                        'post_status' => 'publish',
                        'posts_per_page' => 4
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): 
                    while($requete->have_posts()): $requete->the_post(); ?>
            <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
            <?php endwhile; endif;?>
          </ul>
          
        </div>
        <div class="col l3 m6 s12">
          <h3 class="white-text">Activités</h3>
          <ul class="footer-links">
            <li><a href="#!">Visites des jardins</a></li>
            <li><a href="#!">Le parcours dans les arbres</a></li>
            <li><a href="#!">Balades sous les serres</a></li>
            <li><a href="#!">Trekking Adventure</a></li>
          </ul>
        </div>
        <div class="gmap col l6 m12 s12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2539.610822179908!2d4.4269313158075345!3d50.46697139405523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c22f2139954003%3A0xe96185b4bd67c4d8!2sRue+Joseph+Stranard%2C+6041+Charleroi!5e0!3m2!1sfr!2sbe!4v1499847625545" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="section white">
      <div class="access-map container">
        <div class="row">
          <div class="col s12 center">
            <h3 class="brown-text">Adresse</h3>
            <p>
              <h4><em>Gosselies</em></h4>
              <span itemprop="streetAddress">Rue Stranard -</span>
              <span itemprop="addressLocality">6041 Gosselies -</span>
              (<span itemprop="addressRegion">Belgique</span>- BE)
            </p
            <p>E411, sortie 25 direction Bouillon sur N89, sortie km 4,7</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section version grey darken-3">
      <div class="row">
        <div class="col s6 center">
          <a class="waves-effect text waves-orange btn-flat">Français</a>
        </div>
        <div class="col s6 center">
          <a class="waves-effect waves-orange btn-flat">English</a>
        </div>
      </div>
    </div>
    <div class="footer-copyright center grey darken-4">
      <div class="container">
        ZooPark <a class="brown-text text-lighten-3" href="#">2016</a>
      </div>
    </div>
  </footer>
    <?php wp_footer(); ?>
      <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/materialize.js"></script>
  <script src="<?php bloginfo('template_url');?>/js/init.js"></script>
</body>
</html>