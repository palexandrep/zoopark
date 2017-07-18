       <?php get_header();?>
       <!-- archive animaux -->
	   <div >

		<?php if(have_posts): 
		while(have_posts()): the_post();?>
		
		<article class="article">

			<div class="container">
				
				<h3 ><a href="<?php the_permalink();?>" class="orange-text"><?php the_title();?></a></h3>
				
				<div class="row col 6">
					
					<div class="col 6">
						<?php if(get_field('resume')): ?><h4><?php the_field('resume');?></h4><?php endif; ?>
						<?php the_content();?>
					</div>
					<div class="col 6"> 
						<?php if($image = get_field('image_animal')): ?>
						<div class="animal">
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						</div><?php endif;?>
					</div>	
				</div>
			</div>
		</article>
		<?php endwhile;?>
		<?php else : ?>
		<p>Il n'y a pas d'article pour le moment</p>
		<?php endif;?>
		</div>

        <?php get_footer();?>


