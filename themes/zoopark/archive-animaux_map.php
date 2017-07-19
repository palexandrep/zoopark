       <?php get_header();?>
       <!-- archive Map -->
  <div class="input-field col s12">
    <select class="icons">
      <option value="" disabled selected>Choose your option</option>
      
	  <?php 
                    $args = array(
                        'post_type'=> 'animaux_map',
                        'post_status' => 'publish',
                    );
                    $requete = new WP_Query($args);
                    
      if($requete->have_posts()): while($requete->have_posts()): $requete->the_post(); ?>
	  <?php if($image = get_field('flaticon_map')): ?>
    
   
    <option  value="" data-icon="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="left circle option_animal_map">
      <?php endif;?><?php the_title();?>
    </option>
      <?php endwhile; endif; wp_reset_postdata();?>
    </select>
    <label>Images in select</label>
  </div>

  <div class="mini-map section" id="archive-animaux-map">
    <div class="container">
      <div class="row">
		  
      <div class="map_container">

      <?php 
                    $args = array(
                        'post_type'=> 'zoo_map',
                        'post_status' => 'publish'

                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): $requete->the_post(); ?>
		<?php if($image = get_field('carte')): ?>
        <div id="self-position"></div>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php endif;?>
		<?php endif;?>
    <?php 
                    $args = array(
                        'post_type'=> 'animaux_map',
                        'post_status' => 'publish'

                    );
                    $requete = new WP_Query($args);

       if(get_field('coordo_lat') AND get_field('coordo_long')) : while($requete->have_posts()): $requete->the_post()?>
            <div id="<?php echo $id;?>" data-lat="<?php get_field('coordo_lat');?>" data-long="<?php get_field('coordo_long');?>"></div>
            <?php $id = get_the_id();?>
        <?php endwhile; endif; wp_reset_postdata();?>
      </div>
      
      </div>
    </div>
    <?php echo $id;?>
  </div>

 <?php get_footer();?>


