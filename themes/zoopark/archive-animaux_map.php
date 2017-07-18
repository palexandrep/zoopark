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
                    
                    if($requete->have_posts()): 
                    while($requete->have_posts()): $requete->the_post(); ?>
	  <?php if($image = get_field('flaticon_map')): ?>
    <option value="" data-icon="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="left circle">
      <?php endif;?><?php the_title();?>
    </option>
      <?php endwhile; endif;
    wp_reset_postdata();?>
    </select>
    <label>Images in select</label>
  </div>

  <div class="mini-map section" id="archive-animaux-map">
    <div class="container">
      <div class="row">
		  <?php 
                    $args = array(
                        'post_type'=> 'zoo_map',
                        'post_status' => 'publish'

                    );
                    $requete = new WP_Query($args);
                    
                    if($requete->have_posts()): $requete->the_post(); ?>
		<?php if($image = get_field('carte')): ?>
      <div >
        <div id="self-position"></div>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </div>
      <?php endif;?>
		<?php endif;?>
      </div>
    </div>
  </div>

 <?php get_footer();?>


