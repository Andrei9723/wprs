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
	  <li><a class="button" href="#">Test Now</a></li>
	</ul>
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
	  <li><a class="button" href="#">Buy Now</a></li>
	</ul>
</div>
<h2>Modal Example</h2>

<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

<?php get_footer(); ?>
