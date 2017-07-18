<?php get_header();?>
<!-- Single Pass-->
	<div class="container">
        <div class="row center">

        
                    <?php 
                    $args = array(
                        'category_name' => 'annonces',
                        'post_type'=> 'billeterie',
                        'post_status' => 'publish',

                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): $requete->the_post(); ?>
              <?php if(get_field('annonce')): ?><p><?php the_field('annonce');?></p><?php endif; ?>
              <?php if(get_field('conditions')): ?><p>*<small><?php the_field('conditions');?></small></p><?php endif;?>
              <?php endif; ?>

              <?php 
                    $args = array(
                        'category_name' => 'pass',
                        'post_type'=> 'billeterie',
                        'post_status' => 'publish',
                        'posts_per_page' => 2
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): 
                    while($requete->have_posts()): $requete->the_post(); ?>
              
              <?php if(get_field('pass')): ?><a href="<?php the_permalink();?>" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong> <?php the_field('pass');?> </strong> <span><?php the_field('prix_du_pass');?>€*</span></a><?php endif; ?>
              
              <?php endwhile; endif; wp_reset_postdata();?>

              </div>

              
		</div>
<?php get_footer();?>