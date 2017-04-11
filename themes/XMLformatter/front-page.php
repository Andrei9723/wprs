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