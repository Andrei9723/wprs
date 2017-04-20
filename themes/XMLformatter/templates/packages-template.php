<?php
/*
Template Name: Packages
*/
?>
<?php  get_header();?> 
<body class="clr">
<div class="tot">


	<?php $args = array(
			'post_type' => 'package'
		);
	 $packages = get_posts($args);

	foreach($packages as $package):?>
	  <ul class="pricing-table">
	  <li class="title"><?php echo $package->post_title; ?></li>
	  <li class="price"><?php echo get_post_meta($package->ID, 'price', true);?></li>
	  <li class="description"><?php echo $package->post_content; ?></li>
	  <li class ="storage"><?php echo get_post_meta($package->ID, 'storage', true); ?></li>
	  <li><button id="myBtn" class="button">Constact us</button></li>

	  </ul>
	<?php
	 endforeach;
	 ?>
<!-- 
	
>>>>>>> 5faf4a89a0bf7d3ec5af88eae4d8a75938c46d69
	<ul class="pricing-table">
		<li class="title">Lite</li>
		<li class="price">$9.99</li>
		<li class="description">Small business</li>
		<li class ="storage">3MB/file</li>
		<li class ="storage">3GB of Storage</li>
		<li><a class="button" id="myBtn">Buy Now</a></li>
	</ul>
	<ul class="pricing-table">
		<li class="title">Pro</li>
		<li class="price">$49.99</li>
		<li class="description">Best Deal</li>
		<li class ="storage">3MB/file</li>
		<li class ="storage">10GB of Storage</li>
		<li><a class="button" id="myBtn">Buy Now</a></li>
	</ul>
	<ul class="pricing-table">
	  <li class="title">Corporation</li>
	  <li class="price">$99.99</li>
	  <li class="description">Super high trafic</li>
	  <li class ="storage">3MB/file</li>
	  <li class ="storage">10GB+ of Storage</li>
<<<<<<< HEAD
	  <li><button type="button" id="myBtn"> Contact us</button></li>
	</ul>
=======
	  <li><a id="myBtn" class="button" >Contact us</a></li>
	</ul> -->

</div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    	<form method="post">
  				<br>
  			<input type="text" name="firstname" placeholder="Firstname" maxlength="30">
  			<br>
			<input type="text" name="lastname" placeholder="Lastname" maxlength="30">
			<br>
			<input type="text" name="email" placeholder="Email" maxlength="50">
			<br>
			<input type="text" name="Phonenumber" placeholder="Phone number" maxlength="30">
  			<br><br>
  			 <ul class="button-group">
    <li><button class="small button" name="Send" type="submit">Submit</a></li>
  </ul> 
</form> 
  </div>

</div>

</body>

<?php get_footer(); ?>
