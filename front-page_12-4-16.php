<?php get_header(); 
error_reporting(0);

global $wpdb;

$type = 'package';
$args=array(
  'post_type' => $type,
  'package-category'=>'tours',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'caller_get_posts'=> 1);
$my_query = null;
$my_query = new WP_Query($args);


$args1=array(
  'post_type' => $type,
  'package-category'=>'free-easy',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'caller_get_posts'=> 1);
$my_query1 = null;
$my_query1 = new WP_Query($args1);


$args2=array(
  'post_type' => $type,
  'package-category'=>'weekend',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'caller_get_posts'=> 1);
$my_query2 = null;
$my_query2 = new WP_Query($args2);


$search_hotel_names = $wpdb->get_results( 'SELECT * FROM fle_search_hotel_name' , OBJECT );

?>
<style type="text/css">
#ui-id-1
{
    height: 300px;
    overflow: scroll;
}
</style>
<div class="form-slider">
    <div class="row">
        <div class="twelve columns">
            <div class="row">
                <div class="eight columns">
                    <div id="verticalTab">
                        <ul class="resp-tabs-list">
                            <li class="flights"><i class="icon-plane"></i> Flights</li>
                            <li class="hotels"><i class="icon-building"></i> Hotels</li>
                            <li class="tours"><i class="icon-globe"></i> Tours &amp; Attractions</li>
                            <li class="allpackage"><span>Click here to book a combo<br>and save more!</span></li>
                        </ul>
                        <div class="resp-tabs-container">
                            <div>
                                <div class="form-elements-holder">
                                    <form id="search-flight-form" name="search-flight-form" method="post" action="">
                                        <div class="row">
                                            <div class="twelve columns radiobtns">
                                                <label><input type="radio" name="flights-type" checked="" value="Return" id="return"> Return</label>
                                                <label><input type="radio" name="flights-type" value="Oneway" id="oneway"> Oneway</label>
                                                <label><input type="radio" name="flights-type" value="Multistop" id="multistop"> Multi Stop</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="six columns">
                                                <label class="form-label">Departure City:</label><input type="text" class="form-control" value="" name="departure_city" id="departure_city">
                                            </div>
                                            <div class="six columns">
                                                <label class="form-label">Arrival City:</label><input type="text" class="form-control" value="" name="arrival_city" id="arrival_city">
                                            </div>
                                            <div class="clear"></div>
                                            <div class="six columns">
                                                <label class="form-label">Departure Date:</label><div class="calendar-icon"><input type="text" class="form-control" value="" name="departure_date" id="departure_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                            </div>
                                            <div class="six columns" id="arrival_date_div">
                                                <label class="form-label">Arrival Date:</label><div class="calendar-icon"><input type="text" class="form-control" value="" name="arrival_date" id="arrival_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="twelve columns" id="addmore" style="display: none;">
                                                <a href="#" class="gdl-button yellow-button small various">Add More</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="twelve columns">
                                                <div class="row">
                                                    <div class="four columns">
                                                        <label class="form-label">Class</label><select class="form-control">
                                                            <option value="Economy">Economy</option>
                                                            <option value="Premium">Premium</option>
                                                            <option value="Business">Business</option>
                                                            <option value="First">First</option>
                                                        </select>
                                                    </div>
                                                    <div class="four columns">
                                                        <label class="form-label">Adult</label><select class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="four columns">
                                                        <label class="form-label">Child</label><select class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="twelve columns"><a href="javascript:void(0);" id="flight-search-btn" class="gdl-button yellow-button large various">Show Availability!</a></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class="form-elements-holder">
                                    <form id="search-main-form" name="search-main-form">
                                        <div class="row">
                                            <div class="twelve columns">
                                                <label class="form-label">Hotel Name:</label>
                                                <input type="text" name="cityname" id="cityname" class="form-control" value="" title="City name required" placeholder="Enter city name" required=""><br>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="six columns">
                                                <label class="form-label">CheckIn Date:</label><div class="calendar-icon">
                                                    <input type="text" class="form-control" value="" name="CheckIndate" id="CheckIndate" title="Please select Check In date">
                                                    <img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                            </div>
                                            <div class="six columns">
                                                <label class="form-label">CheckOut Date:</label><div class="calendar-icon">
                                                    <input type="text" class="form-control" value="" name="CheckoutDate" id="CheckoutDate" placeholder="" required=""><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="twelve columns">
                                                <div class="row">
                                                    <div class="four columns">
                                                        <label class="form-label">Rooms</label>
                                                        <select name="hotel_rooms" id="hotel_rooms" class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                    <div class="four columns">
                                                        <label class="form-label">Adults Per Room</label>
                                                        <select name="NoAdult" id="NoAdult" class="form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="twelve columns">
                                                <a id="hotel-search-btn" class="gdl-button yellow-button large various">Search Hotels Now</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class="form-elements-holder">
                                    <form id="search-tours-form" name="frm2" method="post" action="">
                                        <div class="row">
                                            <div class="twelve columns">
                                                <div class="row">
                                                    <div class="seven columns">
                                                        <label class="form-label">Select Your Destination</label>
                                                        <select class="form-control" id="UserControlDisplayQuickSearch_UCDQuickSearchPackageLandTour_UCDInputCountryCityDropDown_DropDownList_CountryCity">    
                                                        </select>
                                                    </div>
                                                    <div class="five columns">
                                                        <label class="form-label">Persons</label><input type="text" class="form-control" value="" name="person">
                                                    </div>
                                                    <div class="twelve columns"><a href="javascript:void(0);" id="tours-search-btn" class="gdl-button yellow-button large various">Show Availability!</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class="form-elements-holder">
                                    <form name="frm3" method="post" action="">
                                        <div class="row">
                                            <div class="twelve columns radiobtns">
                                                <label><input type="radio" name="additonal_savings" checked="" value="All" id="flights_hotel_tours"> Flights + Hotels + Tours</label><label><input type="radio" name="additonal_savings" value="Flights+Hotels" id="flights_hotel"> Flights + Hotels</label><label><input type="radio" name="additonal_savings" id="hotel_tours" value="Hotels+Tours"> Hotels + Tours</label>
                                            </div>
                                        </div>
                                        <div class="flights_hotel_tours">
                                            <div class="row">
                                                <div class="six columns">
                                                    <label class="form-label">Departure City:</label><input type="text" class="form-control" value="" name="departure_city" id="fdeparture_city">
                                                </div>
                                                <div class="six columns">
                                                    <label class="form-label">Arrival City:</label><input type="text" class="form-control" value="" name="arrival_city" id="farrival_city">
                                                </div>
                                                <div class="clear"></div>
                                                <div class="six columns">
                                                    <label class="form-label">Departure Date:</label><div class="calendar-icon"><input type="text" class="form-control" value="" name="departure_date" id="fdeparture_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                                </div>
                                                <div class="six columns">
                                                    <label class="form-label">Arrival Date:</label><div class="calendar-icon"><input type="text" class="form-control" value="" name="arrival_date" id="farrival_date"><img class="icon" src="http://fernleaf.coderadobe.com/wp-content/uploads/calendar_icon.png" alt=""></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="five columns">
                                                    <div class="row">
                                                        <div class="six columns">
                                                            <label class="form-label">Rooms</label><select class="form-control">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                        <div class="six columns">
                                                            <label class="form-label">Adult</label><select class="form-control">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="seven columns">
                                                    <div class="row">
                                                        <div class="eight columns">
                                                            <label class="form-label">Child (2-11 Years)</label><select class="form-control">
                                                                <option value="0">0 With Bed</option>
                                                                <option value="1">1 Without Bed</option>
                                                            </select><select class="form-control">
                                                                <option value="0">0 With Bed</option>
                                                                <option value="1">1 Without Bed</option>
                                                            </select>
                                                        </div>
                                                        <div class="four columns">
                                                            <label class="form-label">&nbsp;</label><label class="form-label">Age <input type="text" value="" name="age" class="form-control"></label><label class="form-label">Age <input type="text" value="" name="age" class="form-control"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="twelve columns"><a href="#" class="gdl-button yellow-button large various">Show Availability!</a></div>
                                            </div>
                                        </div>
                                        <div class="hotel_tours_div" style="display: none;">
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <div class="row">
                                                        <div class="seven columns">
                                                            <label class="form-label">Select Your Package</label><select class="form-control">
                                                                <option value="Package 1">Package 1</option>
                                                                <option value="Package 2">Package 2</option>
                                                                <option value="Package 3">Package 3</option>
                                                                <option value="Package 4">Package 4</option>
                                                                <option value="Package 5">Package 5</option>
                                                            </select>
                                                        </div>
                                                        <div class="five columns">
                                                            <label class="form-label">Persons</label><input type="text" class="form-control" value="" name="person">
                                                        </div>
                                                        <div class="twelve columns"><a href="#" class="gdl-button yellow-button large various">Show Availability!</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                <?php echo do_shortcode('[sp_testimonials_slider design="design-1"]'); ?>
                    <?php
                        echo do_shortcode('[masterslider id="1"]');
                    ?>
                </div>
                <div class="clear"></div>
                <div class="four columns">
                    <div class="latest-search-box">
                        <h4>Latest Searched <span>Hotels</span></h4>
                        <?php foreach ($search_hotel_names as $search_hotel_name) : ?>
                        <div class="search-data-value">
                            <div class="hotel-name">
                                <?php 
                                    $name = $search_hotel_name->hotel_name . ' - Hotel';
                                echo "<a href='/fernleaf/?page_id=1108&cityname=$name&CheckIndate=$search_hotel_name->CheckIndate&CheckoutDate=$search_hotel_name->CheckoutDate&NoAdult=$search_hotel_name->NoAdult'>"  ?>
                                <?php echo $search_hotel_name->hotel_name ?></a>
                                
                            </div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;SGD <?php echo $search_hotel_name->price ?></div>
                        </div>
                        <div class="clear"></div>
                       <?php endforeach; ?>
                    </div>
                </div>
                <div class="four columns">
                    <div class="latest-search-box">
                        <h4>Latest Searched <span>Flights</span></h4>
                        <div class="search-data-value">
                            <div class="hotel-name">Bangkok To Singapore</div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;fr. $120</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">Singapore To Tokyo</div>
                            <div class="hotel-cost">fr. $450</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">Singapore To Malaysia</div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;fr. $120</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">India To Singapore</div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;fr. $230</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">Singapore To Thailand</div>
                            <div class="hotel-cost"><span></span>&nbsp;&nbsp;&nbsp;fr. $120</div>
                        </div>
                        <div class="clear"></div>
                        <div class="search-data-value">
                            <div class="hotel-name">Australia to Singapore</div>
                            <div class="hotel-cost">fr. $340</div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="latest-search-box">
                        <img src="http://fernleaf.coderadobe.com/wp-content/uploads/offer-banner.jpg" alt="">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="twelve columns">
                    <div class="packages-box">
                        <div class="row titlerow">
                            <div class="four columns">
                                <h5>Popular Tour Packages</h5>
                            </div>
                            <div class="four columns">
                                <h5>Free & Easy Packages</h5>
                            </div>
                            <div class="four columns">
                                <h5>Weekend Getaways</h5>
                            </div>
                        </div>
                        <div class="box-gapping">
                            <div class="row">
                                <div class="four columns">
                                    <div class="package-details">
                                        
                                            <?php
                                            if( $my_query->have_posts() ) {
                                            while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                            <div class="packagebox">
                                            <div class="package-img">
                                                <?php
                                                if ( has_post_thumbnail() )
                                                {
                                                   the_post_thumbnail();
                                                } 
                                                ?>
                                            </div>
                                            <div class="package-content">
                                                <h6><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
                                                <div class="package-content-box">
                                                    Hotel Name&nbsp;&nbsp;&nbsp;
                                                    <img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt="">&nbsp;&nbsp;fr. $120<br>
                                                    Hotel Name fr. $220<br>
                                                    3 Star Hotel fr. $140<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <?php endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                        ?>
                                    </div>
                                    <div class="viewmore"><a href="#">View More</a></div>
                                </div>
                                <div class="four columns">
                                    <div class="package-details">

                                        <?php
                                            if( $my_query1->have_posts() ) {
                                            while ($my_query1->have_posts()) : $my_query1->the_post(); ?>
                                            <div class="packagebox">
                                            <div class="package-img">
                                                <?php
                                                if ( has_post_thumbnail() )
                                                {
                                                   the_post_thumbnail();
                                                } 
                                                ?>
                                            </div>
                                            <div class="package-content">
                                                <h6><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
                                                <div class="package-content-box">
                                                    Hotel Name&nbsp;&nbsp;&nbsp;
                                                    <img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt="">&nbsp;&nbsp;fr. $120<br>
                                                    Hotel Name fr. $220<br>
                                                    3 Star Hotel fr. $140<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <?php endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                        ?>
                                    </div>
                                    <div class="viewmore"><a href="#">View More</a></div>
                                </div>
                                <div class="four columns">
                                    <div class="package-details">

                                       <?php
                                            if( $my_query2->have_posts() ) {
                                            while ($my_query2->have_posts()) : $my_query2->the_post(); ?>
                                            <div class="packagebox">
                                            <div class="package-img">
                                                <?php
                                                if ( has_post_thumbnail() )
                                                {
                                                   the_post_thumbnail();
                                                } 
                                                ?>
                                            </div>
                                            <div class="package-content">
                                                <h6><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h6>
                                                <div class="package-content-box">
                                                    Hotel Name&nbsp;&nbsp;&nbsp;
                                                    <img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/yellow.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt=""><img src="http://fernleaf.coderadobe.com/wp-content/uploads/grey.png" alt="">&nbsp;&nbsp;fr. $120<br>
                                                    Hotel Name fr. $220<br>
                                                    3 Star Hotel fr. $140<br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <?php endwhile;
                                          }
                                          wp_reset_query();  // Restore global post data stomped by the_post().
                                        ?>
                                    </div>
                                    <div class="viewmore"><a href="#">View More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="four column">
                    <div class="offer-packages">
                        <h5>Coming To Singapore</h5>
                        <div class="offer-packages-img">
                            <a href="#"><img src="http://fernleaf.coderadobe.com/wp-content/uploads/hotels.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="four column">
                    <div class="offer-packages">
                        <h5>Buses</h5>
                        <div class="offer-packages-img">
                            <a href="#"><img src="http://fernleaf.coderadobe.com/wp-content/uploads/buses.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="four column">
                    <div class="offer-packages">
                        <h5>Cruises</h5>
                        <div class="offer-packages-img">
                            <a href="#"><img src="http://fernleaf.coderadobe.com/wp-content/uploads/cruises.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="http://fernleaf.coderadobe.com/wp-content/themes/fernleaf/stylesheet/easy-responsive-tabs.css">
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="http://fernleaf.coderadobe.com/wp-content/themes/fernleaf/javascript/easy-responsive-tabs.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script type="text/javascript">
    jQuery(function () {
        jQuery("#departure_date").datepicker();
        jQuery("#arrival_date").datepicker();
        jQuery("#checkin_date").datepicker();
        jQuery("#checkout_date").datepicker();
        jQuery("#hotel_checkin_date").datepicker();
        jQuery("#hotel_checkout_date").datepicker();
    });
    jQuery(document).ready(function () {
        jQuery("#verticalTab").easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any custom width
            fit: true   // 100% fits in a container
        });
        jQuery("#oneway").click(function (event) {
            jQuery("#arrival_date_div").hide();
            jQuery("#addmore").hide();
        });
        jQuery("#return").click(function (event) {
            jQuery("#arrival_date_div").show();
            jQuery("#addmore").hide();
        });
        jQuery("#multistop").click(function (event) {
            jQuery("#arrival_date_div").show();
            jQuery("#addmore").show();
        });
        jQuery("#hotel_tours").click(function (event) {
            jQuery(".hotel_tours_div").show();
            jQuery(".flights_hotel_tours").hide()
        });
        jQuery("#flights_hotel").click(function (event) {
            jQuery(".hotel_tours_div").hide();
            jQuery(".flights_hotel_tours").show()
        });
        jQuery("#flights_hotel_tours").click(function (event) {
            jQuery(".hotel_tours_div").hide();
            jQuery(".flights_hotel_tours").show()
        });
    });
