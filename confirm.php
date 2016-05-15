<?php
/*
Template Name: Confirm Page
*/
session_start();


if($_POST['submit_s'] == 1)
{
	
	date_default_timezone_set('Asia/Singapore');
	
	$transaction_num = date('YmdHi').'-'.generateRandomString(10);
	
	$my_post = array(
	  'post_title'    => $transaction_num,
	  'post_status'   => 'publish',
	  'post_type'   => 'transactions',
	);

	// Insert the post into the database
	$post_id = wp_insert_post( $my_post );
	
	$today = date('Y-m-d H:i:s');
	
	add_post_meta( $post_id, 'fernleaf_name', $_SESSION['check_post']['name2'] ); 
	add_post_meta( $post_id, 'fernleaf_lastname', $_SESSION['check_post']['last-name2'] ); 
	add_post_meta( $post_id, 'fernleaf_email', $_SESSION['check_post']['email2'] ); 
	add_post_meta( $post_id, 'fernleaf_phone', $_SESSION['check_post']['phone2'] ); 
	add_post_meta( $post_id, 'fernleaf_address', $_SESSION['check_post']['address2'] ); 
	add_post_meta( $post_id, 'fernleaf_tour_date', $_SESSION['check_post']['tour_date'] ); 
	add_post_meta( $post_id, 'fernleaf_number_of_adults', $_SESSION['Adult'] ); 
	add_post_meta( $post_id, 'fernleaf_number_of_children', $_SESSION['Child'] ); 
	add_post_meta( $post_id, 'fernleaf_transaction_time',$today); 
	add_post_meta( $post_id, 'fernleaf_departure_date',  $_POST['depart_date']  ); 
	add_post_meta( $post_id, 'fernleaf_return_date',  $_POST['return_date']  ); 
	add_post_meta( $post_id, 'fernleaf_status', 'Pending' ); 
	add_post_meta( $post_id, 'fernleaf_callback_processing', 0 ); 
	add_post_meta( $post_id, 'your_prefix_paymentlog', ' ' ); 
	add_post_meta( $post_id, 'fernleaf_total_amount', $_SESSION['TotalAmount'] ); 
	add_post_meta( $post_id, 'USID', $_SESSION['USID'] ); 
	add_post_meta( $post_id, 'ActivityName', $_SESSION['ActivityName'] ); 
	add_post_meta( $post_id, 'activity_id', $_SESSION['activity_id'] ); 
	add_post_meta( $post_id, 'hardcoded_tour_id', $_SESSION['hardcoded_tour_id'] ); 
	add_post_meta( $post_id, 'currently_in_singapore', $_POST['singapore'] ); 
	add_post_meta( $post_id, 'decision_to_purchase_insurance1', $_POST['detail1'] ); 
	add_post_meta( $post_id, 'decision_to_purchase_insurance2', $_POST['detail2'] ); 
	add_post_meta( $post_id, 'decision_to_purchase_insurance3', $_POST['detail3'] ); 
	add_post_meta( $post_id, 'purchase_insurance', $_POST['purchase_insurance'] ); 
	add_post_meta( $post_id, 'detail_insurance', $_POST['detail_insurance'] ); 
	add_post_meta( $post_id, 'insurer1', $_POST['insurer1'] ); 
	add_post_meta( $post_id, 'insurer2', $_POST['insurer2'] ); 
	add_post_meta( $post_id, 'insurer3', $_POST['insurer3'] ); 
	add_post_meta( $post_id, 'insurer4', $_POST['insurer4'] ); 
	
	//adults name
	for($i=1;$i<=$_SESSION['Adult'];$i++)
	{
		$sal = $_POST['sal'.$i];
		$name = $_POST['name'.$i];
		
		
		add_post_meta( $post_id, 'fernleaf_adult_sal'.$i, $sal );
		add_post_meta( $post_id, 'fernleaf_adult_name'.$i, $name );
		 
	}
	
	//children name
	for($i=1;$i<=$_SESSION['Child'];$i++)
	{
		
		$childname = $_POST['child'.$i];
		add_post_meta( $post_id, 'fernleaf_child_name'.$i, $childname );
	}
	
	header('Location: '.get_site_url().'/paypal-express-checkout/process.php?trans_no='.$transaction_num);
	exit;	

}	
 get_header(); ?>

