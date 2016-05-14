<?php
/*
  Template Name: Page flightconfirm Page
 */
?>

<?php
error_reporting(0);
global $wpdb;

// get_header(); 
//print_r($_GET);

$flightstype = $_GET['flights-type'];
$departure_city=$_GET['departure_city'];
$arrival_city=$_GET['arrival_city'];
$departure_date=$_GET['departure_date'];
$arrival_date=$_GET['arrival_date'];

$mylink = $wpdb->get_row( "SELECT * FROM fle_cities WHERE `CityName` LIKE '$cityname' " );



?>

<?php get_header(); ?>
<div class="content-outer-wrapper">
    <div class="container">
        <div class="row">
		<div class="left-sideber-hotel">
           <div id="searchnav">
			<form name="Form1" method="post" action="book.aspx?usid=78cea9ad-3f95-4847-ad6e-cbcd8259dbe5&amp;&amp;lan=en-US&amp;scode=" id="Form1">
		<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>  
			<style type="text/css">
			#searchnav #quicksearch
			{
				height:30px;
			}
			#searchnav #quicksearch span
			{
				margin-left:20px;
			}
			#searchnav #quicksearch
			{
				background-color: #0b3669;
				color: #ffffff;
			}
			.left-side-content
			{
				border: 1px solid;
			}
			#content
			{
				background-color:#a8cbde;
				color: #ffffff;
			}
			#content span
			{
				margin-left:20px;
			}
			#content_2
			{
				background-color:#5296bb;
				color:#ffffff;
			}
			#content_2 table
			{
				border-width:0px;
				margin-bottom:0px;
			}
			#content_2 table td
			{
				border-bottom:0px;
				border-width:0px;
				border:0px;
			}
			.left-sideber-hotel
			{
				width:30%;
			}
			.right-sideber-hotel
			{
				width:70%;
			}
			.orange
			{
				color: #ff3300;
			}
			.tc li
			{
				width:600px;
			}
			
	#header1_new, #header2_new{
		font-family: Helvetica, Arial, sans-serif;
		font-size:12px;
		line-height:1.5;
	}
	#header1_new div, #header1_new ul, #header1_new li,
	#header2_new div, #header2_new ul, #header2_new li{
		margin: 0px;
		padding: 0px;
		border: 0px none;
		font: inherit;
		vertical-align: baseline;
	}
	#header1_new ul, #header2_new ul{
		list-style: none outside none;
	}
	/* ========================== */
	/* header */
	/* ========================== */
	#header1_new div.top_link a {
		color: #14477b;
		text-decoration:none;
	}
	#header1_new div.top_link a:visited {
		color: #14477b;
		text-decoration:none;
	}
	#header1_new .top_line {
		height: 5px;
		background:#e4e4e4;
	}
	#header1_new {
		width:900px;
		margin: 0 auto;
		padding: 0 0 15px 0;
	}
	#header1_new .clear {
		clear:both;
	}
	#header1_new .logo {
		float:left;
		width: 173px;
	}
	#header1_new .top_link {
		float:right;
		width:570px;
	}
	#header1_new .login_link {
		float:right;
		width:380px;
	}
	#header1_new .login_link li a {
		font-weight:bold;
		float:left;
		padding:0 10px;
		border-right: 1px solid #14477b;
		line-height:1;
	}
	#header1_new .login_link li:last-child a {
		border-right: none;
		padding-right:0;
	}
	#header1_new .welcome {
		color:#ff6801;
		line-height:1;
	}
	#header1_new .header_social {
		float:right;
		clear:both;
		margin-top:23px;
		vertical-align:baseline;
		color:#14487C;
	}
	/* ========================== */
	/* menu */
	/* ========================== */
	.menu_wrapper {
		background: url(../cob/set0/img/menu-bg.gif) repeat-x;
		height:45px;
		border-bottom:3px solid #ff6801;
		width:900px;
		margin:0 auto;
		position:relative;
		margin-bottom:10px;
	}
	.menu_list {
		/*width:980px;
		margin:0 auto;*/
		position:relative;
		overflow-x: hidden;
	
	}
	.menu_list li {
		line-height:45px;
		float:left;
		position:relative;
	}
	.menu_list li a {
		font-size:13px;
		float:left;
		line-height:45px;
		background: url(../cob/set0/img/menu-div.gif) no-repeat right;
		color:#ffffff;
		padding-left:12px; 
		padding-right:12px;
		text-decoration:none;
		font-weight:bold;
	}
	.menu_list li a:hover {
		background:#0a84c1;
	}
	.menu_list li.menu_home a {
		height:45px;
		display: inherit;
	}
	.menu_list li.menu_home img {
		vertical-align:middle;
		position: absolute;  
		top: 0;  
		bottom: 0;  
		left: 0;  
		right: 0;  
		margin: auto 12px;  
	}
	.menu_list li.menu_home a {
		width:25px;
	}
	span.language {
		float:right;
		padding-right:10px;
	}
	.menu_wrapper li.menu_hot {
		z-index:9998;
	}
	.bubble_top {
		background:url(../cob/set0/img/menu-bubble.png) no-repeat;
		width:168px;
		height:51px;
		position:absolute;
		font-weight:bold;
		text-align:center;
		line-height:1.2;
		padding: 5px 10px 10px 10px;
		bottom:40px;
		right: 190px;
		z-index:9999;
		color:#14487c;
	}
	.bubble_top strong {
		font-size:14px;
	}
    .bubble_top span {
		color:#f70000;
	}
