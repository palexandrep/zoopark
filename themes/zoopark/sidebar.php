<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('zone_sidebar')): ?>
<div>
    <?php get_search_form(); ?>
</div>
<div>
<h2>Catégories:</h2>
<ul><?php wp_list_categories(array('title_li'=>'','show_count'=>true,'hide_empty'=>true)); ?></ul>
</div>
<div>
    <h2>Archives</h2>
    <ul><?php wp_get_archives('type=monthly'); ?></ul>
</div>
<div>
    <h2>Calendrier</h2>
    <?php get_calendar(); ?>
</div>
<div>
    <?php wp_loginout(); ?>
    <?php if(!is_user_logged_in()):?> | <?php wp_register('',''); endif;?>
</div>
<?php endif; ?>