</script>

<script>


(function( $ ) {
    // When user selects checkin date grab Country code and city code
      var cityname = [
      "Al Ain", "Abu Dhabi", "Dubai", "Fujairah", "Ras Al Khaimah", "Sharjah", "Ajman", "Umm Al Quwain", "Faizabad", "Herat", "Kabul", "Kandahar", "Mazar-i-Sharif", "Antigua", "Anguilla", "Tirana", "Yerevan", "Gyoumri", "Bonaire", "Curacao", "St Eustatius", "Saba", "St Maarten", "Luanda", "Lubango", "San Rafael", "Bahia Blanca", "Bariloche", "Buenos Aires", "Cordoba", "San Martin de Los Andes", "Comodoro Rivadavia", "Catamarca", "Esquel", "Formosa", "El Calafate", "Gobernador Gregores", "Iguazu", "Lago Argentino", "La Rioja", "Jujuy", "San Luis", "Mar del Plata", "Mendoza", "Miramar", "Necochea", "Neuquen", "San Antonio Oeste", "Puerto Madryn", "Parana", "Posadas", "Puerto Deseado", "Trelew", "Resistencia", "Rio Grande", "Rio Gallegos", "Rosario (AR)", "Santa Rosa (AR)", "Santa Cruz (AR)", "Santiago del Estero", "Santa Fe (AR)", "Salta", "Santa Teresita", "Tucuman", "San Juan (AR)", "San Julian", "Ushuaia", "Viedma", "Pago Pago", "Graz", "Hohenems", "Innsbruck", "Klagenfurt", "Linz", "Salzburg", "Vienna", "Bamaga", "Albury", "Adelaide", "Albany", "Armidale", "Alice Springs", "Aurukun Mission", "Ayers Rock", "Bundaberg", "Badu Island", "Bedourie", "Blackall", "Blackwater", "Broome", "Brisbane", "Ballina", "Boulia", "Burketown", "Birdsville", "Burnie", "Canberra", "Ceduna", "Coffs Harbour", "Cunnamulla", "Coconut Island", "Cloncurry", "Cairns", "Coober Pedy", "Charleville", "Cooktown", "Coen", "Carnarvon", "Dubbo", "Doomadgee Mission", "Devonport", "Darwin", "Edward River", "Elcho Island", "Emerald", "Esperance", "Geraldton", "Griffith", "Grafton", "Boigu Island", "Gladstone", "Gove", "Groote Eylandt", "Argyle", "Hobart", "Hughenden", "Horn Island", "Hayman Island", "Hooker Creek", "Hamilton Island", "Hervey Bay", "Lockhart River", "Mount Isa", "Inverell", "Julia Creek", "Kalgoorlie", "Kununurra", "Karratha", "Katherine", "Kubin Island", "Kowanyama", "Learmonth", "Lake Evella", "Leinster", "Leonora", "Longreach", "Launceston", "Lismore", "Laverton", "Mcarthur River", "Sunshine Coast", "Melbourne", "Mount Gambier", "Milingimbi", "Mount Hotham", "Merimbula", "Monkey Mia", "Meekatharra", "Mackay", "Mount Magnet", "Maningrida", "Moranbah", "Mildura", "Moree", "Moruya", "Murray Island", "Narrabri", "Narrandera", "Normanton", "Orange", "Yorke Island", "Oakey", "Olympic Dam", "Mornington Island", "Gold Coast", "Cooma", "Paraburdoo", "Perth", "Port Hedland", "Parkes", "Port Lincoln", "Proserpine", "Port Augusta", "Ramingining", "Richmond (AU)", "Roma", "Rockhampton", "Ravensthorpe", "Saibai Island", "St George (AU)", "Sydney", "Tennant Creek", "Thursday Island", "Tamworth", "Taree", "Townsville", "Toowoomba", "Mabuiag Island", "Quilpie", "Victoria River Downs", "Weipa", "Wagga Wagga", "Winton", "Windorah", "Wollongong", "Airlie Beach", "Wiluna", "West Wyalong", "Whyalla", "Yam Island", "Thargomindah", "Rail (generic) Rail Station", "Biloela", "Newman", "Aruba", "Baku", "Gyandzha", "Nakhichevan", "Sarajevo", "Barbados", "Barisal", "Chittagong", "Cox's Bazar", "Dhaka", "Jessore", "Rajshahi", "Saidpur", "Sylhet", "Brussels", "Liege", "Ostend", "Namur", "Brugge", "Antwerp Berchem Rail Station", "Bobo Dioulasso", "Ouagadougou", "Bourgas", "Sofia", "Varna", "Manama", "Bujumbura", "Cotonou", "Bermuda", "Bandar Seri Begawan", "Airport / Stadium", "Brunei", "Cochabamba", "Cobija", "Guayaramerin", "La Paz (BO)", "Puerto Suarez", "Rurrenabaque", "Riberalta", "Sucre", "San Borja", "Santa Cruz (BO)", "Trinidad", "Tarija", "Araxa", "Alta Floresta", "Aracaju", "Araraquara", "Aracatuba", "Altamira", "Araguaina", "Bauru", "Belo Horizonte", "Porto Seguro", "Barreiras", "Brasilia", "Boa Vista (BR)", "Cascavel", "Campos", "Cuiaba", "Campo Grande", "Carajas", "Corumba", "Campinas", "Campina Grande", "Curitiba", "Caxias do Sul", "Dourados", "Fernando de Noronha", "Florianopolis", "Fortaleza", "Franca", "Santo Angelo", "Governador Valadares", "Goiania", "Iguassu Falls", "Imperatriz", "Ilheus", "Ipatinga", "Itaituba", "Juiz de Fora", "Juazeiro do Norte", "Joinville", "Joao Pessoa", "Ji-Parana", "Londrina", "Maraba", "Manaus", "Macapa", "Maceio", "Macae", "Maringa", "Marilia", "Montes Claros", "Mucuri", "Natal", "Navegantes", "Sinop", "Passo Fundo", "Parintins", "Palmas", "Petrolina", "Porto Alegre", "Patos de Minas", "President Prudente", "Porto Velho", "Ribeirao Preto", "Recife", "Rio De Janeiro", "Rondonopolis", "Sao Paulo", "Salvador", "Santarem", "Teresina", "Trombetas", "Tucurui", "Uberaba", "Uberlandia", "Una", "Vitoria Da Conquista", "Vitoria (BR)", "Chapeco", "Andros Town", "Arthur's Town", "Spring Point", "Bimini", "Chub Cay", "Crooked Island", "North Eleuthera", "Freeport", "George Town", "Governors Harbour", "Inagua", "Deadmans Cay", "Marsh Harbour", "Mayaguana", "Nassau", "Rock Sound", "San Andros", "The Bight", "Treasure Cay", "South Andros", "San Salvador (BS)", "Paro", "Kasane", "Francistown", "Gaborone", "Maun", "Gomel", "Minsk", "Belize City", "Caye Caulker", "Corozal (BZ)", "Dangriga", "Placencia", "Punta Gorda", "San Pedro", "Akulivik", "Duncan", "Ilford", "Kingfisher Lake", "Aklavik", "Muskrat Dam", "Pikwitonei", "Bella Coola", "Wunnummin Lake", "Capreol Rail Station", "Campbellton Rail Station", "Bearskin Lake", "Brockville", "Chambord Rail Station", "Chatham", "Drummondville Rail Station", "Hervey Rail Station", "Lac Edouard Rail Station", "Ladysmith Rail Station", "Melville Rail Station", "New Carlisle Rail Station", "Stratford Rail Station", "Parent Rail Station", "Perce Rail Station", "Senneterre Rail Station", "Shawinigan Rail Station", "Shawnigan Rail Station", "Weymont Rail Station", "Alexandria Rail Station", "Brantford Rail Station", "Cobourg Rail Station", "Coteau Rail Station", "Kangiqsualujjuaq", "Grimsby Rail Station", "Georgetown Rail Station", "Chemainus Rail Station", "Guelph Rail Station", "Ingersoll Rail Station", "Maxville Rail Station", "Napanee Rail Station", "St Hyacinthe Rail Station", "St Marys Rail Station", "Woodstock Rail Station", "Joliette Rail Station", "Jonquiere Rail Station", "Kasabonika", "Sackville Rail Station", "Lac Brochet", "St Lambert Rail Station", "Guildwood Rail Station", "Aldershot Rail Station", "Truro Rail Station", "Oakville Rail Station", "Parksville Rail Station", "Brampton Rail Station", "Pointe-aux-Trembles Rail Station", "Qualicum", "Riviere-a-Pierre Rail Station", "South Indian Lake", "Tadoule Lake", "Strathroy Rail Station", "Belleville Rail Station", "Wyoming Rail Station", "Casselman Rail Station", "Glencoe Rail Station", "Pass (generic) Rail Station", "Rail (generic) Rail Station (CA)", "Anahim Lake", "Fort Frances", "Sault Ste Marie (CA)", "Attawapiskat", "St Anthony", "Tofino", "Pelly Bay", "Baie Comeau", "Bagotville", "Black Tickle", "Baker Lake", "Campbell River", "Brandon", "Brochet", "Berens River", "Blanc Sablon", "Courtenay", "Cambridge Bay", "Cornwall", "Nanaimo", "Castlegar", "Colville Lake", "St Catharines", "Kugluktuk Coppermine", "Cross Lake", "Chesterfield Inlet", "Clyde River", "Dawson City", "Deer Lake", "Dauphin", "Nain", "Dawson Creek", "Edmonton", "Arviat", "Inuvik", "Fort Albany", "Iqaluit", "Fredericton", "Fort Hope", "Snare Lake", "Flin Flon", "Fort Simpson", "Fox Harbour", "Gillies Bay", "Fort Good Hope", "Kingston (CA)", "La Grande", "Gods Narrows", "Gaspe", "Iles de la Madeleine", "Igloolik", "Havre St Pierre", "Kuujjuarapik", "Gillam", "Grise Fiord", "Port Hope Simpson", "Hudson Bay", "Dryden", "Charlottetown (CA) NL", "Ulukhaktok", "Gjoa Haven", "Hopedale", "Chevery", "Sechelt", "Hay River", "Halifax", "Pakuashipi", "Ivujivik", "Pond Inlet", "Island Lake/Garden Hill", "Jasper", "Stephenville", "Kamloops", "Kitchener/Waterloo", "Kangirsuk", "Schefferville", "Waskaganish", "Chisasibi", "Kimmirut/Lake Harbour", "Wha Ti Lac la Martre", "Lansdowne House", "Meadow Lake", "Lloydminster", "La Tuque", "Kelowna", "Langley", "Mary's Harbour", "Fort Mcmurray", "Makkovik", "Moosonee", "Montreal", "Chibougamau", "Natashquan", "Wemindji", "Norway House", "Natuashish", "Nemiscau", "Old Crow", "Ogoki", "Oxford House", "High Level", "Oshawa", "Rainbow Lake", "Ottawa", "Port Alberni", "Paulatuk", "Inukjuak", "Aupaluk", "Pikangikum", "Peawanuck", "Prince Rupert", "Powell River", "Puvirnituq", "Burns Lake", "Quebec", "Quaqtaq", "The Pas", "Red Deer", "Windsor", "Kenora", "Lethbridge", "Nakina", "Comox", "Regina", "Thunder Bay", "Grande Prairie", "Gander", "Sydney", "Rae Lakes", "Resolute", "Cartwright", "Rigolet", "Roberval", "Red Lake", "Red Sucker Lake", "Rankin Inlet", "Sudbury", "Lutselke Snowdrift", "Smith Falls", "St John", "Sanikiluaq", "Fort Smith (CA)", "Postville", "Nanisivik", "Ste Therese Point", "Sachs Harbour", "Thicket Portage", "Cape Dorset", "Alma", "Thompson", "Big Trout Lake", "Toronto", "Tasiujuaq", "Timmins", "Tuktoyaktuk", "Umiujaq", "Repulse Bay", "Rouyn", "Bonaventure", "Qikiqtarjuaq", "Val D'Or", "Kuujjuaq", "Norman Wells", "Vancouver", "Kangiqsujuaq", "Deline", "Wabush", "Williams Lake", "Williams Harbour", "Webequie", "Whistler", "Cranbrook", "Saskatoon", "Medicine Hat", "Fort St John", "Sioux Lookout", "Whale Cove", "Pangnirtung", "Prince George", "Terrace", "London (CA)", "Abbotsford", "North Bay", "Calgary", "Smithers", "Fort Nelson", "Penticton", "Charlottetown (CA) PE", "Taloyoak", "Victoria", "Lynn Lake", "Churchill", "Goose Bay", "St Johns", "Kapuskasing", "Niagara Falls", "Yellowknife", "Salluit", "Sandspit", "Sarnia", "Coral Harbour", "Port Hardy", "Sept-Iles", "Trail", "York Landing", "Bathurst", "Bella Bella", "East Main", "Fort Mcpherson", "Tulita Fort Norman", "Gods River", "Gethsemani", "Houston Bus Station", "Kaschechewan", "Kegaska", "La Tabatiere", "Masset", "Round Lake", "Tete-a-La Baleine", "Shamattawa", "Churchill Falls", "Cocos Islands", "Bangui", "Altenrhein", "Berne", "Basel", "Montreux", "Geneva", "Lugano", "Lucerne", "Lausanne", "Zurich", "Abidjan", "Man", "Aitutaki", "Atiu Island", "Mangaia Island", "Manihiki Island", "Mitiaro Island", "Mauke Island", "Penrhyn Island", "Rarotonga", "Antofagasta", "Arica", "Balmaceda", "Concepcion", "Calama", "Copiapo", "El Salvador", "Easter Island", "Iquique", "La Serena", "Puerto Montt", "Punta Arenas", "Santiago (CL)", "Valdivia", "Temuco", "Osorno", "Douala", "Garoua", "Maroua", "Ngaoundere", "Yaounde", "Altay", "Xingyi", "Ankang", "Aksu", "An Shun", "Baotou", "Beihai", "Beijing", "Bangda", "Shangri-La", "Guangzhou", "Zhengzhou", "Changchun", "Boao", "Chaozhou", "Huangshan", "Huhhot", "JiangMen", "JiaShan", "Jiuzhaigou", "Kunshan", "Chifeng", "Chongqing", "Changsha", "Chengdu", "Changzhou", "Datong", "Daxian", "Dandong", "Dongguan", "Diqing", "Dalian", "Dali", "Dunhuang", "Dongying", "Dayong", "Enshi", "Fuzhou", "Foshan", "Golmud", "Haikou", "Heihe", "Hohhot", "Hefei", "Hangzhou", "Hailar", "Ulanhot", "Harbin", "Hotan", "Huizhou", "Hanzhong", "Liping City", "Yinchuan", "Qiemo", "Ji An", "Juzhou", "Song Pan", "Kuqa", "Kashi", "Nanchang", "Kunming", "Ganzhou", "Korla", "Karamay", "Guiyang", "Guilin", "Longyan", "Lanzhou", "Lijiang", "Lincang", "Luxi", "Lhasa", "Luoyang", "Lianyungang", "Linyi", "Liuzhou", "Luzhou", "Lin Zhi", "Mudanjiang", "Mian Yang", "Meixian", "Qiqihar", "Ningbo", "Nanjing", "Xinyuan City", "Nanning", "Nanyang", "Nantong", "Manzhouli", "Pan Zhi Hua", "Shanghai", "Shenyang", "Xian", "Shijiazhuang", "Shantou", "Simao", "Sanya", "Suzhou", "Shenzhen", "Qingdao", "Tacheng", "Tongren", "Tongliao", "JiNan", "Tianjin", "Tunxi", "Taiyuan", "Urumqi", "Yulin", "Weifang", "Weihai", "Wenshan", "Wenzhou", "Wuhan", "Wuyishan", "Wuxi", "Wanxian", "Xichang", "Xilinhot", "Xiamen", "Xining", "Xuzhou", "Yibin", "Yun Cheng", "Yichang", "Yining", "Yiwu", "Yancheng", "Zhaotong", "Zhongshan", "Zhanjiang", "Humen", "Zhuhai", "Araracuara", "San Andres Island", "Apartado", "Arauca", "Armenia", "Barranquilla", "Bucaramanga", "Bogota", "Bahia Solano", "Buenaventura", "Cali", "Cartagena", "Cucuta", "Corozal (CO)", "Barrancabermeja", "El Yopal", "Florencia", "Guapi", "Ibague", "Ipiales", "La Chorrera", "Leticia", "Lamacarena", "La Pedrera", "Puerto Leguizamo", "Medellin", "Monteria", "Mitu", "Manizales", "Nuqui", "Neiva", "Puerto Carreno", "Puerto Inirida", "Pereira", "Popayan", "Pasto", "Puerto Asis", "Providencia", "Riohacha", "Saravena", "San Jose del Guaviare", "Santa Marta", "San Vicente del Caguan", "Tarapaca", "Tumaco", "Tame", "Quibdo", "Mocoa", "Valledupar", "Villavicencio", "Barra Colorado", "Golfito", "Liberia", "Guanacaste", "Nosara Beach", "Coto 47", "Puerto Jimenez", "Playa Samara", "Palmar", "Alajuela", "Jaco", "Puntarenas", "San Jose", "Tambor", "Tamarindo", "Tortuquero", "Quepos", "Cayo Las Brujas", "Cayo Coco", "Cienfuegos", "Camaguey", "Cayo Largo del Sur", "Guantanamo", "Nueva Gerona", "Havana (CU) 00", "Havana (CU) 00", "Holguin", "Santiago (CU)", "Santa Clara", "Varadero", "Boa Vista (CV)", "Maio", "Praia", "Sao Filipe", "Sal", "Sao Nicolau", "Sao Vicente", "Christmas Island (CX)", "Ercan", "Larnaca", "Paphos", "Brno", "Karlovy Vary", "Ostrava", "Pardubice", "Prague", "Olomouc Rail Station", "Pardubice Rail Station", "Ostrava Rail Station", "Altenburg", "Berlin", "Bielefeld", "Borkum", "Bremen", "Braunschweig", "Cologne", "Dresden", "Dortmund", "Duisburg Rail Station", "Dusseldorf", "Eisenach", "Emden", "Erfurt", "Essen", "Neumunster", "Cuxhaven", "Friedrichshafen", "Baden Baden", "Memmingen", "Frankfurt", "Westerland", "Hannover", "Hamburg", "Heidelberg", "Heringsdorf", "Heide-Buesum", "Helgoland", "Hof", "Ingolstadt-Manching", "Kassel", "Mannheim", "Munich", "Nuremberg", "Paderborn", "Bochum Rail Station", "Freiburg Rail Station", "Mainz Rail Station", "Ulm Rail Station", "Wuerzburg Rail Station", "German Rail Zone G", "Rostock-Laage", "Saarbrucken", "Stuttgart", "Wiesbaden Rail Station", "Wuppertal Rail Station", "Aix la Chapelle Rail Station", "Erfurt Rail Station", "Rail (generic) Rail Station (DE)", "Aschaffenburg Rail Station", "Fulda Rail Station", "Garmisch-Partenkirchen Rail Station", "Gelsenkirchen Rail Station", "Goettingen Rail Station", "Guetersloh Rail Station", "Hagen Rail Station", "Gotha Rail Station", "Solingen-Ohligs Rail Station", "Magdeburg Rail Station", "Ingolstadt Rail Station", "Koblenz Bus Station", "Limburg Rail Station", "Lueneburg Rail Station", "Oberhausen Rail Station", "Offenburg Rail Station", "Osnabrueck Rail Station", "Siegburg", "Trier Rail Station", "Wolfsburg Rail Station", "Stendal Rail Station", "Djibouti", "Aalborg", "Aarhus", "Billund", "Copenhagen", "Esbjerg", "Karup", "Odense", "Bornholm", "Sonderborg", "Dominica", "Samana", "La Romana", "Puerto Plata", "Punta Cana", "Santo Domingo", "Annaba", "Algiers", "Adrar", "Bejaia", "Batna", "Biskra", "Bechar", "Chlef", "Constantine", "Djanet", "El Golea", "El Oued", "Ghardaia", "Jijel", "Hassi Messaoud", "In Amenas", "In Salah", "Ouargla", "Oran", "Setif", "Tbessa", "Touggourt", "Tindouf", "Tlemcen", "Tamanrasset", "Illizi", "Cuenca", "Esmeraldas", "Galapagos Islands", "Guayaquil", "Lago Agrio", "Loja", "Latacunga", "Manta", "Coca", "San Cristobal", "Salinas", "Tulcan", "Quito", "Macas", "Kardla", "Tallinn", "Kuressaare", "Al Arish", "Abu Simbel", "Aswan", "Assiut", "Cairo", "Dabaa City", "Hurghada", "Luxor", "Marsa Alam", "Dahab", "Sharm El Sheikh", "Taba", "Assab", "Asmara", "Massawa", "Palma De Mallorca", "Albacete", "Lanzarote", "Malaga", "Alicante", "Barcelona", "Bilbao", "Badajoz", "Fuerteventura", "Costa Brava", "Gerona", "Granada", "Ibiza", "Ceuta", "La Coruna", "Almeria", "Leon", "Las Palmas", "Madrid", "Menorca", "Murcia", "Melilla", "Asturias", "Mallorca", "Pamplona", "Reus", "Logrono", "Santiago De Compostela", "Santiago De Compostela", "Santa Cruz de la Palma", "Seville", "Tenerife", "Valverde", "Vigo", "Vitoria (ES)", "Valencia", "Jerez de la Frontera", "Zaragoza", "Kabri Dar", "Addis Ababa", "Arba Mintch", "Asosa", "Axum", "Jinka", "Bahar Dar", "Dembidollo", "Dire Dawa", "Gode", "Gondar", "Gambela", "Gore", "Shillavo", "Jijiga", "Jimma", "Lalibela", "Makale", "Mizan Teferi", "Indaselassie", "Enontekio", "Helsinki", "Ivalo", "Joensuu", "Jyvaskyla", "Kajaani", "Kuusamo", "Kemi/Tornio", "Kokkola/Pietarsaari", "Kittila", "Kuopio", "Lapland", "Mariehamn", "Oulu", "Pori", "Rovaniemi", "Seinajoki", "Savonlinna", "Turku", "Tampere", "Vaasa", "Cicia", "Kandavu", "Koro Island", "Labasa", "Bureta", "Lakeba", "Moala", "Mana Island", "Nadi", "Ngau Island", "Malololailai", "Rotuma Island", "Suva", "Savusavu", "Taveuni", "Vanuabalavu", "Mount Pleasant", "Kosrae", "Pohnpei", "Truk", "Yap", "Faroe Islands", "Agen", "Ajaccio", "Angers", "Angouleme", "Aurillac", "Avignon", "Brest", "Bastia", "Biarritz", "Bordeaux", "Brive-La-Gaillarde", "Beziers", "Carcassonne", "Cannes", "Cherbourg", "Clermont-Ferrand", "Caen", "Calvi", "Chambery", "Castres", "Dinard", "Deauville", "St Etienne", "Bergerac", "Metz/Nancy", "Nimes", "Figari", "Ile D'yeu", "Lannion", "Lourdes/Tarbes", "Le Havre", "Limoges", "Lille", "Le Mans", "Le Puy", "La Rochelle", "Lorient", "Lyon", "Montpellier", "Marseille", "Nice", "Annecy", "Nantes", "Paris", "Perpignan", "Poitiers", "Pau", "Aix-en-Provence Rail Station", "Rodez", "Rennes", "St Nazaire", "Strasbourg", "Toulouse", "Quimper", "Rouen", "Disneyland Paris Rail Station", "Valence Rail Station", "Nimes Rail Station", "Libreville", "Aberdeen (GB)", "Alderney", "St Andrews", "Benbecula", "Belfast", "Birmingham", "Blackpool", "Bournemouth", "Bradford (GB)", "Barra", "Bristol", "Brighton", "Barrow-in-Furness", "Brize Norton", "Carlisle", "Cambridge", "Chester", "Coventry", "Cardiff", "Dundee", "Doncaster", "Edinburgh", "Eday", "Exeter", "Farnborough", "Fair Isle", "Fort William Heliport", "Filton", "Guernsey", "Grimsby", "Holyhead", "Harrogate", "Humberside", "Islay", "Inverness", "Isle of Man", "Ipswich", "Isles of Scilly", "Jersey", "Kings Lynn", "Kirkwall", "Milton Keynes", "Leeds Bradford", "Lands End", "London", "Liverpool", "Manchester", "Durham Tees Valley", "Sanday", "Nottingham", "North Ronaldsay", "Norwich", "Northampton", "Oxford", "Plymouth", "Portsmouth", "Papa Westray", "Penzance", "Ashford International Rail Station", "Dover Rail Station", "Harwich Rail Station", "Ramsgate Rail Station", "Bath Rail Station", "York Rail Station", "Shetland Islands", "Southend", "Southampton", "Stronsay", "Swansea", "Stornoway", "Sheffield", "Tiree", "Wick", "Westray", "Grantham Rail Station", "Northallerton Rail Station", "Nuneaton Rail Station", "Penrith Rail Station", "Preston Rail Station", "Berwick-upon-Tweed Rail Station", "Lancaster Rail Station (GB)", "Runcorn Rail Station", "Reading Rail Station", "Rugby Rail Station", "Salisbury Rail Station", "Thirsk Rail Station", "Stockport Rail Station", "Stafford Rail Station", "Crewe Rail Station", "Darlington Rail Station", "Peterborough Rail Station", "Stevenage Rail Station", "Durham Rail Station", "Wolverhampton Rail Station", "Wakefield Westgate Rail Station", "Stoke On Trent Rail Station", "Warrington B.q. Rail Station", "Swindon Rail Station", "Dundee Rail Station", "Chesterfield Bus Station", "Inverness Rail Station", "Aberdeen Rail Station", "Grenada", "Batumi", "Kutaisi", "Tbilisi", "Cayenne", "Accra", "Kumasi", "Sunyani", "Tamale", "Gibraltar", "Tasiilaq", "Neerlerit Inaat", "Nuuk", "Ilulissat", "Qasigiannguit", "Aasiaat", "Paamiut", "Qeqertarsuaq", "Groennedal", "Sisimiut", "Qaqortoq", "Nanortalik", "Narsaq", "Qaarsut", "Maniitsoq", "Upernavik", "Kulusuk Island", "Alluitsup Paa", "Qaanaaq", "Kangerlussuaq", "Narsarsuaq", "Uummannaq", "Banjul", "Conakry", "Marie Galante", "Terre-de-Haut", "Pointe-a-Pitre", "St Barthelemy", "St Martin", "Bata", "Malabo", "Karpathos", "Athens", "Alexandroupolis", "Kerkyra", "Chania", "Kefallinia", "Patras", "Crete", "Ioannina", "Ikaria Island", "Chios", "Kalymnos Island", "Mikonos", "Mykonos", "Naxos Is", "Sitia", "Skiathos", "Syros Island", "Thira", "Santorini Island", "Astypalaia Island", "Kos", "Kithira", "Kalamata", "Kasos Island", "Kastoria", "Kavala", "Kozani", "Kastelorizo", "Leros", "Limnos", "Mytilene", "Milos", "Paros", "Preveza/Lefkas", "Rhodes", "Thessaloniki", "Skiros", "Samos", "Volos", "Zakinthos", "Flores", "Guatemala City", "Barrigada", "Tumon Bay", "Tamuning", "Guam", "Bissau", "Georgetown (GY)", "Hong Kong", "Ahuas", "Brus Laguna", "Guanaja", "La Ceiba", "Puerto Lempira", "Roatan", "San Pedro Sula", "Tegucigalpa", "Utila", "Bol", "Dubrovnik", "Osijek", "Pula", "Rijeka", "Split", "Zadar", "Zagreb", "Cap Haitien", "Port au Prince", "Budapest", "Balaton", "Lombok", "Ambon", "Banjarmasin", "Bandung", "Berau", "Biak", "Bojonegoro", "Bengkulu", "Belitung", "Bima", "Bogor", "Balikpapan", "Bontang", "Batam", "Cirebon", "Tangerang", "Jambi", "Jayapura, Papua Indonesia", "Bali", "Datadawai", "Ende", "Fak Fak", "Gorontalo", "Pasuruan", "Anyer", "Puncak", "Bintan", "Manokwari, West Papua Indonesia", "Bangka", "Jember", "Jakarta", "Yogyakarta", "Kendari", "Klaten", "Kaimana", "Kupang", "Ketapang", "Labuan Bajo", "Long Bawan", "Long Apung", "Langgur", "Luwuk, Central Sulawesi", "Manado", "Medan", "Merauke", "Malang", "Maumere", "Naha", "Nunukan", "Padang", "Pangkalpinang", "Pangkalanbun", "Pekanbaru", "Palembang", "Palu, Central Sulawesi", "Pontianak", "Putussibau", "Purwokerto", "Solo", "Sorong", "Sintang", "Semarang", "Samarinda", "Surabaya", "Tembagapura", "Tanjung Pandan", "Lampung", "Tambolaka", "Tarakan East Kalimantan", "Ternate", "Ujung Pandang", "Makassar", "Waingapu", "Donegal", "Dublin", "Galway", "Kerry County", "Knock", "Cork", "Shannon", "Sligo", "Waterford", "Eilat", "Haifa", "Jerusalem", "Mitspeh Ramon", "Dead sea", "Neve Ilan", "tiberias", "Tel Aviv", "Ovda", "Agra", "Agatti Island", "Aizawl", "Ahmedabad", "Amritsar", "Amritsar", "Vadodara", "Bellary", "Bhopal", "Bhavnagar", "Bangalore", "Mumbai", "Kozhikode", "Kolkata", "Calcutta", "Coimbatore", "Kochi (IN)", "Dehra Dun", "New Delhi", "Dharamsala", "Dibrugarh", "Diu", "Dimapur", "Guwahati", "Gaya", "Goa", "Gorakhpur", "Gwalior", "Hubli", "Khajuraho", "Hyderabad", "Indore", "Imphal", "Gurgaon", "Nasik", "Agartala", "Bagdogra", "Chandigarh", "Belgaum", "Lilabari", "Jammu", "Leh", "madurai", "Pathankot", "Silchar", "Aurangabad", "Kandla", "Port Blair", "Jaipur", "Jodhpur", "Jamnagar", "Jabalpur", "Jamshedpur", "Jorhat", "Jaisalmer", "Kolhapur", "Kanpur", "Kulu", "Lucknow", "Chennai", "Nagpur", "Patna", "Porbandar", "Pune", "Rajkot", "Rajahmundry", "Raipur", "Shimla", "Surat", "Srinagar", "Tuticorin", "Tezpur", "Tirupati", "Thiruvananthapuram", "Tiruchirapally", "Udaipur", "Vijayawada", "Varanasi", "Baghdad", "Basra", "Erbil", "Kirkuk", "Mosul", "Abadan", "Sahand", "Zabol", "Ardabil", "Sabzevar", "Ahwaz", "Yazd", "Bojnord", "Bandar Abbas", "Bushehr", "Bam", "Shahre-Kord", "Gorgan", "Gheshm", "Isfahan", "Ilaam", "Zanjan", "Jiroft", "Kerman", "Khorramabad", "Khoy", "Kish Island", "Kermanshah", "Lamerd", "Lar", "Mashad", "Now Shahr", "Urmieh", "Parsabad", "Rasht", "Rafsanjan", "Ramsar", "Sanandaj", "Sary", "Shiraz", "Tabriz", "Tehran", "Birjand", "Asaloyeh", "Yasouj", "Zahedan", "Chah-Bahar", "Akureyri", "Egilsstadir", "Grimsey", "Isafjordur", "Reykjavik", "Thorshofn", "Vestmannaeyjar", "Vopnafjordur", "Alghero", "Albenga", "Ancona", "Aosta", "Brindisi", "Bologna", "Bari", "Cagliari", "Crotone", "Catania", "Cuneo", "Elba Island", "Florence", "Foggia", "Forli", "Lampedusa", "Milan", "Naples", "Olbia", "Perugia", "Palermo", "Pantelleria", "Pisa", "Pescara", "Reggio Calabria", "Rimini", "Rome", "Lamezia Terme", "Trapani", "San Domino Island (tremiti Islands)", "Turin", "Trieste", "Venice", "Verona", "Kingston (JM)", "Montego Bay", "Amman", "Aqaba", "Petra", "Asahikawa", "Aomori", "Amami O Shima", "Akita", "Fukushima", "Shizuoka", "Fukuoka", "Yamagata", "Hachijo Jima", "Hiroshima", "Hakodate", "Iwate", "Hanamaki", "Kanagawa", "Saga", "Ishigaki", "Mie", "Shimane", "Iwami", "Izumo", "Hakone", "Hyogo", "Chiba", "Kochi", "Niigata", "Kita Kyushu", "Miyazaki", "Kumamoto", "Ishikawa", "Komatsu", "Kagoshima", "Kushiro", "Monbetsu", "Memambetsu", "Matsumoto", "Yamanashi", "Miyako Jima", "Misawa", "Miyake Jima", "Matsuyama", "Ehime", "Nagoya", "Nagasaki", "Narita Airport", "Wajima", "Obihiro", "Yonaguni Jima", "Oshima", "Oita", "Okinawa", "Okayama", "Odate Noshiro", "Osaka", "Gifu", "Nagano", "Rishiri", "Sendai", "Nakashibetsu", "Nanki Shirahama", "Sapporo", "Shonai", "Kagawa", "Toyama", "Tsushima", "Tottori", "Tokyo Disney Resort", "Tokyo", "Yamaguchi", "Ube", "Kobe", "Kyoto", "Hokkaido", "Rail (generic) Rail Station (JP)", "Yonago", "Yokohama", "Amboseli", "Eldoret", "Kisumu", "Lamu", "Mara Lodges", "Malindi", "Nairobi", "Nanyuki", "Samburu", "Bishkek", "Osh", "Battambang", "Kep", "Sihanouk Ville", "Koh Kong", "Kampot", "Phnom Penh", "Ratanankiri", "Siem Reap", "Svay Rieng", "Stung Treng", "Christmas Island (KI)", "Tarawa", "Anjouan", "Moheli", "Moroni", "Cheongju", "Jeju-Do", "Jinju", "Incheon", "Pohang", "Daejeon", "Gunsan", "Gwangju", "Mokpo", "Busan", "Yeosu", "Seoul", "Daegu", "Gyeongju", "Ulsan", "Won-ju", "Yangyang", "Cayman Brac", "Grand Cayman Island", "Little Cayman", "Aktyubinsk", "Almaty", "Shimkent", "Zhambyl", "Zhezkazgan", "Atyrau", "Karaganda", "Kokshetau", "Kostanay", "Kzyl-Orda", "Semipalatinsk", "Petropavlovsk", "Pavlodar", "Aktau", "Astana", "Ust-Kamenogorsk", "Uralsk", "Houeisay", "Vang Vieng", "Ban Keun", "Luang Prabang", "Oudomxay", "Pakse", "Vientiane", "Xiengkhouang", "Beirut", "St Lucia", "Anuradhapura", "Bentota", "Colombo", "Dickwella", "Sigiriya", "Galle", "Koggala", "Koggala", "Kandy", "Minneriya", "Nuwara Eliya", "Polonnaruwa", "Habarana", "Dambulla", "Beruwela", "Negombo", "Weerawila", "Monrovia", "Maseru", "Kaunas", "Klaipeda/Palanga", "Vilnius", "Luxembourg", "Riga", "Kufrah", "Benghazi", "Ghat", "Beida", "Ghadames", "Misurata", "Ubari", "Sebha", "Sert", "Tripoli", "Tobruk", "Agadir", "Al Hoceima", "Casablanca", "Errachidia", "Essaouira", "Laayoune", "Fez", "Goulimime", "Nador", "Oujda", "Ouarzazate", "Marrakech", "Rabat", "Tangier", "Tan Tan", "Dakhla", "Monte Carlo", "Chisinau", "Maldives", "Male Atoll", "Ambatomainty", "Antalaha", "Besalampy", "Antsiranana", "Soalala", "Fort Dauphin", "Ankavandra", "Manja", "Majunga", "Mananjary", "Morondava", "Morombe", "Maintirano", "Nossi-Be", "Farafangana", "Ste Marie", "Sambava", "Tulear", "Tamatave", "Antananarivo", "Morafenobe", "Antsohihy", "Antsalova", "Fianarantsoa", "Mandritsara", "Maroantsetra", "Tambohorano", "Tsiroanomandidy", "Manakara", "Airok", "Ailuk Island", "Aur Island", "Bikini Atoll", "Kwajalein Atoll", "Ebon", "Mili Atoll", "Enewetak Island", "Jabot", "Jeh", "Kaben", "Kili Island", "Kwajalein", "Likiep Island", "Lae Island", "Majuro", "Maloelap Island", "Mili Island", "Mejit Island", "Majkin", "Namdrik Island", "Rongelap Island", "Jaluit Island", "Ujae Island", "Utirik Island", "Woja", "Wotje Island", "Wotho Island", "Ohrid", "Skopje", "Bamako", "Kayes", "Mopti", "Tombouctou", "Sittwe", "Bhamo", "Bagan", "Bassein", "Heho", "Kengtung", "Khamti", "Kalemyo", "Kyaukpyu", "Loikaw", "Lashio", "Aungban", "Kalaw", "Chaungtha Beach", "Kyaikhtiyo", "Pindaya", "Mandalay", "Myeik", "Nay Pyi Taw", "Ngapali", "Ngwe Saung", "Nyaung Shwe", "Pyin Oo Lwin", "Toungoo", "Inle Lake", "Kawthoung / Victoria Point", "Pyu", "Mawlamyine", "Mong Hsat", "Magwe", "Myitkyina", "Putao", "Pakokku", "Yangon", "Thandwe", "Tachilek", "Dawe", "Bayankhongor", "Ulaanbaatar", "Macau", "Rota", "Saipan", "Tinian", "Fort de France", "Nouadhibou", "Nouakchott", "Montserrat", "Malta", "Mauritius", "Rodrigues Island", "Maldives Resorts", "Alif Dhaalu (South Ari) Atoll", "Baa Atoll", "Dhaalu Atoll", "Faafu Atoll", "Gaaf Alif Atoll", "Gan Island", "Gaaf Dhaalu Atoll", "Gnaviyani", "Haa Alif Atoll", "Hanimaadhoo", "Haa Dhaalu Atoll", "Kaadedhdhoo", "Kadhdhoo", "Lhaviyani Atoll", "Laamu Atoll", "Meemu Atoll", "Male", "Noonu Atoll", "Raa Atoll", "Shaviyani Atoll", "Seenu", "Thaa Atoll", "Vaavu Atoll", "Blantyre", "Club Makokola", "Lilongwe", "Mzuzu", "Acapulco", "Aguascalientes", "Leon/Guanajuato", "Guanajuato", "Ciudad Obregon", "Ciudad Juarez", "Colima", "Ciudad del Carmen", "Campeche", "Chetumal", "Culiacan", "Riviera Maya", "Playa del Carmen", "Cancun", "Chihuahua", "Ciudad Victoria", "Celaya", "Cozumel", "Durango (MX)", "Guadalajara", "Hermosillo", "Huatulco", "Jalapa", "La Paz (MX)", "Loreto", "Lazaro Cardenas", "Matamoros", "Mexico City", "Merida", "Morelia", "Minatitlan", "Monterrey", "Mazatlan", "Nuevo Laredo", "Nogales", "Oaxaca", "Poza Rica", "Puebla", "Piedras Negras", "Puerto Vallarta", "Queretaro", "Reynosa", "Salina Cruz", "San Jose Cabo", "Los Cabos", "San Luis Potosi", "Saltillo", "Tampico", "Tapachula", "Tuxtla Gutierrez", "Tijuana", "Tepic", "Torreon", "Uruapan", "Veracruz", "Villahermosa", "Zacatecas", "Ixtapa", "Manzanillo", "Alor setar", "Bario", "Kota Kinabalu", "Bakalalan", "Belaga", "Bintulu", "Genting", "Genting Highlands", "Ipoh", "Johor Bahru", "Kota Bharu", "Kuching", "Kuantan", "Kudat", "Kuala Lumpur", "Long Banga", "Labuan", "Lahad Datu", "Langkawi", "Long Lellang", "Long Akah", "Limbang", "Lawas", "Cameron Highlands", "Johor", "Malacca", "Port Dickson", "Sepang", "Desaru", "Kedah", "Kelantan", "Pahang", "Mukah", "Marudi", "Bukit Tinggi", "Cameron Highlands", "Malacca", "Perhentian Island", "Port Dickson", "Sabah", "Seremban", "Selangor", "Miri", "Mulu", "Long Seridan", "Penang", "Pangkor Island", "Redang Island", "Sibu", "Sandakan", "Kuala Terengganu", "Tioman Island", "Tawau", "Nampula", "Benguera Island", "Beira", "Bazaruto Island", "Indigo Bay Lodge", "Inhambane", "Maputo", "Pemba (MZ)", "Tete", "Quelimane", "Vilanculos", "Chimoio", "Lichinga", "Luderitz", "Mpacha", "Oranjemund", "Ondangwa", "Windhoek", "Walvis Bay", "Belep Island", "Ile des Pins", "Kone", "Koumac", "Lifou", "Mare", "Noumea", "Tiga", "Touho", "Ouvea", "Niamey", "Norfolk Island", "Abuja", "Benin City", "Calabar", "Enugu", "Ibadan", "Ilorin", "Kaduna", "Kano", "Lagos", "Maiduguri", "Port Harcourt", "Port Harcourt City", "Owerri", "Warri", "Sokoto", "Yola", "Bluefields", "Managua", "Puerto Cabezas", "Corn Island", "Amsterdam", "Eindhoven", "Enschede", "Groningen", "Maastricht", "Rotterdam", "Schiphol Rail Station", "Utrecht", "Hague Holland Spoor Rail Station", "Aalesund", "Alta", "Andenes", "Bardufoss", "Bergen", "Batsfjord", "Bronnoysund", "Bodo", "Geilo", "Harstad-Narvik", "Forde", "Floro", "Gol", "Hasvik", "Haugesund", "Hammerfest", "Hamar", "Orsta-Volda", "Honningsvag", "Kirkenes", "Kristiansand", "Kristiansund", "Lakselv", "Leknes", "Longyearbyen", "Mehamn", "Mosjoen", "Molde", "Mo I Rana", "Narvik", "Orland", "Oslo", "Namsos", "Rost", "Roros", "Roervik", "Sandane", "Skien", "Stokmarknes", "Sogndal", "Sorkjosen", "Stord", "Sandnessjoen", "Stavanger", "Svolvaer", "Tromso", "Trondheim", "Vardoe", "Fagernes", "Vadso", "Vaeroy", "Arendal Rail Station", "Flam Rail Station", "Andalsnes Rail Station", "Dombas Rail Station", "Gjerstad Rail Station", "Asker Rail Station", "Honefoss Rail Station", "Nelaug Rail Station", "Arna Rail Station", "Alvdal Rail Station", "Kongsberg Rail Station", "Sandnes Rail Station", "Halden Rail Station", "Rena Rail Station", "Fredrikstad Rail Station", "Grong Rail Station", "Lillestrom Rail Station", "Steinkjer Rail Station", "Larvik Rail Station", "Moss Rail Station", "Finse Rail Station", "Porsgrunn Rail Station", "Sarpsborg Rail Station", "Tonsberg Rail Station", "Vinstra Rail Station", "Drammen Rail Station", "Bryne Rail Station", "Oppdal Rail Station", "Myrdal Rail Station", "Sira Rail Station", "Otta Rail Station", "Egersund Rail Station", "Elverum Rail Station", "Heimdal Rail Station", "Holmestrand Rail Station", "Levanger Rail Station", "Lysaker Rail Station", "Moelv Rail Station", "Nesbyen Rail Station", "Neslandsvatn Rail Station", "Nordagutu Rail Station", "Ringebu Rail Station", "Skoppum Rail Station", "Snartemo Rail Station", "Stjordal Rail Station", "Storekvina Rail Station", "Storen Rail Station", "Ustaoset Rail Station", "Voss Rail Station", "Bo Rail Station", "Vennesla Rail Station", "Verdal Rail Station", "Lillehammer Rail Station", "Al Rail Station", "Kongsvinger Rail Station", "Hjerkinn Rail Station", "Koppang Rail Station", "Ski Rail Station", "Tynset Rail Station", "Bjerka Rail Station", "Brumunddal Rail Station", "Drangedal Rail Station", "Stavanger Rail Station", "Haugastol Rail Station", "Rognan Rail Station", "Fauske Rail Station", "Rygge Rail Station", "Rade Rail Station", "Sandefjord Rail Station", "Vegarshei Rail Station", "Sandvika Rail Station", "Marnardal Rail Station", "Nationaltheatret Rail Station", "Bhadrapur", "Bharatpur", "Biratnagar", "Dolpa", "Simikot", "Jomsom", "Jumla", "Nepalganj", "Kathmandu", "Lamidanda", "Lukla", "Meghauli", "Mountain", "Pokhara", "Phaplu", "Rukumkot", "Rumjatar", "Simara", "Surkhet", "Tumlingtar", "Taplejung", "Nauru Island", "Niue", "Auckland", "Blenheim", "Christchurch", "Chatham Island", "Dunedin", "Hokitika", "Hamilton", "Invercargill", "Kerikeri", "New Plymouth", "Nelson", "Nelson", "Oamaru", "Palmerston North", "Rotorua", "Timaru", "Taupo", "Whakatane", "Wanaka", "Wellington", "Whangarei", "Queenstown", "Khasab", "Muscat", "Barka", "Nizwa", "Sohar", "Sur", "Salalah", "Bocas del Toro", "Panama city", "Andahuaylas", "Arequipa", "Ayacucho", "Chiclayo", "Cajamarca", "Cuzco", "Iquitos", "Juliaca", "Lima", "Pucallpa", "Puerto Maldonado", "Piura", "Tumbes", "Tacna", "Tarapoto", "Trujillo", "Talara", "Anaa", "Ahe", "Apataki", "Atuona", "Arutua", "Bora Bora", "Fakarava", "Gambier Island", "Hao Island", "Huahine", "Kauehi", "Kaukura Atoll", "Katiu", "Maupiti Island", "Makemo", "Moorea", "Mataiva", "Napuka Island", "Nuku Hiva", "Puka Puka", "Papeete", "Raiatea Island", "Rangiroa Island", "Rimatara", "Rurutu", "Rairua", "Tikehau Atoll", "Takapoto", "Takaroa", "Tubuai", "Ua Huka", "Ua Pou", "Manihi", "Wanigela", "Namatanai", "Awaba", "Buka", "Kundiawa", "Daru", "Goroka", "Gasmata", "Alotau", "Mount Hagen", "Hoskins", "Nissan Island", "Jacquinot Bay", "Kandrian", "Kokoda", "Kerema", "Kikori", "Kamusi", "Kavieng", "Lae", "Lake Murray", "Lihir Island", "Losuia", "Madang", "Manus Island", "Mendi", "Misima Island", "Moro", "Obo", "Balimo", "Popondetta", "Port Moresby", "Rabaul", "Suki", "Tadji", "Tabubil", "Tufi", "Tari", "Kiunga", "Vanimo", "Baimuru", "Wapenamanda", "Wipim", "Wewak", "Baguio", "Bacolod", "Basco", "Butuan", "Cotabato", "Cebu", "Camiguin", "Cagayan De Oro", "Dumaguete", "Dipolog", "Davao", "El Nido", "General Santos", "Iloilo", "Jolo", "Laguna", "Laoag", "Legazpi", "Masbate", "Manila", "Marinduque", "Lucena", "Makati", "Misamis Occidental", "Pagsanjan", "Pagudpud", "Palawan", "Pampanga", "Pangasinan", "Ortigas", "Puerto Galera", "Quezon City", "Rizal", "Romblon", "Samar", "Siargao", "Tarlac", "Vigan", "Negros Occidental", "Cabanatuan", "Bataan", "Tagaytay", "The Fort, Taguig", "Pasig", "Mindoro", "Alabang", "Albay", "Kalibo, Aklan", "Quezon Province", "Bago City", "Batanes", "Batangas", "Bohol", "Boracay", "Cavite", "Dapitan", "Guimaras", "La Union", "Roxas City", "Taytay Sandoval", "Subic", "Siquijor", "Surigao", "Tacloban", "Tuguegarao", "Tawitawi", "Busuanga", "Virac", "Naga", "Zamboanga", "Bahawalpur", "Chitral", "Dalbandin", "Dera Ghazi Khan", "Dera Ismail Khan", "Gilgit", "Gwadar", "Islamabad", "Jacobabad", "Skardu", "Karachi", "Lahore", "Faisalabad", "Mohenjodaro", "Multan", "Peshawar", "Panjgur", "Pasni", "Zhob", "Rahim Yar Khan", "Saidu Sharif", "Sukkur", "Sui", "testing", "Turbat", "Quetta", "Bydgoszcz", "Gdansk", "Zielona Gora", "Krakow", "Katowice", "Lodz", "Koszalin", "Poznan", "Kolobrzeg Bus Station", "Rzeszow", "Szczecin", "Warsaw", "Wroclaw", "Aguadilla", "Culebra", "Mayaguez", "Ponce", "San Juan", "Vieques", "Corvo Island", "Faro", "Algarve", "Flores Island", "Funchal", "Graciosa Island", "Horta", "Lisbon", "Porto", "Ponta Delgada", "Pico Island", "Sao Jorge Island", "Santa Maria (XB)", "Terceira", "Koror", "Ciudad del Este", "Asuncion", "Doha", "St Denis de la Reunion", "St Pierre de la Reunion", "Baia Mare", "Bacau", "Bucharest", "Cluj", "Constanta", "Craiova", "Iasi", "Oradea", "Sibiu", "Suceava", "Satu Mare", "Tirgu Mures", "Timisoara", "Anapa", "Abakan", "Adler/Sochi", "Arkhangelsk", "Astrakhan", "Barnaul", "Blagoveschensk", "Bratsk", "Cherepovets", "Chelyabinsk", "Chokurdah", "Cheboksary", "Cherskiy", "Anadyr", "Belgorod", "Eniseysk", "Elista", "Magadan", "Nizhniy Novgorod", "Groznyj", "Khanty-Mansiysk", "Chita", "Hatanga", "Igarka", "Tiksi", "Irkutsk", "Kemerovo", "Kaliningrad", "Kogalym", "Khabarovsk", "Krasnoyarsk", "Kurgan", "Krasnodar", "Samara", "Komsomolsk Na Amure", "Kyzyl", "Kazan", "Saint Petersburg", "Lipetsk", "Makhachkala", "Mirnyj", "Murmansk", "Moscow", "Magnitogorsk", "Mineralnye Vody", "Nalchik", "Nizhnekamsk", "Neryungri", "Nizhnevartovsk", "Naryan-Mar", "Nojabrxsk", "Novokuznetsk", "Norilsk", "Novy Urengoy", "Nyagan", "Nadym", "Vladikavkaz", "Okhotsk", "Omsk", "Orsk", "Novosibirsk", "Sovetsky", "Perm", "Petrozavodsk", "Penza", "Petropavlovsk-Kamchats", "Raduzhnyi", "Orenburg", "Rostov", "Saratov", "Syktyvkar", "Surgut", "Salekhard", "Stavropol", "Ekaterinburg", "Tambov", "Tyumen", "Plastun", "Tomsk", "Ukhta", "Ufa", "Ulyanovsk", "Uraj", "Kursk", "Usinsk", "Bugulma", "Ulan-Ude", "Yuzhno-Sakhalinsk", "Volgograd", "Voronezh", "Vladivostok", "Yakutsk", "Kigali", "Kamembe", "Al-Baha", "Abha", "Jouf", "Qaisumah", "Bisha", "Dammam", "Dawadmi", "Nejran", "Wedjh", "Gassim", "Jazan", "Hail", "Hafr Albatin", "Alahsa", "Jeddah", "King Khalid Military City", "Madinah", "Arar", "Rafha", "Riyadh", "Sharurah", "Taif", "Turaif", "Tabuk", "Gurayat", "Wadi Ad Dawasir", "Yanbu", "Afutara", "Auki", "Atoifi", "Avu Avu", "Balalae", "Bellona", "Choiseul Bay", "Sege", "Fera Island", "Gatokae", "Gizo", "Honiara", "Kirakira", "Jajao", "Kagau", "Mbambanakira", "Mono", "Munda", "Star Harbour", "Santa Ana Island", "Ramata", "Arona", "Rennell", "Marau Island", "Santa Cruz Island", "Suavanao", "Praslin", "La Digue", "Sainte Anne", "Mahe", "Atbara", "Dongola", "El Obeid", "Geneina", "El Fasher", "Juba", "Khartoum", "Kassala", "Malakal", "Port Sudan", "Rumbek", "Nyala", "Wadi Halfa", "Angelholm/Helsingborg", "Arvidsjaur", "Borlange/Falun", "Sveg", "Gallivare", "Gothenburg", "Gavle", "Halmstad", "Hagfors", "Hemavan", "Hudiksvall", "Jonkoping", "Landskrona", "Kristianstad", "Kalmar", "Kramfors", "Kiruna", "Karlstad", "Skovde", "Lulea", "Linkoping", "Lycksele", "Malmo", "Mora", "Norrkoping", "Ornskoldsvik", "Orebro", "Ostersund", "Oskarshamn", "Uppsala C Rail Station", "Ronneby", "Sundsvall", "Skelleftea", "Soderhamn", "Stockholm", "Trollhattan", "Torsby", "Umea", "Visby", "Vilhelmina", "Vaxjo", "Sodertalje South Rail Station", "Strangnas Rail Station", "Eskilstuna C Rail Station", "Tierp Rail Station", "Lund C Rail Station", "Falun Rail Station", "Karlskrona Rail Station", "Hallsberg Rail Station", "Hassleholm Rail Station", "Enkoping Rail Station", "Orebro-Bofors Rail Station", "Varberg Rail Station", "Nassjo Rail Station", "Nykoping Rail Station", "Alvesta Rail Station", "Degerfors Rail Station", "Koping Rail Station", "Katrineholm Rail Station", "Mjolby Rail Station", "Kil Rail Station", "Leksand Rail Station", "Arboga Rail Station", "Hedemora Rail Station", "Kumla Rail Station", "Sundsvall Rail Station", "Borlange Rail Station", "Herrljunga Rail Station", "Falkoping Rail Station", "Helsingborg Rail Station", "Flen Rail Station", "Norrkoping Rail Station", "Falkenberg Rail Station", "Kristinehamn Rail Station", "Avesta Krylbo Rail Station", "Angelholm Rail Station", "Sala Rail Station", "Arvika Rail Station", "Harnosand Rail Station", "Singapore - ATE", "Singapore", "Ljubljana", "Bratislava", "Zilina", "Kosice", "Sliac", "Poprad/Tatry", "Freetown", "Cap Skirring", "Dakar", "St Louis (SN)", "Ziguinchor", "Berbera", "Bossaso", "Burao", "Galcaio", "Hargeisa", "Mogadishu", "Paramaribo", "Principe Island", "Sao Tome Island", "San Salvador (SV)", "Aleppo", "Damascus", "Kameshli", "Manzini", "Grand Turk", "Middle Caicos", "North Caicos", "Providenciales", "Salt Cay", "South Caicos", "Abecher", "Ndjamena", "Lome", "Bangkok", "Chiang Rai", "Chiang Mai", "Hat Yai", "Mae Hong Son", "Hua Hin", "Phuket", "Krabi", "Khon Kaen", "Nakhon Phanom", "Loei", "Lampang", "Nakhon Ratchasima", "Narathiwat", "Nan", "Nakhon Si Thammarat", "Pattaya", "Chonburi", "Roi Et", "Sakon Nakhon", "Koh Lanta", "Koh Phangan", "Koh Samed", "Koh Tao", "Nong Khai", "Petchaboon", "Phang-Nga", "Phi Phi Island", "Phitsanuloke", "Pranburi", "Rayong", "Samut Songkram", "Satun", "Sa Kaeo", "Surin", "Tak", "Uthaithani", "Nakhon Pathom", "Nonthaburi", "Koh Kood", "Koh Mak", "Trat", "Ayuthaya", "Cha Am", "Chanthaburi", "Chumphon", "Kamphaengpet", "Kanchanaburi", "Khao Lak", "Khao Yai", "Koh Chang", "Sukhothai", "Trang", "Ubon Ratchathani", "Ranong", "Koh Samui", "Udon Thani", "Utapao", "Dushanbe", "Khudzhand", "Ashgabat", "Djerba", "Monastir", "Sfax", "Tozeur", "Tunis", "Eua", "Ha'apai", "Niuafo'ou", "Niuatoputapu", "Nuku'alofa", "Vava'u", "Adana", "Adiyaman", "Agri", "Ankara", "Kayseri", "Antalya", "Batman", "Bodrum", "Canakkale", "Diyarbakir", "Dalaman", "Denizli", "Edremit/Korfez", "Erzincan", "Erzurum", "Elazig", "Gaziantep", "Istanbul", "Izmir", "Kahramanmaras", "Kars", "Konya", "Malatya", "Mardin", "Mus", "Nevsehir", "Sanliurfa", "Samsun", "Abant & Bolu", "Black Sea", "Cappadocia", "Mersin", "Yalova", "Trabzon", "Usak", "Sivas", "Bursa", "Port of Spain", "Tobago", "Funafuti Atol", "Chiayi", "Hengchun", "Hualien", "Kaohsiung", "Kinmen", "Matsu", "Makung", "Pingtung", "Taichung", "Taoyuan", "Tainan", "Taipei", "TaiTung", "Bukoba", "Dar Es Salaam", "Kilimanjaro", "Lindi", "Mbeya", "Musoma", "Mwanza", "Mtwara", "Pemba (TZ)", "Songea", "Shinyanga", "Tabora", "Kigoma", "Zanzibar", "Chernovtsy", "Dnepropetrovsk", "Donetsk", "Kharkov", "Kiev", "Ivano-Frankovsk", "Kherson", "Krivoy Rog", "Lviv", "Mariupol", "Nikolaev", "Odessa", "Zaporozhye", "Simferopol", "Uzhgorod", "Lugansk", "Entebbe/Kampala", "Moyo", "Arua", "Gulu", "Allentown/Bethlehem/Easton", "Abilene", "Ambler", "Albuquerque", "Aberdeen (US)", "Albany (US) GA", "Nantucket", "Waco", "Arcata/Eureka", "Adak Island", "Kodiak", "Allakaket", "Alexandria (US)", "Angoon", "Augusta (US) GA", "Herlong", "Athens (US)", "Alliance", "Wainwright", "Atka", "Akiak", "King Salmon", "Albany (US) NY", "Alamogordo", "Waterloo", "Alamosa", "Walla Walla", "Alitak", "Amarillo", "Anchorage", "Aniak", "Anvik", "Altoona", "Amook", "Naples (US)", "Alpena", "Arctic Village", "Watertown (US) NY", "Aspen", "Atqasuk", "Atlanta", "Atmautluak", "Appleton", "Watertown (US) SD", "Augusta (US) ME", "Alakanuk", "Austin", "Wausau", "Asheville", "Wilkes-Barre", "Kalamazoo", "Bridgeport", "Bedford/Hanscom", "Bethel", "Bradford (US)", "Scottsbluff", "Bakersfield", "Binghamton", "Bangor", "Bar Harbor", "Birmingham (US)", "Big Creek", "Block Island", "Billings", "Bismarck", "Bemidji", "Buckland", "Beckley", "Brookings", "Boulder City", "Bluefield", "Bellingham", "Belleville", "Bloomington-Normal", "Nashville", "Boise", "Boston", "Bartow", "Beaumont", "Brainerd", "Burlington (US) IA", "Brownsville", "Barrow", "Bartletts", "Barter Island", "Battle Creek", "Butte", "Baton Rouge", "Bettles", "Burlington (US) VT", "Buffalo", "Burbank", "Baltimore", "Bozeman", "Akron/Canton", "Cold Bay", "Cedar City", "Chadron", "Cordova", "Caldwell", "Crescent City", "Central", "Cortez", "Coffee Point", "Craig", "Cape Girardeau", "Chattanooga", "Chicago", "Charlottesville", "Charleston (US) SC", "Chuathbaluk", "Cedar Rapids", "Chalkyitsik", "Clarksburg", "Crooked Creek", "Cleveland", "Clarks Point", "Charlotte", "Champaign", "Hancock", "Carlsbad", "Moab", "Cody", "Colorado", "Casper", "Corpus Christi", "Charleston (US) WV", "Cincinnati", "Clovis", "Chefornak", "Cheyenne", "Chisana", "Daytona Beach", "Dubuque", "Dodge City", "Decatur", "Denver", "Dallas", "Dothan", "Dickinson", "Diomede Island", "Dillingham", "Duluth/Superior", "Deering", "Durango (US)", "Del Rio", "Des Moines", "Detroit", "Dubois", "Dutch Harbor", "Devils Lake", "Eagle", "Kearney", "Wenatchee", "Eau Claire", "Edna Bay", "Eek", "Vail", "Egegik", "Cape Newenham", "Elko", "El Dorado", "Elim", "Elmira/Corning", "El Paso", "Elfin Cove", "Ely", "Emmonak", "Kenai", "Kenosha", "Erie", "Escanaba", "Eastsound", "Eugene", "Evansville", "Wildman Lake", "New Bern", "Newark", "Excursion Inlet", "Key West", "Fairbanks", "Fargo", "Fayetteville (US) NC", "Kalispell", "Franklin", "Flagstaff", "Fort Lauderdale", "Florence", "Farmington", "Fort Myers", "Flint", "Friday Harbor", "Sioux Falls", "Fort Smith (US)", "Fayetteville (US) AR", "Galena", "Gambell", "Great Bend", "Gillette", "Garden City", "Glendive", "Spokane", "Longview", "Glasgow (US)", "Grand Junction", "Greenville (US) MS", "Golovin", "Goodnews Bay", "Gainesville", "Gulfport/Biloxi", "Green Bay", "Greensboro/High Point", "Greenville (US) SC", "Gustavus", "Great Falls", "Gunnison", "Havasupai", "Harrisburg", "Holy Cross", "Hartford", "Hagerstown", "Hilton Head Island", "Hawthorne", "Hibbing/Chisholm", "Healy Lake", "Helena", "Hoonah", "Honolulu", "Hana", "Haines", "Hobbs", "Homer", "Huron", "Hot Springs", "Houston", "Hooper Bay", "Westchester County", "Harlingen", "Harrison", "Huslia", "Huntsville", "Huntington", "Hughes", "Havre", "Hyannis", "Hydaburg", "Hollis", "Hays", "Niagara Falls", "Kiana", "Wichita", "Idaho Falls", "Bullhead City", "Igiugig", "Kingman", "Nikolski", "Killeen", "Wilmington (US) DE", "Iliamna", "Wilmington (US) NC", "Wilmington", "Iron Mountain", "Indianapolis", "International Falls", "Imperial", "Williamsport", "Circle", "Kirksville", "Williston", "Kinston", "Long Island Macarthur", "Ithaca", "Hilo", "Ironwood", "Inyokern", "Jacksonville", "Jonesboro", "Kapalua", "Jamestown (US) NY", "Joplin", "Jamestown (US) ND", "Juneau", "Johnstown", "Kake", "Kaltag", "Birch Creek", "Coffman Cove", "Chignik", "Nanwalek", "Ekwok", "False Pass", "Koliganek", "Koyuk", "Kitoi Bay", "Kongiganak", "Akiachak", "Ekuk", "Kalskag", "Levelock", "Klawock", "Manokotak", "Moser Bay", "Kakhonak", "Kona", "Kotlik", "Olga Bay", "Ouzinkie", "Point Baker", "Kipnuk", "Perryville", "Akutan", "St Marys", "Thorne Bay", "Ketchikan", "Teller Mission", "Kasigluk", "King Cove", "Kivalina", "Waterfall", "Kwigillingok", "Quinhagak", "West Point", "Kwethluk", "Kasaan", "Karluk", "Koyukuk", "Zachar Bay", "Lansing", "Laramie", "Las Vegas", "Lawton", "Los Angeles", "Lubbock", "Latrobe", "North Platte", "Liberal", "Lebanon", "Lexington", "Lafayette", "Long Beach", "Kauai Island", "Little Rock", "Klamath Falls", "Lincoln", "Lancaster", "Lanai City", "Lopez Island", "Laredo", "La Crosse", "Laurel", "Kalaupapa", "Cape Lisburne", "Lewisburg", "Lewiston", "Lewistown", "Lynchburg", "Midland/odessa", "Manistee", "Saginaw", "Merced", "Mcgrath", "Mccook", "Macon", "Mason City", "Meridian", "Memphis", "Mcallen", "Medford", "Montgomery", "Morgantown", "Manhattan", "Manchester (US)", "Miami", "Kansas City", "Milwaukee", "Muskegon", "Hoolehua", "Melbourne (US)", "Moline", "Marshall", "Miles City", "Manley Hot Springs", "Mobile", "Modesto", "Mountain Village", "Marquette", "Muscle Shoals", "Madison", "Missoula", "Massena", "New Orleans", "Marathon", "Metlakatla", "Kamuela", "Martha's Vineyard", "Marion", "Mccall", "Myrtle Beach", "Mekoryuk", "Nikolai", "Naukiti", "Nelson Lagoon", "Nightmute", "Nondalton", "Nuiqsut", "Nulato", "Nunapitchuk", "New York", "Oakland", "Kobuk", "Ocala", "Oak Harbor", "Kahului", "Ogdensburg", "Oklahoma City", "Wolf Point", "Old Harbor", "Omaha", "Nome", "Ontario", "Toksook Bay", "Norfolk", "Orlando", "Noorvik", "North Bend", "Kotzebue", "Owensboro", "Oxnard/Ventura", "Ventura", "Paducah", "West Palm Beach", "Painter Creek", "Pedro Bay", "Pendleton", "Portland", "Pelican", "Panama City (US)", "Page", "Greenville", "Philadelphia", "Point Hope", "Phoenix", "Peoria", "St. Pete Beach", "Pocatello", "Pilot Point", "Pierre", "Pittsburgh", "Point Lay", "Napaskiak", "Parkersburg/Marietta", "Plattsburgh", "Pellston", "Palmdale AFB", "Pensacola", "Presque Isle", "Pilot Station", "Prescott", "Pasco", "Petersburg", "Palm Springs", "Platinum", "Pueblo", "Pullman", "Provincetown", "Providence", "Riverside", "Rapid City", "Ruby", "Roche Harbor", "Cinder River", "Red Dog", "Redding", "Redmond", "Raleigh/Durham", "Rhinelander", "Richmond (US)", "Riverton", "Rockland", "Rock Springs", "Rampart", "Reno", "Roanoke", "Rochester (US) NY", "Roswell", "Russian Mission", "Rosario (US)", "Rochester (US) MN", "Rutland", "Sacramento", "San Diego", "San Antonio", "Savannah", "South Bend", "Steamboat Springs", "Prudhoe Bay/Deadhorse", "State College", "Scammon Bay", "Louisville", "Sidney", "Seattle", "San Francisco", "Springfield (US) MA", "Springfield (US) MO", "St George (US)", "Skagway", "Staunton", "Shungnak", "Shishmaref", "Sheridan", "Shreveport", "Shageluk", "Sitka", "San Jose", "Shaktoolik", "Salt Lake City", "Saranac Lake", "Sleetmute", "St Michael", "Anaheim", "Santa Ana", "St Paul Island", "Southern Pines", "Seldovia", "Show Low", "Springfield", "Wichita Falls", "Sarasota/Bradenton", "Stony River", "Brunswick", "Sault Ste Marie (US)", "St Cloud", "St George Island", "St Louis (US)", "Sun Valley", "Sioux City", "Savoonga", "Silver City", "Stevens Village", "Newburgh", "Sheldon Point", "Syracuse", "Tanana", "Takotna", "Teterboro", "Tatitlek", "Telluride", "Tenakee", "Tok", "Teller", "Tallahassee", "Tatalina", "Tuluksak", "Tin City", "Tununak", "Togiak", "Toledo", "Topeka", "Tampa", "Tri-Cities Regional", "Tulsa", "Tupelo", "Tucson", "Traverse City", "Thief River Falls", "Twin Hills", "Twin Falls", "Texarkana", "Tyler", "Knoxville", "Columbus", "Uganik", "Quincy", "Unalakleet", "Chevak", "Blue Mountain", "Victoria (US)", "Valdez", "Venetie", "Vernal", "Visalia", "Valdosta", "Valparaiso", "Wales", "Washington", "Stebbins", "Beaver", "Aleknagik", "Selawik", "Meyers Chuck", "White Mountain", "Napakiak", "Wrangell", "Worland", "South Naknek", "Westerly", "Westsound", "Noatak", "Tuntutuliak", "Whale Pass", "West Yellowstone", "Rail (generic) Rail Station (US)", "Yakutat", "Yakima", "Youngstown", "Yuma", "Buffalo-depew Rail Station", "Richmond Rail Station", "Lancaster Rail Station (US)", "Providence Rail Station", "Schenectady Rail Station", "Rochester Ny Rail Station", "Westchester County Stamford Rail Stn", "Princeton Jct Rail Station", "Sturtevant Rail Station", "Utica Railway Station", "Glenview Rail Station", "Hampton Newport News Rail Station", "Syracuse Ny Railway Station", "Montevideo", "Punta del Este", "Zarafshan", "Andizhan", "Bukhara", "Fergana", "Karshi", "Nukus", "Namangan", "Navoi", "Samarkand", "Tashkent", "Termez", "Urgench", "Barcelona (VE)", "Barinas", "Barquisimeto", "Ciudad Bolivar", "Caracas", "Cumana", "Carupano", "Coro", "Elorza", "Guasdualito", "Las Piedras", "Maracaibo", "Merida (VE)", "Maturin", "Porlamar", "Puerto Ayacucho", "Puerto Ordaz", "San Fernando de Apure", "San Tome", "Santo Domingo (VE)", "San Antonio (VE)", "El Vigia", "Valencia (VE)", "Valera", "Ban Me Thuot", "Ca Mau", "Danang", "Dien Bien Phu", "Dalat", "Hanoi", "Hai Phong", "Hue", "Nha Trang", "Phu Quoc", "Ho Chi Minh", "Tuyhoa", "Quinhon", "Tamky", "Vinh City", "Can Tho", "Chau Doc", "Halong", "Hoi An", "Phan Thiet", "Sapa", "Vung Tau", "Aneityum", "Aniwa", "Craig Cove", "Dillons Bay", "Emae", "Futuna Island", "Ipota", "Lamen Bay", "Lonorore", "Longana", "Lamap", "Mota Lava", "Maewo", "Norsup", "Olpoi", "Paama", "Redcliffe", "Sola", "Espiritu Santo", "Sara", "South West Bay", "Tanna", "Tongoa", "Torres", "Ulei", "Port Vila", "Valesdir", "Walaha", "Gaua", "Futuna", "Wallis Island", "Apia", "Al Ghaydah", "Aden", "Seiyun", "Hodeidah", "Riyan Mukalla", "Sanaa", "Socotra", "Taiz", "Dzaoudzi", "Mala Mala", "Bloemfontein", "Cape Town", "Durban", "East London", "George", "Hoedspruit", "Lanseria", "Johannesburg", "Kimberley", "Mmabatho", "Margate", "Nelspruit", "Sun City", "Phalaborwa", "Port Elizabeth", "Polokwane", "Pietermaritzburg", "Richards Bay", "Upington", "Umtata", "Chipata", "Kitwe", "Lusaka", "Livingstone", "Mfuwe", "Ndola", "Solwezi", "Bulawayo", "Harare", "Kariba"
    ];
    <?php
$sql="SELECT * FROM fle_hotels";
$rows = $wpdb->get_results($sql);

foreach ($rows as $row) {
    $a.=', "'.$row->hotelname.' - Hotel"';
}
$array_hotels= substr($a,1) ;

?>
    var hotelname = [<?php echo $array_hotels; ?>];
    
    $( "#cityname" ).autocomplete({
      source: cityname.concat(hotelname)
    });

    $("#CheckIndate").datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0,
        onSelect: function (date) {
            var date2 = $('#CheckIndate').datepicker('getDate');
            date2.setDate(date2.getDate() + 1);
            $('#CheckoutDate').datepicker('setDate', date2);
            //sets minDate to CheckIndate date + 1
            $('#CheckoutDate').datepicker('option', 'minDate', date2);
        }
    });
    $('#CheckoutDate').datepicker({
        dateFormat: "dd-M-yy",
        onClose: function () {
            var CheckIndate = $('#CheckIndate').datepicker('getDate');
            var CheckoutDate = $('#CheckoutDate').datepicker('getDate');
            //check to prevent a user from entering a date below date of CheckIndate
            if (CheckoutDate <= CheckIndate) {
                var minDate = $('#CheckoutDate').datepicker('option', 'minDate');
                $('#CheckoutDate').datepicker('setDate', minDate);
            }
        }
    });

    $("#search-main-form").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#hotel-search-btn").on('click', function(event){
        event.preventDefault();
        var data = $("#search-main-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#search-main-form").valid()) return false;  
            window.location = '/fernleaf/?page_id=1108&' + data;
    });

    
    
    $("#search-flight-form").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#flight-search-btn").on('click', function(event){
        event.preventDefault();
        var data = $("#search-flight-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#search-flight-form").valid()) return false;  
            window.location = '/fernleaf/?page_id=1111&' + data;
    });

     $("#multistop").on('change', function(event){
        event.preventDefault();
        var data = $("#search-flight-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#search-flight-form").valid()) return false;  
            window.location = '/fernleaf/?page_id=1125&' + data;
    });

    $("#search-tours-form").validate();

  //   //http://localhost/fernleaf/?page_id=1052
    $("#tours-search-btn").on('click', function(event){
        event.preventDefault();
        var data = $("#search-tours-form").serialize();
        //window.location = '/fernleaf/?page_id=1052&' + data;
        //
        if(!$("#search-tours-form").valid()) return false;  
            window.location = '/fernleaf/?page_id=1119&' + data;
    });

})(jQuery);

