<?php
/*
Template Name: Checkout Page
*/
session_start();
class Child {
	public $Age;

	public function __construct() {
		$this->Age = array();
	}

	public function addAge( $age ) {
		$this->Age[] = $age;
	}
}

class TourDetails {
	public $Tours;

	public function __contruct() {
		$this->Tours = array();
	}

	public function addTour( $tour_id, $travel_date, $tour_type ) {
		$tour = new stdClass();
		$tour->TourID = $tour_id;
		$tour->TravelDate = $travel_date;
		$tour->TourType = $tour_type;

		$this->Tours[] = $tour;
	}
}

class SearchActivityPrice {
	public $RequestParam;

	public function __construct( $activity_id, $adult_count, $senior_citizen_count, $currency, TourDetails $tour_details ) {
		$this->RequestParam = new stdClass();

		$this->RequestParam->ActivityID = $activity_id;
		$this->RequestParam->Adult = $adult_count;
		$this->RequestParam->SeniorCitizen = $senior_citizen_count;
		$this->RequestParam->currency = $currency;
		$this->RequestParam->TourDetails = $tour_details;
	}

	public function addChild( Child $child ) {
		$this->RequestParam->Child = $child;
	}
}



$info = $wpdb->get_row( "SELECT * FROM activity WHERE ActivityID = ".$_REQUEST['activity_id'] );


