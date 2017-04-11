<<<<<<< HEAD

<?php  get_header();?> 

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
=======
<?php  get_header();?> 

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
>>>>>>> 088bb53fe9e62de2e340827daa6e31db7cb9e5f7
		<?php the_content(__('(more...)')); ?>

	<hr><?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
	<?php get_sidebar(); ?>
</div>
	<div id="delimiter">
	</div>
	<?php get_footer(); ?>
