<?php
/*
  Template Name: Page flightpayment Page
 */
?>

<?php
error_reporting(0);
global $wpdb;

// get_header(); 
//print_r($_GET);

$mylink = $wpdb->get_row( "SELECT * FROM fle_cities WHERE `CityName` LIKE '$cityname' " );



?>

<?php get_header(); ?>
<div class="content-outer-wrapper">
    <div class="container">
        <div class="row">
		<div class="left-sideber-hotel">
           <div id="searchnav">
			<form name="Form1" method="post" action="book.aspx?usid=78cea9ad-3f95-4847-ad6e-cbcd8259dbe5&amp;&amp;lan=en-US&amp;scode=" id="Form1">
		
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
				color:#ffffff;
				background-color:#a8cbde;
			}
			#content_2
			{
				background-color:#5296bb;
				color:#ffffff;
			}
			#content_2 table
			{
				border-bottom:0px;
				border-width:0px;
			}
			#content_2 table td
			{
				border-bottom:0px;
				border-width:0px;
				border:0px;
			}
			#content span
			{
				margin-left:20px;
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
			.back_lighter_2 td
			{
				padding:0px;
			}
			
#body_block_right {
    float: right;
    height: auto;
    margin: 0;
    position: relative;
    width: 660px;
    z-index: 0;
}

#body_block_right_ #content1 table.border {
    border: 1px solid #97abb6;
}

#body_block_right_ #content1 #back_lighter_3 {
    background-color: #ddeaf2;
    vertical-align: middle;
}

#body_block_right_ #content1 table.box1 tr td {
    font: 11px Arial,Helvetica,sans-serif;
}
#body_block_right_ {
    background-color: #ffffff;
    background-image: url("../img/img_back/body_back_contentarea.jpg");
    background-position: right bottom;
    background-repeat: no-repeat;
    border-left: 1px solid #b1c9d5;
    float: left;
    height: auto;
    margin: 0 0 0 -1px;
    min-height: 421px;
    position: relative;
    width: 618px;
    z-index: auto;
}
			
	.smallspace {
    height: 0px;
    margin: 0;
    padding: 0;
}




#body_block_right_ #content1 table tr td a:link {
    color: #387baf;
    font-size: 12px;
}
#body_block_right_ #content1 select.width200 {
    font: 12px Arial,Helvetica,sans-serif;
    height: 28px;
    width: 160px;
}

#body_block_right_ #content1 ul {
    margin: 0;
    padding: 0 0 0 16px;
}
#body_block_right_ #content1 ul li {
    font: 11px Verdana,Arial,Helvetica,sans-serif;
    list-style-position: outside;
    margin: 0;
    padding: 0;
}

#body_block_right_ #content1 table.box2 tr td {
    font: 12px Arial,Helvetica,sans-serif;
    vertical-align: top;
}

#body_block_right_ #content1 .back_lighterNew p {
    color: #ffffff;
    font: 13px Verdana,Arial,Helvetica,sans-serif;
    margin: 0;
    padding: 2px 5px;
}
#body_block_right_ #content1 .back_lighter_2 p {
    font: 11px Arial,Helvetica,sans-serif;
    margin: 3px 0 3px 5px;
    padding: 0;
}
#body_block_right_ #content1 .redstar {
    color: #ff0000;
    display: inline;
    font-size: 15px;
    font-weight: bold;
    padding-left: 1px;
    padding-right: 1px;
}

#body_block_right_ #content1 table.box2 tr.back_lighter_2 td {
    margin: 0;
    padding: 0;
}
.back_lighter_2 td 
{
	width:20px;
}
#body_block_right_ h3 {
    color: #387baf;
    font: bold 12px Arial,Helvetica,sans-serif;
    margin: 0;
    padding: 0;
}
#body_block_right_ table
{
	margin-bottom:0px;
	border-width:0px;
	border:0px;
}
#body_block_right_ table td
{
	border-left:0px;
}
#body_block_right_ #content1 input.width180 {
    font: 12px Arial,Helvetica,sans-serif;
    height: 26px;
    width: 165px;
}


#body_block_right_ #content1 select.width60 {
    background-color: #ffffff;
    font: 12px Arial,Helvetica,sans-serif;
    height: 28px;
    vertical-align: middle;
    width: 60px;
}

#body_block_right_ #content1 input.width100 {
    font: 12px Arial,Helvetica,sans-serif;
    height: 26px;
    width: 100px;
}
#body_block_right_ #content1 input.width40 {
    font: 12px Arial,Helvetica,sans-serif;
    height: 26px;
    width: 40px;
}
.goSearch {
    background-color: #ffffff;
    border: 1px solid #7f9db9;
    color: #000000;
    font: 11px/17px normal Arial,Verdana,Helvetica,sans-serif;
    height: 28px;
    padding: 0 0 0 2px;
    text-decoration: none;
    vertical-align: text-bottom;
}

#body_block_right_ table tr td {
    font: 11px Verdana,Arial,Helvetica,sans-serif;
}

#body_block_right_ table tr td {
    font: 11px Verdana,Arial,Helvetica,sans-serif;
    margin: 0 10px;
}
#body_block_right_ #content1 .reqfieldWhite {
    background-color: #ffffff;
	width:90px;
}

#body_block_right_ #content1 .back_lighter_2 {
    background-color: #f3f3f3;
    vertical-align: middle;
}
#body_block_right_ #content1 table.box2 tr {
    font: 12px Arial,Helvetica,sans-serif;
    vertical-align: top;
}
#body_block_right_ #content1 .back_lighterNew {
    background-color: #0b3669;
}

