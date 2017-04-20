<?php
/*
Template Name: Aboutapp
*/
?>
<?php  get_header();?> 

	<br><br>
<h2 align="center" class="app align">About application</h2>
<body class="clr">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(__('(more...)')); ?>

	<hr><?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>

</body>
	<?php get_footer(); ?>
