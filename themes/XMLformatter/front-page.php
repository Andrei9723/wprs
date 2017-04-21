
<?php  get_header();?>
<<<<<<< HEAD
<body class="clr">	
=======
<body class="all">
>>>>>>> 771b78b48a4a04828b1a2dff9241120c7d306a3d
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php the_content(__('(more...)')); ?>

	<hr><?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

</body>
<?php get_footer(); ?>

