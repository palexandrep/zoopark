<?php get_header();?>
<!-- Billeterie-->
	<div class="container">

          <?php 
                    $args = array(
                        'post_type'=> 'page',
                        'post_status' => 'publish',
                        'p' => billeterie
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): 
                    $requete->the_post(); ?>
                    <h3><?php the_title();?></h3>
              <?php if(get_field('annonce')): ?><p><?php the_field('annonce');?></p><?php endif; ?>
              <?php if(get_field('pass_1')): ?><a href="#" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong> <?php the_field('pass_1');?> </strong><span><?php the_field('prix_pass_1');?>€*</span></a><?php endif; ?>
              <?php if(get_field('pass_2')): ?><a href="#" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">ZooPass<strong> <?php the_field('pass_2');?> </strong> <span><?php the_field('prix_pass_2');?>€*</span></a><?php endif; ?>
              <?php if(get_field('conditions')): ?><p>*<small><?php the_field('conditions');?></small></p><?php endif; ?>
              <?php wp_reset_postdata();
		else: ?>
		<p>Il n'y a pas d'article pour le moment</p>
		<?php endif;?>
		</div>
<?php get_footer();?>