</script>
<script type="text/javascript">
jQuery(document).ready(function () {
//function setcityUserControlDisplayQuickSearch_UCDQuickSearchPackageLandTour_UCDInputCountryCityDropDown()
//{
    var defaultOption;
    defaultOption=jQuery("<option value='0'>Loading..</option>")
    jQuery(defaultOption).appendTo(jQuery("#UserControlDisplayQuickSearch_UCDQuickSearchPackageLandTour_UCDInputCountryCityDropDown_DropDownList_CountryCity"))
                        
    jQuery.ajax({
        url: "http://atws.asiatravel.com/quicksearchws/JSONP-EndPoint.asmx/GetCityList",
        type: 'GET',
        data: { startswith: JSON.stringify(""),
                prd: JSON.stringify("package"),
                tp : JSON.stringify("TUR"), 
                code : JSON.stringify("null"), 
                culture : JSON.stringify("en-US"), 
                partnerid : JSON.stringify("1000") },
        dataType: 'jsonp',
        error: function(req,stat,err){
            alert(err);
        },
        success: function (data){
                var curOption;
                var currCategory = '';
                            
                jQuery("#UserControlDisplayQuickSearch_UCDQuickSearchPackageLandTour_UCDInputCountryCityDropDown_DropDownList_CountryCity").html("");
                            
                curOption=jQuery("<option value='0'>" + "Select Destination" + "</option>")
                jQuery(curOption).appendTo(jQuery("#UserControlDisplayQuickSearch_UCDQuickSearchPackageLandTour_UCDInputCountryCityDropDown_DropDownList_CountryCity"))

                jQuery.map(data, function(item) {
                    if (item.CountryCode != currCategory) 
                    {
                        curOption = jQuery("<optgroup class='cnopt' name='" + item.CountryCode + "' label='" + item.CountryName + "'></optgroup>")
                        jQuery(curOption).appendTo(jQuery("#UserControlDisplayQuickSearch_UCDQuickSearchPackageLandTour_UCDInputCountryCityDropDown_DropDownList_CountryCity"))
                        currCategory = item.CountryCode;
                    }
                    curOption = jQuery("<option  class='ctopt' value='" + item.CountryCode + ',' + item.CityCode + "'>" + item.CityName + "</option>")
                    jQuery(curOption).appendTo(jQuery("#UserControlDisplayQuickSearch_UCDQuickSearchPackageLandTour_UCDInputCountryCityDropDown_DropDownList_CountryCity optgroup[name='" + item.CountryCode + "']"))
                })
        }
    });
//}
});

</script>

<?php get_footer(); ?>