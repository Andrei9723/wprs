<?php
/*
Template Name: Aboutapp
*/
?>
<?php  get_header();?> 
	<br><br>
<h2 align="center" class="app">About application</h2>
<body class="clr">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(__('(more...)')); ?>

	<hr><?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

<!-- <div class="distancea"> 
	<div class="distancec">
		<p>text</p>
	</div>
	<div class= "distanceb">
		<p>text</p>
	</div> -->

</div>

</body>
	<?php get_footer(); ?>