if($_POST['submit_s'] == 1)
{
	
	$tour_date = $_POST['tour_date'];
	$adult = $_POST['adult'];
	$children = $_POST['children'];
	$age[] = $_POST['age1'];
	$age[] = $_POST['age2'];
	$age[] = $_POST['age3'];
	$age[] = $_POST['age4'];
	$age[] = $_POST['age5'];
	
	$_SESSION['check_post'] = $_POST;
	
	include_once('config.php');
	include_once('db.php');
	include_once('class/Activity.php');

	
	$soap_call = 'SearchActivityPrice';

	$activity_id = $_POST['activity_id'];
	$myrows = $wpdb->get_row( "SELECT * FROM activity_tour WHERE ActivityID = ".$activity_id );
	
	
	$hardcoded_tour_id = $myrows->TourID;
	$_SESSION['activity_id'] = $activity_id;
	$_SESSION['hardcoded_tour_id'] = $hardcoded_tour_id;

	$activity = Activity::get_single($pdo, $activity_id, TRUE);
	$currency = $activity->Currency;
	
	$adult_count = $adult; // by right, this is from a form
	$senior_citizen_count = 0; // by right, this is from a form

	$child = new Child();
	
	for($i=0;$i<$children;$i++)
	{
		$agea = $age[$i];
		$child->addAge($agea); // by right, this is from a form
		
	}

	$travel_date = array();
	$travel_date[$hardcoded_tour_id] = $tour_date.'T00:00:00'; // by right, this is from a form

	$tour_details = new TourDetails();
	foreach ( $activity->Tours as $tour ) {
		$tour_details->addTour($tour->TourID, $travel_date[$tour->TourID], $tour->TourType);
	}

	$search_activity_price = new SearchActivityPrice($activity_id, $adult_count, $senior_citizen_count, $currency, $tour_details);
	$search_activity_price->addChild($child);

	$client = new SoapClient($api_url, array('trace' => 1));
	$result = $client->__soapCall($soap_call, array($search_activity_price), null, $soap_header);
	

	if ( empty($result) == FALSE ) {
		if ( isset($result->SearchActivityPriceResult->ActivitiePrice) ) {
			$activity_price = $result->SearchActivityPriceResult->ActivitiePrice;

				$_SESSION['USID'] = $activity_price->USID;
			     $_SESSION['ActivityID'] =$activity_price->ActivityID;
			     $_SESSION['ActivityName'] = $activity_price->ActivityName;
			     $_SESSION['BookURL'] = $activity_price->BookURL;
			     $_SESSION['Adult'] =$activity_price->Adult;
			     $_SESSION['Child'] = $activity_price->Child;
			     $_SESSION['SeniorCitizen'] = $activity_price->SeniorCitizen; 
			     $_SESSION['Country'] = $activity_price->Country;
			     $_SESSION['City'] = $activity_price->City;
			     $_SESSION['Currency'] = $activity_price->Currency;
			     $_SESSION['PriceAdult'] = number_format($activity_price->PriceAdult, 2);
			     $_SESSION['PriceChild'] = number_format($activity_price->PriceChild, 2);
			     $_SESSION['SeniorCitizen'] = number_format($activity_price->SeniorCitizen, 2); 
			     $_SESSION['TotalAmount'] = number_format($activity_price->TotalAmount, 2);				 
				 
			//redirect
			header('Location: '.get_site_url().'/confirmation/');
			exit;
		}
		elseif ( isset($result->SearchActivityPriceResult->Errors) ) {
			$errors = $result->SearchActivityPriceResult->Errors;
			
			$error_code = $errors->ErrorCode;
			$error_msg = $errors->ErrorMessage;
			$error = 1;

		}
	}
	
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
                          <div class="alert alert-danger">
  <strong>Error!</strong> <?php echo $error_msg; ?> (<?php echo $error_code; ?>)
</div>
		<?php endif; ?>
                            <h3 class="gdlr-paypal-form-head">You are booking for : <span><?php echo utf8_decode($info->ActivityName);?></span></h3>
                            <form class="gdlr-paypal-form" action="" method="post">
                              <div class="gdlr-paypal-fields">
                                <div class="six columns"><span class="gdlr-head">First Name *</span>
                                  <input class="gdlr-require" required type="text" name="name2">
                                </div>
                                <div class="six columns gdlr-right"><span class="gdlr-head">Last Name *</span>
                                  <input class="gdlr-require" required type="text" name="last-name2">
                                </div>
                                <div class="clear"></div>
                                <div class="six columns"><span class="gdlr-head">Email *</span>
                                  <input class="gdlr-require gdlr-email" required type="email" name="email2">
                                </div>
                                <div class="six columns gdlr-right"><span class="gdlr-head">Phone *</span>
                                  <input type="text" name="phone2" required pattern=".{8,}"  required title="Minimum of 8 digits ">
                                </div>
                                <div class="clear"></div>
                                <div class="six columns"><span class="gdlr-head">Address *</span>
                                  <textarea name="address2" required></textarea>
                                </div>
                                <div class="six columns gdlr-right"><span class="gdlr-head">Tour Date *</span>
                                  <input type="text" name="tour_date" required class="datepicker">
                                </div>
                                <div class="clear"></div>
                                <div class="six columns"><span class="gdlr-head">Number Of Adults</span>
                                  <div class="gdlr-combobox">
                                    <select name="adult">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="six columns"><span class="gdlr-head">Number Of Children</span>
                                  <div class="gdlr-combobox">
                                    <select name="children" id="children" onChange="display_child();">
                                      <option value="0">0</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                    </select>
                                  </div>
                                </div>
                                
                                <div class="six columns hidden" id="child1"><span class="gdlr-head">Child's Age</span>
                                   <input type="text" name="age1">
                                </div>
                                
                                <div class="six columns hidden" id="child2"><span class="gdlr-head">Child's Age</span>
                                  <input type="text" name="age2">
                                </div>
                                
                                <div class="six columns hidden" id="child3"><span class="gdlr-head">Child's Age</span>
                                  <input type="text" name="age3">
                                </div>
                                
                                <div class="six columns hidden" id="child4"><span class="gdlr-head">Child's Age</span>
                                  <input type="text" name="age4">
                                </div>
                                
                                <div class="six columns hidden" id="child5"><span class="gdlr-head">Child's Age</span>
                                  <input type="text" name="age5">
                                </div>
                                
                                
                                <div class="clear"></div>
                           
                              <div class="gdlr-paypal-loader"></div>
                              <input type="hidden" name="activity_id" value="<?php echo $_REQUEST['activity_id']; ?>">
                              <input type="hidden" name="submit_s" value="1">
                              <input type="submit" name="submit" class="gdlr-button-paypal" value="Purchase" style="background: #ff7d43; border-color: #b56e4e;">
                              <div class="clear"></div>
                            </form>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
	function display_child()
	{
		var children = $('#children').val();
		if(children == 0)
		{
			$('#child1').hide();	
			$('#child2').hide();	
			$('#child3').hide();	
			$('#child4').hide();	
			$('#child5').hide();
				
		}
		for(i=1;i<=children;i++)
		{
			$('#child'+i).show();
			
		}
	}
	$(function() {
		var dateToday = new Date();
		$( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd',
        minDate: dateToday });
	});
	</script>
