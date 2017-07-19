       <?php get_header();?>
       <!-- archive animaux -->
	   <div >

		<?php if(have_posts): 
		while(have_posts()): the_post();?>
		
		<article class="article">

			<div class="container">
				
				<h3 ><a href="<?php the_permalink();?>" class="orange-text"><?php the_title();?></a></h3>
				<?php if(get_field('resume')): ?>
				<div class="row">
					<div class="col 6">
					
					
						<h4><?php the_field('resume');?></h4>
						<?php the_excerpt();?>
					
					</div>
				</div>
					<?php endif; ?>
					 
						<?php if($image = get_field('image_animal')): ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="animal center">
	
					<?php endif;?>
				
			</div>
		</article>
		<?php endwhile;?>
		<?php else : ?>
		<p>Il n'y a pas d'article pour le moment</p>
		<?php endif;?>
		</div>

        <?php get_footer();?>