#body_block_right_ #content1 {
    margin: -16px 0 0 0px;
    width: 670px;
}
#UserControl_EditParticular_Label_Header
{
	color:#ffffff;
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
							<td><span id="UserControl_DisplayFlightSummary_Repeater_Segments_ctl00_Label_flights">Flight</span></td>
							<td><span id="UserControl_DisplayFlightSummary_Repeater_Segments_ctl00_Label_Departure">Departure</span></td>
							<td><span id="UserControl_DisplayFlightSummary_Repeater_Segments_ctl00_Label1">Arrival</span></td>
						</tr>
						<tr>
							<td colspan="3"><hr /></td></tr>
						<tr>
						
						<tr style="border-width:0px;">
						<td></td><td></td><td></td>
						</tr>
						<tr>
						<td valign="top" >
                                        AI
                                        131
									</td>
									<td valign="top">
										03:30hrs <br> 27/03/2016<br />
                                        AMD
									</td>
									<td valign="top">
										04:45hrs <br> 27/03/2016 <br />
                                        BOM
									</td>
						</tr>
						</table>
						
						<div id="body_block_left_spacer3">
							<div id="content">
						<span id="UserControl_DisplayFlightSummary_Repeater_Segments_ctl00_Label_TripDirection">Price Summary</span>
							</div>
						</div>
						<table cellspacing="0" cellpadding="0" border="0" id="UserControl_DisplayPriceDetail_DataGrid">
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
		<td><span id="UserControl_DisplayTrackBarWizard_Label_Confirm">Confirm</span>
		</td>
		<td><span id="UserControl_DisplayTrackBarWizard_Label_Payment" class="orange">Payment</span>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<img id="UserControl_DisplayTrackBarWizard_Image_WizardBar" src="http://flight.asiatravel.com/crs.style/active/img/s_s_c_p_03.gif" style="border-width:0px;" />
		</td>
	</tr>
</table>
</div>
<div style="padding-left:4%; font-weight:bold;  margin-bottom: 10px;">
<?php echo 'Ahmedabad To Delhi, 03/30/2016 ';?>
</div>			

			
                    <div class="result-row">
                        <div class="package-details">
						
						
<div id="body_block_right">
<div id="body_block_right_">						
                
<div id="content1">
								
<div style="WIDTH:100%;">
								    
<div class="smallspace"></div>
<table border="0" cellpadding="0" cellspacing="0" class="box2">
	<tr class="back_lighterNew">
		<td>
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td>
					    <b>
					        <span id="UserControl_EditParticular_Label_Header">Passenger Details</span>
					        </b>
					   </td>
					<td align="right"><p style="font-size:10px;"><span id="UserControl_EditParticular_Label_RequireField"><span style="FONT-WEIGHT: normal"><i>Required Fields</i></span><span class="redstarSmall">*</span>&nbsp;</span></p></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr class="back_lighter_2">
		<td>
			<!-- Adult: -->
			<span id="UserControl_EditParticular_Label_Adult" style="font-weight:bold;">Adults</span><br>
			
				
					
					<table border="0" cellpadding="0" cellspacing="0">
						<tr class="back_lighter_2">
							<td>
									<span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_SN">1</span>:
							</td>
							<td> 
							   <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_Title">Title <span class="redstar">*</span></span>
					            <br /> 
								<select name="UserControl_EditParticular$Repeater_Adult$ctl01$DropDownlist_Title" id="UserControl_EditParticular_Repeater_Adult_ctl01_DropDownlist_Title" class="width60 goSearch reqfieldWhite">
	<option value="Mr">Mr</option>
	<option value="Mrs">Mrs</option>
	<option value="Mdm">Mdm</option>
	<option value="Mstr">Mstr</option>
	<option value="Ms">Miss</option>
	<option value="Dr">Dr</option>

</select>
							</td>
							<td>
							    <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_FirstName">First and Middle names e.g.WEE KIN<span class="redstar">*</span></span>
					            <br />
							    <input name="UserControl_EditParticular$Repeater_Adult$ctl01$Textbox_FirstName" type="text" maxlength="50" id="UserControl_EditParticular_Repeater_Adult_ctl01_Textbox_FirstName" class="width180 goSearch reqfieldWhite" Value="" />
							</td>
							<td align="left">
							    <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_LastName">Family Name/Surname e.g. NG <span class="redstar">*</span></span>
					            <br />
								<input name="UserControl_EditParticular$Repeater_Adult$ctl01$Textbox_LastName" type="text" maxlength="50" id="UserControl_EditParticular_Repeater_Adult_ctl01_Textbox_LastName" class="width180 goSearch reqfieldWhite" value="" />
							</td>
						</tr>
						<tr class="back_lighter_2">
							<td>
							    <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_Passport">Passport No<span class="redstar">*</span></span>
							    <br />
								<input name="UserControl_EditParticular$Repeater_Adult$ctl01$Textbox_Passport" type="text" maxlength="50" id="UserControl_EditParticular_Repeater_Adult_ctl01_Textbox_Passport" class="width80 goSearch reqfieldWhite" />
							</td>
							<td>
							    <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_PassportInsurance">Passport Issuance Country <span class="redstar">*</span></span>
							    <br />
								<select name="UserControl_EditParticular$Repeater_Adult$ctl01$DropDownList_InsuranceCountry" id="UserControl_EditParticular_Repeater_Adult_ctl01_DropDownList_InsuranceCountry" class="width200 goSearch reqfieldWhite">
	<option selected="selected" value="0">&lt;Please Select&gt;</option>
	<option value="CHN">China</option>
	<option value="HKG">Hong Kong (sar) China</option>
	<option value="PHL">Philippines</option>
	<option value="SGP">Singapore</option>
	<option value="THA">Thailand</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="0">--------------------------------</option>
	<option value="AFG">Afghanistan</option>
	<option value="ALB">Albania</option>
	<option value="DZA">Algeria</option>
	<option value="ASM">American Samoa</option>
	<option value="AGO">Angola</option>
	<option value="AIA">Anguilla, Leeward Islands</option>
	<option value="ATG">Antigua and Barbuda, Leeward Islands</option>
	<option value="ARG">Argentina</option>
	<option value="ARM">Armenia</option>
	<option value="ABW">Aruba</option>
	<option value="AUS">Australia</option>
	<option value="AUT">Austria</option>
	<option value="AZE">Azerbaijan</option>
	<option value="BHS">Bahamas</option>
	<option value="BHR">Bahrain</option>
	<option value="BGD">Bangladesh</option>
	<option value="BRB">Barbados</option>
	<option value="BLR">Belarus</option>
	<option value="BEL">Belgium</option>
	<option value="BLZ">Belize</option>
	<option value="BEN">Benin</option>
	<option value="BMU">Bermuda</option>
	<option value="BTN">Bhutan</option>
	<option value="BOL">Bolivia</option>
	<option value="BIH">Bosnia and Herzegovina</option>
	<option value="BWA">Botswana</option>
	<option value="BRA">Brazil</option>
	<option value="BRN">Brunei Darussalam</option>
	<option value="BGR">Bulgaria</option>
	<option value="BFA">Burkina Faso</option>
	<option value="BIF">Burundi</option>
	<option value="KHM">Cambodia</option>
	<option value="CMR">Cameroon</option>
	<option value="CAN">Canada</option>
	<option value="CPV">Cape Verde</option>
	<option value="CYM">Cayman Islands</option>
	<option value="CAF">Central African Republic</option>
	<option value="TCD">Chad</option>
	<option value="CHL">Chile</option>
	<option value="CHN">China</option>
	<option value="CXR">Christmas Island, Indian Ocean</option>
	<option value="CCK">Cocos (keeling) Islands</option>
	<option value="COL">Colombia</option>
	<option value="COM">Comoros</option>
	<option value="COG">Congo</option>
	<option value="COD">Congo Democratic Republic of</option>
	<option value="COK">Cook Islands</option>
	<option value="CRI">Costa Rica</option>
	<option value="CIV">Cote D'Ivoire</option>
	<option value="HRV">Croatia</option>
	<option value="CUB">Cuba</option>
	<option value="CYP">Cyprus</option>
	<option value="CZE">Czech Republic</option>
	<option value="DNK">Denmark</option>
	<option value="DJI">Djibouti</option>
	<option value="DMA">Dominica</option>
	<option value="DOM">Dominican Republic</option>
	<option value="ECU">Ecuador</option>
	<option value="EGY">Egypt</option>
	<option value="SLV">El Salvador</option>
	<option value="GNQ">Equatorial Guinea</option>
	<option value="ERI">Eritrea</option>
	<option value="EST">Estonia</option>
	<option value="ETH">Ethiopia</option>
	<option value="FLK">Falkland Islands</option>
	<option value="FRO">Faroe Islands</option>
	<option value="FJI">Fiji</option>
	<option value="FIN">Finland</option>
	<option value="FRA">France</option>
	<option value="GUF">French Guiana</option>
	<option value="PYF">French Polynesia</option>
	<option value="GAB">Gabon</option>
	<option value="GMB">Gambia</option>
	<option value="GEO">Georgia</option>
	<option value="DEU">Germany</option>
	<option value="GHA">Ghana</option>
	<option value="GIB">Gibraltar</option>
	<option value="GRC">Greece</option>
	<option value="GRL">Greenland</option>
	<option value="GRD">Grenada, Windward Islands</option>
	<option value="GLP">Guadeloupe</option>
	<option value="GUM">Guam</option>
	<option value="GTM">Guatemala</option>
	<option value="GIN">Guinea</option>
	<option value="GNB">Guinea-Bissau</option>
	<option value="GUY">Guyana</option>
	<option value="HTI">Haiti</option>
	<option value="HND">Honduras</option>
	<option value="HKG">Hong Kong (sar) China</option>
	<option value="HUN">Hungary</option>
	<option value="ISL">Iceland</option>
	<option value="IND">India</option>
	<option value="IDN">Indonesia</option>
	<option value="IRN">Iran Islamic Republic of</option>
	<option value="IRQ">Iraq</option>
	<option value="IRL">Ireland Republic of</option>
	<option value="ISR">Israel</option>
	<option value="ITA">Italy</option>
	<option value="JAM">Jamaica</option>
	<option value="JPN">Japan</option>
	<option value="JOR">Jordan</option>
	<option value="KAZ">Kazakhstan</option>
	<option value="KEN">Kenya</option>
	<option value="KIR">Kiribati</option>
	<option value="PRK">Korea (North)</option>
	<option value="KOR">Korea (South)</option>
	<option value="KWT">Kuwait</option>
	<option value="KGZ">Kyrgyzstan</option>
	<option value="LAO">Lao People's Democratic Republic</option>
	<option value="LVA">Latvia</option>
	<option value="LBN">Lebanon</option>
	<option value="LSO">Lesotho</option>
	<option value="LBR">Liberia</option>
	<option value="LBY">Libyan Arab Jamahiriya</option>
	<option value="LTU">Lithuania</option>
	<option value="LUX">Luxembourg</option>
	<option value="MAC">Macau (sar) China</option>
	<option value="MKD">Macedonia Former Yugoslav Republic of</option>
	<option value="MDG">Madagascar</option>
	<option value="MWI">Malawi</option>
	<option value="MYS">Malaysia</option>
	<option value="MDV">Maldives</option>
	<option value="MLI">Mali</option>
	<option value="MLT">Malta</option>
	<option value="MHL">Marshall Islands</option>
	<option value="MTQ">Martinique</option>
	<option value="MRT">Mauritania</option>
	<option value="MUS">Mauritius</option>
	<option value="MYT">Mayotte</option>
	<option value="MEX">Mexico</option>
	<option value="FSM">Micronesia Federated States of</option>
	<option value="MDA">Moldova Republic of</option>
	<option value="MCO">Monaco</option>
	<option value="MNG">Mongolia</option>
	<option value="MNE">Montenegro</option>
	<option value="MSR">Montserrat, Leeward Islands</option>
	<option value="MAR">Morocco</option>
	<option value="MOZ">Mozambique</option>
	<option value="MMR">Myanmar</option>
	<option value="NAM">Namibia</option>
	<option value="NRU">Nauru</option>
	<option value="NPL">Nepal</option>
	<option value="NLD">Netherlands</option>
	<option value="ANT">Netherlands Antilles</option>
	<option value="NCL">New Caledonia</option>
	<option value="NZL">New Zealand</option>
	<option value="NIC">Nicaragua</option>
	<option value="NER">Niger</option>
	<option value="NGA">Nigeria</option>
	<option value="NIU">Niue</option>
	<option value="NFK">Norfolk Island</option>
	<option value="MNP">Northern Mariana Islands (except Guam)</option>
	<option value="NOR">Norway</option>
	<option value="OMN">Oman</option>
	<option value="PAK">Pakistan</option>
	<option value="PLW">Palau</option>
	<option value="PSE">Palestine</option>
	<option value="PAN">Panama</option>
	<option value="PNG">Papua New Guinea</option>
	<option value="PRY">Paraguay</option>
	<option value="PER">Peru</option>
	<option value="PHL">Philippines</option>
	<option value="POL">Poland</option>
	<option value="PRT">Portugal</option>
	<option value="PRI">Puerto Rico</option>
	<option value="QAT">Qatar</option>
	<option value="REU">Reunion</option>
	<option value="ROU">Romania</option>
	<option value="RUS">Russian Federation</option>
	<option value="RWA">Rwanda</option>
	<option value="SHN">Saint Helena</option>
	<option value="KNA">Saint Kitts and Nevis, Leeward Islands</option>
	<option value="LCA">Saint Lucia</option>
	<option value="SPM">Saint Pierre and Miquelon</option>
	<option value="WSM">Samoa</option>
	<option value="STP">Sao Tome and Principe</option>
	<option value="SAU">Saudi Arabia</option>
	<option value="SEN">Senegal</option>
	<option value="SRB">Serbia</option>
	<option value="SYC">Seychelles</option>
	<option value="SLE">Sierra Leone</option>
	<option value="SGP">Singapore</option>
	<option value="SVK">Slovakia</option>
	<option value="SVN">Slovenia</option>
	<option value="SLB">Solomon Islands</option>
	<option value="SOM">Somalia</option>
	<option value="ZAF">South Africa</option>
	<option value="ESP">Spain</option>
	<option value="LKA">Sri Lanka</option>
	<option value="VCT">St Vincent and the Grenadines</option>
	<option value="SDN">Sudan</option>
	<option value="SUR">Suriname</option>
	<option value="SWZ">Swaziland</option>
	<option value="SWE">Sweden</option>
	<option value="CHE">Switzerland</option>
	<option value="SYR">Syrian Arab Republic</option>
	<option value="TWN">Taiwan</option>
	<option value="TJK">Tajikistan</option>
	<option value="TZA">Tanzania United Republic of</option>
	<option value="THA">Thailand</option>
	<option value="TLS">Timor-leste</option>
	<option value="TGO">Togo</option>
	<option value="TON">Tonga</option>
	<option value="TTO">Trinidad and Tobago</option>
	<option value="TUN">Tunisia</option>
	<option value="TUR">Turkey</option>
	<option value="TKM">Turkmenistan</option>
	<option value="TCA">Turks and Caicos Islands</option>
	<option value="TUV">Tuvalu</option>
	<option value="UGA">Uganda</option>
	<option value="UKR">Ukraine</option>
	<option value="ARE">United Arab Emirates</option>
	<option value="GBR">United Kingdom</option>
	<option value="USA">United States</option>
	<option value="URY">Uruguay</option>
	<option value="UZB">Uzbekistan</option>
	<option value="VUT">Vanuatu</option>
	<option value="VEN">Venezuela</option>
	<option value="VMN">Vietnam</option>
	<option value="VGB">Virgin Islands, British</option>
	<option value="VIR">Virgin Islands, Us</option>
	<option value="WLF">Wallis and Futuna Islands</option>
	<option value="YEM">Yemen</option>
	<option value="ZMB">Zambia</option>
	<option value="ZWE">Zimbabwe</option>

</select>
							</td>
							<td>
							    <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_Nationality">Nationality <span class="redstar">*</span></span>
							    <br />
								<select name="UserControl_EditParticular$Repeater_Adult$ctl01$Dropdownlist_Nationality" id="UserControl_EditParticular_Repeater_Adult_ctl01_Dropdownlist_Nationality" class="width200 goSearch reqfieldWhite" MaxLength="50">
	<option selected="selected" value="0">&lt;Please Select&gt;</option>
	<option value="40">China</option>
	<option value="89">Hong Kong (SAR) China</option>
	<option value="161">Philippines</option>
	<option value="177">Singapore</option>
	<option value="199">Thailand</option>
	<option value="211">United Arab Emirates</option>
	<option value="0">--------------------------------</option>
	<option value="1">Afghanistan</option>
	<option value="2">Albania</option>
	<option value="3">Algeria</option>
	<option value="4">American Samoa</option>
	<option value="5">Angola</option>
	<option value="6">Anguilla</option>
	<option value="7">Antigua &amp; Barbuda</option>
	<option value="8">Argentina</option>
	<option value="9">Armenia</option>
	<option value="10">Aruba</option>
	<option value="11">Australia</option>
	<option value="12">Austria</option>
	<option value="13">Azerbaijan</option>
	<option value="14">Bahamas</option>
	<option value="15">Bahrain</option>
	<option value="16">Bangladesh</option>
	<option value="17">Barbados</option>
	<option value="18">Belarus</option>
	<option value="19">Belgium</option>
	<option value="20">Belize</option>
	<option value="21">Benin</option>
	<option value="22">Bermuda</option>
	<option value="23">Bhutan</option>
	<option value="24">Bolivia</option>
	<option value="25">Bosnia &amp; Herzegovina</option>
	<option value="26">Botswana</option>
	<option value="27">Brazil</option>
	<option value="31">Brundi</option>
	<option value="28">Brunei Darussalam</option>
	<option value="29">Bulgaria</option>
	<option value="30">Burkina Faso</option>
	<option value="32">Cambodia</option>
	<option value="33">Cameroon</option>
	<option value="34">Canada</option>
	<option value="35">Cape Verde</option>
	<option value="36">Cayman Islands</option>
	<option value="37">Central African Republic</option>
	<option value="38">Chad</option>
	<option value="39">Chile</option>
	<option value="40">China</option>
	<option value="41">Christmas Islands</option>
	<option value="42">Cocos (Keeling) Islands</option>
	<option value="43">Colombia</option>
	<option value="44">Comoros</option>
	<option value="45">Congo Brazzaville</option>
	<option value="46">Congo Democratic Republic of</option>
	<option value="47">Cook Islands</option>
	<option value="48">Costa Rica</option>
	<option value="49">Cote D' Ivoire</option>
	<option value="50">Croatia</option>
	<option value="51">Cuba</option>
	<option value="52">Cyprus</option>
	<option value="53">Czech Republic</option>
	<option value="54">Denmark</option>
	<option value="55">Djibouti</option>
	<option value="56">Dominica</option>
	<option value="57">Dominican Republic</option>
	<option value="58">Ecuador</option>
	<option value="59">Egypt</option>
	<option value="60">El Salvador</option>
	<option value="61">Equatorial Guinea</option>
	<option value="62">Eritrea</option>
	<option value="63">Estonia</option>
	<option value="64">Ethiopia</option>
	<option value="65">Falkland Islands</option>
	<option value="66">Faroe Islands</option>
	<option value="67">Fiji</option>
	<option value="68">Finland</option>
	<option value="69">France</option>
	<option value="70">French Guiana</option>
	<option value="71">French Polynesia</option>
	<option value="72">Gabon</option>
	<option value="73">Gambia</option>
	<option value="74">Georgia</option>
	<option value="75">Germany</option>
	<option value="76">Ghana</option>
	<option value="77">Gibraltar</option>
	<option value="78">Greece</option>
	<option value="79">Greenland</option>
	<option value="80">Grenada, Windward Islands</option>
	<option value="81">Guadeloupe</option>
	<option value="82">Guam</option>
	<option value="83">Guatemala</option>
	<option value="84">Guinea</option>
	<option value="85">Guinea-Bissau</option>
	<option value="86">Guyana</option>
	<option value="87">Haiti</option>
	<option value="88">Honduras</option>
	<option value="89">Hong Kong (SAR) China</option>
	<option value="90">Hungary</option>
	<option value="91">Iceland</option>
	<option value="92">India</option>
	<option value="93">Indonesia</option>
	<option value="94">Iran</option>
	<option value="95">Iraq</option>
	<option value="96">Ireland Republic of</option>
	<option value="97">Israel</option>
	<option value="98">Italy</option>
	<option value="99">Jamaica</option>
	<option value="100">Japan</option>
	<option value="101">Jordan</option>
	<option value="102">Kazakhstan</option>
	<option value="103">Kenya</option>
	<option value="104">Kiribati</option>
	<option value="105">Korea (North)</option>
	<option value="106">Korea (South)</option>
	<option value="107">Kuwait</option>
	<option value="108">Kyrgyzstan</option>
	<option value="109">Lao People's Democratic Republic</option>
	<option value="110">Latvia</option>
	<option value="111">Lebanon</option>
	<option value="112">Lesotho</option>
	<option value="113">Liberia</option>
	<option value="114">Libyan Arab Jamahiriya</option>
	<option value="115">Lithuania</option>
	<option value="116">Luxembourg</option>
	<option value="117">Macao (SAR) China</option>
	<option value="118">Macedonia </option>
	<option value="119">Madagascar Island</option>
	<option value="120">Malawi</option>
	<option value="121">Malaysia</option>
	<option value="122">Maldives</option>
	<option value="123">Mali</option>
	<option value="124">Malta</option>
	<option value="125">Marshall Islands</option>
	<option value="126">Martinique</option>
	<option value="127">Mauritania</option>
	<option value="128">Mauritius</option>
	<option value="129">Mayotte</option>
	<option value="130">Mexico</option>
	<option value="131">Micronesia</option>
	<option value="132">Moldova Republic of</option>
	<option value="133">Monaco</option>
	<option value="134">Mongolia</option>
	<option value="135">Montenegro</option>
	<option value="136">Montserrat</option>
	<option value="137">Morocco</option>
	<option value="138">Mozambique</option>
	<option value="139">Myanmar</option>
	<option value="140">Namibia</option>
	<option value="141">Nauru</option>
	<option value="142">Nepal</option>
	<option value="143">Netherlands</option>
	<option value="144">Netherlands Antilles</option>
	<option value="145">New Caledonia</option>
	<option value="146">New Zealand</option>
	<option value="147">Nicaragua</option>
	<option value="148">Niger</option>
	<option value="149">Nigeria</option>
	<option value="150">Niue</option>
	<option value="151">Norfolk Islands</option>
	<option value="152">Northern Mariana Islands</option>
	<option value="153">Norway</option>
	<option value="154">Oman</option>
	<option value="155">Pakistan</option>
	<option value="156">Palau</option>
	<option value="226">Palestine</option>
	<option value="157">Panama</option>
	<option value="158">Papua New Guinea</option>
	<option value="159">Paraguay</option>
	<option value="160">Peru</option>
	<option value="161">Philippines</option>
	<option value="162">Poland</option>
	<option value="163">Portugal</option>
	<option value="164">Puerto Rico</option>
	<option value="165">Qatar</option>
	<option value="166">Reunion</option>
	<option value="167">Romania</option>
	<option value="168">Russia Federation</option>
	<option value="169">Rwanda</option>
	<option value="170">Samoa</option>
	<option value="171">Sao Tome &amp; Principe</option>
	<option value="172">Saudi Arabia</option>
	<option value="173">Senegal</option>
	<option value="174">Serbia</option>
	<option value="175">Seychelles</option>
	<option value="176">Sierra Leone</option>
	<option value="177">Singapore</option>
	<option value="178">Slovakia</option>
	<option value="179">Slovenia</option>
	<option value="180">Solomon Islands</option>
	<option value="181">Somalia</option>
	<option value="182">South Africa</option>
	<option value="183">Spain</option>
	<option value="184">Sri Lanka</option>
	<option value="185">St Helena</option>
	<option value="186">St Kitts &amp; Nevis</option>
	<option value="187">St Lucia</option>
	<option value="188">St Pierre &amp; Miquelon</option>
	<option value="189">St Vincent &amp; the Grenadines</option>
	<option value="190">Sudan</option>
	<option value="191">Suriname</option>
	<option value="192">Swaziland</option>
	<option value="193">Sweden</option>
	<option value="194">Switzerland</option>
	<option value="195">Syrian Arab Republic</option>
	<option value="196">Taiwan</option>
	<option value="197">Tajikistan</option>
	<option value="198">Tanzania United Republic of</option>
	<option value="199">Thailand</option>
	<option value="200">Timor-Leste</option>
	<option value="201">Togo</option>
	<option value="202">Tonga</option>
	<option value="203">Trinidad &amp; Tobago</option>
	<option value="204">Tunisia</option>
	<option value="205">Turkey</option>
	<option value="206">Turkmenistan</option>
	<option value="207">Turks &amp; Caicos Islands</option>
	<option value="208">Tuvalu</option>
	<option value="209">Uganda</option>
	<option value="210">Ukraine</option>
	<option value="211">United Arab Emirates</option>
	<option value="212">United Kingdom Citizens</option>
	<option value="213">United Kingdom Nationals Overseas</option>
	<option value="214">United States of America</option>
	<option value="215">Uruguay</option>
	<option value="216">Uzbekistan</option>
	<option value="217">Vanuatu</option>
	<option value="218">Venezuela</option>
	<option value="219">Vietnam</option>
	<option value="220">Virgin Islands, British</option>
	<option value="221">Virgin Islands, USA</option>
	<option value="222">Wallis &amp; Futuna Islands</option>
	<option value="223">Yemen</option>
	<option value="224">Zambia</option>
	<option value="225">Zimbabwe</option>

</select>
								
							</td>
						</tr>
						<tr class="back_lighter_2">
						<td></td>
						
						    <td >
					            <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_PassportExpiry">Passport Expiry Date <span class="redstar">*</span></span>
				            </td>
				            <td>
				                <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_Birthday">Birthdate <span class="redstar">*</span></span>
							</td>
						</tr>
						<tr class="back_lighter_2">
						<td></td>
						    <td>
					            <input name="UserControl_EditParticular$Repeater_Adult$ctl01$DateSelection_PPExpiryDate$hidden_SelectedDate" type="hidden" id="UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_hidden_SelectedDate" /></input>
<table border="0" cellpadding="0" cellspacing="0">
    
    <tr>
        <td>
            <select name="UserControl_EditParticular$Repeater_Adult$ctl01$DateSelection_PPExpiryDate$Dropdownlist_Days" id="UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Days" class="width50 goSearch reqfield" onChange="PopulateDays('UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Days', 'UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Month','UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Year','false','','','','false','','','')">
	<option selected="selected" value="DD">DD</option>
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
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>

</select></td>
        <td>
            <select name="UserControl_EditParticular$Repeater_Adult$ctl01$DateSelection_PPExpiryDate$Dropdownlist_Month" id="UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Month" class="width60 goSearch reqfield" onChange="PopulateDays('UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Days', 'UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Month','UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Year','false','','','','false','','','')">
	<option selected="selected" value="MMM">MMM</option>
	<option value="1">Jan</option>
	<option value="2">Feb</option>
	<option value="3">Mar</option>
	<option value="4">Apr</option>
	<option value="5">May</option>
	<option value="6">Jun</option>
	<option value="7">Jul</option>
	<option value="8">Aug</option>
	<option value="9">Sep</option>
	<option value="10">Oct</option>
	<option value="11">Nov</option>
	<option value="12">Dec</option>

</select></td>
        <td>
            <select name="UserControl_EditParticular$Repeater_Adult$ctl01$DateSelection_PPExpiryDate$Dropdownlist_Year" id="UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Year" class="width60 goSearch reqfield" onChange="PopulateDays('UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Days', 'UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Month','UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_PPExpiryDate_Dropdownlist_Year','false','','','','false','','','')">
	<option selected="selected" value="YYYY">YYYY</option>
	<option value="2016">2016</option>
	<option value="2017">2017</option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
	<option value="2023">2023</option>
	<option value="2024">2024</option>
	<option value="2025">2025</option>
	<option value="2026">2026</option>
	<option value="2027">2027</option>
	<option value="2028">2028</option>
	<option value="2029">2029</option>
	<option value="2030">2030</option>

</select></td>
        
    </tr>
     
</table>
				            </td>
				            <td>
				                <input name="UserControl_EditParticular$Repeater_Adult$ctl01$DateSelection_Birthdate$hidden_SelectedDate" type="hidden" id="UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_hidden_SelectedDate" />
<table border="0" cellpadding="0" cellspacing="0">
    
    <tr>
        <td>
            <select name="UserControl_EditParticular$Repeater_Adult$ctl01$DateSelection_Birthdate$Dropdownlist_Days" id="UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Days" class="width50 goSearch reqfield" onChange="PopulateDays('UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Days', 'UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Month','UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Year','false','','','','false','','','')">
	<option selected="selected" value="DD">DD</option>
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
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>

</select></td>
        <td>
            <select name="UserControl_EditParticular$Repeater_Adult$ctl01$DateSelection_Birthdate$Dropdownlist_Month" id="UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Month" class="width60 goSearch reqfield" onChange="PopulateDays('UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Days', 'UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Month','UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Year','false','','','','false','','','')">
	<option selected="selected" value="MMM">MMM</option>
	<option value="1">Jan</option>
	<option value="2">Feb</option>
	<option value="3">Mar</option>
	<option value="4">Apr</option>
	<option value="5">May</option>
	<option value="6">Jun</option>
	<option value="7">Jul</option>
	<option value="8">Aug</option>
	<option value="9">Sep</option>
	<option value="10">Oct</option>
	<option value="11">Nov</option>
	<option value="12">Dec</option>

</select></td>
        <td>
            <select name="UserControl_EditParticular$Repeater_Adult$ctl01$DateSelection_Birthdate$Dropdownlist_Year" id="UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Year" class="width60 goSearch reqfield" onChange="PopulateDays('UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Days', 'UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Month','UserControl_EditParticular_Repeater_Adult_ctl01_DateSelection_Birthdate_Dropdownlist_Year','false','','','','false','','','')">
	<option selected="selected" value="YYYY">YYYY</option>
	<option value="1916">1916</option>
	<option value="1917">1917</option>
	<option value="1918">1918</option>
	<option value="1919">1919</option>
	<option value="1920">1920</option>
	<option value="1921">1921</option>
	<option value="1922">1922</option>
	<option value="1923">1923</option>
	<option value="1924">1924</option>
	<option value="1925">1925</option>
	<option value="1926">1926</option>
	<option value="1927">1927</option>
	<option value="1928">1928</option>
	<option value="1929">1929</option>
	<option value="1930">1930</option>
	<option value="1931">1931</option>
	<option value="1932">1932</option>
	<option value="1933">1933</option>
	<option value="1934">1934</option>
	<option value="1935">1935</option>
	<option value="1936">1936</option>
	<option value="1937">1937</option>
	<option value="1938">1938</option>
	<option value="1939">1939</option>
	<option value="1940">1940</option>
	<option value="1941">1941</option>
	<option value="1942">1942</option>
	<option value="1943">1943</option>
	<option value="1944">1944</option>
	<option value="1945">1945</option>
	<option value="1946">1946</option>
	<option value="1947">1947</option>
	<option value="1948">1948</option>
	<option value="1949">1949</option>
	<option value="1950">1950</option>
	<option value="1951">1951</option>
	<option value="1952">1952</option>
	<option value="1953">1953</option>
	<option value="1954">1954</option>
	<option value="1955">1955</option>
	<option value="1956">1956</option>
	<option value="1957">1957</option>
	<option value="1958">1958</option>
	<option value="1959">1959</option>
	<option value="1960">1960</option>
	<option value="1961">1961</option>
	<option value="1962">1962</option>
	<option value="1963">1963</option>
	<option value="1964">1964</option>
	<option value="1965">1965</option>
	<option value="1966">1966</option>
	<option value="1967">1967</option>
	<option value="1968">1968</option>
	<option value="1969">1969</option>
	<option value="1970">1970</option>
	<option value="1971">1971</option>
	<option value="1972">1972</option>
	<option value="1973">1973</option>
	<option value="1974">1974</option>
	<option value="1975">1975</option>
	<option value="1976">1976</option>
	<option value="1977">1977</option>
	<option value="1978">1978</option>
	<option value="1979">1979</option>
	<option value="1980">1980</option>
	<option value="1981">1981</option>
	<option value="1982">1982</option>
	<option value="1983">1983</option>
	<option value="1984">1984</option>
	<option value="1985">1985</option>
	<option value="1986">1986</option>
	<option value="1987">1987</option>
	<option value="1988">1988</option>
	<option value="1989">1989</option>
	<option value="1990">1990</option>
	<option value="1991">1991</option>
	<option value="1992">1992</option>
	<option value="1993">1993</option>
	<option value="1994">1994</option>
	<option value="1995">1995</option>
	<option value="1996">1996</option>
	<option value="1997">1997</option>
	<option value="1998">1998</option>
	<option value="1999">1999</option>
	<option value="2000">2000</option>
	<option value="2001">2001</option>
	<option value="2002">2002</option>
	<option value="2003">2003</option>
	<option value="2004">2004</option>

</select></td>
       
        
    </tr>
     
</table>

								
							</td>
						</tr>
						<tr class="back_lighter_2">
						<td></td>
						    <td colspan="2" class="hideshow">
                                <a id="UserControl_EditParticular_Repeater_Adult_ctl01_HyperLink_FrequentFlyer" class="trigger expand" onclick="ToggleFrequentFlyer('UserControl_EditParticular_Repeater_Adult_ctl01_HiddenField_FrequentFlyer','UserControl_EditParticular_Repeater_Adult_ctl01_tr_FrequentFlyer')" href="javascript:void(0);">Frequent flyer Programme (optional)</a>
                                <input type="hidden" name="UserControl_EditParticular$Repeater_Adult$ctl01$HiddenField_FrequentFlyer" id="UserControl_EditParticular_Repeater_Adult_ctl01_HiddenField_FrequentFlyer" value="0" />
                                <script type='text/javascript'>setTimeout("FrequentFlyerMaintenanceVal('UserControl_EditParticular_Repeater_Adult_ctl01_HiddenField_FrequentFlyer','UserControl_EditParticular_Repeater_Adult_ctl01_tr_FrequentFlyer')", 0);</script>
						    </td>
						    <td></td>
					    </tr>
						<tr id="UserControl_EditParticular_Repeater_Adult_ctl01_tr_FrequentFlyer" class="back_lighter_2" style="display:none;">
	<td>
						        <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_AirlineList">Frequent Flyer Type</span>
						        <br />
					            <select name="UserControl_EditParticular$Repeater_Adult$ctl01$DropDownList_Airline" id="UserControl_EditParticular_Repeater_Adult_ctl01_DropDownList_Airline" class="width200 goSearch" style="width:200px;">
		<option value="0">&lt;Please Select&gt;</option>
		<option value="JP">Adria Airways</option>
		<option value="A3">Aegean Airlines</option>
		<option value="EI">Aer Lingus</option>
		<option value="SU">Aeroflot Russian Airlines</option>
		<option value="AR">Aerolineas Argentinas</option>
		<option value="AM">AeroM&#233;xico</option>
		<option value="P5">Aerorepublica S.A.</option>
		<option value="A6">Air Alps Aviation</option>
		<option value="KC">Air Astana</option>
		<option value="BT">Air Baltic International</option>
		<option value="AC">Air Canada</option>
		<option value="CA">Air China</option>
		<option value="EN">Air Dolomiti</option>
		<option value="UX">Air Europa</option>
		<option value="AF">Air France</option>
		<option value="GL">Air Greenland</option>
		<option value="AI">Air India</option>
		<option value="JM">Air Jamaica</option>
		<option value="KM">Air Malta</option>
		<option value="NZ">Air New Zealand</option>
		<option value="PX">Air Niugini</option>
		<option value="TL">Air North Regional</option>
		<option value="FJ">Air Pacific</option>
		<option value="JU">Air Serbia</option>
		<option value="TN">Air Tahiti Nui</option>
		<option value="NF">Air Vanuatu</option>
		<option value="SB">Aircalin</option>
		<option value="A5">Airlinair</option>
		<option value="AS">Alaska Airlines</option>
		<option value="AZ">Alitalia</option>
		<option value="NH">All Nippon Airways</option>
		<option value="AQ">Aloha Airlines</option>
		<option value="HP">America West Airlines</option>
		<option value="AA">American Airlines</option>
		<option value="OZ">Asiana Airlines</option>
		<option value="RC">Atlantic Airways Faroe Islands</option>
		<option value="OS">Austrian </option>
		<option value="AV">Avianca</option>
		<option value="JD">Beijing Capital Airlines</option>
		<option value="GQ">Big Sky Airlines</option>
		<option value="KF">Blue1</option>
		<option value="BD">bmi</option>
		<option value="BU">Braathens</option>
		<option value="FQ">Brindabella Airlines</option>
		<option value="BA">British Airways</option>
		<option value="BW">BWIA West Indies Airways </option>
		<option value="CX">Cathay Pacific</option>
		<option value="KX">Cayman Airways</option>
		<option value="XK">CCM Airlines</option>
		<option value="EU">Chengdu Airlines</option>
		<option value="CI">China Airlines</option>
		<option value="MU">China Eastern</option>
		<option value="CZ">China Southern Airlines</option>
		<option value="KN">China United Airlines</option>
		<option value="C9">Cirrus Luftfahrtgesellschaft</option>
		<option value="CF">City Airline </option>
		<option value="WX">CITYJET</option>
		<option value="MN">Comair</option>
		<option value="DE">Condor</option>
		<option value="CO">Continental Airlines</option>
		<option value="CM">Copa Airlines</option>
		<option value="OU">Croatia Airlines</option>
		<option value="OK">CSA Czech Airlines</option>
		<option value="DI">dba</option>
		<option value="DL">Delta Air Lines</option>
		<option value="KA">Dragonair</option>
		<option value="U2">EasyJet</option>
		<option value="MS">EgyptAir</option>
		<option value="LY">El Al Israel Airlines</option>
		<option value="EK">Emirates</option>
		<option value="OV">Estonian Air</option>
		<option value="ET">Ethiopian Airlines</option>
		<option value="EY">Etihad Airways</option>
		<option value="GJ">Eurofly Spa</option>
		<option value="BR">Eva Air</option>
		<option value="FC">Finncomm Airlines</option>
		<option value="GA">Garuda Indonesia</option>
		<option value="DC">Golden Air</option>
		<option value="CN">Grand China Air</option>
		<option value="GF">Gulf Air Company</option>
		<option value="HA">Hawaiian Airlines</option>
		<option value="NS">Hebei Airlines</option>
		<option value="IB">Iberia</option>
		<option value="IC">Indian Airlines</option>
		<option value="WP">Island Air</option>
		<option value="JC">Jal Express</option>
		<option value="JO">Jalways</option>
		<option value="JL">Japan Airlines International</option>
		<option value="EG">Japan Asia Airways</option>
		<option value="NU">Japan Transocean Air</option>
		<option value="7C">Jeju Air</option>
		<option value="9W">JET Airways</option>
		<option value="JQ">Jetstar </option>
		<option value="3K">Jetstar Asia</option>
		<option value="KQ">Kenya Airways</option>
		<option value="IT">KINGFISHER AIRLINES</option>
		<option value="WA">KLM cityhopper</option>
		<option value="KL">KLM Royal Dutch Airlines</option>
		<option value="KE">Korean Air</option>
		<option value="KY">Kunming Airlines</option>
		<option value="LR">LACSA</option>
		<option value="LA">Lan Airlines</option>
		<option value="XL">Lan Ecuador</option>
		<option value="LP">Lan Peru</option>
		<option value="NG">Lauda Air Luftfahrt</option>
		<option value="LO">LOT Polish Airlines</option>
		<option value="LH">Lufthansa</option>
		<option value="LG">Luxair</option>
		<option value="CC">Macair Airlines</option>
		<option value="MH">Malaysia Airlines</option>
		<option value="MA">Mal&#233;v Hungarian Airlines</option>
		<option value="MP">Martinair</option>
		<option value="MX">Mexicana de Aviaci&#243;n</option>
		<option value="ME">Middle East Airlines</option>
		<option value="NC">National Jet Systems</option>
		<option value="JH">Nordeste-Linhas Aereas Regionais</option>
		<option value="NW">Northwest Airlines</option>
		<option value="WY">Oman Air</option>
		<option value="PR">Philippine Airlines</option>
		<option value="QF">Qantas</option>
		<option value="QR">Qatar Airways</option>
		<option value="QW">Qingdao Airlines</option>
		<option value="BI">Royal Brunei</option>
		<option value="RJ">Royal Jordanian</option>
		<option value="MM">SAM</option>
		<option value="SK">SAS - Scandinavian Airlines System</option>
		<option value="SC">Shandong Airlines</option>
		<option value="FT">Siem Reap Airways International Co., Ltd.</option>
		<option value="SQ">Singapore Airlines</option>
		<option value="JZ">Skyways AB</option>
		<option value="SN">SN Brussels Airlines</option>
		<option value="SA">South African Airways</option>
		<option value="JK">Spanair</option>
		<option value="UL">SriLankan</option>
		<option value="LX">Swiss</option>
		<option value="DT">TAAG-Angolan Airlines</option>
		<option value="TA">TACA</option>
		<option value="JJ">TAM Linhas A&#233;reas</option>
		<option value="TP">TAP Portugal</option>
		<option value="TG">Thai Airways International</option>
		<option value="TK">THY Turkish Airlines</option>
		<option value="GS">Tianjin Airlines</option>
		<option value="T7">Twin Jet</option>
		<option value="VO">Tyrolean Airways</option>
		<option value="PS">Ukraine International Airlines</option>
		<option value="UA">United Airlines</option>
		<option value="US">US Airways</option>
		<option value="RG">Varig</option>
		<option value="VM">Viaggio Air</option>
		<option value="VN">Vietnam Airlines</option>
		<option value="VS">Virgin Atlantic</option>
		<option value="MF">Xiamen Airlines</option>

	</select>
				            </td>
	<td>
				                <span id="UserControl_EditParticular_Repeater_Adult_ctl01_Label_FlyerNumber">Frequent Flyer Number</span>
						        <br />
				                <input name="UserControl_EditParticular$Repeater_Adult$ctl01$TextBox_FlyerNumber" type="text" maxlength="15" id="UserControl_EditParticular_Repeater_Adult_ctl01_TextBox_FlyerNumber" class="width180 goSearch" />
							</td>
</tr>

						<tr>
						    <td colspan="2"></td>
							<td colspan="2">
								<table cellpadding="0" cellspacing="0" border="0">
																											
																		
									
								</table>
							</td>
						</tr>
						
					</table>
				
			
			
		</td>
	</tr>
</table>
<div class="smallspace"></div>
<table border="0" cellpadding="0" cellspacing="0" class="box1"> 
	<tr class="back_lighter_2">
		<td><p><span id="UserControl_EditParticular_Label_Remark">
			1. Please enter name as shown in passport <br />
2. Only names in English alphabets are allowed <br />
			3. Passport No. must be in full, with any alphabets included<br />
			4. If you do not have a last name, please enter your first name in the Last Name field.
		</span>
			</p>
		</td>
	</tr>
</table>
<style type="text/css">
.ToolTipStyle   {
                    display:none; 
                    z-index:1000; 
                    position:absolute; 
                    background-color:#FFFFFF; 
                    font-size:11px; 
                    border:1px solid #B1C9D5;
                    width:400px; 
                    padding: 5px 5px 5px 5px; 
                    cursor: pointer; 
                    -webkit-box-shadow: 0px 1px 5px 0px #4a4a4a;
                    -moz-box-shadow: 0px 1px 5px 0px #4a4a4a;
                    box-shadow: 0px 1px 5px 0px #4a4a4a;
                }

</style>

<div id="ToolTipPassengerName" class="ToolTipStyle">
    <span id="UserControl_EditParticular_Label_ToolTipPassengerName">Please key in your name as per how it is shown in your passport. However, there are some exceptions which are addressed as follows: <br /><br />
1) For Malay/Indian passenger please follow the sequence as it appears in your passport. You may omit Bin, Binte, s/o or d/o.<br />
2) If you name exceed 48 character (including spacing), you may use initial for your middle name.<br />
3) For passenger with multiple Chinese names on the passport e.g.  Tan xxx zzzz (Chen xxx zzzz), please use the name : Tan xxx zzzz or
Tan xxx zzzz @ Chen xxx zzzz, please use the name : Tan xxx zzzz<br />
<br />
Once name/s are submitted to the airlines for your seat reservation, changes of name/s or name/s enter cause by spelling mistake will not be permitted.</span>
</div>

