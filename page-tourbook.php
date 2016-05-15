<?php
/*
  Template Name: Page tourbook Page
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
		<style>
		
#container {
    height: auto;
    margin: 0 auto;
    width: 1000px;
}
#containerbody {
    width: 100%;
}
#containerbreadcrumbs {
    color: #000000;
    font: bold 12px Verdana,Arial,Helvetica,sans-serif;
    height: 15px;
    padding: 0 0 10px;
    vertical-align: text-top;
    width: 100%;
}
#containerpackagesearchleft {
    background: #efefef none repeat scroll 0 0;
    float: left;
    font: 12px Arial,Verdana,Helvetica,sans-serif;
    width: 37%;
}

#containerpackagesearchleft .itemheader {
    background: #0a85c1 none repeat scroll 0 0;
    width: 100%;
}
#containerpackagesearchleft .itemheader .header {
    color: #ffffff;
    font: 24px "oswaldbook",Arial,Helvetica,sans-serif;
    padding: 5px 0 5px 9px;
}
#containerpackagesearchleft .itemtourselectiononly {
    background: #efefef none repeat scroll 0 0;
    border-left: 1px solid #b0b0b0;
    border-right: 1px solid #b0b0b0;
    padding: 30px 0 0;
    width: 99.7%;
}
#containerpackagesearchleft .itemtourselectiononly .header {
    color: #2f2f2f;
    font: bold 16px Arial,Verdana,Helvetica,sans-serif;
    height: 20px;
    margin-bottom: 15px;
    padding: 7px 0 4px 9px;
}
#containerpackagesearchleft .itemtourselectiononly table {
    padding: 0 0 0 7px;
}
#containerpackagesearchleft .itemtraveler {
    background: #efefef none repeat scroll 0 0;
    border-left: 1px solid #b0b0b0;
    border-right: 1px solid #b0b0b0;
   
    width: 99.7%;
}
#containerpackagesearchleft .itemtraveler .header {
    color: #2f2f2f;
    font: bold 16px Arial,Verdana,Helvetica,sans-serif;
    height: 20px;
    padding: 7px 0 4px 9px;
}
#containerpackagesearchleft .itemtraveler .header {
    color: #2f2f2f;
    font: bold 16px Arial,Verdana,Helvetica,sans-serif;
}
#containerpackagesearchleft .itemtraveler table {
    color: #2f2f2f;
    padding: 0 0 0 7px;
}
#containerpackagesearchleft .itemtraveler table td{
    width:80%;
    padding: 0px 0px 0px 20px;
}
#containerpackagesearchleft .itemtraveler table {
    color: #2f2f2f;
}

#containerpackagesearchleft .itemnote {
    background: #ff9600 none repeat scroll 0 0;
    border-left: 1px solid #b0b0b0;
    border-right: 1px solid #b0b0b0;
    width: 99.7%;
}
#containerpackagesearchleft .itemnote table {
    font-size: 12px;
    font-weight: bold;
    padding: 10px 0 10px 10px;
}
#containerpackagesearchleft .itemnote table {
    font-size: 12px;
    font-weight: bold;
}
#containerpackagesearchleft .itembutton {
    border-bottom: 1px solid #b0b0b0;
    border-left: 1px solid #b0b0b0;
    border-right: 1px solid #b0b0b0;
    font: 16px Arial,Helvetica,sans-serif;
    padding: 20px 0;
    width: 99.7%;
}
#containerpackagesearchleft .itembutton a.buttonGreen {
    background: #7aa125 linear-gradient(to bottom, #9dce2c 0%, #7aa125 100%) repeat scroll 0 0;
    border: 1px solid #8bab0b;
    border-radius: 5px;
    box-shadow: 0 0 5px #767676;
    color: #ffffff;
    font-size: 16px;
    font-weight: bold;
    left: 220px;
    padding: 6px 20px;
    position: relative;
    text-decoration: none;
    text-shadow: 0 0 3px #7aa125;
}
#containerpackagesearchleft .itemmembershipandcv {
    background: #ffffff none repeat scroll 0 0;
    color: #6d6d6d;
    font-size: 12px;
    width: 100%;
}
.itemmembershipandcv table {
    padding: 0 0 0 7px;
}
#containerpackagesearchleft .itemmembershipandcv {
    color: #6d6d6d;
    font-size: 12px;
}
#containerpackagesearchright {
    float: right;
    min-height: 600px;
    width: 62%;
}
#containerpackagesearchright .itemcontainerheader {
    padding: 0 5px;
    text-align: justify;
}
#containerpackagesearchright .itemcontainerheader h1 {
    color: #606060;
    font: bold 18px Arial,Helvetica,sans-serif;
    margin: 0;
}
#containerpackagesearchright .itemcontainerheader .headersub {
    color: #606060;
    font: bold 12px Arial,Helvetica,sans-serif;
}
.flexslider {
    background: #ffffff none repeat scroll 0 0;
    border: 4px solid #ffffff;
    border-radius: 4px;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
    margin: 0 0 5px;
    position: relative;
}
.flexslider {
    margin: 0;
    padding: 0;
}
.flex-viewport {
    max-height: 2000px;
    transition: all 1s ease 0s;
}
.slides, .flex-control-nav, .flex-direction-nav {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.slides::after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    line-height: 0;
    visibility: hidden;
}
#containerpackagesearchright .itemcontaineroverview {
    font-family: Arial,Helvetica,sans-serif;
    font-size: 14px;
}
#containerpackagesearchright .itemcontaineroverview .tabs-menu {
    clear: both;
    float: left;
    height: 40px;
    list-style: outside none none;
}
#containerpackagesearchright .itemcontaineroverview .tabs-menu {
    margin: 20px 0 0;
    padding: 0;
}

#containerpackagesearchright .itemcontaineroverview .tab {
    background-color: #ffffff;
    border-color: #484848 #eeeeee #eeeeee;
    border-style: solid;
    border-width: 6px 1px 1px;
    float: left;
    font-size: 12px;
    margin-bottom: 20px;
    width: auto;
}

#containerreview {
    width: 370px;
}


#containerpackagesearchleft .itemnote .red {
    color: #ffffff;
}

#containerpackagesearchleft .itemtraveler select.width40 {
    font: 12px Arial,Helvetica,sans-serif;
    height: 30px;
    width: 50px;
}
.goSelectArrow {
    color: #666666;
    font: 12px Arial,Verdana,Helvetica,sans-serif;
    height: 30px;
    outline: medium none;
}

#containerbreadcrumbs .itemLanImage {
    float: right;
}
#containerbreadcrumbs {
    color: #000000;
    font: bold 12px Verdana,Arial,Helvetica,sans-serif;
}


#containerpackagesearchleft .itemtourselectiononly table {
    padding: 0 0 0 7px;
}
#containerpackagesearchleft {
    font: 12px Arial,Verdana,Helvetica,sans-serif;
}
#containerpackagesearchleft table
{
	border-width:0px;
}
#containerpackagesearchleft table
{
	  margin-bottom:0px;
}
#containerpackagesearchleft table td
{
	border-right:0px;
}

#containerreview .item {
    background-color: #ffffff;
    color: #000000;
    font: 11px Verdana,Arial,Helvetica,sans-serif;
    padding: 0;
}

#containerfooter {
    float: left;
    margin-bottom: 0;
    margin-top: 10px;
    width: 100%;
}

#containerpackagesearchright .itemcontaineroverview .tabs-menu li.current {
    background: #484848 linear-gradient(to bottom, #929292 0%, #484848 40%) repeat scroll 0 0;
    border: 0 none;
    position: relative;
    z-index: -5;
}
#containerpackagesearchright .itemcontaineroverview .tabs-menu li {
    background-color: #eeeeee;
    border-radius: 10px 10px 0 0;
    float: left;
    height: 30px;
    line-height: 30px;
    margin-right: 5px;
    padding: 5px;
}
#containerpackagesearchright .itemcontaineroverview .tabs-menu .current a {
    color: #ffffff;
}
#containerpackagesearchright .itemcontaineroverview .tabs-menu li a {
    color: #454545;
    font-weight: bold;
    padding: 10px;
    text-decoration: none;
}
#containerpackagesearchright .itemcontaineroverview .tabs-menu .current a {
    color: #ffffff;
}
#containerpackagesearchright .itemcontaineroverview .tabs-menu li a {
    color: #454545;
    font-weight: bold;
}
		</style>
		<form id="book-tours-form">
		
		<div id="container">
            <script type="text/javascript">
//&lt;![CDATA[
Sys.WebForms.PageRequestManager._initialize('ScriptManager_PackageSearch', document.getElementById('form1'));
Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
//]]&gt;
</script>

            <div id="containerbody">
                <div id="containerbreadcrumbs">
                    

<div class="itemLink" id="divItemLink">
    
    
</div>
<div>
    <div class="itemImage" id="divItemImage">
        
        <div style="display:none;">
        &nbsp;
        </div>
    </div>    
    <div class="itemLanImage" id="UCDBreadcrumbs_divItemLanSelector">
        <input type="image" style="border-width:0px;" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;UCDBreadcrumbs$ImageButton_enUS&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" src="crs.style/img/lan/en-US-1.gif" title="English" id="UCDBreadcrumbs_ImageButton_enUS" name="UCDBreadcrumbs$ImageButton_enUS">
        <input type="image" style="border-width:0px;" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;UCDBreadcrumbs$ImageButton_thTH&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" src="crs.style/img/lan/th-TH-1.gif" title="Thailand" id="UCDBreadcrumbs_ImageButton_thTH" name="UCDBreadcrumbs$ImageButton_thTH">
        <input type="image" style="border-width:0px;" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;UCDBreadcrumbs$ImageButton_zhCN&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" src="crs.style/img/lan/zh-CN-1.gif?v2" title="Simplified Chinese" id="UCDBreadcrumbs_ImageButton_zhCN" name="UCDBreadcrumbs$ImageButton_zhCN">
        <input type="image" style="border-width:0px;" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;UCDBreadcrumbs$ImageButton_zhTW&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" src="crs.style/img/lan/zh-TW-1.gif" title="Traditional Chinese" id="UCDBreadcrumbs_ImageButton_zhTW" name="UCDBreadcrumbs$ImageButton_zhTW">
    </div>
</div>

                </div>
                <div id="containerpackagesearchleft">
                    
                    

<div class="itemheader" id="divqsheader">
    <div class="header">
        <b><span id="UCDPackageQuickSearch_Label_QuickSearch">Quick Search</span></b>
                    
                    
                    
                    
                    
                    
                    
        
    </div>
</div>



<div class="itemtourselectiononly" id="UCDPackageQuickSearch_divqsitemtourselection">
    <div class="header" id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_divqsitemtourselectionheader">
    <span id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Label_Header">Select Tour Date</span> 
</div>
<table width="100%">
    
            <tbody><tr>
                <td style="display:none;">
                    <span id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_Label_TourID">3649</span>
                </td> 
                <td colspan="2">
                    <span class="lbltourname" id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_Label_TourName">Margaret River, Wine, Busselton, Cape Leeuwin with Lunch</span>
                                
                                
                </td>
            </tr>
            <tr>
                <td style="display:none;">
                </td> 
                <td>
                    
    
<div class="datewrap">
    <div class="rowdate">
        <div class="cellday">
            <select onchange="javascript:setdatepickerinput('UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_Days','UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_MonthYear','UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_TextBox_Date','','','','0');" class="width60 goSelectArrow" id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_Days" name="UCDPackageQuickSearch$UCDPackageQuickSearchTourSelection$Repeater_Tour$ctl00$UCDDateSelection_TourDate$Dropdownlist_Days">
	<option value="DD" selected="selected">DD</option>
	
	
	
	

<option value="01">1</option><option value="02">2</option><option value="03">3</option><option value="04">4</option><option value="05">5</option><option value="06">6</option><option value="07">7</option><option value="08">8</option><option value="09">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>

<select onchange="javascript:setdatepickerinput('UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_Days','UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_MonthYear','UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_TextBox_Date','','','','0');" class="width60 goSelectArrow" id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_MonthYear" name="UCDPackageQuickSearch$UCDPackageQuickSearchTourSelection$Repeater_Tour$ctl00$UCDDateSelection_TourDate$Dropdownlist_MonthYear">
	<option value="03-2016" selected="selected">Mar 2016</option>
	<option value="04-2016">Apr 2016</option>
	<option value="05-2016">May 2016</option>
	<option value="06-2016">Jun 2016</option>
	<option value="07-2016">Jul 2016</option>
	<option value="08-2016">Aug 2016</option>
	<option value="09-2016">Sep 2016</option>
	<option value="10-2016">Oct 2016</option>
	<option value="11-2016">Nov 2016</option>
	<option value="12-2016">Dec 2016</option>
	<option value="01-2017">Jan 2017</option>
	<option value="02-2017">Feb 2017</option>
	<option value="03-2017">Mar 2017</option>
	<option value="04-2017">Apr 2017</option>
	<option value="05-2017">May 2017</option>
	<option value="06-2017">Jun 2017</option>
	<option value="07-2017">Jul 2017</option>
	<option value="08-2017">Aug 2017</option>
	<option value="09-2017">Sep 2017</option>
	<option value="10-2017">Oct 2017</option>
	<option value="11-2017">Nov 2017</option>
	<option value="12-2017">Dec 2017</option>

</select>


            <input type="text" style="width:70px;display:none;" id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_TextBox_Date" value="26-3-2016" name="UCDPackageQuickSearch$UCDPackageQuickSearchTourSelection$Repeater_Tour$ctl00$UCDDateSelection_TourDate$TextBox_Date" class="hasDatepicker"><img class="ui-datepicker-trigger" src="http://packages.asiatravel.com/packagebooking/crs.style/img/icon/search-calendar.jpg" alt="..." title="...">
            <input type="hidden" value="false" id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_hdnIsPostBack" name="UCDPackageQuickSearch$UCDPackageQuickSearchTourSelection$Repeater_Tour$ctl00$UCDDateSelection_TourDate$hdnIsPostBack">

        </div>
      
    </div>
</div>

<script type="text/javascript">
    $(function() {
	    var dates = $("#UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_TextBox_Date").datepicker({
	        showOn: "button",
            buttonImage: "crs.style/img/icon/search-calendar.jpg",
            buttonImageOnly: true,
	        minDate: 0,
		    defaultDate: 5,
		    dateFormat: "dd-mm-yy",
			changeYear: false,
		    yearRange: "-0:+1",
		    changeMonth: false,
		    numberOfMonths: 1,
            onClose: function() {$(this).blur();},
		    onSelect: function(selectedDate) {
	            setdatepickerdropdown(selectedDate, 'UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_Days', 'UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_MonthYear', '', '', '', '0');
		    }
	    });
    });
    //if( $('#UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_hdnIsPostBack').val() == "false")
    //{
        setdatepickerinput('UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_Days','UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_Dropdownlist_MonthYear','UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_UCDDateSelection_TourDate_TextBox_Date',null,null,null,null);
    //}
</script>
                </td> 
                <td>
                    
                    <select style="display:none;" class="width100 goSelectArrow" id="UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Repeater_Tour_ctl00_DropDownList_TourTiming" name="UCDPackageQuickSearch$UCDPackageQuickSearchTourSelection$Repeater_Tour$ctl00$DropDownList_TourTiming">
	<option value="FullDayTour">FullDayTour</option>

</select>
                </td>
            </tr>
            
        
</tbody></table>

<script type="text/javascript">
    if((window.location.href.indexOf("pid=3095829&amp;") &gt; -1) || (window.location.href.indexOf("pid=498775&amp;") &gt; -1))
    {
        document.getElementById('UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_TRDisneyPromo3').style.display = 'block';
        document.getElementById('SpanDisneyPromo').style.display = 'block';
        document.getElementById('SpanDisneyPromo2').style.display = 'block';
        document.getElementById('UCDPackageQuickSearch_UCDPackageQuickSearchTourSelection_Label1').style.display = 'none';
    }
</script>

    
</div>

<div class="itemtraveler" id="UCDPackageQuickSearch_divqsitemtraveler">
    <div class="header" id="UCDPackageQuickSearch_divqsitemtravelerheader">
        <span id="UCDPackageQuickSearch_Label4">Total number of travelers</span>
    </div>
    
<table>
    <tbody><tr>
        <td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label_Adult">Adult</span>
                 
        </td>
        <td>
            <select class="width40 goSelectArrow" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Dropdownlist_Adult" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$Dropdownlist_Adult">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6" selected="selected">6</option>
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
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
	<option value="37">37</option>
	<option value="38">38</option>
	<option value="39">39</option>
	<option value="40">40</option>
	<option value="41">41</option>
	<option value="42">42</option>
	<option value="43">43</option>
	<option value="44">44</option>
	<option value="45">45</option>
	<option value="46">46</option>
	<option value="47">47</option>
	<option value="48">48</option>
	<option value="49">49</option>
	<option value="50">50</option>

</select> 
        </td>
        <td> 
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label_Child">Child (5-12 Years)</span>
        </td>
        <td> 
            <select onchange="validatechildagetextboxtour('UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Dropdownlist_Child', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge1', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge2', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge2', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge3', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge3', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge4', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge4', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge5', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge5', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge6', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge6', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge7', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge7', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge8', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge8', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge9', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge9', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge10', 'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge10')" class="width40 goSelectArrow" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Dropdownlist_Child" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$Dropdownlist_Child">
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
	<option value="10">10</option>

</select>
        </td>
        <td> 
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label_Age1">Child Age</span>
            <input type="text" class="width30 goSearch"  id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge1" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge1">
        </td>
    </tr>
    <tr style="display:none;" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge2">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label_Age2">Child Age</span>
            <input type="text" class="width30 goSearch"  id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge2" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge2">
        </td>
</tr>

    <tr style="display: none" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge3">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label1">Child Age</span>
            <input type="text" class="width30 goSearch" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge3" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge3">
        </td>
</tr>

    <tr style="display: none" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge4">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label2">Child Age</span>
            <input type="text" class="width30 goSearch" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge4" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge4">
        </td>
</tr>

    <tr style="display: none" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge5">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label4">Child Age</span>
            <input type="text" class="width30 goSearch"  id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge5" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge5">
        </td>
</tr>

    <tr style="display: none" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge6">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label5">Child Age</span>
            <input type="text" class="width30 goSearch" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge6" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge6">
        </td>
</tr>

    <tr style="display: none" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge7">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label6">Child Age</span>
            <input type="text" class="width30 goSearch" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge7" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge7">
        </td>
</tr>

    <tr style="display: none" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge8">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label7">Child Age</span>
            <input type="text" class="width30 goSearch" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge8" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge8">
        </td>
</tr>

    <tr style="display: none" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge9">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label8">Child Age</span>
            <input type="text" class="width30 goSearch" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge9" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge9">
        </td>
</tr>

    <tr style="display: none" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge10">
	<td>
        </td>
	<td>
        </td>
	<td>
            <span id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Label9">Child Age</span>
            <input type="text" class="width30 goSearch" id="UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge10" name="UCDPackageQuickSearch$UCDPackageQuickSearchSelection$TextBox_ChildAge10">
        </td>
</tr>

</tbody></table>
<script type="text/javascript">
    setTimeout("validatechildagetextboxtour('UCDPackageQuickSearch_UCDPackageQuickSearchSelection_Dropdownlist_Child'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge1'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge2'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge2'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge3'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge3'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge4'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge4'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge5'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge5'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge6'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge6'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge7'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge7'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge8'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge8'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge9'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge9'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_TextBox_ChildAge10'," +
                "'UCDPackageQuickSearch_UCDPackageQuickSearchSelection_trChildAge10')", 100);
</script>
    <table width="100%" id="UCDPackageQuickSearch_Table_TravelerSelection">
</table>

</div>

<div class="itemnote" id="UCDPackageQuickSearch_divqsitemnote">
    <table width="100%" cellspacing="0" cellpadding="0" border="0" id="UCDPackageQuickSearch_Table_note">
	<tbody><tr>
		<td colspan="2">
                <span class="red"><span id="UCDPackageQuickSearch_Label_Note">Note:</span></span>
            </td>
	</tr>
	<tr id="UCDPackageQuickSearch_trNoteMinimumPax">
		<td style="vertical-align:top; width:20px;">
                <span class="red"><span id="UCDPackageQuickSearch_Label_MinimumPaxSeq">1.</span>&nbsp;</span>
            </td>
		<td>
                <span class="red"><span id="UCDPackageQuickSearch_Label_MinimumPax">Minimum 6 Pax</span></span>
            </td>
	</tr>
	
</tbody></table>

</div>



<div class="itembutton" id="UCDPackageQuickSearch_divqsbutton">
    <a href="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;UCDPackageQuickSearch$LinkButton_CheckPrice&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, true))" class="buttonGreen" id="UCDPackageQuickSearch_LinkButton_CheckPrice" onclick="javascript:DisableButton('Processing..');__doPostBack('UCDPackageQuickSearch$LinkButton_CheckPrice','');" style="">Check Price</a>
</div>


                
<div class="itemmembershipandcv" id="divqsmembershipandcv">
    <table width="100%" cellspacing="0" cellpadding="0" border="0" id="UCDPackageQuickSearch_Table_Membership">
	<tbody><tr>
		<td>
                <a target="_blank" href="http://book.asiatravel.com/membership/Member/AboutRewards.aspx" id="UCDPackageQuickSearch_HyperLink_CashRewards"><img style="width:70px;border-width:0px;" src="http://packages.asiatravel.com/packagebooking/crs.style/img/icon/Rebate_Eligible.png" id="UCDPackageQuickSearch_Image_CashRewards"></a>
            </td>
		<td>
                <p class="strong">
                    <span id="UCDPackageQuickSearch_Label_CashRewards1">5% Cash Reward</span><br><br>
                    <span id="UCDPackageQuickSearch_Label_CashRewards2">Book more to earn more cash...<br> Only with AsiaTravel.com.</span>
                </p>
            </td>
	</tr>
</tbody></table>

    <table width="100%" cellspacing="0" cellpadding="0" border="0" id="UCDPackageQuickSearch_Table_CashVoucher">
	<tbody><tr>
		<td style="width:30px; text-align:right; padding-right:10px;">
                <img style="border-width:0px;" src="http://packages.asiatravel.com/packagebooking/crs.style/img/icon/cash_voucher.gif" id="UCDPackageQuickSearch_Image_CashVoucher">
            </td>
		<td>
                <span id="UCDPackageQuickSearch_Label_CashVoucher">Applicable for Cash Voucher / Discount Code</span>
            </td>
	</tr>
</tbody></table>

</div>

<div style="display:none;" id="divscb">
    <input type="text" id="UCDPackageQuickSearch_TextBox_SCBRedeem" name="UCDPackageQuickSearch$TextBox_SCBRedeem">
</div>

<script type="text/javascript">
    var IsHotelIncluded = 'False';
    if(IsHotelIncluded == 'True') 
    {
        setTimeout("validateroominfo('UCDPackageQuickSearch_Dropdownlist_Room'," +
                    "'UCDPackageQuickSearch_UCDPackageQuickSearchRoomSelection1_Table_RoomSelection'," +
                    "'UCDPackageQuickSearch_UCDPackageQuickSearchRoomSelection2_Table_RoomSelection'," +
                    "'UCDPackageQuickSearch_UCDPackageQuickSearchRoomSelection3_Table_RoomSelection'," +
                    "'UCDPackageQuickSearch_UCDPackageQuickSearchRoomSelection4_Table_RoomSelection'," +
                    "'UCDPackageQuickSearch_UCDPackageQuickSearchRoomSelection5_Table_RoomSelection')", 100);
    }

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
                </div>
                <div id="containerpackagesearchright">
                    <div class="itemcontainerheader" id="containerpackagesearchrightheader">
                        <h1><span id="Label_PackageName">Margaret River, Wine, Busselton, Cape Leeuwin with Lunch</span>
                        <span class="headersub" id="Label_PackageRefNo"> (PK0497738PER745)</span></h1>
                    </div>
                    
<section class="slider">
    <div class="flexslider" id="slider">
        
    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 2000%; transition-duration: 0.6s; transform: translate3d(-2448px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 612px; float: left; display: block;">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_153529628.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl07_Image_TourAdd_clone" draggable="false">
	                </li>
            
                    <li style="width: 612px; float: left; display: block;" class="">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_63929044_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl00_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 612px; float: left; display: block;" class="">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_113351743_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl01_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 612px; float: left; display: block;" class="">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_131049629_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl02_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 612px; float: left; display: block;" class="flex-active-slide">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_63929008.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl03_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 612px; float: left; display: block;" class="">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_41653216_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl04_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 612px; float: left; display: block;" class="">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_184967387_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl05_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 612px; float: left; display: block;" class="">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_252521374_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl06_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 612px; float: left; display: block;" class="">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_153529628.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl07_Image_TourAdd" draggable="false">
	                </li>
	            
        <li style="width: 612px; float: left; display: block;" class="clone" aria-hidden="true">
                        <img style="height:300px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_63929044_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_Images_ctl00_Image_TourAdd_clone" draggable="false">
	                </li></ul></div><ul class="flex-direction-nav"><li><a href="#" class="flex-prev">Previous</a></li><li><a href="#" class="flex-next">Next</a></li></ul></div>
    <div class="flexslider" id="carousel">
        
    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1600%; transition-duration: 0.6s; transform: translate3d(0px, 0px, 0px);">
            
                    <li style="width: 77px; float: left; display: block;" class="">
                        <img style="height:57px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_63929044_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_ThumbImages_ctl00_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 77px; float: left; display: block;" class="">
                        <img style="height:57px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_113351743_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_ThumbImages_ctl01_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 77px; float: left; display: block;" class="">
                        <img style="height:57px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_131049629_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_ThumbImages_ctl02_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 77px; float: left; display: block;" class="flex-active-slide">
                        <img style="height:57px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_63929008.jpg" id="UCDPackageQuickSearchImages_Repeater_ThumbImages_ctl03_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 77px; float: left; display: block;" class="">
                        <img style="height:57px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_41653216_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_ThumbImages_ctl04_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 77px; float: left; display: block;" class="">
                        <img style="height:57px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_184967387_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_ThumbImages_ctl05_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 77px; float: left; display: block;" class="">
                        <img style="height:57px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_252521374_converted.jpg" id="UCDPackageQuickSearchImages_Repeater_ThumbImages_ctl06_Image_TourAdd" draggable="false">
	                </li>
	            
                    <li style="width: 77px; float: left; display: block;" class="">
                        <img style="height:57px;border-width:0px;" src="http://packages.asiatravel.com/packageImage/Tour/AddtlImages/3649/shutterstock_153529628.jpg" id="UCDPackageQuickSearchImages_Repeater_ThumbImages_ctl07_Image_TourAdd" draggable="false">
	                </li>
	            
        </ul></div><ul class="flex-direction-nav"><li><a href="#" class="flex-prev flex-disabled" tabindex="-1">Previous</a></li><li><a href="#" class="flex-next" tabindex="-1">Next</a></li></ul></div>
</section>
<script type="text/javascript">
//    $(function(){
//      SyntaxHighlighter.all();
//    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 83,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: true,
        slideshow: true,
        slideshowSpeed: 5000,
        animationSpeed: 600, 
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>
                    
                    
<div class="itemcontaineroverview" id="divitemcontaineroverview">
    <ul class="tabs-menu">
        <li class="current" id="UCDPackageOverview_li_tab1">
            <a href="#UCDPackageOverview_divtab1" id="link_tab1"><span id="UCDPackageOverview_Label_Overview">Overview</span></a>
        </li>
        <li id="UCDPackageOverview_li_tab2">
            <a href="#UCDPackageOverview_divtab2" id="link_tab2"><span id="UCDPackageOverview_Label_ImportantNotes">Important Notes</span></a>
        </li>
        
        <li id="UCDPackageOverview_li_tab4">
            <a href="#UCDPackageOverview_divtab4" id="link_tab4"><span id="UCDPackageOverview_Label_TermsConditions">Terms &amp; Conditions</span></a>
        </li>
    </ul>
    <div class="tab">
        <div class="tab-content" id="UCDPackageOverview_divtab1">
            

<table width="100%" cellspacing="0" cellpadding="0" id="Table_PackageInclusive">
    <tbody><tr>
        <td>       
            <h3><span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_PackageInclusive">Package Inclusive</span></h3>
        </td>
    </tr>
    <tr>
        <td>   
            <span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_PackageInclusiveDetail"><ul><li>Margaret River, Wine, Busselton, Cape Leeuwin with Lunch</li></ul></span>
        </td>
    </tr>
</tbody></table>

<table width="100%" cellspacing="0" cellpadding="0" id="Table_BookingPeriod">
    <tbody><tr>
        <td style="width:110px">
            <b><span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_BookingPeriod">Booking Period:</span></b>
        </td>
        <td>       
            <span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_BookingPeriodDateFrom">22 Apr 2014</span>
            <span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_BookingPeriodTo"> to </span>
            <span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_BookingPeriodDateTo">31 Dec 2016</span>
        </td>
    </tr>
    <tr>
        <td>
            <b><span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_TravelPeriod">Travel Period:</span></b>
        </td>
        <td>       
            <span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_TravelPeriodDateFrom">22 Apr 2014</span>
            <span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_TravelPeriodTo"> to </span>
            <span id="UCDPackageOverview_UCDPackageOverviewProduct_Label_TravelPeriodDateTo">31 Dec 2016</span>
        </td>
    </tr>
    <tr>
        <td style="height:15px;" colspan="2">
        </td>
    </tr>
    <tr id="trhr">
        <td colspan="2">
            <hr>
        </td>
    </tr>
</tbody></table>


        <table width="100%" cellspacing="0" cellpadding="0">
            <tbody><tr>
                <td>
                    <h3><a href="javascript:void(0);" onclick="javascript:showhideplusminus('UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Tour', 'UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Image_Icon')" id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_HyperLink_Tour">Margaret River, Wine, Busselton, Cape Leeuwin with Lunch</a>
                    <a href="javascript:void(0);" onclick="javascript:showhideplusminus('UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Tour', 'UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Image_Icon')" id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_HyperLink_TourIcon"><img style="border-width:0px;" src="http://packages.asiatravel.com/packagebooking/crs.style/img/icon/toggle-02.png" id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Image_Icon"></a></h3>
                </td>
            </tr>
            <tr id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Tour">
	<td>
                    <div id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Panel_TourDesc">
		
                        <p>
                            Travel down to the coastal town of Busselton to enjoy morning tea (own expense), and whilst here marvel at the Busselton Jetty, a two kilometre construction and the longest timber jetty in the southern hemisphere. <br><br>Head to Margaret River and enjoy a gourmet platter lunch of local produce, with complimentary beer and cider tastings. <br><br>Next head to Mammoth Cave for a guided tour of one of over 300 natural underground limestone caves in the district. Pass by stunning Boranup Forest, a visual highlight of the region before arriving at Augustas famous Cape Leeuwin Lighthouse, situated at the most south westerly tip of Australia and where the Southern and Indian Oceans meet. <br><br>Heading back to Margaret River, visit a local winery to taste some wines from this iconic region. Make a brief stop in Margaret River township where free time is available to stroll the main street and explore the quaint shops. On the return journey to Perth, break at a cafe for a light dinner (own expense). <br><br>Tour concludes at approximately 9.30pm, at which time hotel drop offs will commence.<br><br><br><b>Inclusions:</b><br></p><ul><li>Hotel pick up and drop off</li><li>Busselton Jetty</li><li>Margaret River wine tasting</li><li>Mammoth Cave guided tour</li><li>Cape Leeuwin Lighthouse</li><li>Margaret River township</li><li>Luxury coach travel</li><li>Expert commentary</li><li>Local gourmet lunch</li></ul><p><b><br></b></p><p><b>Not Included:</b> <br></p><ul><li>Morning tea (own expense) at Busselton Jetty<br></li><li>Dinner (own expense) at Busselton Jetty</li></ul><p><br></p><p><b>Pickup and drop off information (if applicable)</b></p><p>Pick up: Selected Perth accommodation.<br><br>Drop off: Selected Perth accommodation.<br><br>Departure Point: Perth Convention and Exhibition Centre forecourt.<br><br>Departure Time: 8:00am.</p><p><br></p><p><b>The Tour Operation Time:</b><br>Monday, Tuesday, Thursday, Friday, Saturday, except 03APR, 25MAR and 25DEC..<br><br></p><br>
                        <p></p>
                        <br>
                    
	</div>
                    
                    <div id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Panel_TourStartsTime">
		
                        <p>
                            <span style="font-weight:bold;" id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Label_TourStartsTime">Tour Starts Time:</span>
                            08:00Hrs
                        </p>
                        <br>
                    
	</div>
                    <div id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Panel_DurationOfTour">
		
                        <p> <span style="font-weight:bold;" id="UCDPackageOverview_UCDPackageOverviewProduct_Repeater_Tour_ctl00_Label_DurationOfTourHeader">Duration:</span>
                            13 hours 30 mins
                        </p>
                        <br>
                    
	</div>
                </td>
</tr>

            
        </tbody></table>
    



<div style="display:none;">
     
</div>
        </div>
        <div class="tab-content" id="UCDPackageOverview_divtab2">
            
        <table width="100%" cellspacing="0" cellpadding="0">
            <tbody><tr>
                <td>
                    <h3><a href="javascript:void(0);" onclick="javascript:showhideplusminus('UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_Tour', 'UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_Image_Icon')" id="UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_HyperLink_Tour">Margaret River, Wine, Busselton, Cape Leeuwin with Lunch</a>
                    <a href="javascript:void(0);" onclick="javascript:showhideplusminus('UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_Tour', 'UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_Image_Icon')" id="UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_HyperLink_TourIcon"><img style="border-width:0px;" src="http://packages.asiatravel.com/packagebooking/crs.style/img/icon/toggle-02.png" id="UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_Image_Icon"></a></h3>
                </td>
            </tr>
            <tr id="UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_Tour">
	<td>
                    <div id="UCDPackageOverview_UCDPackageOverviewImportantNotes_Repeater_Tour_ctl00_Panel_TourAdditionalInfo">
		
                        <p><b>Important Notes:</b><br></p><ul><li>Passengers must reconfirm tour at least 48 hours prior to departure. Failure to do so may result in cancellation.</li><li>Vineyards are closed 25DEC, Good Friday and other public holidays.</li><li>Pinnacle tours reserves the right to cancel departures or alter tour itineraries as deemed necessary. Itinerary alterations may occur due to road or weather conditions, accommodation availability, strikes, public holidays, cultural and religious traditions.</li><li>Fuel levies may be introduced when required. Should this occur, charges will be payable direct and subject to change without notice.</li><li>Morning tea (own expense) at Busselton Jetty<br></li><li>Dinner (own expense) at Busselton Jetty</li></ul><br><b>Child Policy</b><br><br>Infant: 0-4 years inclusive - not catered for.<br>Child: 5-12 years inclusive - child rates apply.<br><br><p><b>Pickup and drop off information (if applicable)</b></p><p>Pick up: Selected Perth accommodation.<br><br>Drop off: Selected Perth accommodation.<br><br>Departure Point: Perth Convention and Exhibition Centre forecourt.<br><br>Departure Time: 8:00am.</p><p><br></p><p><b>For emergency contact number</b>, please call:<br>ADAMS Pinnacle Tours<br>Address&nbsp; : Shop 1, Barrack St Jetty Perth WA 6000<br>Phone&nbsp;&nbsp;&nbsp;&nbsp; : 1300 551 687<br>Fax&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 08 9421 1448<br></p><p><br></p><p><b>Terms &amp; Conditions:</b><br>
</p><ul><li>All tours are confirmed and paid. 
</li><li>Unutilized tour component are non-refundable. 
</li><li>Tour timings are inclusive of traveling time to tour coordination point. 
</li><li>Subject to change due to weather/road conditions and/or Tour Guide discretion. 
</li><li>Tipping is at passenger own discretion. 
</li><li>Children traveling free may not be entitled to meals and must 
be carried on the lap of accompanying adults if no seats are available. 
</li><li>Suppliers of sightseeing tours reserve the right to ask any 
person to withdraw from any tour if they deem their acts or conduct 
offensive or a nuisance to other customers and there shall be no further
 liability. 
</li><li>Suppliers of sightseeing tours decline any responsibility for articles forgotten or lost in their vehicles. 
</li><li>Pick up services from accommodation are provided on some tours 
however customers are asked to reconfirm these services 24 hours before 
the service date directly with the supplier where accommodation pick-up 
is offered, suppliers will pick up from the majority of major 
accommodation providers in the city, but not necessarily from all of 
them.&nbsp; 
</li><li>If the supplier is unable to pick up from the requested accommodation, an alternative pick-up point will be suggested. 
</li><li>Suppliers of sightseeing tours reserve the right to alter 
itineraries or to cancel the tours at short or no notice for any reason.
 
</li><li>Where it is necessary to cancel the tour, Travelers will be 
offered one of the following options: (a) To join the requested tour at 
an alternative time or on an alternative date; or (b) To join an 
alternative tour. 
</li><li>Porterage and tips are not included. 
</li><li>Should the Traveler not be able to locate his/her driver or 
representative at the start of a service for which a booking has been 
made, it is the Traveler’s responsibility to call the relevant 
telephone number provided to the Traveler before making alternative 
arrangements. 
</li><li>For services starting at accommodation, Travelers should 
ensure that they are waiting at the appointed meeting point, as shown on
 the Traveler’s voucher, not less than 5 minutes prior to the confirmed
 pick up time.</li></ul><br><p></p>
                        <br>
                    
	</div>
                    
                    
                    
                </td>
</tr>

            
        </tbody></table>
    


        </div>
        <div class="tab-content" id="UCDPackageOverview_divtab3">
            

<table width="100%" cellspacing="0" cellpadding="0">
    
            <tbody><tr>
                <td>     
                    <h3>Margaret River, Wine, Busselton, Cape Leeuwin with Lunch</h3>
                </td>
            </tr>
            <tr>
                <td>
                    
                    <div id="UCDPackageOverview_UCDPackageOverviewAdditionalInfo_Repeater_Tour_ctl00_Panel_TourStartsTime">
	
                        <p>
                            <span style="font-weight:bold;" id="UCDPackageOverview_UCDPackageOverviewAdditionalInfo_Repeater_Tour_ctl00_Label_TourStartsTime">Tour Starts Time:</span>
                            08:00Hrs
                        </p>
                        <br>
                    
</div>
                    
                    
                </td>
            </tr>
            
               
</tbody></table>
        </div>
        <div class="tab-content" id="UCDPackageOverview_divtab4">
            

<table width="100%" cellspacing="0" cellpadding="0">
    <tbody><tr>
        <td>
            <h3><span id="UCDPackageOverview_UCDPackageOverviewTermsConditions_Label_TermsConditions">Terms &amp; Conditions</span></h3>
        </td>
    </tr>
    <tr>
        <td>
            <ul>
    <li>Customer name entered in the booking form to follow passport.</li>
    <li>For entry visa and transit visa, passports should have a minimum of 6 months validity
        after completing the journey.</li>
    <li>It is the customer responsibility to obtain all Entry Visa or Transit Visa.</li>
    <li>It is customer responsibility to check carefully for any errors made in the booking
        details, flight itineraries and travel vouchers immediately upon getting them.</li>
    <li>Please pay attention to the billing currency indicated on the package. Billing currency
        would be the currency in which you will be billed in.</li>
    <li>Prices are subject to surcharges during Peak season and Holiday season.</li>
    <li>Asia Travel staff provides advisory information but do not undertake any responsibility
        whatsoever for any changes of information.</li>
    <li>Prices and ticketing conditions are subject to change without prior notice before
        issuance of travel voucher.</li>
    <li>Prices are not guaranteed until travel vouchers are issued and full payment has
        been received.</li>
    <li>Asia Travel reserves the right to cancel any bookings</li>
    <li>Any cancellation /amendment will be subject to charges. Please refer to Asia Travel
        Cancellation/Amendment Policy.</li>
    <li>All packages are non-transferable and non-exchangeable.</li>
    <li>Any amendment after travel vouchers have been issued will be considered as a cancellation
        of the existing booking. Cancellation charges will be applied accordingly. Please
        refer to Asia Travel Cancellation Policies.</li>
    <li>Email address must be correctly furnished. As a customer, you agree to accept email
        as a means of communication and delivery of Travel vouchers and confirmation of
        your booking. In doing so, you agree not to hold www.asiatravel.com liable for any
        non-receipt of travel voucher or email confirmation.</li>
    <li>As an additional measure to protect our customers, www.asiatravel.com may request
        for photocopies of your credit card (back and front) and a Credit Card Authorization
        Payment Form to exclude the possibility that the card is being used by a third party,
        even after payment has been made. As a customer, you agree to cooperate and provide
        the necessary documents to www.asiatravel.com if such a need arises.</li>
    <li>Tickets are not to be used for touting purpose.</li>
    <li>Tickets are sold for foreign and inbound visitors to the park.</li>
</ul>

        </td>
    </tr>
</tbody></table>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $(".tabs-menu a").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var tab = $(this).attr("href");
        $(".tab-content").not(tab).css("display", "none");
        $(tab).fadeIn();
    });
});
</script>
                </div><br>
                
                <div id="containerreview">
                    
<div class="item" id="reviewitem">
    
</div>


                </div>
                
            </div>
        </div>
		
		
		</form>

			
             <div class="clear"></div>
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

  $("#search-tours-form").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#book_tour").on('click', function(event){
        event.preventDefault();
        var data = $("#search-tours-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#search-tours-form").valid()) return false;  
            window.location = '/fernleaf/?page_id=1119&' + data;
    });
  
  
  
  
</script>

<?php get_footer(); ?>