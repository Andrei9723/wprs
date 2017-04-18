<?php
/*
Template Name: Packages
*/
?>
<?php  get_header();?> 

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php the_content(__('(more...)')); ?>

	<hr><?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>

<div class="tot">
	<ul class="pricing-table">
		<li class="title">Lite</li>
		<li class="price">$9.99</li>
		<li class="description">Small business</li>
		<li>42 Rad Features</li>
		<li>3GB of Storage</li>
			<li><a class="button" href="#">Buy Now</a></li>
	</ul>
	<ul class="pricing-table">
		<li class="title">Pro</li>
		<li class="price">$49.99</li>
		<li class="description">Best Deal</li>
		<li>42 Rad Features</li>
		<li>10GB of Storage</li>
		<li><a class="button" href="#">Buy Now</a></li>
	</ul>
	<ul class="pricing-table">
	  <li class="title">Corporation</li>
	  <li class="price">$99.99</li>
	  <li class="description">Super high trafic</li>
	  <li>42 Rad Features</li>
	  <li>10GB+ of Storage</li>
	  <li><a class="button" href="#">Buy Now</a></li>
	</ul>
</div>








<?php get_footer(); ?>
