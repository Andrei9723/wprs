<?php
/*
Template Name: Packages
*/
?>
<?php  get_header();?> 
<body class="clr">
<div class="tot">
<ul class="pricing-table">
	  <li class="title">Trial</li>
	  <li class="price">Free</li>
	  <li class="description">One full week</li>
	  <li class ="storage">One tester file</li>
	  <li class ="storage">Just that file</li>
	  <li><a class="button" id="myBtn">Constact us</a></li>
	</ul>
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
	  <li><button type="button" id="myBtn"> Contact us</button></li>
	</ul>
</div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    	<form action="/action_page.php" method="post">
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