</style>	


			
			<!-- WP: Test Visibility: style="visibility: hidden;" -->
			<!--#### WP: Body: Start #####################-->
			<div id="container">
				
				<div class="left-side-content">
					<!--#### WP: Left Nav Top Title: Start #####################-->
					<div id="quicksearch">
						<div id="quicksearch_">
							<span id="Label_FlightSummary">Flight Summary</span>
						</div>
					</div>
					<!--#### WP: Left Nav Top Title: End #####################-->
					<!--#### WP: Left Panel: Start #####################-->
					<div id="body_block_left">
						<div id="body_block_left_">
							<!--#### WP: Quicksearch Panel: Spacer #####################-->
							<!--#### WP: Quicksearch Panel: Start #####################-->
		
				<div id="body_block_left_spacer3">
					<div id="content">
						<span id="UserControl_DisplayFlightSummary_Repeater_Segments_ctl00_Label_TripDirection">Departure</span>
					</div>
				</div>
					
				<div id="body_block_left_spacer4">
					
					<div id="content_2">
					
						<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td><span id="UserControl_DisplayFlightSummary_Repeater_Segments_ctl00_Label_flights">Flight</span>
							</td>
							<td><span id="UserControl_DisplayFlightSummary_Repeater_Segments_ctl00_Label_Departure">Departure</span>
							</td>
							<td><span id="UserControl_DisplayFlightSummary_Repeater_Segments_ctl00_Label1">Arrival</span></td>
						</tr>
						<tr>
						<td colspan=3> <hr/></td>
						</tr>
						
						<tr>
						<td valign="top" >
                                        AI
                                        131
									</td>
									<td valign="top" >
										03:30hrs <br> 27/03/2016<br />
                                        AMD
									</td>
									<td valign="top">
										04:45hrs <br> 27/03/2016 <br />
                                        BOM
									</td>
						</tr>
						</table>
						</div>
						
						<br />
					</div>
					
							<!--#### WP: Quicksearch Panel: End #####################-->
							<!--#### WP: Other Panels: Start #####################-->
							<div id="body_block_left_spacer2">
							</div>
							<div id="body_block_left_spacer5">
								<table width="10%" height="100%" border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td height="100%">&nbsp;</td>
									</tr>
								</table>
							</div>
							<!--#### WP: Other Panels: End #####################-->
						</div>
					</div>
					<!--#### WP: Left Panel: End #####################-->
					<!--#### WP: Right Content Area: Start #####################-->
					
					<!--#### WP: Right Content Area: End #####################-->
					<br clear="all">
					<!--#### WP: Footer: Start #####################-->
					<div id="footer">
						<div align="center">
	
</div>

<!-- Adroll tag -->


					</div>
					<!--#### WP: Footer: End #####################-->
				</div>
				<!-- wrap ends -->
			</div>
            
			<!--#### WP: Body: End #####################-->
		</form>

		</div>
</div>



<br/>
		<div class="right-sideber-hotel">
		
<div style="width:0%">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span id="UserControl_DisplayTrackBarWizard_label_Search">Search</span>
		</td>
		<td><span id="UserControl_DisplayTrackBarWizard_Label_Select">Select</span>
		</td>
		<td><span id="UserControl_DisplayTrackBarWizard_Label_Confirm" class="orange">Confirm</span>
		</td>
		<td><span id="UserControl_DisplayTrackBarWizard_Label_Payment">Payment</span>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<img id="UserControl_DisplayTrackBarWizard_Image_WizardBar" src="http://flight.asiatravel.com/crs.style/active/img/s_s_c_p_02.gif" style="border-width:0px;" />
		</td>
	</tr>
</table>
</div>

