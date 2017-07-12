<?php get_header();?>
<!-- Categories-->
	<main class="category--container">

		<?php if(have_posts): 
		while(have_posts()): the_post();?>
		
		<article class="category-article">
			<?php if(has_post_thumbnail()): ?>
			<figure>
				<a href="<?php the_permalink();?>">
					<?php the_post_thumbnail();?>
				</a>
			</figure>
		<?php endif;?>
			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

		</article>
		<?php endwhile;?>
		<?php else : ?>
		<p>Il n'y a pas d'article pour le moment</p>
		<?php endif;?>
	</main>
<?php get_footer();?>