<<<<<<< HEAD
<?php  get_header(); ?>
=======
<?php echo 'Homepage';  get_header(); 

?>
>>>>>>> c35bc277bee8023fa26ed9be0aa7f20b78a58c6a
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<h4>Posted on <?php the_time('F jS, Y') ?></h4>
<p><?php the_content(__('(more...)')); ?></p>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<div id="delimiter">
</div>


<?php get_footer(); ?>