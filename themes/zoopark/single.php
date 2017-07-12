<?php get_header();?>
<!-- Single-->
	<main>
		<h2>Contenu</h2>
		<?php if(have_posts): 
		while(have_posts()): the_post();?>
		
		<article class="article">

			<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<div>
				<?php the_content();?>
				
			</div>
		</article>
		<?php endwhile;?>
		<?php else : ?>
		<p>Il n'y a pas d'article pour le moment</p>
		<?php endif;?>
	</main>
<?php get_footer();?>