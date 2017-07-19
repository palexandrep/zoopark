<?php get_header();?>
<!-- Billeterie-->
	<div class="container">
        <h3 class="orange-text">Billeterie</h3>
        <!--<form action="">-->
          <?php
          $open = false;
                    $args = array(

                        'post_type'=> 'billeterie',
                        'post_status' => 'publish',
                        'category_name' => 'billets'
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): $open = true;?>
                    
                     
                     <div class="row">
                     
                     <?php while($requete->have_posts()): $requete->the_post(); ?>
                        

                        <div class="col 6">
                           
                            <a href="<?php the_permalink();?>" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">
                                <?php the_title();?><strong> <?php the_field('billet');?> </strong> <span><?php the_field('prix_billet');?>€*</span>
                            </a>  
                        </div>
                        <?php endwhile; endif;?>

                       
                        
                        <!--<div class="input-field col s4">
                                <input type="number" class="bnPlace">
                            </div>-->
                    </div> <!-- .row-->
                     <?php
                    $args = array(

                        'post_type'=> 'billeterie',
                        'post_status' => 'publish',
                        'category_name' => 'pass'
                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): $open = true;?>
                    <div class="row">
                    <h3>Nos Pass</h3>
                    <?php while($requete->have_posts()): $requete->the_post(); ?>
                     <div class="col 6">
                            
                            <a href="<?php the_permalink();?>" id="download-button" class="call-btn btn-large waves-effect waves-light brown lighten-1">
                                <?php the_title();?><strong> <?php the_field('pass');?> </strong> <span><?php the_field('prix_du_pass');?>€*</span>
                            </a> 
                        </div>
                        <?php endwhile; endif;?>
                    </div>
                    
              <?php wp_reset_postdata(); ?>
              <?php if($open == false) :?>
		<p>La boutique en ligne n'est pas disponible pour le moment, veuillez réessayer plus tard.</p>
        <?php endif;?>
		<?php ?>
        <!--</form>-->
    </div>
<?php get_footer();?>