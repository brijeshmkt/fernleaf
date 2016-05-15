<?php
/*
  Template Name: Page flightmultistop Page
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

<style>
#body_block_left_spacer1 {
    background-color: #0b3669;
    background-image: url("../img/img_back/lvl1_back.jpg");
    border-right: 1px solid #b1c9d5;
    float: right;
    height: 29px;
    width: 280px;
}

#body_block_left_spacer1 .tab2 {
    background-color: #5296bb;
    background-image: url("http://flight.asiatravel.com/crs.style/active/img/img_back/lvl1_back.jpg");
    float: left;
    height: 29px;
    width: 93px;
}

#body_block_left_spacer1 .tab1 {
    background-color: #5296bb;
    float: left;
    height: 29px;
    width: 94px;
}

#body_block_left_spacer1 .tab2 p {
    font: 12px Verdana,Arial,Helvetica,sans-serif;
    margin: 5px 0 0;
    text-align: center;
}

#body_block_left_spacer1 .tab2 p a:link {
    color: #2b6a96;
    text-decoration: none;
}
#body_block_left_spacer1 .tab1 p a:link {
    color: #ffffff;
    text-decoration: none;
}
a
{
    cursor: pointer;
    text-decoration: none;
}

#body_block_left_spacer1 .tab1 p {
    font: 12px Verdana,Arial,Helvetica,sans-serif;
    margin: 5px 0 0;
    text-align: center;
}


#body_block_left_ {
    background-color: #ddeaf2;
    border-right: 1px solid #b1c9d5;
    float: right;
    height: auto;
    margin: 0;
    min-height: 421px;
    padding: 0;
    position: relative;
    width: 280px;
}

#body_block_left_spacer4 {
    background-color: #5296bb;
    float: right;
    width: 280px;
}

#body_block_left_spacer4 #content {
    margin: 10px 0 0 17px;
    width: 240px;
}
.smallspace10 {
    height: 10px;
    margin: 0;
    padding: 0;
}

#body_block_left_spacer4 #content table tr {
    border-collapse: collapse;
    margin: 0;
    padding: 0;
}

input[type="text"], input[type="password"], input[type="email"], input, textarea, select
{
	padding:0px;
}

#body_block_left_spacer4 #content table tr td {
    border-collapse: collapse;
    color: #ffffff;
    margin: 3px 0 0;
    padding: 0;
	border-right:0px;
}
#body_block_left_spacer4 #content table {
    border-collapse: collapse;
    font: 11px Arial,Helvetica,sans-serif;
	border-width:0px;
	border-right:0px;
}

#body_block_left_spacer4 .back_lighter {
    background-color: #74abca;
    margin: 0 0 0 -17px;
    padding: 0 0 0 17px;
    width: 263px;
}

#body_block_left_spacer4 #content table {
    border-collapse: collapse;
    font: 11px Arial,Helvetica,sans-serif;
    margin: 0;
    padding: 0;
}
#QuickSearch_View_CitySelect_DepartCity_CityList
{
	display: none;
}
#QuickSearch_View_Dropdownlist_SeatClass
{
	width: 85px;
}
#div_MatrixWrapper table
{
	border-width: 0px;
    margin-bottom: 0px;
}
#div_MatrixWrapper table tr td
{
	padding:0px;
}
.matrix_caption_table_detail 
{
    text-align: center;
}

#body_block_right_ #content1 {
    margin: 15px 0 0 24px;
    width: 562px;
}

#body_block_right_ table tr td {
    font: 11px Verdana,Arial,Helvetica,sans-serif;
    margin: 0 10px;
}

#body_block_right_ #content1 .sort {
    background: rgba(0, 0, 0, 0) url("http://flight.asiatravel.com/crs.style/active/img/img_back/tabs.jpg") repeat scroll 0 0;
}
#body_block_right_ table tr td table tr td {
    font: 11px Verdana,Arial,Helvetica,sans-serif;
    margin: 0 10px;
}

#body_block_right_ #content1 .selected_white {
    color: #ffffff;
}
#body_block_right_ table tr td table tr td {
    font: 11px Verdana,Arial,Helvetica,sans-serif;
    margin: 0 10px;
}
#content1
{
	border-width:0px;
}
.panRight {
    text-align: right;
}
#body_block_right_ #content1 table.box1 tr td {
    font: 11px Arial,Helvetica,sans-serif;
}


#body_block_right_ #content1 table.box1 tr {
    font: 11px Arial,Helvetica,sans-serif;
    vertical-align: top;
}

#body_block_right_ #content1 .back_lighter {
    background-color: #74abca;
}
#body_block_right_ #content1 table.box1 tr td {
    font: 11px Arial,Helvetica,sans-serif;
    vertical-align: top;
}
#body_block_right_ #content1 .back_lighter p {
    color: #ffffff;
    font: 13px Verdana,Arial,Helvetica,sans-serif;
    margin: 0;
    padding: 2px 5px;
}

#body_block_right_ #content1 .back_lighter {
    background-color: #74abca;
}
#body_block_right_ #content1 .back_lighter_1 {
    background-color: #bfdbe7;
    vertical-align: middle;
}
#body_block_right_ #content1 .back_lighter_2 {
    background-color: #f3f3f3;
    vertical-align: middle;
}
#body_block_right_ #content1 table.box1 tr.strong td {
    font-weight: bold;
}
#body_block_right_ #content1 table tr .back_lighter_1 td {
    vertical-align: middle;
}
#body_block_right_ #content1 table.box1 tr.back_lighter_2 td {
    margin: 0;
    padding: 2px 0;
}
#content1 table
{
	border-width:0px;
	padding:0px;
	margin-bottom:0px;
}
#DisplaySearchResult_View_Datagrid_fares tr td 
{
	padding:0px;
	 border-right:0px;
}
#DisplaySearchResult_View_Datagrid_fares tr th 
{
	padding:0px;
	border-right:0px;
}
#body_block_right_ h1 {
    font: bold 13px Arial,Helvetica,sans-serif;
    margin: 0;
    padding: 0;
}
#body_block_right_ h2 {
    font: 12px Arial,Helvetica,sans-serif;
    margin: 0;
    padding: 0;
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
#body_block_right_ #content1 table.box1 tr {
    font: 11px Arial,Helvetica,sans-serif;
    vertical-align: top;
}
#body_block_right_ #content1 table.box1 tr td {
    font: 11px Arial,Helvetica,sans-serif;
}

#body_block_right_ #content1 table.border2 {
    background: #efefef none repeat scroll 0 0;
    border: 1px solid #b0b0b0;
}

#body_block_right_ #content1 #back_lighter_3 {
    background-color: #ddeaf2;
    vertical-align: middle;
}
#body_block_right_ #content1 table.box1 tr td {
    font: 11px Arial,Helvetica,sans-serif;
    vertical-align: top;
}

#body_block_right_ #content1 input.width200 {
    font: 12px Arial,Helvetica,sans-serif;
    height: 26px;
    width: 200px;
}
#body_block_right_ #content1 input.width100 {
    font: 12px Arial,Helvetica,sans-serif;
    height: 26px;
    width: 100px;
}
#back_lighter_3 td
{
	padding: 0px;
	border-right: 0px;
}
#body_block_right_ #content1 select.width40 {
    background-color: #ffffff;
    font: 11px Arial,Helvetica,sans-serif;
    height: 28px;
    width: 40px;
    border-radius: 4px;
}

#body_block_right_ #content1 select.width100 {
    font: 12px Arial,Helvetica,sans-serif;
    height: 28px;
    width: 100px;
    border-radius: 4px;
}
.goInputDate {
    background-image: url("http://flight.asiatravel.com/crs.style/active/img/picker/date.gif");
    background-position: right center;
    background-repeat: no-repeat;
    border: 1px solid #7f9db9;
    color: #000000;
    font: 11px/17px normal Arial,Verdana,Helvetica,sans-serif;
    height: 16px;
    padding: 0 0 0 2px;
    text-decoration: none;
    vertical-align: text-bottom;
}
#promodepartpoint tr td
{
    padding: 0px;
    border-right: 0px;
}
#body_block_left_spacer2 {
    background-color: #0b3669;
    background-image: url("http://flight.asiatravel.com/crs.style/active/img/img_back/lvl2_back.jpg");
    border-right: 1px solid #b1c9d5;
    float: right;
    height: 24px;
    margin: 0 -1px 0 0;
    width: 280px;
}
.goSearch {
    background-color: #fff;
    border: 1px solid #7f9db9;
    color: #000;
    font: 11px/17px normal Arial,Verdana,Helvetica,sans-serif;
    height: 20px;
    padding: 0 0 0 2px;
    text-decoration: none;
    vertical-align: text-bottom;
}
#body_block_left_spacer2 h1 {
    color: #ffffff;
    font: 600 12px Verdana,Arial,Helvetica,sans-serif;
    margin: 5px 0 0 17px;
    padding: 0;
}


#body_block_left_spacer5 {
    background-color: #ddeaf2;
    float: right;
    width: 280px;
}

#body_block_left_spacer5 #content {
    margin: 10px 0 0 17px;
    width: 240px;
}

#body_block_left_ p {
    font: 11px Arial,Helvetica,sans-serif;
    margin: 0;
    padding: 0;
}

#content p {
    font: 11px Arial,Helvetica,sans-serif;
}

</style>
<div class="content-outer-wrapper">
    <div class="container">
        <div class="row">
		<div class="left-sideber-hotel">
		
		
		<div id="body_block_left_spacer1">
							<div class="tab2" id="Div_Hotel">
							    <p><b><a href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;LinkButton_Hotel&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))" id="LinkButton_Hotel">Hotels</a></b></p>
							</div>
							<div class="tab1" id="Div_Flight">
                                <p><b><a href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;LinkButton_Flight&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))" id="LinkButton_Flight">Flights</a></b></p>
							</div>
							<div class="tab2" id="Div_FlightHotel">
                                <p><b><a href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;LinkButton_FlightHotel&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))" id="LinkButton_FlightHotel">Flight + Hotel</a></b></p>
							</div>
						
							
		</div>
		
		
		<div id="body_block_left_">
							<!--#### WP: Quicksearch Panel: Spacer #####################-->
							
							<!--#### WP: Quicksearch Panel: Start #####################-->
							<div id="body_block_left_spacer4">
								
<!--#### WP: Quicksearch Panel: Start #####################-->

<div id="content">
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tbody><tr>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td valign="top"><img width="35" height="20" alt="" src="http://flight.asiatravel.com/crs.style/active/img/logo/plane_takeoff_35x20.gif"></td>
			<td><span id="QuickSearch_View_Label_DepartFrom">Depart From</span>
				
			</td>
			<td>
<script src="../js/List.MasterData.js" type="text/javascript"></script>
<input type="text" style="margin-left:10px; margin-right:10px; width:70px;" onclick="QuickSearch_View_CitySelect_DepartCityAjaxList.toggleList('QuickSearch_View_CitySelect_DepartCity_CityList')" readonly="readonly" class="width60 goSearch" id="QuickSearch_View_CitySelect_DepartCity_TextBox_CityCode" maxlength="3" value="AMD" name="QuickSearch_View$CitySelect_DepartCity$TextBox_CityCode">

<a onclick="QuickSearch_View_CitySelect_DepartCityAjaxList.toggleList('QuickSearch_View_CitySelect_DepartCity_CityList')" class="link" id="QuickSearch_View_CitySelect_DepartCity_Link_CityList" href="javascript:void(0);"><span id="QuickSearch_View_CitySelect_DepartCity_Label_CityList">City List</span></a>
<div class="citylist" id="QuickSearch_View_CitySelect_DepartCity_CityList">
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tbody><tr>
			<td>
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="color:black; padding-left:5px; padding-right:5px;"><b></b></td>
						<td style="width:15px;"><span onclick="QuickSearch_View_CitySelect_DepartCityAjaxList.toggleList('QuickSearch_View_CitySelect_DepartCity_CityList')" class="goSubmit" style="cursor: pointer" id="QuickSearch_View_CitySelect_DepartCity_Link_Close">&nbsp;X&nbsp;</span></td>
					</tr>
				</tbody></table>	
			</td>
		</tr>
		<tr>
			<td height="4"></td>
		</tr>
		<tr>
			<td>
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="color:black; padding-left:5px; padding-right:5px;"><span id="QuickSearch_View_CitySelect_DepartCity_Label_Country">Select</span></td>
						<td><select class="width200 goSearch" id="QuickSearch_View_CitySelect_DepartCity_DDL_CountryList" name="QuickSearch_View$CitySelect_DepartCity$DDL_CountryList">
</select><img style="border-width:0px;" src="../js/ajax.loading.gif" id="QuickSearch_View_CitySelect_DepartCity_Image_Wait1"></td>			
					</tr>
					<tr>
						<td height="2" colspan="2"></td>
					</tr>
					<tr>
						<td style="color:black; padding-left:5px; padding-right:5px;"><span id="QuickSearch_View_CitySelect_DepartCity_Label_City">City</span></td>
						<td><select class="width200 goSearch" id="QuickSearch_View_CitySelect_DepartCity_DDL_CityList" name="QuickSearch_View$CitySelect_DepartCity$DDL_CityList">
</select><img style="border-width:0px;" src="../js/ajax.loading.gif" id="QuickSearch_View_CitySelect_DepartCity_Image_Wait2"></td>
					</tr>
				</tbody></table>
			</td>
		</tr>
		<tr>
			<td height="4"></td>
		</tr>
		<tr>
			<td align="center"><input type="button" value="Select City" class="goSubmit" id="QuickSearch_View_CitySelect_DepartCity_Button_Submit" name="QuickSearch_View$CitySelect_DepartCity$Button_Submit"></td>
		</tr>
	</tbody></table>
</div>
<script type="text/javascript">	
	var QuickSearch_View_CitySelect_DepartCityAjaxList = new AjaxList();
	QuickSearch_View_CitySelect_DepartCityAjaxList.setUrl('http://flight.asiatravel.com//crs.flight/www/List.MasterData.aspx');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setType('depart');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setWait1('QuickSearch_View_CitySelect_DepartCity_Image_Wait1');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setWait2('QuickSearch_View_CitySelect_DepartCity_Image_Wait2');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setDDL1('QuickSearch_View_CitySelect_DepartCity_DDL_CountryList');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setDDL2('QuickSearch_View_CitySelect_DepartCity_DDL_CityList');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setTxtBox('QuickSearch_View_CitySelect_DepartCity_TextBox_CityCode');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setBtnSubmit('QuickSearch_View_CitySelect_DepartCity_Button_Submit');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setCityList('QuickSearch_View_CitySelect_DepartCity_CityList');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setCultureCode('en-US');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setPartnerID('0');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setIsFullCityName('False');
</script></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			</td>
		</tr>
		<tr>
			<td valign="top"><img width="35" height="20" alt="" src="http://flight.asiatravel.com/crs.style/active/img/logo/plane_landing_35x20.gif"></td>
			<td>
			<span id="QuickSearch_View_Label_Arrpiveat">Arrive At</span>
			
			</td>
			<td>
<script src="../js/List.MasterData.js" type="text/javascript"></script>
<input type="text" style="margin-left:10px; margin-right:10px; width:70px;" class="width60 goSearch" id="QuickSearch_View_CitySelect_ReturnCity_TextBox_CityCode" maxlength="3" value="BOM" name="QuickSearch_View$CitySelect_ReturnCity$TextBox_CityCode">

<a onclick="QuickSearch_View_CitySelect_ReturnCityAjaxList.toggleList('QuickSearch_View_CitySelect_ReturnCity_CityList')" class="link" id="QuickSearch_View_CitySelect_ReturnCity_Link_CityList" href="javascript:void(0);"><span id="QuickSearch_View_CitySelect_ReturnCity_Label_CityList">City List</span></a>
<div class="citylist" id="QuickSearch_View_CitySelect_ReturnCity_CityList">
</div>
<script type="text/javascript">	
	var QuickSearch_View_CitySelect_ReturnCityAjaxList = new AjaxList();
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setUrl('http://flight.asiatravel.com//crs.flight/www/List.MasterData.aspx');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setType('return');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setWait1('QuickSearch_View_CitySelect_ReturnCity_Image_Wait1');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setWait2('QuickSearch_View_CitySelect_ReturnCity_Image_Wait2');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setDDL1('QuickSearch_View_CitySelect_ReturnCity_DDL_CountryList');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setDDL2('QuickSearch_View_CitySelect_ReturnCity_DDL_CityList');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setTxtBox('QuickSearch_View_CitySelect_ReturnCity_TextBox_CityCode');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setBtnSubmit('QuickSearch_View_CitySelect_ReturnCity_Button_Submit');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setCityList('QuickSearch_View_CitySelect_ReturnCity_CityList');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setCultureCode('en-US');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setPartnerID('0');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setIsFullCityName('False');
</script></td>
		</tr>
	</tbody></table>
	<div class="back_lighter">
		<table width="250" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
				<td style="vertical-align:top; padding-top:5px;">
					<input type="radio" onclick="get_type(this.value)" <?php if(isset($_REQUEST['flights-type']) && $_REQUEST['flights-type']=='Return'){echo 'checked';}?> value="Radio_return" name="QuickSearch_View$RouteType" id="QuickSearch_View_Radio_return"/><label for="QuickSearch_View_Radio_return">Return</label>
					<input type="radio" onclick="get_type(this.value)" <?php if(isset($_REQUEST['flights-type']) && $_REQUEST['flights-type']=='Oneway'){echo 'checked';}?> value="Radio_oneway" name="QuickSearch_View$RouteType" id="QuickSearch_View_Radio_oneway"/><label for="QuickSearch_View_Radio_oneway">One-way</label>
				    &nbsp;&nbsp; <img width="18" height="18" alt="" title="Multistop" style="margin-top: 2px" src="http://flight.asiatravel.com/crs.style/active/img/logo/MultiStop.jpg">
				    <a href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;QuickSearch_View$LinkButton_MultiCity&quot;, &quot;&quot;, true, &quot;&quot;, &quot;Multi.Stop.Flight.aspx&quot;, false, true))" class="link" title="Click here for Multistop" id="QuickSearch_View_LinkButton_MultiCity">Multi stop</a>
				</td>
			</tr>
		</tbody></table>
	</div>
	<div class="smallspace10"></div>
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tbody><tr>
			<td>
				
					
				<input type="hidden" value="31/March/2016" id="QuickSearch_View_DateSelection_DepartSml_hidden_SelectedDate" name="QuickSearch_View$DateSelection_DepartSml$hidden_SelectedDate">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody><tr id="QuickSearch_View_DateSelection_DepartSml_HTMLheaderRow">
	<td colspan="4">
            <span id="QuickSearch_View_DateSelection_DepartSml_Label_Title">Depart</span>
            <span id="QuickSearch_View_DateSelection_DepartSml_Label_DateFormat">(dd-mm-yyyy)</span>
        </td>
	<td>
            <span id="QuickSearch_View_DateSelection_DepartSml_Label_Time">Time</span></td>
</tr>

    <tr>
        <td>
            <select onchange="PopulateDays('QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Days','QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Month','QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Year','true','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year','false','','','')" class="width40 goSearch " id="QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Days" name="QuickSearch_View$DateSelection_DepartSml$Dropdownlist_Days">
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
	<option value="31" selected="selected">31</option>

</select></td>
        <td>
            <select onchange="PopulateDays('QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Days','QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Month','QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Year','true','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year','false','','','')" class="width50 goSearch " id="QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Month" name="QuickSearch_View$DateSelection_DepartSml$Dropdownlist_Month">
	<option value="1">Jan</option>
	<option value="2">Feb</option>
	<option value="3" selected="selected">Mar</option>
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
            <select onchange="PopulateDays('QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Days','QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Month','QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Year','true','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year','false','','','')" class="width60 goSearch " id="QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Year" name="QuickSearch_View$DateSelection_DepartSml$Dropdownlist_Year">
	<option value="2016" selected="selected">2016</option>
	<option value="2017">2017</option>

</select></td>
        <td valign="middle">
            <script type="text/javascript" language="JavaScript">
                new tcal ({ 'controlnamedays': "QuickSearch_View_DateSelection_DepartSml"  + "_Dropdownlist_Days",
                            'controlnamemonth': "QuickSearch_View_DateSelection_DepartSml"  + "_Dropdownlist_Month",
                            'controlnameyear': "QuickSearch_View_DateSelection_DepartSml"  + "_Dropdownlist_Year"}, 
                            'middle', 
                            "en-us",
                            "True");
            </script><img alt="Open Calendar" class="tcalIcon" onclick="A_TCALS['0'].f_toggle()" id="tcalico_0" src="http://flight.asiatravel.com/crs.style/active/img/logo/tiny_calender.gif">
        </td>
        <td align="right">
            <select class="width70 goSearch" id="QuickSearch_View_DateSelection_DepartSml_Dropdownlist_Timing" name="QuickSearch_View$DateSelection_DepartSml$Dropdownlist_Timing">
	<option value="ANY" selected="selected">Any</option>
	<option value="MORNING">Morning</option>
	<option value="AFTERNOON">Afternoon</option>
	<option value="EVENING">Evening</option>
	<option value="MIDNIGHT">Midnight</option>

</select></td>
    </tr>
     <tr>
        <td>
        </td>
    </tr>
</tbody></table>

			</td>
		</tr>
	</tbody></table>
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tbody><tr>
			<td>
				
				<input type="hidden" value="31/March/2016" id="QuickSearch_View_DateSelection_Returnsml_hidden_SelectedDate" name="QuickSearch_View$DateSelection_Returnsml$hidden_SelectedDate">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tbody><tr id="QuickSearch_View_DateSelection_Returnsml_HTMLheaderRow">
	<td colspan="4">
            <span id="QuickSearch_View_DateSelection_Returnsml_Label_Title">Return</span>
            <span id="QuickSearch_View_DateSelection_Returnsml_Label_DateFormat">(dd-mm-yyyy)</span>
        </td>
	<td>
            <span id="QuickSearch_View_DateSelection_Returnsml_Label_Time">Time</span></td>
</tr>

    <tr>
        <td>
            <select onchange="PopulateDays('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days', 'QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year','false','','','','false','','','')" class="width40 goSearch " id="QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days" name="QuickSearch_View$DateSelection_Returnsml$Dropdownlist_Days" <?php if(isset($_REQUEST['flights-type']) && $_REQUEST['flights-type']=='Oneway'){echo "disabled";}?>>
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
	<option value="31" selected="selected">31</option>

</select></td>
        <td>
            <select onchange="PopulateDays('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days', 'QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year','false','','','','false','','','')" class="width50 goSearch " id="QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month" name="QuickSearch_View$DateSelection_Returnsml$Dropdownlist_Month" <?php if(isset($_REQUEST['flights-type']) && $_REQUEST['flights-type']=='Oneway'){echo "disabled";}?>>
	<option value="1">Jan</option>
	<option value="2">Feb</option>
	<option value="3" selected="selected">Mar</option>
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
            <select onchange="PopulateDays('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days', 'QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month','QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year','false','','','','false','','','')" class="width60 goSearch " id="QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year" name="QuickSearch_View$DateSelection_Returnsml$Dropdownlist_Year" <?php if(isset($_REQUEST['flights-type']) && $_REQUEST['flights-type']=='Oneway'){echo "disabled";}?>>
	<option value="2016" selected="selected">2016</option>
	<option value="2017">2017</option>

</select></td>
        <td valign="middle">
            <script type="text/javascript" language="JavaScript">
                new tcal ({ 'controlnamedays': "QuickSearch_View_DateSelection_Returnsml"  + "_Dropdownlist_Days",
                            'controlnamemonth': "QuickSearch_View_DateSelection_Returnsml"  + "_Dropdownlist_Month",
                            'controlnameyear': "QuickSearch_View_DateSelection_Returnsml"  + "_Dropdownlist_Year"}, 
                            'middle', 
                            "en-us",
                            "True");
            </script><img alt="Open Calendar" class="tcalIcon" onclick="A_TCALS['1'].f_toggle()" id="tcalico_1" src="http://flight.asiatravel.com/crs.style/active/img/logo/tiny_calender.gif">
        </td>
        <td align="right">
            <select class="width70 goSearch" id="QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Timing" name="QuickSearch_View$DateSelection_Returnsml$Dropdownlist_Timing" <?php if(isset($_REQUEST['flights-type']) && $_REQUEST['flights-type']=='Oneway'){echo "disabled";}?>>
	<option value="ANY" selected="selected">Any</option>
	<option value="MORNING">Morning</option>
	<option value="AFTERNOON">Afternoon</option>
	<option value="EVENING">Evening</option>
	<option value="MIDNIGHT">Midnight</option>

</select></td>
    </tr>
     <tr>
        <td>
        </td>
    </tr>
</tbody></table>

			</td>
		</tr>
	</tbody></table>
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tbody><tr>
			<td style="height: 60px">
				<input type="checkbox" name="QuickSearch_View$Checkbox_directflight" id="QuickSearch_View_Checkbox_directflight"><label for="QuickSearch_View_Checkbox_directflight">Direct Flights only</label>
			</td>
			<td style="height: 60px">
				<table cellspacing="0" cellpadding="0" border="0" class="floatRight">
					<tbody><tr>
						<td align="left"><span id="QuickSearch_View_Label_class">Class</span></td>
					</tr>
					<tr>
						<td>
							<select class="width70 goSearch" id="QuickSearch_View_Dropdownlist_SeatClass" name="QuickSearch_View$Dropdownlist_SeatClass">
	<option value="Economy" selected="selected">Economy</option>
	<option value="EconomyPremium">Premium Economy</option>
	<option value="Business">Business</option>
	<option value="First">First</option>

</select>
						</td>
					</tr>
				</tbody></table>
			</td>
		</tr>
	</tbody></table>
	<div class="smallspace10"></div>
	<div id="back_lighter">
		<table width="240" cellspacing="0" cellpadding="0" border="0">
			<tbody><tr>
				<td style="width:9%;"><table border="0" id="QuickSearch_View_Radiobuttonlist_SearchType">
	<tbody><tr>
		<td><input type="radio" checked="checked" value="0" name="QuickSearch_View$Radiobuttonlist_SearchType" id="QuickSearch_View_Radiobuttonlist_SearchType_0"><label for="QuickSearch_View_Radiobuttonlist_SearchType_0">Exact Dates</label></td><td><input type="radio" value="1" name="QuickSearch_View$Radiobuttonlist_SearchType" id="QuickSearch_View_Radiobuttonlist_SearchType_1"><label for="QuickSearch_View_Radiobuttonlist_SearchType_1">Flexible Dates +/- 1 Day</label></td>
	</tr>
</tbody></table></td>
			</tr>
		</tbody></table>
	</div>
	<div class="smallspace10"></div>
	<table width="100%" cellspacing="0" cellpadding="0" border="0" style="display: none;" id="Table_AdvSearch1">
	    <tbody><tr>
	        <td><span id="QuickSearch_View_Label_Airline">Airline</span></td>
	        <td><!--Ticket Type--></td>
	    </tr>
	    <tr>
	        <td>
<script src="../js/List.MasterData.js" type="text/javascript"></script>
<input type="text" style="width:40px;" class="width80 goSearch" id="QuickSearch_View_CarrierSelect_Carrier_TextBox_CarrierCode" maxlength="2" name="QuickSearch_View$CarrierSelect_Carrier$TextBox_CarrierCode">

<a onclick="QuickSearch_View_CarrierSelect_CarrierAjaxList.toggleCarrier('QuickSearch_View_CarrierSelect_Carrier_CarrierList')" class="link" id="QuickSearch_View_CarrierSelect_Carrier_Link_CarrierList" href="javascript:void(0);"><span id="QuickSearch_View_CarrierSelect_Carrier_Lable_AirlineList">Airline List</span></a>
<div class="carrierlist" id="QuickSearch_View_CarrierSelect_Carrier_CarrierList">
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tbody><tr>
			<td>
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="color:black; padding-left:5px;"><b><span id="QuickSearch_View_CarrierSelect_Carrier_Label_CarrierSelection">Carrier Selection:</span></b></td>
						<td style="width:15px;"><span onclick="QuickSearch_View_CarrierSelect_CarrierAjaxList.toggleCarrier('QuickSearch_View_CarrierSelect_Carrier_CarrierList')" class="goSubmit" style="cursor: pointer" id="QuickSearch_View_CarrierSelect_Carrier_Link_Close">&nbsp;X&nbsp;</span></td>
					</tr>
				</tbody></table>	
			</td>
		</tr>
		<tr>
			<td height="4"></td>
		</tr>
		<tr>
			<td>
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td style="color:black; padding-left:5px;"><span id="QuickSearch_View_CarrierSelect_Carrier_Label_Description">Description</span></td>
						<td><select style="width:300px;" class="width200 goSearch" id="QuickSearch_View_CarrierSelect_Carrier_DDL_CarrierList" name="QuickSearch_View$CarrierSelect_Carrier$DDL_CarrierList">
</select><img style="border-width:0px;" src="../js/ajax.loading.gif" id="QuickSearch_View_CarrierSelect_Carrier_Image_Wait1"></td>			
					</tr>
					<tr>
						<td height="2" colspan="2"></td>
					</tr>
					<tr style="visibility:hidden;">
						<td style="color:black; padding-left:5px;"><span id="QuickSearch_View_CarrierSelect_Carrier_Label_Code">Code</span></td>
						<td><select class="width200 goSearch" id="QuickSearch_View_CarrierSelect_Carrier_DDL_CarrierCode" name="QuickSearch_View$CarrierSelect_Carrier$DDL_CarrierCode">
</select><img style="border-width:0px;" src="../js/ajax.loading.gif" id="QuickSearch_View_CarrierSelect_Carrier_Image_Wait2"></td>
					</tr>
				</tbody></table>
			</td>
		</tr>
		<tr>
			<td height="4"></td>
		</tr>
		<tr>
			<td align="center"><input type="button" value="Select Carrier" class="goSubmit" id="QuickSearch_View_CarrierSelect_Carrier_Button_Submit" name="QuickSearch_View$CarrierSelect_Carrier$Button_Submit"></td>
		</tr>
	</tbody></table>
</div>
<script type="text/javascript">	
	var QuickSearch_View_CarrierSelect_CarrierAjaxList = new AjaxList();
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setUrl('http://flight.asiatravel.com//crs.flight/www/List.MasterData.aspx');
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setType('carrier');
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setWait1('QuickSearch_View_CarrierSelect_Carrier_Image_Wait1');
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setWait2('QuickSearch_View_CarrierSelect_Carrier_Image_Wait2');
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setDDL1('QuickSearch_View_CarrierSelect_Carrier_DDL_CarrierList');
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setDDL2('QuickSearch_View_CarrierSelect_Carrier_DDL_CarrierCode');
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setTxtBox('QuickSearch_View_CarrierSelect_Carrier_TextBox_CarrierCode');
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setBtnSubmit('QuickSearch_View_CarrierSelect_Carrier_Button_Submit');
	QuickSearch_View_CarrierSelect_CarrierAjaxList.setCityList('QuickSearch_View_CarrierSelect_Carrier_CarrierList');
    QuickSearch_View_CarrierSelect_CarrierAjaxList.setCultureCode('en-US');
</script></td>
	        <td>
	            
	        </td>
	    </tr>
	</tbody></table>
	<div class="smallspace10"></div>
	<table width="100%" cellspacing="0" cellpadding="0" border="0" style="display: none;" id="Table_AdvSearch2">
	    <tbody><tr>
	        <td><span id="QuickSearch_View_Label_SortBy">Sort By</span></td>
	    </tr>
	    <tr>
            <td>
                <table border="0" style="margin-left:-5px" id="QuickSearch_View_RadioButton_Sort">
	<tbody><tr>
		<td><input type="radio" checked="checked" value="0" name="QuickSearch_View$RadioButton_Sort" id="QuickSearch_View_RadioButton_Sort_0"><label for="QuickSearch_View_RadioButton_Sort_0">Price</label></td><td><input type="radio" value="1" name="QuickSearch_View$RadioButton_Sort" id="QuickSearch_View_RadioButton_Sort_1"><label for="QuickSearch_View_RadioButton_Sort_1">Airline</label></td><td><input type="radio" value="2" name="QuickSearch_View$RadioButton_Sort" id="QuickSearch_View_RadioButton_Sort_2"><label for="QuickSearch_View_RadioButton_Sort_2">Departure</label></td>
	</tr>
</tbody></table>
            </td>
	    </tr>
	</tbody></table>
	
	<table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tbody><tr>
			<td><span id="QuickSearch_View_Label_Adult">Adult</span></td>
			<td><span id="QuickSearch_View_Label_Child">Child</span>
				
				
			</td>
			<td rowspan="3">*<a onclick="ToggleInfantInfo('infantInfoDiv')" class="link" href="javascript:void(0);"><span id="QuickSearch_View_Label_Infant">Infant</span></a></td>
			<td><!--Infant--></td>
			<td align="center" style="width:100px;"></td>
		</tr>
		<tr>
			<td><select onchange="return ValidatePaxRatio('QuickSearch_View_Dropdownlist_Adult','QuickSearch_View_Dropdownlist_child','QuickSearch_View_Dropdownlist_Infant');" class="width40 goSearch" id="QuickSearch_View_Dropdownlist_Adult" name="QuickSearch_View$Dropdownlist_Adult">
	<option value="1" selected="selected">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>

</select></td>
			<td><select onchange="return ValidatePaxRatio('QuickSearch_View_Dropdownlist_Adult','QuickSearch_View_Dropdownlist_child','QuickSearch_View_Dropdownlist_Infant');" class="width40 goSearch" id="QuickSearch_View_Dropdownlist_child" name="QuickSearch_View$Dropdownlist_child">
	<option value="0" selected="selected">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>

</select></td>
			<td>
				<div style="BORDER-RIGHT:#7b9ebd 1px solid; PADDING-RIGHT:2px; BORDER-TOP:#7b9ebd 1px solid; PADDING-LEFT:2px; Z-INDEX:999; LEFT:100px; VISIBILITY:hidden; PADDING-BOTTOM:2px; MARGIN:0px; BORDER-LEFT:#7b9ebd 1px solid; WIDTH:235px; PADDING-TOP:2px; BORDER-BOTTOM:#7b9ebd 1px solid; POSITION:absolute; TOP:270px; HEIGHT:75px; BACKGROUND-COLOR:#f7f9fb" id="infantInfoDiv">
					<table width="235" cellspacing="0" cellpadding="0" border="0">
					<tbody><tr>
						<td align="right"><a id="highInfantLayer" onclick="ToggleInfantInfo('infantInfoDiv')" class="goSubmit" style="CURSOR:pointer">&nbsp;X&nbsp;</a></td>
					</tr>
					<tr>
						<td><p style="COLOR:black">
							    <span id="QuickSearch_View_Label_InfantInfoText">Adult and Children bookings may be completed online. For 
									infant bookings (a child less than 24 months old), please contact our Customer 
									Service Centre.</span></p></td>
					</tr>
					</tbody></table>
				</div>
				<script type="text/javascript">
				    function ToggleInfantInfo(me)
					{
					 var mydiv = document.getElementById(me);
						if (mydiv.style.visibility == "hidden") 
						{
							mydiv.style.visibility = "visible";
						}else
						{ mydiv.style.visibility = "hidden";}
					}
				</script>
			</td>
			<td><input type="submit" class="goSubmit width80a" id="QuickSearch_View_Button_find" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;QuickSearch_View$Button_find&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" value="Find" name="QuickSearch_View$Button_find"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><a onclick="toggleAdvSearch(this);" id="Link_AdvSearch" class="link" href="javascript:void(0);"><span id="QuickSearch_View_Label_AdvancedSearch">Advanced Search</span></a><input type="hidden" value="False" id="QuickSearch_View_TextBox_AdvSearch" name="QuickSearch_View$TextBox_AdvSearch"></td>
		</tr>
	</tbody></table>
	<div class="smallspace10"></div>
    <div class="smallspace10"></div>
	        
	
	<div class="smallspace10"></div>
</div>

<div>
	<div class="smallspace10"></div>
	
	
	    <div class="smallspace10"></div>
</div>
<div class="smallspace10"></div>
<span onload="initPassengerControl('QuickSearch_View_Dropdownlist_Adult','QuickSearch_View_Dropdownlist_child','QuickSearch_View_Dropdownlist_Infant');" style="VISIBILITY:hidden" id="QuickSearch_View_DIV_paxInitControl"></span>
<!--#### WP: Quicksearch Panel: End #####################-->


<script type="text/javascript">
    var advSearch1 = document.getElementById('Table_AdvSearch1');
    var advSearch2 = document.getElementById('Table_AdvSearch2');
    var myLink = document.getElementById('Link_AdvSearch');
    function toggleAdvSearch(me)
    {
        myLink.firstChild.nodeValue = 'Simplified Search';
        
        if (advSearch1.style.display == 'none')
        {
            advSearch1.style.display = '';
            advSearch2.style.display = ''
            myLink.firstChild.nodeValue = 'Simplified Search';
            document.getElementById('QuickSearch_View_TextBox_AdvSearch').value = 'True';
        }else
        {
            advSearch1.style.display = 'none';
            advSearch2.style.display = 'none';
            myLink.firstChild.nodeValue = 'Advanced Search';
            document.getElementById('QuickSearch_View_TextBox_AdvSearch').value = 'False';
            document.getElementById('QuickSearch_View_RadioButton_Sort_0').checked = true;
            document.getElementById('QuickSearch_View_CarrierSelect_Carrier_TextBox_CarrierCode').value = '';
        }
    }
    showAdvSearch = 'False';
    if (showAdvSearch == 'True')
    {
        advSearch1.style.display = '';
        advSearch2.style.display = ''
        myLink.firstChild.nodeValue = 'Simplified Search';
    }else
    {
        advSearch1.style.display = 'none';
        advSearch2.style.display = 'none';
        myLink.firstChild.nodeValue = 'Advanced Search';
    }
  
	/*
	QuickSearch_View_CitySelect_DepartCityAjaxList.setDepartDay('QuickSearch_View_DateSelection_Depart_DropDownlist_Days');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setDepartMonth('QuickSearch_View_DateSelection_Depart_Dropdownlist_Month');
	QuickSearch_View_CitySelect_DepartCityAjaxList.setDepartYear('QuickSearch_View_DateSelection_Depart_Dropdownlist_Year');
	
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setReturnDay('QuickSearch_View_DateSelection_Return_DropDownlist_Days');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setReturnMonth('QuickSearch_View_DateSelection_Return_Dropdownlist_Month');
	QuickSearch_View_CitySelect_ReturnCityAjaxList.setReturnYear('QuickSearch_View_DateSelection_Return_Dropdownlist_Year');
	*/
	
    function validatePoints()
    {
        var myPoint = document.getElementById ('QuickSearch_View_txtSCBPoints').value;
	    
        var IntValue = parseInt(myPoint);
	    
        if (isNaN( IntValue))
        { 
            alert("The point value should be numeric.");
            return;
        }
        else if (IntValue &lt; 0 || IntValue == 0)
        {
            alert("The point value should not be equal or less than zero.");
            return;
        }
        else if (-1 != -1 &amp;&amp; IntValue &gt; -1)
        {
            alert('You have entered more than your points balance.');
            document.getElementById ('QuickSearch_View_txtSCBPoints').value ='-1';
            return;
        }
        else if (-1 &lt; -1)
        {
            alert('You have keyed in less than your minimum redeem points.');
            document.getElementById ('QuickSearch_View_txtSCBPoints').value ='-1';
            return;
        }
        else if (-1 != -1 &amp;&amp; IntValue &lt; -1)
        {
            alert('You have keyed in less than your minimum redeem points.');
            document.getElementById ('QuickSearch_View_txtSCBPoints').value ='-1';
            return;
        }
        else
        {
             document.getElementById ('QuickSearch_View_txtSCBPoints').value =IntValue;
        }
       
    }
    
    function ValidateNumber(evt) {
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        if (key == 8 || key == 13) {
            theEvent.returnValue = true;
        }
        else
        {
            key = String.fromCharCode( key );
            var regex = /[0-9]/;
            if (!regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    }
</script>
                                
							</div>
                            
                             
						</div>
				
            <div id="body_block_left_spacer2">
                <h1><span id="UserControl_DisplayAboutAsiaTravel_Label_AboutAsiatravel">About AsiaTravel</span></h1>
            </div>
			
            <div id="body_block_left_spacer5">
                <div id="content">
                <p><span id="UserControl_DisplayAboutAsiaTravel_Label_AboutAsiatravelContent">Asiatravel.com is Asia's largest hotel and flight reservation services with a wide network of ground supports and offices in key destinations. We offer over 200,000 hotels and resorts worldwide and flight departure points from major countries in Asia. All flights and hotels can be booked on instant-confirmation basis.</span></p>
                </div>
            </div>	

			<div id="body_block_left_spacer2">
                            </div>			
						
						
		
           
		</div>



<br/>
		<div class="right-sideber-hotel">
		
			
<!--**********************************start*******************-->
<div id="body_block_right_">
							<!--#### WP: Hot Destinations - Stays: Start #####################-->
							<!--#### WP: Hot Destinations - Stays: End #####################-->
							<!--#### WP: Hot Destinations - Flights: Start #####################-->
<div id="content1">

<table width="562" cellspacing="0" cellpadding="0" border="0" class="box1">
    <tbody><tr>
        <td>
            <table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-right: #97abb6 1px solid; border-top: #97abb6 1px solid; border-left: #97abb6 1px solid;
                border-bottom: #97abb6 1px solid" id="promodepartpoint">
                <tbody><tr>
                    <td width="30" bgcolor="#dcedf8" style="padding-left: 4px">
                        <img style="width:30px;border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/arrow_left.gif" id="UserControl_DisplayQuickSearchMulti_imgArrow">
                    </td>
                    <td width="510" bgcolor="#dcedf8" style="vertical-align:middle">
                        <p style="font-weight: bold; color: #FF6600;"><span id="UserControl_DisplayQuickSearchMulti_Label5">For Return or One-way booking please use Quick Search box on the left side.</span></p>
                    </td>
                </tr>
            </tbody></table>                
            <div class="smallspace10">
            </div>
            <h1><span id="UserControl_DisplayQuickSearchMulti_Label1">Multi Stop Booking</span></h1>
            <div class="smallspace10">
            </div>
            <h2><span id="UserControl_DisplayQuickSearchMulti_Label2">This Multi Stop allows you to create booking for</span></h2>
            <div class="smallspace">
            </div>
            <ul>
                <li>
                    <span id="UserControl_DisplayQuickSearchMulti_Label3">Departure from a different airport other than your arrival airport.</span>
                </li>
                <li>
                    <span id="UserControl_DisplayQuickSearchMulti_Label4">Journey having stopovers</span>
                </li>
            </ul>
        </td>
    </tr>
</tbody>
</table>


<table width="562" cellspacing="0" cellpadding="0" border="0" class="box1 border2">
    <tbody><tr id="back_lighter_3">
        <td>
            <div class="smallspace10">
            </div>
            <table cellspacing="0" cellpadding="0" border="0" style=" margin-left:6px;">
                <!--#### AT: FLIGHT 1 #####################-->
                <tbody><tr style="display:none;">
                    <td>
                    </td>
                    <td>
                        <span id="UserControl_DisplayQuickSearchMulti_Label_DepartFrom">Departing From</span>
                    </td>
                    <td>
                        <span id="UserControl_DisplayQuickSearchMulti_Label_ArriveAt">Traveling To</span>
                        
                        
                        
                        
                        
                        
                    </td>
                    <td>
                        <span id="UserControl_DisplayQuickSearchMulti_Label_DepartDate">Depart Date</span>
                        
                        
                        
                        
                        
                        
                        
                    </td>
                </tr>
                <tr style="display:none;">
                    <td height="8">
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-right:2px;">
                        <span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_Flight1">Flight 1</span>
                        
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture1_TextBox_CountryCity" value="Singapore, Singapore (SIN)" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture1$TextBox_CountryCity" style="color: rgb(0, 0, 0);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture1_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture1$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture1_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture1$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture1_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture1$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture1_TextBox_CountryCity").Watermark('Departing From');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture1_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture1_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture1_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("DEPARTURE"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival1_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival1$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival1_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival1$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival1_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival1$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival1_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival1$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival1_TextBox_CountryCity").Watermark('Traveling To');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival1_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival1_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival1_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        <input type="text" placeholder="Depart Date" class="goInputDate width100 ui-corner-all hasDatepicker" id="UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange1_TextBox_Date" name="UserControl_DisplayQuickSearchMulti$DateSelection_EditDateRange1$TextBox_Date" style="color: rgb(170, 170, 170);">
<script type="text/javascript">
    $(function() {
		$("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange1_TextBox_Date").Watermark('Depart Date');
    });
    
    $(function() {
	    var dates = $( "#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange1_TextBox_Date" ).datepicker({
	        minDate: 0,
		    defaultDate: "+0w",
		    dateFormat: "yy-mm-dd",
			changeYear: true,
		    yearRange: "-0:+1",
		    changeMonth: true,
		    numberOfMonths: 2,
            onClose: function() {$(this).blur();},
		    onSelect: function( selectedDate ) {
		        if ("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange2_TextBox_Date" != '')
		        {
                    //var minDate = $(this).datepicker('getDate');
                    //minDate.setDate(minDate.getDate()+2); //add two days
                    $("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange2_TextBox_Date").datepicker( "option", "minDate", selectedDate);
		        }
/*           
		             var minDate = $(this).datepicker('getDate');
                     minDate.setDate(minDate.getDate()+2); //add two days
                     $("#to_date").datepicker( "option", "minDate", minDate);

           
			    var option = this.id == "UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange1_TextBox_Date" ? "minDate" : "maxDate",
				    instance = $( this ).data( "datepicker" ),
				    date = $.datepicker.parseDate(
					    instance.settings.dateFormat ||
					    $.datepicker._defaults.dateFormat,
					    selectedDate, instance.settings );
			   if (option == "minDate")
			   {
			        dates.not( this ).datepicker( "option", option, date );
			   }
			   */
		    }
	    });
    });
    
/*           
    
$("#fd1").datepicker({
     onSelect: function (theDate) {
                   //theDate is the date String inside the fd1 textField
                   //create a date var and add it to the fd2 datepicker as minDate
                    var then= new Date();
                    var day = parseInt(theDate.substring(0, 2)) + 1;
                    var month = parseInt(theDate.substring(3, 5));
                    var year = theDate.substring(6, 10);
                    then.setFullYear(year, month - 1, day);
                   $("#fd2").datepicker('option', 'minDate', then);
               }
});
			   */

</script>
                    </td>
                </tr>
                <tr>
                    <td height="15" colspan="3">&nbsp;</td>
                </tr>
                <!--#### AT: FLIGHT 2 #####################-->
                <tr>
                    <td colspan="3" style="vertical-align:middle;">
                        <span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_Flight2">Flight 2</span>
                        
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture2_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture2$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture2_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture2$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture2_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture2$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture2_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture2$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture2_TextBox_CountryCity").Watermark('Departing From');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture2_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture2_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture2_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival2_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival2$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival2_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival2$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival2_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival2$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival2_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival2$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival2_TextBox_CountryCity").Watermark('Traveling To');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival2_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival2_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival2_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        <input type="text" placeholder="Depart Date" class="goInputDate width100 ui-corner-all hasDatepicker" id="UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange2_TextBox_Date" name="UserControl_DisplayQuickSearchMulti$DateSelection_EditDateRange2$TextBox_Date" style="color: rgb(170, 170, 170);">
<script type="text/javascript">
    $(function() {
		$("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange2_TextBox_Date").Watermark('Depart Date');
    });
    
    $(function() {
	    var dates = $( "#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange2_TextBox_Date" ).datepicker({
	        minDate: 0,
		    defaultDate: "+0w",
		    dateFormat: "yy-mm-dd",
			changeYear: true,
		    yearRange: "-0:+1",
		    changeMonth: true,
		    numberOfMonths: 2,
            onClose: function() {$(this).blur();},
		    onSelect: function( selectedDate ) {
		        if ("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange3_TextBox_Date" != '')
		        {
                    //var minDate = $(this).datepicker('getDate');
                    //minDate.setDate(minDate.getDate()+2); //add two days
                    $("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange3_TextBox_Date").datepicker( "option", "minDate", selectedDate);
		        }
/*           
		             var minDate = $(this).datepicker('getDate');
                     minDate.setDate(minDate.getDate()+2); //add two days
                     $("#to_date").datepicker( "option", "minDate", minDate);

           
			    var option = this.id == "UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange2_TextBox_Date" ? "minDate" : "maxDate",
				    instance = $( this ).data( "datepicker" ),
				    date = $.datepicker.parseDate(
					    instance.settings.dateFormat ||
					    $.datepicker._defaults.dateFormat,
					    selectedDate, instance.settings );
			   if (option == "minDate")
			   {
			        dates.not( this ).datepicker( "option", option, date );
			   }
			   */
		    }
	    });
    });
    
/*           
    
$("#fd1").datepicker({
     onSelect: function (theDate) {
                   //theDate is the date String inside the fd1 textField
                   //create a date var and add it to the fd2 datepicker as minDate
                    var then= new Date();
                    var day = parseInt(theDate.substring(0, 2)) + 1;
                    var month = parseInt(theDate.substring(3, 5));
                    var year = theDate.substring(6, 10);
                    then.setFullYear(year, month - 1, day);
                   $("#fd2").datepicker('option', 'minDate', then);
               }
});
			   */

</script>
                    </td>
                </tr>
                <tr>
                    <td height="15" colspan="3">&nbsp;</td>
                </tr>
                <!--#### AT: FLIGHT 3 #####################-->
                <tr>
                    <td colspan="3" style="vertical-align:middle;">
                        <span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_Flight3">Flight 3</span>
                        
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture3_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture3$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture3_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture3$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture3_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture3$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture3_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture3$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture3_TextBox_CountryCity").Watermark('Departing From');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture3_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture3_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture3_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival3_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival3$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival3_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival3$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival3_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival3$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival3_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival3$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival3_TextBox_CountryCity").Watermark('Traveling To');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival3_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival3_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival3_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        <input type="text" placeholder="Depart Date" class="goInputDate width100 ui-corner-all hasDatepicker" id="UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange3_TextBox_Date" name="UserControl_DisplayQuickSearchMulti$DateSelection_EditDateRange3$TextBox_Date" style="color: rgb(170, 170, 170);">
<script type="text/javascript">
    $(function() {
		$("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange3_TextBox_Date").Watermark('Depart Date');
    });
    
    $(function() {
	    var dates = $( "#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange3_TextBox_Date" ).datepicker({
	        minDate: 0,
		    defaultDate: "+0w",
		    dateFormat: "yy-mm-dd",
			changeYear: true,
		    yearRange: "-0:+1",
		    changeMonth: true,
		    numberOfMonths: 2,
            onClose: function() {$(this).blur();},
		    onSelect: function( selectedDate ) {
		        if ("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange4_TextBox_Date" != '')
		        {
                    //var minDate = $(this).datepicker('getDate');
                    //minDate.setDate(minDate.getDate()+2); //add two days
                    $("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange4_TextBox_Date").datepicker( "option", "minDate", selectedDate);
		        }
/*           
		             var minDate = $(this).datepicker('getDate');
                     minDate.setDate(minDate.getDate()+2); //add two days
                     $("#to_date").datepicker( "option", "minDate", minDate);

           
			    var option = this.id == "UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange3_TextBox_Date" ? "minDate" : "maxDate",
				    instance = $( this ).data( "datepicker" ),
				    date = $.datepicker.parseDate(
					    instance.settings.dateFormat ||
					    $.datepicker._defaults.dateFormat,
					    selectedDate, instance.settings );
			   if (option == "minDate")
			   {
			        dates.not( this ).datepicker( "option", option, date );
			   }
			   */
		    }
	    });
    });
    
