<?php
/*
Template Name: Aboutapp
*/
?>
<?php  get_header();?> 

	<br><br><body class="clr">
<h2 align="center" class="app align">About application</h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php the_content(__('(more...)')); ?>

	<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>











</body>
	<?php get_footer(); ?>
