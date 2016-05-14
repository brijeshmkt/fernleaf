<?php
/*
  Template Name: Page flightshow Page
 */
?>

<?php
error_reporting(0);
global $wpdb;

// get_header(); 
print_r($_GET);

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
				    <a href="#" class="link" title="Click here for Multistop" id="QuickSearch_View_LinkButton_MultiCity">Multi stop</a>
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
				

				
						
						
						
		
           
		</div>



<br/>
		<div class="right-sideber-hotel">
		
		
		<div style="width:0%">
<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td><span id="UserControl_DisplayTrackBarWizard_label_Search">Search</span>
		</td>
		<td><span id="UserControl_DisplayTrackBarWizard_Label_Select" class="orange">Select</span>
		</td>
		<td><span id="UserControl_DisplayTrackBarWizard_Label_Confirm">Confirm</span>
		</td>
		<td><span id="UserControl_DisplayTrackBarWizard_Label_Payment">Payment</span>
		</td>
	</tr>
	<tr>
		<td colspan="4">
			<img id="UserControl_DisplayTrackBarWizard_Image_WizardBar" src="http://flight.asiatravel.com/crs.style/active/img/s_s_c_p_01.gif" style="border-width:0px;" />
		</td>
	</tr>
</table>
</div>
		
		<?php
		
		if(isset($flightstype))
		{

				?>
				<div class="twelve columns">
                <div class="search-results-main">
				
				<div style="padding-left:4%; font-weight:bold;">
				<?php echo $departure_city.' To '.$arrival_city,', '.$departure_date;?>
				</div>
				<br/>
					<ul style="padding-left:4%;">
						<li>All Prices are quoted (USD) on as per adult basis</li>
						<li>Prices displayed are inclusive of surcharges and taxes</li>
						<li>All timings shown are in local city times</li>
						<li>Prices are not guaranteed until payment in full is received and your ticket(s) are issued</li>
						</ul>
						<br/>
						
						<form name="Form1" method="post" action="Search.aspx?usid=b37acf06-c2fb-4a79-ada8-71324551a880&amp;lan=en-US&amp;scode=&amp;departcity=AMD&amp;arrivalcity=BOM" onsubmit="javascript:return WebForm_OnSubmit();" id="Form1">



			<div id="container">
				
				<div>
					
					<!--#### WP: Right Content Area: Start #####################-->
					<div id="body_block_right">
						<div id="body_block_right_">
							<!--#### WP: Hot Destinations - Stays: Start #####################-->
							<div id="content1">
								
								

<style type="text/css">
    .matrix_wrapper                 {background-color:#BFDBE7;}
    .orange							{color: #ff3300;}
	
    .matrix_table                   {background-color:#FFFFFF;}
    
    .matrix_caption_container       {}
    .matrix_caption_content         {}
    .matrix_caption_table_header    {height:105px; text-align:center; vertical-align:middle;}
    .matrix_caption_table_header td {border:1px solid #DDEAF2; padding:5px 5px 5px 5px;}
    .matrix_caption_table_detail    {height:20px;}
    .matrix_caption_table_detail td {border:1px solid #DDEAF2; background-color:#7EC7E5; color:#FFFFFF; padding-right:5px;}

    .matrix_item_container          {}
    .matrix_item_content            {margin-bottom:10px; overflow:hidden;}
    .matrix_item_table_header       {height:105px; text-align:center; vertical-align:middle;}
    .matrix_item_table_header td    {border:1px solid #DDEAF2; padding: 5px 5px 5px 5px;}
    .matrix_item_table_detail       {height:20px; text-align:center;}
    .matrix_item_table_detail td    {border:1px solid #DDEAF2;}

    .matrix_item_scroll_slider      {height:6px; margin-bottom:2px; background:#ddd; position:relative; cursor:pointer; border: 1px solid #7EC7E5;}
    .ui-slider .ui-slider-handle    {width:16px; height:12px; position:absolute; top:-3px; background:#234786; border:none}
</style> 
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>   


<div id="div_MatrixWrapper" class="matrix_wrapper">     
    <table cellpadding="1" cellspacing="0">
        <tr>
            <td style="vertical-align:top;">
                <div class="matrix_caption_container">
                    <div class="matrix_caption_content">
                        <table cellpadding="1" cellspacing="0">
                            <tr>
                                <td>
                                    <table cellpadding="0" cellspacing="0" class="matrix_table">
                                        <tr id="DisplayPriceMatrix_tr_Header" class="matrix_caption_table_header">
											<td>
                                                <span id="DisplayPriceMatrix_Label_Airlines" style="font-weight:bold;">Airlines</span>
                                                <br /><br />
                                                <a id="DisplayPriceMatrix_LinkButton_ClearAll" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$LinkButton_ClearAll&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">[Clear]</a>
                                            </td>
										</tr>

                                        <tr id="DisplayPriceMatrix_tr_HeaderDirect" class="matrix_caption_table_detail">
											<td>
                                                <span id="DisplayPriceMatrix_Label_Direct" style="font-weight:bold;">Direct</span>
                                            </td>
										</tr>

                                        <tr id="DisplayPriceMatrix_tr_Header1Stop" class="matrix_caption_table_detail">
											<td>
                                                <span id="DisplayPriceMatrix_Label_1Stop" style="font-weight:bold;">1 stop</span>
                                            </td>
										</tr>

                                        <tr id="DisplayPriceMatrix_tr_Header2Stops" class="matrix_caption_table_detail">
											<td>
                                                <span id="DisplayPriceMatrix_Label_2Stops" style="font-weight:bold;">2+ stops</span>
                                            </td>
										</tr>

                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
            <td style="vertical-align:top;">
                <div class="matrix_item_container">
                    <div id="div_matrix_item_content" class="matrix_item_content">
                        <table cellpadding="1" cellspacing="0">
                            <tr>
                                
                                        <td>
                                            <table cellpadding="0" cellspacing="0" class="matrix_table">
                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_tr_AirlineDetails" class="matrix_item_table_header">
													<td style="vertical-align:top;">
                                                        <span class="Code_AI"><input id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_CheckBox_Airline" type="checkbox" name="DisplayPriceMatrix$Repeater_PriceMatrix$ctl00$CheckBox_Airline" onclick="javascript:setTimeout('__doPostBack(\'DisplayPriceMatrix$Repeater_PriceMatrix$ctl00$CheckBox_Airline\',\'\')', 0)" /></span><br />
                                                        <img id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_Image_Airline" src="http://flight.asiatravel.com/crs.file/carrier/AI.jpg" style="height:30px;border-width:0px;" /><br />
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_LinkButton_Airline" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl00$LinkButton_Airline&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">Air India</a>
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_tr_Direct" class="matrix_item_table_detail">
													<td>
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_LinkButton_PriceDirect" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl00$LinkButton_PriceDirect&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">USD61.37</a>
                                                        
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_tr_1Stop" class="matrix_item_table_detail">
													<td>
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_LinkButton_Price1Stop" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl00$LinkButton_Price1Stop&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">USD121.43</a>
                                                        
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_tr_2Stops" class="matrix_item_table_detail">
													<td>
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl00_LinkButton_Price2Stops" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl00$LinkButton_Price2Stops&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">USD165.08</a>
                                                        
                                                    </td>
												</tr>

                                            </table>
                                        </td>
                                    
                                        <td>
                                            <table cellpadding="0" cellspacing="0" class="matrix_table">
                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_tr_AirlineDetails" class="matrix_item_table_header">
											<td style="vertical-align:top;">
                                                        <span class="Code_9W"><input id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_CheckBox_Airline" type="checkbox" name="DisplayPriceMatrix$Repeater_PriceMatrix$ctl01$CheckBox_Airline" onclick="javascript:setTimeout('__doPostBack(\'DisplayPriceMatrix$Repeater_PriceMatrix$ctl01$CheckBox_Airline\',\'\')', 0)" /></span><br />
                                                        <img id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_Image_Airline" src="http://flight.asiatravel.com/crs.file/carrier/9W.gif" style="height:30px;border-width:0px;" /><br />
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_LinkButton_Airline" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl01$LinkButton_Airline&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">JET Airways</a>
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_tr_Direct" class="matrix_item_table_detail">
													<td>
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_LinkButton_PriceDirect" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl01$LinkButton_PriceDirect&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">USD61.62</a>
                                                        
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_tr_1Stop" class="matrix_item_table_detail">
													<td>
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_LinkButton_Price1Stop" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl01$LinkButton_Price1Stop&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">USD324.01</a>
                                                        
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_tr_2Stops" class="matrix_item_table_detail">
													<td>
                                                        
                                                        <span id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl01_Label_Price2Stops">-</span>
                                                    </td>
												</tr>

                                            </table>
                                        </td>
                                    
                                        <td>
                                            <table cellpadding="0" cellspacing="0" class="matrix_table">
                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_tr_AirlineDetails" class="matrix_item_table_header">
													<td style="vertical-align:top;">
                                                        <span class="Code_UK"><input id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_CheckBox_Airline" type="checkbox" name="DisplayPriceMatrix$Repeater_PriceMatrix$ctl02$CheckBox_Airline" onclick="javascript:setTimeout('__doPostBack(\'DisplayPriceMatrix$Repeater_PriceMatrix$ctl02$CheckBox_Airline\',\'\')', 0)" /></span><br />
                                                        <img id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_Image_Airline" src="http://flight.asiatravel.com/crs.file/carrier/noimage.gif" style="height:30px;border-width:0px;" /><br />
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_LinkButton_Airline" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl02$LinkButton_Airline&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">UK</a>
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_tr_Direct" class="matrix_item_table_detail">
													<td>
                                                        
                                                        <span id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_Label_PriceDirect">-</span>
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_tr_1Stop" class="matrix_item_table_detail">
													<td>
                                                        <a id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_LinkButton_Price1Stop" href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;DisplayPriceMatrix$Repeater_PriceMatrix$ctl02$LinkButton_Price1Stop&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))">USD131.53</a>
                                                        
                                                    </td>
												</tr>

                                                <tr id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_tr_2Stops" class="matrix_item_table_detail">
													<td>
                                                        
                                                        <span id="DisplayPriceMatrix_Repeater_PriceMatrix_ctl02_Label_Price2Stops">-</span>
                                                    </td>
												</tr>

                                            </table>
                                        </td>
                                    
                            </tr>
                        </table>
                    </div>
                    <div id="div_matrix_item_scroll_slider" class="matrix_item_scroll_slider"></div>
                </div>
            </td>
        </tr>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
			
<!--**********************************start*******************-->
<div id="body_block_right_">
							<!--#### WP: Hot Destinations - Stays: Start #####################-->
							<!--#### WP: Hot Destinations - Stays: End #####################-->
							<!--#### WP: Hot Destinations - Flights: Start #####################-->
							<div id="content1">
								
								<span style="color:Red;display:none;" id="CustomValidator1"></span>
								

<script src="../js/FlightBookingProcess.js" type="text/javascript"> </script>
<script src="../js/Flight.SearchResult.js?v=1.1" type="text/javascript"></script>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="margin:5px 0 0 0;" id="DisplaySearchResult_View_table_CashVoucher">
	<tbody><tr>
		<td style="width:20px; padding:0 5px 0 0;">
            <img style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/cash_voucher.gif" id="DisplaySearchResult_View_Image_CashVoucher">
        </td>
		<td>
            <b><span id="DisplaySearchResult_View_Label_CashVoucher">Applicable for Cash Voucher / Discount Code</span></b>
        </td>
	</tr>
</tbody></table>

<form id="flight-confirm-form">

<?php 
if(isset($_REQUEST['flights-type']) && $_REQUEST['flights-type']=='Return')
{
	?>
	<table cellspacing="0" cellpadding="0" border="0" style="border-color:White;border-width:0px;width:100%;border-collapse:collapse;" id="DisplaySearchResult_View_Datagrid_fares" rules="cols" class="box1">
	<tbody><tr>
		<td>
				<table cellspacing="0" cellpadding="0" border="0" style="width:100%">
					<tbody><tr class="back_lighter">
						<td class="panLeft" style="width:65%; text-transform: capitalize">
							<p style="font-weight:bold; color:#0C094E">Available (Instant Confirmation) <img style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/cash_voucher.gif" id="DisplaySearchResult_View_Datagrid_fares_ctl03_Image_CashVoucher"></p>
							
						</td>
						<td class="panRight" style="width:35%;">
							<table width="100%" cellspacing="0" cellpadding="0" border="0">
							<tbody><tr>
							<td colspan="2"><p class="panRight floatRight" style="font-weight:bold; color:#0C094E">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label1"></span>
							    69.00
							</p></td>
							</tr>
							<tr id="DisplaySearchResult_View_Datagrid_fares_ctl03_tr_TaxAmountAdt">
			<td><span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label_Tax">Plus applicable taxes</span></td>
			<td class="price">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label3"></span>
								36.99
							</td>
		</tr>
		
							<tr>
							<td><span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label_TotalFare">Total fare</span></td>
							<td class="price">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label4"></span>
                                105.99
							</td>
							</tr>
							</tbody></table>
					
						</td>
					</tr>
					<tr style="padding: 0px 0px 0px 0px;">
						<td colspan="2">
							

<table width="100%" cellspacing="0" cellpadding="0" border="0" class="box1">
<tbody><tr class="back_lighter">
	<td><p><b></b></p></td>
</tr>
<tr>
	<td>
		
						<table cellspacing="0" cellpadding="0" border="0" style="border-color:White;border-width:0px;border-style:Solid;width:100%;border-collapse:collapse;" id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments" name="Datagrid_Segments">
			<tbody><tr class="back_lighter_1 strong">
				<td style="width: 28px;"><img align="absmiddle" style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/plane_takeoff_28x17.gif"></td><td> Departure</td><td>&nbsp;</td><td><span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Flight">Flight</span></td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Departure">Departure</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Arrival">Arrival</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Class">Class</span>
								</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_TotalTravelTime">Total&nbsp;Travel&nbsp;Time</span>
								</td>
			</tr><tr class="back_lighter_2">
				<td align="center" style="width:15%;" rowspan="3" colspan="2">
									<img style="align: middle;width:55px;height:60px;" title="Air India" id="AirlineLogo" src="http://flight.asiatravel.com/crs.file/carrier/AI.jpg">
								</td><td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    AI191
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;">
								    21:30hrs, 31/03/2016<br> <strong class="darkblue">Ahmedabad (AMD)</strong>
								    
								    
								    
								    
								</td><td style="width:1%;"></td><td style="width:21%;">
								    22:45hrs, 31/03/2016<br> <strong class="darkblue">Mumbai (BOM)</strong>
								</td><td style="width:1%;"></td><td style="width:11%;">Economy</td><td style="width:20%;">1hrs 15mins</td>
			</tr><tr class="back_lighter_2">
				<td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;" colspan="6">
								    
								    <img style="width:12px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/bag.png"> 1x25kg checked bag included
								    
								    
								    
								</td><td style="width:1%;width: 1%;"></td><td style="width:21%;">
								    
								</td><td style="width:1%;"></td><td style="width:11%;"></td><td style="width:20%;"></td>
			</tr>
		</tbody></table>
					
			
						<table cellspacing="0" cellpadding="0" border="0" style="border-color:White;border-width:0px;border-style:Solid;width:100%;border-collapse:collapse;" id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments" name="Datagrid_Segments">
			<tbody><tr class="back_lighter_1 strong">
				<td style="width: 28px;"><img align="absmiddle" style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/plane_landing_28x17.gif"></td><td> Return</td><td>&nbsp;</td><td><span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_Flight">Flight</span></td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_Departure">Departure</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_Arrival">Arrival</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_Class">Class</span>
								</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_TotalTravelTime">Total&nbsp;Travel&nbsp;Time</span>
								</td>
			</tr><tr class="back_lighter_2">
				<td align="center" style="width:15%;" rowspan="3" colspan="2">
									<img style="align: middle;width:55px;height:60px;" title="Air India" id="AirlineLogo" src="http://flight.asiatravel.com/crs.file/carrier/AI.jpg">
								</td><td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    AI331
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;">
								    01:20hrs, 30/04/2016<br> <strong class="darkblue">Mumbai (BOM)</strong>
								    
								    
								    
								    
								</td><td style="width:1%;"></td><td style="width:21%;">
								    02:25hrs, 30/04/2016<br> <strong class="darkblue">Ahmedabad (AMD)</strong>
								</td><td style="width:1%;"></td><td style="width:11%;">Economy</td><td style="width:20%;">1hrs 05mins</td>
			</tr><tr class="back_lighter_2">
				<td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;" colspan="6">
								    
								    <img style="width:12px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/bag.png"> 1x25kg checked bag included
								    
								    
								    
								</td><td style="width:1%;width: 1%;"></td><td style="width:21%;">
								    
								</td><td style="width:1%;"></td><td style="width:11%;"></td><td style="width:20%;"></td>
			</tr>
		</tbody></table>
					
			
		
		</td>
		</tr>
		
		
		
		</tbody></table>

						</td>
					</tr>
					
					<tr class="back_lighter_2">
						<td colspan="2">
							<table width="100%" cellspacing="0" cellpadding="0" border="0" class="box1">
								<tbody><tr>
									<td style="padding:0 7px 7px 7px;" class="panRight">
										
										<input type="button" onclick="SelectProposal('1008282','1002002','GDS','ETICKET','01f4df58-f720-4838-b3ec-0a138f51ab8d');" value="Book This Flight" class="goSubmitpillblue" id="DisplaySearchResult_View_Datagrid_fares_ctl03_selectProposal" name="DisplaySearchResult_View$Datagrid_fares$ctl03$selectProposal">
										
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
					<!--
					<tr style="height:2px"><td colspan="2"><div style="height:2px; margin:0; padding:0; clear:all;"></div></td></tr>
					-->
					
					<tr height="20px" style="height:20px" class="back_lighter_2" id="DisplaySearchResult_View_Datagrid_fares_ctl03_tr_MoreResults">
			<td style="height:20px" colspan="2">
							<table cellspacing="0" cellpadding="0" style="width:100%">
								<tbody><tr>
									<td style="width:80%">
										
									</td>
									<td align="right"><img border="0" id="img1002002" style="padding:0px; visibility:hidden" src="../js/ajax.loading.gif"></td>
										<td>
											<div onclick="MRSR1002002.GetMoreResults('div1002002','INSTANT','DisplaySearchResult_View_Datagrid_fares_ctl03_Divbutton_moreProposals','AI','69.00','70.99','USD','1008282-1002002','SegmentsTable','01f4df58-f720-4838-b3ec-0a138f51ab8d','NoShow')" style="background-color:#7EC7E5;vertical-align: middle;padding-top:1px;border:1px solid #B3B3B3;z-index:99;font-weight:bold;width:325px;height:18px;text-align:center; cursor: pointer;color:#0C094E" id="DisplaySearchResult_View_Datagrid_fares_ctl03_Divbutton_moreProposals">[ + ] <u>2</u> more <u>AI</u> flights at <u>USD 69.00</u>... Click here to view</div>
										</td>
								</tr>
							</tbody></table>
						</td>
		</tr>
		
				</tbody></table>
				<script type="text/javascript">
				var MRSR1002002 = new SearchResult();
				MRSR1002002.setProcessIndicator('img1002002');
				
				</script>
				<div style="z-index: -1" class="box1" id="div1002002">
				</div>
				<table style="width:100%">
					<tbody><tr style="width:100%; height:10px;">
						<td></td>
					</tr>
				</tbody></table>
			</td>
	</tr><tr>
		<td>
				<table cellspacing="0" cellpadding="0" border="0" style="width:100%">
					<tbody><tr class="back_lighter">
						<td class="panLeft" style="width:65%; text-transform: capitalize">
							<p style="font-weight:bold; color:#0C094E">Available (Instant Confirmation) <img style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/cash_voucher.gif" id="DisplaySearchResult_View_Datagrid_fares_ctl08_Image_CashVoucher"></p>
							
						</td>
						<td class="panRight" style="width:35%;">
							<table width="100%" cellspacing="0" cellpadding="0" border="0">
							<tbody><tr>
							<td colspan="2"><p class="panRight floatRight" style="font-weight:bold; color:#0C094E">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_Label1"></span>
							    101.00
							</p></td>
							</tr>
							<tr id="DisplaySearchResult_View_Datagrid_fares_ctl08_tr_TaxAmountAdt">
			<td><span id="DisplaySearchResult_View_Datagrid_fares_ctl08_Label_Tax">Plus applicable taxes</span></td>
			<td class="price">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_Label3"></span>
								71.32
							</td>
		</tr>
		
							<tr>
							<td><span id="DisplaySearchResult_View_Datagrid_fares_ctl08_Label_TotalFare">Total fare</span></td>
							<td class="price">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_Label4"></span>
                                172.32
							</td>
							</tr>
							</tbody></table>
					
						</td>
					</tr>
					<tr style="padding: 0px 0px 0px 0px;">
						<td colspan="2">
							

<table width="100%" cellspacing="0" cellpadding="0" border="0" class="box1">
<tbody><tr class="back_lighter">
	<td><p><b></b></p></td>
</tr>
<tr>
	<td>
		
						<table cellspacing="0" cellpadding="0" border="0" style="border-color:White;border-width:0px;border-style:Solid;width:100%;border-collapse:collapse;" id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments" name="Datagrid_Segments">
			<tbody><tr class="back_lighter_1 strong">
				<td style="width: 28px;"><img align="absmiddle" style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/plane_takeoff_28x17.gif"></td><td> Departure</td><td>&nbsp;</td><td><span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Flight">Flight</span></td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Departure">Departure</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Arrival">Arrival</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Class">Class</span>
								</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_TotalTravelTime">Total&nbsp;Travel&nbsp;Time</span>
								</td>
			</tr><tr class="back_lighter_2">
				<td align="center" style="width:15%;" rowspan="3" colspan="2">
									<img style="align: middle;width:55px;height:60px;" title="Air India" id="AirlineLogo" src="http://flight.asiatravel.com/crs.file/carrier/AI.jpg">
								</td><td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    AI191
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;">
								    21:30hrs, 31/03/2016<br> <strong class="darkblue">Ahmedabad (AMD)</strong>
								    
								    
								    
								    
								</td><td style="width:1%;"></td><td style="width:21%;">
								    22:45hrs, 31/03/2016<br> <strong class="darkblue">Mumbai (BOM)</strong>
								</td><td style="width:1%;"></td><td style="width:11%;">Economy</td><td style="width:20%;">1hrs 15mins</td>
			</tr><tr class="back_lighter_2">
				<td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;" colspan="6">
								    
								    <img style="width:12px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/bag.png"> 1x25kg checked bag included
								    
								    
								    
								</td><td style="width:1%;width: 1%;"></td><td style="width:21%;">
								    
								</td><td style="width:1%;"></td><td style="width:11%;"></td><td style="width:20%;"></td>
			</tr>
		</tbody></table>
					
			
						<table cellspacing="0" cellpadding="0" border="0" style="border-color:White;border-width:0px;border-style:Solid;width:100%;border-collapse:collapse;" id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments" name="Datagrid_Segments">
			<tbody><tr class="back_lighter_1 strong">
				<td style="width: 28px;"><img align="absmiddle" style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/plane_landing_28x17.gif"></td><td> Return</td><td>&nbsp;</td><td><span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_Flight">Flight</span></td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_Departure">Departure</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_Arrival">Arrival</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_Class">Class</span>
								</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl08_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl01_Datagrid_Segments_ctl01_Label_TotalTravelTime">Total&nbsp;Travel&nbsp;Time</span>
								</td>
			</tr><tr class="back_lighter_2">
				<td align="center" style="width:15%;" rowspan="5" colspan="2">
									<img style="align: middle;width:55px;height:60px;" title="Air India" id="AirlineLogo" src="http://flight.asiatravel.com/crs.file/carrier/AI.jpg">
								</td><td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    AI635
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;">
								    07:55hrs, 30/04/2016<br> <strong class="darkblue">Mumbai (BOM)</strong>
								    
								    
								    
								    
								</td><td style="width:1%;"></td><td style="width:21%;">
								    11:40hrs, 30/04/2016<br> <strong class="darkblue">Delhi (DEL)</strong>
								</td><td style="width:1%;"></td><td style="width:11%;">Economy</td><td style="width:20%;">10hrs 15mins</td>
			</tr><tr class="back_lighter_2">
				<td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;" colspan="6">
								    
								    <img style="width:12px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/bag.png"> 1x25kg checked bag included
								    
								    
								    <br><img src="http://flight.asiatravel.com/crs.style/active/img/logo/arrow_bulet.gif"> <span class="red">Note: includes 1 technical stop at Indore (IDR)</span>
								</td><td style="width:1%;width: 1%;"></td><td style="width:21%;">
								    
								</td><td style="width:1%;"></td><td style="width:11%;"></td><td style="width:20%;"></td>
			</tr><tr class="back_lighter_2">
				<td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    AI10
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;">
								    16:40hrs, 30/04/2016<br> <strong class="darkblue">Delhi (DEL)</strong>
								    
								    
								    
								    
								</td><td style="width:1%;"></td><td style="width:21%;">
								    18:10hrs, 30/04/2016<br> <strong class="darkblue">Ahmedabad (AMD)</strong>
								</td><td style="width:1%;"></td><td style="width:11%;"></td><td style="width:20%;"></td>
			</tr><tr class="back_lighter_2">
				<td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;" colspan="6">
								    
								    <img style="width:12px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/bag.png"> 1x25kg checked bag included
								    
								    
								    
								</td><td style="width:1%;width: 1%;"></td><td style="width:21%;">
								    
								</td><td style="width:1%;"></td><td style="width:11%;"></td><td style="width:20%;"></td>
			</tr>
		</tbody></table>
					
			
		
		</td>
		</tr>
		
		
		
		</tbody></table>

						</td>
					</tr>
					
					<tr class="back_lighter_2">
						<td colspan="2">
							<table width="100%" cellspacing="0" cellpadding="0" border="0" class="box1">
								<tbody><tr>
									<td style="padding:0 7px 7px 7px;" class="panRight">
										
										<input type="button" onclick="SelectProposal('1008282','1021002','GDS','ETICKET','01f4df58-f720-4838-b3ec-0a138f51ab8d');" value="Book This Flight" class="goSubmitpillblue" id="DisplaySearchResult_View_Datagrid_fares_ctl08_selectProposal" name="DisplaySearchResult_View$Datagrid_fares$ctl08$selectProposal">
										
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
					<!--
					<tr style="height:2px"><td colspan="2"><div style="height:2px; margin:0; padding:0; clear:all;"></div></td></tr>
					-->
					
					<tr height="20px" style="height:20px" class="back_lighter_2" id="DisplaySearchResult_View_Datagrid_fares_ctl08_tr_MoreResults">
			<td style="height:20px" colspan="2">
							<table cellspacing="0" cellpadding="0" style="width:100%">
								<tbody><tr>
									<td style="width:80%">
										
									</td>
									<td align="right"><img border="0" id="img1021002" style="padding:0px; visibility:hidden" src="../js/ajax.loading.gif"></td>
										<td>
											<div onclick="MRSR1021002.GetMoreResults('div1021002','INSTANT','DisplaySearchResult_View_Datagrid_fares_ctl08_Divbutton_moreProposals','AI','101.00','137.32','USD','1008282-1021002','SegmentsTable','01f4df58-f720-4838-b3ec-0a138f51ab8d','NoShow')" style="background-color:#7EC7E5;vertical-align: middle;padding-top:1px;border:1px solid #B3B3B3;z-index:99;font-weight:bold;width:325px;height:18px;text-align:center; cursor: pointer;color:#0C094E" id="DisplaySearchResult_View_Datagrid_fares_ctl08_Divbutton_moreProposals">[ + ] <u>1</u> more <u>AI</u> flights at <u>USD 101.00</u>... Click here to view</div>
										</td>
								</tr>
							</tbody></table>
						</td>
		</tr>
		
				</tbody></table>
				<script type="text/javascript">
				var MRSR1021002 = new SearchResult();
				MRSR1021002.setProcessIndicator('img1021002');
				
				</script>
				<div style="z-index: -1" class="box1" id="div1021002">
				</div>
				<table style="width:100%">
					<tbody><tr style="width:100%; height:10px;">
						<td></td>
					</tr>
				</tbody></table>
			</td>
	</tr>
</tbody></table>
	<?php
}
else{
?>
<table cellspacing="0" cellpadding="0" border="0" style="border-color:White;border-width:0px;width:100%;border-collapse:collapse;" id="DisplaySearchResult_View_Datagrid_fares" rules="cols" class="box1">
	<tbody>
	
	<tr>
		<td>
				<table cellspacing="0" cellpadding="0" border="0" style="width:100%">
					<tbody><tr class="back_lighter">
						<td class="panLeft" style="width:65%; text-transform: capitalize">
							<p style="font-weight:bold; color:#0C094E">Available (Instant Confirmation) <img style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/cash_voucher.gif" id="DisplaySearchResult_View_Datagrid_fares_ctl03_Image_CashVoucher"></p>
							
						</td>
						<td class="panRight" style="width:35%;">
							<table width="100%" cellspacing="0" cellpadding="0" border="0">
							<tbody><tr>
							<td colspan="2"><p class="panRight floatRight" style="font-weight:bold; color:#0C094E">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label1"></span>
							    52.00
							</p></td>
							</tr>
							<tr id="DisplaySearchResult_View_Datagrid_fares_ctl03_tr_TaxAmountAdt">
			<td><span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label_Tax">Plus applicable taxes</span></td>
			<td class="price">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label3"></span>
								16.71
							</td>
		</tr>
		
							<tr>
							<td><span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label_TotalFare">Total fare</span></td>
							<td class="price">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_Label4"></span>
                                68.71
							</td>
							</tr>
							</tbody></table>
					
						</td>
					</tr>
					<tr style="padding: 0px 0px 0px 0px;">
						<td colspan="2">
							

<table width="100%" cellspacing="0" cellpadding="0" border="0" class="box1">
<tbody><tr class="back_lighter">
	<td><p><b></b></p></td>
</tr>
<tr>
	<td>
		
						<table cellspacing="0" cellpadding="0" border="0" style="border-color:White;border-width:0px;border-style:Solid;width:100%;border-collapse:collapse;" id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments" name="Datagrid_Segments">
			<tbody><tr class="back_lighter_1 strong">
				<td style="width: 28px;"><img align="absmiddle" style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/plane_takeoff_28x17.gif"></td><td> Departure</td><td>&nbsp;</td><td><span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Flight">Flight</span></td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Departure">Departure</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Arrival">Arrival</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Class">Class</span>
								</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl03_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_TotalTravelTime">Total&nbsp;Travel&nbsp;Time</span>
								</td>
			</tr><tr class="back_lighter_2">
				<td align="center" style="width:15%;" rowspan="3" colspan="2">
									<img style="align: middle;width:55px;height:60px;" title="Air India" id="AirlineLogo" src="http://flight.asiatravel.com/crs.file/carrier/AI.jpg">
								</td><td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    AI131
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;">
								    03:30hrs, 24/04/2016<br> <strong class="darkblue">Ahmedabad (AMD)</strong>
								    
								    
								    
								    
								</td><td style="width:1%;"></td><td style="width:21%;">
								    04:45hrs, 24/04/2016<br> <strong class="darkblue">Mumbai (BOM)</strong>
								</td><td style="width:1%;"></td><td style="width:11%;">Economy</td><td style="width:20%;">1hrs 15mins</td>
			</tr><tr class="back_lighter_2">
				<td style="width:1%;"></td><td style="width:8%;">
                                    <a title="Air India" href="javascript: void(0)">
								    
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;" colspan="6">
								    
								    <img style="width:12px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/bag.png"> 1x25kg checked bag included
								    
								    
								    
								</td><td style="width:1%;width: 1%;"></td><td style="width:21%;">
								    
								</td><td style="width:1%;"></td><td style="width:11%;"></td><td style="width:20%;"></td>
			</tr>
		</tbody></table>
					
			
		
		</td>
		</tr>
		
		
		
		</tbody></table>

						</td>
					</tr>
					
					<tr class="back_lighter_2">
						<td colspan="2">
							<table width="100%" cellspacing="0" cellpadding="0" border="0" class="box1">
								<tbody><tr>
									<td style="padding:0 7px 7px 7px;" class="panRight">
										
										<input type="button" onclick="SelectProposal('630','1001001','GDS','ETICKET','336b9877-c06d-45f1-96ac-35a4fbc0b011');" value="Book This Flight" class="goSubmitpillblue" id="bookflight" name="DisplaySearchResult_View$Datagrid_fares$ctl03$selectProposal">
										
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
					<!--
					<tr style="height:2px"><td colspan="2"><div style="height:2px; margin:0; padding:0; clear:all;"></div></td></tr>
					-->
					
					
				</tbody></table>
				<script type="text/javascript">
				var MRSR1001001 = new SearchResult();
				MRSR1001001.setProcessIndicator('img1001001');
				
				</script>
				<div style="z-index: -1" class="box1" id="div1001001">
				</div>
				<table style="width:100%">
					<tbody><tr style="width:100%; height:10px;">
						<td></td>
					</tr>
				</tbody></table>
			</td>
	</tr>
	<tr>
		<td>
				<table cellspacing="0" cellpadding="0" border="0" style="width:100%">
					<tbody><tr class="back_lighter">
						<td class="panLeft" style="width:65%; text-transform: capitalize">
							<p style="font-weight:bold; color:#0C094E">Available (Instant Confirmation) <img style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/cash_voucher.gif" id="DisplaySearchResult_View_Datagrid_fares_ctl04_Image_CashVoucher"></p>
							
						</td>
						<td class="panRight" style="width:35%;">
							<table width="100%" cellspacing="0" cellpadding="0" border="0">
							<tbody><tr>
							<td colspan="2"><p class="panRight floatRight" style="font-weight:bold; color:#0C094E">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl04_Label1"></span>
							    60.00
							</p></td>
							</tr>
							<tr id="DisplaySearchResult_View_Datagrid_fares_ctl04_tr_TaxAmountAdt">
			<td><span id="DisplaySearchResult_View_Datagrid_fares_ctl04_Label_Tax">Plus applicable taxes</span></td>
			<td class="price">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl04_Label3"></span>
								9.00
							</td>
		</tr>
		
							<tr>
							<td><span id="DisplaySearchResult_View_Datagrid_fares_ctl04_Label_TotalFare">Total fare</span></td>
							<td class="price">USD<span id="DisplaySearchResult_View_Datagrid_fares_ctl04_Label4"></span>
                                69.00
							</td>
							</tr>
							</tbody></table>
					
						</td>
					</tr>
					<tr style="padding: 0px 0px 0px 0px;">
						<td colspan="2">
							

<table width="100%" cellspacing="0" cellpadding="0" border="0" class="box1">
<tbody><tr class="back_lighter">
	<td><p><b></b></p></td>
</tr>
<tr>
	<td>
		
						<table cellspacing="0" cellpadding="0" border="0" style="border-color:White;border-width:0px;border-style:Solid;width:100%;border-collapse:collapse;" id="DisplaySearchResult_View_Datagrid_fares_ctl04_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments" name="Datagrid_Segments">
			<tbody><tr class="back_lighter_1 strong">
				<td style="width: 28px;"><img align="absmiddle" style="border-width:0px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/plane_takeoff_28x17.gif"></td><td> Departure</td><td>&nbsp;</td><td><span id="DisplaySearchResult_View_Datagrid_fares_ctl04_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Flight">Flight</span></td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl04_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Departure">Departure</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl04_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Arrival">Arrival</span>
								</td><td>&nbsp;</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl04_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_Class">Class</span>
								</td><td>
									<span id="DisplaySearchResult_View_Datagrid_fares_ctl04_UserControl_DisplayFlightItinerary_Repeater_ItineraryDetails_ctl00_Datagrid_Segments_ctl01_Label_TotalTravelTime">Total&nbsp;Travel&nbsp;Time</span>
								</td>
			</tr><tr class="back_lighter_2">
				<td align="center" style="width:15%;" rowspan="3" colspan="2">
									<img style="align: middle;width:55px;height:60px;" title="JET Airways" id="AirlineLogo" src="http://flight.asiatravel.com/crs.file/carrier/9W.gif">
								</td><td style="width:1%;"></td><td style="width:8%;">
                                    <a title="JET Airways" href="javascript: void(0)">
								    9W738
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;">
								    07:00hrs, 24/04/2016<br> <strong class="darkblue">Ahmedabad (AMD)</strong>
								    
								    
								    
								    
								</td><td style="width:1%;"></td><td style="width:21%;">
								    08:10hrs, 24/04/2016<br> <strong class="darkblue">Mumbai (BOM)</strong>
								</td><td style="width:1%;"></td><td style="width:11%;">Economy</td><td style="width:20%;">1hrs 10mins</td>
			</tr><tr class="back_lighter_2">
				<td style="width:1%;"></td><td style="width:8%;">
                                    <a title="JET Airways" href="javascript: void(0)">
								    
								    </a>
								</td><td style="width:1%;"></td><td style="width:21%;" colspan="6">
								    
								    <img style="width:12px;" src="http://flight.asiatravel.com/crs.style/active/img/logo/bag.png"> 1x15kg checked bag included
								    
								    
								    
								</td><td style="width:1%;width: 1%;"></td><td style="width:21%;">
								    
								</td><td style="width:1%;"></td><td style="width:11%;"></td><td style="width:20%;"></td>
			</tr>
		</tbody></table>
					
			
		
		</td>
		</tr>
		
		
		
		</tbody></table>

						</td>
					</tr>
					
					<tr class="back_lighter_2">
						<td colspan="2">
							<table width="100%" cellspacing="0" cellpadding="0" border="0" class="box1">
								<tbody><tr>
									<td style="padding:0 7px 7px 7px;" class="panRight">
										
										<input type="button" onclick="SelectProposal('630','1002001','GDS','ETICKET','336b9877-c06d-45f1-96ac-35a4fbc0b011');" value="Book This Flight" class="goSubmitpillblue" id="bookflight" name="DisplaySearchResult_View$Datagrid_fares$ctl04$selectProposal">
										
									</td>
								</tr>
							</tbody></table>
						</td>
					</tr>
					<!--
					<tr style="height:2px"><td colspan="2"><div style="height:2px; margin:0; padding:0; clear:all;"></div></td></tr>
					-->
					
					
				</tbody></table>
				<script type="text/javascript">
				var MRSR1002001 = new SearchResult();
				MRSR1002001.setProcessIndicator('img1002001');
				
				</script>
				<div style="z-index: -1" class="box1" id="div1002001">
				</div>
				<table style="width:100%">
					<tbody><tr style="width:100%; height:10px;">
						<td></td>
					</tr>
				</tbody></table>
			</td>
	</tr>
</tbody></table>
<?php 
}
?>
</form>

<script type="text/javascript" language="javascript">
    function popuptc(url) {
	    newwindow=window.open(url,'TicketingConditions','width=400,height=600,resizable=1,scrollbars=1');
	    if (window.focus) {newwindow.focus()}
	    return false;
    }
</script>
								
								<br>
								
								<br clear="all">
								<table width="562" cellspacing="0" cellpadding="0" border="0" class="box1">
									<tbody><tr>
										<td align="center">
											
											
											<br>
										</td>
									</tr>
								</tbody></table>
							</div>
							<br clear="all">
							<!--#### WP: Hot Destinations - Flights: End #####################-->
							<!--#### WP: Promo 1: Start #####################-->
							<!--#### WP: Promo 1: End #####################-->
							<!--#### WP: Promo 2: Start #####################-->
							<!--#### WP: Promo 2: End #####################-->
						</div>
<!--********************end************************************-->


			
					
                </div>
            </div>
				<?php			
		}
		else
		{

            if(count($xml->AT_HotelList->Hotel) == 0){
                echo "No hotel found in $cityname on ". $_GET['CheckIndate'];
            }else{

			
			$i=0;
                foreach ($xml->AT_HotelList->Hotel as $hotel) { ?>
			
            <div class="twelve columns">
                <div class="search-results-main">
                    <div class="result-row">
                        <div class="package-details">
                            <div class="location-thumb"><img src="<?php echo $hotel->FrontPgImage; ?>" alt=""><br><?php echo $hotel->HotelName; ?><br><a href="javascript:void(0)" onclick="myJsFunc(<?php echo $i; ?>);">More Info</a></div>
							<input type="hidden" name="hotel_name" id="hotel_name_<?php echo $i; $i++; ?>" value="<?php echo $hotel->HotelName; ?>"/>
                            <div class="package-content">
                                <div class="package-row">
                                    <label>Package Inclusive:</label>
                                    <ul>
                                        <li>Return Air Tickets</li>
                                        <li>4 Nights Accommodation</li>
                                        <li>Return Airtport Transfers</li>
                                    </ul>
                                </div>
                                <div class="package-row">
                                    <label>Booking Period:</label>
                                    <div class="label-value"><?php echo $_GET['CheckIndate']; ?> To 31 Oct 2016</div>
                                </div>
                                <div class="package-row">
                                    <label>Travel Period:</label>
                                    <div class="label-value">29 Oct 2015 To 31 Oct 2016</div>
                                </div>
                            </div>
                            <div class="cost-booking">
                                <div class="costing-box">
                                    from<br><span class="country-code">SGD</span><span class="price"><?php echo $hotel->AvgPrice; ?> </span><br>per person
                                </div>
                                <a class="gdl-button large various" href="#">Book Now</a><br><small>*excl. airport taxes and fuel surcharge</small>
                                <div class="icons-group">
                                    <i class="icon-plane"></i>&nbsp;&nbsp;+&nbsp;&nbsp;<i class="icon-building"></i>&nbsp;&nbsp;+&nbsp;&nbsp;<i class="icon-truck"></i>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
			
 <?php  }
             }
			 
		}
            ?>
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