/*           
    
$("#fd1").datepicker({
     onSelect: function (theDate) {
                   //theDate is the date String inside the fd1 textField
                   //create a date var and add it to the fd2 datepicker as minDate
                    var then= new Date();
                    var day = parseInt(theDate.substring(0, 2)) + 1;
                    var month = parseInt(theDate.substring(3, 5));
                    var year = theDate.substring(6, 10);
                    then.setFullYear(year, month - 1, day);
                   $("#fd2").datepicker('option', 'minDate', then);
               }
});
			   */

</script>
                    </td>
                </tr>
                <tr>
                    <td height="15" colspan="3">&nbsp;</td>
                </tr>
                <!--#### AT: FLIGHT 4 #####################-->
                <tr>
                    <td colspan="3" style="vertical-align:middle;">
                        <span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_Flight4">Flight 4</span>
                        
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture4_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture4$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture4_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture4$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture4_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture4$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture4_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture4$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture4_TextBox_CountryCity").Watermark('Departing From');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture4_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture4_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture4_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival4_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival4$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival4_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival4$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival4_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival4$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival4_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival4$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival4_TextBox_CountryCity").Watermark('Traveling To');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival4_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival4_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival4_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        <input type="text" placeholder="Depart Date" class="goInputDate width100 ui-corner-all hasDatepicker" id="UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange4_TextBox_Date" name="UserControl_DisplayQuickSearchMulti$DateSelection_EditDateRange4$TextBox_Date" style="color: rgb(170, 170, 170);">
<script type="text/javascript">
    $(function() {
		$("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange4_TextBox_Date").Watermark('Depart Date');
    });
    
    $(function() {
	    var dates = $( "#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange4_TextBox_Date" ).datepicker({
	        minDate: 0,
		    defaultDate: "+0w",
		    dateFormat: "yy-mm-dd",
			changeYear: true,
		    yearRange: "-0:+1",
		    changeMonth: true,
		    numberOfMonths: 2,
            onClose: function() {$(this).blur();},
		    onSelect: function( selectedDate ) {
		        if ("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange5_TextBox_Date" != '')
		        {
                    //var minDate = $(this).datepicker('getDate');
                    //minDate.setDate(minDate.getDate()+2); //add two days
                    $("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange5_TextBox_Date").datepicker( "option", "minDate", selectedDate);
		        }
/*           
		             var minDate = $(this).datepicker('getDate');
                     minDate.setDate(minDate.getDate()+2); //add two days
                     $("#to_date").datepicker( "option", "minDate", minDate);

           
			    var option = this.id == "UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange4_TextBox_Date" ? "minDate" : "maxDate",
				    instance = $( this ).data( "datepicker" ),
				    date = $.datepicker.parseDate(
					    instance.settings.dateFormat ||
					    $.datepicker._defaults.dateFormat,
					    selectedDate, instance.settings );
			   if (option == "minDate")
			   {
			        dates.not( this ).datepicker( "option", option, date );
			   }
			   */
		    }
	    });
    });
    
