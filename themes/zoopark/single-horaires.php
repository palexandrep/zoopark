<?php get_header();?>
<!--Horaires-->
	<div class="container">

		<?php 
                    $args = array(
                        'post_type'=> 'horaires',
                        'post_status' => 'publish'
                        
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): 
                    while($requete->have_posts()): $requete->the_post(); ?>
          <h3 class="orange-text"><?php the_title();?></h3>
          <h4><?php the_field('sous-titre');?></h4>
		<h5>Printemps</h5>
        <div id="spring" class="col s12"><p><?php the_field('printemps');?></p></div>
		<h5>Été</h5>
        <div id="summer" class="col s12"><p><?php the_field('ete');?></p></div>
		<h5>Hiver</h5>
        <div id="winter" class="col s12"><p><?php the_field('hiver');?></p></div>
        <?php endwhile;
        wp_reset_postdata();
		else: ?>
		<p>Il n'y a pas d'article pour le moment</p>
		<?php endif;?>
		</div>
<?php get_footer();?>