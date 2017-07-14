<?php get_header(); ?>
<!-- FRONT PAGE -->

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="slogan container">

        <div class="row center">
          <h2 class="header col s12 light"><?php the_field('titre_banner_1'); ?></h2>
        </div>

        <div class="row center">
          <a href="<?php echo get_post_type_archive_link( 'billeterie' ); ?>" id="download-button" class="btn-large waves-effect waves-light brown lighten-1"><?php the_field('titre_du_bouton'); ?></a>
          
        </div>

      </div>
    </div>
      <?php if($image = get_field('banner_1')): ?><div class="parallax"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div><?php endif;?>
  </div>

  <!-- animaux promote-->

  <div class="container">
    <div class="section">
      <div class="row">
      <?php 
                    $args = array(
                        'post_type'=> 'animaux',
                        'post_status' => 'publish',
                        'posts_per_page' => 3
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): 
                    while($requete->have_posts()): $requete->the_post(); ?>
                    
                      <div class="col s12 m4">
                        <div class="icon-block">
                          
                          <h2 class="center brown-text"><a href="<?php the_permalink();?>"><i class="<?php the_field('flaticon');?>"></i></a></h2>
                          <h3 class="center"><?php the_title(); ?><em>- <?php the_field('lieu_geographique');?></em></h3>

                          <p class="light"><?php the_field('resume');?></p>
                         
                        </div>
                      </div>

                    <?php endwhile; endif;
                    wp_reset_postdata();
                    ?>
      <!--   Icon Section   -->
      
      </div>

    </div>
  </div>

  <!-- Call-->
  <div class="call orange lighten-1">
    <div class="container">
      <div class="section">
        <div class="row">
          <div class="col s12 center">
          
                    <?php 
                    $args = array(
                        'category_name' => 'annonces',
                        'post_type'=> 'billeterie',
                        'post_status' => 'publish',

                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): $requete->the_post(); ?>
              <?php if(get_field('annonce')): ?><p><?php the_field('annonce');?></p><?php endif; ?>
              <?php endif; ?>

              <?php 
                    $args = array(
                        'category_name' => 'pass',
                        'post_type'=> 'billeterie',
                        'post_status' => 'publish',
                        'posts_per_page' => 3
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): 
                    while($requete->have_posts()): $requete->the_post(); ?>
              
              <?php if(get_field('pass')): ?><a href="<?php the_permalink();?>" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong> <?php the_field('pass');?> </strong> <span><?php the_field('prix_du_pass');?>€*</span></a><?php endif; ?>
              <?php endwhile; endif; wp_reset_postdata();?>

              

              <?php if(get_field('conditions')): ?><p>*<small><?php the_field('conditions');?></small></p><?php endif;  ?>
              
              
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 light"><?php the_field('titre_banner_2'); ?></h3>
        </div>
      </div>
    </div>
    <?php if($image = get_field('banner_2')): ?><div class="parallax"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div><?php endif;?>
  </div>

  <div class="opening container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">
          <?php 
                    $args = array(
                        'name'=> 'horaires',
                        'post_status' => 'publish'
                        
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): 
                    while($requete->have_posts()): $requete->the_post(); ?>
          <h3 class="orange-text"><?php the_title();?></h3>
          <h4><?php the_field('sous-titre');?></h4>
          <ul class="tabs">
            <li class="tab col s3"><a href="#spring">Printemps</a> 3 mars au 20 juin</li>
            <li class="tab col s3"><a class="active" href="#summer">Été</a> 21 juin au 15 septembre</li>
            <li class="tab col s3"><a href="#winter">Hiver</a> 16 septembre au 4 janvier</li>
          </ul>
        </div>
        <div id="spring" class="col s12"><p><?php the_field('printemps');?></p></div>
        <div id="summer" class="col s12"><p><?php the_field('ete');?></p></div>
        <div id="winter" class="col s12"><p><?php the_field('hiver');?></p></div>
        <?php endwhile; endif;
                    wp_reset_postdata();
                    ?>
      </div>
    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h3 class="header col s12 light"><?php the_field('titre_banner_3'); ?></h3>
        </div>
      </div>
    </div>
    <?php if($image = get_field('banner_3')): ?><div class="parallax"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div><?php endif;?>
  </div>

<?php  get_footer(); ?>