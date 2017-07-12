       <?php get_header();?>
       <!-- Page mapzoo -->
  <div class="input-field col s12">
    <select class="icons">
      <option value="" disabled selected>Choose your option</option>
      <?php if(have_posts()): the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
                <?php endif; ?>
      <option value="" data-icon="content/images/animals-icons/vg000.png" class="left circle">Lions</option>
      <option value="" data-icon="content/images/animals-icons/vg001.png" class="left circle">example 2</option>
      <option value="" data-icon="content/images/animals-icons/vg002.png" class="left circle">example 3</option>
    </select>
    <label>Images in select</label>
  </div>

  <div class="mini-map section">
    <div class="container">
      <div class="row">
        <div class="col s12"><?php if($image = get_field('map')): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif;?></div>
      </div>
    </div>
  </div>
          <?php get_footer();?>


