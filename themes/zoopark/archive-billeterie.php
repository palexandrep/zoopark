<?php get_header();?>
<!-- Billeterie-->
	<div class="container">
        <h3 class="orange-text">Billeterie</h3>
        <form action="">
          <?php
                    $args = array(

                        'post_type'=> 'billeterie',
                        'post_status' => 'publish'  
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): 
                     while($requete->have_posts()): $requete->the_post(); ?>
                     
                     <div class="row">
                        <h4 class="col 6"><?php the_title();?></h4>
                        <div class="col 6">
                            <?php if(get_field('billet')): ?>
                            <a href="<?php the_permalink();?>" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">
                                <?php the_title();?><strong> <?php the_field('billet');?> </strong> <span><?php the_field('prix_billet');?>€*</span>
                            </a><?php endif; ?>     
                        </div>
                        <div class="col 6">
                            <?php if(get_field('pass')): ?>
                            <a href="<?php the_permalink();?>" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">
                                <?php the_title();?><strong> <?php the_field('pass');?> </strong> <span><?php the_field('prix_du_pass');?>€*</span>
                            </a><?php endif; ?>
                        </div>
                        <!--<div class="input-field col s4">
                                <input type="number" class="bnPlace">
                            </div>-->
                    </div>
                    
              <?php wp_reset_postdata(); endwhile; else: ?>
		<p>Il n'y a pas d'article pour le moment</p>
		<?php endif;?>
        </form>
    </div>
<?php get_footer();?>