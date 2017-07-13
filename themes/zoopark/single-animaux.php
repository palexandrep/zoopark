<?php get_header();?>
<!-- Single-->
	<div >

		<?php if(have_posts): 
		while(have_posts()): the_post();?>
		
		<article class="article">

			<div class="container">
				<div>
					<h3 class="orange-text"><?php the_title();?></h3>
				</div>
				
				<div class="row">
					<?php the_content();?>
				</div>
				<div class="row">
					<?php if($image = get_field('image_animal')): ?><div ><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div><?php endif;?>
				</div>
			</div>
		</article>
		<?php endwhile;?>
		<?php else : ?>
		<p>Il n'y a pas d'article pour le moment</p>
		<?php endif;?>
		</div>
<?php get_footer();?>