/*           
    
$("#fd1").datepicker({
     onSelect: function (theDate) {
                   //theDate is the date String inside the fd1 textField
                   //create a date var and add it to the fd2 datepicker as minDate
                    var then= new Date();
                    var day = parseInt(theDate.substring(0, 2)) + 1;
                    var month = parseInt(theDate.substring(3, 5));
                    var year = theDate.substring(6, 10);
                    then.setFullYear(year, month - 1, day);
                   $("#fd2").datepicker('option', 'minDate', then);
               }
});
			   */

</script>
                    </td>
                </tr>
                <tr>
                    <td height="15" colspan="3">&nbsp;</td>
                </tr>
                <!--#### AT: FLIGHT 5 #####################-->
                <tr>
                    <td colspan="3" style="vertical-align:middle;">
                        <span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_Flight5">Flight 5</span>
                        
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture5_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture5$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture5_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture5$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture5_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture5$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture5_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture5$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture5_TextBox_CountryCity").Watermark('Departing From');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture5_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture5_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture5_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival5_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival5$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival5_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival5$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival5_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival5$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival5_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival5$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival5_TextBox_CountryCity").Watermark('Traveling To');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival5_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival5_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival5_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        <input type="text" placeholder="Depart Date" class="goInputDate width100 ui-corner-all hasDatepicker" id="UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange5_TextBox_Date" name="UserControl_DisplayQuickSearchMulti$DateSelection_EditDateRange5$TextBox_Date" style="color: rgb(170, 170, 170);">
<script type="text/javascript">
    $(function() {
		$("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange5_TextBox_Date").Watermark('Depart Date');
    });
    
    $(function() {
	    var dates = $( "#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange5_TextBox_Date" ).datepicker({
	        minDate: 0,
		    defaultDate: "+0w",
		    dateFormat: "yy-mm-dd",
			changeYear: true,
		    yearRange: "-0:+1",
		    changeMonth: true,
		    numberOfMonths: 2,
            onClose: function() {$(this).blur();},
		    onSelect: function( selectedDate ) {
		        if ("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange6_TextBox_Date" != '')
		        {
                    //var minDate = $(this).datepicker('getDate');
                    //minDate.setDate(minDate.getDate()+2); //add two days
                    $("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange6_TextBox_Date").datepicker( "option", "minDate", selectedDate);
		        }
/*           
		             var minDate = $(this).datepicker('getDate');
                     minDate.setDate(minDate.getDate()+2); //add two days
                     $("#to_date").datepicker( "option", "minDate", minDate);

           
			    var option = this.id == "UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange5_TextBox_Date" ? "minDate" : "maxDate",
				    instance = $( this ).data( "datepicker" ),
				    date = $.datepicker.parseDate(
					    instance.settings.dateFormat ||
					    $.datepicker._defaults.dateFormat,
					    selectedDate, instance.settings );
			   if (option == "minDate")
			   {
			        dates.not( this ).datepicker( "option", option, date );
			   }
			   */
		    }
	    });
    });
    