<div class="content-outer-wrapper">
  <div class="page-full-wrapper">
    <div id="post-9" class="post-9 page type-page status-publish hentry">
      <div class="page-wrapper single-page ">
        <div class="gdl-page-item">
          <div class="container">
            <div class="row">
              <div class="twelve columns mb0">
                <div class="gdl-page-content"></div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="twelve columns package-item-class package-item-class-0 mb40">
                <div class="book-now-contact" id="gdl-booknow-2">
                  <div class="gdlr-paypal-form-wrapper">
                    <?php if($error == 1): ?>
                    <div class="alert alert-danger"> <strong>Error!</strong> <?php echo $error_msg; ?> (<?php echo $error_code; ?>) </div>
                    <?php endif; ?>
                    <table width="100%">
                      <tr>
                        <td>ActivityName</td>
                        <td><?php echo utf8_decode($_SESSION['ActivityName']);?></td>
                      </tr>
                      <tr>
                        <td>Number Of Adult</td>
                        <td><?php echo $_SESSION['Adult']; ?></td>
                      </tr>
                      <tr>
                        <td>Number Of Child</td>
                        <td><?php echo $_SESSION['Child']; ?></td>
                      </tr>
                      <tr>
                        <td>Currency</td>
                        <td><?php echo $_SESSION['Currency']; ?></td>
                      </tr>
                      <tr>
                        <td>Price Per Adult</td>
                        <td>$<?php echo $_SESSION['PriceAdult']; ?></td>
                      </tr>
                      <tr>
                        <td>Price Per Child</td>
                        <td>$<?php echo $_SESSION['PriceChild']; ?></td>
                      </tr>
                      <tr>
                        <td>Total Amount</td>
                        <td>$<?php echo $_SESSION['TotalAmount']; ?></td>
                      </tr>
                      <tr>
                        <td>First Name</td>
                        <td><?php echo $_SESSION['check_post']['name2']; ?></td>
                      </tr>
                      <tr>
                        <td>Last Name</td>
                        <td><?php echo $_SESSION['check_post']['last-name2']; ?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><?php echo $_SESSION['check_post']['email2']; ?></td>
                      </tr>
                      <tr>
                        <td>Phone</td>
                        <td><?php echo $_SESSION['check_post']['phone2']; ?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td><?php echo $_SESSION['check_post']['address2']; ?></td>
                      </tr>
                      <tr>
                        <td>Tour Date</td>
                        <td><?php echo $_SESSION['check_post']['tour_date']; ?></td>
                      </tr>
                    </table>
                    <form class="gdlr-paypal-form" action="" method="post" onSubmit="return checking();">
                      <div class="gdlr-paypal-fields">
                      <div class="six columns"><span class="gdlr-head">Departure Date *</span>
                        <input type="text" name="depart_date" required class="datepicker">
                      </div>
                      <div class="six columns gdlr-right"><span class="gdlr-head">Return Date *</span>
                        <input type="text" name="return_date" required class="datepicker">
                      </div>
                      <?php for($i=1;$i<=$_SESSION['Adult'];$i++): ?>
                      <div class="six columns"><span class="gdlr-head">Passenger <?php echo $i; ?> Name *</span>
                        <select class="select2" name="sal<?php echo $i; ?>">
                          <option>Mr</option>
                          <option>Ms</option>
                          <option>Mrs</option>
                          <option>Mdm</option>
                          <option>Dr</option>
                        </select>
                        <input class="gdlr-require text2" required type="text" name="name<?php echo $i; ?>">
                      </div>
                      <?php endfor; ?>
                      <?php for($i=1;$i<=$_SESSION['Child'];$i++): ?>
                      <div class="six columns"><span class="gdlr-head">Child <?php echo $i; ?> Name *</span>
                        <input class="gdlr-require" required type="text" name="child<?php echo $i; ?>">
                      </div>
                      <?php endfor; ?>
                      <div class="clear"></div>
                      <div class=" columns"> <br>
                        <Br>
                        As part of ongoing consumer protection measures, Singapore Tourism Board requires licensed travel agents to perform the following:<br>
                        <br>
                        (1) The licensee shall inform any client in Singapore, who is not a business entity and who is not acting on behalf of a business entity, to consider purchasing travel insurance in respect of any travel product for travel out of Singapore which has, in respect of any one traveller, a deposit or payment before the departure date equal to or exceeding S$500 or an aggregate purchase price equal to or exceeding S$1,000 (including Goods and Services Tax).<br>
                        <br>
                        (2) The licensee shall inform the client to consider purchasing travel insurance – 
                        a. Against any failure or disruption in the provision of the travel 
                        product arising out of any insolvency on the part of the licensee; 
                        and
                        b. In favour of all travellers for whom the payment or deposit is to be made.<br>
                        <br>
                        <p>The Media Release by the Singapore Tourism Board can be found <a data-url="#gdl-booknow-1" data-rel="fancybox" data-fancybox-type="inline" href="#gdl-booknow-1" >here</a>.</p>
                        <p>To help us comply with the Singapore Tourism Board’s regulations, we will require you to complete the following online form before we can accept any payment or deposit from you:</p>
                        <strong>Are you currently in Singapore?</strong><br>
                        <table class="noborder autow" width="200">
                          <tr>
                            <td width="10"><input type="radio" name="singapore" id="singapore" value="1" onClick="jQuery('#insure_form').show();"></td>
                            <td width="20">Yes</td>                            
                          </tr>
                          <tr>
                            <td width="10"><input type="radio" name="singapore" id="singapore" value="2" onClick="jQuery('#insure_form').hide();"></td>
                            <td width="20">No</td>                            
                          </tr>
                          
                        </table>
                        
                        
                        <br>
                        <div id="insure_form">
                        <p><strong>Decision to Purchase Travel Insurance</strong></p>
                         <table class="noborder">
                          <tr>
                            <td width="200">Name (as in passport):</td>
                            <td><input class="gdlr-require text3" type="text" name="detail1" id="detail1"></td>                            
                          </tr>
                          <tr>
                            <td width="200"> Travel Product Reference:</td>
                            <td><input class="gdlr-require text3" type="text" name="detail2" id="detail2"></td>            
                          </tr>
                          <tr>
                            <td width="200">Names of Travellers:</td>
                            <td><input class="gdlr-require text3" type="text" name="detail3" id="detail3"></td>           
                          </tr>
                          
                          
                        </table>
                        
                        <br>
                        <strong>Do you wish to purchase the travel insurance described above at this time?</strong>
                        <table class="noborder">
                          <tr>
                            <td width="10"><input type="radio" name="purchase_insurance" id="purchase_insurance" value="1"></td>
                            <td width="20">Yes</td>
                            <td>I wish to purchase travel insurance myself with reference to the Board’s list of insurers at <a href="https://www.stb.gov.sg/industries/travel-agents/Documents/TInsurers.pdf" target="_blank" class="underline">https://www.stb.gov.sg/industries/travel-agents/Documents/TInsurers.pdf</a></td>
                          </tr>
                          <tr>
                            <td><input type="radio" name="purchase_insurance" id="purchase_insurance" value="2"></td>
                            <td>No</td>
                            <td>I do not wish to purchase travel insurance </td>
                          </tr>
                        </table>
                        <strong> If you have details of your travel insurance, the Singapore Tourism Board requires you to provide them:</strong><br>
                        <table class="noborder">
                          <tr>
                            <td width="10"><input type="radio" name="detail_insurance" id="detail_insurance" value="1"></td>
                            <td width="200">Yes, I will provide them now. </td>
                            <td><table class="noborder">
                                <tr>
                                  <td width="200">Name of Insurer:</td>
                                  <td><input class="gdlr-require text3" type="text" name="insurer1" id="insurer1"></td>
                                </tr>
                                <tr>
                                  <td>Name of Policy:</td>
                                  <td><input class="gdlr-require text3" type="text" name="insurer2" id="insurer2"></td>
                                </tr>
                                <tr>
                                  <td>Policy Ref. No:</td>
                                  <td><input class="gdlr-require text3" type="text" name="insurer3" id="insurer3"></td>
                                </tr>
                                <tr>
                                  <td>Name of Insured Travellers:</td>
                                  <td><input class="gdlr-require text3" type="text" name="insurer4" id="insurer4"></td>
                                </tr>
                              </table>
                              <br></td>
                          </tr>
                          <tr>
                            <td><input type="radio" name="detail_insurance" id="detail_insurance" value="2"></td>
                            <td colspan="2">No, I will provide them later.</td>
                          </tr>
                        </table>
                        </div>
                        </td>
                      </div>
                      <div class="gdlr-paypal-loader"></div>
                      <input type="hidden" name="submit_s" value="1">
                      <input type="submit" name="submit" class="gdlr-button-paypal" value="Proceed To Pay" style="background: #ff7d43; border-color: #b56e4e;">
                      <div class="clear"></div>
                    </form>
                  </div>
                  <div class="book-now-contact hidden" id="gdl-booknow-1">
                  <img src="<?php echo get_site_url(); ?>/rule1.jpg"><br>
                  <img src="<?php echo get_site_url(); ?>/rule2.jpg"><br>
                  </div>
                </div>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <!-- gdl page item -->
        <div class="clear"></div>
      </div>
      <!-- page wrapper --> 
    </div>
    <!-- post class --> 
  </div>
