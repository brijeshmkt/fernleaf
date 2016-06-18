<?php
/*
  Template Name: Api Payment page
 */
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

get_header();

global $wpdb;

//echo bloginfo('url');
//echo get_template_directory_uri () ;
?>

    <!-- End Google Tag Manager -->
    <div class="page-wrapper">


        <div id="container">
            <!-- left content start -->
            <div class="content-left">
                <!-- TEST BOOKING ONLY -->

                <!-- TEST BOOKING ONLY -->

                <!-- Validation Error Message start-->
                <span id="Label_ValidationError"></span> <span id="Label_RestrictionError"></span>
                <!-- Validation Error Message end-->

                <!-- Free Cancellation start -->

                <!-- Free Cancellation end -->

                <!--membership start-->

                <div id="membership">

                    <div class="row1"> <a id="Anchor_Member" onclick="ToggleInfo('WUCMembership_HiddenField_Member','membershipinfo','Anchor_Member')" class="trigger collapsed" href="javascript:void(0)">
                            <img src="<?php echo get_template_directory_uri () ?>/images/icon-login.png" title="login" /><span style="text-decoration:underline;">Member Login
		        (Optional)</span>
                        </a>
                        <input type="hidden" name="WUCMembership$HiddenField_Member" id="WUCMembership_HiddenField_Member" />
                    </div>
                    <div id="membershipinfo" style="display:none;">
                        <div class="row2" style="padding:10px 0 0 0;">
                            <input name="WUCMembership$TextBox_UserID" type="text" maxlength="80" id="WUCMembership_TextBox_UserID" class="noerror" />
                            <input name="WUCMembership$TextBox_Password" type="password" maxlength="80" id="WUCMembership_TextBox_Password" class="noerror" />
                            <input type="submit" name="WUCMembership$Button_MemberLogin" value="Login" onclick="return fnCheckMember('User ID/Email Address','Password');" id="WUCMembership_Button_MemberLogin" class="btn-green" />
                        </div>
                        <div class="row3"> <a href="#">Forgot Your Password?</a> <a href="#">Not a member yet?</a> </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--membership end-->

                <!--notes start-->
                <div id="notes"> <span>Important Notes</span>
                    <ol>
                        <li> Please provide the traveller's English name as per passport and don't use other special characters. (%#+!@#$()+=:/?|<>) </li>
                        <li> If you are reserving multiple rooms at the same hotel for the same dates, please use different names for each reservation. </li>
                        <li id="Li_ChildNotes" style="display:none;"> Children 5 years old and above are considered as adults. Depending on hotel's specific child policies, children below 5 years of age are generally free of charge (however, no breakfast nor extra bed will be provided). </li>
                    </ol>
                </div>
                <!--notes end-->

                <!--room details start-->
                <div id="room-details">
                    <div class="head-title"> Guest Details - <span> Book now!This room type & rate has limited availability! </span>
                        <div class="title2">Required fields<span style="color:Red;">*</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="box">
                        <h3>Room 1 : Deluxe king - advance purchase</h3>
                        <div class="guest-name">
                            <h4>Guest Name:<span>*</span></h4>
                            <select name="DropDownList_GuestTitle" id="" class="noerror">
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                            </select>
                            <input name="TextBox_GuestFirstName" type="text" id="" class="noerror" />
                            <input name="TextBox_GuestLastName" type="text" id="" class="noerror" />
                        </div>
                        <div class="no-child"> <span> No. of Children<!--<a onmouseover="Tip('Children 5 years old and above are considered as adults. Depending on hotel`s specific child policies, children below 5 years of age are generally free of charge (however, no breakfast nor extra bed will be provided).', TITLE, 'Child Age')" onmouseout="UnTip()" style="text-decoration:none; cursor:pointer;"> <img src='<?php echo get_template_directory_uri () ?>/images/Info_Icon.gif' border='0' /></a>--> </span> <br />
                            <select name="DropDownList_NoChild" id="" class="noerror" onchange="">
                                <option selected="selected" value="0">0</option>
                                <option value="1">1</option>
                            </select>
                            &nbsp;
                            <select name="DropDownList_ChildAge1" id="" class="noerror" style="visibility:hidden;">
                                <option value="-1">Age</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            &nbsp;
                            <select name="DropDownList_ChildAge2" id="" class="noerror" style="visibility:hidden;">
                                <option value="-1">Age</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="box">
                        <h3>Room 2 : Deluxe king - advance purchase</h3>
                        <div class="guest-name">
                            <h4>Guest Name:<span>*</span></h4>
                            <select name="DropDownList_GuestTitle" id="" class="noerror">
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                            </select>
                            <input name="TextBox_GuestFirstName" type="text" id="" class="noerror" />
                            <input name="TextBox_GuestLastName" type="text" id="" class="noerror" />
                        </div>
                        <div class="no-child"> <span> No. of Children<!--<a onmouseover="Tip('Children 5 years old and above are considered as adults. Depending on hotel`s specific child policies, children below 5 years of age are generally free of charge (however, no breakfast nor extra bed will be provided).', TITLE, 'Child Age')" onmouseout="UnTip()" style="text-decoration:none; cursor:pointer;"> <img src='<?php echo get_template_directory_uri () ?>/images/Info_Icon.gif' border='0' /></a>--> </span> <br />
                            <select name="DropDownList_NoChild" id="" class="noerror" onchange="">
                                <option selected="selected" value="0">0</option>
                                <option value="1">1</option>
                            </select>
                            &nbsp;
                            <select name="DropDownList_ChildAge1" id="" class="noerror" style="visibility:hidden;">
                                <option value="-1">Age</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            &nbsp;
                            <select name="DropDownList_ChildAge2" id="" class="noerror" style="visibility:hidden;">
                                <option value="-1">Age</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--room details end-->

                <!--flight details start-->
                <div class="flight-details"> <a class="expander collapsed" href="#">Flight Details (Optional)</a>
                    <div class="details-content" style="display: none;">
                        <div class="arrival">
                            <div class="box-field right-indent">
                                <h4> Arrival </h4>
                            </div>
                            <div class="box-field">Flight No <br />
                                <input name="TextBox_ArrFlightNo" type="text" id="TextBox_ArrFlightNo" class="width150" />
                            </div>
                            <div class="box-field">Date<br />
                                <select name="DropDownList_ArrDayMonth" id="DropDownList_ArrDayMonth" class="height26">
                                    <option value="01/01/">01 Jan</option>
                                    <option value="01/01/">01 Jan</option>
                                    <option value="01/02/">02 Jan</option>
                                    <option value="01/03/">03 Jan</option>
                                    <option value="01/04/">04 Jan</option>
                                    <option value="01/05/">05 Jan</option>
                                    <option value="01/06/">06 Jan</option>
                                    <option value="01/07/">07 Jan</option>
                                    <option value="01/08/">08 Jan</option>
                                    <option value="01/09/">09 Jan</option>
                                    <option value="01/10/">10 Jan</option>
                                    <option value="01/11/">11 Jan</option>
                                    <option value="01/12/">12 Jan</option>
                                    <option value="01/13/">13 Jan</option>
                                    <option value="01/14/">14 Jan</option>
                                    <option value="01/15/">15 Jan</option>
                                    <option value="01/16/">16 Jan</option>
                                    <option value="01/17/">17 Jan</option>
                                    <option value="01/18/">18 Jan</option>
                                    <option value="01/19/">19 Jan</option>
                                    <option value="01/20/">20 Jan</option>
                                    <option value="01/21/">21 Jan</option>
                                    <option value="01/22/">22 Jan</option>
                                    <option value="01/23/">23 Jan</option>
                                    <option value="01/24/">24 Jan</option>
                                    <option value="01/25/">25 Jan</option>
                                    <option value="01/26/">26 Jan</option>
                                    <option value="01/27/">27 Jan</option>
                                    <option value="01/28/">28 Jan</option>
                                    <option value="01/29/">29 Jan</option>
                                    <option value="01/30/">30 Jan</option>
                                    <option value="01/31/">31 Jan</option>
                                    <option value="02/01/">01 Feb</option>
                                    <option value="02/02/">02 Feb</option>
                                    <option value="02/03/">03 Feb</option>
                                    <option value="02/04/">04 Feb</option>
                                    <option value="02/05/">05 Feb</option>
                                    <option value="02/06/">06 Feb</option>
                                    <option value="02/07/">07 Feb</option>
                                    <option value="02/08/">08 Feb</option>
                                    <option value="02/09/">09 Feb</option>
                                    <option value="02/10/">10 Feb</option>
                                    <option value="02/11/">11 Feb</option>
                                    <option value="02/12/">12 Feb</option>
                                    <option value="02/13/">13 Feb</option>
                                    <option value="02/14/">14 Feb</option>
                                    <option value="02/15/">15 Feb</option>
                                    <option value="02/16/">16 Feb</option>
                                    <option value="02/17/">17 Feb</option>
                                    <option value="02/18/">18 Feb</option>
                                    <option value="02/19/">19 Feb</option>
                                    <option value="02/20/">20 Feb</option>
                                    <option value="02/21/">21 Feb</option>
                                    <option value="02/22/">22 Feb</option>
                                    <option value="02/23/">23 Feb</option>
                                    <option value="02/24/">24 Feb</option>
                                    <option value="02/25/">25 Feb</option>
                                    <option value="02/26/">26 Feb</option>
                                    <option value="02/27/">27 Feb</option>
                                    <option value="02/28/">28 Feb</option>
                                    <option value="02/29/">29 Feb</option>
                                    <option value="03/01/">01 Mar</option>
                                    <option value="03/02/">02 Mar</option>
                                    <option value="03/03/">03 Mar</option>
                                    <option value="03/04/">04 Mar</option>
                                    <option value="03/05/">05 Mar</option>
                                    <option value="03/06/">06 Mar</option>
                                    <option value="03/07/">07 Mar</option>
                                    <option value="03/08/">08 Mar</option>
                                    <option value="03/09/">09 Mar</option>
                                    <option value="03/10/">10 Mar</option>
                                    <option value="03/11/">11 Mar</option>
                                    <option value="03/12/">12 Mar</option>
                                    <option value="03/13/">13 Mar</option>
                                    <option value="03/14/">14 Mar</option>
                                    <option value="03/15/">15 Mar</option>
                                    <option value="03/16/">16 Mar</option>
                                    <option value="03/17/">17 Mar</option>
                                    <option value="03/18/">18 Mar</option>
                                    <option value="03/19/">19 Mar</option>
                                    <option value="03/20/">20 Mar</option>
                                    <option value="03/21/">21 Mar</option>
                                    <option value="03/22/">22 Mar</option>
                                    <option value="03/23/">23 Mar</option>
                                    <option value="03/24/">24 Mar</option>
                                    <option value="03/25/">25 Mar</option>
                                    <option value="03/26/">26 Mar</option>
                                    <option value="03/27/">27 Mar</option>
                                    <option value="03/28/">28 Mar</option>
                                    <option value="03/29/">29 Mar</option>
                                    <option value="03/30/">30 Mar</option>
                                    <option value="03/31/">31 Mar</option>
                                    <option value="04/01/">01 Apr</option>
                                    <option value="04/02/">02 Apr</option>
                                    <option value="04/03/">03 Apr</option>
                                    <option value="04/04/">04 Apr</option>
                                    <option value="04/05/">05 Apr</option>
                                    <option value="04/06/">06 Apr</option>
                                    <option value="04/07/">07 Apr</option>
                                    <option value="04/08/">08 Apr</option>
                                    <option value="04/09/">09 Apr</option>
                                    <option value="04/10/">10 Apr</option>
                                    <option value="04/11/">11 Apr</option>
                                    <option value="04/12/">12 Apr</option>
                                    <option value="04/13/">13 Apr</option>
                                    <option value="04/14/">14 Apr</option>
                                    <option value="04/15/">15 Apr</option>
                                    <option value="04/16/">16 Apr</option>
                                    <option value="04/17/">17 Apr</option>
                                    <option value="04/18/">18 Apr</option>
                                    <option value="04/19/">19 Apr</option>
                                    <option value="04/20/">20 Apr</option>
                                    <option value="04/21/">21 Apr</option>
                                    <option value="04/22/">22 Apr</option>
                                    <option value="04/23/">23 Apr</option>
                                    <option value="04/24/">24 Apr</option>
                                    <option value="04/25/">25 Apr</option>
                                    <option value="04/26/">26 Apr</option>
                                    <option value="04/27/">27 Apr</option>
                                    <option value="04/28/">28 Apr</option>
                                    <option value="04/29/">29 Apr</option>
                                    <option value="04/30/">30 Apr</option>
                                    <option value="05/01/">01 May</option>
                                    <option value="05/02/">02 May</option>
                                    <option value="05/03/">03 May</option>
                                    <option value="05/04/">04 May</option>
                                    <option value="05/05/">05 May</option>
                                    <option value="05/06/">06 May</option>
                                    <option value="05/07/">07 May</option>
                                    <option value="05/08/">08 May</option>
                                    <option value="05/09/">09 May</option>
                                    <option value="05/10/">10 May</option>
                                    <option value="05/11/">11 May</option>
                                    <option value="05/12/">12 May</option>
                                    <option value="05/13/">13 May</option>
                                    <option value="05/14/">14 May</option>
                                    <option value="05/15/">15 May</option>
                                    <option value="05/16/">16 May</option>
                                    <option value="05/17/">17 May</option>
                                    <option value="05/18/">18 May</option>
                                    <option value="05/19/">19 May</option>
                                    <option value="05/20/">20 May</option>
                                    <option value="05/21/">21 May</option>
                                    <option value="05/22/">22 May</option>
                                    <option value="05/23/">23 May</option>
                                    <option value="05/24/">24 May</option>
                                    <option value="05/25/">25 May</option>
                                    <option value="05/26/">26 May</option>
                                    <option value="05/27/">27 May</option>
                                    <option value="05/28/">28 May</option>
                                    <option selected="selected" value="05/29/">29 May</option>
                                    <option value="05/30/">30 May</option>
                                    <option value="05/31/">31 May</option>
                                    <option value="06/01/">01 Jun</option>
                                    <option value="06/02/">02 Jun</option>
                                    <option value="06/03/">03 Jun</option>
                                    <option value="06/04/">04 Jun</option>
                                    <option value="06/05/">05 Jun</option>
                                    <option value="06/06/">06 Jun</option>
                                    <option value="06/07/">07 Jun</option>
                                    <option value="06/08/">08 Jun</option>
                                    <option value="06/09/">09 Jun</option>
                                    <option value="06/10/">10 Jun</option>
                                    <option value="06/11/">11 Jun</option>
                                    <option value="06/12/">12 Jun</option>
                                    <option value="06/13/">13 Jun</option>
                                    <option value="06/14/">14 Jun</option>
                                    <option value="06/15/">15 Jun</option>
                                    <option value="06/16/">16 Jun</option>
                                    <option value="06/17/">17 Jun</option>
                                    <option value="06/18/">18 Jun</option>
                                    <option value="06/19/">19 Jun</option>
                                    <option value="06/20/">20 Jun</option>
                                    <option value="06/21/">21 Jun</option>
                                    <option value="06/22/">22 Jun</option>
                                    <option value="06/23/">23 Jun</option>
                                    <option value="06/24/">24 Jun</option>
                                    <option value="06/25/">25 Jun</option>
                                    <option value="06/26/">26 Jun</option>
                                    <option value="06/27/">27 Jun</option>
                                    <option value="06/28/">28 Jun</option>
                                    <option value="06/29/">29 Jun</option>
                                    <option value="06/30/">30 Jun</option>
                                    <option value="07/01/">01 July</option>
                                    <option value="07/02/">02 July</option>
                                    <option value="07/03/">03 July</option>
                                    <option value="07/04/">04 July</option>
                                    <option value="07/05/">05 July</option>
                                    <option value="07/06/">06 July</option>
                                    <option value="07/07/">07 July</option>
                                    <option value="07/08/">08 July</option>
                                    <option value="07/09/">09 July</option>
                                    <option value="07/10/">10 July</option>
                                    <option value="07/11/">11 July</option>
                                    <option value="07/12/">12 July</option>
                                    <option value="07/13/">13 July</option>
                                    <option value="07/14/">14 July</option>
                                    <option value="07/15/">15 July</option>
                                    <option value="07/16/">16 July</option>
                                    <option value="07/17/">17 July</option>
                                    <option value="07/18/">18 July</option>
                                    <option value="07/19/">19 July</option>
                                    <option value="07/20/">20 July</option>
                                    <option value="07/21/">21 July</option>
                                    <option value="07/22/">22 July</option>
                                    <option value="07/23/">23 July</option>
                                    <option value="07/24/">24 July</option>
                                    <option value="07/25/">25 July</option>
                                    <option value="07/26/">26 July</option>
                                    <option value="07/27/">27 July</option>
                                    <option value="07/28/">28 July</option>
                                    <option value="07/29/">29 July</option>
                                    <option value="07/30/">30 July</option>
                                    <option value="07/31/">31 July</option>
                                    <option value="08/01/">01 Aug</option>
                                    <option value="08/02/">02 Aug</option>
                                    <option value="08/03/">03 Aug</option>
                                    <option value="08/04/">04 Aug</option>
                                    <option value="08/05/">05 Aug</option>
                                    <option value="08/06/">06 Aug</option>
                                    <option value="08/07/">07 Aug</option>
                                    <option value="08/08/">08 Aug</option>
                                    <option value="08/09/">09 Aug</option>
                                    <option value="08/10/">10 Aug</option>
                                    <option value="08/11/">11 Aug</option>
                                    <option value="08/12/">12 Aug</option>
                                    <option value="08/13/">13 Aug</option>
                                    <option value="08/14/">14 Aug</option>
                                    <option value="08/15/">15 Aug</option>
                                    <option value="08/16/">16 Aug</option>
                                    <option value="08/17/">17 Aug</option>
                                    <option value="08/18/">18 Aug</option>
                                    <option value="08/19/">19 Aug</option>
                                    <option value="08/20/">20 Aug</option>
                                    <option value="08/21/">21 Aug</option>
                                    <option value="08/22/">22 Aug</option>
                                    <option value="08/23/">23 Aug</option>
                                    <option value="08/24/">24 Aug</option>
                                    <option value="08/25/">25 Aug</option>
                                    <option value="08/26/">26 Aug</option>
                                    <option value="08/27/">27 Aug</option>
                                    <option value="08/28/">28 Aug</option>
                                    <option value="08/29/">29 Aug</option>
                                    <option value="08/30/">30 Aug</option>
                                    <option value="08/31/">31 Aug</option>
                                    <option value="09/01/">01 Sep</option>
                                    <option value="09/02/">02 Sep</option>
                                    <option value="09/03/">03 Sep</option>
                                    <option value="09/04/">04 Sep</option>
                                    <option value="09/05/">05 Sep</option>
                                    <option value="09/06/">06 Sep</option>
                                    <option value="09/07/">07 Sep</option>
                                    <option value="09/08/">08 Sep</option>
                                    <option value="09/09/">09 Sep</option>
                                    <option value="09/10/">10 Sep</option>
                                    <option value="09/11/">11 Sep</option>
                                    <option value="09/12/">12 Sep</option>
                                    <option value="09/13/">13 Sep</option>
                                    <option value="09/14/">14 Sep</option>
                                    <option value="09/15/">15 Sep</option>
                                    <option value="09/16/">16 Sep</option>
                                    <option value="09/17/">17 Sep</option>
                                    <option value="09/18/">18 Sep</option>
                                    <option value="09/19/">19 Sep</option>
                                    <option value="09/20/">20 Sep</option>
                                    <option value="09/21/">21 Sep</option>
                                    <option value="09/22/">22 Sep</option>
                                    <option value="09/23/">23 Sep</option>
                                    <option value="09/24/">24 Sep</option>
                                    <option value="09/25/">25 Sep</option>
                                    <option value="09/26/">26 Sep</option>
                                    <option value="09/27/">27 Sep</option>
                                    <option value="09/28/">28 Sep</option>
                                    <option value="09/29/">29 Sep</option>
                                    <option value="09/30/">30 Sep</option>
                                    <option value="10/01/">01 Oct</option>
                                    <option value="10/02/">02 Oct</option>
                                    <option value="10/03/">03 Oct</option>
                                    <option value="10/04/">04 Oct</option>
                                    <option value="10/05/">05 Oct</option>
                                    <option value="10/06/">06 Oct</option>
                                    <option value="10/07/">07 Oct</option>
                                    <option value="10/08/">08 Oct</option>
                                    <option value="10/09/">09 Oct</option>
                                    <option value="10/10/">10 Oct</option>
                                    <option value="10/11/">11 Oct</option>
                                    <option value="10/12/">12 Oct</option>
                                    <option value="10/13/">13 Oct</option>
                                    <option value="10/14/">14 Oct</option>
                                    <option value="10/15/">15 Oct</option>
                                    <option value="10/16/">16 Oct</option>
                                    <option value="10/17/">17 Oct</option>
                                    <option value="10/18/">18 Oct</option>
                                    <option value="10/19/">19 Oct</option>
                                    <option value="10/20/">20 Oct</option>
                                    <option value="10/21/">21 Oct</option>
                                    <option value="10/22/">22 Oct</option>
                                    <option value="10/23/">23 Oct</option>
                                    <option value="10/24/">24 Oct</option>
                                    <option value="10/25/">25 Oct</option>
                                    <option value="10/26/">26 Oct</option>
                                    <option value="10/27/">27 Oct</option>
                                    <option value="10/28/">28 Oct</option>
                                    <option value="10/29/">29 Oct</option>
                                    <option value="10/30/">30 Oct</option>
                                    <option value="10/31/">31 Oct</option>
                                    <option value="11/01/">01 Nov</option>
                                    <option value="11/02/">02 Nov</option>
                                    <option value="11/03/">03 Nov</option>
                                    <option value="11/04/">04 Nov</option>
                                    <option value="11/05/">05 Nov</option>
                                    <option value="11/06/">06 Nov</option>
                                    <option value="11/07/">07 Nov</option>
                                    <option value="11/08/">08 Nov</option>
                                    <option value="11/09/">09 Nov</option>
                                    <option value="11/10/">10 Nov</option>
                                    <option value="11/11/">11 Nov</option>
                                    <option value="11/12/">12 Nov</option>
                                    <option value="11/13/">13 Nov</option>
                                    <option value="11/14/">14 Nov</option>
                                    <option value="11/15/">15 Nov</option>
                                    <option value="11/16/">16 Nov</option>
                                    <option value="11/17/">17 Nov</option>
                                    <option value="11/18/">18 Nov</option>
                                    <option value="11/19/">19 Nov</option>
                                    <option value="11/20/">20 Nov</option>
                                    <option value="11/21/">21 Nov</option>
                                    <option value="11/22/">22 Nov</option>
                                    <option value="11/23/">23 Nov</option>
                                    <option value="11/24/">24 Nov</option>
                                    <option value="11/25/">25 Nov</option>
                                    <option value="11/26/">26 Nov</option>
                                    <option value="11/27/">27 Nov</option>
                                    <option value="11/28/">28 Nov</option>
                                    <option value="11/29/">29 Nov</option>
                                    <option value="11/30/">30 Nov</option>
                                    <option value="12/01/">01 Dec</option>
                                    <option value="12/02/">02 Dec</option>
                                    <option value="12/03/">03 Dec</option>
                                    <option value="12/04/">04 Dec</option>
                                    <option value="12/05/">05 Dec</option>
                                    <option value="12/06/">06 Dec</option>
                                    <option value="12/07/">07 Dec</option>
                                    <option value="12/08/">08 Dec</option>
                                    <option value="12/09/">09 Dec</option>
                                    <option value="12/10/">10 Dec</option>
                                    <option value="12/11/">11 Dec</option>
                                    <option value="12/12/">12 Dec</option>
                                    <option value="12/13/">13 Dec</option>
                                    <option value="12/14/">14 Dec</option>
                                    <option value="12/15/">15 Dec</option>
                                    <option value="12/16/">16 Dec</option>
                                    <option value="12/17/">17 Dec</option>
                                    <option value="12/18/">18 Dec</option>
                                    <option value="12/19/">19 Dec</option>
                                    <option value="12/20/">20 Dec</option>
                                    <option value="12/21/">21 Dec</option>
                                    <option value="12/22/">22 Dec</option>
                                    <option value="12/23/">23 Dec</option>
                                    <option value="12/24/">24 Dec</option>
                                    <option value="12/25/">25 Dec</option>
                                    <option value="12/26/">26 Dec</option>
                                    <option value="12/27/">27 Dec</option>
                                    <option value="12/28/">28 Dec</option>
                                    <option value="12/29/">29 Dec</option>
                                    <option value="12/30/">30 Dec</option>
                                    <option value="12/31/">31 Dec</option>
                                </select>
                                <select name="DropDownList_ArrYear" id="DropDownList_ArrYear" class="height26">
                                    <option value="2008">2008</option>
                                    <option selected="selected" value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="box-field">Travel Time(hh:mm)<br />
                                <select name="DropDownList_ArrHH" id="DropDownList_ArrHH" class="height26">
                                    <option value="00">00</option>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option selected="selected" value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                </select>
                                :
                                <select name="DropDownList_ArrMM" id="DropDownList_ArrMM" class="height26">
                                    <option selected="selected" value="00">00</option>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
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
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="departure">
                            <div class="box-field right-indent">
                                <h4> Departure </h4>
                            </div>
                            <div class="box-field">Flight No <br />
                                <input name="TextBox_DepFlightNo" type="text" id="TextBox_DepFlightNo" class="width150" />
                            </div>
                            <div class="box-field">Date<br />
                                <select name="DropDownList_DepDayMonth" id="DropDownList_DepDayMonth" class="height26">
                                    <option value="01/01/">01 Jan</option>
                                    <option value="01/01/">01 Jan</option>
                                    <option value="01/02/">02 Jan</option>
                                    <option value="01/03/">03 Jan</option>
                                    <option value="01/04/">04 Jan</option>
                                    <option value="01/05/">05 Jan</option>
                                    <option value="01/06/">06 Jan</option>
                                    <option value="01/07/">07 Jan</option>
                                    <option value="01/08/">08 Jan</option>
                                    <option value="01/09/">09 Jan</option>
                                    <option value="01/10/">10 Jan</option>
                                    <option value="01/11/">11 Jan</option>
                                    <option value="01/12/">12 Jan</option>
                                    <option value="01/13/">13 Jan</option>
                                    <option value="01/14/">14 Jan</option>
                                    <option value="01/15/">15 Jan</option>
                                    <option value="01/16/">16 Jan</option>
                                    <option value="01/17/">17 Jan</option>
                                    <option value="01/18/">18 Jan</option>
                                    <option value="01/19/">19 Jan</option>
                                    <option value="01/20/">20 Jan</option>
                                    <option value="01/21/">21 Jan</option>
                                    <option value="01/22/">22 Jan</option>
                                    <option value="01/23/">23 Jan</option>
                                    <option value="01/24/">24 Jan</option>
                                    <option value="01/25/">25 Jan</option>
                                    <option value="01/26/">26 Jan</option>
                                    <option value="01/27/">27 Jan</option>
                                    <option value="01/28/">28 Jan</option>
                                    <option value="01/29/">29 Jan</option>
                                    <option value="01/30/">30 Jan</option>
                                    <option value="01/31/">31 Jan</option>
                                    <option value="02/01/">01 Feb</option>
                                    <option value="02/02/">02 Feb</option>
                                    <option value="02/03/">03 Feb</option>
                                    <option value="02/04/">04 Feb</option>
                                    <option value="02/05/">05 Feb</option>
                                    <option value="02/06/">06 Feb</option>
                                    <option value="02/07/">07 Feb</option>
                                    <option value="02/08/">08 Feb</option>
                                    <option value="02/09/">09 Feb</option>
                                    <option value="02/10/">10 Feb</option>
                                    <option value="02/11/">11 Feb</option>
                                    <option value="02/12/">12 Feb</option>
                                    <option value="02/13/">13 Feb</option>
                                    <option value="02/14/">14 Feb</option>
                                    <option value="02/15/">15 Feb</option>
                                    <option value="02/16/">16 Feb</option>
                                    <option value="02/17/">17 Feb</option>
                                    <option value="02/18/">18 Feb</option>
                                    <option value="02/19/">19 Feb</option>
                                    <option value="02/20/">20 Feb</option>
                                    <option value="02/21/">21 Feb</option>
                                    <option value="02/22/">22 Feb</option>
                                    <option value="02/23/">23 Feb</option>
                                    <option value="02/24/">24 Feb</option>
                                    <option value="02/25/">25 Feb</option>
                                    <option value="02/26/">26 Feb</option>
                                    <option value="02/27/">27 Feb</option>
                                    <option value="02/28/">28 Feb</option>
                                    <option value="02/29/">29 Feb</option>
                                    <option value="03/01/">01 Mar</option>
                                    <option value="03/02/">02 Mar</option>
                                    <option value="03/03/">03 Mar</option>
                                    <option value="03/04/">04 Mar</option>
                                    <option value="03/05/">05 Mar</option>
                                    <option value="03/06/">06 Mar</option>
                                    <option value="03/07/">07 Mar</option>
                                    <option value="03/08/">08 Mar</option>
                                    <option value="03/09/">09 Mar</option>
                                    <option value="03/10/">10 Mar</option>
                                    <option value="03/11/">11 Mar</option>
                                    <option value="03/12/">12 Mar</option>
                                    <option value="03/13/">13 Mar</option>
                                    <option value="03/14/">14 Mar</option>
                                    <option value="03/15/">15 Mar</option>
                                    <option value="03/16/">16 Mar</option>
                                    <option value="03/17/">17 Mar</option>
                                    <option value="03/18/">18 Mar</option>
                                    <option value="03/19/">19 Mar</option>
                                    <option value="03/20/">20 Mar</option>
                                    <option value="03/21/">21 Mar</option>
                                    <option value="03/22/">22 Mar</option>
                                    <option value="03/23/">23 Mar</option>
                                    <option value="03/24/">24 Mar</option>
                                    <option value="03/25/">25 Mar</option>
                                    <option value="03/26/">26 Mar</option>
                                    <option value="03/27/">27 Mar</option>
                                    <option value="03/28/">28 Mar</option>
                                    <option value="03/29/">29 Mar</option>
                                    <option value="03/30/">30 Mar</option>
                                    <option value="03/31/">31 Mar</option>
                                    <option value="04/01/">01 Apr</option>
                                    <option value="04/02/">02 Apr</option>
                                    <option value="04/03/">03 Apr</option>
                                    <option value="04/04/">04 Apr</option>
                                    <option value="04/05/">05 Apr</option>
                                    <option value="04/06/">06 Apr</option>
                                    <option value="04/07/">07 Apr</option>
                                    <option value="04/08/">08 Apr</option>
                                    <option value="04/09/">09 Apr</option>
                                    <option value="04/10/">10 Apr</option>
                                    <option value="04/11/">11 Apr</option>
                                    <option value="04/12/">12 Apr</option>
                                    <option value="04/13/">13 Apr</option>
                                    <option value="04/14/">14 Apr</option>
                                    <option value="04/15/">15 Apr</option>
                                    <option value="04/16/">16 Apr</option>
                                    <option value="04/17/">17 Apr</option>
                                    <option value="04/18/">18 Apr</option>
                                    <option value="04/19/">19 Apr</option>
                                    <option value="04/20/">20 Apr</option>
                                    <option value="04/21/">21 Apr</option>
                                    <option value="04/22/">22 Apr</option>
                                    <option value="04/23/">23 Apr</option>
                                    <option value="04/24/">24 Apr</option>
                                    <option value="04/25/">25 Apr</option>
                                    <option value="04/26/">26 Apr</option>
                                    <option value="04/27/">27 Apr</option>
                                    <option value="04/28/">28 Apr</option>
                                    <option value="04/29/">29 Apr</option>
                                    <option value="04/30/">30 Apr</option>
                                    <option value="05/01/">01 May</option>
                                    <option value="05/02/">02 May</option>
                                    <option value="05/03/">03 May</option>
                                    <option value="05/04/">04 May</option>
                                    <option value="05/05/">05 May</option>
                                    <option value="05/06/">06 May</option>
                                    <option value="05/07/">07 May</option>
                                    <option value="05/08/">08 May</option>
                                    <option value="05/09/">09 May</option>
                                    <option value="05/10/">10 May</option>
                                    <option value="05/11/">11 May</option>
                                    <option value="05/12/">12 May</option>
                                    <option value="05/13/">13 May</option>
                                    <option value="05/14/">14 May</option>
                                    <option value="05/15/">15 May</option>
                                    <option value="05/16/">16 May</option>
                                    <option value="05/17/">17 May</option>
                                    <option value="05/18/">18 May</option>
                                    <option value="05/19/">19 May</option>
                                    <option value="05/20/">20 May</option>
                                    <option value="05/21/">21 May</option>
                                    <option value="05/22/">22 May</option>
                                    <option value="05/23/">23 May</option>
                                    <option value="05/24/">24 May</option>
                                    <option value="05/25/">25 May</option>
                                    <option value="05/26/">26 May</option>
                                    <option value="05/27/">27 May</option>
                                    <option value="05/28/">28 May</option>
                                    <option value="05/29/">29 May</option>
                                    <option selected="selected" value="05/30/">30 May</option>
                                    <option value="05/31/">31 May</option>
                                    <option value="06/01/">01 Jun</option>
                                    <option value="06/02/">02 Jun</option>
                                    <option value="06/03/">03 Jun</option>
                                    <option value="06/04/">04 Jun</option>
                                    <option value="06/05/">05 Jun</option>
                                    <option value="06/06/">06 Jun</option>
                                    <option value="06/07/">07 Jun</option>
                                    <option value="06/08/">08 Jun</option>
                                    <option value="06/09/">09 Jun</option>
                                    <option value="06/10/">10 Jun</option>
                                    <option value="06/11/">11 Jun</option>
                                    <option value="06/12/">12 Jun</option>
                                    <option value="06/13/">13 Jun</option>
                                    <option value="06/14/">14 Jun</option>
                                    <option value="06/15/">15 Jun</option>
                                    <option value="06/16/">16 Jun</option>
                                    <option value="06/17/">17 Jun</option>
                                    <option value="06/18/">18 Jun</option>
                                    <option value="06/19/">19 Jun</option>
                                    <option value="06/20/">20 Jun</option>
                                    <option value="06/21/">21 Jun</option>
                                    <option value="06/22/">22 Jun</option>
                                    <option value="06/23/">23 Jun</option>
                                    <option value="06/24/">24 Jun</option>
                                    <option value="06/25/">25 Jun</option>
                                    <option value="06/26/">26 Jun</option>
                                    <option value="06/27/">27 Jun</option>
                                    <option value="06/28/">28 Jun</option>
                                    <option value="06/29/">29 Jun</option>
                                    <option value="06/30/">30 Jun</option>
                                    <option value="07/01/">01 July</option>
                                    <option value="07/02/">02 July</option>
                                    <option value="07/03/">03 July</option>
                                    <option value="07/04/">04 July</option>
                                    <option value="07/05/">05 July</option>
                                    <option value="07/06/">06 July</option>
                                    <option value="07/07/">07 July</option>
                                    <option value="07/08/">08 July</option>
                                    <option value="07/09/">09 July</option>
                                    <option value="07/10/">10 July</option>
                                    <option value="07/11/">11 July</option>
                                    <option value="07/12/">12 July</option>
                                    <option value="07/13/">13 July</option>
                                    <option value="07/14/">14 July</option>
                                    <option value="07/15/">15 July</option>
                                    <option value="07/16/">16 July</option>
                                    <option value="07/17/">17 July</option>
                                    <option value="07/18/">18 July</option>
                                    <option value="07/19/">19 July</option>
                                    <option value="07/20/">20 July</option>
                                    <option value="07/21/">21 July</option>
                                    <option value="07/22/">22 July</option>
                                    <option value="07/23/">23 July</option>
                                    <option value="07/24/">24 July</option>
                                    <option value="07/25/">25 July</option>
                                    <option value="07/26/">26 July</option>
                                    <option value="07/27/">27 July</option>
                                    <option value="07/28/">28 July</option>
                                    <option value="07/29/">29 July</option>
                                    <option value="07/30/">30 July</option>
                                    <option value="07/31/">31 July</option>
                                    <option value="08/01/">01 Aug</option>
                                    <option value="08/02/">02 Aug</option>
                                    <option value="08/03/">03 Aug</option>
                                    <option value="08/04/">04 Aug</option>
                                    <option value="08/05/">05 Aug</option>
                                    <option value="08/06/">06 Aug</option>
                                    <option value="08/07/">07 Aug</option>
                                    <option value="08/08/">08 Aug</option>
                                    <option value="08/09/">09 Aug</option>
                                    <option value="08/10/">10 Aug</option>
                                    <option value="08/11/">11 Aug</option>
                                    <option value="08/12/">12 Aug</option>
                                    <option value="08/13/">13 Aug</option>
                                    <option value="08/14/">14 Aug</option>
                                    <option value="08/15/">15 Aug</option>
                                    <option value="08/16/">16 Aug</option>
                                    <option value="08/17/">17 Aug</option>
                                    <option value="08/18/">18 Aug</option>
                                    <option value="08/19/">19 Aug</option>
                                    <option value="08/20/">20 Aug</option>
                                    <option value="08/21/">21 Aug</option>
                                    <option value="08/22/">22 Aug</option>
                                    <option value="08/23/">23 Aug</option>
                                    <option value="08/24/">24 Aug</option>
                                    <option value="08/25/">25 Aug</option>
                                    <option value="08/26/">26 Aug</option>
                                    <option value="08/27/">27 Aug</option>
                                    <option value="08/28/">28 Aug</option>
                                    <option value="08/29/">29 Aug</option>
                                    <option value="08/30/">30 Aug</option>
                                    <option value="08/31/">31 Aug</option>
                                    <option value="09/01/">01 Sep</option>
                                    <option value="09/02/">02 Sep</option>
                                    <option value="09/03/">03 Sep</option>
                                    <option value="09/04/">04 Sep</option>
                                    <option value="09/05/">05 Sep</option>
                                    <option value="09/06/">06 Sep</option>
                                    <option value="09/07/">07 Sep</option>
                                    <option value="09/08/">08 Sep</option>
                                    <option value="09/09/">09 Sep</option>
                                    <option value="09/10/">10 Sep</option>
                                    <option value="09/11/">11 Sep</option>
                                    <option value="09/12/">12 Sep</option>
                                    <option value="09/13/">13 Sep</option>
                                    <option value="09/14/">14 Sep</option>
                                    <option value="09/15/">15 Sep</option>
                                    <option value="09/16/">16 Sep</option>
                                    <option value="09/17/">17 Sep</option>
                                    <option value="09/18/">18 Sep</option>
                                    <option value="09/19/">19 Sep</option>
                                    <option value="09/20/">20 Sep</option>
                                    <option value="09/21/">21 Sep</option>
                                    <option value="09/22/">22 Sep</option>
                                    <option value="09/23/">23 Sep</option>
                                    <option value="09/24/">24 Sep</option>
                                    <option value="09/25/">25 Sep</option>
                                    <option value="09/26/">26 Sep</option>
                                    <option value="09/27/">27 Sep</option>
                                    <option value="09/28/">28 Sep</option>
                                    <option value="09/29/">29 Sep</option>
                                    <option value="09/30/">30 Sep</option>
                                    <option value="10/01/">01 Oct</option>
                                    <option value="10/02/">02 Oct</option>
                                    <option value="10/03/">03 Oct</option>
                                    <option value="10/04/">04 Oct</option>
                                    <option value="10/05/">05 Oct</option>
                                    <option value="10/06/">06 Oct</option>
                                    <option value="10/07/">07 Oct</option>
                                    <option value="10/08/">08 Oct</option>
                                    <option value="10/09/">09 Oct</option>
                                    <option value="10/10/">10 Oct</option>
                                    <option value="10/11/">11 Oct</option>
                                    <option value="10/12/">12 Oct</option>
                                    <option value="10/13/">13 Oct</option>
                                    <option value="10/14/">14 Oct</option>
                                    <option value="10/15/">15 Oct</option>
                                    <option value="10/16/">16 Oct</option>
                                    <option value="10/17/">17 Oct</option>
                                    <option value="10/18/">18 Oct</option>
                                    <option value="10/19/">19 Oct</option>
                                    <option value="10/20/">20 Oct</option>
                                    <option value="10/21/">21 Oct</option>
                                    <option value="10/22/">22 Oct</option>
                                    <option value="10/23/">23 Oct</option>
                                    <option value="10/24/">24 Oct</option>
                                    <option value="10/25/">25 Oct</option>
                                    <option value="10/26/">26 Oct</option>
                                    <option value="10/27/">27 Oct</option>
                                    <option value="10/28/">28 Oct</option>
                                    <option value="10/29/">29 Oct</option>
                                    <option value="10/30/">30 Oct</option>
                                    <option value="10/31/">31 Oct</option>
                                    <option value="11/01/">01 Nov</option>
                                    <option value="11/02/">02 Nov</option>
                                    <option value="11/03/">03 Nov</option>
                                    <option value="11/04/">04 Nov</option>
                                    <option value="11/05/">05 Nov</option>
                                    <option value="11/06/">06 Nov</option>
                                    <option value="11/07/">07 Nov</option>
                                    <option value="11/08/">08 Nov</option>
                                    <option value="11/09/">09 Nov</option>
                                    <option value="11/10/">10 Nov</option>
                                    <option value="11/11/">11 Nov</option>
                                    <option value="11/12/">12 Nov</option>
                                    <option value="11/13/">13 Nov</option>
                                    <option value="11/14/">14 Nov</option>
                                    <option value="11/15/">15 Nov</option>
                                    <option value="11/16/">16 Nov</option>
                                    <option value="11/17/">17 Nov</option>
                                    <option value="11/18/">18 Nov</option>
                                    <option value="11/19/">19 Nov</option>
                                    <option value="11/20/">20 Nov</option>
                                    <option value="11/21/">21 Nov</option>
                                    <option value="11/22/">22 Nov</option>
                                    <option value="11/23/">23 Nov</option>
                                    <option value="11/24/">24 Nov</option>
                                    <option value="11/25/">25 Nov</option>
                                    <option value="11/26/">26 Nov</option>
                                    <option value="11/27/">27 Nov</option>
                                    <option value="11/28/">28 Nov</option>
                                    <option value="11/29/">29 Nov</option>
                                    <option value="11/30/">30 Nov</option>
                                    <option value="12/01/">01 Dec</option>
                                    <option value="12/02/">02 Dec</option>
                                    <option value="12/03/">03 Dec</option>
                                    <option value="12/04/">04 Dec</option>
                                    <option value="12/05/">05 Dec</option>
                                    <option value="12/06/">06 Dec</option>
                                    <option value="12/07/">07 Dec</option>
                                    <option value="12/08/">08 Dec</option>
                                    <option value="12/09/">09 Dec</option>
                                    <option value="12/10/">10 Dec</option>
                                    <option value="12/11/">11 Dec</option>
                                    <option value="12/12/">12 Dec</option>
                                    <option value="12/13/">13 Dec</option>
                                    <option value="12/14/">14 Dec</option>
                                    <option value="12/15/">15 Dec</option>
                                    <option value="12/16/">16 Dec</option>
                                    <option value="12/17/">17 Dec</option>
                                    <option value="12/18/">18 Dec</option>
                                    <option value="12/19/">19 Dec</option>
                                    <option value="12/20/">20 Dec</option>
                                    <option value="12/21/">21 Dec</option>
                                    <option value="12/22/">22 Dec</option>
                                    <option value="12/23/">23 Dec</option>
                                    <option value="12/24/">24 Dec</option>
                                    <option value="12/25/">25 Dec</option>
                                    <option value="12/26/">26 Dec</option>
                                    <option value="12/27/">27 Dec</option>
                                    <option value="12/28/">28 Dec</option>
                                    <option value="12/29/">29 Dec</option>
                                    <option value="12/30/">30 Dec</option>
                                    <option value="12/31/">31 Dec</option>
                                </select>
                                <select name="DropDownList_DepYear" id="DropDownList_DepYear" class="height26">
                                    <option value="2008">2008</option>
                                    <option selected="selected" value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <div class="box-field">Travel Time(hh:mm)<br />
                                <select name="DropDownList_DepHH" id="DropDownList_DepHH" class="height26">
                                    <option value="00">00</option>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option selected="selected" value="12">12</option>
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
                                </select>
                                :
                                <select name="DropDownList_DepMM" id="DropDownList_DepMM" class="height26">
                                    <option selected="selected" value="00">00</option>
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
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
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!--flight details end-->

                <!--special request start-->
                <div class="flight-details"> <a class="expander collapsed" href="#">Special Request (Optional)</a>
                    <div class="details-content" style="color:Black;display: none;"><br />
                        <span id="lblSpecialRequest2">Special Request</span> (<span id="lblsubjecttoavailability">subject to availability</span>) : </div>
                    <div class="details-content" style="display: none;">
                        <textarea name="TextBox_SpecialRequest" rows="3" cols="40" id="TextBox_SpecialRequest" onKeyDown="textCounter(this,180);" onKeyUp="textCounter(this,180);"></textarea>
                    </div>
                </div>
                <!--special request end-->

                <!--contact details start-->

                <div id="contact-details">
                    <div class="head-title"> Contact Details
                        <div class="title2">Required fields<span style="color:Red;">*</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="box">
                        <div class="box-contact">
                            <h4>Contact Person:<span>*</span></h4>
                            <input name="WUCBookingForm$TextBox_ContactPerson" type="text" maxlength="100" id="WUCBookingForm_TextBox_ContactPerson" class="noerror" />
                        </div>
                        <div class="box-country">
                            <h4>Country of Residence:<span>*</span></h4>
                            <select name="WUCBookingForm$DropDownList_CountryOfResidence" id="WUCBookingForm_DropDownList_CountryOfResidence" class="noerror">
                                <option value="Select">Select</option>
                                <option value="78">Afghanistan</option>
                                <option value="153">Albania</option>
                                <option value="1">Algeria</option>
                                <option value="219">American Samoa</option>
                                <option value="154">Andorra</option>
                                <option value="7">Angola</option>
                                <option value="120">Anguilla</option>
                                <option value="67">Antarctica</option>
                                <option value="121">Antigua and Barbuda</option>
                                <option value="253">Argentina</option>
                                <option value="79">Armenia</option>
                                <option value="122">Aruba</option>
                                <option value="220">Australia</option>
                                <option value="155">Austria</option>
                                <option value="269">Azerbaijan</option>
                                <option value="123">Bahamas</option>
                                <option value="198">Bahrain</option>
                                <option value="82">Bangladesh</option>
                                <option value="124">Barbados</option>
                                <option value="156">Belarus</option>
                                <option value="157">Belgium</option>
                                <option value="125">Belize</option>
                                <option value="9">Benin</option>
                                <option value="214">Bermuda</option>
                                <option value="83">Bhutan</option>
                                <option value="254">Bolivia</option>
                                <option value="158">Bosnia and Herzegovina</option>
                                <option value="10">Botswana</option>
                                <option value="68">Bouvet Island</option>
                                <option value="255">Brazil</option>
                                <option value="84">British Indian Ocean Territory</option>
                                <option value="126">British Virgin Islands</option>
                                <option value="85">Brunei</option>
                                <option value="159">Bulgaria</option>
                                <option value="11">Burkina Faso</option>
                                <option value="12">Burundi</option>
                                <option value="87">Cambodia</option>
                                <option value="13">Cameroon</option>
                                <option value="215">Canada</option>
                                <option value="14">Cape Verde</option>
                                <option value="127">Cayman Islands</option>
                                <option value="15">Central African Republic</option>
                                <option value="16">Chad</option>
                                <option value="256">Chile</option>
                                <option value="88">China</option>
                                <option value="89">Christmas Island</option>
                                <option value="90">Cocos (Keeling) Islands</option>
                                <option value="257">Colombia</option>
                                <option value="17">Comoros</option>
                                <option value="222">Cook Islands</option>
                                <option value="129">Costa Rica</option>
                                <option value="19">Cote d'Ivoire</option>
                                <option value="160">Croatia</option>
                                <option value="130">Cuba</option>
                                <option value="199">Cyprus</option>
                                <option value="161">Czech Republic</option>
                                <option value="274">Democratic Republic of the Congo</option>
                                <option value="162">Denmark</option>
                                <option value="20">Djibouti</option>
                                <option value="131">Dominica</option>
                                <option value="132">Dominican Republic</option>
                                <option value="258">Ecuador</option>
                                <option value="21">Egypt</option>
                                <option value="133">El Salvador</option>
                                <option value="22">Equatorial Guinea</option>
                                <option value="23">Eritrea</option>
                                <option value="163">Estonia</option>
                                <option value="24">Ethiopia</option>
                                <option value="259">Falkland Islands (Islas Malvinas)</option>
                                <option value="164">Faroe Islands</option>
                                <option value="224">Fiji</option>
                                <option value="165">Finland</option>
                                <option value="166">France</option>
                                <option value="260">French Guiana</option>
                                <option value="225">French Polynesia</option>
                                <option value="69">French Southern and Antarctic Lands</option>
                                <option value="26">Gabon</option>
                                <option value="27">Gambia</option>
                                <option value="91">Georgia</option>
                                <option value="167">Germany</option>
                                <option value="28">Ghana</option>
                                <option value="168">Gibraltar</option>
                                <option value="169">Greece</option>
                                <option value="74">Greenland</option>
                                <option value="134">Grenada</option>
                                <option value="135">Guadeloupe</option>
                                <option value="226">Guam</option>
                                <option value="136">Guatemala</option>
                                <option value="170">Guernsey</option>
                                <option value="30">Guinea</option>
                                <option value="31">Guinea-Bissau</option>
                                <option value="261">Guyana</option>
                                <option value="137">Haiti</option>
                                <option value="70">Heard Island and McDonald Islands</option>
                                <option value="138">Honduras</option>
                                <option value="92">Hong Kong</option>
                                <option value="171">Hungary</option>
                                <option value="75">Iceland</option>
                                <option selected="selected" value="93">India</option>
                                <option value="94">Indonesia</option>
                                <option value="201">Iran</option>
                                <option value="202">Iraq</option>
                                <option value="172">Ireland</option>
                                <option value="203">Israel</option>
                                <option value="173">Italy</option>
                                <option value="139">Jamaica</option>
                                <option value="76">Jan Mayen</option>
                                <option value="95">Japan</option>
                                <option value="174">Jersey</option>
                                <option value="204">Jordan</option>
                                <option value="96">Kazakhstan</option>
                                <option value="33">Kenya</option>
                                <option value="231">Kiribati</option>
                                <option value="97">Korea, North</option>
                                <option value="98">Korea, South</option>
                                <option value="205">Kuwait</option>
                                <option value="99">Kyrgyzstan</option>
                                <option value="100">Laos</option>
                                <option value="175">Latvia</option>
                                <option value="206">Lebanon</option>
                                <option value="34">Lesotho</option>
                                <option value="35">Liberia</option>
                                <option value="36">Libya</option>
                                <option value="176">Liechtenstein</option>
                                <option value="177">Lithuania</option>
                                <option value="178">Luxembourg</option>
                                <option value="101">Macau</option>
                                <option value="179">Macedonia, The Former Yugoslav Republic</option>
                                <option value="37">Madagascar</option>
                                <option value="38">Malawi</option>
                                <option value="102">Malaysia</option>
                                <option value="103">Maldives</option>
                                <option value="39">Mali</option>
                                <option value="180">Malta</option>
                                <option value="232">Marshall Islands</option>
                                <option value="140">Martinique</option>
                                <option value="40">Mauritania</option>
                                <option value="41">Mauritius</option>
                                <option value="42">Mayotte</option>
                                <option value="216">Mexico</option>
                                <option value="233">Micronesia</option>
                                <option value="181">Moldova</option>
                                <option value="182">Monaco</option>
                                <option value="104">Mongolia</option>
                                <option value="273">Montenegro</option>
                                <option value="141">Montserrat</option>
                                <option value="43">Morocco</option>
                                <option value="44">Mozambique</option>
                                <option value="86">Myanmar</option>
                                <option value="45">Namibia</option>
                                <option value="235">Nauru</option>
                                <option value="105">Nepal</option>
                                <option value="183">Netherlands</option>
                                <option value="143">Netherlands Antilles</option>
                                <option value="236">New Caledonia</option>
                                <option value="237">New Zealand</option>
                                <option value="144">Nicaragua</option>
                                <option value="46">Niger</option>
                                <option value="47">Nigeria</option>
                                <option value="238">Niue</option>
                                <option value="239">Norfolk Island</option>
                                <option value="240">Northern Mariana Islands</option>
                                <option value="184">Norway</option>
                                <option value="268">Oman</option>
                                <option value="106">Pakistan</option>
                                <option value="241">Palau</option>
                                <option value="145">Panama</option>
                                <option value="243">Papua New Guinea</option>
                                <option value="262">Paraguay</option>
                                <option value="263">Peru</option>
                                <option value="108">Philippines</option>
                                <option value="244">Pitcairn Islands</option>
                                <option value="185">Poland</option>
                                <option value="186">Portugal</option>
                                <option value="146">Puerto Rico</option>
                                <option value="207">Qatar</option>
                                <option value="18">Republic of the Congo</option>
                                <option value="48">Reunion</option>
                                <option value="187">Romania</option>
                                <option value="109">Russia</option>
                                <option value="49">Rwanda</option>
                                <option value="50">Saint Helena</option>
                                <option value="147">Saint Kitts and Nevis</option>
                                <option value="148">Saint Lucia</option>
                                <option value="217">Saint Pierre and Miquelon</option>
                                <option value="149">Saint Vincent and the Grenadines</option>
                                <option value="245">Samoa</option>
                                <option value="188">San Marino</option>
                                <option value="51">Sao Tome and Principe</option>
                                <option value="208">Saudi Arabia</option>
                                <option value="52">Senegal</option>
                                <option value="271">Serbia</option>
                                <option value="53">Seychelles</option>
                                <option value="54">Sierra Leone</option>
                                <option value="110">Singapore</option>
                                <option value="189">Slovakia</option>
                                <option value="190">Slovenia</option>
                                <option value="246">Solomon Islands</option>
                                <option value="55">Somalia</option>
                                <option value="56">South Africa</option>
                                <option value="71">South Georgia and the South Sandwich Islands</option>
                                <option value="191">Spain</option>
                                <option value="112">Sri Lanka</option>
                                <option value="57">Sudan</option>
                                <option value="264">Suriname</option>
                                <option value="77">Svalbard</option>
                                <option value="58">Swaziland</option>
                                <option value="192">Sweden</option>
                                <option value="193">Switzerland</option>
                                <option value="209">Syria</option>
                                <option value="113">Taiwan</option>
                                <option value="114">Tajikistan</option>
                                <option value="59">Tanzania</option>
                                <option value="115">Thailand</option>
                                <option value="272">Timor-Leste</option>
                                <option value="60">Togo</option>
                                <option value="247">Tokelau</option>
                                <option value="248">Tonga</option>
                                <option value="150">Trinidad and Tobago</option>
                                <option value="62">Tunisia</option>
                                <option value="210">Turkey</option>
                                <option value="116">Turkmenistan</option>
                                <option value="151">Turks and Caicos Islands</option>
                                <option value="249">Tuvalu</option>
                                <option value="152">U.S. Virgin Islands</option>
                                <option value="63">Uganda</option>
                                <option value="194">Ukraine</option>
                                <option value="211">United Arab Emirates</option>
                                <option value="195">United Kingdom</option>
                                <option value="218">United States</option>
                                <option value="265">Uruguay</option>
                                <option value="117">Uzbekistan</option>
                                <option value="250">Vanuatu</option>
                                <option value="196">Vatican City</option>
                                <option value="266">Venezuela</option>
                                <option value="118">Vietnam</option>
                                <option value="251">Wake Island</option>
                                <option value="252">Wallis and Futuna</option>
                                <option value="64">Western Sahara</option>
                                <option value="213">Yemen</option>
                                <option value="197">Yugoslavia</option>
                                <option value="65">Zambia</option>
                                <option value="66">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="box1">
                        <div class="box-email">
                            <h4>Email Address:<span>*</span></h4>
                            <input name="WUCBookingForm$TextBox_EmailAddress" type="text" maxlength="50" id="WUCBookingForm_TextBox_EmailAddress" class="noerror" autocomplete="off" />
                        </div>
                        <div class="box-nationality">
                            <h4>Nationality:<span>*</span></h4>
                            <select name="WUCBookingForm$DropDownList_Nationality" id="WUCBookingForm_DropDownList_Nationality" class="noerror">
                                <option value="Select">Select</option>
                                <option value="78">Afghanistan</option>
                                <option value="153">Albania</option>
                                <option value="1">Algeria</option>
                                <option value="219">American Samoa</option>
                                <option value="154">Andorra</option>
                                <option value="7">Angola</option>
                                <option value="120">Anguilla</option>
                                <option value="67">Antarctica</option>
                                <option value="121">Antigua and Barbuda</option>
                                <option value="253">Argentina</option>
                                <option value="79">Armenia</option>
                                <option value="122">Aruba</option>
                                <option value="220">Australia</option>
                                <option value="155">Austria</option>
                                <option value="269">Azerbaijan</option>
                                <option value="123">Bahamas</option>
                                <option value="198">Bahrain</option>
                                <option value="82">Bangladesh</option>
                                <option value="124">Barbados</option>
                                <option value="156">Belarus</option>
                                <option value="157">Belgium</option>
                                <option value="125">Belize</option>
                                <option value="9">Benin</option>
                                <option value="214">Bermuda</option>
                                <option value="83">Bhutan</option>
                                <option value="254">Bolivia</option>
                                <option value="158">Bosnia and Herzegovina</option>
                                <option value="10">Botswana</option>
                                <option value="68">Bouvet Island</option>
                                <option value="255">Brazil</option>
                                <option value="84">British Indian Ocean Territory</option>
                                <option value="126">British Virgin Islands</option>
                                <option value="85">Brunei</option>
                                <option value="159">Bulgaria</option>
                                <option value="11">Burkina Faso</option>
                                <option value="12">Burundi</option>
                                <option value="87">Cambodia</option>
                                <option value="13">Cameroon</option>
                                <option value="215">Canada</option>
                                <option value="14">Cape Verde</option>
                                <option value="127">Cayman Islands</option>
                                <option value="15">Central African Republic</option>
                                <option value="16">Chad</option>
                                <option value="256">Chile</option>
                                <option value="88">China</option>
                                <option value="89">Christmas Island</option>
                                <option value="90">Cocos (Keeling) Islands</option>
                                <option value="257">Colombia</option>
                                <option value="17">Comoros</option>
                                <option value="222">Cook Islands</option>
                                <option value="129">Costa Rica</option>
                                <option value="19">Cote d'Ivoire</option>
                                <option value="160">Croatia</option>
                                <option value="130">Cuba</option>
                                <option value="199">Cyprus</option>
                                <option value="161">Czech Republic</option>
                                <option value="274">Democratic Republic of the Congo</option>
                                <option value="162">Denmark</option>
                                <option value="20">Djibouti</option>
                                <option value="131">Dominica</option>
                                <option value="132">Dominican Republic</option>
                                <option value="258">Ecuador</option>
                                <option value="21">Egypt</option>
                                <option value="133">El Salvador</option>
                                <option value="22">Equatorial Guinea</option>
                                <option value="23">Eritrea</option>
                                <option value="163">Estonia</option>
                                <option value="24">Ethiopia</option>
                                <option value="259">Falkland Islands (Islas Malvinas)</option>
                                <option value="164">Faroe Islands</option>
                                <option value="224">Fiji</option>
                                <option value="165">Finland</option>
                                <option value="166">France</option>
                                <option value="260">French Guiana</option>
                                <option value="225">French Polynesia</option>
                                <option value="69">French Southern and Antarctic Lands</option>
                                <option value="26">Gabon</option>
                                <option value="27">Gambia</option>
                                <option value="91">Georgia</option>
                                <option value="167">Germany</option>
                                <option value="28">Ghana</option>
                                <option value="168">Gibraltar</option>
                                <option value="169">Greece</option>
                                <option value="74">Greenland</option>
                                <option value="134">Grenada</option>
                                <option value="135">Guadeloupe</option>
                                <option value="226">Guam</option>
                                <option value="136">Guatemala</option>
                                <option value="170">Guernsey</option>
                                <option value="30">Guinea</option>
                                <option value="31">Guinea-Bissau</option>
                                <option value="261">Guyana</option>
                                <option value="137">Haiti</option>
                                <option value="70">Heard Island and McDonald Islands</option>
                                <option value="138">Honduras</option>
                                <option value="92">Hong Kong</option>
                                <option value="171">Hungary</option>
                                <option value="75">Iceland</option>
                                <option selected="selected" value="93">India</option>
                                <option value="94">Indonesia</option>
                                <option value="201">Iran</option>
                                <option value="202">Iraq</option>
                                <option value="172">Ireland</option>
                                <option value="203">Israel</option>
                                <option value="173">Italy</option>
                                <option value="139">Jamaica</option>
                                <option value="76">Jan Mayen</option>
                                <option value="95">Japan</option>
                                <option value="174">Jersey</option>
                                <option value="204">Jordan</option>
                                <option value="96">Kazakhstan</option>
                                <option value="33">Kenya</option>
                                <option value="231">Kiribati</option>
                                <option value="97">Korea, North</option>
                                <option value="98">Korea, South</option>
                                <option value="205">Kuwait</option>
                                <option value="99">Kyrgyzstan</option>
                                <option value="100">Laos</option>
                                <option value="175">Latvia</option>
                                <option value="206">Lebanon</option>
                                <option value="34">Lesotho</option>
                                <option value="35">Liberia</option>
                                <option value="36">Libya</option>
                                <option value="176">Liechtenstein</option>
                                <option value="177">Lithuania</option>
                                <option value="178">Luxembourg</option>
                                <option value="101">Macau</option>
                                <option value="179">Macedonia, The Former Yugoslav Republic</option>
                                <option value="37">Madagascar</option>
                                <option value="38">Malawi</option>
                                <option value="102">Malaysia</option>
                                <option value="103">Maldives</option>
                                <option value="39">Mali</option>
                                <option value="180">Malta</option>
                                <option value="232">Marshall Islands</option>
                                <option value="140">Martinique</option>
                                <option value="40">Mauritania</option>
                                <option value="41">Mauritius</option>
                                <option value="42">Mayotte</option>
                                <option value="216">Mexico</option>
                                <option value="233">Micronesia</option>
                                <option value="181">Moldova</option>
                                <option value="182">Monaco</option>
                                <option value="104">Mongolia</option>
                                <option value="273">Montenegro</option>
                                <option value="141">Montserrat</option>
                                <option value="43">Morocco</option>
                                <option value="44">Mozambique</option>
                                <option value="86">Myanmar</option>
                                <option value="45">Namibia</option>
                                <option value="235">Nauru</option>
                                <option value="105">Nepal</option>
                                <option value="183">Netherlands</option>
                                <option value="143">Netherlands Antilles</option>
                                <option value="236">New Caledonia</option>
                                <option value="237">New Zealand</option>
                                <option value="144">Nicaragua</option>
                                <option value="46">Niger</option>
                                <option value="47">Nigeria</option>
                                <option value="238">Niue</option>
                                <option value="239">Norfolk Island</option>
                                <option value="240">Northern Mariana Islands</option>
                                <option value="184">Norway</option>
                                <option value="268">Oman</option>
                                <option value="106">Pakistan</option>
                                <option value="241">Palau</option>
                                <option value="145">Panama</option>
                                <option value="243">Papua New Guinea</option>
                                <option value="262">Paraguay</option>
                                <option value="263">Peru</option>
                                <option value="108">Philippines</option>
                                <option value="244">Pitcairn Islands</option>
                                <option value="185">Poland</option>
                                <option value="186">Portugal</option>
                                <option value="146">Puerto Rico</option>
                                <option value="207">Qatar</option>
                                <option value="18">Republic of the Congo</option>
                                <option value="48">Reunion</option>
                                <option value="187">Romania</option>
                                <option value="109">Russia</option>
                                <option value="49">Rwanda</option>
                                <option value="50">Saint Helena</option>
                                <option value="147">Saint Kitts and Nevis</option>
                                <option value="148">Saint Lucia</option>
                                <option value="217">Saint Pierre and Miquelon</option>
                                <option value="149">Saint Vincent and the Grenadines</option>
                                <option value="245">Samoa</option>
                                <option value="188">San Marino</option>
                                <option value="51">Sao Tome and Principe</option>
                                <option value="208">Saudi Arabia</option>
                                <option value="52">Senegal</option>
                                <option value="271">Serbia</option>
                                <option value="53">Seychelles</option>
                                <option value="54">Sierra Leone</option>
                                <option value="110">Singapore</option>
                                <option value="189">Slovakia</option>
                                <option value="190">Slovenia</option>
                                <option value="246">Solomon Islands</option>
                                <option value="55">Somalia</option>
                                <option value="56">South Africa</option>
                                <option value="71">South Georgia and the South Sandwich Islands</option>
                                <option value="191">Spain</option>
                                <option value="112">Sri Lanka</option>
                                <option value="57">Sudan</option>
                                <option value="264">Suriname</option>
                                <option value="77">Svalbard</option>
                                <option value="58">Swaziland</option>
                                <option value="192">Sweden</option>
                                <option value="193">Switzerland</option>
                                <option value="209">Syria</option>
                                <option value="113">Taiwan</option>
                                <option value="114">Tajikistan</option>
                                <option value="59">Tanzania</option>
                                <option value="115">Thailand</option>
                                <option value="272">Timor-Leste</option>
                                <option value="60">Togo</option>
                                <option value="247">Tokelau</option>
                                <option value="248">Tonga</option>
                                <option value="150">Trinidad and Tobago</option>
                                <option value="62">Tunisia</option>
                                <option value="210">Turkey</option>
                                <option value="116">Turkmenistan</option>
                                <option value="151">Turks and Caicos Islands</option>
                                <option value="249">Tuvalu</option>
                                <option value="152">U.S. Virgin Islands</option>
                                <option value="63">Uganda</option>
                                <option value="194">Ukraine</option>
                                <option value="211">United Arab Emirates</option>
                                <option value="195">United Kingdom</option>
                                <option value="218">United States</option>
                                <option value="265">Uruguay</option>
                                <option value="117">Uzbekistan</option>
                                <option value="250">Vanuatu</option>
                                <option value="196">Vatican City</option>
                                <option value="266">Venezuela</option>
                                <option value="118">Vietnam</option>
                                <option value="251">Wake Island</option>
                                <option value="252">Wallis and Futuna</option>
                                <option value="64">Western Sahara</option>
                                <option value="213">Yemen</option>
                                <option value="197">Yugoslavia</option>
                                <option value="65">Zambia</option>
                                <option value="66">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="box1">
                        <div class="box-email">
                            <h4>Alternate E-mail Address:</h4>
                            <input name="WUCBookingForm$TextBox_AlternateEmail" type="text" maxlength="50" id="WUCBookingForm_TextBox_AlternateEmail" class="noerror" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="box1">
                        <div class="box-contact-number">
                            <h4>Contact Number:<span>*</span> <span style="font-style:italic;"></span> </h4>
                            <select name="WUCBookingForm$DropDownList_ContactNo" id="WUCBookingForm_DropDownList_ContactNo" class="noerror">
                                <option value="">Select</option>
                                <option value="93">Afghanistan(+93)</option>
                                <option value="355">Albania(+355)</option>
                                <option value="213">Algeria(+213)</option>
                                <option value="1-684">American Samoa(+1-684)</option>
                                <option value="376">Andorra(+376)</option>
                                <option value="244">Angola(+244)</option>
                                <option value="1-264">Anguilla(+1-264)</option>
                                <option value="672">Antarctica(+672)</option>
                                <option value="1-268">Antigua and Barbuda(+1-268)</option>
                                <option value="54">Argentina(+54)</option>
                                <option value="374">Armenia(+374)</option>
                                <option value="297">Aruba(+297)</option>
                                <option value="61">Australia(+61)</option>
                                <option value="43">Austria(+43)</option>
                                <option value="994">Azerbaijan(+994)</option>
                                <option value="1-242">Bahamas(+1-242)</option>
                                <option value="973">Bahrain(+973)</option>
                                <option value="880">Bangladesh(+880)</option>
                                <option value="1-246">Barbados(+1-246)</option>
                                <option value="375">Belarus(+375)</option>
                                <option value="32">Belgium(+32)</option>
                                <option value="501">Belize(+501)</option>
                                <option value="229">Benin(+229)</option>
                                <option value="1-441">Bermuda(+1-441)</option>
                                <option value="975">Bhutan(+975)</option>
                                <option value="591">Bolivia(+591)</option>
                                <option value="387">Bosnia and Herzegovina(+387)</option>
                                <option value="267">Botswana(+267)</option>
                                <option value="55">Brazil(+55)</option>
                                <option value="246">British Indian Ocean Territory(+246)</option>
                                <option value="1-284">British Virgin Islands(+1-284)</option>
                                <option value="673">Brunei(+673)</option>
                                <option value="359">Bulgaria(+359)</option>
                                <option value="226">Burkina Faso(+226)</option>
                                <option value="257">Burundi(+257)</option>
                                <option value="855">Cambodia(+855)</option>
                                <option value="237">Cameroon(+237)</option>
                                <option value="1">Canada(+1)</option>
                                <option value="238">Cape Verde(+238)</option>
                                <option value="1-345">Cayman Islands(+1-345)</option>
                                <option value="236">Central African Republic(+236)</option>
                                <option value="235">Chad(+235)</option>
                                <option value="56">Chile(+56)</option>
                                <option value="86">China(+86)</option>
                                <option value="61">Christmas Island(+61)</option>
                                <option value="61">Cocos (Keeling) Islands(+61)</option>
                                <option value="57">Colombia(+57)</option>
                                <option value="269">Comoros(+269)</option>
                                <option value="682">Cook Islands(+682)</option>
                                <option value="506">Costa Rica(+506)</option>
                                <option value="225">Cote d'Ivoire(+225)</option>
                                <option value="385">Croatia(+385)</option>
                                <option value="53">Cuba(+53)</option>
                                <option value="357">Cyprus(+357)</option>
                                <option value="420">Czech Republic(+420)</option>
                                <option value="243">Democratic Republic of the Congo(+243)</option>
                                <option value="45">Denmark(+45)</option>
                                <option value="253">Djibouti(+253)</option>
                                <option value="1-767">Dominica(+1-767)</option>
                                <option value="1-829">Dominican Republic(+1-829)</option>
                                <option value="593">Ecuador(+593)</option>
                                <option value="20">Egypt(+20)</option>
                                <option value="503">El Salvador(+503)</option>
                                <option value="240">Equatorial Guinea(+240)</option>
                                <option value="291">Eritrea(+291)</option>
                                <option value="372">Estonia(+372)</option>
                                <option value="251">Ethiopia(+251)</option>
                                <option value="500">Falkland Islands (Islas Malvinas)(+500)</option>
                                <option value="298">Faroe Islands(+298)</option>
                                <option value="679">Fiji(+679)</option>
                                <option value="358">Finland(+358)</option>
                                <option value="33">France(+33)</option>
                                <option value="594">French Guiana(+594)</option>
                                <option value="689">French Polynesia(+689)</option>
                                <option value="241">Gabon(+241)</option>
                                <option value="220">Gambia(+220)</option>
                                <option value="995">Georgia(+995)</option>
                                <option value="49">Germany(+49)</option>
                                <option value="233">Ghana(+233)</option>
                                <option value="350">Gibraltar(+350)</option>
                                <option value="30">Greece(+30)</option>
                                <option value="299">Greenland(+299)</option>
                                <option value="1-473">Grenada(+1-473)</option>
                                <option value="590">Guadeloupe(+590)</option>
                                <option value="1-671">Guam(+1-671)</option>
                                <option value="502">Guatemala(+502)</option>
                                <option value="224">Guinea(+224)</option>
                                <option value="245">Guinea-Bissau(+245)</option>
                                <option value="592">Guyana(+592)</option>
                                <option value="509">Haiti(+509)</option>
                                <option value="504">Honduras(+504)</option>
                                <option value="852">Hong Kong(+852)</option>
                                <option value="36">Hungary(+36)</option>
                                <option value="354">Iceland(+354)</option>
                                <option selected="selected" value="91">India(+91)</option>
                                <option value="62">Indonesia(+62)</option>
                                <option value="98">Iran(+98)</option>
                                <option value="964">Iraq(+964)</option>
                                <option value="353">Ireland(+353)</option>
                                <option value="972">Israel(+972)</option>
                                <option value="39">Italy(+39)</option>
                                <option value="1-876">Jamaica(+1-876)</option>
                                <option value="81">Japan(+81)</option>
                                <option value="962">Jordan(+962)</option>
                                <option value="7">Kazakhstan(+7)</option>
                                <option value="254">Kenya(+254)</option>
                                <option value="686">Kiribati(+686)</option>
                                <option value="850">Korea, North(+850)</option>
                                <option value="82">Korea, South(+82)</option>
                                <option value="965">Kuwait(+965)</option>
                                <option value="996">Kyrgyzstan(+996)</option>
                                <option value="856">Laos(+856)</option>
                                <option value="371">Latvia(+371)</option>
                                <option value="961">Lebanon(+961)</option>
                                <option value="266">Lesotho(+266)</option>
                                <option value="231">Liberia(+231)</option>
                                <option value="218">Libya(+218)</option>
                                <option value="423">Liechtenstein(+423)</option>
                                <option value="370">Lithuania(+370)</option>
                                <option value="352">Luxembourg(+352)</option>
                                <option value="853">Macau(+853)</option>
                                <option value="389">Macedonia, The Former Yugoslav Republic(+389)</option>
                                <option value="261">Madagascar(+261)</option>
                                <option value="265">Malawi(+265)</option>
                                <option value="60">Malaysia(+60)</option>
                                <option value="960">Maldives(+960)</option>
                                <option value="223">Mali(+223)</option>
                                <option value="356">Malta(+356)</option>
                                <option value="692">Marshall Islands(+692)</option>
                                <option value="596">Martinique(+596)</option>
                                <option value="222">Mauritania(+222)</option>
                                <option value="230">Mauritius(+230)</option>
                                <option value="262">Mayotte(+262)</option>
                                <option value="52">Mexico(+52)</option>
                                <option value="691">Micronesia(+691)</option>
                                <option value="373">Moldova(+373)</option>
                                <option value="377">Monaco(+377)</option>
                                <option value="976">Mongolia(+976)</option>
                                <option value="382">Montenegro(+382)</option>
                                <option value="1-664">Montserrat(+1-664)</option>
                                <option value="258">Mozambique(+258)</option>
                                <option value="95">Myanmar(+95)</option>
                                <option value="264">Namibia(+264)</option>
                                <option value="674">Nauru(+674)</option>
                                <option value="977">Nepal(+977)</option>
                                <option value="31">Netherlands(+31)</option>
                                <option value="599">Netherlands Antilles(+599)</option>
                                <option value="687">New Caledonia(+687)</option>
                                <option value="64">New Zealand(+64)</option>
                                <option value="505">Nicaragua(+505)</option>
                                <option value="227">Niger(+227)</option>
                                <option value="234">Nigeria(+234)</option>
                                <option value="683">Niue(+683)</option>
                                <option value="672">Norfolk Island(+672)</option>
                                <option value="1-670">Northern Mariana Islands(+1-670)</option>
                                <option value="47">Norway(+47)</option>
                                <option value="968">Oman(+968)</option>
                                <option value="92">Pakistan(+92)</option>
                                <option value="680">Palau(+680)</option>
                                <option value="507">Panama(+507)</option>
                                <option value="675">Papua New Guinea(+675)</option>
                                <option value="595">Paraguay(+595)</option>
                                <option value="51">Peru(+51)</option>
                                <option value="63">Philippines(+63)</option>
                                <option value="872">Pitcairn Islands(+872)</option>
                                <option value="48">Poland(+48)</option>
                                <option value="351">Portugal(+351)</option>
                                <option value="1-939">Puerto Rico(+1-939)</option>
                                <option value="974">Qatar(+974)</option>
                                <option value="242">Republic of the Congo(+242)</option>
                                <option value="262">Reunion(+262)</option>
                                <option value="40">Romania(+40)</option>
                                <option value="7">Russia(+7)</option>
                                <option value="250">Rwanda(+250)</option>
                                <option value="290">Saint Helena(+290)</option>
                                <option value="1-869">Saint Kitts and Nevis(+1-869)</option>
                                <option value="1-758">Saint Lucia(+1-758)</option>
                                <option value="508">Saint Pierre and Miquelon(+508)</option>
                                <option value="1-784">Saint Vincent and the Grenadines(+1-784)</option>
                                <option value="685">Samoa(+685)</option>
                                <option value="378">San Marino(+378)</option>
                                <option value="239">Sao Tome and Principe(+239)</option>
                                <option value="966">Saudi Arabia(+966)</option>
                                <option value="221">Senegal(+221)</option>
                                <option value="248">Seychelles(+248)</option>
                                <option value="232">Sierra Leone(+232)</option>
                                <option value="65">Singapore(+65)</option>
                                <option value="421">Slovakia(+421)</option>
                                <option value="386">Slovenia(+386)</option>
                                <option value="677">Solomon Islands(+677)</option>
                                <option value="252">Somalia(+252)</option>
                                <option value="27">South Africa(+27)</option>
                                <option value="34">Spain(+34)</option>
                                <option value="94">Sri Lanka(+94)</option>
                                <option value="249">Sudan(+249)</option>
                                <option value="597">Suriname(+597)</option>
                                <option value="47">Svalbard(+47)</option>
                                <option value="268">Swaziland(+268)</option>
                                <option value="46">Sweden(+46)</option>
                                <option value="41">Switzerland(+41)</option>
                                <option value="963">Syria(+963)</option>
                                <option value="886">Taiwan(+886)</option>
                                <option value="992">Tajikistan(+992)</option>
                                <option value="255">Tanzania(+255)</option>
                                <option value="66">Thailand(+66)</option>
                                <option value="670">Timor-Leste(+670)</option>
                                <option value="228">Togo(+228)</option>
                                <option value="690">Tokelau(+690)</option>
                                <option value="676">Tonga(+676)</option>
                                <option value="1-868">Trinidad and Tobago(+1-868)</option>
                                <option value="216">Tunisia(+216)</option>
                                <option value="90">Turkey(+90)</option>
                                <option value="993">Turkmenistan(+993)</option>
                                <option value="1-649">Turks and Caicos Islands(+1-649)</option>
                                <option value="688">Tuvalu(+688)</option>
                                <option value="1-340">U.S. Virgin Islands(+1-340)</option>
                                <option value="256">Uganda(+256)</option>
                                <option value="380">Ukraine(+380)</option>
                                <option value="971">United Arab Emirates(+971)</option>
                                <option value="44">United Kingdom(+44)</option>
                                <option value="1">United States(+1)</option>
                                <option value="598">Uruguay(+598)</option>
                                <option value="998">Uzbekistan(+998)</option>
                                <option value="678">Vanuatu(+678)</option>
                                <option value="39">Vatican City(+39)</option>
                                <option value="58">Venezuela(+58)</option>
                                <option value="84">Vietnam(+84)</option>
                                <option value="1">Wake Island(+1)</option>
                                <option value="681">Wallis and Futuna(+681)</option>
                                <option value="212">Western Sahara(+212)</option>
                                <option value="967">Yemen(+967)</option>
                                <option value="260">Zambia(+260)</option>
                                <option value="263">Zimbabwe(+263)</option>
                            </select>
                            -
                            <input name="WUCBookingForm$TextBox_ContactAreaCode" type="text" id="WUCBookingForm_TextBox_ContactAreaCode" class="noerror" style="width:30px;" />
                            -
                            <input name="WUCBookingForm$TextBox_ContactNo" type="text" id="WUCBookingForm_TextBox_ContactNo" class="noerror" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="box1">
                        <div class="box-contact-number" style="padding-top:15px;">
                            <h4>Mobile Number: <span style="font-style:italic;"></span> </h4>
                            <select name="WUCBookingForm$DropDownList_MobileNo" id="WUCBookingForm_DropDownList_MobileNo" class="noerror">
                                <option value="">Select</option>
                                <option value="93">Afghanistan(+93)</option>
                                <option value="355">Albania(+355)</option>
                                <option value="213">Algeria(+213)</option>
                                <option value="1-684">American Samoa(+1-684)</option>
                                <option value="376">Andorra(+376)</option>
                                <option value="244">Angola(+244)</option>
                                <option value="1-264">Anguilla(+1-264)</option>
                                <option value="672">Antarctica(+672)</option>
                                <option value="1-268">Antigua and Barbuda(+1-268)</option>
                                <option value="54">Argentina(+54)</option>
                                <option value="374">Armenia(+374)</option>
                                <option value="297">Aruba(+297)</option>
                                <option value="61">Australia(+61)</option>
                                <option value="43">Austria(+43)</option>
                                <option value="994">Azerbaijan(+994)</option>
                                <option value="1-242">Bahamas(+1-242)</option>
                                <option value="973">Bahrain(+973)</option>
                                <option value="880">Bangladesh(+880)</option>
                                <option value="1-246">Barbados(+1-246)</option>
                                <option value="375">Belarus(+375)</option>
                                <option value="32">Belgium(+32)</option>
                                <option value="501">Belize(+501)</option>
                                <option value="229">Benin(+229)</option>
                                <option value="1-441">Bermuda(+1-441)</option>
                                <option value="975">Bhutan(+975)</option>
                                <option value="591">Bolivia(+591)</option>
                                <option value="387">Bosnia and Herzegovina(+387)</option>
                                <option value="267">Botswana(+267)</option>
                                <option value="55">Brazil(+55)</option>
                                <option value="246">British Indian Ocean Territory(+246)</option>
                                <option value="1-284">British Virgin Islands(+1-284)</option>
                                <option value="673">Brunei(+673)</option>
                                <option value="359">Bulgaria(+359)</option>
                                <option value="226">Burkina Faso(+226)</option>
                                <option value="257">Burundi(+257)</option>
                                <option value="855">Cambodia(+855)</option>
                                <option value="237">Cameroon(+237)</option>
                                <option value="1">Canada(+1)</option>
                                <option value="238">Cape Verde(+238)</option>
                                <option value="1-345">Cayman Islands(+1-345)</option>
                                <option value="236">Central African Republic(+236)</option>
                                <option value="235">Chad(+235)</option>
                                <option value="56">Chile(+56)</option>
                                <option value="86">China(+86)</option>
                                <option value="61">Christmas Island(+61)</option>
                                <option value="61">Cocos (Keeling) Islands(+61)</option>
                                <option value="57">Colombia(+57)</option>
                                <option value="269">Comoros(+269)</option>
                                <option value="682">Cook Islands(+682)</option>
                                <option value="506">Costa Rica(+506)</option>
                                <option value="225">Cote d'Ivoire(+225)</option>
                                <option value="385">Croatia(+385)</option>
                                <option value="53">Cuba(+53)</option>
                                <option value="357">Cyprus(+357)</option>
                                <option value="420">Czech Republic(+420)</option>
                                <option value="243">Democratic Republic of the Congo(+243)</option>
                                <option value="45">Denmark(+45)</option>
                                <option value="253">Djibouti(+253)</option>
                                <option value="1-767">Dominica(+1-767)</option>
                                <option value="1-829">Dominican Republic(+1-829)</option>
                                <option value="593">Ecuador(+593)</option>
                                <option value="20">Egypt(+20)</option>
                                <option value="503">El Salvador(+503)</option>
                                <option value="240">Equatorial Guinea(+240)</option>
                                <option value="291">Eritrea(+291)</option>
                                <option value="372">Estonia(+372)</option>
                                <option value="251">Ethiopia(+251)</option>
                                <option value="500">Falkland Islands (Islas Malvinas)(+500)</option>
                                <option value="298">Faroe Islands(+298)</option>
                                <option value="679">Fiji(+679)</option>
                                <option value="358">Finland(+358)</option>
                                <option value="33">France(+33)</option>
                                <option value="594">French Guiana(+594)</option>
                                <option value="689">French Polynesia(+689)</option>
                                <option value="241">Gabon(+241)</option>
                                <option value="220">Gambia(+220)</option>
                                <option value="995">Georgia(+995)</option>
                                <option value="49">Germany(+49)</option>
                                <option value="233">Ghana(+233)</option>
                                <option value="350">Gibraltar(+350)</option>
                                <option value="30">Greece(+30)</option>
                                <option value="299">Greenland(+299)</option>
                                <option value="1-473">Grenada(+1-473)</option>
                                <option value="590">Guadeloupe(+590)</option>
                                <option value="1-671">Guam(+1-671)</option>
                                <option value="502">Guatemala(+502)</option>
                                <option value="224">Guinea(+224)</option>
                                <option value="245">Guinea-Bissau(+245)</option>
                                <option value="592">Guyana(+592)</option>
                                <option value="509">Haiti(+509)</option>
                                <option value="504">Honduras(+504)</option>
                                <option value="852">Hong Kong(+852)</option>
                                <option value="36">Hungary(+36)</option>
                                <option value="354">Iceland(+354)</option>
                                <option selected="selected" value="91">India(+91)</option>
                                <option value="62">Indonesia(+62)</option>
                                <option value="98">Iran(+98)</option>
                                <option value="964">Iraq(+964)</option>
                                <option value="353">Ireland(+353)</option>
                                <option value="972">Israel(+972)</option>
                                <option value="39">Italy(+39)</option>
                                <option value="1-876">Jamaica(+1-876)</option>
                                <option value="81">Japan(+81)</option>
                                <option value="962">Jordan(+962)</option>
                                <option value="7">Kazakhstan(+7)</option>
                                <option value="254">Kenya(+254)</option>
                                <option value="686">Kiribati(+686)</option>
                                <option value="850">Korea, North(+850)</option>
                                <option value="82">Korea, South(+82)</option>
                                <option value="965">Kuwait(+965)</option>
                                <option value="996">Kyrgyzstan(+996)</option>
                                <option value="856">Laos(+856)</option>
                                <option value="371">Latvia(+371)</option>
                                <option value="961">Lebanon(+961)</option>
                                <option value="266">Lesotho(+266)</option>
                                <option value="231">Liberia(+231)</option>
                                <option value="218">Libya(+218)</option>
                                <option value="423">Liechtenstein(+423)</option>
                                <option value="370">Lithuania(+370)</option>
                                <option value="352">Luxembourg(+352)</option>
                                <option value="853">Macau(+853)</option>
                                <option value="389">Macedonia, The Former Yugoslav Republic(+389)</option>
                                <option value="261">Madagascar(+261)</option>
                                <option value="265">Malawi(+265)</option>
                                <option value="60">Malaysia(+60)</option>
                                <option value="960">Maldives(+960)</option>
                                <option value="223">Mali(+223)</option>
                                <option value="356">Malta(+356)</option>
                                <option value="692">Marshall Islands(+692)</option>
                                <option value="596">Martinique(+596)</option>
                                <option value="222">Mauritania(+222)</option>
                                <option value="230">Mauritius(+230)</option>
                                <option value="262">Mayotte(+262)</option>
                                <option value="52">Mexico(+52)</option>
                                <option value="691">Micronesia(+691)</option>
                                <option value="373">Moldova(+373)</option>
                                <option value="377">Monaco(+377)</option>
                                <option value="976">Mongolia(+976)</option>
                                <option value="382">Montenegro(+382)</option>
                                <option value="1-664">Montserrat(+1-664)</option>
                                <option value="258">Mozambique(+258)</option>
                                <option value="95">Myanmar(+95)</option>
                                <option value="264">Namibia(+264)</option>
                                <option value="674">Nauru(+674)</option>
                                <option value="977">Nepal(+977)</option>
                                <option value="31">Netherlands(+31)</option>
                                <option value="599">Netherlands Antilles(+599)</option>
                                <option value="687">New Caledonia(+687)</option>
                                <option value="64">New Zealand(+64)</option>
                                <option value="505">Nicaragua(+505)</option>
                                <option value="227">Niger(+227)</option>
                                <option value="234">Nigeria(+234)</option>
                                <option value="683">Niue(+683)</option>
                                <option value="672">Norfolk Island(+672)</option>
                                <option value="1-670">Northern Mariana Islands(+1-670)</option>
                                <option value="47">Norway(+47)</option>
                                <option value="968">Oman(+968)</option>
                                <option value="92">Pakistan(+92)</option>
                                <option value="680">Palau(+680)</option>
                                <option value="507">Panama(+507)</option>
                                <option value="675">Papua New Guinea(+675)</option>
                                <option value="595">Paraguay(+595)</option>
                                <option value="51">Peru(+51)</option>
                                <option value="63">Philippines(+63)</option>
                                <option value="872">Pitcairn Islands(+872)</option>
                                <option value="48">Poland(+48)</option>
                                <option value="351">Portugal(+351)</option>
                                <option value="1-939">Puerto Rico(+1-939)</option>
                                <option value="974">Qatar(+974)</option>
                                <option value="242">Republic of the Congo(+242)</option>
                                <option value="262">Reunion(+262)</option>
                                <option value="40">Romania(+40)</option>
                                <option value="7">Russia(+7)</option>
                                <option value="250">Rwanda(+250)</option>
                                <option value="290">Saint Helena(+290)</option>
                                <option value="1-869">Saint Kitts and Nevis(+1-869)</option>
                                <option value="1-758">Saint Lucia(+1-758)</option>
                                <option value="508">Saint Pierre and Miquelon(+508)</option>
                                <option value="1-784">Saint Vincent and the Grenadines(+1-784)</option>
                                <option value="685">Samoa(+685)</option>
                                <option value="378">San Marino(+378)</option>
                                <option value="239">Sao Tome and Principe(+239)</option>
                                <option value="966">Saudi Arabia(+966)</option>
                                <option value="221">Senegal(+221)</option>
                                <option value="248">Seychelles(+248)</option>
                                <option value="232">Sierra Leone(+232)</option>
                                <option value="65">Singapore(+65)</option>
                                <option value="421">Slovakia(+421)</option>
                                <option value="386">Slovenia(+386)</option>
                                <option value="677">Solomon Islands(+677)</option>
                                <option value="252">Somalia(+252)</option>
                                <option value="27">South Africa(+27)</option>
                                <option value="34">Spain(+34)</option>
                                <option value="94">Sri Lanka(+94)</option>
                                <option value="249">Sudan(+249)</option>
                                <option value="597">Suriname(+597)</option>
                                <option value="47">Svalbard(+47)</option>
                                <option value="268">Swaziland(+268)</option>
                                <option value="46">Sweden(+46)</option>
                                <option value="41">Switzerland(+41)</option>
                                <option value="963">Syria(+963)</option>
                                <option value="886">Taiwan(+886)</option>
                                <option value="992">Tajikistan(+992)</option>
                                <option value="255">Tanzania(+255)</option>
                                <option value="66">Thailand(+66)</option>
                                <option value="670">Timor-Leste(+670)</option>
                                <option value="228">Togo(+228)</option>
                                <option value="690">Tokelau(+690)</option>
                                <option value="676">Tonga(+676)</option>
                                <option value="1-868">Trinidad and Tobago(+1-868)</option>
                                <option value="216">Tunisia(+216)</option>
                                <option value="90">Turkey(+90)</option>
                                <option value="993">Turkmenistan(+993)</option>
                                <option value="1-649">Turks and Caicos Islands(+1-649)</option>
                                <option value="688">Tuvalu(+688)</option>
                                <option value="1-340">U.S. Virgin Islands(+1-340)</option>
                                <option value="256">Uganda(+256)</option>
                                <option value="380">Ukraine(+380)</option>
                                <option value="971">United Arab Emirates(+971)</option>
                                <option value="44">United Kingdom(+44)</option>
                                <option value="1">United States(+1)</option>
                                <option value="598">Uruguay(+598)</option>
                                <option value="998">Uzbekistan(+998)</option>
                                <option value="678">Vanuatu(+678)</option>
                                <option value="39">Vatican City(+39)</option>
                                <option value="58">Venezuela(+58)</option>
                                <option value="84">Vietnam(+84)</option>
                                <option value="1">Wake Island(+1)</option>
                                <option value="681">Wallis and Futuna(+681)</option>
                                <option value="212">Western Sahara(+212)</option>
                                <option value="967">Yemen(+967)</option>
                                <option value="260">Zambia(+260)</option>
                                <option value="263">Zimbabwe(+263)</option>
                            </select>
                            -
                            <input name="WUCBookingForm$TextBox_MobileAreaCode" type="text" id="WUCBookingForm_TextBox_MobileAreaCode" class="noerror" style="width:30px;" />
                            -
                            <input name="WUCBookingForm$TextBox_MobileNo" type="text" id="WUCBookingForm_TextBox_MobileNo" class="noerror" />
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <!--contact details end-->

                <!--payment details start-->

                <div id="payment">
                    <div class="head-title">
                        <div class="title1">How would you like to pay?</div>
                        <div class="title2">Required fields<span style="color:Red;">*</span></div>
                        <div class="clear"></div>
                    </div>
                    <!--cash vouchers Start-->

                    <div class="cv"> <a id="Anchor_CV" onclick="ToggleInfo('WUCPayment_HiddenField_Voucher','cashvoucherInfo','Anchor_CV')" class="trigger collapsed" href="#"><span style="color:#5f8038; font-weight: 600">Cash voucher code / Discount code</span></a>
                        <div id="cashvoucherInfo" class="details-content" style="display:none;">
                            <input type="hidden" name="WUCPayment$HiddenField_Voucher" id="WUCPayment_HiddenField_Voucher" />
                            <div class="cv-box">
                                <input name="WUCPayment$TextBox_CashVoucherCode" type="text" id="WUCPayment_TextBox_CashVoucherCode" class="noerror" />
                                <input type="submit" name="WUCPayment$Button_Validate" value="Validate" onclick="return fnCheckCashVoucher('Enter code here','Cash voucher code / Discount code is empty');" id="WUCPayment_Button_Validate" class="btn-green" />
                                <span style="color:black; font-weight:bold; font-size:13px; display:none;" id="voucher_loading"><img src="<?php echo get_template_directory_uri () ?>/images/loading-bar-1.gif" align="absmiddle" id="ImageLoading1" /></span>
                                <p><b>Important !!!</b> click the validate button to activate your cash voucher / discount code</p>
                            </div>
                        </div>
                    </div>

                    <!--cash vouchers End-->

                    <div class="credit-details">
                        <!--payment content-->
                        <div class="payment-content">
                            <div class="payment-content1">
                                <h4>We accept the following payment methods</h4>
                                <img src="<?php echo get_template_directory_uri () ?>/images/visa.png" />&nbsp;<img src="<?php echo get_template_directory_uri () ?>/images/mastercard.png" />&nbsp;<img src="<?php echo get_template_directory_uri () ?>/images/american-express.png" />&nbsp;<img src="<?php echo get_template_directory_uri () ?>/images/japan-credit-bureau.png" />&nbsp;<img src="<?php echo get_template_directory_uri () ?>/images/unionpay_s.jpg" />&nbsp;<img src="<?php echo get_template_directory_uri () ?>/images/alipay.png" />&nbsp;<img src="<?php echo get_template_directory_uri () ?>/images/paypal.png" />&nbsp; </div>
                            <div class="payment-content2">
                                <h4>You can count on us</h4>
                                <ul>
                                    <li>We use secure transmission</li>
                                    <li>We protect your personal information</li>
                                </ul>
                            </div>
                            <div class="payment-content3"> </div>
                        </div>
                        <div class="payment-method">
                            <div class="box">
                                <div class="box-payment-method">
                                    <h4>Payment Method:<span>*</span></h4>
                                    <select name="WUCPayment$DropDownList_CardType" id="WUCPayment_DropDownList_CardType" tabindex="1" class="noerror" onchange="javascript:checkPaymentOption();">
                                        <option selected="selected" value="0">Select</option>
                                        <option value="1">Visa Card</option>
                                        <option value="20">Master Card</option>
                                        <option value="5">American Express</option>
                                        <option value="19">JCB</option>
                                        <option value="28">银联</option>
                                        <option value="27">支付宝</option>
                                        <option value="21">PayPal</option>
                                    </select>
                                </div>
                                <div id="div_UnionPayInfo" style="display:none;"> <span id="WUCPayment_Label_UnionPayInfoText" style="color:Red;font-size:9pt;font-weight:bold;"></span> </div>
                                <div id="div_ATCN_PaymentInfo" style="display:none;"> <span id="WUCPayment_Label_ATCN_PaymentInfo" style="color:Red;font-size:10pt;font-weight:bold;"></span> </div>
                            </div>
                            <div class="box1" id="div_paymentBox1">
                                <div class="box-payment-card">
                                    <h4>Card Number:<span>*</span></h4>
                                    <input name="WUCPayment$TextBox_CCNo1" type="text" maxlength="4" id="WUCPayment_TextBox_CCNo1" tabindex="2" class="noerror" onKeyup="autotab(this, 'WUCPayment_TextBox_CCNo2')" style="width:31px;" />
                                    -
                                    <input name="WUCPayment$TextBox_CCNo2" type="text" maxlength="4" id="WUCPayment_TextBox_CCNo2" tabindex="2" class="noerror" onKeyup="autotab(this, 'WUCPayment_TextBox_CCNo3')" style="width:31px;" />
                                    -
                                    <input name="WUCPayment$TextBox_CCNo3" type="text" maxlength="4" id="WUCPayment_TextBox_CCNo3" tabindex="2" class="noerror" onKeyup="autotab(this, 'WUCPayment_TextBox_CCNo4')" style="width:31px;" />
                                    -
                                    <input name="WUCPayment$TextBox_CCNo4" type="text" maxlength="4" id="WUCPayment_TextBox_CCNo4" tabindex="2" class="noerror" style="width:31px;" />
                                </div>
                                <div class="box-payment-security" style="width:300px;">
                                    <h4>Security Code:<span>*</span></h4>
                                    <input name="WUCPayment$TextBox_SecurityCode" type="text" maxlength="4" id="WUCPayment_TextBox_SecurityCode" tabindex="4" class="noerror" style="width:31px;" />
                                    <br />
                                    <span id="WUCPayment_Label_SecurityNote" style="font-size:11px;">The last 3-digit number on the back of your Visa Card/Master Card/JCB Card, or the last 4-digit number on the front of Amex Card.</span>(<a id="WUCPayment_hyplnkCardSecurity" tabindex="-1" onclick="ViewCardSecurityLink('http://book.asiatravel.com/cardSecurity.aspx?lan=en-US')" href="#" style="font-size:10px;text-decoration:underline;">example</a>) </div>
                                <div class="box-payment-card-country">
                                    <h4>Card Issuance Country:<span>*</span></h4>
                                    <select name="WUCPayment$DropDownList_CardIssuanceCountry" id="WUCPayment_DropDownList_CardIssuanceCountry" tabindex="7" class="noerror">
                                        <option selected="selected" value="">Select</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="British Virgin Islands">British Virgin Islands</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Jan Mayen">Jan Mayen</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, North">Korea, North</option>
                                        <option value="Korea, South">Korea, South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia, The Former Yugoslav Republic">Macedonia, The Former Yugoslav Republic</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn Islands">Pitcairn Islands</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of the Congo">Republic of the Congo</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard">Svalbard</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="box-payment-billing-address">
                                    <h4>Card Holder Billing Address:<span>*</span></h4>
                                    <textarea name="WUCPayment$TextBox_BillingAddress" rows="2" cols="40" id="WUCPayment_TextBox_BillingAddress" tabindex="9" class="noerror" style="height:50px;"></textarea>
                                </div>
                            </div>
                            <div class="box1" id="div_paymentBox2">
                                <div class="box-payment-card-holder">
                                    <h4>Card Holder Name:<span>*</span></h4>
                                    <input name="WUCPayment$TextBox_CardHolderName" type="text" maxlength="100" id="WUCPayment_TextBox_CardHolderName" tabindex="3" class="noerror" />
                                </div>
                                <div class="box-payment-card-expiry">
                                    <h4>Expiry Date:<span>*</span></h4>
                                    <select name="WUCPayment$DropDownList_CardExpiryMonth" id="WUCPayment_DropDownList_CardExpiryMonth" tabindex="5" class="noerror">
                                        <option value="0">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <select name="WUCPayment$DropDownList_CardExpiryYear" id="WUCPayment_DropDownList_CardExpiryYear" tabindex="6" class="noerror">
                                        <option value="0">Year</option>
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
                                        <option value="2031">2031</option>
                                    </select>
                                </div>
                                <div class="box-payment-card-issuance" style="height:40px;"> &nbsp; </div>
                                <div class="box-payment-card-issuance">
                                    <h4>Card Issuance Bank:<span>*</span></h4>
                                    <input name="WUCPayment$TextBox_CardIssuanceBank" type="text" maxlength="50" id="WUCPayment_TextBox_CardIssuanceBank" tabindex="8" class="noerror" />
                                </div>
                                <div class="box-payment-card-issuance" style="vertical-align:bottom;">
                                    <table style="height:73px;">
                                        <tr>
                                            <td style="vertical-align:bottom;"><h4>Postcode:</h4>
                                                <input name="WUCPayment$TextBox_PostalCode" type="text" maxlength="20" id="WUCPayment_TextBox_PostalCode" tabindex="9" class="noerror" /></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <!--payment details end-->

                <!--insurance details start-->

                <div class="insurance-body" id="div_Insurance">
                    <div class="insurance-inner">
                        <div class="insurance-inner1">24 / 7 Protect</div>
                        <div class="insurance-inner2" style="vertical-align:top;"> Total Payable to Insurance for ALL TRAVELLERS = <span>SGD 49.20</span> <br />
                            <a class="expander" href="#" style="font-size:12px;">More details</a> </div>
                        <div class="clear"></div>
                    </div>
                    <div class="insurance-more">
                        <div class="insurance-more1" style="display:none;"> Buy comprehensive travel insurance NOW at an affordable price!<br />
                            Get 24/7 protection against unforeseen events! </div>
                        <div class="insurance-more1"> <a class="expander" href="#" style="display:none;">More details</a>
                            <div class="details-content clear"> <img src="<?php echo get_template_directory_uri () ?>/images/icon-tick-green.png" />&nbsp;Trip Cancellation and Trip Curtailment<br />
                                <img src="<?php echo get_template_directory_uri () ?>/images/icon-tick-green.png">&nbsp;Emergency Medical Expenses<br />
                                <img src="<?php echo get_template_directory_uri () ?>/images/icon-tick-green.png">&nbsp;Personal Accident and Disablement<br />
                                <img src="<?php echo get_template_directory_uri () ?>/images/icon-tick-green.png">&nbsp;Lose and Damage of Baggage and Personal Effects<br />
                                <img src="<?php echo get_template_directory_uri () ?>/images/icon-tick-green.png">&nbsp;Travel Delay<br />
                                And many more... ... </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--insurance details end-->

                <!--policy details start-->
                <div class="policy-body" style="text-align:center;">
                    <div class="policy-inner1">
                        <ul>
                            <li><a id="Anchor_PrivacyPolicy" href="#" target="_blank">Privacy Policy</a></li>
                            <li><a href="#" id="Anchor_UserAgreement" target="_blank">User Agreement</a></li>
                            <li id="Li_Insurace"><a id="Anchor_InsurancePolicy" href="#" target="_blank">Insurance Policy</a></li>
                        </ul>
                    </div>
                    <div class="policy-inner2"> <img src="<?php echo get_template_directory_uri () ?>/images/icon-tick-green.png" />&nbsp;By selecting to complete this booking I acknowledge that I have read and accept the followings:<br/>
                        <span style="font-weight:bold;">Disclaimer, Terms & Conditions & User Agreement</span>. </div>
                    <div class="policy-inner3">
                        <input type="submit" name="Button_HotelInsurance" value="Confirm Hotel Booking + Travel Insurance" id="Button_HotelInsurance" class="btn-green" />
                        <input type="submit" name="Button_ConfirmBooking" value="Confirm Hotel Booking Only" id="Button_ConfirmBooking" class="btn-green" />
                        <div id="filter_loading" style="display:none;">
                            <div style="position: absolute; right: 600px; bottom:50px;">
                                <table height="60px" width="210px" style="background-color:white; text-align:center; border:solid 2px #003061; line-height:30px;z-index:100;" cellpadding="0" cellspacing="0">
                                    <tr valign="middle">
                                        <td valign="middle" width="100%" height="100%"><span style="color:black; font-weight:bold; font-size:13px;">Processing…</span><br />
                                            <img src="<?php echo get_template_directory_uri () ?>/images/loading-bar-1.gif" align="absmiddle" id="ImageLoading" /></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div id="voucher_loading1" style="display:none;">
                            <div style="position: absolute; left: 450px; bottom:670px;">
                                <table height="60px" width="210px" style="background-color:white; text-align:center; border:solid 2px #003061; line-height:30px;z-index:100;" cellpadding="0" cellspacing="0">
                                    <tr valign="middle">
                                        <td valign="middle" width="100%" height="100%"><span style="color:black; font-weight:bold; font-size:13px;">Processing…</span><br />
                                            <img src="<?php echo get_template_directory_uri () ?>/images/loading-bar-1.gif" align="absmiddle" id="ImageLoading1" /></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div>&nbsp;</div>
                </div>
                <!--policy details end-->
            </div>
            <!-- left content end -->

            <!-- right content start -->

            <div class="content-right" id="sidebar">
                <h3>Trip Summary</h3>
                <div class="inner">
                    <!--hotel profile-->
                    <div class="hotel-profile"> <img src="<?php echo get_template_directory_uri () ?>/images/382792_501475_F1-compressed.jpg" id="" />
                        <div class="hotel-profile-name"> <span class="hotel-name">Moevenpick Heritage Hotel Sentosa</span> <span class="country-city">Sentosa Island,Singapore</span> <span class="star-rating"> <img src='<?php echo get_template_directory_uri () ?>/images/rate_star.jpg'/><img src='<?php echo get_template_directory_uri () ?>/images/rate_star.jpg'/><img src='<?php echo get_template_directory_uri () ?>/images/rate_star.jpg'/><img src='<?php echo get_template_directory_uri () ?>/images/rate_star.jpg'/><img src='<?php echo get_template_directory_uri () ?>/images/rate_star.jpg'/> </span> <span class="clear"></span> </div>
                        <div class="clear"></div>
                    </div>
                    <!--free stuff start-->

                    <!--free stuff end-->
                    <!--room inclusion-->
                    <div class="room-inclusion">
                        <div class="room-inclusion-details">
                            <p><strong>2 Rooms : Deluxe king - advance purchase </strong> <a href="#" id="WUCBookingSummary_Anchor_RoomInclusion" style="font-size:11px; color:Red;">Inclusion</a></p>
                            <p class="f12">Check-in: Sun, May 29, 2016</p>
                            <p class="f12">Check-out: Mon, May 30, 2016</p>
                            <p class="f12 cancel">No. of night: 1 Nights</p>
                            <p class="cancellation"><span style='font-size:12px; font-weight:bold;'>Cancellation Policy</span><!-- <a onmouseover="Tip('As per hotel policy, this booking is non refundable and cannot be canceled or amended once confirmed. In case of no-show, no refund will be given.', TITLE, 'Booking Conditions')" onmouseout="UnTip()" style="text-decoration:none; cursor:pointer;"><img src='<?php echo get_template_directory_uri () ?>/images/Info_Icon.gif' border='0' /></a>--></p>
                        </div>
                        <div class="room-inclusion-box">
                            <p> <strong>Room 1 : 1  Adult(s)</strong> </p>
                            <p> <span class="float-left">SGD 261.42 avg/night</span> <span class="float-right">SGD 261.42</span> <span class="clear"></span> </p>
                            <p class="clear"></p>
                        </div>
                        <div class="room-inclusion-box">
                            <p> <strong>Room 2 : 1  Adult(s)</strong> </p>
                            <p> <span class="float-left">SGD 261.42 avg/night</span> <span class="float-right">SGD 261.42</span> <span class="clear"></span> </p>
                            <p class="clear"></p>
                        </div>
                        <div class="room-inclusion-box">
                            <p> <span class="float-left">Taxes & Service Charges</span> <span class="float-right">SGD 92.54</span> <span class="clear"></span> </p>
                            <p class="clear"></p>
                        </div>
                    </div>
                    <!--total price-->
                    <div class="total-price">
                        <div class="total-price-details">
                            <p>Total Hotel Price: <span>SGD 615.38</span></p>
                            <div id="div_ATCN_PaymentInfo_1" style="display:none">
                                <p style="color:Red;">The Amount to be Debited : [CURRENCY] [AMOUNT]<span></span></p>
                            </div>
                            <p class="unbold"><a href="#" id="">Breakdown</a></p>
                        </div>
                    </div>
                </div>
                <div class="payment-mode"> <span></span>Payment Mode: Prepay </div>
                <div class="guaranteed">
                    <div class="guaranteed-icon"> </div>
                    <div class="guaranteed-content">
                        <h4>Best Price Guaranteed</h4>
                        <p><strong>Congratulations!</strong> You're getting the lowest possible rate. <span>We guaranteed it.<i class="icon-popout"></i></span></p>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- right content end -->
        </div>


    </div>
    <script type="text/javascript" src="https://book.asiatravel.com/js/simple-expand.js"></script>
    <script type="text/javascript">
        $('.expander').simpleexpand();

        document.getElementById("filter_loading").style.display='none';
        document.getElementById("voucher_loading").style.display='none';
        function LoadingProcess()
        {
            try
            {
                document.getElementById("filter_loading").style.display='';
                setTimeout("document.images['ImageLoading'].src=document.images['ImageLoading'].src",10);
            }
            catch(e)
            {
                alert(e.message);
            }
        }
        function VoucherProcess()
        {
            try
            {
                document.getElementById("voucher_loading").style.display='';
                setTimeout("document.images['ImageLoading1'].src=document.images['ImageLoading1'].src",10);
            }
            catch(e)
            {
                alert(e.message);
            }
        }
    </script>
    <!--floating menu script-->
    <script type="text/javascript" src="https://book.asiatravel.com/jscript/wz_tooltipV2.js"></script>
    <script>window.tt_HideSrcTags.done=true;</script>
<?php
get_footer();