/*           
    
$("#fd1").datepicker({
     onSelect: function (theDate) {
                   //theDate is the date String inside the fd1 textField
                   //create a date var and add it to the fd2 datepicker as minDate
                    var then= new Date();
                    var day = parseInt(theDate.substring(0, 2)) + 1;
                    var month = parseInt(theDate.substring(3, 5));
                    var year = theDate.substring(6, 10);
                    then.setFullYear(year, month - 1, day);
                   $("#fd2").datepicker('option', 'minDate', then);
               }
});
			   */

</script>
                    </td>
                </tr>
                <tr>
                    <td height="15" colspan="3">&nbsp;</td>
                </tr>
                <!--#### AT: FLIGHT 6 #####################-->
                <tr>
                    <td colspan="3" style="vertical-align:middle;">
                        <span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_Flight6">Flight 6</span>
                        
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture6_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture6$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture6_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture6$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture6_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture6$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture6_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteDeparture6$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture6_TextBox_CountryCity").Watermark('Departing From');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture6_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture6_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteDeparture6_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        
<bdo dir="ltr">
    <input type="text" class="width200 goSearch ui-corner-all ui-autocomplete-input" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival6_TextBox_CountryCity" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival6$TextBox_CountryCity" style="color: rgb(170, 170, 170);" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival6_HiddenField_CityName" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival6$HiddenField_CityName"> 
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival6_HiddenField_CityCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival6$HiddenField_CityCode">  
    <input type="text" style="display:none;" id="UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival6_HiddenField_CountryCode" name="UserControl_DisplayQuickSearchMulti$UserControl_DisplayCityAutocompleteArrival6$HiddenField_CountryCode">  
