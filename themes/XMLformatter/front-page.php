<<<<<<< HEAD
<?php  get_header(); 
echo 'Front-Page';
?>
<body>
<nav>
	<div class="menu-centered spacem ">
	  <ul class="menu align-center ">
	<li><h2><?php wp_nav_menu ($args); ?></h2></li>
	</ul>
	<!-- <div class="menu-centered spacem ">
	  <ul class="menu align-center ">
	    <li><h2><a href="#">Home</a></h2></li>
	    <li><h2><a href="#">About app</a></h2></li>
	    <li><h2><a href="#">Package</a></h2></li>
	  
	  </ul> -->
	</div>
</nav>

</body>
<?php get_footer(); ?>
=======
<?php  get_header();?> 

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<h4>Posted on <?php the_time('F jS, Y') ?></h4>
		<p><?php the_content(__('(more...)')); ?></p>

	<hr><?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>
	<?php get_sidebar(); ?>
</div>
	<div id="delimiter">
	</div>
	<?php get_footer(); ?>
>>>>>>> adcb4970c3060f2a2bc135dcefb9f52720e9f76e