</div>
<!-- content outer wrapper -->

<?php get_footer(); ?>

<script>
	function checking()
	{
		var singapore = jQuery('input:radio[name=singapore]').filter(":checked").val();	
		
		var error = 0;
		
		if(singapore == 1)
		{
			var detail_insurance = jQuery('#detail_insurance').val();	
			var purchase_insurance = jQuery('#purchase_insurance').val();	
			var detail1 = jQuery('#detail1').val();	
			var detail2 = jQuery('#detail2').val();	
			var detail3 = jQuery('#detail3').val();	
			
			if(detail1 == '')
				error = 1;
			if(detail2 == '')
				error = 1;
			if(detail3 == '')
				error = 1;
			if(purchase_insurance == '')
				error = 1;
			if(detail_insurance == '')
				error = 1;
				
			if(detail_insurance == 1)
			{				
				var insurer1 = jQuery('#insurer1').val();	
				var insurer2 = jQuery('#insurer2').val();
				var insurer3 = jQuery('#insurer3').val();
				var insurer4 = jQuery('#insurer4').val();	
				
				if(insurer1 == '')
					error = 1;
				if(insurer2 == '')
					error = 1;
				if(insurer3 == '')
					error = 1;
				if(insurer4 == '')
					error = 1;
			}
				
			
			if(error == 1)
			{
				alert('Please fill up the form field related to Insurance.');
				return false;	
			} else {
				return true;	
			}
			
		} else {
			jQuery('#insure_form').hide();	
			
			return true;
		}
		
	}
	
	function display_child()
	{
		var children = jQuery('#children').val();
		if(children == 0)
		{
			jQuery('#child1').hide();	
			jQuery('#child2').hide();	
			jQuery('#child3').hide();	
			jQuery('#child4').hide();	
			jQuery('#child5').hide();
				
		}
		for(i=1;i<=children;i++)
		{
			jQuery('#child'+i).show();
			
		}
	}
	
	</script> 