<script type="text/javascript">
function ToggleFrequentFlyer(oHiddenField,otrFrequentFlyer)
    {
        if ($("#"+oHiddenField).val() == '0') {
            $("#"+oHiddenField).val('1');
            $("#"+otrFrequentFlyer).show();
        }
        else {
            $("#"+oHiddenField).val('0');
            $("#"+otrFrequentFlyer).hide();
        }
    }
    function FrequentFlyerMaintenanceVal(oHiddenField,otrFrequentFlyer)
    {
        if ($("#"+oHiddenField).val() == '0') {
            $("#"+otrFrequentFlyer).hide();
        }
        else {
            $("#"+otrFrequentFlyer).show();
        }
    }
    
    function ToolTipShow(obj) 
    {
        var p = $("#"+obj.id);
        var position = p.position();
        
        $('#ToolTipPassengerName').show();
        $("#ToolTipPassengerName").css({ top:(position.top+20)+'px', left:(position.left-200)+'px' });
    }

    function ToolTipHide(obj) {
        $('#ToolTipPassengerName').hide();
    }
</script>

								    
								    
								</div>
								<div class="smallspace"></div>
								
<script type="text/javascript" src="../js/hint-textbox.js"></script>
<style type="text/css" >
        INPUT.hintTextbox { color: #888; } 
        INPUT.hintTextboxActive { color: Gray; }
</style>
<table class="box2" cellspacing="0" cellpadding="0" border="0">
	<tr class="back_lighterNew">
		
		<td >
		    <p><b><span id="UserControl_EditPayContactMin_Label_Header">Contact Details</span></b></p>
		</td>
		<td align="right" >
		    <p style="font-size:10px"><span id="UserControl_EditPayContactMin_Label_RequiredFields"><span style="FONT-WEIGHT: normal;font-size:10px;"><i>Required Fields</i></span><span class="redstarSmall">*</span>&nbsp;</span></p>
		</td>
	</tr>
	<tr class="back_lighter_2">
		<td colspan="3" >
			<table cellspacing="0" cellpadding="0" border="0">
				<tr>
					<td>
					    <span id="UserControl_EditPayContactMin_Label_Title">Title <SPAN class="redstar">*</SPAN></span>
					    <br />
					    <select name="UserControl_EditPayContactMin$DropDownList_Title" id="UserControl_EditPayContactMin_DropDownList_Title" class="width60 goSearch reqfieldWhite">
	<option selected="selected" value="Mr">Mr</option>
	<option value="Mrs">Mrs</option>
	<option value="Mdm">Mdm</option>
	<option value="Mstr">Mstr</option>
	<option value="Ms">Miss</option>
	<option value="Dr">Dr</option>

</select>
						
					</td>
					<td>
					    <span id="UserControl_EditPayContactMin_Label_FirstName">First Name e.g. WEE KIN <SPAN class="redstar">*</SPAN></span>
					    <br />
					    <input name="UserControl_EditPayContactMin$Textbox_FirstName" type="text" maxlength="50" id="UserControl_EditPayContactMin_Textbox_FirstName" class="width180 goSearch reqfieldWhite" />
					    
					</td>
					<td>
					    <span id="UserControl_EditPayContactMin_Label_LastName">Family Name e.g. NG <SPAN class="redstar">*</SPAN></span>
					    <br />
						<input name="UserControl_EditPayContactMin$Textbox_LastName" type="text" maxlength="50" id="UserControl_EditPayContactMin_Textbox_LastName" class="width180 goSearch reqfieldWhite" />
					        
					</td>
				</tr>
				<tr>
				    <td>
					</td>
					<td>
					</td>
					<td>
					    <span id="UserControl_EditPayContactMin_Label_Email">Email <span class="redstar">*</span></span>
					    <br />
					    <input name="UserControl_EditPayContactMin$Textbox_Email" type="text" maxlength="100" id="UserControl_EditPayContactMin_Textbox_Email" class="width180 goSearch reqfieldWhite" /> 
		               
			            
                        
                        
					</td>
					<td>
					    <span id="UserControl_EditPayContactMin_Label_AlternateEmail">Alternate Email</span>
					     <input name="UserControl_EditPayContactMin$Textbox_AlternateEmail" type="text" maxlength="100" id="UserControl_EditPayContactMin_Textbox_AlternateEmail" class="width180 goSearch" />
		                
					</td>
				</tr>
				<tr>
				    <td>
					</td>
					<td>
					    
		                
					</td>
					<td >
					    <span id="UserControl_EditPayContactMin_Label_ContactNo">Emergency Contact No <span class="redstar">*</span></span>
					   
					   <br />
					    <select name="UserControl_EditPayContactMin$DropDownList_CountryCode" id="UserControl_EditPayContactMin_DropDownList_CountryCode" class="width200 goSearch reqfieldWhite">
	<option value="0">&lt;Select Country Code&gt;</option>
	<option value="86">China (+86)</option>
	<option value="852">Hong Kong (sar) China (+852)</option>
	<option value="63">Philippines (+63)</option>
	<option value="65">Singapore (+65)</option>
	<option value="66">Thailand (+66)</option>
	<option value="971">United Arab Emirates (+971)</option>
	<option value="0">--------------------------------</option>
	<option value="93">Afghanistan (+93)</option>
	<option value="355">Albania (+355)</option>
	<option value="213">Algeria (+213)</option>
	<option value="684">American Samoa (+684)</option>
	<option value="244">Angola (+244)</option>
	<option value="1">Anguilla, Leeward Islands (+1)</option>
	<option value="1268">Antigua and Barbuda, Leeward Islands (+1268)</option>
	<option value="54">Argentina (+54)</option>
	<option value="374">Armenia (+374)</option>
	<option value="297">Aruba (+297)</option>
	<option value="61">Australia (+61)</option>
	<option value="43">Austria (+43)</option>
	<option value="994">Azerbaijan (+994)</option>
	<option value="1242">Bahamas (+1242)</option>
	<option value="973">Bahrain (+973)</option>
	<option value="880">Bangladesh (+880)</option>
	<option value="1246">Barbados (+1246)</option>
	<option value="375">Belarus (+375)</option>
	<option value="32">Belgium (+32)</option>
	<option value="501">Belize (+501)</option>
	<option value="229">Benin (+229)</option>
	<option value="1441">Bermuda (+1441)</option>
	<option value="975">Bhutan (+975)</option>
	<option value="591">Bolivia (+591)</option>
	<option value="387">Bosnia and Herzegovina (+387)</option>
	<option value="267">Botswana (+267)</option>
	<option value="55">Brazil (+55)</option>
	<option value="673">Brunei Darussalam (+673)</option>
	<option value="359">Bulgaria (+359)</option>
	<option value="226">Burkina Faso (+226)</option>
	<option value="257">Burundi (+257)</option>
	<option value="855">Cambodia (+855)</option>
	<option value="237">Cameroon (+237)</option>
	<option value="1">Canada (+1)</option>
	<option value="238">Cape Verde (+238)</option>
	<option value="1345">Cayman Islands (+1345)</option>
	<option value="236">Central African Republic (+236)</option>
	<option value="235">Chad (+235)</option>
	<option value="56">Chile (+56)</option>
	<option value="86">China (+86)</option>
	<option value="61">Christmas Island, Indian Ocean (+61)</option>
	<option value="61">Cocos (keeling) Islands (+61)</option>
	<option value="57">Colombia (+57)</option>
	<option value="269">Comoros (+269)</option>
	<option value="242">Congo (+242)</option>
	<option value="243">Congo Democratic Republic of (+243)</option>
	<option value="682">Cook Islands (+682)</option>
	<option value="506">Costa Rica (+506)</option>
	<option value="225">Cote D'Ivoire (+225)</option>
	<option value="385">Croatia (+385)</option>
	<option value="53">Cuba (+53)</option>
	<option value="357">Cyprus (+357)</option>
	<option value="420">Czech Republic (+420)</option>
	<option value="45">Denmark (+45)</option>
	<option value="253">Djibouti (+253)</option>
	<option value="1">Dominica (+1)</option>
	<option value="1809">Dominican Republic (+1809)</option>
	<option value="593">Ecuador (+593)</option>
	<option value="20">Egypt (+20)</option>
	<option value="503">El Salvador (+503)</option>
	<option value="240">Equatorial Guinea (+240)</option>
	<option value="291">Eritrea (+291)</option>
	<option value="372">Estonia (+372)</option>
	<option value="251">Ethiopia (+251)</option>
	<option value="500">Falkland Islands (+500)</option>
	<option value="298">Faroe Islands (+298)</option>
	<option value="679">Fiji (+679)</option>
	<option value="358">Finland (+358)</option>
	<option value="33">France (+33)</option>
	<option value="594">French Guiana (+594)</option>
	<option value="689">French Polynesia (+689)</option>
	<option value="241">Gabon (+241)</option>
	<option value="220">Gambia (+220)</option>
	<option value="995">Georgia (+995)</option>
	<option value="49">Germany (+49)</option>
	<option value="233">Ghana (+233)</option>
	<option value="350">Gibraltar (+350)</option>
	<option value="30">Greece (+30)</option>
	<option value="299">Greenland (+299)</option>
	<option value="1">Grenada, Windward Islands (+1)</option>
	<option value="590">Guadeloupe (+590)</option>
	<option value="1671">Guam (+1671)</option>
	<option value="502">Guatemala (+502)</option>
	<option value="224">Guinea (+224)</option>
	<option value="245">Guinea-Bissau (+245)</option>
	<option value="592">Guyana (+592)</option>
	<option value="509">Haiti (+509)</option>
	<option value="504">Honduras (+504)</option>
	<option value="852">Hong Kong (sar) China (+852)</option>
	<option value="36">Hungary (+36)</option>
	<option value="354">Iceland (+354)</option>
	<option value="91">India (+91)</option>
	<option value="62">Indonesia (+62)</option>
	<option value="98">Iran Islamic Republic of (+98)</option>
	<option value="964">Iraq (+964)</option>
	<option value="353">Ireland Republic of (+353)</option>
	<option value="972">Israel (+972)</option>
	<option value="39">Italy (+39)</option>
	<option value="1876">Jamaica (+1876)</option>
	<option value="81">Japan (+81)</option>
	<option value="962">Jordan (+962)</option>
	<option value="7">Kazakhstan (+7)</option>
	<option value="254">Kenya (+254)</option>
	<option value="686">Kiribati (+686)</option>
	<option value="850">Korea (North) (+850)</option>
	<option value="82">Korea (South) (+82)</option>
	<option value="965">Kuwait (+965)</option>
	<option value="996">Kyrgyzstan (+996)</option>
	<option value="856">Lao People's Democratic Republic (+856)</option>
	<option value="371">Latvia (+371)</option>
	<option value="961">Lebanon (+961)</option>
	<option value="266">Lesotho (+266)</option>
	<option value="231">Liberia (+231)</option>
	<option value="218">Libyan Arab Jamahiriya (+218)</option>
	<option value="370">Lithuania (+370)</option>
	<option value="352">Luxembourg (+352)</option>
	<option value="853">Macau (sar) China (+853)</option>
	<option value="389">Macedonia Former Yugoslav Republic of (+389)</option>
	<option value="261">Madagascar (+261)</option>
	<option value="265">Malawi (+265)</option>
	<option value="60">Malaysia (+60)</option>
	<option value="960">Maldives (+960)</option>
	<option value="223">Mali (+223)</option>
	<option value="356">Malta (+356)</option>
	<option value="692">Marshall Islands (+692)</option>
	<option value="596">Martinique (+596)</option>
	<option value="222">Mauritania (+222)</option>
	<option value="230">Mauritius (+230)</option>
	<option value="262">Mayotte (+262)</option>
	<option value="52">Mexico (+52)</option>
	<option value="691">Micronesia Federated States of (+691)</option>
	<option value="373">Moldova Republic of (+373)</option>
	<option value="377">Monaco (+377)</option>
	<option value="976">Mongolia (+976)</option>
	<option value="382">Montenegro (+382)</option>
	<option value="1">Montserrat, Leeward Islands (+1)</option>
	<option value="212">Morocco (+212)</option>
	<option value="258">Mozambique (+258)</option>
	<option value="95">Myanmar (+95)</option>
	<option value="264">Namibia (+264)</option>
	<option value="674">Nauru (+674)</option>
	<option value="977">Nepal (+977)</option>
	<option value="31">Netherlands (+31)</option>
	<option value="599">Netherlands Antilles (+599)</option>
	<option value="687">New Caledonia (+687)</option>
	<option value="64">New Zealand (+64)</option>
	<option value="505">Nicaragua (+505)</option>
	<option value="227">Niger (+227)</option>
	<option value="234">Nigeria (+234)</option>
	<option value="683">Niue (+683)</option>
	<option value="6723">Norfolk Island (+6723)</option>
	<option value="1670">Northern Mariana Islands (except Guam) (+1670)</option>
	<option value="47">Norway (+47)</option>
	<option value="968">Oman (+968)</option>
	<option value="92">Pakistan (+92)</option>
	<option value="680">Palau (+680)</option>
	<option value="970">Palestine (+970)</option>
	<option value="507">Panama (+507)</option>
	<option value="675">Papua New Guinea (+675)</option>
	<option value="595">Paraguay (+595)</option>
	<option value="51">Peru (+51)</option>
	<option value="63">Philippines (+63)</option>
	<option value="48">Poland (+48)</option>
	<option value="351">Portugal (+351)</option>
	<option value="1787">Puerto Rico (+1787)</option>
	<option value="974">Qatar (+974)</option>
	<option value="262">Reunion (+262)</option>
	<option value="40">Romania (+40)</option>
	<option value="7">Russian Federation (+7)</option>
	<option value="250">Rwanda (+250)</option>
	<option value="290">Saint Helena (+290)</option>
	<option value="869">Saint Kitts and Nevis, Leeward Islands (+869)</option>
	<option value="1">Saint Lucia (+1)</option>
	<option value="508">Saint Pierre and Miquelon (+508)</option>
	<option value="685">Samoa (+685)</option>
	<option value="239">Sao Tome and Principe (+239)</option>
	<option value="966">Saudi Arabia (+966)</option>
	<option value="221">Senegal (+221)</option>
	<option value="381">Serbia (+381)</option>
	<option value="248">Seychelles (+248)</option>
	<option value="232">Sierra Leone (+232)</option>
	<option value="65">Singapore (+65)</option>
	<option value="421">Slovakia (+421)</option>
	<option value="386">Slovenia (+386)</option>
	<option value="677">Solomon Islands (+677)</option>
	<option value="252">Somalia (+252)</option>
	<option value="27">South Africa (+27)</option>
	<option value="34">Spain (+34)</option>
	<option value="94">Sri Lanka (+94)</option>
	<option value="223">St Vincent and the Grenadines (+223)</option>
	<option value="249">Sudan (+249)</option>
	<option value="597">Suriname (+597)</option>
	<option value="268">Swaziland (+268)</option>
	<option value="46">Sweden (+46)</option>
	<option value="41">Switzerland (+41)</option>
	<option value="963">Syrian Arab Republic (+963)</option>
	<option value="886">Taiwan (+886)</option>
	<option value="992">Tajikistan (+992)</option>
	<option value="255">Tanzania United Republic of (+255)</option>
	<option value="66">Thailand (+66)</option>
	<option value="670">Timor-leste (+670)</option>
	<option value="228">Togo (+228)</option>
	<option value="676">Tonga (+676)</option>
	<option value="1868">Trinidad and Tobago (+1868)</option>
	<option value="216">Tunisia (+216)</option>
	<option value="90">Turkey (+90)</option>
	<option value="993">Turkmenistan (+993)</option>
	<option value="1649">Turks and Caicos Islands (+1649)</option>
	<option value="688">Tuvalu (+688)</option>
	<option value="256">Uganda (+256)</option>
	<option value="380">Ukraine (+380)</option>
	<option value="971">United Arab Emirates (+971)</option>
	<option value="44">United Kingdom (+44)</option>
	<option value="1">United States (+1)</option>
	<option value="598">Uruguay (+598)</option>
	<option value="998">Uzbekistan (+998)</option>
	<option value="678">Vanuatu (+678)</option>
	<option value="58">Venezuela (+58)</option>
	<option value="84">Vietnam (+84)</option>
	<option value="1">Virgin Islands, British (+1)</option>
	<option value="1340">Virgin Islands, Us (+1340)</option>
	<option value="681">Wallis and Futuna Islands (+681)</option>
	<option value="967">Yemen (+967)</option>
	<option value="260">Zambia (+260)</option>
	<option value="263">Zimbabwe (+263)</option>

</select>&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;
					</td>
					<td>
					     <span id="UserControl_EditPayContactMin_Label_AreaCode">Area</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					      <span id="UserControl_EditPayContactMin_Label_PhoneNumber">Phone Number</span>
					      <br />
					    <input name="UserControl_EditPayContactMin$Textbox_CAreaCode" type="text" maxlength="3" id="UserControl_EditPayContactMin_Textbox_CAreaCode" class="width40 goSearch reqfieldWhite" />&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
			            <input name="UserControl_EditPayContactMin$Textbox_CNumber" type="text" maxlength="20" id="UserControl_EditPayContactMin_Textbox_CNumber" class="width100 goSearch reqfieldWhite" /> 
					</td>
				</tr>
			</table>
		</td>
	</tr>
	
</table>

<script type='text/javascript'>
    function ValidateMaxLength(text,long)
    {
        var maxlength = new Number(long);
        if (text.value.length > maxlength)
        {
            text.value = text.value.substring(0,maxlength);
        }
    }
    
	function validateSelectedCountry()
	{	
		myDDL = document.getElementById('UserControl_EditPayContact_DropDownList_Country');
		starpostcode = document.getElementById('star_postcode');
		textpostcode = document.getElementById('text_postcode');
		textboxpostcode = document.getElementById('UserControl_EditPayContact_Textbox_PostalCode');
		if (myDDL.options[myDDL.selectedIndex].value == 'HK')
		{
			starpostcode.style.display = 'none';
			textpostcode.style.fontWeight = '';
			textboxpostcode.style.backgroundColor = '#ffffff';
		}else
		{
			starpostcode.style.display = '';
			textpostcode.style.fontWeight = 'bold'
			textboxpostcode.style.backgroundColor = '#fff68f';
		}
		if ('False' == 'True')
		{
			url = 'http://' + 'flight.asiatravel.com/' + '/crs.flight/www/List.MasterData.aspx';
			myCountryCode = myDDL.options[myDDL.options.selectedIndex].value;
			url += '?do=ticketdelivery&oid=' + 13 + '&ccode=' + myCountryCode + '&ddate=3/31/2016 12:00:00 AM';
			YAHOO.util.Connect.asyncRequest('GET', url, callback, null);
		}
	}
	
	var responseSuccess = function(o)
	{
		if (o.responseText != undefined)
		{
			myMail = o.responseXML.getElementsByTagName('DeliverMail');
			myCourier = o.responseXML.getElementsByTagName('DeliverCourier');
			mySelf = o.responseXML.getElementsByTagName('DeliverSelfCollect');
			
			myRadMail = document.getElementById('UserControl_EditPayContact_RadioButton_CourierHTML');
			myRadCourier = document.getElementById('UserControl_EditPayContact_RadioButton_MailHTML');
			myRadSelf = document.getElementById('UserControl_EditPayContact_RadioBtton_SelfCollectHTML');

			if (myMail.length > 0)
			{
				if (myMail[0].childNodes[0].nodeValue == "true")
					myRadMail.disabled = false;
				else
					myRadMail.disabled = true;
				if (myCourier[0].childNodes[0].nodeValue == "true")
					myRadCourier.disabled = false;
				else
					myRadCourier.disabled = true;
				if (mySelf[0].childNodes[0].nodeValue == "true")
					myRadSelf.disabled = false;
				else
					myRadSelf.disabled = true;
			}else
			{
				myRadMail.disabled = true;
				myRadCourier.disabled = true;
				myRadSelf.disabled = false;
				myRadSelf.checked = true;
			}
		}
	};

	var responseFailure = function(o)
	{
	};

	var callback =
	{
	  success:responseSuccess,
	  failure:responseFailure
	};
</script>

								
							
<div id="UserControl_DisplayConfirmPassengerName_Panel_RuleNRegulation">
	
	<TABLE class="box1 border" cellSpacing="0" cellPadding="0" border="0">
		<TR id="back_lighter_3">
			<TD align="center"></TD>
			<TD><BR>
				<span id="UserControl_DisplayConfirmPassengerName_Label_ImportantNotes"><B>Important Notes: </B></span>
				<BR>
				<ul>
					<li>Passenger names cannot be changed beyond this point</li>
<li>Incorrect names may incur penalties or invalidate your ticket</li>
<li>Email address must be correctly furnished. You agree to accept email as a means of communication and delivery of Travel vouchers and confirmation of your booking.  In doing so, you agree not to hold <a href="http://www.asiatravel.com" target="_blank">www.asiatravel.com</a> liable for any non-receipt of travel voucher or email confirmation.</li>

				</ul>
			</TD>
			<TD></TD>
		</TR>
		<TR id="back_lighter_3">
			<TD align="center"></TD>
			<TD><BR>
				<LABEL for="UserControl_DisplayConfirmPassengerName_Checkbox_RuleNRegulation">
					<input id="UserControl_DisplayConfirmPassengerName_Checkbox_RuleNRegulation" type="checkbox" name="UserControl_DisplayConfirmPassengerName$Checkbox_RuleNRegulation" checked="checked" onclick="return false;" /><label for="UserControl_DisplayConfirmPassengerName_Checkbox_RuleNRegulation">I confirm that passenger name(s) are correct & accept above terms and conditions.</label></LABEL>
				<span id="UserControl_DisplayConfirmPassengerName_RequriedFieldValidator_tnc" style="color:Red;display:none;">
			*
		</span><BR>
				<BR>
			</TD>
			<td></td>
		</TR>
	</TABLE>

</div>
<script type="text/javascript">
<!--
function ToggleTermAndConditionsCheck(checkboxctrl, buttonctrl)
{
	var myHotelButton = document.getElementById('UserControl_ButtonSetWizard_HtmlInputButton3');
	
	if (document.getElementById(checkboxctrl).checked == true)
	{
		document.getElementById(buttonctrl).disabled = false;
		document.getElementById(buttonctrl).style.cursor = 'hand';
		document.getElementById(buttonctrl).style.backgroundImage = ''; 
		if (myHotelButton != null)
		{
			myHotelButton.disabled = false;
			myHotelButton.style.cursor = 'hand';
		}
			
	}
	else
	{
		document.getElementById(buttonctrl).disabled = true;
		document.getElementById(buttonctrl).style.cursor = 'default';
		document.getElementById(buttonctrl).style.backgroundImage = 'url(../../crs.style/active/img/graybutton.jpg)'; 
		if (myHotelButton != null)
		{
			myHotelButton.disabled = true;
			myHotelButton.style.cursor = 'default';
		}
	}
}
//-->
</script>

								
								<br clear="all">
								<table border="0" cellpadding="0" cellspacing="0" class="box1">
									<tr>
										<td align="center">
											
<table cellpadding="2" cellspacing="0" border="0">
	<tr>
		<td>
		</td>
		<td>
			<input onclick="if (typeof(Page_ClientValidate) == 'function') Page_ClientValidate(''); " name="UserControl_ButtonSetWizard$HtmlInputButton1" type="submit" id="UserControl_ButtonSetWizard_HtmlInputButton1" value="CONTINUE" class="goSubmitpillYellow button120" title="Book Now (button)" disabled="disabled" />
		</td>
		<td>
			
		</td>
	</tr>
</table>




											<script type="text/javascript">
												<!--
												
												function setWizardButton()
												{
													//Maintaining checkbox status when post back happens
													var myCheckbox = document.getElementById('UserControl_DisplayConfirmPassengerName_Checkbox_RuleNRegulation')
													var myPayButton = document.getElementById('UserControl_ButtonSetWizard_HtmlInputButton1')
													var myHotelButton = document.getElementById('UserControl_ButtonSetWizard_HtmlInputButton3')
													var mybackgroundImage = 'url(../../crs.style/active/img/graybutton.jpg)';
													
													if(!(myCheckbox == null))
													{
														if(myCheckbox.checked)
														{
														    myPayButton.disabled = false;
															myPayButton.style.backgroundImage = '';
															myPayButton.style.cursor = 'hand';
															
															if (myHotelButton != null)
															{
																myHotelButton.disabled = false;
																myHotelButton.style.cursor = 'hand';
															}
														}
														else
														{
														    myPayButton.disabled = true;
															myPayButton.style.backgroundImage = mybackgroundImage;
															myPayButton.style.cursor = 'default';
															if (myHotelButton != null)
															{
																myHotelButton.disabled = true;
																myHotelButton.style.cursor = 'default';
															}
																
														}
															
													}
												}
						
												//slight delay to make detection of values happen.
												setTimeout('setWizardButton();', 100);
												//-->
											</script>
											<br>
										</td>
									</tr>
								</table>
							</div>				
				</div>
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

</script>

<?php get_footer(); ?>