</bdo>
<script type="text/javascript">
    jQuery(function($){
        $("#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival6_TextBox_CountryCity").Watermark('Traveling To');
    });
    
    $(function() {
		    function log( CityCode, CountryCode ) {
                var HiddenFieldCityCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival6_HiddenField_CityCode');
                var HiddenFieldCountryCode = document.getElementById('UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival6_HiddenField_CountryCode');
    
		        HiddenFieldCityCode.value = CityCode;
		        HiddenFieldCountryCode.value = CountryCode;
		    }
                
		    $( "#UserControl_DisplayQuickSearchMulti_UserControl_DisplayCityAutocompleteArrival6_TextBox_CountryCity" ).autocomplete({
			    source: function( request, response ) {
				    $.ajax({
					    url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
                        type: 'GET',
                        data: { startswith: JSON.stringify(request.term),
                                prd: JSON.stringify("flight"),
                                tp : JSON.stringify("ARRIVAL"), 
                                code : JSON.stringify("null"), 
                                culture : JSON.stringify("en-US"), 
                                partnerid : JSON.stringify("1000") },
				        dataType: 'jsonp',
					    error: function(req,stat,err){
				            alert(err);
                        },
					    success: function( data ) {
						    response( $.map( data, function( item ) {
							    return {
								    label: item.CityName + ", " + item.CountryName + " (" + item.CityCode + ")",
                                    CityID: item.CityCode,
                                    CountryCode: item.CountryCode
							    }
						    }));
					    }
				    });
			    },
			    minLength: 3,
			    select: function( event, ui ) {
                        log( ui.item.CityID, ui.item.CountryCode);
			    },
			    open: function() {
				    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
			    },
			    close: function() {
				    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
			    }
		    })
            .focus(function () {
                    $(this).select();
                    //if ('False' == 'True')
                    //{
                    //    $(this).trigger('keydown.autocomplete');
                    //}
                })
	    });
