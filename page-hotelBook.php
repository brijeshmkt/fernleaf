<?php
/*
  Template Name: Book Hotel Page
 */
?>
<?php get_header();        ?>

<div class="main-content-container">

<div class="row">
	<div class="nine columns">
		<h1>Contact Details</h1>

		Contact Person:*
		<input type="text" name="contact_person" value="" placeholder="">

		<br>

		Country of Residence:*
		<select name="country_of_residence">
			<option value="India">India</option>
			
		</select>

		<br>

		Email Address:*
		<input type="email" name="email" value="" placeholder="">

		<br>

		Mobile Number:*
		<input type="text" name="" value="" placeholder="">
	</div>

	<div class="three columns">
		<h2>Trip Summary</h2>
	</div>

</div>


</div>
<?php
/* echo '<pre>';
  print_r($xml->AT_HotelList->Hotel);
  echo '</pre>'; */
?>
<?php get_footer(); ?>
