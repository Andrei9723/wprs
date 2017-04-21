
<?php  get_header();?>
<body class="clr">
	
<?php echo do_shortcode("[metaslider id=51]");?>
	
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php the_content(__('(more...)')); ?>

	<hr><?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

</body>
<?php get_footer(); ?>