</script>
                    </td>
                    <td>
                        <input type="text" placeholder="Depart Date" class="goInputDate width100 ui-corner-all hasDatepicker" id="UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange6_TextBox_Date" name="UserControl_DisplayQuickSearchMulti$DateSelection_EditDateRange6$TextBox_Date" style="color: rgb(170, 170, 170);">
<script type="text/javascript">
    $(function() {
		$("#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange6_TextBox_Date").Watermark('Depart Date');
    });
    
    $(function() {
	    var dates = $( "#UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange6_TextBox_Date" ).datepicker({
	        minDate: 0,
		    defaultDate: "+0w",
		    dateFormat: "yy-mm-dd",
			changeYear: true,
		    yearRange: "-0:+1",
		    changeMonth: true,
		    numberOfMonths: 2,
            onClose: function() {$(this).blur();},
		    onSelect: function( selectedDate ) {
		        if ("#" != '')
		        {
                    //var minDate = $(this).datepicker('getDate');
                    //minDate.setDate(minDate.getDate()+2); //add two days
                    $("#").datepicker( "option", "minDate", selectedDate);
		        }
/*           
		             var minDate = $(this).datepicker('getDate');
                     minDate.setDate(minDate.getDate()+2); //add two days
                     $("#to_date").datepicker( "option", "minDate", minDate);

           
			    var option = this.id == "UserControl_DisplayQuickSearchMulti_DateSelection_EditDateRange6_TextBox_Date" ? "minDate" : "maxDate",
				    instance = $( this ).data( "datepicker" ),
				    date = $.datepicker.parseDate(
					    instance.settings.dateFormat ||
					    $.datepicker._defaults.dateFormat,
					    selectedDate, instance.settings );
			   if (option == "minDate")
			   {
			        dates.not( this ).datepicker( "option", option, date );
			   }
			   */
		    }
	    });
    });
    
