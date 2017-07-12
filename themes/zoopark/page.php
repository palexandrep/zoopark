       <?php get_header();?>
       <!-- Page -->
        <main>
            <section>
                <?php if(have_posts()): the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div><?php the_content(); ?></div>
                <?php endif; ?>
            </section>
        </main>
          <?php get_footer();?>
