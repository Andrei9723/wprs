<?php
/*
Template Name: Packages
*/
?>
<?php  get_header();?> 
<!--                                                    v(Output tabele)v                                          -->
<body class="all">
	<div class="allpack">
		<div class ="aligntb">
			<?php $args = array(
					'post_type' => 'package'
				);
			 $packages = get_posts($args);

			foreach($packages as $package):?>
				<div class ="alignt">
				  <ul class="pricing-table">
				  <li class="title"><?php echo $package->post_title; ?></li>
				  <li class="price"><?php echo get_post_meta($package->ID, 'price', true);?></li>
				  <li class="description"><?php echo $package->post_content; ?></li>
				  <li class ="storage"><?php echo get_post_meta($package->ID, 'storage', true); ?></li>
				  </ul>
				</div>

			<?php
			 endforeach;
			 ?>
	 	</div>
		<div class="contactusbutt">
			<a id="myBtn" class="button" >Contact us</a>
		</div>
		<div class="disclaimer">
		Prices may be changed at any time without further notice. We reserve the right to change our product's prices at any time without further notice. However, if you have ordered but not yet paid for a product, we guarantee the price for one month from when the order was placed.
		</div>
	</div>
	 <!--                                                (Tabela veche)V                                          -->

	<!-- tabelele vechi
		
		<ul class="pricing-table">
			<li class="title">Lite</li>
			<li class="price">$9.99</li>
			<li class="description">Small business</li>
			<li class ="storage">3MB/file</li>
			<li class ="storage">3GB of Storage</li>
			<li><a class="button" href="#">Buy Now</a></li>
		</ul>
		<ul class="pricing-table">
			<li class="title">Pro</li>
			<li class="price">$49.99</li>
			<li class="description">Best Deal</li>
			<li class ="storage">3MB/file</li>
			<li class ="storage">10GB of Storage</li>
			<li><a class="button" href="#">Buy Now</a></li>
		</ul>
		<ul class="pricing-table">
		  <li class="title">Corporation</li>
		  <li class="price">$99.99</li>
		  <li class="description">Super high trafic</li>
		  <li class ="storage">3MB/file</li>
		  <li class ="storage">10GB+ of Storage</li>
		  <li><a id="myBtn" class="button" >Contact us</a></li>
		</ul> -->
		<!--                                              V("Contact us" modal)V                                         -->
	<div id="myModal" class="modal">
	  <div class="modal-content">
	    <span class="close">&times;</span>
	    	<form action="">
	    		<select required name="packages">
	    			<option value="" disabled selected>Select your option</option>
				  	<option value="free">Free</option>
				  	<option value="lite">Lite</option>
				  	<option value="pro">Pro</option>
				  	<option value="corporation">Corporation</option>
				</select><hr>
	  			
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