/*           
    
$("#fd1").datepicker({
     onSelect: function (theDate) {
                   //theDate is the date String inside the fd1 textField
                   //create a date var and add it to the fd2 datepicker as minDate
                    var then= new Date();
                    var day = parseInt(theDate.substring(0, 2)) + 1;
                    var month = parseInt(theDate.substring(3, 5));
                    var year = theDate.substring(6, 10);
                    then.setFullYear(year, month - 1, day);
                   $("#fd2").datepicker('option', 'minDate', then);
               }
});
			   */

</script>
                    </td>
                </tr>
            </tbody></table>
            <div class="smallspace10">
            </div>
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody><tr>
                    <td style="width: 10%">
                    </td>
                    <td style="width: 40%">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody><tr>
                                <td style="width:20%; vertical-align:middle;">
                                    &nbsp;<span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_Adult">Adult</span>
                                </td>
                                <td style="width:30%; vertical-align:middle;">
                                    &nbsp;
                                    <select class="width40 goSearch ui-corner-all" id="UserControl_DisplayQuickSearchMulti_Dropdownlist_Adult" name="UserControl_DisplayQuickSearchMulti$Dropdownlist_Adult">
	<option value="1" selected="selected">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>

</select>
                                </td>
                                <td style="width:20%; vertical-align:middle;">
                                    &nbsp;<span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_Child">Child</span>
                                </td>
                                <td style="width:40%; vertical-align:middle;">
                                    &nbsp;
                                    <select class="width40 goSearch ui-corner-all" id="UserControl_DisplayQuickSearchMulti_Dropdownlist_child" name="UserControl_DisplayQuickSearchMulti$Dropdownlist_child">
	<option value="0" selected="selected">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>