<div style="padding-left:4%; font-weight:bold;  margin-bottom: 10px;">
<?php echo 'Ahmedabad To Delhi, 03/30/2016 ';?>
</div>
		
                    <div class="result-row">
                        <div class="package-details">
						
						<div class="package-content">
						<form id="flight-confirm-payment">
						<table>
						
						<tr>
						<td colspan=5><b>Available (Instant Confirmation)</b></td>
						<td colspan=2>USD 52.00</td>
						</tr>
						
						<tr>
						<th>Departure</th>
						<th>Flight</th>
						<th>Departure</th>
						<th>Arrival</th>
						<th>Class</th>
						<th colspan=2>Total Travel Time</th>
						</tr>
						
						<tr>
						<td align="center"><img src="http://flight.asiatravel.com/crs.file/carrier/AI.jpg" alt="Image"/></td>
						<td align="center"><a href="#">AI131</a></td>
						<td align="center">	07:30hrs, 31/03/2016<br/>Ahmedabad (AMD)</td>
						<td align="center">	08:55hrs, 31/03/2016<br/>Mumbai (BOM)</td>
						<td align="center">Economy</td>
						<td align="center">1hrs 15mins</td>
						</tr>
						
						
						</table>
                           

				<table cellspacing="0" cellpadding="0" border="0" id="UserControl_DisplayPriceDetail_DataGrid">
					<tr class="back_lighterNew">
						<td colspan=3><p><b>Price Summary</b></p></td>
					</tr>
					<tr>
					
						<td>
							1 x Adult(@USD 52.00 per pax)
						</td>
						
						<td>
							USD
						</td>
						<td>
							52.00
						</td>
					</tr>
					<tr>
						<td>
							1 x Adult Taxes & Surcharges(@USD 16.77 per pax)
						</td>
						<td>
							USD
						</td>
						<td>
							16.77
						</td>
					</tr>
					<tr>
					<td>
					<span id="UserControl_DisplayPriceDetail_DataGrid_ctl04_Label_Amount"><strong>Total Amount</strong></span>
					</td>
						<td>
							<strong>
								USD
							</strong>
						</td>
						<td>
							<strong>
								68.77
							</strong>
						</td>
					</tr>
					
					</table>
					</form>					
					
					<ul class="tc">
					<li>All timing shown are in local city times.</li>
					
					<li>Once booking is confirmed, cancellation may not be allowed or subject to cancellation fees.</li>
					<li>Local taxes and surcharges in some countries are collected at departure	terminal. These are not included with this purchase.</li>
					<li>Prices are not guaranteed until full payment is received and ticket is issued.</li>
					<li>More Ticketing Conditions.</li>
					
					</ul>
					
					
					
					<button id="book_now">Book Now</button>
					
					
					
									   
                               
                       
						</div>
						
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
				
		
</div>

            
        </div>
    </div>
</div> <!-- content outer wrapper -->

<script>
function myJsFunc(id)
{
	var location=window.location.href;
	var hname=document.getElementById('hotel_name_'+id).value;
	var newlocation=location.replace(/(cityname=)[^\&]+/, '$1' + hname+'--Hotel');
	window.location.href=newlocation;
}
function selectCity(country)
{
	var country=country;
	//document.getElementById("abcabc").value;
	//alert(country);

}


function sendAJAX(u) 
		{
            jQuery.ajax({
                type: 'get',
                url: '<?php echo $url = get_template_directory_uri(); ?>/page-getcity.php?q='+ u,
                cache: false,
                success: function (response) {
                    jQuery('#WUCQuickSearch_DropDownList_City').html(response);
                }
            });
        }

function ajaxindicatorstart(text)
	{
		if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
		jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo get_template_directory_uri();?>/images/ajax-loader.gif"><div>'+text+'</div></div><div class="bg"></div></div>');
		}
		
		jQuery('#resultLoading').css({
			'width':'100%',
			'height':'100%',
			'position':'fixed',
			'z-index':'10000000',
			'top':'0',
			'left':'0',
			'right':'0',
			'bottom':'0',
			'margin':'auto'
		});	
		
		jQuery('#resultLoading .bg').css({
			'background':'#000000',
			'opacity':'0.7',
			'width':'100%',
			'height':'100%',
			'position':'absolute',
			'top':'0'
		});
		
		jQuery('#resultLoading>div:first').css({
			'width': '250px',
			'height':'75px',
			'text-align': 'center',
			'position': 'fixed',
			'top':'0',
			'left':'0',
			'right':'0',
			'bottom':'0',
			'margin':'auto',
			'font-size':'16px',
			'z-index':'10',
			'color':'#ffffff'
			
		});

	    jQuery('#resultLoading .bg').height('100%');
        jQuery('#resultLoading').fadeIn(300);
	    jQuery('body').css('cursor', 'wait');
	}

	function ajaxindicatorstop()
	{
	    jQuery('#resultLoading .bg').height('100%');
        jQuery('#resultLoading').fadeOut(300);
	    jQuery('body').css('cursor', 'default');
	}		
		
		
		jQuery(document).ajaxStart(function () {
   		//show ajax indicator
		ajaxindicatorstart('loading data.. please wait..');
  }).ajaxStop(function () {
		//hide ajax indicator
		ajaxindicatorstop();
  });
  
  
  jQuery(function ($) {
  $("#flight-confirm-payment").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#book_now").on('click', function(event){
        event.preventDefault();
        var data = $("#flight-confirm-payment").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#flight-confirm-payment").valid()) return false;  
            window.location = '/fernleaf/?page_id=1117&' + data;
    });
  });
  

</script>

<?php get_footer(); ?>