</select>
                                    
                                    
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                    <td style="width: 30%">
                        <table cellspacing="0" cellpadding="0" border="0" class="floatRight">
                            <tbody><tr>
                                <td align="left" style="vertical-align:middle;">
                                    <span style="font-weight:bold;" id="UserControl_DisplayQuickSearchMulti_Label_class">Class</span>
                                </td>
                                <td align="left" style="vertical-align:middle;">
                                    &nbsp;
                                    <select class="width100 goSearch ui-corner-all" id="UserControl_DisplayQuickSearchMulti_Dropdownlist_SeatClass" name="UserControl_DisplayQuickSearchMulti$Dropdownlist_SeatClass">
	<option value="Economy">Economy</option>
	<option value="EconomyPremium">Premium Economy</option>
	<option value="Business">Business</option>
	<option value="First">First</option>

</select>
                                </td>
                            </tr>
                        </tbody></table>
                    </td>
                    <td style="width: 20%">
                    </td>
                </tr>
            </tbody></table>
            <div class="smallspace10">
            </div>
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
                <tbody><tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td style="width:30%;">
                    </td>
                    <td style="width:20%; text-align:center;">
                        <input type="submit" class="goShowAvaibility" id="UserControl_DisplayQuickSearchMulti_Button_find" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;UserControl_DisplayQuickSearchMulti$Button_find&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" value="Find" name="UserControl_DisplayQuickSearchMulti$Button_find">
                    </td>
                    <td style="width:20%; text-align:center;">
                        <input type="submit" class="goShowAvaibility" id="UserControl_DisplayQuickSearchMulti_Button_clear" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;UserControl_DisplayQuickSearchMulti$Button_clear&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" value="Clear" name="UserControl_DisplayQuickSearchMulti$Button_clear">
                    </td>
                    <td style="width:30%;">
                    </td>
                </tr>
            </tbody></table>
            <div class="smallspace10">
            </div>
        </td>
    </tr>
</tbody></table>

								
</div>
						
</div>
<!--********************end************************************-->


			
					
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
  $("#flight-confirm-form").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#bookflight").on('click', function(event){
        event.preventDefault();
        var data = $("#flight-confirm-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#flight-confirm-form").valid()) return false;  
            window.location = '/fernleaf/?page_id=1113&' + data;
    });
  });
  
  function get_type(type)
  {
	  //alert(type);
	  if(type=='Radio_return')
	  {
		  document.getElementById('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days').disabled = false;
		  document.getElementById('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year').disabled = false;
		  document.getElementById('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month').disabled = false;
		  document.getElementById('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Timing').disabled = false;
	  }
	  else
	  {
		  document.getElementById('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Days').disabled=true;
		  document.getElementById('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Year').disabled=true;
		  document.getElementById('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Month').disabled=true;
		  document.getElementById('QuickSearch_View_DateSelection_Returnsml_Dropdownlist_Timing').disabled=true;
	  }
	  
  }
  

</script>

<?php get_footer(); ?>